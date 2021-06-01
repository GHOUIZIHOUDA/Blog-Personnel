<?php 
include './templates/header.php';
include './classes/Admin.php';
include './templates/navbar.php';

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    
    $object=new Admin();
    $object->login($email,$pass);
} 
?>
<form method="POST" action="login.php" class="container" style="margin-top:25px;">
  <div style="margin-top:100px; " id="addArticleModal" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2f4357;">
          <h2 class="modal-title" id="exampleModalLabel" style="font-size:24px; font-family: bold;">Login</h2>
        </div>
        <div class="modal-body">
          <div class="form-group container">
            <label for="exampleInputEmail1">Email address :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
          </div>
          <div class="form-group container">
            <label for="exampleInputPassword1">Password :</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
          </div>
          <div class="form-group form-check container">   
          </div>
        </div>
        <div class="modal-footer" style="background-color:#2f4357;">
          <a href="index.php" type="button" class="btn btn-secondary">Close</a>
          <button type="submit" name="login" class="btn btn-warning">Login</button>
        </div>
      </div>
    </div>
  </div>
</form>


<?php 
include './templates/footer.php';
?>

