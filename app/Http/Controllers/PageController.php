<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workshop;
use App\Competence;

class PageController extends Controller
{
  public function home()
  {
  	$workshops = Workshop::all();
    $competences = Competence::all();
    return view('home', compact('workshops','competences'));
  }

  public function team()
  {
    return view('team');
  }

  public function contact()
  {
  	return view('contact');
  }
}