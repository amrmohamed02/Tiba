<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Page - Dashboard Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="/dashboard/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="/dashboard/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="/dashboard/css/tooplate.css">
</head>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
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
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Reports
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Daily Report</a>
                                        <a class="dropdown-item" href="#">Weekly Report</a>
                                        <a class="dropdown-item" href="#">Yearly Report</a>
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
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Products</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="/admin/add" class="btn btn-small btn-primary">Add New Product</a>
                            </div>
                        </div>
                        <form method="POST">
                            @csrf
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">In Stock</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <th scope="row">
                                        <input name="products[]" type="checkbox" aria-label="Checkbox" value="{{$product->id}}">
                                        </th>
                                        <td class="tm-product-name">{{$product->name}}</td>
                                        <td class="text-center">{{$product->price}}</td>
                                        <td class="text-center">{{$product->quantity}}</td>
                                        <td>{{$product->category}}</td>
                                        <td class="tm-trash-icon-cell"><button formaction="/admin/products/p/{{$product->id}}" type="submit"><i class="fas fa-trash-alt tm-trash-icon"></i></button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="tm-table-mt tm-table-actions-row">
                            <div class="tm-table-actions-col-left">
                                <button type="submit" formaction="/admin/products/a/delet" class="btn btn-danger">Delete Selected Items</button>
                            </div>
                            <div class="tm-table-actions-col-right">
                                <span class="tm-pagination-label">Page</span>
                                <nav aria-label="Page navigation" class="d-inline-block">
                                    <ul class="pagination tm-pagination">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <span class="tm-dots d-block">...</span>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">13</a></li>
                                        <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title d-inline-block">Product Categories</h2>
                        <table class="table table-hover table-striped mt-3">
                            <thead>
                                <tr class="tm-bg-gray">
                                    <th scope="col"class="text-center">Category Name</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <form method="POST"action="/admin/products/{{$category->id}}">
                                    @csrf
                                    <td>{{$category->name}}</td>
                                    <td class="tm-trash-icon-cell"><button type="submit"><i class="fas fa-trash-alt tm-trash-icon"></i></button></td>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br><br>
                        <form method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input id="category" name="category" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"placeholder="Add New Category">
                            <input type="submit"name="add" class="btn btn-primary tm-table-mt" value="Add">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2018 Admin Dashboard . Created by
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link">Tooplate</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script src="/dashboard/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="/dashboard/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product";
            });
        })
    </script>
</body>

</html>