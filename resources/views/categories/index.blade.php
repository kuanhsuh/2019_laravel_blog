@extends('layouts/master')

@section('page-header')
    @include('layouts.page-header')
@endsection

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-md-8">
      <h3>List All Categories</h3>
      <hr>
      <ul class="list-group">
        @foreach ($categories as $category)
          <li class="list-group-item">{{ $category->name }}</li>
        @endforeach
      </ul>
    </div>
    <div class="col-md-4">
      <h3>Add Categories</h3>
      <form method="POST" action="/categories/create">
        @csrf
        <div class="form-group">
          <label for="name">Categories</label>
          <input type="text" class="form-control" name="name" id="">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Add Categories</button>
        </div>
        @include('layouts.error')
      </form>
    </div>
</div>
</div>

<hr />

@endsection