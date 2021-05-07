<?php 

include_once('database.php');
  $result=mysqli_query($connection,"SELECT * FROM advertisement ORDER BY /*advertisement.*/prize DESC");
?>
<html>
    
    <center>HOME</center>
  
    <link rel="stylesheet" href="style.css" type="text/css">
    <body>
     <a href="index.php">Add New advertisement</a><br/><br/>
       <table width='80%' boder=0>
           <tr bgcolor='#cccccc'>
          
           <td>Name</td>
           <td>seller info</td>
           <td>Address</td>
           <td>Phone NO</td>
          <td>Product information</td>
       <td>Product name 
       <p>
<a href="main.php" class="button">H</a> &nbsp;<a href="product_name_as.php" class="button1">↑</a> &nbsp;<a href="product_name_ds.php" class="button2">↓</a>
</p>
</div>

    
          </td>
          <td>Brand</td>
          <td>prize  <p>
<a href="prize_as.php" class="button1">↑</a> &nbsp;<a href="prize_ds.php" class="button2">↓</a>
</p>
</div>

    
          </td>
          <td>Type</td>
      
</tr>

<?php 
  while($display=mysqli_fetch_array($result))
 { echo "<tr>";
 echo "<td>".$display['name']."</td>";
  echo "<td>".$display['seller_info']."</td>";
  echo "<td>".$display['address']."</td>";
  echo "<td>".$display['phone_number']."</td>";
  
  echo "<td>".$display['product_information']."</td>";
  echo "<td>".$display['product_name']."</td>";
  echo "<td>".$display['brand']."</td>";
  echo "<td>".$display['prize']."₹</td>";
  echo "<td>".$display['type']."</td>";
 
 }

?>


</table>
</body>
</html>
