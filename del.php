<?php



	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$address="";
	$err_address="";
	$author="";
	$err_author="";
	$price="";
    $err_price="";
	$date="";
    $err_date="";
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	//if(isset($_POST["submit"])){
		if(empty($_POST["id"])){
			$err_id="ID Required";
		}
		elseif(strlen($_POST["id"]) < 6){
			$err_id="ID Must be 6 Characters Long";
		}
		elseif(strpos($_POST["id"]," ")){
			$err_id="ID should not contain white space";
		}
		else{
			$id=$_POST["id"];
		}
		if(empty($_POST["name"])){
			$err_name="BOOK Name Required";
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["address"])){
			$err_address="Address Required";
		}else{
			$address=$_POST["address"];
		}
		
		if(empty($_POST["author"])){
			$err_author="Author's Name Required";
		}else{
			$author=$_POST["author"];
		}
		if(empty($_POST["price"])){
			$err_price="Price Required";
		}else{
			$price=$_POST["price"];
		}
		if(empty($_POST["date"])){
			$err_date=" Delivery Date Required";
		}else{
			$date=$_POST["date"];
		}
	}
		
?>

<html> 
<body style
	= "background-color: red";>
    <fieldset>
     
        
		<div style="background-image: url('dbook.jpg');">
		
		
		
        
        <form action="" method="post">
            <fieldset>           
                <legend><b>DELIVERY INFORMATION</b></legend>
                
               <tr>
					<td><span >Book Id</span></td>
					<td>:<input type="text" name="id" value="<?php echo $id;?>" placeholder="Book Id">
						<span><?php echo $err_id;?></span></td>
				</tr> <br>
				
               <tr>
					<td><span >Book Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $name;?>" placeholder="Book Name">
						<span><?php echo $err_name;?></span></td>
				</tr> <br>
				
				<tr>
					<td><span >Author Name</span></td>
					<td>:<input type="text" name="author" value="<?php echo $author;?>" placeholder="Author Name">
						<span><?php echo $err_author;?></span></td>
				</tr> <br>
				
				
                
              <tr>
					<td><span >Price</span></td>
					<td>:<input type="number" name="price" value="<?php echo $price;?>" placeholder="Price">
						<span><?php echo $err_price;?></span></td>
				</tr> <br>
                
                
                
				<td><span>Delivery Date</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				</tr> <br>
				
				<tr>
					<td><span>Address</span></td>
					<td>:<textarea name="address"><?php echo $address;?></textarea>
					<span><?php echo $err_address;?></span></td>
				</tr> <br>
				
				
				
				
				
				
				
				
				
				
				
               
                <input type="submit" name="submit" value="Submit">
     <br>
	 
	 
	 
            
            
            
        </form>
        <br>
       
        </fieldset>
		

</body>
</html>



	