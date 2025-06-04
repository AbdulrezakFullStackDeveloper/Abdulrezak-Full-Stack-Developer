<?php include('../includes/connect.php');
       include('../function/commen_function.php');
      
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment Page</title>
    <!--Bootstrap CSS Link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>
      .payment_img {
        width: 120%;
      }
    </style>
  </head>
  <body>
    <!--PHP Code o accss user id-->
    <?php
    $user_ip=getIPAdress();
    $get_user="Select * from user_table where user_ip='$user_ip'";
    $result=mysqli_query($con,$get_user);
    $run_query=mysqli_fetch_array($result);
    $user_id=$run_query['user_id'];
    

    ?>
    <div class="container">
      <h2 class="ext-center text-info">Payment Options</h2>
      <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-md-5">
          <a href="order.php?user_id= <?php echo $user_id ?>" target="_blank"
            ><img src="../images/paypal.png" alt="" class="payment_img"
          /></a>
        </div>
        <div class="col-md-7">
          <a href="order.php?user_id= <?php echo $user_id ?>"
            ><h2 class="text-center text-success">Pay offline/Click Me</h2></a
          >
        </div>
      </div>
    </div>
  </body>
</html>
