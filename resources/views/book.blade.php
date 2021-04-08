@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
</div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
</div>

<form action="/bookread" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>Title</td>
    <td><input name="btitle" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Author</td>
    <td><input name="bauthor" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Description</td>
    <td><input name="bdes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Distributor</td>
    <td><input name="bdist" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Price</td>
    <td><input name="bprice" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-danger">Submit</button></td>
</tr>
</table>
</form>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>
@endsection