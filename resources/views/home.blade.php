@extends('layouts.website_app')
@section("title","Home")
<!-- Page Header-->
@section("header_photo",'assets/img/home-bg.jpg')
@section("header_content")
    <div class="site-heading">
        <h1>Clean Blog</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
    </div>
@endsection

@section("content")
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @foreach ($posts as $post )
                    <x-card-post-component title="{{ $post['title'] }}" content="{{ $post['content'] }}" created_at="{{ $post['created_at'] }}"/>
                     @endforeach
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
@endsection