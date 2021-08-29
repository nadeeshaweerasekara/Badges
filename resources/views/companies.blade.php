@extends('layouts.app')
@section('content')

<div class="container" style="width:900px">
<a href="/company"><button type="button" class="btn  btn-success btn-sm " style="margin-bottom: 13px;">Create new company</button></a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Logo</th>
      <th scope="col">Cpmpany</th>
      <th scope="col">Email</th>
      <th scope="col">Website</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mains as $main )
    <tr>
      <th scope="row">{{$main->id}}</th>
      <td> <img src="{{$main->logo}}"  width="50" height="50"></td>
      <td>{{$main->name}}</td>
      <td>{{$main->email}}</td>
      <td><a href="{{$main->website}}">{{$main->website}}</a></td>
    
    </tr>
    @endforeach 
  </tbody>
</table>

{{ $mains->onEachSide(5)->links() }}

</div>







@endsection