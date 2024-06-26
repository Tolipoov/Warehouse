@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Purchase</h1>
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
            <form action="{{route('admin.purchase.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <label>Select Supplier</label>
                <select class="custom-select" name="supplier_id">
                  @foreach ($suppliers as $supplier)
                  <option value="{{$supplier->id}}" >{{$supplier->name}}</option>
                  @endforeach
                  @error('supplier_id')
                    <p>{{$message}}</p>
                  @enderror
                </select>
              </div>

              
              <div class="form-group">
                <label>Select Product</label>
                <select class="custom-select" name="product_id">
                  @foreach ($products as $product)
                  <option value="{{$product->id}}">{{$product->name}}</option>
                  @endforeach
                  @error('product_id')
                    <p>{{$message}}</p>
                  @enderror
                </select>
              </div>

              <div class="form-group">
                <label>Count product</label>
                <input type="number" name="count" class="form-control" placeholder="Count product">
                @error('count')
                  <p>{{$message}}</p>
                @enderror
              </div>
             
              <button type="submit" class="btn btn-primary">Create product</button>
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