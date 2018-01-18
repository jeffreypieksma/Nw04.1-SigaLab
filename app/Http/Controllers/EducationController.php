<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Education;
use App\Competence;

class EducationController extends Controller
{
	public function index()
  {
  	$educations = Education::with('competences')->get();
    return view('admin.educations.index', compact('educations'));
  }

  //Not sure if working 
  public function read($id){
  	$education = Education::find($id)->competences->all();
  	return view('admin.educations.read', compact('education'));
  }

   //Not sure if working 
  public function create_education_form(){
  	$competences = Competence::all();
  	return view('admin.educations.create',compact('competences'));
  }
  public function create(Request $request)
  {
  	$this->validate($request, [
			'name'    			=> 'required|max:30',
      'competences'   => 'required'
		]);

		$eductation = new Education();
		$eductation->name = $request->name;
		$eductation->save();

		$competences = $request->competences;
		$eductation->competences()->attach($competences);
   
    Session::flash('message', 'Opleiding aangemaakt!');
    return redirect()->route('admin_educations');
  }

}
