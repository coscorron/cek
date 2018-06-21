<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("referencia.php");
    include("connection_db.php");
    include("WS_perfil.php");
  ?>
    <!-- Title Page-->
    <title>User Profile</title>
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
                          <form name="form1" id="form1" method="post" action="WS_perfil.php" >
                              <div class="card">
                                  <div class="card-header">NEW USER</div>
                                  <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="txtUser" class=" form-control-label">EMAIL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="txtUser" name="txtUser" placeholder="Enter the mail" class="input-sm form-control-sm form-control" value="" required maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="txtUser" class=" form-control-label">NAME</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Enter the name" class="input-sm form-control-sm form-control" value="" required maxlength="100">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="txtPass" class=" form-control-label">PASSWORD</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="txtPass" name="txtPass" placeholder="Enter the password" class="input-sm form-control-sm form-control" value=""  required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="txtPassConf" class=" form-control-label">CONFIRM PASSWORD</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="txtPassConf" name="txtPassConf" placeholder="confirm password" class="input-sm form-control-sm form-control" value="" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">ENABLED</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                          <label class="switch switch-text switch-primary switch-pill">
                                            <input type="checkbox" class="switch-input" checked="true" >
                                            <span data-on="On" data-off="Off" class="switch-label"></span>
                                            <span class="switch-handle"></span>
                                          </label>
                                        </div>
                                    </div>
                                      <div class="row form-group">
                                        <div class="col col-md-3">
                                          <label for="select" class="form-control-label">PROFILE</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                          <select name="slcProfile" id="slcProfile"  required><?php getPerfil($conn, 0); ?></select>
                                      </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card-body text-secondary">
                                          <label for="selectFROM" class=" form-control-label">CLIENT(S)</label>
                                          <select name="selectFROM" id="selectFROM" class="form-control" multiple="" disabled>
                                              <option value="2">BANK A</option>
                                              <option value="2">BANK B</option>
                                              <option value="0">BANK C</option>
                                              <option value="1">BANK D</option>
                                              <option value="3">BANK E</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-body text-secondary">
                                          <label for="txtFROM" class=" form-control-label">&nbsp;</label>
                                          <button type="submit" class="btn btn-primary btn-sm btn-block" disabled>
                                              <i class="fa fa-arrow-circle-right"></i> ADD
                                          </button><br>
                                          <button type="submit" class="btn btn-primary btn-sm btn-block" disabled>
                                              <i class="fa fa-arrow-circle-left"></i> REMOVE
                                          </button><br>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card-body text-secondary">
                                          <label for="selectCLIENT" class=" form-control-label">CLIENT(S) SELECTED</label>
                                          <select name="selectCLIENT" id="selectCLIENT" class="form-control" multiple="" disabled>

                                          </select>
                                        </div>
                                    </div>
                                  </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm" onclick="">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="location.href='user_list.php'">
                                        <i class="fa fa-chevron-left"></i> Back
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Cancel
                                    </button>
                                </div>
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
<script>
var form = document.getElementById('form1');
var pass1 = document.getElementById('txtPass');
var pass2 = document.getElementById('txtPassConf');

form.addEventListener("submit", function (event) {
  if (pass1.value != pass2.value){
    alert('WRONG password confirm!');
    event.preventDefault();
    pass2.focus();
  }
}, false);
</script>
</html>
<!-- end document-->
<?php odbc_close($conn); ?>
