<html>

<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<style>
h2, .total {
  font-family: Arvo, sans-serif;
}

body {
  background-image:url('images/3.jpg');
  background-size:cover;
  background-repeat:no-repeat;
}

.container {
  font-family: PT Sans, sans-serif;
  font-size: 18px;
  width: 80%;
  min-width: 620px;
  max-width: 700px;
  height: 360px;
  margin: 50px auto;
  background: #ffe0b1;
  border-radius: 9px;
  overflow: hidden;
}

.icing,
.dough {
  float: left;
  padding: 20px;
  box-sizing: border-box;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.icing {
  width: 33%;
  position: relative;
  padding-right: 24px;
  background: linear-gradient(to right, #ff94b3 0%, #ffb3c9 80%);
  color: white;
}
.icing:before {
  content: '';
  width: 36px;
  height: 36px;
  display: block;
  position: absolute;
  top: -18px;
  right: -7.2px;
  z-index: 1;
  background: #ffb3c9;
  border-radius: 50%;
  box-shadow: 21.8181818182px 28.8px 0 #ffe0b1, 0 57.6px 0 #ffb3c9, 21.8181818182px 86.4px 0 #ffe0b1, 0 115.2px 0 #ffb3c9, 21.8181818182px 144px 0 #ffe0b1, 0 172.8px 0 #ffb3c9, 21.8181818182px 201.6px 0 #ffe0b1, 0 230.4px 0 #ffb3c9, 21.8181818182px 259.2px 0 #ffe0b1, 0 288px 0 #ffb3c9, 21.8181818182px 316.8px 0 #ffe0b1, 0 345.6px 0 #ffb3c9;
}

.dough {
  width: 67%;
  padding-left: 36px;
  color: #90510E;
}

.order {
  flex-grow: 1;
  padding: 20px 0;
  margin: 20px 0;
  border: 1px solid white;
  border-color: white transparent;
}
.order li {
  display: flex;
  justify-content: space-between;
}

h2 {
  font-size: 1.2em;
}

.total {
  font-size: 3em;
}

.form {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-top: 20px;
  flex-grow: 1;
}

.inputs {
  flex-grow: 1;
}

.buttons {
  width: 100%;
}

.row {
  width: 100%;
  display: flex;
  align-items: flex-end;
  margin-bottom: 10px;
}

.column {
  width: 100%;
}
.column:not(:last-child) {
  margin-right: 10px;
}

.label,
.text-input {
  float: left;
  display: block;
  clear: both;
}

.label {
  font-size: 0.8em;
  margin-bottom: 0.2em;
}

.text-input {
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  font-size: 1em;
  font-family: inherit;
  background: white;
  border: 1px solid rgba(144, 81, 14, 0.4);
  border-radius: 5px;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1) inset;
}

.cvc-group {
  flex-basis: 140px;
}

.name-group {
  flex-grow: 1;
  flex-basis: 200px;
}

.expiry-group {
  flex-basis: 100px;
}

.cvc-help {
  padding: 4px 0;
  flex-grow: 0;
  width: 200px;
  font-size: 0.8em;
  line-height: 1.3em;
  opacity: 0.6;
}

.order-button {
  padding: 10px 20px;
  width: 100%;
  box-sizing: border-box;
  font-size: 1em;
  font-family: inherit;
  color: inherit;
  background: rgba(255, 255, 255, 0.5);
  border: 1px solid rgba(144, 81, 14, 0.3);
  box-shadow: 0 2px 2px rgba(144, 81, 14, 0.1);
  border-radius: 5px;
  transition: background 0.1s, color 0.1s, border-color 0.1s;
}
.order-button:hover {
  background: #ff80a5;
  color: white;
  border-color: transparent;
}

</style>
<script>
$(function() {
	$('.card-input').payment('formatCardNumber');
	$('.expiry-input').payment('formatCardExpiry');
	$('.cvc-input').payment('formatCardCVC');

	$('.form').on('submit', function(e) {
		e.preventDefault();
	});
});


</script>

</head>

<body>
    
    <?php    
    
    session_start();
    
      $usernm=$_SESSION['fnm'].$_SESSION['lnm'];
    if(!empty($_POST['done']))
    {
        $rand=rand();
        $_SESSION['rnd']=$rand;
        header("Location:verify.php");
        
    }
    
   
               
                            
    
               
                            ?>

    
    
<div class="container" style="margin-top:100px;height:450px;">
  <div class="icing">
    <h2>Your Order</h2>
    <ul class="order">
        <li>Name : <?php echo  $usernm; ?></li><br/>
        <li>Room Name : <?php echo   $_SESSION['ronm']; ?></li><br/>
        <li>Check In : <?php echo   $_SESSION['cin']; ?></li><br/>
        <li>Checkout : <?php echo   $_SESSION['cout']; ?></li><br/>
        <li>Total Fare : <?php echo   $_SESSION['tf']; ?></li>
        
      
    </ul>
    <div class="total"><font style="font-size:25px;">Total Fare Rs.</font><br/><?php echo   $_SESSION['tf']; ?></div>
  </div>
  <div class="dough">
    <h2>Payment</h2>
    <form class="form" method="post" action="#">
      <div class="inputs">
        <div class="row">
          <div class="column card-group">
            <label class="label" for="card">Card</label>
            <input class="text-input card-input" id="card" placeholder="1234 5678 9012 3456"/>
          </div>
        </div>
        <div class="row">
          <div class="column name-group">
            <label class="label" for="name">Name on Card</label>
            <input class="text-input name-input" id="name"/>
          </div>
          <div class="column expiry-group">
            <label class="label" for="expiry">Expiry</label>
            <input class="text-input expiry-input" id="expiry" placeholder="dd/yy"/>
          </div>
        </div>
        <div class="row">
          <div class="column cvc-group">
            <label class="label" for="cvc">CVC/Security Code</label>
            <input class="text-input cvc-input" id="cvc"/>
          </div>
          <div class="column cvc-help">3-4 digit code. Usually on the back, by the signature.</div>
        </div>
      </div>
        
      <div class="buttons">
          <input type="submit" value="Order" name="done" class="order-button"/>
        
      </div>
        
    </form>
  </div>
</div>
</body>

</html>