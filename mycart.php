<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap");
     body{
        font-size:16px;
        background-color:#f6dad9;
     }

    .logo-container{
        display: block;
        text-align:center;
    }
    .logo {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    }

    .nav-logo {
    height: 5rem;
    width: auto;
    }

    .logo-title{
    position:relative;
    color: #000;
    margin-left: 10px;
    margin-top: 90px;
    font-size: 4rem;
    font-family: "Sacramento", cursive;
    font-weight: 600;
    letter-spacing: 2px;
    text-decoration: none;
    text-shadow: var(--text-shadow);
    }


    .heading{
        color:#000;
        font-family: "Playfair Display", serif;
        font-size:2.4rem;
        text-align:center;
        padding-left:20%;
     }

    .box{
    background-color:#ecf2e6;
    width: 1500px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-wrap: wrap;
    margin-left: 50px;
    transition: all 1s ease;
    z-index:99;
    }

    .box .img-area {
  flex: 0 0 50%;
  max-width: 50%;
  position: relative;
  overflow: hidden;
  padding: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.box .img-area h1 {
  font-size: 30px;
}

.box .img-area .img {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-image: url("img/bg.jpg");
  background-size: cover;
  background-position: center;
  animation: zoomInOut 7s linear infinite;
  z-index: -1;
}
@keyframes zoomInOut {
  0%,
  100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
}

.form-style{
  margin-left:7%;
  margin-right:8%;
  width: 100%;
  padding: 20px 10px;
  font-size:20px;
}
.form-control {
  height: 45px;
  margin-bottom: 30px;
  width: 100%;
  border: none;
  border-bottom: 1px solid #cccccc;
  font-size: 20px;
  color: #000000;
  margin-top:5px;
  padding-bottom:5px;
  border-radius:5px;
}

.form .form-control:focus {
  outline: none;
}

.btn-danger{
  width: 100%;
  background-color: #e91e63;
  height: 30px;
  padding:7px 10px;
  border: none;
  border-radius: 25px;
  font-size: 16px;
  text-transform: uppercase;
  color: #ffffff;
  cursor: pointer;
}

.btn-submit {
  width: 100%;
  background-color: #e91e63;
  margin-top: 40px;
  height: 45px;
  border: none;
  border-radius: 25px;
  font-size: 15px;
  text-transform: uppercase;
  color: #ffffff;
  cursor: pointer;
}

.table-main{
	width: 100%;
	overflow: hidden;
    margin-left:10%;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

.table-header,
.table-data {
  font-size:0.9rem;
    text-align:center;
	padding: 10px;
	background-color: rgba(0,0,0,0.009);
	color: #000;
}

.table-header{
        text-align:center;
		background-color: #55608f;
	}

.table-data{
        color:#000;
}

h3{
    font-size:1.6rem;
    font-family:"Playfair Display", serif;
    margin-left:10%;
}
    </style>
</head>
<body>
    <div class="box">
  	 	 <div class="img-area">
  	 	 	<div class="img">
  	 	 	</div>
        <div class="logo">
                <img src="img/butterfly-made-of-lotus-flower-3872ld-removebg-preview (1).png" class="nav-logo">
  	 	 	<p class="logo-title">Meadow ville</p>
</div>
  	 	 </div>
        <div class="row">
            <div class="col">
                <h1 class="heading">MY CART</h1>
            </div>
<table class="table-main">
        <thead>
            <tr class="table-row">
            <th class="table-header" scope="col">Serial No.</th>
            <th class="table-header" scope="col">Item Name</th>
            <th class="table-header" scope="col">Item Price</th>
            <th class="table-header" scope="col">Quantity</th>
            <th class="table-header" scope="col">Total</th>
            <th class="table-header" scope="col"></th>
            </tr>
        </thead>
<tbody>
    <?php
    if(isset($_SESSION['cart']))
    {
    foreach($_SESSION['cart'] as $key => $value)
    {
        $sr=$key+1;
        echo"
        <tr class='table-row'>
        <td class='table-data'>$sr</td>
        <td class='table-data'>$value[Item_Name]</td>
        <td class='table-data'>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
        <td class='table-data'>
        <form action='manage_cart.php' method='post'>
        <input type='number' class='iquantity' name='Mod_Quantity' onchange='this.form.submit();' value='$value[Quantity]' min='1' max='10'>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        <td class='itotal table-data'></td>
        <td class='table-data'>
        <form action='manage_cart.php' method='post'>
        <button name='Remove_Item' class='btn btn-danger'>Remove</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
        </tr>
        ";
    }
    }
    ?>
</tbody>
</table>
<div class="col-2">
    <h3>Grand Total: <span id="gtotal"></span></h3>
    <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {
    ?>
    <form class="form-style" action="purchase.php" method="post">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control" required>
</div>
<div class="form-group">
            <label>Phone number</label>
            <input type="number" name="phone_no" class="form-control" required>
</div>
<div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>
</div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="pay_mode">
            <label class="form-check-label" for="pay_mode">Cash on Delivery</label>
</div>
<br>
        <button class='btn-submit' name="purchase">Make Purchase</button>
</form>
<?php
    }
?>

</div>
</div>
</div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {

            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();
</script>
</body>
</html>