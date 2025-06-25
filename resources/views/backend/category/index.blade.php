@extends('layouts.backend')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/backend/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" />
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-secondary">
                    Data Category
                    <a href="{{ route('backend.category.create') }}" class="btn btn-info btn-sm" style="float: right;">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table" id="dataCategory">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $data)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->slug}}</td>
                                    <td>
                                        <a href="{{ route('backend.category.edit',$data->id) }}"
                                            class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('backend.category.destroy',$data->id) }}" 
                                            class="btn btn-sm btn-danger" 
                                            data-confirm-delete="true">Delete</a>
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
</div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{asset('assets/backend/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/datatable/datatable-basic.init.js')}}"></script>
    <script>
        new DataTable('#dataCategory');
    </script>
@endpush
