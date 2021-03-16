<div>

<h2> This is the header file</h2>
<h4>{{$name}} </h4>
<h3> fruits are </h3>
<ul> 
     @foreach($fruits as $fruit)
         <li>{{$fruit}}</li>
          @endforeach
</ul>

    </div>