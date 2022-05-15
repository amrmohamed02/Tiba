@extends('dashboard.layout')
@section('content')

        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="bg-white block">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="tm-block-title d-inline-block">Add New Category</h2>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Category
                                            Name
                                        </label>
                                        <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="description" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Description</label>
                                        <textarea name="description"class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" rows="3" ></textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="pic" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2">Image
                                        </label>
                                        <input id="pic" name="pic" type="file" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
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