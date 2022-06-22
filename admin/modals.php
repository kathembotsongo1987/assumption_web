
<!--  Modals Creates -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 30%;">        
                <h4>Create Member <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button></h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="create_registration.php?id=<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" required="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="password" required="">
					</div>
				</div>
				</div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="fas fa-remove"></span> Cancel</button>
                <button type="submit" name="submits" class="btn btn-success"><span class="fas fa-book"></span>Create</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- ==== Create slides_home -->
<div class="modal fade" id="create_slides_home" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 30%;">        
                <h4>Create Slide Home <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button></h4>
            </div>
            <div class="modal-body">
      <div class="container-fluid">
      <form method="POST" action="create_slide_home.php" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Image:</label>
          </div>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="image" required="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Title</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" required="">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px;">Description:</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="smalltext" required="">
          </div>
        </div>
        </div> 
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="fas fa-remove"></span> Cancel</button>
                <button type="submit" name="create_s" class="btn btn-success"><span class="fas fa-book"></span>Create</a>

      </form>
            </div>

        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit_member" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 30%;">        
                <h4>Edit Member <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button></h4>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_registration.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">				
					<div class="row form-group">	
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px; text-align: center;">Name:</label>
					</div>				
					<div class="col-sm-10">
						<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px; text-align: center;">Email</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px; text-align: center;">Password:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
					</div>
				</div>
			</div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="fas fa-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="fas fa-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Edit Slides -->

<div class="modal fade" id="edit_slide_home" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 30%;">        
                <h4>Edit Slide Home <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button></h4>
            </div>
            <div class="modal-body">
      <div class="container-fluid">
      <form method="POST" action="edit_slide_home.php?id=<?php echo '?id='.$id;?>" enctype="multipart/form-data">        
          <div class="row form-group">  
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px; text-align: center;">Title:</label>
          </div>        
          <div class="col-sm-10">
            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" required/>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px; text-align: center;">Description</label>
          </div>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="smalltext" value="<?php echo $row['smalltext']; ?>">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label" style="position:relative; top:7px; text-align: center;">Image:</label>
          </div>
          <div class="col-sm-10">
            <input type="file" class="form-control" name="image" value="<?php echo $row['img']; ?>"/>
        <p><img src="cruds/upload/<?php echo $row['img']; ?>" height="100" width="100" /></p>
          </div>
        </div>
      </div> 
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="fas fa-remove"></span> Cancel</button>
                <button type="submit" name="update_id" class="btn btn-success"><span class="fas fa-check"></span>Update</a>
      </form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div style="margin-left: 30%;">
                <h4>Delete Member <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button></h4>
            </div>
        <div class="modal-body">	
            <p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center" style="color: red;"><?php echo $row['email'].' '.$row['name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><span class="fas fa-remove"></span> Cancel</button>
                <a href="delete_registration.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><span class="fas fa-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- Login Modal -->

<div class="modal" id="login" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content" style="padding: 10px;">
      <div class="modal-header" style="background-color: rgba(200,155,250,.2);">
        <h1 style="margin-left: 38%;">Login</h>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>        
      </div>
      <form method="post" accept="login.php">
  		<div class="mb-3">
    		<label for="exampleInputEmail1" class="form-label">Email address</label>
    			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
    				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  		</div>
  		<div class="mb-3">
    		<label for="exampleInputPassword1" class="form-label">Password</label>
    			<input type="password" name="password" class="form-control" id="myInput" required="">
          <input type="checkbox" onclick="showFunction()"> Show Password
  		</div>
  		<div class="mb-3 form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    			<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  				<button type="submit" name="login" class="btn btn-primary fas fa-key">Login</button>
          <h4>Not yet a member</h4>
          <button type="submit" name="register" class="btn btn-secondary fa-duotone fa-archway">Register</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<!-- Modal Registration -->

<div class="modal" id="registration" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" style="text-align: center;">Registration</h>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="registration.php">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">Position</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="religious" id="gridRadios1" value="option1" checked>
        <label class="form-check-label" for="gridRadios1">
          Religious assumptionist
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="lay" id="gridRadios2" value="option2">
        <label class="form-check-label" for="gridRadios2">
          Lay Assumptionists
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="none" id="gridRadios3" value="option3" disabled>
        <label class="form-check-label" for="gridRadios3">
          None of the two.
        </label>
      </div>
    </div>
  </fieldset>
  
  <button type="submit" name="registration" class="btn btn-primary fas fa-book">Register now</button>
</form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  function showFunction(){
    var x = document.getElementById("myInput");
    if(x.type === "password"){
      x.type = "text";
    }else{
      x.type = "password";
    }
  }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

