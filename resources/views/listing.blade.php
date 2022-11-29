
<h1>{{$heading;}}</h1>

@if(isset($listings))
    <p>Fatal error</p>
@else
     <h2>{{$listing['title']}}</h2>
     <p>{{$listing['description']}}</p>
@endif
