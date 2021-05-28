<html>
    <body>
        <font color="red"><h1><marquee>Esta es mi página</marquee></h1></font>
        <hr>
        <form action="/PHP/Pagina Prueba - copia.php" target="_self" method="POST" name="login" id="login">
            User: <input type="text" name="username" id="username">
            Password: <input type="password" name="password" id="password">
            <input type="submit" name="send" id="send">
        </form>
    </body>
</html>

<?php
    # Variables
    $username = NULL;
    $pasword = NULL;

    $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');    # Sintáxis: $pdo = new PDO('DSN', 'username', 'password');
    $sql = "SELECT id, username, password FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . $_POST['password'] . "'";
    
    
    foreach ($pdo->query($sql) as $row) {
        echo $row['username'] . $row['password'];
        if($row != NULL){
            if($row['username'] == true && $row['password'] == true){
                echo "<h1>Bienvenido papá " . $row['username'] . ". Tomá un like</h1>";
                echo "<h2>User and password are correct!</h2>";
                echo "<br><img src='/Images/July3pLike.jpg'>";
                return true;
            }
            else{
                return false;
            }
        }
        if($row == false){
            echo "<h1>Te confundiste de barrio pá</h1>";
            echo "<h2>Password is wrong! Sorry!</h2>";
            echo "<br><img src='/Images/NO.jpg'>";
        }
    }

    # Función multifuncional para parámetros
    function existeParametro($parametro){
        if(isset($_POST[$parametro])){
            $valor = $_POST[$parametro];
        }else{
            $valor = "NULL";
        }
    }

    # Bucle for
    # foreach ($usuarios as $usuario){
    #     echo $usuario
    # }

?>