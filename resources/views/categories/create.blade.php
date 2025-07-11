@extends('layouts.app')
@section("title","Create Category")
<!-- Page Header-->
@section("header_content")
    <div class="site-heading">
        <h1>Create new Category</h1>
        <span class="subheading">A Blog Theme by Start Bootstrap</span>
    </div>
@endsection
@section("content")
        <!-- Main Content-->
                <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                       
                        <div class="my-5">
           
                            <form id="contactForm" method="POST" action="/categories">
                                @csrf
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter category name here..." name="name" required />
                                    <label for="name">Name</label>
                                </div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
       