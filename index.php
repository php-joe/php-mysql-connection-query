<?php
  include_once 'config.php';
  include_once 'mysql.php';

  $mysql = new mysql();
  $myQuery = "Select * from rating LIMIT 10";

  $mysql->getArray($myQuery);

  $emps = $mysql->getArray($myQuery);
  //print_r($emps);
  $tbody = '';
  foreach(array_reverse($emps) as $emp) {
    $tbody .= "<tr><td>"
    . $emp['ID'] . "</td><td>"
    . $emp['Rating'] . "</td><td>"
    . $emp['MovieID'] . "</td></tr>";
  }


 ?>

<table>
  <thead>
    <tr>
      <th>ID: </th>
      <th>Rating: </th>
      <th>MovieID: </th>
    </tr>
  </thead>
  <tbody>
    <?php echo $tbody; ?>
  </tbody>
</table>
