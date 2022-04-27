<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../JavaScript/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function(){
        });
    </script>
    <style>
        div{
            margin: 10px;
        }
    </style>
     
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/loading.css">
    <title>Edit Movie Info</title>
   

</head>
<body> 
 <h1 style="text-align: center;">Edit Staff account</h1>
 <hr>
<?php
                               require_once('conn.php');
                            extract($_GET);
                          
                            $conn = getDBconnection();
                          
                            $SQL = "SELECT * FROM staffaccount WHERE StaffID=$StaffID";
                            $rs = mysqli_query($conn, $SQL);
                            $rc = mysqli_fetch_assoc($rs);
                            extract($rc);
                        ?>
                      
            <form class="row g-3 needs-validation" method="post" action="updateAC.php">
                                       
                        <?php
                                             if(isset($_GET['StaffID'])){
                                             
                                       echo "
                                            <div class=\"row\">
                                              <div class=\"col-md-4\">
                                                    <label for=\"validationCustom01\" class=\"form-label\">Staff ID:</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"StaffID\" name=\"StaffID\" value=\"$StaffID\" readonly>

                                                </div>
                                                <div class=\"col-md-4\">
                                                    <label for=\"validationCustom01\" class=\"form-label\">Name</label>
                                                    <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Name\"  name=\"Name\" readonly>

                                                </div>
                                                <div class=\"col-md-3\">
                                                    <label for=\"validationCustom02\" class=\"form-label\">Postion</label>
                                                      <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Position\" readonly>
                                                </div>


                                                <div class=\"col-md-3\">
                                                    <label for=\"validationCustom02\" class=\"form-label\">Gender</label>
                                                     <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Gender\"  readonly>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class=\"row\">

                                            </div>
                                            <div class=\"col-md-6\">
                                                <label for=\"validationCustom01\" class=\"form-label\">E-mail</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Email\" name=\"Email\"required>

                                            </div>
                                            <div class=\"col-md-3\">
                                                <label for=\"formFile\" class=\"form-label\">Tel</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Tel\" name=\"Tel\" required>
                                            </div>
                                            <div class=\"col-md-3\">
                                                <label for=\"formFile\" class=\"form-label\">Set Password</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" value=\"$Password\"  name=\"Password\" required>
                                            </div>
                                            <div class=\"mb-3\">
                                                <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Address</label>
                                                <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name=\"Address\">$Address</textarea>
                                            </div>
                                              <div class=\"modal-footer\">
                                    
                                        <input type=\"submit\" class=\"btn btn-primary\" value=\"update\">
                                    </div>
                                             ";
                                          }
                           
                                                 
                                        ?> 

                                        </form><div class="loader-wrapper">
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