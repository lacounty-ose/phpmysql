<table border="black">
    <tr>
        <th>SUPPORT</th>
        <th>Transaction</th>
    </tr>


<?php

  $con = mysqli_connect("mysql-Hiten", "simple", "newpassword", "information_schema", "3306" );
  if (!$con) {
     exit('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
  }

  //set the default client character set 
  mysqli_set_charset($con, 'utf-8');
  mysqli_select_db($con, "information_schema");
  
  
  $result = mysqli_query($con, "SELECT support, transactions FROM engines WHERE transactions='NO'");
  while ($row = mysqli_fetch_array($result)) {
  	echo "<tr><td>" . htmlentities($row["support"]) . "</td>"; 
  	echo "<td>" . htmlentities($row["transactions"]) . "</td></tr> \n";
  }
  mysqli_free_result($result);
  mysqli_close($con);
  ?>
  </table>
