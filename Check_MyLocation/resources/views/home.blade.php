@extends('layout')
@section('content')

    <div class="position-absolute top-50 start-50 translate-middle" style="width: 500px;">
        <h1>You should click to this button to get the nearest restaurant within 2km.</h1>
        <button type="button" class="btn btn-primary" onclick="getLocation()">Click Me</button>
        <br><br>
        <p id="button"></p>

        <form method="get" enctype="multipart/form-data" action="{{route('get.nearest.restaurant')}}">

        </form>
    </div>





@endsection






