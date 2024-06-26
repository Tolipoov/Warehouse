@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sales</h1>
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
         <div class="col-md-6">
            <form action="{{route('admin.sales.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label>Select Supplier</label>
                <select class="custom-select" name="customer_id">
                  @foreach ($customers as $customer)
                  <option value="{{$customer->id}}" >{{$customer->name}}</option>
                  @endforeach
                  @error('supplier_id')
                    <p>{{$customer}}</p>
                  @enderror
                </select>
              </div>

              
              <div class="form-group">
                <label>Select Product</label>
                <select class="custom-select" name="product_id">
                  @foreach ($products as $product)
                  <option value="{{$product->id}}">{{$product->name}} | (In stock: {{$product->count}})</option>
                  @endforeach
                  @error('product_id')
                    <p>{{$message}}</p>
                  @enderror
                </select>
              </div>

              <div class="form-group">
                <label>Count product</label>
                
                <input type="number" name="count" class="form-control" >
                @error('count')
                  <p>{{$message}}</p>
                @enderror
              </div>

              @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
              @endif
             
              <button type="submit" class="btn btn-primary">Sales product</button>
          </form>
         </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection