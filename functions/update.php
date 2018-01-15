<?php
$cartQuantity = "SELECT * FROM cart WHERE user_id = {$id} ";

            $queryFinal = mysqli_query($connection, $cartQuantity);

            $num_rows = mysqli_num_rows($queryFinal);
            
            $totalProducts = $num_rows;

?>
<script type="text/javascript">alert('sdfgsdfg')</script>