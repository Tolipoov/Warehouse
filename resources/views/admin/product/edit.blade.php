@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
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
            <form action="{{route('admin.product.update', $product->id)}}" method="POST">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="name">product's name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}">
                @error('name')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="name">Product's price</label>
                <input type="number" name="price" class="form-control" id="name" value="{{$product->price}}">
                @error('price')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>
             
              <button type="submit" class="btn btn-primary">Edit product</button>
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