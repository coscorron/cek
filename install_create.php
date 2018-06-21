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
                                  <div class="card-header">Install Plan XXXX.YYYY.ZZZZ</div>
                                  <div class="card-body card-block">
                                    <form action="" method="post" novalidate="novalidate">
                                      <div class="form-group">
                                          <label  class=" form-control-label"><b>Stage:&nbsp;</b>Pre Implementation</label><br>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-plus-square"></i> Add Stage
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm">
                                              <i class="fa fa-minus-square"></i> Remove Stage
                                          </button>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-plus-square"></i> Add Step
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm">
                                              <i class="fa fa-minus-square"></i> Remove Step
                                          </button>
                                          <div class="col-md-12">
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless ">
                                                    <thead>
                                                        <tr>
                                                            <th>VERB</th>
                                                            <th>ACTION</th>
                                                            <th>NOTES</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CHECK</td>
                                                            <td>Version Java</td>
                                                            <td>check version jdk1.8.0_111</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>VALIDATE</td>
                                                            <td>Service TOMCAT RUN</td>
                                                            <td>check "tomcat8" service</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>CHECK</td>
                                                            <td>Version Java</td>
                                                            <td>check version jdk1.8.0_111</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>VALIDATE</td>
                                                            <td>Validate all software is up and running</td>
                                                            <td>Powercurve service</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                          <label  class=" form-control-label"><b>Stage:&nbsp;</b>Inbound Connectivity Component</label><br>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-plus-square"></i> Add Stage
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm">
                                              <i class="fa fa-minus-square"></i> Remove Stage
                                          </button>
                                          <button type="submit" class="btn btn-primary btn-sm">
                                              <i class="fa fa-plus-square"></i> Add Step
                                          </button>
                                          <button type="submit" class="btn btn-danger btn-sm">
                                              <i class="fa fa-minus-square"></i> Remove Step
                                          </button>
                                          <div class="col-md-12">
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th>VERB</th>
                                                            <th>ACTION</th>
                                                            <th>NOTES</th>
                                                            <th>&nbsp;</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>LOGIN</td>
                                                            <td>Log into destination</td>
                                                            <td>Login into.......</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>COPY</td>
                                                            <td>Copy release RXXX files to the servers to be updated</td>
                                                            <td>copy to server xxx.xxx.yyy.yyy file h.zip</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>BACKUP</td>
                                                            <td>Backup connectivity Inbound & Outbound</td>
                                                            <td>From the follow location....</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>STOP</td>
                                                            <td>Stop TOMCAT service</td>
                                                            <td>From the services control, stop Tomcat service "Tomcat8"</td>
                                                            <td><input name="check1" class="form-check-input" id="check1" type="checkbox"></td>
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
