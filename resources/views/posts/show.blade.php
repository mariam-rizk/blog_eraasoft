@extends('layouts.website_app')
@section("title","Show Post")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Clean Blog</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
    </div>
@endsection

@section("content")
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    <a href="{{url('/posts')}}" class="card-link">Back</a>
  </div>
</div>
@endsection