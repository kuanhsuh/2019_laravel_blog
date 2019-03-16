@extends('layouts/master')

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    @foreach ($posts as $post)
        @include('posts.post')
    @endforeach
        <!-- Pager -->
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="#"
                >Older Posts &rarr;</a
            >
        </div>
    </div>
</div>
</div>

<hr />

@endsection