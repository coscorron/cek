<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("referencia.php");
  ?>
    <!-- Title Page-->
    <title>Install</title>
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
                        <div class="card-header">INSTALL LIST</div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="table-responsive table--no-card m-b-20">
                                <form action="install_process.php">
                                <table class="table table-borderless table-striped">
                                  <thead>
                                    <tr>
                                      <th>INSTALL</th>
                                      <th>CLIENT</th>
                                      <th>STATUS</th>
                                      <th>ACTION</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td>Install xxx.yyy</td>
                                        <td>Bank of A</td>
                                        <td><span class="badge badge-success">Success</span></td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-search"></i> View
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Remove
                                          </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Install xxx.zzz</td>
                                        <td>Bank of A</td>
                                        <td><span class="badge badge-danger">Error</span></td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-search"></i> View
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Remove
                                          </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Install xxx.xxx</td>
                                        <td>Bank of A</td>
                                        <td><span class="badge badge-secundary">Pending</span></td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-search"></i> View
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Remove
                                          </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Install yyy.yyy</td>
                                        <td>Bank of A</td>
                                        <td><span class="badge badge-primary">In Progress</span></td>
                                        <td class="text-center">
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-search"></i> View
                                          </button>
                                          <button type="reset" class="btn btn-danger btn-sm">
                                              <i class="fa fa-ban"></i> Remove
                                          </button>
                                        </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
                              <form action="copy_add.php">
                                  <div class="card-footer">
                                </div>
                              </form>
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
