

<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" href="https://bootswatch.com/3/journal/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="handle.js"></script>
</head>
<body onload="" style="background-color:grey;">
      

    <div class="container"> 
        <div class="row">
            <div class="col-xs-12 col-md-4 well bg-active" id="login" style="margin-top: 10%; margin-left: 400px;">
              <form>
              <div class="form-group">
                <label for="empID">Employee ID</label>
                <input required type="text" class="form-control" id="loginID" placeholder="Employee ID" name="email">
              </div>
              <div class="form-group">
                <label for="empID">Password</label>
                <input required type="password" class="form-control" id="loginPass" placeholder="***********" name="pass">
              </div>
              <div class="form-group">
                <button onclick="login()" type="button" class="form-control btn btn-success" id="loginUser">Login</button>
        
                <input type="reset" class="form-control btn btn-danger pull-right" id="clearData" value="Reset">
              </div>
            </form>

            </div> 
        </div>

    </div>

</body>
</html>