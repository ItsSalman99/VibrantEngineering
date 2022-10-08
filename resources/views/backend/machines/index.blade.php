@extends('backend.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">All Machine</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5>ALL MACHINES</h5>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">THUMBNAIL</th>
                                    <th scope="col">NAME</th>
                                    <th>
                                        PUBLISHED AT
                                    </th>
                            </thead>
                            <tbody>
                                @forelse ($machines as $machine)
                                    <tr>
                                        <th scope="row"> {{ $machine->id }} </th>
                                        <td style="width: 30%;">
                                            <img src="{{ asset($machine->thumbnail) }}" alt="" width="40%">
                                        </td>
                                        <td>{{ $machine->name }}</td>
                                        <td>{{ date('F, j Y', strtotime($machine->created_at)) }}</td>

                                    </tr>
                                @empty
                                    <tr>
                                        <div class="p-2">
                                            <h4>No Data Availaible!</h4>
                                        </div>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@section('extra-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
