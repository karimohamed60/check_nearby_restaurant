@extends('layout')
@section('content')



    <div class="position-absolute top-50 start-50 translate-middle" style="width: 500px;">
        <h1>Nearby Restaurant</h1>
        <ul class="list-group">
            <li class="list-group-item"><?php echo 'Name: '.$name;?></li>
            <li class="list-group-item"><?php echo 'Address: '.$address;?></li>
            <li class="list-group-item"><?php echo 'Latitude: '.$latitude;?></li>
            <li class="list-group-item"><?php echo 'Longitude: '.$longitude;?></li>
        </ul>
    </div>





@endsection






