@extends("admintheme")
@section("content")
<section style="background-color:black;height:70vw" >

<div class="container">

<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12" >
<br>
<br>
<br>
<br>
<br>


<form class="d-flex" method="post" action="/playersearch" >
    
      {{csrf_field() }}
<input class="form-control me-2" type="search" placeholder="Search " aria-label="Search" name="search"  >
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
      
      <br>
      <center> <td><a href="/sort"><button class="btn btn-success">Top 10</button></a></td></center>

    <br>
<table class="table table table-dark" >
<tr><th scope="row">PLAYER NAME</th>
    <th scope="row">CLUB</th>
    <th scope="row">AGE</th>
    <th scope="row">GOALS</th>
    
   
    </tr>
    
@foreach($players as $player)

<tr class="table-primary">
   
    <td>{{$player->name}}</td>
    <td>{{$player->club}}</td>
    <td>{{$player->age}}</td>
    <td>{{$player->goal}}</td>
    
</tr>

@endforeach



</table>



{!!$players->links();!!}



</div>
</div>

</div>
</section>

@endsection