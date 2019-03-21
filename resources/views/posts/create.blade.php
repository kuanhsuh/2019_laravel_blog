@extends('layouts/master')

@section('page-header')
    @include('layouts.page-header')
@endsection

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h1>Create New Post</h1>
      <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <select name="categories" class="custom-select">
            <option value="0" selected>Open this select menu</option>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @include('layouts.error')
      </form>
    </div>
</div>
</div>

<hr />

@endsection