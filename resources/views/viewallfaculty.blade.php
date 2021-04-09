@extends("theme")
@section("content")
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
    </div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 ">
    <table class="table">
    <tr>
        <th>Name</th>
        <th>Designation</th>
        <th>Mobile No</th>
        <th>College</th>
    </tr>

    @foreach($faculty as $faculty)
    <tr>
        <td>{{$faculty->fname}}</td>
        <td>{{$faculty->fdesig}}</td>
        <td>{{$faculty->fmob}}</td>
        <td>{{$faculty->fcollege}}</td>

        <td> <a class="btn btn-warning" href="/faculty/{{$faculty->id}}/edit">Edit</a>
    </tr>

    @endforeach

    </table>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    </div>
    </div>
  @endsection