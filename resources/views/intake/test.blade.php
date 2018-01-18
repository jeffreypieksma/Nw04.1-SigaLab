@extends('layouts.intake')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <div class="intake">
                <h1>Test vragen</h1>
                <p class="description">Lorem ipsum dolar sit amet</p>
                <form method="POST" action=""> 
                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

                    <div class="row">
                      <div class="col-md-2">
                        Dotted vertical timeline 
                      </div>
                      <div class="col-md-10">
                        <div class="form-group {{ $errors->has('owner_name') ? ' has-errors' : '' }}">
                            <label for="your-name">Motivatie</label>
                            <div class="radio">
                              <label><input type="radio" name="optradio">Niet goed</label>
                              </div>
                              <div class="radio">
                              <label><input type="radio" name="optradio">Prima</label>
                              </div>
                              <div class="radio">
                              <label><input type="radio" name="optradio">Goed</label>
                            </div> 
                        </div>

                        <div class="form-group {{ $errors->has('owner_name') ? ' has-errors' : '' }}">
                            <label for="your-name">Hulpvaardigheid</label>
                            <div class="radio">
                              <label><input type="radio" name="optradio2">Niet goed</label>
                              </div>
                              <div class="radio">
                              <label><input type="radio" name="optradio2">Prima</label>
                              </div>
                              <div class="radio">
                              <label><input type="radio" name="optradio2">Goed</label>
                            </div> 
                        </div>
                      </div>
                    </div>

    

                  <div style="text-align:left;">
                    <input type="submit" value="Verzenden" class="save btn button btn-primary"/>
                  </div>
                </form> 
            </div>
        </div>
    </div> 
</div>
 <script type='text/javascript'>
   $(document).ready(function() {
        var max_fields      = 100;
        var group         = $(".group");
        var test         = $(".test");
        var add_button      = $(".add_form_field");
        var x = 0;
      
        $(add_button).click(function(e){          
            e.preventDefault();
            if(x < max_fields){
                x++;
                // $(group).append('<div><div class="form-group"><label>Naam: </label><input type="text" name="members[1][name]" class="form-control"/><label>Email: </label><input type="text" name="members[1][email]" class="form-control"/><a href="#" class="delete">Verwijderen'); 

                 $(group).append('<div><div class="row"><div class="form-group"><div class="col-md-6"><label>Naam: </label><input type="text" name="members['+x+'][name]" class="form-control"/></div><div class="col-md-6"><label>Email: </label><input type="text" name="members['+x+'][email]" class="form-control"/></div><a href="#" class="delete">Verwijderen');

                // $(group).innerHTML += '<div><div class="row"><div class="form-group">';

                // $(group).innerHTML += '<div class="col-md-6"><label>Naam: </label><input type="text" name="members['+x+'][name]" class="form-control"/></div>';

                // $(group).innerHTML += '<div class="col-md-6"><label>Email: </label><input type="text" name="members['+x+'][email]" class="form-control"/></div>';

                // $(group).innerHTML += '<a href="#" class="delete">Verwijderen</a></div></div></div>';
                
            }else{
                alert('You Reached the limits');
            }
        });

        $(group).on("click",".delete", function(e){
            e.preventDefault(); 
            $(this).parent('div').remove(); x--;
        })
    });

    </script>
@endsection