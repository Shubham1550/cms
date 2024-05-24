@extends('admin.layouts.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <p>Employees</p>
                            {{-- <?php
                            $employee_count = App\Models\Employee::count();

                            ?>
                            <h5>{{ $employee_count }}</h5> --}}
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <p>Customers</p>
                            {{-- <?php
                            $customer_count = App\Models\Customer::count();

                            ?>
                            <h5>{{ $customer_count }}</h5> --}}
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
