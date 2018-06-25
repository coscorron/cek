<?php
//clientes que no esten asignados aun usuario determinado
function getClientNotSelected($conn,$txtUser){
  $sql = "SELECT tc.idCliente, tc.nombre
          FROM tbl_cliente tc
          WHERE enabled = 1
          and tc.idCliente not in (select idCliente from tbl_cli_usu
          WHERE usuario = '$txtUser')";
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    while (odbc_fetch_row($rs)) {
      $idCliente=odbc_result($rs,"idCliente");
      $nombre = odbc_result($rs,"nombre");
      echo "<option  value='$idCliente'>$nombre</option>";
    }
}


function getClientSelected($conn,$txtUser){
  $sql = "SELECT tc.idCliente, tc.nombre
        FROM tbl_cliente tc, tbl_cli_usu tcu
        WHERE enabled = 1
        and tcu.idCliente = tc.idCliente
        AND tcu.usuario = '$txtUser'";
  $rs=odbc_exec($conn,$sql);
  if (!$rs)
    {exit("Error");}

    while (odbc_fetch_row($rs)) {
      $idCliente=odbc_result($rs,"idCliente");
      $nombre = odbc_result($rs,"nombre");
      echo "<option  value='$idCliente'>$nombre</option>";
    }
}
 ?>
