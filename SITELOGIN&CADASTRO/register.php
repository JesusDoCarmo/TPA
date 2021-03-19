<?php

header("Content-type:text/html; charset=utf8");

session_start();

$name = "";
$email = "";
$address = "";
$password = "";
$sex = "";

if(isset($_POST["register"])){
   if(isset($_POST["name"]) && !empty($_POST["name"])
   && isset($_POST["email"]) && !empty($_POST["email"])
   && isset($_POST["address"]) && !empty($_POST["address"])
   && isset($_POST["password"]) && !empty($_POST["password"])
   && isset($_POST["sex"]) && !empty($_POST["sex"])){

       $name = $_POST["name"];
       $email = $_POST["email"];
       $address = $_POST["address"];
       $password = $_POST["password"];
       $sex = $_POST["sex"];

       $_SESSION["email"] = $_POST["email"];
       $_SESSION["password"] = $_POST["password"];

       echo 
       "<script>
          alert('Bem vindo ao sistema $name!');
          alert('Seu e-mail é: $email');
          window.location.href = 'index.html';
        </script>";
   }

}else if(isset($_POST["login"])){
    if(isset($_POST["email"]) && !empty($_POST["email"])
    && isset($_POST["password"]) && !empty($_POST["password"])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == $_SESSION["email"] && $password == $_SESSION["password"]){
                echo 
                "<script>
                    alert('Bem vindo de volta!');
                    window.location.href = 'index.html';
                </script>";
        
        }else{
            echo 
            "<script>
                alert('E-mail ou senha incorretos!');
                window.location.href = 'index.html';
            </script>";
        }

    }else{
        header("location:index.html");
    }

}else{
    echo 
    "<script>
        alert('Realize o login, ou crie uma conta!');
        window.location.href = 'index.html';
    </script>";
}

?>