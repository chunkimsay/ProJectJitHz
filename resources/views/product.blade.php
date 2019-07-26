<!--product.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Product
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
      <form method="post" action="{{ route('products.store') }}">
          <div class="form-group">
              @csrf
              <label for="product_name">Product Name:</label>
              <input type="text" class="form-control" name="product_name"/>
          </div>
          <div class="form-group">
              <label for="product_price">Price :</label>
              <input type="text" class="form-control" name="product_price"/>
          </div>
          <div class="form-group">
              <label for="product_size">Size :</label>
              <input type="text" class="form-control" name="product_size"/>
          </div>
          <div class="form-group">
              <label for="product_colour">Colour :</label>
              <input type="text" class="form-control" name="product_colour"/>
          </div>
          <div class="form-group">
              <label for="product_type">Type :</label>
              <input type="text" class="form-control" name="product_type"/>
          </div>
          <button type="submit" class="btn btn-primary">Insert Product</button>
      </form>
  </div>
</div>
@endsection

