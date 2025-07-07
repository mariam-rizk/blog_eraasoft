@extends('layouts.app')
@section("title","contact_us")
@section("header")
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{asset('assets/img/home-bg.jpg')}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
@endsection
@section("content")
        <!-- Main Content-->
                <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                       
                        <div class="my-5">
           
                            <form id="contactForm" method="POST" action="/posts">
                                @csrf
                                <div class="form-floating">
                                    <input class="form-control" id="title" type="text" placeholder="Enter post title here..." name="title" required />
                                    <label for="title">Title</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="content" placeholder="Enter post content here..." name="content" style="height: 12rem" required></textarea>
                                    <label for="content">Content</label>
                                </div>
                                <br />
                                <div class="form-floating">
                                    <select class="form-select" id="is_publish" name="is_publish" required>
                                        <option value="0">False</option>
                                        <option value="1">True</option>   
                                    </select>
                                    <label for="is_publish">Is Published</label>
                                </div>
                                <br />
                                

                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
       