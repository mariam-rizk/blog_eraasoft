<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Category
        </h2>
    </x-slot>
        <!-- Main Content-->
                <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                       
                        <div class="my-5">
           
                            <form id="contactForm" method="POST" action="{{ route('dashboard.categories.store') }}" novalidate>
                                @csrf
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter category name here..." name="name" required />
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                </div>
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-app-layout>
       