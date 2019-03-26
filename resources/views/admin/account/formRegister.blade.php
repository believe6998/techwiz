@extends('layout.admin-master')
@section('content')
    <form action="/admin/account" method="post">
        {{csrf_field()}}
        Username <input type="text" name="username">
        <br>
        Images <input type="text" name="images">
        <br>
        Password <input type="password" name="password">
        <br>
        <input type="hidden" name="latitude">
        <input type="hidden" name="longitude">

        <input type="submit" value="Submit">
    </form>

@endsection
