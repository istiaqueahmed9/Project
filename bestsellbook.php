<html>

<h1> BEST SELLER BOOK </h1>
	<head></head>
	<body style
	= "background-color: grey";>
	
	<img src = "badshah namdar.jpeg" width = "192px" height = "192px">
	<img src = "vinchi.jpeg" width = "182px" height = "182px">
	<img src = "the.jpeg" width = "182px" height = "198px">
	<img src = "mirror.jpeg" width = "182px" height = "198px">
	<img src = "half.jpeg" width = "182px" height = "182px">
	<img src = "woman.jpeg" width = "182px" height = "182px">
	<
	
<table border = 10>
			<tr>
				<td><b>book genre</b></td>
				<th>Name</th>
				<th>writter</th>
				<th>price</th>
				
			</tr>
			<tr>
				<td rowspan="5" align="center">Fiction</td>
				<td>Homeland Elegies</td>
				<td>Ayad Akhtar</td>
				<td>360 taka</td>
				
			</tr>
			<tr>
				<td>The Mirror & the Light</td>
				<td>Hilary Mantel</td>
				<td>275 taka</td>
			</tr>
			<tr>				
				<td>The Vanishing Half</td>
				<td>Brit Bennett</td>
				<td>305 taka</td>
			</tr>
			
			<tr>				
				<td>Boro Saheb</td>
				<td>Shirshendu Mukhopadhyay</td>
				<td>240 taka</td>
			</tr>
			
			
			
			
			<tr>				
				<td>Quantum Mechanics</td>
				<td>Muhammed Zafar Iqbal</td>
				<td>240 taka</td>
			</tr>
			
			<tr>
				<td rowspan="3" align="center">Historical Fiction</td>
				<td>The Immortals of Meluha</td>
				<td>Amish Tripathi</td>
				<td>400 taka</td>
				</tr>
				
				<tr>
			<td>Badshah Namdar</td>
				<td>Humayun Ahmed</td>
				<td>380 taka</td> 
				</tr>
				
				<tr>
			<td>Prachin Mishor</td>
				<td>Sachindra Nath Chattopadhyay</td>
				<td>295 taka</td> 
				</tr>
				
				<tr>
				<td rowspan="3" align="center"> Mystery</td>
				<td>The Whistler </td>
				<td>John Grisham</td>
				<td>365 taka</td>
				
			</tr>
			
			
			<tr>				
				<td>The Da Vinci Code</td>
				<td>Dan Brown</td>
				<td>440 taka</td>
			</tr>
			
			<tr>				
				<td>The Woman in White</td>
				<td>Wilkie Colins</td>
				<td>440 taka</td>
			</tr>
			
					
		</table>

<hr>

<center>


  
<?php
    $name="";
    $err_name="";
	
	$order="";
	$err_order="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	
		if(empty($_POST["name"])){
			$err_name="Name required";
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["order"])){
			$err_order="ORDER Required";
		}
		else{
			$order=$_POST["order"];
		}
		if(empty($_POST["address"])){
			$err_address="Address Required";
		}else{
			$address=$_POST["address"];
		}
		if(empty($_POST["phone"])){
			$err_phone="Phone  number Required";
		}else{
			$phone=$_POST["phone"];
		}
		if(empty($_POST["gender"])){
			$err_gender="Select a any option";
		}else{
			$gender=$_POST["gender"];
		}
		
	}
		
?>

<html>
	<head></head>
	<body>
		<h1>ORDER BOOK</h1>
		<form action="" method="post">
			<table>
			
			<tr>
					<td><span>Name</span></td>
					<td>:<input type="text" name="name" value="<?php echo $order;?>" placeholder="Name">
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span >Order BOOK</span></td>
					<td>:<input type="text" name="order" value="<?php echo $order;?>" placeholder="Order BOOK">
						<span><?php echo $err_order;?></span></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:<input type="number" value="<?php echo $phone;?>" name="phone">
					<span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" name="gender" value="Male"><span>Male</span> 
					<input type="radio" name="gender" value="Female">Female<br></td>
				</tr>
				<tr>
					<td><span>Payment</span></td>
					<td>
						:<select name="payment">
							<option disabled selected>Chose One</option>
							<option>Debit/Credit card</option>
							<option>bkash</option>
							<option>Cash on Delivery</option>
						</select>
					</td>
				</tr> </br>
				
				
				
				<tr>
					<td><span>Address</span></td>
					<td>:<textarea name="address"><?php echo $address;?></textarea>
					<span><?php echo $err_address;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				
			</table>
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>



    </form>
    
</center>		
		 
</body>
</html>
		
		
		