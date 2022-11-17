

 
    <link rel="stylesheet" href="https://bootswatch.com/3/journal/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="chat_style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="handle.js"></script>


<body onload="" style="background-color:grey; margin-left: 15%;">
    <div class="container">
            <div class="col-xs-12 col-md-7 col-md-offset-1 well" id="signup">
              <form>
                    <div class="form-group">
                      <label for="empID">Employee ID</label>
                      <input required type="text" class="form-control" id="empID" placeholder="Employee ID" maxlength="20">
                    </div>
                    <div class="form-group">
                        <label for="empID">Name</label>
                        <input required type="text" class="form-control" id="name" placeholder="Ram Kumar" maxlength="50">
                      </div>
                      <div class="form-group">
                        <label for="empID">Mobile No.</label>
                        <input required type="number" class="form-control" id="mobile" placeholder="9987******" maxlength="10">
                      </div>
                      <div class="form-group">
                        <label for="empID">Email ID</label>
                        <input required type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                      </div>
                      <div class="form-group">
                        <label for="empID">Password</label>
                        <input required type="password" class="form-control" id="pass" placeholder="***********">
                      </div>
                      <div class="form-group">
                        <button type="button" onclick="register()" class="form-control btn btn-success" id="submit" value="Register Me">Register Me
                        </button>
                        <input type="reset" class="form-control btn btn-danger pull-right" id="clear" value="Clear Data">
                      </div>
                      <a href="../login_candidate.php" class="tbn tbn-success" style="height:250px; width: 250px; border-radius: 50%;">I have an account/Login</a>
                    </form>
            </div>
        </div>

    </div>

</body>
</html>