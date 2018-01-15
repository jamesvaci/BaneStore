<div class="row phases">
	<h3 class="current-phase">1</h3>
	<h3 class="later-phase">2</h3>
	<h3 class="later-phase">3</h3>
</div>
<div class="row phases">
	<table class="table phases">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Ime proizvoda</th>
	      <th scope="col">Kolicina</th>
	      <th scope="col">Cena</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php 
	  $total =0;
	  $cartQuery = "SELECT * FROM cart WHERE user_id = {$id}";
	  $connectToCartDB = mysqli_query($connection, $cartQuery);
	  while ($row = mysqli_fetch_assoc($connectToCartDB)) {
	  	$pr_name = $row['product_name'];
	  	$pr_id = $row['product_id'];
	  	$pr_price = $row['pr_price'];
	  	$newPr_price = number_format($pr_price, 0, '.', ' ');
	  	$total += $pr_price;
	  	$phaseOne = 2;
	  	echo "<tr>";
	  	echo "<td></td>";
	  	echo "<td>{$pr_name}</td>";
	  	echo "<td>1</td>";
	  	echo "<td>{$newPr_price},00 rsd</td>";
	  	echo "<td><a class='remove-phaseOne' href='cart.php?product_id_subtract={$pr_id}&product_price={$pr_price}&product_name={$pr_name}&loc={$phaseOne}'><i class='material-icons'>clear</i></a></td>";
	  	echo "<tr>";
	  }

	  ?>
	      <td></td>
	      <td></td>
	      <td></td>
	      <td>Ukupno: <?php echo number_format($total, 0, '.', ' ');?>,00 rsd</td>
	    </tr>
	  </tbody>
	</table>
</div>
<div class="row justify-content-center">
	<a class="btn btn-primary" href="cart.php?phase=phaseTwo">
		Dalje
		<i class="fa fa-chevron-right" aria-hidden="true"></i>
	</a>
</div>