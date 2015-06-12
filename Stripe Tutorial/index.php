<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stripe Tutorial </title>

    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<!-- Default Check out form -->
<!-- <form action="" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="YOUR STRIPE API KEY"
    data-amount="2000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png">
  </script>
</form> -->

<!-- Custom Check out form -->
<div class="row row-centered">
  <div class="col-md-4 col-md-offset-4">
  <div class="page-header">
    <h2>Stripe Payment Form</h2>
  </div>

<forrm action="" method="POST" class="form-horizontal">
   <!-- Name -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Full Name</label>
    <div class="col-sm-6">
      <input type="text" name="fullname" placeholder="Full Name" class="name form-control">
    </div>
  </div>
  
  <!-- Card Number -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Card Number</label>
    <div class="col-sm-6">
      <input type="text" name="cardnumber" placeholder="Card Number" class="form-control">
    </div>
  </div>

  <!-- Expiry Date -->
  <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Expiry Date</label>
      <div class="col-sm-3">
        <input type="text" id="month" placeholder="01" maxlength="2" class="form-control">
      </div>
      <div class="col-sm-3">
        <input type="text" id="year" placeholder="2016" maxlength="4" class="form-control">
      </div>
    </div>

  <!-- CVC -->
  <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">CVC</label>
      <div class="col-sm-3">
        <input type="text" id="cvc" placeholder="CVC" maxlength="3" class="card-cvc form-control">
      </div>
    </div>

  <!-- Submit -->
  <div class="control-group">
    <div class="controls">
      <center>
        <button class="btn btn-success" type="submit">Checkout</button>
      </center>
    </div>
  </div>

</div>
</div>
 </form>
</body>
</html>
