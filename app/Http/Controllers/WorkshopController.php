<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Workshop;
use App\Competence;

class WorkshopController extends Controller
{
	public function index()
  {
    $workshops = Workshop::all();
    return view('admin.workshops.index', compact('workshops'));
  }

  public function create_workshop_form()
  {
    $competences = Competence::all();;
    return view('admin.workshops.create', compact('competences'));
  }

  public function update_workshop_form($id)
  {
    $workshop = Workshop::findOrFail($id);
    $competences = Competence::all();
    $selected_competences = $workshop->competences()->get();
    foreach($selected_competences as $c) $s_competences[] = $c->id;
   
    return view('admin.workshops.update', compact('workshop','competences','s_competences'));
  }

  public function readWorkshops()
  {
    $workshops = Workshop::all();
    return view('workshops.index', compact('workshops'));
  }

  public function read($id)
  {
    //$workshops = Workshop::all();
    $workshop = Workshop::findOrFail($id);
    return view('workshops.read', compact('workshop','workshops'));
  }

  public function create(Request $request)
  {
  	$workshop = new Workshop(); 

  	$this->validate($request, [
			'name'    			=> 'required|max:30',
			'description'   => 'required',
      'competences'   => 'required',
			'length'    		=> 'required',
			'participants'  => 'required',
			'application'   => 'required|max:100',
			'file'      		=> 'required|mimes:jpeg,jpg,png|max:1000',
		]);

    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads/workshops','public');
      $workshop->imageUrl = $path;
    }  
  	 
    $workshop->name = $request->name;
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;
    
    $workshop->save();

    $competences = $request->competences;
    $workshop->competences()->attach($competences);

    Session::flash('message', 'Workshop aangemaakt!');
    return redirect()->route('admin_workshops');
  }

  public function update(Request $request)
  {
    
    $this->validate($request, [
      'name'          => 'required|max:30',
      'description'   => 'required',
      'length'        => 'required',
      'participants'  => 'required',
      'application'   => 'required|max:100',
      'file'          => 'mimes:jpeg,jpg,png|max:1000',
    ]);
    
    $workshop = Workshop::findOrFail($id = $request->id); 
    $workshop->name = $request->name;
    $workshop->description = $request->description;
    $workshop->length = $request->length;
    $workshop->participants = $request->participants;
    $workshop->application = $request->application;

    if($request->hasFile('file'))
    {
      $request->file('file');
      $path = $request->file->store('storage/uploads/workshops','public');
      Storage::disk('public')->delete($workshop->imageUrl);
      
      $workshop->imageUrl = $path; 

    }

    $workshop->save();
    $competences = $request->competences;
    
    $workshop->competences()->detach($competences); 
    $workshop->competences()->attach($competences);

    Session::flash('message', 'Workshop gewijzigd!');
    return redirect()->route('admin_workshops');

  }

  public function delete($id)
  {
    $workshop = Workshop::find($id);
    $competences = $workshop->competences()->get();

    $img = $workshop->imageUrl; 
    Storage::disk('public')->delete($img);

    $workshop->competences()->detach($competences); 
    $workshop->delete();

    Session::flash('message', 'Workshop verwijderd!');
    return redirect()->route('admin_workshops');
  }
}
