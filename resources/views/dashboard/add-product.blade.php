@extends('dashboard.layout')
@section('content')

    <div class="row tm-mt-big">
        <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
            <div class="bg-white tm-block">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add Product</h2>
                    </div>
                </div>
                <div class="row mt-4 tm-edit-product-row">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <form action="/admin/add" method="POST" class="tm-edit-product-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                    Name
                                </label>
                                <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                    Price
                                </label>
                                <input id="price" name="price" type="number" step="any" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                            </div>
                            {{-- <div class="input-group mb-3">
                            <label for="company" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Company
                            </label>
                            <input id="company" name="company" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                        </div> --}}
                            <div class="input-group mb-3">
                                <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                <textarea name="description"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" ></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category</label>
                                <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="category"name="category">
                                    <option selected>Select one</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label for="supplier" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Supplier</label>
                                <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="supplier"name="supplier">
                                    <option selected>Select one</option>
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label for="stock" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Units In
                                    Stock
                                </label>
                                <input id="stock" name="quantity" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                            </div>
                            <div class="input-group mb-3">
                                <label for="pic" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image
                                </label>
                                <input id="pic" name="pic" type="file" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
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