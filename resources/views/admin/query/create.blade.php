@extends('admin.layouts.master')
@section('page')
    <a href="{{ route('queries.index') }}">Queries</a>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('queries.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="user_id">User Id</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id"
                                        placeholder="Choose User">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        placeholder="Status">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
