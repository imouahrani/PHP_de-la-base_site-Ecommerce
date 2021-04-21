<?php

    /*  server_Name  = localhost , user = root , password = root    , db_name = ecommercedb     */

    /*
    define("HOSTNAME","127.0.0.1");
    define("DB_USER","root");
    define("DB_PASS","root");
    define("DB_NAME","ecommercedb");

    */
 
   

     $db_host = "127.0.0.1";
     $db_user = "root";
     $db_pass = "";
     $db_name = "ecom";


    $con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);




