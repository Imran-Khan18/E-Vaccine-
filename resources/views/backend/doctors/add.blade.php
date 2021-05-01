@extends('backend.layouts.master')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add a doctor</h3>
                            </div>
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							@if (\Session::has('success'))
								<div class="alert alert-success">
									<ul>
										<li>{!! \Session::get('success') !!}</li>
									</ul>
								</div>
							@endif
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('save-doctor')}}" method="POST">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="doctor_name">Name</label>
                                        <input type="text" name="name" class="form-control" id="doctor_name" placeholder="Doctor name">
                                    </div>
                                    <div class="form-group">
                                        <label for="speciality">Speciality</label>
                                        <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Speciality">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
