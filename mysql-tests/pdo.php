<html>
<head>
<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>SQL Injection</h1>
    <table style="width:20%" id="t01">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
        </tr>
        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');    # Sintáxis: $pdo = new PDO('DSN', 'username', 'password');
            $sql = "SELECT id, username, password FROM users WHERE username = '" . $_GET['username'] . "'";
            foreach ($pdo->query($sql) as $row) {
               echo "<tr>";
               echo "<td>" . $row['id'] . "</td>";
               echo "<td>" . $row['username'] . "</td>";
               echo "<td>" . $row['password'] . "</td>";
               echo "</tr>";
            }
        ?>
    </table>
    <!--
        INSERT INTO tabla (columna1, columna 2, columna 3) VALUES (valor1, valor2, valor3);
        INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, 'pepe', 'pepit0');

        SELECT columna FROM tabla WHERE condición ORDER BY secuencia de clasificación;
        
        
    
    -->
</body>
</html>