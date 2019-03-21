@extends('layouts/master')

@section('page-header')
    @include('layouts.page-header')
@endsection

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <h1>Edit Post</h1>
      <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
          <select multiple name="categories[]" class="form-control">
            @foreach ($categories as $category)
              @if ($post->categories->pluck('name')->contains($category->name))
              <option selected value="{{$category->id}}">{{$category->name}}</option>
              @else 
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="body">Body {{$post->categories->pluck('name')}}</label>
          <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
        @include('layouts.error')
      </form>
    </div>
</div>
</div>

<hr />

@endsection