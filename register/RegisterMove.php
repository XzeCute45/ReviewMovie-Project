<!DOCTYPE html>
<html lang="en">
<?php include "../Connectphp/connect.php" ?>   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterWebPage</title>

    <?php  
        $abc=$pdo->prepare("INSERT INTO member VALUES('',?,?,?)");
        $abc->bindParam(1,$_POST["username"]);
        $abc->bindParam(2,$_POST["password"]);
        $abc->bindParam(3,$_POST["email"]);

        $abc->execute();
    ?>
</head>
<body>
    <script>
        window.onload=()=>{
            if(window.confirm("สมัครสมาชิกสำเร็จเเล้วคลิก OK เพื่อไปหน้าเข้าสู่ระบบ")){
                window.location.href='../login/weblogin.php';
            }
        }
    </script>
</body>
</html>