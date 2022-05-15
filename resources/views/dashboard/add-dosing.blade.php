@extends('dashboard.layout')
@section('content')

        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Dosing</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form method="POST" class="tm-edit-product-form" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <label for="product" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product</label>
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="product"name="product">
                                        <option selected>Select Product</option>
                                        @foreach ($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="crop" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Crop
                                    </label>
                                    <input id="crop" name="crop" type="file" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="application" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Application</label>
                                    <textarea name="application"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" ></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="min" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Min
                                    </label>
                                    <input id="min" name="min" type="text" step="any" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="max" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Max
                                    </label>
                                    <input id="max" name="max" type="text" step="any" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
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