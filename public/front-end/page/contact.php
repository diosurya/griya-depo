<?php
include('../layout/header.php');
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Contact</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-add.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>New</h6>
                                        <h3>40</h3>
                                        <p class="text-warning">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-tick.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Actice</h6>
                                        <h3>50</h3>
                                        <p class="text-success">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 d-flex align-items-center">
                                        <img src="../img/vuesax-bold-user-remove.svg" alt="" class="img-fluid ">
                                    </div>
                                    <div class="col-md-8">
                                        <h6>Non Active</h6>
                                        <h3>10</h3>
                                        <p class="text-danger">off all contact list</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTabs">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="all-tab" data-toggle="tab" href="#all">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="contractor-tab" data-toggle="tab" href="#contractor">
                                <i class="fa fa-building" aria-hidden="true"></i>
                                Contractor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" id="industri-tab" data-toggle="tab" href="#industri">
                                <i class="fa fa-hospital" aria-hidden="true"></i>
                                Industri
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active p-2" id="all">
                            <H2>Data Contact</H2>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button class="btn act text-white">+ Add
                                        Contact</button>
                                    <button class="btn text-white px-4 " style="background: rgba(77, 174, 50, 1)">Import</button>
                                </div>
                            </div>
                            <div class="row">
                                <div style="width: 25%" class="px-2">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search" class="form-control" id="date">
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">

                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Status-</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 15%" class="px-2">
                                    <div class="form-group">
                                        <select name="" class="form-control" id="">
                                            <option value="">-Select Sales-</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 30%" class="px-2">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                            </div>
                            <div class="container ">
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Join Since</th>
                                                    <th>Due Date</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="">PT Barata Indonesia</a></td>
                                                    <td>Nginden V Surabaya</td>
                                                    <td>Rp. 10.000.000</td>
                                                    <td>12 Feb 2022</td>
                                                    <td><span class="px-2 bg-secondary mx-1 rounded">supplier</span><span class="px-2 bg-secondary mx-1 rounded">Contractor</span></td>
                                                    <td><span class="px-2 bg-success rounded">Active</span></td>
                                                    <td><span class="px-2 bg-secondary rounded">Wisnu</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contractor">

                            <h3>Content for Contractor</h3>
                            <p>This is the content of Tab 3.</p>
                        </div>
                        <div class="tab-pane fade" id="industri">
                            <h3>Content for Industri</h3>
                            <p>This is the content of Tab 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="content">
</section>
<?php
include('../layout/footer.php');
?>