<?php
//variable de sesion
session_start();
include("connection_db.php");
include("WS_user.php");
$txtUser = isset($_POST['txtUser']) ? $_POST['txtUser'] : '';

RemoveUser($conn, $txtUser);
$ref="user_list.php";
$error="&nbsp;&nbsp;&nbsp;<b>Removed user $txtUser</b>";
?>
<html>
<body>
<form name="form1" id="form1" method="post" action="<?php echo $ref; ?>">
  <input type="hidden" id="txtUser" name="txtUser" value="<?php echo $txtUser; ?>">
  <input type="hidden" id="txtNombre" name="txtNombre" value="<?php echo $txtNombre; ?>">
  <input type="hidden" id="slcProfile" name="slcProfile" value="<?php echo $slcProfile; ?>">
  <input type="hidden" id="chkEnabled" name="chkEnabled" value="<?php echo $chkEnabled; ?>">
  <input type="hidden" id="txtError" name="txtError" value="<?php echo $error; ?>">
</form>
<script>
  form1.submit();
</script>
</body>
</html>
