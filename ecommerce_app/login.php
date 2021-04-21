<?php

    include 'header.php';

?>

<form action="login.php" method="POST">
  <fieldset>
    <legend>Login To your Account  </legend>

    <?php

        if(isset($_POST["send"])){

            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $sql = " SELECT * FROM users  WHERE email='$email' AND password='$pass' ";

            global $con; 

           $user =  mysqli_query($con , $sql);
           $result = mysqli_fetch_array($user);
           if(mysqli_num_rows($user) > 0){
            
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $result['username'];
            $_SESSION['user_id'] = $result['user_id'];
            echo '<h1 class="alert alert-dismissible alert-success"> you are logged  </h1> ' ; 


           header("Location:index.php");

           }else{

            echo '<h1 class="alert alert-dismissible alert-danger">  email or password incorrect  </h1> ' ; 

           }


        }
?>

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pass" placeholder="Password">
    </div>
    <button type="submit" name="send"  class="btn btn-primary"> Login </button>
  </fieldset>
</form>


<?php

    include 'footer.php';

?>