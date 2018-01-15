<div class="row phases">
	<h3 class="later-phase">1</h3>
	<h3 class="current-phase">2</h3>
	<h3 class="later-phase">3</h3>
</div>
<div class="row" style="display: flex; flex-direction: column; margin-top: 30px;">
<br>
	<h5><b>Potvrdite Vasu informaciju:</b></h5>
<br>
	<h5><b>Ime:</b> <?php echo $firstname; ?></h5>
<br>
	<h5><b>Prezime:</b> <?php echo $lastname; ?></h5>
<br>
	<h5><b>Grad:</b> <?php echo $city; ?></h5>
<br>
	<h5><b>Adresa:</b> <?php echo $address; ?></h5>
<br>
	<h5><b>Broj:</b> <?php echo $number; ?></h5>
<br>
	<h5><b>Broj mobilnog:</b> +381 <?php echo $phone; ?></h5>
</div>
<div class="row" style="justify-content: space-around;">
	<div>
	<a href="http://localhost:8080/BaneStore_Project/userProfile.php?user=edit_profile" style="display: flex; margin-top: 10px;">
	<i class="fa fa-pencil" aria-hidden="true" style="padding: 5px;"></i>
		<p>Izmeni informacije</p>
	</a>
	</div>
	<div>
	<div style="display: flex">
	<a class="btn btn-primary" href="cart.php?phase=phaseOne">
		<i class="fa fa-chevron-left" aria-hidden="true"></i>
		Nazad
	</a>
	<?php
	if ($firstname == null || $lastname == null || $city == null || $address == null || $number == null || $phone == 0) {
		echo "<div class='alert-primary' role='alert'>
			  Molimo Vas da popunite Vas profil
			</div>";
	}else{
		echo "<a class='btn btn-primary' href='cart.php?phase=phaseThree'>
				Dalje
				<i class='fa fa-chevron-right' aria-hidden='true'></i>
			</a>";
	}
	?>
	
	</div>
	</div>
</div>