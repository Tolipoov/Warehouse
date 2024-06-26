@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create purchase</h1>
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
                <a href="{{route('admin.purchase.create')}}" class="btn btn-success mb-4"> Create products</a>
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
                          <th>Supplier name</th>
                          <th>Product name</th>
                          <th>Count</th>
                          <th>Date</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($purchases as $purchase)
                            <tr>
                                <td>{{$purchase->id}}</td>
                                <td>{{$purchase->supplier?->name}}</td>
                                <td>{{$purchase->product?->name}}</td>
                                <td>{{$purchase->count}}</td>
                                <td>{{$purchase->created_at->format('F d, Y | H:s') }}</td>
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