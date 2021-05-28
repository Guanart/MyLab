<html>
    <body>
        <font color="red"><h1><marquee>Esta es mi página</marquee></h1></font>
        <hr>
        <form action="/PHP/Pagina Prueba.php" target="_self" method="POST" name="login" id="login">
            User: <input type="text" name="username" id="username">
            Password: <input type="password" name="password" id="password">
            <input type="submit" name="send" id="send">
        </form>
        
        <form action="/PHP/Pagina Prueba.php" target="_self" method="GET" name="xss" id="xss">
            Búsqueda: <input type="text" name="search" id="search">
            <input type="submit" name="send" id="send">
        </form>
        
    </body>
</html>

<?php
    # Variables
    $username = NULL;
    $pasword = NULL;

    # Función de verificación de parámetros HTTP POST
    function credentials(){
        global $username;
        global $password;
        if(isset($_POST["username"])){
            $username = $_POST["username"];
        }else{
            $username = NULL;
        }

        if(isset($_POST["username"])){
            $password = $_POST["password"];
        }else{
            $password = NULL;
        }
    }

    # Función de logeo
    function login(){
        global $username;
        global $password;
        
        if($username != NULL){
            if($username == "admin"){
                if($password == "admin"){
                    echo "<h2>User and password are correct!</h2>";
                    echo "<br><img src='/Images/July3pLike.jpg'>";
                return true;
                }else{
                    echo "<h2>Password is wrong! Sorry!</h2>";
                    echo "<br><img src='/Images/NO.jpg'>";
                return false;
                }
            }else{
                echo "<h2>User is incorrect! Try again.</h2>";
                echo "<br><img src='/Images/NO.jpg'>";
            return false;
            }
        }
    }

    credentials();
    login();


    # XSS
    $xss = existeParametro('search');
    echo "Tu texto: " . $xss;


    # Función multifuncional para parámetros
    function existeParametro($parametro){
        if(isset($_GET[$parametro])){
            $valor = $_GET[$parametro];
        }else{
            $valor = "NULL";
        }
        return $valor;
    }

    # Bucle for
    # foreach ($usuarios as $usuario){
    #     echo $usuario
    # }

?>