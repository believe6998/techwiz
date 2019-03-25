@extends('layout.admin-master')
@section('content')
    <ul>
        @foreach($list_obj as $item)
            <tr role="row" class="odd">
                <td>{{$item->id}}</td>
                <td tabindex="0" class="sorting_1">{{$item->username}}</td>
                <td>{{$item->images}}</td>
                <td>
                    <div class="card"
                         style="width: 100px;height: 80px;background-image: url('{{$item->thumbnail}}'); background-size: cover">
                    </div>
                </td>
            </tr>
        @endforeach
    </ul>
    {{ $list_obj->links() }}
@endsection
