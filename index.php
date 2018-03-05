<?php error_reporting(E_ALL);
ini_set('display_errors', 1); ?>
<?php include "includes/header.php"; ?>

<?php include "includes/header-nav.php";?>
<main role="main">
      <div class="proizvodi text-center">
        <h4>Top Proizvodi</h4>
      </div>
      <div class="text-muted">
        <div class="container album">
          <div class="row">
          <?php 

      $query = "SELECT * FROM products ";
      $select_products = mysqli_query($connection, $query);

        // View all the users
        while($row = mysqli_fetch_assoc($select_products)){
          $pr_id = $row['pr_id'];
          $pr_name = $row['pr_name'];
          $pr_desc = $row['pr_desc'];
          $pr_price = $row['pr_price'];
          $pr_newPrice = $row['pr_new_price'];
          $pr_cat = $row['pr_cat'];
          $pr_img1 = $row['pr_pic1'];
          $pr_href = $row['pr_href'];

          ?> 
          <div class="col-sm-12 col col-md-4 f-pr">
              <div class="box">
                <div class="crop">
                  <img alt="<?php echo $pr_name; ?>" src="images/<?php echo $pr_img1; ?>">
                </div>
                <div class="product-text" style="padding: 10px;">
                <p style="font-size: 20px; color: #232323;"><?php echo $pr_name; ?></p>
                <p><?php echo number_format($pr_price, 0, '.', ' ') . ",00"; ?> rsd</p>
                </div>
                <div class="overlay">
                <div class="overlay-text">
                    <?php 
                    if (!isset($_SESSION['type'])) {
                        echo '<a class="no-style" href="prijavise.php"><i class="material-icons" style="margin-top: 9px;">remove_circle</i></a>
                        <h2>0<h2>
                        <a class="no-style" href="prijavise.php"><i class="material-icons" style="margin-top: 9px;">add_circle</i></a>
                        ';
                      }else{
                      include "functions/totalCount.php";
                      echo '<a id="subtract_pr" u_id="'.$id.'" pr_id="'.$pr_id.'" pr_name="'.$pr_name.'" class="no-style" href="index.php">
                      <i class="material-icons" style="margin-top: 9px;">remove_circle</i></a>
                      <h2 id="'.$pr_id.'">' . $totalCount . '</h2>
                      <a id="add_pr" u_id="'.$id.'" pr_id="'.$pr_id.'" pr_price="'.$pr_price.'" pr_name="'.$pr_name.'" class="no-style" href="index.php">
                        <i class="material-icons" style="margin-top: 9px;">add_circle</i>
                      </a>';
                        }?>
                  </div>
                  <p><?php echo $pr_desc; ?> <br> <a href="<?php echo $pr_href; ?>">Saznajte vise</a></p>
                </div>
              </div>
            </div>
          <?php
        }
        ?>
          </div>
        </div>
      </div>

    </main>
    <div style="position: relative; top: 15px;">
<?php include "includes/footer.php"; ?>
</div>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("a#add_pr").on("click", function(event){
          event.preventDefault();
          var u_id = $(this).attr('u_id');
          var id = $(this).attr('pr_id');
          var price = $(this).attr('pr_price');
          var name = $(this).attr('pr_name');
          var first = "#" + id;
          var second = " #" + id;
          $.ajax({
            url: "functions/add_pr.php",
            data: 'id='+ id+'&price='+ price+'&name='+ name+'&u_id='+ u_id,
            success: function(){
              $(first).load(second);
              $("#totalValue").load(" #totalValue");
            }
          });
        });

        $("a#subtract_pr").on("click", function(event){
          event.preventDefault();
          var u_id = $(this).attr('u_id');
          var id = $(this).attr('pr_id');
          var name = $(this).attr('pr_name');
          var first = "#" + id;
          var second = " #" + id;
          $.ajax({
            url: "functions/remove_pr.php",
            data: 'id='+ id+'&name='+ name+'&u_id='+ u_id,
            success: function(){
              $(first).load(second);
              $("#totalValue").load(" #totalValue");
            }
          });
        });
      })
      </script>