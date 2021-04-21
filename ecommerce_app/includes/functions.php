
<?php
    session_start();
    include 'config.php';


    function logout (){

        $_SESSION['logged'] = false;
        session_destroy();
        header("Location:index.php");
    }
/* search function  */ 

function get_product_by_title($search){

    $sql = "SELECT * FROM products WHERE product_title LIKE '%$search%'";
       global $con;
   return  mysqli_query($con , $sql);
    
}

/*  get all products */ 
     function get_all_product(){

                $sql = "SELECT * FROM products";
   				global $con;
               return  mysqli_query($con , $sql);
                
    }


/* get product by id  */
    function get_product_by_id($id){

        $sql = "SELECT * FROM products WHERE product_id=$id";
           global $con;
       return  mysqli_query($con , $sql);
        
    }

/* fonction pour affichage de categoies  */ 

function get_categories(){

    $sql = "SELECT * FROM categories";
       global $con;
         return  mysqli_query($con , $sql);
    
}

/* fonction ajouter user */ 

function register_new_user($x , $y , $z){

    $sql = "INSERT INTO users (username,  email, password)
    VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

    global $con;

    mysqli_query($con , $sql);


}

?>