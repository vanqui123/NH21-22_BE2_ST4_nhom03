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
                        <a class="nav-link" href="{{route('admin.productadmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{route('admin.productadmin')}}">
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
                        <a class="nav-link" href="{{url('admin/contactadmin')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Contact
                        </a>
                        <a class="nav-link" href="{{route('show.booking')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Cart
                        </a>
                        <a class="nav-link" href="{{route('show.voucher')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Voucher
                        </a>
                        <a class="nav-link" href="{{route('show.user')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            User
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>

        <table class="table table-striped " style="margin-top: 55px;margin-left: 215px;">
            <thead>
                <tr>
                    <th style="width: 0%;text-align: center;">
                        STT
                    </th>
                    <th style="width: 20%;text-align: center;">
                        User Name
                    </th>
                    <th style="width: 20%;text-align: center;">
                        Full Name
                    </th>

                    <th style="width: 20%;text-align: center;">
                        Address
                    </th>
                    <th style="width: 20%;text-align: center;">
                        Phone
                    </th>
                    <th style="width: 20%;text-align: center;">
                        Voucher_price
                    </th>
                    <th style="width: 20%;text-align: center;">
                        Payment Status
                    </th>
                    <th style="width: 20%;text-align: center;">
                        Order
                    </th>
                </tr>
            </thead>
            <tbody>
       
                @foreach($data as $key=>$value)
                @php $voucher_price = 0 @endphp
                @php $voucher_price = $value->voucher->voucher_price @endphp
                <tr>
                    <td>{{$key + 1}}</td>
                    <td class="text-center">
                        {{$value->users->name}}
                    </td>
                    <td class="text-center">
                        {{$value->fullname}}
                    </td>
                    <td class="text-center">
                        {{$value->address}}
                    </td>

                    <td class="text-center">
                        {{$value->phone}}
                    </td>
                    <td class="text-center">
                        {{number_format($voucher_price)}}
                    </td>
                    <td class="text-center">
                        {{$value->payment_status}}
                    </td>
                    @endforeach
                    <td class="text-center">
                        <table class="table table-striped " style="margin-top: 0px;margin-right: 100px;">
                            <th style="width: 20%;text-align: center;">
                                User Name
                            </th>
                            <th style="width: 20%;text-align: center;">
                                Proudct Name
                            </th>
                            <th style="width: 20%;text-align: center;">
                                Quanity
                            </th>
                            <th style="width: 20%;text-align: center;">

                                Price
                            </th>
                            <th style="width: 20%;text-align: center;">

                                Total
                            </th>
                            @php $total = 0 @endphp
                            @foreach($productBooking as $productBooking )
                            @php $total += $productBooking->quanity * $productBooking->price @endphp
                            <tr>
                                <td class="text-center">
                                    {{$productBooking->users->name}}
                                </td>
                                <td class="text-center">
                                    {{$productBooking->product->name}}
                                </td>
                                <td class="text-center">
                                    {{$productBooking->quanity}}
                                </td>
                                <td class="text-center">
                                    {{number_format($productBooking->price)}} vnđ
                                </td>
                                <td class="text-center">
                                    {{number_format($productBooking->quanity * $productBooking->price)  }} vnđ
                                </td>

                            </tr>
                            @endforeach

                        </table>
                        <p>{{number_format($total - $voucher_price) }} vnđ</p>
                    </td>
                </tr>



            </tbody>
        </table>

    </div>
    </a>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
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