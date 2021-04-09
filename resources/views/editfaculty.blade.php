
@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
</div>


<form action="/editfaculty/{{$faculty->id}}" method="post">
{{ csrf_field() }}
<table class="table">

<tr>
    <td>Faculty name</td>
    <td><input value="{{ $faculty->fname }}" name="fname" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input value="{{ $faculty->fdesig }}" name="fdes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>contact no</td>
    <td><input value="{{ $faculty->fmob }}" name="fcontact" type="text" class="form-control"></td>
</tr>
<tr>
    <td>College</td>
    <td><input value="{{ $faculty->fcollege }}" name="fcollege" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Submit</td>
    <td><button class="btn btn-success">Submit</button></td>
</tr>
</table>
</form>

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>

</div>
</div>
@endsection
