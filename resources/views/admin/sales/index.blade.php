@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create sales</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin.sales.create')}}" class="btn btn-success mb-4"> Sales products</a>
            </div>
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">List of purchases</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Customer name</th>
                          <th>Product name</th>
                          <th>Count</th>
                          <th>Date</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($saleses as $sales)
                            <tr>
                                <td>{{$sales->id}}</td>
                                <td>{{$sales->customer?->name}}</td>
                                <td>{{$sales->product?->name}}</td>
                                <td>{{$sales->count}}</td>
                                <td>{{$sales->created_at->format('F d, Y | H:s') }}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection