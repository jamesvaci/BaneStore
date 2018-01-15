             <?php 
                if(isset($_POST['update_user'])){
                    $update_user = $_POST['update_user'];
                    $update_user = mysqli_real_escape_string($connection, $update_user);
                    $post_firstname = $_POST['firstname'];
                    $post_firstname = mysqli_real_escape_string($connection, $post_firstname);
                    $post_lastname = $_POST['lastname'];
                    $post_lastname = mysqli_real_escape_string($connection, $post_lastname);
                    $post_city = $_POST['city'];
                    $post_city = mysqli_real_escape_string($connection, $post_city);
                    $post_address = $_POST['address'];
                    $post_address = mysqli_real_escape_string($connection, $post_address);
                    $post_number = $_POST['number'];
                    $post_number = mysqli_real_escape_string($connection, $post_number);
                    $post_phone = $_POST['phone'];
                    $post_phone = mysqli_real_escape_string($connection, $post_phone);

                    $query = "UPDATE users SET ";
                    $query .= "firstname = '{$post_firstname}', ";
                    $query .= "lastname = '{$post_lastname}', ";
                    $query .= "city = '{$post_city}', ";
                    $query .= "address = '{$post_address}', ";
                    $query .= "phone = '{$post_phone}', ";
                    $query .= "number = '{$post_number}' ";
                    $query .= "WHERE user_id = '{$id}' ";
                    $update_the_user = mysqli_query($connection, $query);
		              if(!$update_the_user){
		                die('query failed ' . mysqli_error($connection));
		              }
              header("Refresh:0; userProfile.php");
                }
?>
<main role="main" style="margin-bottom: 35px;">
    <div class="proizvodi text-center">
      <h4>Izmenite Vas profil</h4>
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
    <form action="" method="post" enctype="multipart/form-data" width="300px">
            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Ime" value="<?php echo $firstname; ?>" style='margin-top: 5px;'>
    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Prezime" value="<?php echo $lastname; ?>" style='margin-top: 5px;'>
    <input type="text" name="city" class="form-control" id="city" placeholder="Grad" value="<?php echo $city; ?>" style='margin-top: 5px;'>
    <input type="text" name="address" class="form-control" id="address" placeholder="Adresa" value="<?php echo $address; ?>" style='margin-top: 5px;'>
    <input type="text" name="number" class="form-control" id="number" placeholder="Number" value="<?php echo $number; ?>" style='margin-top: 5px;'> 
    <div class="input-group" style='margin-top: 5px;'>
        <div class="input-group-prepend" style="padding: 5px;">
          <div class="input-group-text">+381</div>
        </div>
        <input type="text" name="phone" class="form-control" id="inlineFormInputGroupUsername" placeholder="0" value="<?php echo $phone; ?>">
      </div>
    <button type="submit" name='update_user' class="btn btn-primary" style='margin-top: 5px;'>Sacuvaj</button>
    </form>
            </div>
        </div>
    </div>
    </div>
</main>