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
                <td class="">
                    <a href="/admin/account/{{$item->id}}" class="btn btn-simple btn-success btn-icon android-search"><i
                                class="material-icons">show detail</i></a>
                    <a href="/admin/account/{{$item->id}}/edit" class="btn btn-simple btn-warning btn-icon edit"><i
                                class="material-icons">edit</i></a>
                    <a href="{{$item->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete"><i
                                class="material-icons">close</i></a>
                </td>
            </tr>
        @endforeach
    </ul>
    {{ $list_obj->links() }};
    <script>
        $('.btn-delete').click(function () {
            var thisButton = $(this);
            swal({
                text: "Bạn có chắc muốn xoá danh mục này không?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                confirmButtonText: 'Đồng ý',
                cancelButtonText: 'Huỷ bỏ',
                buttonsStyling: false
            }).then(function() {
                var id = thisButton.attr('href');
                $.ajax({
                    'url': '/admin/account/' + id,
                    'method': 'DELETE',
                    'data':{
                        '_token':$('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        swal({
                            text: 'Danh mục đã bị xoá.',
                            type: 'success',
                            confirmButtonClass: "btn btn-success",
                            buttonsStyling: false
                        })
                        setTimeout(function () {
                            window.location.reload();
                        }, 2*1000);
                    },
                    error: function () {
                        swal({
                            text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                            type: 'warning',
                            confirmButtonClass: "btn btn-danger",
                            buttonsStyling: false
                        })
                    }
                });

            });
            return false;
        })
    </script>
@endsection
