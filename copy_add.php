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
                                  <div class="card-header">Crear COPY</div>
                                  <div class="card-body card-block">
                                    <form action="" method="post" novalidate="novalidate">
                                      <div class="form-group">
                                        <label for="txtFROM" class=" form-control-label">CLIENT</label>
                                        <select name="select" id="select" class="form-control" >
                                            <option value="2">BANK A</option>
                                            <option value="2">BANK B</option>
                                            <option value="0">BANK C</option>
                                            <option value="1">BANK D</option>
                                            <option value="3">BANK E</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="txtACTION" class=" form-control-label">ACTION</label>
                                          <input type="text" id="txtACTION" name="txtACTION" placeholder="Enter the description of the action" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="txtDescription" class=" form-control-label">DETAILS</label>
                                          <textarea name="txtDescription" id="txtDescription" rows="4"  placeholder="Details / Notes" class="form-control"></textarea>
                                      </div>
                                      <div class="row">
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtFROM" class=" form-control-label">FROM</label>
                                            <input type="text" id="txtFROM" name="txtFROM" placeholder="Enter directory FROM" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtTO" class=" form-control-label">TO</label>
                                            <input type="text" id="txtTO" name="txtTO" placeholder="Enter directory TO" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtFILE" class=" form-control-label">FILE</label>
                                            <input type="text" id="txtFILE" name="txtFILE" placeholder="Enter file to copy" class="form-control">
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
