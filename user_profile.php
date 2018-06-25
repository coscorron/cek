<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("referencia.php");
    include("connection_db.php");
    include("WS_user.php");
    include("WS_perfil.php");
    include("WS_client.php");

    $txtUser = isset($_POST['txtUserEdit']) ? $_POST['txtUserEdit'] : '';
    $resultado = getUser($conn,$txtUser);
    $txtPassword = $resultado[0];
    $txtNombre = $resultado[1];
    $slcProfile = $resultado[2];
    $txtHabilitado = $resultado[3];
  ?>
    <!-- Title Page-->
    <title>User Profile</title>
    <script>
    function Add(){
      if (form1.selectA.value != ""){
        form1.action = "user_add_client.php";
        form1.submit();
      }
    }
    function Remove(){
      if (form1.selectB.value != ""){
        form1.action = "user_remove_client.php";
        form1.submit();
      }
    }
    </script>
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
                            <form name="form1" id="form1" method="post" action="user_edit.php" >
                              <div class="card">
                                  <div class="card-header">USER PROFILE</div>
                                  <div class="card-body card-block">
                                    <form action="" method="post" >
                                      <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="txtUser" class=" form-control-label">EMAIL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="txtUser" name="txtUser" placeholder="Enter the mail" class="input-sm form-control-sm form-control" value="<?php echo $txtUser; ?>" required maxlength="50" disabled>
                                            <input type="hidden" id="txtUser2" name="txtUser2" value="<?php echo $txtUser; ?>" >
                                        </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="txtUser" class=" form-control-label">NAME</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="text" id="txtNombre" name="txtNombre" placeholder="Enter the name" class="input-sm form-control-sm form-control" value="<?php echo $txtNombre; ?>" required maxlength="100">
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="txtPass" class=" form-control-label">PASSWORD</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                              <input type="password" id="txtPass" name="txtPass" placeholder="Enter the password" class="input-sm form-control-sm form-control" value="<?php echo $txtPassword; ?>"  required>
                                          </div>
                                      </div>
                                      <div class="row form-group">
                                          <div class="col col-md-3">
                                              <label for="select" class=" form-control-label">ENABLED</label>
                                          </div>
                                          <div class="col-12 col-md-9">
                                            <label class="switch switch-text switch-primary switch-pill">
                                              <input type="checkbox" id="chkEnabled" name="chkEnabled" class="switch-input" <?php echo $txtHabilitado; ?> >
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
                                            <select name="slcProfile" id="slcProfile"  required><?php getPerfil($conn, trim($slcProfile)); ?></select>
                                        </div>
                                      </div>
                                  </div>
                                      <div class="row">
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtFROM" class=" form-control-label">CLIENT(S)</label>
                                            <select name="selectA" id="selectA" class="form-control" multiple="">
                                                <?php getClientNotSelected($conn, trim($txtUser)); ?>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtFROM" class=" form-control-label">&nbsp;</label>
                                            <button type="button" class="btn btn-primary btn-sm btn-block" onclick="Add();">
                                                <i class="fa fa-arrow-circle-right"></i> ADD
                                            </button><br>
                                            <button type="button" class="btn btn-primary btn-sm btn-block" onclick="Remove();">
                                                <i class="fa fa-arrow-circle-left"></i> REMOVE
                                            </button><br>
                                          </div>
                                      </div>
                                      <div class="col-lg-4">
                                          <div class="card-body text-secondary">
                                            <label for="txtFILE" class=" form-control-label">CLIENT(S) SELECTED</label>
                                            <select name="selectB" id="selectB" class="form-control" multiple="">
                                                <?php getClientSelected($conn, trim($txtUser)); ?>
                                            </select>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
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
