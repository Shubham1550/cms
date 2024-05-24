@extends('admin.layouts.master')
@section('page')
    <a href="{{route('queries.index')}}">Queries</a>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Queries Table</h3>
                            <a href="{{route('queries.create')}}" style="position: absolute; top:10px; right:20px"><button class="btn btn-sm btn-primary">Add</button></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User Id</th>
                                        <th>Message</th>
                                        <th>Created At</th>
                                        <th>Status</th>
                                        <th>Employee Id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0
                                        </td>
                                        <td>Win 95+</td>
                                        <td>Interne</td>
                                        <td>Win 95+</td>
                                        <td>Win 95+</td>
                                        <td> <a href=""><button
                                                    class="btn btn-sm btn-info ti-pencil-alt">Edit</button></a>
                                            <a href=""><button
                                                    class="btn btn-sm btn-danger ti-trash">Delete</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
