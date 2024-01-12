<?php
include('../layout/header.php');
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <h1 class="p-2">Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Average Transaction Time</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" id="hour">
                                        <option value="1">Hour</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="../img/vuesax-bold-truck-tick.png" alt="" class="img-fluid p-3">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Older to Delivery</h5>
                                        <h2>291 Hours</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="../img/vuesax-bold-document-download.png" alt="" class="img-fluid p-3">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Delivery To Invoice</h5>
                                        <h2>0 Hours</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <img src="../img/vuesax-bold-message-add.png" alt="" class="img-fluid p-3">
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <h5>Request To Quotation</h5>
                                        <h2>0 Hours</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Sales Funnel</h2>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img src="../img/vuesax-bold-wallet.png" alt="" class="img-fluid p-1">
                                        </div>
                                        <div class="col-md-8 col-sm-8 ">
                                            <h6>Sales Quatation</h6>
                                            <h6><b>364</b></h6>
                                            <p>Rp. 100.000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 ">
                                            <img src="../img/vuesax-bold-user-tick.svg" alt="" class="img-fluid p-1">
                                        </div>
                                        <div class="col-md-8 col-sm-8 ">
                                            <h6>Sales Order</h6>
                                            <h6><b>150 </b><span class="text-success">+65% </span><span>from SQ</span>
                                            </h6>
                                            <p>Rp. 70.000.000.00 <span class="text-success">+65% </span> From SQ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 ">
                                            <img src="../img/vuesax-bold-truck-fast.svg" alt="" class="img-fluid p-1">
                                        </div>
                                        <div class="col-md-8 col-sm-8 ">
                                            <h6>Sales Delivery</h6>
                                            <h6><b>100 </b><span class="text-warning">70% </span><span>from SQ</span>
                                            </h6>
                                            <p>Rp. 40.000.000.00 <span class="text-warning">70% </span> From SQ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-2">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 ">
                                            <img src="../img/vuesax-bold-directbox-send.svg" alt="" class="img-fluid p-1">
                                        </div>
                                        <div class="col-md-8 col-sm-8 ">
                                            <h6>Invoice</h6>
                                            <h6><b>34 </b><span class="text-info">+65% </span><span>from SQ</span>
                                            </h6>
                                            <p><span class="text-info">60% </span>Ratio From SO RP. 100.000.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h2>On Progress</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div style="width: 20%" class="px-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-center"><b>Bidding</b></h4>
                                        <h1 class="text-center" style="color:  rgba(252, 194, 156, 1); font-size: 54px;"><b>10</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 20%" class="px-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="text-center"><b>Sales Quotation</b></h5>
                                        <h1 class="text-center" style="color:  rgba(252, 194, 156, 1); font-size: 54px;"><b>10</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 20%" class="px-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="text-center"><b>Sales Order</b></h5>
                                        <h1 class="text-center" style="color:  rgba(252, 194, 156, 1); font-size: 54px;"><b>10</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 20%" class="px-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="text-center"><b>Sales Delivery</b></h5>
                                        <h1 class="text-center" style="color:  rgba(252, 194, 156, 1); font-size: 54px;"><b>10</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 20%" class="px-2">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-center"><b>Invoice</b></h4>
                                        <h1 class="text-center" style="color:  rgba(252, 194, 156, 1); font-size: 54px;"><b>10</b></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="card col-md-12">
                <div class="row m-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Sales Payment</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgba(254, 240, 230, 1)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">Open Sales Invoice</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-wallet.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 50.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgb(255, 191, 161)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">OverDue Sales Invoice</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-money-time.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 10.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgb(198, 255, 164)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">Payments Received</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-money-tick.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 50.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Fordue Payment</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="search" class="form-control" id="date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID Invoice</th>
                                        <th>Customer</th>
                                        <th>Total Bill</th>
                                        <th>Due Date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0001</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-danger">Payment is 8 Days Late</td>
                                    </tr>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0002</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-warning">Last Payment In Today</td>
                                    </tr>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0003</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-info">Payment in 12 Days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="card col-md-12">
                <div class="row m-2">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Purchase Payment</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgba(254, 240, 230, 1)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">Open Purchase Invoice</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">5</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-wallet.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 50.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgb(255, 191, 161)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">OverDue Purchase Invoice</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-money-time.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 10.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card h-100">
                                    <div class="card-header" style="background-color: rgb(198, 255, 164)">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="card-title">Purchase Payment Sent</div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="text-right">
                                                    <div class="circl">1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 ">
                                                <img src="../img/vuesax-bold-money-tick.png" alt="" class="img-fluid p-1">
                                            </div>
                                            <div class="col-md-8 col-sm-8 ">
                                                <h6>Total</h6>
                                                <p>Rp. 50.000.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Fordue Purchase</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="search" class="form-control" id="date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Purchase Invoice</th>
                                        <th>Supplier</th>
                                        <th>Total Bill</th>
                                        <th>Due Date</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0001</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-danger">Payment is 8 Days Late</td>
                                    </tr>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0002</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-warning">Last Payment In Today</td>
                                    </tr>
                                    <tr>
                                        <td><a href="">INVGD/2022/XI/0003</a></td>
                                        <td>CV. Mekari</td>
                                        <td>Rp. 10.000.000</td>
                                        <td>12 July 2022</td>
                                        <td class="text-info">Payment in 12 Days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-8 col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h2><b>Best Selling Product</b></h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Omset</th>
                                        <th>Price</th>
                                        <th>Sold</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Plat Besi
                                        <td>Rp 229.120.000,00</td>
                                        <td>Rp 16.000,00</td>
                                        <td>14320 KG</td>
                                    </tr>
                                    <tr>
                                        <td>Plat Besi
                                        <td>Rp 229.120.000,00</td>
                                        <td>Rp 16.000,00</td>
                                        <td>14320 KG</td>
                                    </tr>
                                    <tr>
                                        <td>Plat Besi
                                        <td>Rp 229.120.000,00</td>
                                        <td>Rp 16.000,00</td>
                                        <td>14320 KG</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Best Selling Product Percentage</h5>
                    </div>
                    <div class="card-body">
                        <div class="" style="padding-right: 4rem; padding-left: 4rem">
                            <img src="../img/group-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="frame-77 mt-4">
                            <div class="ellipse"></div>
                            <div class="text-wrapper-55">Cv Tumbu Bersama</div>
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
include('../layout/footer.php')
?>
