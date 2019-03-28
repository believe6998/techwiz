@extends('layout.admin-master')
@section('content')

    <form action="/admin/notice" method="post">
        @csrf
        Address <input id="address" type="text" name="address">
        Address <input id="description" type="text" name="description">

        <input type="submit" class="btn btn-success" value="Submit">
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
