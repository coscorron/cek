<?php
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

//Ingresa un nuevo usuario a la tabla tbl_usuario
function insertUser($conn,$txtUser,$txtNombre,$txtPass,$chkEnabled,$slcProfile){
  $sql = "INSERT INTO tbl_usuario (usuario, password, nombre, idPerfil, habilitado, eliminado) VALUES
          ('$txtUser','$txtPass','$txtNombre',$slcProfile,$chkEnabled,0)";
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
      $usuario=odbc_result($rs,"usuario");
      $nombre = odbc_result($rs,"nombre");
      $perfil = odbc_result($rs,"perfil");
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
            <button type='submit' class='btn btn-primary btn-sm'>
                <i class='fa fa-edit'></i> Edit
            </button>
            <button type='reset' class='btn btn-danger btn-sm'>
                <i class='fa fa-ban'></i> Remove
            </button>
          </td>
      </tr>";
    }
}
?>
