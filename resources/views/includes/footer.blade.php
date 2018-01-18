<footer id="footer">
    <div class="row">
        <div class="col-md-3">
            <h3>Contactgegevens</h3>
            <ul>
                <li>SIGA-LAB</li>
                <li>info@sigalab.nl</li>
                <li> 058 251 1528</li>
                <li>NHL Hogeschool</li>
                <li>Rengerslaan 10</li>
                <li>8917 DD Leeuwarden</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Menu</h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/workshops">Workshops</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>Ga met je team aan de slag!</h3>                 
            <h3><small>Nieuwsgierig of meer informatie?</small></h3>
            
            <a href="{{route('create_intake_form')}}" class="btn button large grey">Aanmelden</a>

        </div>
        <div class="col-md-3">
            <h3>Workshops</h3>
            @foreach($workshops->slice(0,6) as $workshop)
                <a href="/workshop/read/{{$workshop->id}}">{{$workshop->name}}</a><br>
            @endforeach

        </div>
    </div>
</footer>