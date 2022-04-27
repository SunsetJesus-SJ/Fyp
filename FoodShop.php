<?php
require_once('conn.php');
$conn = getDBconnection();
session_start();
if(!isset($_SESSION['staffID']))

{
    echo "<script type='text/javascript'>alert('please login');parent.location.href='Stafflogin.php';</script>";
}


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
    
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				
			}
		}
	}
    elseif($_GET["action"]=="reset")
    {unset($_SESSION["shopping_cart"]);
				}
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" />




    <title>Sell Mode</title>
    <link rel="stylesheet" href="css/loading.css">
       <script>

</script>
</head>

<body>
 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Sell Mode</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                    <li class="nav-item">
                        <a class="nav-link" href="ScanPage.php">Scan Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="FoodShop.php">Food Shop</a>
                    </li>
                </ul>
                <!--ChangeMode Button-->
                <form class="d-flex">
                    <button type="button" class="btn btn-outline-danger" onclick="ChangeMode()">Change mode</button>
                    <script src="js/ChangeMode.js"></script>
                </form>
                <!--ChangeMode Button end-->



            </div>
        </div>
    </nav>
    
              <div class="row ">
        <div class="col-1 ">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Main food<img src="https://img.icons8.com/small/16/000000/french-fries.png" /></a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">
                    Drinks<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-straw" viewBox="0 0 16 16">
                        <path d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z" />
                    </svg>
                </a>
                <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Food Set</a>
            </div>
        </div>
        	
        <div class="col-7 ">
            <div class="tab-content" id="nav-tabContent">

                  <!-- Main food  -->
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <div class="row ">
                   
               	<?php
				$query = "SELECT * FROM tbl_product where type='mainfood' ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
           
               
    
              
   	<div class="col-4">
				<form method="post" action="FoodShop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:2px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive"  style="width:50px;height:60px;"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="number" name="quantity" min="1" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
                <br>
		</div>
       
     
          
             
                 
    
			<?php
					}
				}
			?>
         
               </div>
            
                </div>
                 <!-- Main food End -->
                 <!-- Drink -->
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                   <div class="row ">    
               	<?php
				$query = "SELECT * FROM tbl_product where type='drink' ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
              

			<div class="col-4">
				<form method="post" action="FoodShop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive"  style="width:50px;height:60px;"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="number" name="quantity" min="1" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
		   <br>
            </div>
			<?php
					}
				}
			?>
              </div>
            <br> 
                </div>
                 <!-- Drink end -->
    
                  <!-- food set -->
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                <div class="row ">    
               	<?php
				$query = "SELECT * FROM tbl_product where type='foodset' ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
              

			<div class="col-4">
				<form method="post" action="FoodShop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive"  style="width:50px;height:60px;"/><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="number" name="quantity" min="1" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
		       <br>
            </div>
			<?php
					}
				}
			?>
              </div>
            <br> 
                </div>
                </div>
                 <!-- food set end -->
         
        </div>
           <!-- Paylist  -->
        <div class="col-3 order p-3 m-2" >
            <h4>Order Details</h4>
           
             <hr>
            <div class="d-grid gap-2">
             
          

            <!-- Pay -->
                <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Pay</button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel">Payment Select</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                 <div class="d-grid gap-2">
                            
                              <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#Cash"><h3>Cash </h3><p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                              <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                              <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                            </svg></p></button>
                             <button id="Alipaybtn" class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#Alipay"><h3>Alipay </h3><p><svg width="16px" height="16px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M102.41,32C62.38,32,32,64.12,32,103.78V408.23C32,447.86,64.38,480,104.41,480h303.2c40,0,72.39-32.14,72.39-71.77v-3.11c-1.35-.56-115.47-48.57-174.5-76.7-39.82,48.57-91.18,78-144.5,78-90.18,0-120.8-78.22-78.1-129.72,9.31-11.22,25.15-21.94,49.73-28,38.45-9.36,99.64,5.85,157,24.61a309.41,309.41,0,0,0,25.46-61.67H138.34V194h91.13V162.17H119.09V144.42H229.47V99s0-7.65,7.82-7.65h44.55v53H391v17.75H281.84V194h89.08a359.41,359.41,0,0,1-37.72,94.43c27,9.69,49.31,18.88,67.39,24.89,60.32,20,77.23,22.45,79.41,22.7V103.78C480,64.12,447.6,32,407.61,32H102.41ZM152,274.73q-5.81.06-11.67.63c-11.3,1.13-32.5,6.07-44.09,16.23-34.74,30-13.94,84.93,56.37,84.93,40.87,0,81.71-25.9,113.79-67.37-41.36-20-77-34.85-114.4-34.42Z"/>
                             </svg></p></button>
                            </div>
              </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Select Payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                 
                  </div>
                 
                </div>
              </div>
            </div>
               
             <!-- Cash Modal -->
                <div class="modal fade" id="Cash" tabindex="-1" aria-labelledby="Cash" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cash</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                       <div style="clear:both"></div>
			<br />
		
			
				<table class="table table-bordered">
					<tr>
						<th >Item Name</th>
	
						<th>Total</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"];
                              echo " x", $values["item_quantity"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
					
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="1" align="left">Total</td>
						<td align="left">$ <?php echo number_format($total, 2); ?></td>
					
					</tr>
					<?php
					}
					?>
						
				</table>
	
                        <table class = "calculator"  style="margin-left:auto;margin-right:auto;">
                         <tr>
                         <td colspan = "3">$ <input class = "display-box" type = "text" id = "result" disabled />  </td>

                         </tr>

                       
                         <tr>
                         <!-- display() function display the value of clicked button -->
                         <td> <input class = "btn btn-light" type = "button" value = "1" onclick = "display('1')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "2" onclick = "display('2')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "3" onclick = "display('3')" /> </td>
                        
                         </tr>
                         <tr>
                         <td> <input class = "btn btn-light" type = "button" value = "4" onclick = "display('4')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "5" onclick = "display('5')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "6" onclick = "display('6')" /> </td>
                   
                         </tr>
                         <tr>
                         <td> <input class = "btn btn-light" type = "button" value = "7" onclick = "display('7')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "8" onclick = "display('8')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "9" onclick = "display('9')" /> </td>
              
                         </tr>
                         <tr>
                         <td> <input class = "btn btn-light" type = "button" value = "." onclick = "display('.')" /> </td>
                         <td> <input class = "btn btn-light" type = "button" value = "0" onclick = "display('0')" /> </td>
                         
                         <!-- calculate() function evaluate the mathematical expression -->
                       
                   
                         </tr>
                         </table>
                        <script >
                            function clearScreen() {
                             document.getElementById("result").value = "";
                            }

                            // This function display values
                            function display(value) {
                             document.getElementById("result").value += value;
                            }
                            // This function evaluates the expression and return result
                            function calculate() {
                             var p = document.getElementById("result").value;
                                var q = <?php echo number_format($total, 2); ?>;
                                var ans =  p-q;
                                setTimeout(myTimeout1t1, 4000) 
                             document.getElementById("result").value = ans;
              
                               function myTimeout1t1() {
                              alert(" pay success");
                              parent.location.href='FoodShop.php?action=reset';
                              }
                            }
                        </script>

                      </div>
                      <div class="modal-footer">
                       <input class = "btn btn-danger" type = "button" value = "Reset" onclick = "clearScreen()"  /> 
                           <input class="btn btn-danger" type="button" value="calculate" onclick="calculate()" /> 

                      </div>
                    </div>
                  </div>
                </div>
             <!-- Cash End-->
              <!-- Alipay Modal -->
                <div class="modal fade" id="Alipay" tabindex="-1" aria-labelledby="Alipay" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alipay</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      <div class="container">
                         <div class="qr-code">
                          <img src="images/qrcode.png" class="qr-image">
                        </div>
                       </div>
                                             <script>
                        var container = document.querySelector(".container");
                        var generateBtn = document.querySelector("#Alipaybtn");
                        var qrImg = document.querySelector(".qr-image");
                        
                        generateBtn.onclick = function () {      

                              qrImg.src = "https://api.qrserver.com/v1/create-qr-code/?size=170x170&data=" + Math.random();
                            qrImg.onload = function () {
                              container.classList.add("active");    
                              setTimeout(myTimeout1t1, 4000) 
                               function myTimeout1t1() {
                              alert(" pay success");
                              parent.location.href='FoodShop.php?action=reset';
                            }
                            }
                         
                            
                          }
                      </script>
                      </div>
                     
                    </div>
                  </div>
                </div>
             <!-- Alipay  End-->
             <!-- Pay End-->
            </div>
           <hr>
          			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="30%">Item Name</th>
				
						<th width="10%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"];
                              echo " x", $values["item_quantity"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="FoodShop.php?action=delete&id=<?php echo $values["item_id"]; ?>" class="btn btn-danger">Remove</a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="1" align="left">Total</td>
						<td align="left">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
         <a href="FoodShop.php?action=reset" class="btn btn-danger">Reset</a></td>
      
            
        </div>
            <!-- Paylist  end-->
    </div>
    <!--loading -->

    <!--loading end-->
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      -->
</body>

</html>
