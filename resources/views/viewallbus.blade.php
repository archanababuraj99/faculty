@extends("theme")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<table class="table">
<tr>
    <th>Bus No</th>
    <th>Driver Name</th>
    <th>Route</th>
</tr>

@foreach($bus as $bus)

<tr>
    <td>{{$bus->bno}}</td>
    <td>{{$bus->dname}}</td>
    <td>{{$bus->route}}</td>
</tr>
@endforeach
</table>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>
@endsection