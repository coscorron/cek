<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("referencia.php");
  ?>
    <!-- Title Page-->
    <title>Client Profile</title>
</head>
<body class="animsition">
    <div class="page-wrapper">
      <?php include("header_mobile.php"); ?>
      <?php include("left_menu.php"); ?>
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <?php include("profile.php"); ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="section__content section__content--p30">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-header">CLIENT PROFILE</div>
                          <div class="card-body card-block">
                            <form action="" method="post" novalidate="novalidate">
                              <div class="form-group">
                                <label for="txtClient" class=" form-control-label">USER</label>
                                <input type="text" id="txtClient" name="txtClient" placeholder="Enter the description of the action" class="form-control" value="Bank of Q">
                              </div>
                            </form>
                          </div>
                          <div class="card-body">
                              <button type="button" class="btn btn-primary btn-sm">
                                  <i class="fa fa-plus-square"></i>&nbsp; Add Env</button>
                              <button type="button" class="btn btn-danger btn-sm">
                                  <i class="fa fa-ban"></i>&nbsp; Remove Env</button>
                              <button type="button" class="btn btn-primary btn-sm">
                                  <i class="fa fa-envelope-o"></i>&nbsp; List of Notify</button>
                          </div>
                          <div class="row">
                            <div class="col-lg-2">
                              <div class="card-body text-secondary">
                                <label for="txtFROM" class=" form-control-label">Environment</label>
                                <select name="select" id="select" class="form-control" multiple="">
                                  <option value="2">PROD</option>
                                  <option value="0">UAT1</option>
                                  <option value="1">UAT2</option>
                                  <option value="3">QA</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-10">
                              <div class="table-responsive table--no-card m-b-20">
                                <table class="table table-borderless table-striped table-earning">
                                  <thead>
                                    <tr>
                                      <th>Product</th>
                                      <th>Version</th>
                                      <th>Environment</th>
                                      <th>Last Install</th>
                                      <th>In Experian</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>Transac</td>
                                        <td>1.4.1</td>
                                        <td>PROD</td>
                                        <td>15/05/2018</td>
                                        <td class="text-center"><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td>Transac</td>
                                        <td>2.1</td>
                                        <td>UAT</td>
                                        <td>14/06/2018</td>
                                        <td class="text-center"><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                    </tr>
                                    <tr>
                                        <td>POC</td>
                                        <td>41</td>
                                        <td>QA</td>
                                        <td>01/01/2018</td>
                                        <td class="text-center"><input name="check1" class="form-check-input" id="check1" type="checkbox" checked></td>
                                    </tr>
                                    <tr>
                                        <td>POC</td>
                                        <td>38</td>
                                        <td>UAT2</td>
                                        <td>03/12/2017</td>
                                        <td class="text-center"><input name="check1" class="form-check-input" id="check1" type="checkbox" checked></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Cancel
                                    </button>
                                </div>
                              </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 CEK. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

<?php include("referencias2.php"); ?>
</body>

</html>
<!-- end document-->
