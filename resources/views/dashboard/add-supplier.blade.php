@extends('dashboard.layout')
@section('content')

        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add New Supplier</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                        <form method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                    Name
                                </label>
                                <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <label for="email" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                    Email
                                </label>
                                <input id="email" name="email" type="email" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <label for="phone" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                    Phone
                                </label>
                                <input id="phone" name="phone" type="tel" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <label for="job" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">
                                    job
                                </label>
                                <input id="job" name="job" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                    <button type="submit"name="submit" class="btn btn-primary">Add
                                    </button>
                                </div>
                            </div>
                    </div>
                    </form>
                    </div>
                </div>
                
            </div>
                
                
        </div>
@endsection