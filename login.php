<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && isset($password)) {
    require "connect.php";
    
    $query = "SELECT * FROM utente WHERE username = '".$username."' AND password = '".$password."';";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        header("location: relazione.html");
    } else {
        echo "errore con le credenziali <a href='index.html'>login</a>";
        echo $username;
        echo $password;
        echo $conn->error;
    }
}else{
    echo "errore con i dati";
}
?>