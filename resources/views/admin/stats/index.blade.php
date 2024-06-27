@extends('admin.layouts.sidebar')

@section('content')
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Statistics</h1>
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
            <h2>Seller product</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($purchases as $purchase)
                        <tr>
                            <td>{{ $purchase->supplier_name }}</td>
                            <td>{{ $purchase->product->name }}</td>
                            <td>{{ $purchase->total_purchased }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2>Bought product</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Product</th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($saleses as $sales)
                        <tr>
                            <td>{{ $sales->customer_name }}</td>
                            <td>{{ $sales->product->name }}</td>
                            <td>{{ $sales->total_sold }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection