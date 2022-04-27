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
   

     <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
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
              <a class="nav-link " aria-current="page" href="MainPage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="checkposition.php?movieinfo">Movie info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="HouseInfoPage.html">House info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="checkposition.php?account">Account management</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Sell.php">Sell mode</a>
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

    <!-- Modal -->
    <nav class="navbar navbar-light bg-light">
        
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </button>

            <div style="margin-left:auto " ;>
                <input id="myInput" type="text" placeholder="Search..">
            </div>
            <!-- add model-->
            <div class="modal fade"addModal" tabindex="-1" id="addModal" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Staff Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form  class="row g-3 needs-validation" method="post" action="CreateStaffAC.php">
                            
                            
                                <div class="row">
                                    <div class="col-md-4">
                                        <label  class="form-label">Name</label>
                                        <input type="text" class="form-control" name="InputName">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="validationCustom02" class="form-label">Position</label>
                                        <select class="form-select" aria-label="Default select example" name="InpurPosition">
                                            <option value="1" selected> Fulltime</option>
                                            <option value="2">Parttime</option>
                                   
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label  class="form-label">Gender</label>
                                        <select class="form-select" aria-label="Default select example" name="InpurGender">
                                            <option value="M">M</option>
                                            <option value="F" selected>F</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <div class="col-md-6">
                                    <label  class="form-label">E-mail</label>
                                    <input type="text" class="form-control"  name="InputEmail" id="InputEmail" >
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Tel</label>
                                    <input type="text" class="form-control"  name="InputTel">
                                </div>
                                <div class="col-md-3">
                                    <label  class="form-label">Set Password<label>
                                    <input type="text" class="form-control" name="InputPassword">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Address</label>
                                    <textarea class="form-control"  name="InputAddress" rows="3"></textarea>
                                </div>
                                <div class="col-md-1">
                                    <label  class="form-label">branch:<label>
                                    <input type="text" class="form-control" name="branch" value="<?php echo"$branch"?>" readonly>
                                </div>
                                <div class="modal-footer">
                            <button class="btn btn-primary"   type="submit"  name="Create" >Create</button>
                     
                        </div>

                            
                            </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
                
            <!-- add model end-->
           

    </nav>

    <main class="container">


        <table class="table caption-top">

            <thead>
                <tr>
                    <th scope="col">Staff ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Postion</th>
                    <th scope="col">Gender</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Tel</th>
                    <th scope="col">Address</th>
                    <th scope="col">Password</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
          <tbody id="myTable">
            
                       <?php
                  
                    
                    $conn = getDBconnection();

                    $SQL = $sql = "Select  * from  positionstatus PS , staffaccount SA where   PS.positionID= SA.Position  and branch='$branch'";
                    $rs1 = mysqli_query($conn, $sql) or die('<div class="error">SQL command fails' . mysqli_error($conn) . "</div>");

                    while ($rc1 = mysqli_fetch_assoc($rs1)) {
                        extract($rc1);
                
                    echo "

                    
                    <tr>
                        <td>$StaffID</td>
                        <td>$Name</td>
                        <td>$positionName</td>
                        <td>$Gender</td>

                        <td>$Email</td>
                        <td>$Tel</td>
                        <td>$Address</td>
                        <td>$Password</td>


                        <td>
                        <div class=\"btn-group\">
                            <a href=\"EditAc.php?StaffID=$StaffID\" class=\"btn btn-success\" >
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-info-circle\" viewBox=\"0 0 16 16\">
                                    <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\" />
                                    <path d=\"m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z\" />
                                </svg>
                            </a>
                            <button type=\"button\" class=\"btn btn-success dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <span class=\"visually-hidden\">Toggle Dropdown</span>
                            </button>
                            <ul class=\"dropdown-menu\">


                                <li><a class=\"dropdown-item\" href=\"delstaff.php?StaffID=$StaffID\">Delete</a></li>
                            </ul>
                        </div>
                         ";}
                         mysqli_free_result($rs1);
                         mysqli_close($conn);
                         ?>
                         
                   
                    </td>

                </tr>
            

                    
            </tbody>
        </table>
        

        
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
