<!doctype html>
<html lang="ID">
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styleguide.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../s.css">
    <style>
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light p-2">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h5 class="ml-2" style="color:  rgba(248, 134, 58, 1)"><b>PT GRIYA DEPO NUSANTARA</b></h5>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item px-2 pt-1">
                    <div class="frame-3">
                        <div class="text-wrapper-3">Administrasi</div>
                        <div class="text-wrapper-4">Nesa</div>
                    </div>
                </li>
                <li class="nav-item px-2 pt-1">
                    <img src="../img/vuesax-bold-notification.svg" width="28px" alt="" srcset="" class="img-fluid">
                </li>
                <li class="nav-item px-2">
                    <img src="../img/logo-griya-depo-press1fix-5-5.png" width="28px" alt="" srcset="" class="img-fluid">
                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="px-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="../img/icon-22.svg" width="18px" alt="" srcset="" class="img-fluid">
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout"
                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout" method="POST" class="d-none">

                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark elevation-4" style="background-color: rgba(25, 10, 1, 1)">
            <!-- Brand Logo -->
            <a href="#" class="brand-link text-center" style="border-bottom: none">
                <img src="../img/logo-griya-depo-press1fix-32.png" width="100px"
                    alt="">
            </a>
            <div class="sidebar mt-4">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" style="color: white" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <li class="nav-item <?php if ($current_page == 'dashboard.php') echo 'act' ?>">
                            <a href="dashboard.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-element-3-3.svg" alt="">
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item <?php if ($current_page == 'report.php') echo 'act' ?>">
                            <a href="report.php" class="nav-link text-white">
                                <img src="../img/icon-1-2-1.svg" alt="">
                                <p>Report</p>
                            </a>
                        </li>
                        <li class="nav-header">Admin</li>
                        <li class="nav-item <?php if ($current_page == 'leads.php') echo 'act' ?>">
                            <a href="leads.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-people-2.svg"
                                    alt="">
                                <p>Leads</p>
                            </a>
                        </li>
                        <!-- contact.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'contact.php') echo 'act' ?>">
                            <a href="contact.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-briefcase.svg"
                                    alt="">
                                <p>Contact</p>
                            </a>
                        </li>

                        <!-- project.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'project.php') echo 'act' ?>">
                                <a href="project.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-bag.svg"
                                    alt="">
                                <p>Project</p>
                            </a>
                        </li>

                        <!-- sales-order.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'sales_order.php') echo 'act' ?>">
                            <a href="sales_order.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-receipt-discount-3.svg"
                                    alt="">
                                <p>Sales Order</p>
                            </a>
                        </li>

                        <!-- purchase.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'purchase.php') echo 'act' ?>">
                            <a href="purchase.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-profile-2user-1.svg"
                                    alt="">
                                <p>Purchase</p>
                            </a>
                        </li>

                        <!-- delivery.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'delivery.php') echo 'act' ?>">
                            <a href="delivery" class="nav-link text-white">
                                <img src="../img/vuesax-bold-truck-remove.svg"
                                    alt="">
                                <p>Delivery</p>
                            </a>
                        </li>

                        <!-- credit-application.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'credit_application.php') echo 'act' ?>">
                            <a href="credit_application.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-empty-wallet.svg"
                                    alt="">
                                <p>Credit Application</p>
                            </a>
                        </li>

                        <!-- product.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'product.php') echo 'act' ?>">
                            <a href="product.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-bag.svg"
                                    alt="">
                                <p>Product</p>
                            </a>
                        </li>

                        <!-- inbox-message.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'inbox_message.php') echo 'act' ?>">
                            <a href="inbox_message.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-direct.svg"
                                    alt="">
                                <p>Inbox Message</p>
                            </a>
                        </li>

                        <!-- reimbursement.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'reimbursement.php') echo 'act' ?>">
                            <a href="reimbursement.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-empty-wallet-time.svg"
                                    alt="">
                                <p>Reimbursement</p>
                            </a>
                        </li>

                        <!-- absensi.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'absensi.php') echo 'act' ?>">
                            <a href="absensi.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-sms-tracking-3.svg"
                                    alt="">
                                <p>Absensi</p>
                            </a>
                        </li>

                        <!-- setting.blade.php -->
                        <li class="nav-item <?php if ($current_page == 'setting.php') echo 'act' ?>">
                            <a href="setting.php" class="nav-link text-white">
                                <img src="../img/vuesax-bold-setting-2.svg"
                                    alt="">
                                <p>Setting</p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
