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
                                          <label  class=" form-control-label">Pre Implementation</label>
                                          <div class="col-md-12">
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                        <tr>
                                                            <th>VERB</th>
                                                            <th>ACTION</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CHECK</td>
                                                            <td>Version Java</td>
                                                            <td class="process"><span class="badge badge-success">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>VALIDATE</td>
                                                            <td>Service TOMCAT RUN</td>
                                                            <td class="process"><span class="badge badge-success">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>CHECK</td>
                                                            <td>Version Java</td>
                                                            <td class="process"><span class="badge badge-success">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>VALIDATE</td>
                                                            <td>Validate all software is up and running</td>
                                                            <td class="process"><span class="badge badge-success">Success</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          </div>
                                          <label  class=" form-control-label">Inbound Connectivity Component</label>
                                          <div class="col-md-12">
                                            <div class="table-responsive m-b-40">
                                                <table class="table table-borderless table-data3">
                                                    <thead>
                                                        <tr>
                                                            <th>VERB</th>
                                                            <th>ACTION</th>
                                                            <th>status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>LOGIN</td>
                                                            <td>Log into destination</td>
                                                            <td><span class="badge badge-success">Success</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>COPY</td>
                                                            <td>Copy release RXXX files to the servers to be updated</td>
                                                            <td class="info"><span class="badge badge-info">IN PROGRESS</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>BACKUP</td>
                                                            <td>Backup connectivity Inbound & Outbound</td>
                                                            <td class="process"><span class="badge badge-light">PENDING</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>STOP</td>
                                                            <td>Stop TOMCAT service</td>
                                                            <td class="process"><span class="badge badge-light">PENDING</span></td>
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
                                        <i class="fa fa-refresh"></i> Refresh
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
