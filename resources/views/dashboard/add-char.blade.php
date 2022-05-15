@extends('dashboard.layout')
@section('content')

        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add New Characteristic</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                        <form method="POST">
                    @csrf
                        <div class="input-group mb-3">
                            <label for="product" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product</label>
                            <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" id="product"name="product">
                                <option selected>Select product</option>
                                @foreach ($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                            <textarea name="description"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" ></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit"name="add" class="btn tm-table-mt" value="Add">
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
                
            </div>
                
                
        </div>
 @endsection