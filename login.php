<?php

if (isset($_POST['login'])) {
    try { 
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == '' or $password == '')
    {
        echo "Please enter all fields";
    }else{
    $pdo = new PDO('mysql:host=localhost;dbname=CinemaSYS; charset=utf8', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $sql = "SELECT * FROM customer (firstname,surname,username,password,amount) VALUES(:cfirstname, 
:csurname, :cusername, :cpassword, :camount)";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindValue(':cfirstname', $firstname);
    $stmt->bindValue(':csurname', $surname);
    $stmt->bindValue(':cusername', $username);
    $stmt->bindValue(':cpassword', $password);
    $stmt->bindValue(':camount', $amount);
    
    $stmt->fetch(); 
    
    $Success = $custid.$firstname.$surname.$amount;
    
    echo $Success;
    
    }}catch (PDOException $e) { 
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}
}
?>