@extends('layout.admin-master')
@section('content')
    <div>day la list</div>
    @foreach($notices as $item)
        <ul>
            <li>{{$item->id}}</li>
            <li>{{$item->address}}</li>
            <li>{{$item->description}}</li>
        </ul>
    @endforeach
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
