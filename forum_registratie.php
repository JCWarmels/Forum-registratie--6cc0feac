<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1>Forum Registratie</h1>
    <form method="POST">
        <div style="display:flex; flex-direction:row; align-items:center;">
            <input type="text" name="username" required>
            <h3>Username</h3>
        </div>
        <br>
        <div style="display:flex; flex-direction:row; align-items:center;">
            <input type="text" name="email" required>
            <h3>Email</h3>
        </div>
        <br>
        <div style="display:flex; flex-direction:row; align-items:center;">
            <input type="number" name="age" required>
            <h3>Age</h3>
        </div>
        <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["age"])){
        $info = array($_POST["username"],$_POST["email"],$_POST["age"]);
        setcookie('cookie', serialize($info), time()+3600);
        header('Location:registratie_handler.php');
    }
    ?>
</body>
</html>