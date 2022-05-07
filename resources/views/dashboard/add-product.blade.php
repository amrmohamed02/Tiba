<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product - Dashboard Admin Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="/dashboard/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/dashboard/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/dashboard/css/tooplate.css">
</head>

<body class="bg02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="/admin/index">
                        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                        <h1 class="tm-site-title mb-0">Dashboard</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/index">Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/admin/index" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Reports
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Daily Report</a>
                                    <a class="dropdown-item" href="#">Weekly Report</a>
                                    <a class="dropdown-item" href="/admin/index">Yearly Report</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/admin/products">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/admin/accounts">Accounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Billing</a>
                                    <a class="dropdown-item" href="#">Customize</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="/admin/login">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- row -->
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
            <form method="POST" action="/admin/addcat" enctype="multipart/form-data">
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
                        <label for="pic" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Image
                        </label>
                        <input id="pic" name="pic" type="file" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit"name="add" class="btn tm-table-mt" value="Add">
                    </div>
                </div>
                </form>
        </div>
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2018 Admin Dashboard . Created by
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                </p>
            </div>
        </footer>
    </div>

    <script src="/dashboard/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/dashboard/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>