<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Invoices') }}
        </h2>
    </x-slot>

    <section class="Profil">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                    <div class="card-header text-center">New Invoice</div>
                        <div class="card-body">
                            <form action="/p" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="d-flex">
                                        <div class="input p-3 w-100">
                                            <p class="ml-5">Name</p>
                                            <input id='name'
                                            type="text"
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"
                                            name="name">
                                        </div>
                                        <div class="input p-3 w-100">
                                            <p class="ml-5">Middlename</p>
                                            <input id='middlename'
                                            type="text"
                                            class="form-control{{ $errors->has('description') ? ' is-invalid' : ''}}"
                                            name="middlename">
                                        </div>
                                    </div>
                                    @if ($errors->has("caption"))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first("caption") }}</strong> 
                                        </span>
                                    @endif
                                    
                                    <div class="input p-3 w-70 text-left">
                                        <p class="ml-5">Addres</p>
                                        <input id='addres'
                                        type="text"
                                        class="form-control{{ $errors->has('text') ? ' is-invalid' : ''}}"
                                        name="addres"
                                        caption='text'>
                                    </div>
                                    @if ($errors->has("caption"))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first("caption") }}</strong> 
                                        </span>
                                    @endif
                                    <div class="input p-3 w-70">
                                        <p class="ml-5">Postal code, city</p>
                                        <input id='Postal'
                                        type="text"
                                        class="form-control{{ $errors->has('url') ? ' is-invalid' : ''}}"
                                        name="Postal"
                                        caption='url'>
                                    </div>
                                    @if ($errors->has("caption"))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first("caption") }}</strong> 
                                        </span>
                                    @endif
                                    <div class="input p-3 w-70">
                                        <p class="ml-5">Title</p>
                                        <input id='title'
                                        type="text"
                                        class="form-control{{ $errors->has('url') ? ' is-invalid' : ''}}"
                                        name="title"
                                        caption='url'>
                                    </div>
                                    @if ($errors->has("caption"))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first("caption") }}</strong> 
                                        </span>
                                    @endif
                                    <div class="input p-3 w-70">
                                        <select class="form-select" id='product' name='product' aria-label="Default select example">
                                            <option selected>Select product</option>
                                            <option value="1">Phone 11 Pro</option>
                                            <option value="2">Tesla model R</option>
                                            <option value="3">Laptop 3090rx</option>
                                            <option value="4">Armani Giorgio</option>
                                            <option value="5">Donut</option>
                                        </select>
                                    </div>
                                    <div class="row p-3 w-70">
                                        <button class="btn btn-primary">Post</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>