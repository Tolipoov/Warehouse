@extends('admin.layouts.sidebar')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit customers</h1>
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
            <form action="{{route('admin.customer.update', $customer->id)}}" method="POST">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <label for="name">Customer's name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$customer->name}}">
                @error('name')
                  <div style="color: red;">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Edit customer</button>
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