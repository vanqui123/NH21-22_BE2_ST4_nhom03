<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('cssadmin/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{url('admin/productadmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Product
                        </a>
                        <a class="nav-link" href="{{route('admin.protypeadmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Protype
                        </a>
                        <a class="nav-link" href="{{url('admin/blogadmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Blog
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Contact
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Cart
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        @if(session('status'))
        <h6 class="alert alert-success" style="position: absolute;left: 500px;top: 50px;z-index: 1;">{{ session('status') }}</h6>
        @endif
        <a href="{{route('admin.addproduct')}}" class="btn btn-primary" style="position: absolute;top: 65px;left: 220px;">Thêm sản phẩm</a>
        <div class="filter" style="position: absolute;top: 65px;left: 415px; width:100%;">
            <form action="" method="get">
                <div class="row">
                    <div class="col-2">
                        <select class="form-control" name="type_id" id="">
                            <option value="0">Tất cả các loại sản phẩm</option>
                            @if(!empty($productType))
                            @foreach($productType as $item)
                            <option value="{{$item->type_id}}" {{request()->type_id==$item->type_id?'selected':false}}>{{$item->type_name}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="col-3">
                        <input type="search" name="keywords" class="form-control" value="{{request()->keywords}}" placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <table class="table table-bordered " style="margin-top: 200px;margin-left: 215px;">
            <thead>
                <tr>
                    <th style="width: 0%;text-align: center;">
                        STT
                    </th>
                    <th style="width: 0%;text-align: center;">
                        ID
                    </th>
                    <th style="width: 3%;text-align: center;">
                        Product Name
                    </th>
                    <th style="width: 3%;text-align: center;">
                        Type name
                    </th>
                    <th style="width: 0%;text-align: center;">
                        Quantity
                    </th>
                    <th style="width: 3%;text-align: center;">
                        Price
                    </th>
                    <th style="width: 10%;text-align: center;">
                        Description
                    </th>
                    <th style="width: 2%;text-align: center;">
                        Created at
                    </th>
                    <th style="width: 2%;text-align: center;">
                        Date expire
                    </th>
                    <th style="width: 5%;">
                        Image
                    </th>
                    <th style="width: 0%;text-align: center;">
                        Sửa
                    </th>
                    <th style="width: 0%;text-align: center;">
                        Xoá
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($productList as $key=>$value)
                <tr>
                    <td class="text-center">
                        {{$key+1}}
                    </td>
                    <td class="text-center">
                        {{$value->product_id}}
                    </td>
                    <td class="text-center">
                        {{$value->name}}
                    </td>
                    <td class="text-center">
                        {{$value->type_name}}
                    </td>
                    </td>
                    <td class="text-center">
                        {{$value->product_quanity}}
                    </td>
                    <td class="text-center">
                        {{$value->price}}
                    </td>
                    <td class="text-left">
                        {{ substr(($value->description),0,200)."..."}}
                    </td>
                    <td class="text-center">
                        {{ $value->created_at}}
                    </td>
                    <td class="text-center">
                        {{ $value->date_expire}}
                    </td>
                    <td> <img style="width:100%;display: block;margin-left: auto;margin-right: auto;" src="../images/{{$value->image}}" alt="">
                    </td>
                    <td class="project-actions text-center">
                        </a>
                        <form action="{{route('admin.editProduct',['id'=>$value->product_id])}}" method="get" enctype="multipart/form">
                            @csrf
                            <i class="fas fa-pencil-alt">
                            </i>
                            <button type="submit" class="btn btn-info btn-sm"> Edit</button>
                            <input type="hidden" name="id" value="{{$value->product_id}}" />
                        </form>
                    </td>
                    <td class="project-actions text-center">
                        <form onclick="return confirm('Bạn có chắc chắn muốn xoá !!')" action="{{route('admin.deleteProduct',['id'=>$value->product_id])}}" method="get" enctype="multipart/form">
                            @csrf
                            <i class="fas fa-trash">
                            </i>
                            <button type="submit" class="btn btn-danger btn-sm"> Delete</button>
                            <input type="hidden" name="id" value="{{$value->product_id}}" />
                        </form>
                    </td>
                </tr>
                @endforeach;
    </div>
    </tbody>
    </table>

    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('jsadmin/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assetsadmin/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('assetsadmin/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="{{asset('jsadmin/datatables-simple-demo.js')}}"></script>
</body>

</html>