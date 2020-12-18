<?php
include '../13-Includes/components/head.php';

$error = true;
if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['password'])){
    $error = false;
    extract($_POST);
}

?>
<h1>$name</h1>
    <h1>$surname</h1>
    <h1>$age</h1>
    <h1>$email</h1>
    <h1>$password</h1>

<?php
include '../13-Includes/components/footer.php';
