<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    include("referencia.php");
    include("connection_db.php");
    include("WS_user.php");

    $txtError = isset($_POST['txtError']) ? $_POST['txtError'] : '';
  ?>
    <!-- Title Page-->
    <title>User</title>
    <script>
      function editar(user){
        form2.txtUserEdit.value = user;
        form2.submit();
      }
      function Remove(user){
        form3.txtUser.value = user;
      }
      function Delete(){
        form3.submit();
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
                      <div class="card">
                        <div class="card-header">USER LIST <?php  echo $txtError; ?></div>
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="table-responsive table--no-card m-b-20">
                                <form name="form3" id="form3" method="post" action="user_remove.php">
                                  <input type="hidden" id="txtUser" name="txtUser" value="">
                                </form>
                                <form action="user_profile.php" name="form2" id="form2" method="POST">
                                  <input type="hidden" name="txtUserEdit" id="txtUserEdit" value="">
                                <table class="table table-borderless table-striped">
                                  <thead>
                                    <tr>
                                      <th>USER</th>
                                      <th>NAME</th>
                                      <th>PROFILE</th>
                                      <th>STATUS</th>
                                      <th>ACTION</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php getUserList($conn); ?>
                                  </tbody>
                                </table>
                              </form>
                              </div>
                            </div>
                          </div>
                          <form action="user_add.php">
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus-square"></i>&nbsp; Add user</button>
                            </div>
                          </form>
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
        <!-- modal small -->
  			<div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
  				<div class="modal-dialog modal-sm" role="document">
  					<div class="modal-content">
  						<div class="modal-header">
  							<h5 class="modal-title" id="smallmodalLabel">Warning!</h5>
  							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  								<span aria-hidden="true">&times;</span>
  							</button>
  						</div>
  						<div class="modal-body">
  							<p>
  								confirms the user's deletion?
  							</p>
  						</div>
  						<div class="modal-footer">
  							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  							<button type="button" class="btn btn-primary" onclick="Delete();">Confirm</button>
  						</div>
  					</div>
  				</div>
  			</div>
  			<!-- end modal small -->

    </div>

<?php include("referencias2.php"); ?>
</body>

</html>
<!-- end document-->
