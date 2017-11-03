<?php
// Microsoft SQL Server using the SQL Native Client 10.0 ODBC Driver - allows connection to SQL 7, 2000, 2005 and 2008

$user = "dineshkruzr";
$password = "Hin12Din27$";
$connection = odbc_connect("Driver={Amazon Redshift (x64)}; Server=kruzranalytics.cbimdrzs7vnc.us-east-1.redshift.amazonaws.com; Database=kruzr; UID=dineshkruzr; PWD=Hin12Din27$; Port=5439
", $user, $password);

print($connection);

$query = "SELECT * from kruzr_android.users";
$result = odbc_exec($connect, $query);

while(odbc_fetch_row($result)){
  $count = odbc_result($result, 1);
  print("$count\n");
}

?>
