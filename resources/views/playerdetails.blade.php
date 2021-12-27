@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/playerread" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<footer class="footer-distributed">
 
 
 
 
 <table class="table table-borderless">

<tr>
    <td style="color:white">Player name:</td>
    <td><input type="text"  name="name" class="form-control" value="{{old('name')}}"></td>
    <span class="text-danger">@error('name'){{$message}} @enderror  </span>


</tr>
<br>




<td style="color:white">Club:</td>
   <td> <select name="club" class="form-control" value="{{old('club')}}">
   <span class="text-danger">@error('club'){{$message}} @enderror  </span>
   <option value="" disabled selected>Choose a club</option>
    @foreach($bcategory as $bcategory)
    
              <option >{{$bcategory->clubname }}</option>
            
              @endforeach
              
              </select></td>
          </tr>   
<br>
<tr>
    <td style="color:white"> Age:</td>
    <td><input type="number" name="age" class="form-control" value="{{old('age')}}"></td>
    <span class="text-danger">@error('age'){{$message}} @enderror  </span>
</tr>

<br>
<tr>
    <td style="color:white" >     Goals:</td>
    <td><input type="number" name="goal" class="form-control" value="{{old('goal')}}"></td>
    <span class="text-danger">@error('goal'){{$message}} @enderror  </span>

</tr>
<br>








<tr>
    <td>
   <center> <td><button class="btn btn-success">Insert</button></a></td></center>
   </td>
</tr>
</div>
</div>

</div>



 
 
 
 </div>
 
 
 
 </footer>
































</form>







@endsection



