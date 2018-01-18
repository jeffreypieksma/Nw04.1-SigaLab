@extends('layouts.app')

@section('content')
<div class="container intake welcome">
  <div class="panel panel-default">
    <div class="panel-body">
			<div class="row">

				<div class="col-md-12 text-center">
					
					<div class="content">
						<h1>Beste {{$member->name}},</h1>
						<div style="font-size:18px;">
							<p>Jij bent uitgenodigd bij het SigaLab om een workshop te volgen.</p>
						 	<p>Deze uitnodiging is verstuurd door {{$group->owner_name}}.</p>
						 	<br>



{{-- 						<h3>Tijdens deze sessie leer je de volgende vaardigheden.</h3>
						<div class="row text-center competences">
			        <h1>Vaardigheden</h1>
			        @foreach($competences as $competence)
			            <div class="col-md-3 col-xs-3 competence">
			                <div class="icon"></div>
			                <div class="title">{{$competence->name}}</div>              
			            </div>
			        @endforeach
			    </div> --}}

					<p style="font-size:18px;">Graag zouden we je nog wat vragen willen stellen over de samenwerking binnen jullie team.</p><br><br>

					<a href="{{ route('intake_test', ['hash' => $group->hash, 'email' => $member->email])}}" class="btn button large grey">Start de test</a>

					<a href="{{ route('dashboard_intake', ['hash' => $group->hash, 'email' => $member->email])}}" class="btn button large grey">Dashboard</a>

					</div>

				</div>
			</div>
    </div> 
  </div>
</div>
@endsection