<?php
//trae los datos asociados a un usuario determinado
function getUser($conn,$user){
  $sql = "SELECT password, nombre, habilitado, idPerfil FROM tbl_usuario WHERE usuario = '$user'";
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    $existe = 0;
    while (odbc_fetch_row($rs)) {
      $existe=1;
      $resultado[0]=trim(odbc_result($rs,"password"));
      $resultado[1] = trim(odbc_result($rs,"nombre"));
      $resultado[2] = trim(odbc_result($rs,"idPerfil"));
      $habilitado = odbc_result($rs,"habilitado");
      if (trim($habilitado) == "1"){
        $habilitado = " checked ";
      } else {
        $habilitado = "";
      }
      $resultado[3] = $habilitado;
    }

  return $resultado;
}

//Valida si el usuario que se está creando ya existe
function userExist($conn,$user){
  $sql = "select usuario from tbl_usuario where usuario = '$user'";
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    $existe = 0;
    while (odbc_fetch_row($rs)) {
      $existe=1;
    }
  return $existe;
}

function changePass($conn,$user,$pass){
  $sql = "select password from tbl_usuario where usuario = '$user' and password = '$pass'";
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    $existe = 0;
    while (odbc_fetch_row($rs)) {
      $existe=1;
    }
  return $existe;
}


//Ingresa un nuevo usuario a la tabla tbl_usuario
function insertUser($conn,$txtUser,$txtNombre,$txtPass,$chkEnabled,$slcProfile){
  $sql = "INSERT INTO tbl_usuario (usuario, password, nombre, idPerfil, habilitado, eliminado) VALUES
          ('$txtUser','$txtPass','$txtNombre',$slcProfile,$chkEnabled,0)";
  $res = odbc_exec($conn, $sql);
}

//Actualiza usuario
function updateUser($conn,$txtUser,$txtNombre,$txtPass,$chkEnabled,$slcProfile,$change){
  $sql = "UPDATE tbl_usuario set nombre = '$txtNombre', idPerfil = $slcProfile, habilitado = $chkEnabled ";
  if ($change ==0){
    $sql2 = " , password = '$txtPass' ";
  } else {
    $sql2= "";
  }
  $sql = $sql . $sql2 . " WHERE usuario = '$txtUser'";
  $res = odbc_exec($conn, $sql);
}

//trae los usuarios existentes en la base de datos
function getUserList($conn){
  $sql = 'SELECT tu.usuario, tu.nombre, tp.nombre as perfil, tu.habilitado
          FROM tbl_usuario tu, tbl_perfil tp
          WHERE tu.eliminado = 0
          AND tu.idPerfil = tp.idPerfil
          ORDER BY tu.usuario asc';
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    while (odbc_fetch_row($rs)) {
      $usuario=trim(odbc_result($rs,"usuario"));
      $nombre = trim(odbc_result($rs,"nombre"));
      $perfil = trim(odbc_result($rs,"perfil"));
      $habilitado = odbc_result($rs,"habilitado");
      if (trim($habilitado) == "1"){
        $enabled = "Enabled";
        $badge = "badge-success";
      } else {
        $enabled = "Disabled";
        $badge = "badge-danger";
      }
      echo "<tr><td>$usuario</td><td>$nombre</td><td>$perfil</td>";
      echo "<td><span class='badge $badge '>$enabled</span></td>
          <td class='text-center'>
            <button type='button' class='btn btn-primary btn-sm' onclick=\"editar('$usuario');\">
                <i class='fa fa-edit'></i> Edit
            </button>
            <button type='button' class='btn btn-danger btn-sm'  data-toggle=\"modal\" data-target=\"#smallmodal\" onclick=\"Remove('$usuario');\">
                <i class='fa fa-ban'></i> Remove
            </button>
          </td>
      </tr>";
    }
}

//asocia un cliente a un usuarios
function AddClient($conn, $idCliente, $txtUser){
  $sql = "INSERT INTO tbl_cli_usu (idCliente, usuario) VALUES
          ('$idCliente','$txtUser')";
  $res = odbc_exec($conn, $sql);
}

//asocia un cliente a un usuarios
function RemoveClient($conn, $idCliente, $txtUser){
  $sql = "DELETE FROM tbl_cli_usu WHERE idCliente = '$idCliente' and usuario = '$txtUser' ";
  $res = odbc_exec($conn, $sql);
}

//elimina un usuario
function RemoveUser($conn, $txtUser){
  $sql = "UPDATE tbl_usuario set  eliminado = 1 WHERE usuario = '$txtUser' ";
  $res = odbc_exec($conn, $sql);
}

?>
