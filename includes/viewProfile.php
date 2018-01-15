<main role="main" style="margin-bottom: 35px;">
    <div class="proizvodi text-center">
      <h4>Vas korisnicki profil</h4>
    </div>
	<div class="container" style="padding: 20px;">
	<div class="userProfile">
		<div class="row text-center">
			<div class="col-sm-12 col-md-12">
				<img src="images/user.png" style="width: 100px; margin-top: -50px">
			</div>
		</div>
		<div class="row text-center">
			<div class="col-sm-12 col-md-12">
			<p>
				<i class="fa fa-user profile_icons" aria-hidden="true"></i>
				<b>Ime: </b><?php echo $firstname; ?>
			</p>
			<p>
				<i class="fa fa-user profile_icons" aria-hidden="true"></i>
				<b>Prezime: </b><?php echo $lastname; ?>
			</p>
			<p>
				<i class="fa fa-home profile_icons" aria-hidden="true"></i>
				<b>Grad: </b><?php echo $city; ?>
			</p>
			<p>
				<i class="fa fa-road profile_icons" aria-hidden="true"></i>
				<b>Adresa: </b><?php echo $address; ?>
			</p>
			<p>
				<i class="fa fa-sort-numeric-asc profile_icons" aria-hidden="true"></i>
				<b>Broj: </b><?php echo $number; ?>
			</p>
			<p>
				<i class="fa fa-mobile profile_icons" aria-hidden="true"></i>
				<b>Mobilni: </b><?php echo "+381 " . $phone; ?>
			</p>
				<a href="userProfile.php?user=edit_profile" class="btn btn-primary" style="margin-left: 10px;" >
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</a>
				<a href="#" class="btn btn-danger">
					<i class="fa fa-trash" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	</div>
</main>