<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>@yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="/owner/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
    .cool-form .form-control{
        width: 100%;
          border: none;
          border-radius: 4px;
          background-color: #f1f1f1;
          font-size: 12px;
    }
    .cool-form .form-label{
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 0px;
    }
    .cool-form {
      border: 3px black solid;
       border-radius: 12px;
      padding: 10px 20PX;
      background-color: white;
        margin:10px;
    }
    .cool-form .form-group {
      margin-bottom: 5px;
    }
    header h1 {
            font-size: 30px;
            font-weight: 700;
            padding:10px;
            text-align:center;

            }
    </style>
</head>
<body >
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="ownerhome">OWNER PANEL</a>
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
                    <li><a class="dropdown-item" href="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="ownerhome">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            HOME
                        </a>
                       
                        <a class="nav-link" href="bookshow">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                            BOOK
                        </a>
                        <a class="nav-link" href="index">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                            PROFILE
                        </a>
                        <a class="nav-link" href="bookingshow">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-bookmark"></i></div>
                            BOOKING
                        </a>
                        <a class="nav-link" href="bookreturno">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                            BOOK RETURN
                        </a>
                        <a class="nav-link" href="bookingcancelo">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-xmark"></i></div>
                            BOOKING CANCEL
                        </a>
                        <a class="nav-link" href="selectr">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-message"></i></div>
                            COMMUNICATION
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{session('username')}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" style="background: background: rgb(255,185,115);
background: linear-gradient(339deg, rgba(255,185,115,1) 7%, rgba(255,255,255,0) 100%); ">
          <main >
                <div style="background-color:#e5e4e2">
                    <header>
                        <h1>@yield('header')</h1>
                    </header>
                </div>
                 @yield('details')
                </div>
          </main>
            
        </div>
    </div>
</body>

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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/owner/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/owner/assets/demo/chart-area-demo.js"></script>
        <script src="/owner/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/owner/js/datatables-simple-demo.js"></script>
</html>