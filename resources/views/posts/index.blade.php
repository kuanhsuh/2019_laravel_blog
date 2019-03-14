@extends('layouts/master')

@section('content')
<!-- Main Content -->
<div class="container">
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
    @foreach ($posts as $post)
        <div class="post-preview">
            <a href="post.html">
                <h2 class="post-title">
                    {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                    {{$post->body}}
                </h3>
            </a>
            <p class="post-meta">
                Posted by
                <a href="#">Start Bootstrap</a>
                on {{$post->created_at->toFormattedDateString()}}
            </p>
        </div>
        <hr />
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