<!-- edit.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Book
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('products.update', $product->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Product Name:</label>
              <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}"/>
          </div>
          <div class="form-group">
              <label for="product_price">Product Price :</label>
              <input type="text" class="form-control" name="product_price" value="{{$product->product_price}}"/>
          </div>
          <div class="form-group">
              <label for="product_size">Product Size :</label>
              <input type="text" class="form-control" name="product_size" value="{{$product->product_size}}"/>
          </div>
          <div class="form-group">
              <label for="product_colour">Product Colour :</label>
              <input type="text" class="form-control" name="product_colour" value="{{$product->product_colour}}"/>
          </div>
          <div class="form-group">
              <label for="product_type">Product Type :</label>
              <input type="text" class="form-control" name="product_type" value="{{$product->product_type}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Product</button>
      </form>
  </div>
</div>
@endsection