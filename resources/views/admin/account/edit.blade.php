@extends('layout.admin-master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-rose">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/account/{{$obj->id}}" method="post">
        @method('PUT')
        {{csrf_field()}}
        Username <input type="text" name="username" value="{{$obj->username}}">
        <br>
        Images <input type="text" name="images" value="{{$obj->images}}">
        <br>
        Password <input type="password" name="password" value="{{$obj->password}}">
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection