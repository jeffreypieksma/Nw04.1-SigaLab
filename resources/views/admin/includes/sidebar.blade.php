<div class="sidebar">
	<div class="title">
		{{ config('app.name', 'SigaLab') }}
	</div>
	<div class="heading">
		{{-- <a class="navbar-brand" href="{{ url('/admin') }}">
	    {{ config('app.name', 'SigaLab') }}
		</a> --}}

		<div class="user-name">Welkom: {{ Auth::user()->name }} </div>
		{{-- <div class="user-email">{{ Auth::user()->email }} </div> --}}
	</div>

  <ul class="menu-items">

		<li class="{{ (\Request::route()->getName() == 'admin_dashboard') ? 'active' : '' }}">
			<a href="{{route('admin_dashboard')}}" class="{{ (\Request::route()->getName() == 'admin_dashboard') ? 'active' : '' }}">
				<i class="fa fa-tachometer" aria-hidden="true"></i><span class="text">Dashboard</span>
			</a>
		</li>

		<li class="{{ (\Request::route()->getName() == 'admin_educations') ? 'active' : '' }}">
			<a href="{{route('admin_educations')}}" class="{{ (\Request::route()->getName() == 'admin_educations') ? 'active' : '' }}">	
			<i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="text">Opleidingen</span></a>
		</li>

		<li class="{{ (\Request::route()->getName() == 'admin_workshops') ? 'active' : '' }}">
			<a href="{{route('admin_workshops')}}" class="{{ (\Request::route()->getName() == 'admin_workshops') ? 'active' : '' }}">
			<i class="fa fa-list-alt" aria-hidden="true"></i><span class="text">Workshops</span></a>
		</li>

		<li class="{{ (\Request::route()->getName() == 'admin_users') ? 'active' : '' }}">
			<a href="{{route('admin_users')}}" class="{{ (\Request::route()->getName() == 'admin_users') ? 'active' : '' }}">
			<i class="fa fa-user-o" aria-hidden="true"></i><span class="text">Gebruikers</span></a>
		</li>

		<li class="{{ (\Request::route()->getName() == 'admin_competences') ? 'active' : '' }}">
			<a href="{{route('admin_competences')}}" class="{{ (\Request::route()->getName() == 'admin_competences') ? 'active' : '' }}">
				<i class="fa fa-handshake-o" aria-hidden="true"></i><span class="text">Competenties</span></a>
		</li>

{{-- 		<li class="{{ (\Request::route()->getName() == 'admin_questionnaires') ? 'active' : '' }}">
			<a href="{{route('admin_questionnaires')}}" class="{{ (\Request::route()->getName() == 'admin_questionnaires') ? 'active' : '' }}">
				<i class="fa fa-question" aria-hidden="true"></i><span class="text">Vragenlijst</span></a>
		</li> --}}

  </ul>  
</div>
