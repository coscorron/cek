<?php
function getPerfil($conn,$selected){
  $sql = 'SELECT idPerfil, nombre FROM tbl_perfil ORDER BY nombre ASC';
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    echo "<option $select value=''>Seleccionar</option>";
    while (odbc_fetch_row($rs)) {
      $idPerfil=odbc_result($rs,"idPerfil");
      $nombrePerfil = odbc_result($rs,"nombre");
      if (trim($selected) == trim($idPerfil)){
        $select = " selected ";
      } else {
        $select = " ";
      }
      echo "<option $selected  $idPerfil value='$idPerfil'>$nombrePerfil</option>";
    }
}
 ?>
