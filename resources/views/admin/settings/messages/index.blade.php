@extends('backend.layouts.app')

@section('title', 'Tin nhắn')

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}">
@endpush


@section('content')

    <div class="block-header"></div>

    <div class="row clearfix">

        <div class="col-xs-12">
            <div class="card">
                <div class="header bg-indigo">
                    <h2>Tin nhắn</h2>
                </div>
                <div class="body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>STT.</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>SĐT</th>
                                    <th>Tin nhắn</th>
                                    <th width="150px">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach( $messages as $key => $message )
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->phone}}</td>
                                    <td>{{ str_limit($message->message,40,'...') }}</td>
                                    <td>
                                        @if($message->status == 0)
                                            <a href="{{route('admin.message.read',$message->id)}}" class="btn btn-warning btn-sm waves-effect">
                                                <i class="material-icons">local_library</i>
                                            </a>
                                        @else 
                                            <a href="{{route('admin.message.read',$message->id)}}" class="btn btn-success btn-sm waves-effect">
                                                <i class="material-icons">done</i>
                                            </a>
                                        @endif
                                        <a href="{{route('admin.message.replay',$message->id)}}" class="btn btn-indigo btn-sm waves-effect">
                                            <i class="material-icons">replay</i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect" onclick="deleteMessage({{$message->id}})">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        <form action="{{route('admin.messages.destroy',$message->id)}}" method="POST" id="del-message-{{$message->id}}" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection


@push('scripts')

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('backend/js/pages/tables/jquery-datatable.js') }}"></script>

    <script>
        function deleteMessage(id){
            
            swal({
            title: 'Bạn có chắc không?',
            text: "Bạn không thể hoàn tác hành động này!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, xóa nó!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById('del-message-'+id).submit();
                    swal(
                    'Đã xóa!',
                    'Tin nhắn này đã được xóa.',
                    'thành công'
                    )
                }
            })
        }
    </script>

@endpush
