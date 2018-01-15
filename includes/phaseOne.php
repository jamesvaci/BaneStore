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
	  	echo "<td><a id='subtract_pr' u_id='".$id."' pr_id='".$pr_id."' pr_name='".$pr_name."' class='remove-phaseOne' href='#'><i class='material-icons'>clear</i></a></td>";
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
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

        $("a#subtract_pr").on("click", function(event){
          event.preventDefault();
          var u_id = $(this).attr('u_id');
          var id = $(this).attr('pr_id');
          var name = $(this).attr('pr_name');
          $.ajax({
            url: "functions/remove_pr.php",
            data: 'id='+ id+'&name='+ name+'&u_id='+ u_id,
            success: function(data){
              console.log(data)
            }
          });
        });
      })
      </script>