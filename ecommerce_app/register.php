<?php

    include 'header.php';

?>

<form action="register.php" method="POST">
  <fieldset>
    <legend>Create New Account </legend>

    <?php

        if(isset($_POST["send"])){

            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $sql = "INSERT INTO users (username , email, password ) VALUES ('$name' , '$email', '$pass') ";

            global $con; 

            mysqli_query($con , $sql);


        }


    ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Name </label>
      <input type="text" class="form-control" name="name"   placeholder="Enter Name">
    
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email"   placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="pass" class="form-control" placeholder="Password">
    </div>
    <button type="submit" name="send" class="btn btn-primary"> Register </button>
  </fieldset>
</form>


<?php

    include 'footer.php';

?>