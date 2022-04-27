<?php
require_once('conn.php');
$conn = getDBconnection();
session_start();
if(!isset($_SESSION['staffID']))

{
    echo "<script type='text/javascript'>alert('please login');parent.location.href='Stafflogin.php';</script>";
}
 $CheckID=$_SESSION['staffID'];

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
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/profile.css">
    <title>Main Page</title>
   

  </head>

  <body onload="startTime()">

    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <!--user information button-->
        <a class="navbar-brand" id=name style="align-content: center" href="#" data-bs-toggle="modal" data-bs-target="#userinfo">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
          </svg>

          <?php
        $sql1 = "select * from staffaccount SA,positionstatus PS where  SA.StaffID=$CheckID and PS.positionID = SA.Position";

        $rs1 = mysqli_query($conn,$sql1) or die('<div class="error">SQL command fails'.mysqli_error($conn)."</div>");
        $rc1 = mysqli_fetch_assoc($rs1);
        extract($rc1);
        echo "
          <label for=\"customer\" class=\"col-form-label\" style=\"color: white;\" name=\"StaffName\">hi!$Name</label>
          
        </a>
        <!--user information button end-->


        <!--user information-->
        <div class=\"modal fade\" id=\"userinfo\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">User information</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
              </div>




              <div class=\"row m-l-0 m-r-0\">
                <div class=\"col-sm-4  user-profile\">
                  <div class=\"card-block text-center\">
                  
                    <h6 class=\"f-w-600\">$Name</h6>
                    <p>$positionName</p> <i class=\" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16\"></i>
                  </div>
                </div>
                <div class=\"col-sm-8\">
                  <div class=\"card-block\">
                    <h6 class=\"m-b-20 p-b-5 b-b-default f-w-600\">Information</h6>
                    <div class=\"row\">
                       <div class=\"col-sm-6\">
                        <p class=\"m-b-10 f-w-600\">StaffID</p>
                        <h6 class=\"text-muted f-w-400\" Name=\"StaffID\">$StaffID</h6>
                      </div>
                      <div class=\"col-sm-6\">
                        <p class=\"m-b-10 f-w-600\">Phone</p>
                        <h6 class=\"text-muted f-w-400\">$Tel</h6>
                      </div>
                    </div>
                    <div class=\"row\">

                    <div class=\"col-sm-7\">
                        <p class=\"m-b-10 f-w-600\">Email</p>
                        <h6 class=\"text-muted f-w-400\">$Email</h6>
                      </div>
                     <div class=\"col-sm-6\">
                        <p class=\"m-b-10 f-w-600\">branch</p>
                        <h6 class=\"text-muted f-w-400\">$branch</h6>
                      </div>
                     
                    </div>
                   
                  </div>
                </div>



              </div>


            </div>
          </div>

           ";
        ?>
        </div>


        <!--user information end -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="MainPage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkposition.php?movieinfo">Movie info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkposition.php?houseinfo">House info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkposition.php?account">Account management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ScanPage.php">Sell mode</a>
            </li>
            <li class="nav-item">
              <form>
                <a href="Stafflogout.php?logout">
                  <button type="button" class="btn btn-outline-danger">Log out
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>

                  </button>
                </a>
              </form>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <main class="container">
      <div class="card text-center">
        <div class="card-header">
          Punch
        </div>


        <div class="card-body">
               <form  method="post" >
          <h5 >Date:<span id="date" ></span></h5>
     
          <h5 >Time:<span id="time" ></span></h5>
              
          <script src="js/clock.js" name="NowTime"></script>
          <button class="btn btn-primary"  name="PunchIn" id="PunchIn" type="submit" >PunchIn/Checkout</button>  
            <script >
           
              </script>
               <?php
              
                extract($_POST);
               $conn = getDBconnection();
                   date_default_timezone_set('Asia/Hong_Kong');
                $date = date("Y-m-d");
                $time = date('H:i:s');
                 $sql2 =  "Select PunchDate from PunchIn where StaffID= $CheckID and PunchDate='$date'";
                  $rs2 = mysqli_query($conn,$sql2) or die('<div class="error">SQL command fails'.mysqli_error($conn)."</div>");
                    $rc2 = mysqli_fetch_assoc($rs2);
                    @extract($rc2);
               if ($date == @$PunchDate and isset($_POST['PunchIn'])){
                $sql = "UPDATE PunchIN Set
                        Checkouttime = '$time'  WHERE PunchDate='$date' and StaffID='$CheckID'";
                mysqli_query($conn, $sql) or die(mysqli_error($conn));
                $num = mysqli_affected_rows($conn);
                mysqli_close($conn);
                 echo "<script type='text/javascript'>alert('Your CheckOut time is: $time on $date');
                            
                        </script>
                     ";
               } 
               elseif (isset($_POST['PunchIn'])){
                $SQL ="INSERT INTO PunchIn (StaffID,PunchDate,CheckIntime)VALUES ('$CheckID','$date', '$time')";
                                            mysqli_query($conn, $SQL) or die (mysqli_error($conn));                    
                   $num = mysqli_affected_rows($conn);
                      mysqli_close($conn);
                    if ($num == 1  ) {
                     echo "<script type='text/javascript'>alert('You PunchIn time is: $time on $date');
                             let btnPrimary = document.querySelector('#PunchIn');
                             btnPrimary.addEventListener('click', () =>{
                            btnPrimary.innerText = 'Check out';});
                        </script>
                     ";
                    }
                }
               
            ?>

          
              </form>
        </div>
      
   
     
      </div>


      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>
        	<?php
				@$query2 = "SELECT * FROM custsug";
				@$result2 = mysqli_query($conn, $query2);
				if(@mysqli_num_rows($result2) > 0)
				{
					while($row = mysqli_fetch_array($result2))
					{
				?>
        <div class="d-flex text-muted pt-3">
          <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#007bff" />
            <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
          </svg>

          <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
           
            <div class="d-flex justify-content-between">
             
              <strong class="text-gray-dark"><?php echo $row["Suggestion"]; ?></strong>
             <div hidden><?php echo $row["ID"]; ?></div>
            <a type="button" class="btn btn-outline-primary" href="send.php?ID=<?php echo $row["ID"]; ?>">reply</a>
          
            </div>
            <span class="d-block"><?php echo $row["Name"]; ?></span>
          </div>
         
       

        </div>
     
     <?php
					}
				}
			?>
             <small class="d-block text-end mt-3">   	
 
    </small>
      </div>

    </main>

    
           
               
    
              
 
       
     
          
             
                 
   
    <!--loading -->
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
    <script src="js/loading.js"></script>
    <!--loading end-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

  </html>
