<?php include "./test.php"; ?>
<?php
$query = "SELECT * FROM users WHERE user_id = {$id}";
	  $connectToDB = mysqli_query($connection, $query);
	  while ($row = mysqli_fetch_assoc($connectToDB)) {
	  	$fname = $row['firstname'];
	  	$lname = $row['lastname'];
	  	$city = $row['city'];
	  	$address = $row['address'];
	  	$number = $row['number'];
	  	$broj = $row['phone'];
	  	$mail = $row['email'];
	 }

	$ime = $fname . " " . $lname;
	$mesto = $city . " " . $address . " " . $number;

	  
	  $narudzba = '';
	  $total =0;
	  $cartQuery = "SELECT * FROM cart WHERE user_id = {$id}";
	  $connectToCartDB = mysqli_query($connection, $cartQuery);
	  while ($row = mysqli_fetch_assoc($connectToCartDB)) {
	  	$pr_name = $row["product_name"];
	  	$pr_price = $row["pr_price"];

	  	$newPr_price = number_format($pr_price, 0, ".", " ");
	  	$total += $pr_price;
	  	$narudzba .=  '<tr>';
	  	$narudzba .=  '<td>'.$pr_name.'</td>';
	  	$narudzba .=  '<td>1</td>';
	  	$narudzba .=  '<td>'.$newPr_price.',00 rsd</td>';
	  	$narudzba .=  '</tr>';
	  }

	  $ukupnooo = '<tr><td></td><td></td><td id="price">Ukupno: ' . number_format($total, 0, ".", " ") . ',00 rsd</td></tr>';
	  $narudzba .= $ukupnooo;


if (isset($_POST['submit'])) {
	
	test($mail, $ime, $mesto, $broj, $narudzba);
}
?>
<div class="row phases">
	<h3 class="later-phase">1</h3>
	<h3 class="later-phase">2</h3>
	<h3 class="current-phase">3</h3>
</div>
<div class=" row justify-content-center">
<form  action="" method='post' class="text-center" style="width: 400px;">
		<button name='submit' type="submit" class="btn btn-primary" style="width: 400px; margin-top: 50px;"> Slažem se sa pravilima upotrebe i naruči</button>
</form>
</div>
<div class=" row justify-content-center">
		<a href="https://i.imgur.com/hJDbFEQ.jpg">Vidi pravila upotrebe</a>
</div>
<div class=" row justify-content-center">
	<a class="btn btn-primary" href="cart.php?phase=phaseTwo">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
		Nazad
	</a>
</div>