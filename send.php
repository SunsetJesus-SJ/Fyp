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
<body>
<?php
    extract($_GET);

     require_once('conn.php');
    $conn =  getDBconnection()
    or die(mysqli_connect_error());
    $SQL = "SELECT * FROM custsug WHERE ID = $ID";
    $rs = mysqli_query($conn, $SQL);
    $rc = mysqli_fetch_assoc($rs);
    extract($rc);
?>

  <h1 style="text-align: center;">Reply</h1>
  <center>
   <form  target="_blank" action="https://formsubmit.co/movietestfyp@gmail.com" method="POST" >
    
<?php
if(isset($_GET['ID'])){
 echo
    "
              
              
                  
                      
                     <div class=\"col-md-4\">
                      <input type=\"hidden\" name=\"_captcha\" value=\"false\">
                       <input type=\"hidden\" name=\"_next\" value=\"http://127.0.0.1/fyp/reply.php?ID=$ID\">
                         <input type=\"text\" name=\"ID\" class=\"form-control\"  value='$ID' readonly hidden>
                          <label  class=\"form-label\">Customer Name:</label>
                      <input type=\"text\" name=\"name\" class=\"form-control\"  value='$Name' readonly>
                    </div>
                     </div>
                  
                     <label  class=\"form-label\">Email address:</label>
                   <div class=\"col-md-4\">
                  
                      <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email Address\"  value='$email' readonly>
                    </div>
                <br>
                  <div class=\"col-md-4\">
                  <textarea placeholder=\"Your Message\" class=\"form-control\" name=\"message\" rows=\"10\" required></textarea>
                   </div>
                  "
                ;
    }
?>
</div>
                <br>
                <div class=\"col-md-4\">
                <button type="submit" class="btn btn-lg btn-dark btn-block">Submit </button>
                </div>
                </form>
                </center>
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