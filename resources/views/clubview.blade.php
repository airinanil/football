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
    <br>

<table class="table table table-dark" >
<tr><th scope="row">Club Id</th>
    <th scope="row">Club Name</th>
    
    
   
    </tr>
    
@foreach($clubs as $club)

<tr class="table-primary">
   
    <td>{{$club->id}}</td>
    <td>{{$club->clubname}}</td>
   
    
</tr>

@endforeach



</table>




<center> <td><a href="/sort"><button class="btn btn-success">Top 10</button></a></td></center>
</div>
</div>
</div>
</section>






@endsection