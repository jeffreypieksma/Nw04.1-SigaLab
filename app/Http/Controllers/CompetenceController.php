<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Competence;
use App\Workshop;
use Session;

class CompetenceController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

  //All competences from DB to view
	public function index(){
		$competences = Competence::all();
		return view('admin.competences.index', compact('competences'));
	}

  //Competence form with workshops from DB 
	public function create_competence_form()
  {
    $workshops = Workshop::all();
    return view('admin.competences.create', compact('workshops'));
  }

  //Competence update form with with competence and workshops.
  //Related workshops to the competences are put in an array to set in the view to be selected
  public function update_competence_form($id)
  {
    $workshops = Workshop::all();
    $competence = Competence::findOrFail($id);
    $selected_workshops = $competence->workshops()->get();
    foreach($selected_workshops as $workshops) $s_workshops[] = $workshops->id;

    return view('admin.competences.update', compact('competence','s_workshops','workshops'));
  }

  //Get specific competences from DB and send to view. 
  public function read($id)
  {
    $competence = Competence::findOrFail($id);
    return view('competences.read', compact('competence'));
  }

  //Store a competence with workshops in the database 
  public function create(Request $request)
  {
		$competence = new Competence(); 
    //The validation function validates the incoming HTTP Request with laravel validators. 
  	$this->validate($request, [
			'name' => 'required|min:2|max:30',
			'file' => 'mimes:jpeg,jpg,png|max:1000',
		]);

    //The competence image is stored inside the directory: \public\storage\uploads.
    //The file store function stores the uploaded file inside the directory. 
    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads/competences','public');
      $cometence->imageUrl = $path;
    }  
  	 
    $competence->name = $request->name;
    $competence->description = $request->description;
    $competence->description = $request->icon;
    //The competence save functions stores the object in the database. 
    $competence->save();
    $workshops = $request->workshops;
    //The Attach function saves the many to many relations bounded to the competence, in this case the selected workshops. 
    $competence->workshops()->attach($workshops);
    //The session flash method is savind the message data for only one HTTP Request to give the admin a succesfull message. 
    Session::flash('message', 'Competentie aangemaakt!');
    //The redirect route functions uses the named route in web.php
    return redirect()->route('admin_competences');  	
  }

  //The competence findOrFail function retrieves the record from the database
  //T

  public function update(Request $request)
  {
    $this->validate($request, [
      'name'          => 'required|min:2|max:30',
      'file'          => 'mimes:jpeg,jpg,png,pdf,gif|max:1000',
    ]);

    $id = $request->id;
    $competence = Competence::findOrFail($id);
    $competence->name = $request->name;
    $competence->description = $request->description; 
    $competence->save();

    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads/competences','public');
      Storage::disk('public')->delete($competence->imageUrl); 
      $competence->imageUrl = $path; 
    }

    $workshops = $request->workshops;
    //Delete all attached workshops from DB 
    $competence->workshops()->detach($workshops);
    //Attach al workshops to this competence
    $competence->workshops()->attach($workshops);

    Session::flash('message', 'Competentie gewijzigd!');
    return redirect()->route('admin_competences');

  }

  //Delete specific competence 
  public function delete($id)
  {
    $competence = Competence::find($id);
    $workshops = $competence->workshops()->get();

    $img = $competence->imageUrl; 
    //Delete image from storage
    Storage::disk('public')->delete($img);

    //Delete all attached workshops from DB 
    $competence->workshops()->detach($workshops); 
    //Delete competence from DB 
    $competence->delete();

    Session::flash('message', 'Competentie verwijderd!');
    return redirect()->route('admin_competences');
  }
}