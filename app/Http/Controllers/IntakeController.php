<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Member;
use App\Competence;
use App\User;
use Mail;
use Session;

class IntakeController extends Controller
{
  public function showDashboard($hash)
  {
    //Find the Unique hash in database, not found? Trow 404. 
    $group = Group::where('hash', $hash)->firstOrFail();
    //Find all members on this unique group. 
    if($group) $members = Member::where('group_id', $group->id)->get();
    return view('intake.dashboard',compact('group','members'));
  }

  public function showCreateForm()
  {
    return view('intake.create');
  }

  public function showTestForm()
  {
    return view('intake.test');
  }

  //When a member clicks on the invite e-mail this function will call. 
  public function showWelcomeForm($hash, $email)
  {
    $competences = Competence::all();
    $group = Group::where('hash', $hash)->firstOrFail();
    $member = Member::where('group_id', $group->id)->where('email', $email)->first();

    $this->invite($hash, $email);

    return view('intake.welcome',compact('group','member','competences'));
  }

  //In future Convert the member table to user table, because of duplicate data in DB. 
  public function create(Request $request)
  {
    $this->validate($request, [
			'owner_name'    => 'required|max:30',
			'owner_email'   => 'required|email',
      'group_name'    => 'required|max:50',
      'members.*.name'   =>'max:30',
      //'members.*.email'  =>'sometimes|email|nullable'
      'members.*.email'  =>'email'
		]);

    //Generate a random string for the unique group. 
		$randomHash = rtrim(base64_encode(md5(microtime())),"=");

    $group = new Group();
    $group->hash = $randomHash;
		$group->name = $request->group_name;
		$group->owner_name = $request->owner_name;
		$group->owner_email = $request->owner_email;
		$group->save();
		$group_id = $group->id;

    $data_owner = array(
      'subject' => 'SigaLab Intake',
      'group_name' => $request->group_name,
      'hash' => $randomHash,
      'email' => $request->owner_email,
      'name' => $request->owner_name
    );
    //loop trough all members and send invite emails. 
		foreach ($request->members as $member) {
	    $member_model = new Member();
	    $member_model->group_id = $group_id;
	    $member_model->name = $member['name'];
	    $member_model->email = $member['email'];    
	    $member_model->status = 0;
	    $member_model->save();

      //Old code 
      // $array_emails = array_map(function($member) { return $member['email']; }, $request->members);
      // $array_names = array_map(function($member) { return $member['name']; }, $request->members);
      // $emails = implode(", ", $array_emails);
      // $names = implode(", ", $array_names);

			$data = array(
				'subject' => 'Uitnodiging - SigaLab Intake',
				'group_name' => $request->group_name,
				'hash' => $randomHash,
				'email' => $member['email'],
        'name' => $member['name']
			);
      //Send emails to all invited members
      Mail::send('emails.invite', $data , function ($message) use ($data){
        $message->from('intake@sigalab.nl');
        $message->to($data['email']);
        $message->subject($data['subject']);
      });
    }
    //Send email to group owner, could also be a member with another role. 
    Mail::send('emails.created', $data_owner , function ($message) use ($data_owner){
      $message->from('intake@sigalab.nl');
      $message->to($data_owner['email']);
      $message->subject($data_owner['subject']);
    });

    Session::flash('message', 'Groep Succesvol aangemaakt!');
    //Redirect owner to dashboard 
    return redirect()->route('dashboard_intake', ['hash' => $data['hash'], 'email'=>$request->owner_email]);
  }
  
  //
  public function invite($hash, $email){
    $group = Group::where('hash', $hash)->firstOrFail();
    $group_hash = $group->hash;
    $group_name = $group->group_name;

    if(!empty($group)){
      $id = $group->id;
      //Find member by group
      $member = Member::where('group_id', $group->id)->where('email', $email)->first();
      $member_id = $member->id;
      $member_name = $member->name;
      $member_email = $member->email;

      if(!empty($member)){
        //Check if accepted invite
        if( $status = $member->status == 0){
         $member->status = 1;
         $member->save();

          $data = array(
            'hash' => $group_hash,
            'group_name' => $group_name,
            'email' => $member_email,
            'name' => $member_name
          );
          //Send confirmation e-mail
          Mail::send('emails.confirmation', $data , function ($message) use ($data){
            $message->from('intake@sigalab.nl');
            $message->to($data['email']);
            $message->subject('Bevestiging');
          });
          $session_message = 'E-mail succesvol bevestigd';
          Session::flash('message', $session_message);
          
        }
      }
    }
  }
}