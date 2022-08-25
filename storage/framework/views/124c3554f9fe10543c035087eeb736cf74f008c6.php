<!DOCTYPE html>
<html lang="en">
    <head>
     
    </head>

    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">ADMIN PANEL</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button style="background-color:#eb5d1e;" class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search" style="color:white;"></i></button>
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
                            <a class="nav-link" href="adminhome1">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                ADMIN HOME
                            </a>
                            <a class="nav-link" href="showa">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-highlighter"></i></div>
                                AUTHOR
                            </a>
                            <a class="nav-link" href="showp">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                PUBLICATION
                            </a>
                            
                            
                            <a class="nav-link" href="showread">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-book-open-reader"></i></div>
                                READER
                            </a>
                            <a class="nav-link" href="showo">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-user"></i></div>
                                OWNER
                            </a>
                            <a class="nav-link" href="showc">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-address-book"></i></div>
                                CONTACT US
                            </a>
                            <a class="nav-link" href="selecto">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-message"></i></div>
                                COMMUNICATION
                            </a>
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo e(session('username')); ?>

                        <?php echo e(session('regid')); ?>

                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content" style="background: background: rgb(255,185,115);
background: linear-gradient(339deg, rgba(255,185,115,1) 7%, rgba(255,255,255,0) 100%); ">
                <main >
                <div style="background-color:#e5e4e2">
                    <header>
                        <h1><?php echo $__env->yieldContent('header'); ?></h1>
                    </header>
                </div>
                 <?php echo $__env->yieldContent('details'); ?>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/admin/assets/demo/chart-area-demo.js"></script>
        <script src="/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/admin/js/datatables-simple-demo.js"></script>
    </body>
</html>

<?php echo $__env->make('admin/adminlink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\MCA_PROJECT\book\resources\views/admin/adminlayout.blade.php ENDPATH**/ ?>