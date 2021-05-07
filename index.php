<html>
<link rel="stylesheet" type="text/css" href="style.css"/>
<body style='font-family: Times New Roman, verdana, sans-serif;'>
	<div style='width: 70%; padding 10px; border: 5px solid #316ED6; background-color: #648CD1; color: #31D8EB; margin: auto; text-align: center;'>

  <form action='' method='post'/>
			<table>
          <h1><b>Fill a details</b></h1>
				<tr>
					<td>
						<b>Name:</b>
					</td>
					<td>
						<input type='text' name='name' style='padding: 4px'/>
					</td>
				</tr>
					<td>
						<b>Seller info:</b>
					</td>
					<td>
						<input type='text' name='seller_info' style='padding: 4px'/>
					</td>
				</tr>
				<tr>
					<td>
						<b>Full Address</b>
					</td>
					<td>
          <textarea name='address'   row=10 columan=70  style='padding: 10px'/> </textarea>
					
					</td>
				</tr>
				<tr>
					<td>
						<b>phone:</b>
					</td>
					<td>
						<input type='text' name='phone_number' style='padding: 4px'/>
					</td>
				</tr>
				<tr>
					<td>
						<b>product info:</b>
					</td>
					<td>
          <textarea name='product_info'   row=3 columan=30 style='padding: 7px'/></textarea>
					</td>
				</tr>
                <tr>
					<td>
						<b>product name</b>
					</td>
					<td>
						<input type='text' name='product_name' style='padding: 4px'/>
					</td>
				</tr>
				<tr>
					<td>
						<b>prize:</b>
					</td>
					<td>
						<input type='text' name='prize' style='padding: 4px'/>
					</td>
				</tr>

				<tr>
					<td>
						<b>brand:</b>
					</td>
					<td>
						<input type='text' name='brand' style='padding: 4px'/>
					</td>
				</tr>
                    
				<tr>
					<td>
						<b>type:</b>
					</td>
					<td>
						<select name='type' style='padding: 4px'/>
						<option>--type--</option>
                         <option value="old">OLD</option>
                         <option value="new">NEW</option> </select>
					</td>
				<tr>
                 
				<tr>
					<td>
						<input type='submit' name='upload' value='Post'/>
					</td>
				</tr>
			</table>
		</form>

<?php
    include_once("database.php");
    if(isset($_POST['upload']))
      {  
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $seller_info=mysqli_real_escape_string($connection,$_POST['seller_info']);
        $address=mysqli_real_escape_string($connection,$_POST['address']);
        $phone=mysqli_real_escape_string($connection,$_POST['phone_number']);
        $product_info=mysqli_real_escape_string($connection,$_POST['product_info']);
        $product_name=mysqli_real_escape_string($connection,$_POST['product_name']);
        $Brand=mysqli_real_escape_string($connection,$_POST['brand']);
        $prize=mysqli_real_escape_string($connection,$_POST['prize']);
        $type=mysqli_real_escape_string($connection,$_POST['type']);

        if (empty($name) || empty($address) || empty($phone) || empty($product_info) ||empty($product_name||empty($Brand)) ||empty($prize) || empty($type) )
        {
            if(empty($name))
            {
             echo "<font color='red'>name is empty</font></br>";
            }
        
        
        if(empty($address))
           {
            echo "<font color='black'>address is empty</font></br>";
           }
       
       if(empty($phone))
           {
            echo "<font color='black'></br>phone number firld is empty</font></br>";
           }

       if(empty($product_info))
          {
        echo "<font color='black'>enter product information</font></br>";
          }
   
   
   if(empty($product_name))
         {
   echo "<font color='black'>product field is empty</font></br>";
         }  
  
  if(empty($Brand))
        {
        echo "<font color='black'></br>brand field is empty</font></br>";
        }
         
        if(empty($prize))
        {
        echo "<font color='black'></br>prize field is empty</font></br>";
        }

        if(empty($type))
        {
        echo "<font color='red'></br>field is empty</font></br>";
        }

       }
       else {
        $result= mysqli_query($connection,"INSERT INTO advertisement(name,seller_info,address,phone_number,product_information,product_name,brand,prize,type) VALUES('$name','$seller_info','$address','$phone','$product_info','$product_name','$Brand','$prize','$type')");
        echo"<br/><a href='main.php'>view result</a>";

       }

      }