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
                        <li><hr class="dropdown-divider" /></li>
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
            @if(session('status'))
            <h6 class="alert alert-success" style="position: absolute;left: 500px;top: 50px;z-index: 1;">{{ session('status') }}</h6>
            @endif
            <form action="{{ route('blogedit.edit') }}" method="post" enctype="multipart/form-data" style="margin-left: 240px;width: 100%;">
 @csrf
            <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          @foreach($blog as $value)
          <div class="card-body">
            <div class="form-group">
              <label for="inputClientCompany">Title</label>
              <input type="hidden"  value="{{$value->id}}" class="form-control" name="id">

              <input type="text" id="inputPrice" value="{{$value->title}}" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label for="inputDescription">Slug</label>
              <textarea id="inputDescription" placeholder="{{$value->slug}}" class="form-control" rows="4" name="slug"></textarea>
            </div>
            <div class="form-group">
              <label for="inputClientCompany">Image</label>
              <input type="file" name="image" id="fileToUpload" class="form-control" >
            </div>
         
          </div>
          @endforeach
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <button type="submit" name="submit" class="btn btn-success float-right">
        Edit Blog
</button>
      </div>
    </div>
  </section>
  </form>
        
</div>
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
