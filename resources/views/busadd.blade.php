@extends("theme")
@section("content")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6"></div>  
<form action="/busread" method="post">

{{ csrf_field() }}

<table class="table">
<tr>
    <td>Bus no</td>
    <td><input name="bno" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Driver name</td>
    <td><input name="dname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Route</td>
    <td><input name="broute" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">Submit</button></td>
</tr>
</table>
</form>


</div>
</div>
@endsection