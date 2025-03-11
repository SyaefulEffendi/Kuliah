<?php
    
    if(isset($_POST['button'])){
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["user_name"])){
                echo "Nama Kosong";
            } else{
                $user_name = cek_input($_POST["user_name"]);
                if (!preg_match ("/^[a-zA-Z]*$/", $user_name)){
                    echo "Nama harus huruf";
                } else{
                    $user_name = $_POST['user_name'];
                    $user_email = $_POST['user_mail'];
                    $user_massage = $_POST['user_massage'];

                    echo"Atas nama $user_name dengan alamat email $user_email mengirim pesan $user_massage";
                }
            }
        }
    }

function cek_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
    <form action="form.php" method="post">
        <ul>
            <li>
                <label for="name">Nama :</label>
                <input type="text" id = "name" name="user_name" required>
            </li>
            <li>
                <label for="mail">E-mail : </label>
                <input type="email" id="mail" name="user_mail">
            </li>
            <li>
                <label for="msg">Massage : </label>
                <textarea name="user_massage" id="msg"></textarea>
            </li>
            <li class="button">
                <input type="submit" name="button" id="button" value="Send your Massage">
            </li>
        </ul>
    </form>
</body>
</html>