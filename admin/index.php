<!DOCTYPE html>
<html lang="en">
<?php include "includes/head-scripts.php";?>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <?php include "includes/side-nav.php";?>
        <div class="page-wrapper" style="min-height: 964px;">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="./images/income.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Broj proizvoda</h6>
                                        <h2 class="m-t-0">0</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="./images/assets.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Ukupno komentara</h6>
                                        <h2 class="m-t-0">0</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="./images/expense.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Ukupno korisnika</h6>
                                        <h2 class="m-t-0">0</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span><img src="./images/staff.png" alt="Income"></div>
                                    <div class="align-self-center">
                                        <h6 class="text-muted m-t-10 m-b-0">Trenutno online korisnika</h6>
                                        <h2 class="m-t-0">0</h2></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title m-b-5"><span class="lstick"></span>Sales Overview </h3>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-theme stats-bar">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20 active" style="background-color: red">
                                            <h6 class="text-white">DANGER!</h6>
                                            <h3 class="text-white m-b-0">ERASE THE WEBSITE</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">This Month</h6>
                                            <h3 class="text-white m-b-0">$7,589</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="p-20">
                                            <h6 class="text-white">This Week</h6>
                                            <h3 class="text-white m-b-0">$1,476</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><span class="lstick"></span>Posetioci</h4>
                                <table class="table vm font-14">
                                    <tbody><tr>
                                        <td class="b-0">Mobilni</td>
                                        <td class="text-right font-medium b-0">38.5%</td>
                                    </tr>
                                    <tr>
                                        <td>Tablet</td>
                                        <td class="text-right font-medium">30.8%</td>
                                    </tr>
                                    <tr>
                                        <td>Kompjuteri</td>
                                        <td class="text-right font-medium">7.7%</td>
                                    </tr>
                                    <tr>
                                        <td>Ostalo</td>
                                        <td class="text-right font-medium">23.1%</td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer"> © 2018 Admin Pro by Ivan The Awesome Butt Vaci </footer>
        </div>
    </div>
<?php include "includes/footer-scripts.php"?>