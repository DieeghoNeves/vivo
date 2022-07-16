<? 
  $db_host = "localhost"; // Endereço do servidor mySQL 
  $db_user = "root"; // Seu Login no mySQL 
  $db_pass = "qwe00asd"; // Sua Senha no mySQL 
  $db_bdad = "db_sistema"; // Nome do Banco de Dados 
 
  mysqli_pconnect($db_host, $db_user, $db_pass) or die (mysqli_error()); 
  $timestamp=time(); 
  $timeout=time()-300; // valor em segundos 
  $result=mysqli_db_query($db_bdad, "INSERT INTO useronline VALUES ('$timestamp','$REMOTE_ADDR','$PHP_SELF')");
  $result=mysqli_db_query($db_bdad, "DELETE FROM useronline WHERE timestamp<$timeout"); 
  $result=mysqli_db_query($db_bdad, "SELECT DISTINCT ip FROM useronline") or die(mysqli_error()); 
  $usuarios=mysqli_num_rows($result); 
  mysqli_close(); 
 
  echo"$usuarios usuários(S) conectados no site"; 
 
?> 