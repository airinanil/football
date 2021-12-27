@extends("admintheme")
@section("content")
<div class="container">

<div class="row">


<div class="col">
<form action="/clubread" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<footer class="footer-distributed">
 
 
 
<table class="table table-borderless">


<br>

<tr>
    <td style="color:white">Club Name:</td>
    <td><input type="text" name="clubname" class="form-control"></td>
</tr>
<br>
<br>
<tr>
    <td>
   <center> <td><button class="btn btn-success">Insert</button></a></td></center>
   </td>
</tr>
</div>
</div>

</div>




<div class="container">
<br>
<br>
<br>
<br>
<div class="row">




 
 
 
 </footer>
































</form>







@endsection


























