@extends('layouts.app')

@section('content')
<div class="container intake dashboard">
  <div class="panel panel-default">
    <div class="panel-body">
    	<h1>Dashboard {{$group->name}}</h1>

			@if (Session::has('message'))
				<div class="alert alert-success">{{ Session::get('message') }}</div>
			@endif

			<div class="row">
				<div class="col-md-12">
					<h2>Groepsleden</h2>
					<div class="content">
						<table class="table table-striped">
							<tr><th>Groepslid</th><th>E-mail</th><th>Status</th></tr>
							@foreach($members as $member)
								<tr>
									<td><i class="fa fa-user fa-5" aria-hidden="true">{{$member->name}}</i></td>
									<td>{{$member->email}}</td>
									<td>Status: {{$member->status === 0 ? "Nog niet Bevestigd" : "Bevestigd" }}<br></td>
								</tr>
								
							@endforeach	
						</table>		
						<h2>Test Completion</h2>
						<div class="content">
							<p>Je hebt de test nog niet gedaan!</p>
							<a href="{{ route('intake_test', ['hash' => $group->hash, 'email' => $member->email])}}" class="btn button grey large">Start de intake</a>
						</div>

					</div>
				</div>
			</div>
    </div> 
 </div>
@endsection