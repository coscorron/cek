<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include("referencia.php");
  ?>
    <!-- Title Page-->
    <title>Dashboard</title>
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
                                  <div class="card-header">ADD NOTIFY</div>
                                  <div class="card-body card-block">
                                    <form action="" method="post" novalidate="novalidate">
                                      <div class="form-group">
                                          <label for="select" class=" form-control-label">CLIENT</label>
                                          <select name="select" id="select" class="form-control">
                                              <option value="2">Bank A</option>
                                              <option value="0">Bank B</option>
                                              <option value="1">Bank C</option>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="select" class=" form-control-label">TYPE</label>
                                          <select name="select" id="select" class="form-control">
                                              <option value="2">INFORMATION</option>
                                              <option value="0">ERROR</option>
                                          </select>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-12">
                                              <div class="input-group">
                                                  <input type="text" id="input2-group2" name="input2-group2" placeholder="Email" class="form-control">
                                                  <div class="input-group-btn">
                                                      <button class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp;ADD</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                        <div class="table-responsive m-b-40">
                                            <table class="table table-borderless table-data3">
                                                <thead>
                                                    <tr>
                                                        <th>E-MAIL</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>jhon@bankA.com</td>
                                                        <td>
                                                             <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit"></i> EDIT
                                                            </button>
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-minus-square"></i> REMOVE
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>support@install.com</td>
                                                        <td>
                                                             <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit"></i> EDIT
                                                            </button>
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-minus-square"></i> REMOVE
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>jhon@bankA.com</td>
                                                        <td>
                                                             <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit"></i> EDIT
                                                            </button>
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-minus-square"></i> REMOVE
                                                            </button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>jhon@bankA.com</td>
                                                        <td>
                                                             <button type="submit" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit"></i> EDIT
                                                            </button>
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fa fa-minus-square"></i> REMOVE
                                                            </button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                      </div>

                                    </div>
                                    </form>
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
