<?php
session_start();

if (isset($_POST["submit"])) {
    if ($_POST["username"] == 'admin' && $_POST["password"] == 'admin') {
        $_SESSION['admin'] = true;
        $_SESSION['film'] = true;
        $_SESSION['genre'] = true;
        $_SESSION['Penonton'] = true;
        $_SESSION['teater'] = true;
        $_SESSION['ticket'] = true;
        header("Location: ../admin/admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/gaya.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gradient-to-r  from-neutral-900 to-slate-800">
    <div class="wrapper">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <div
        class="bg-slate-900 bg-opacity-50 w-96 p-4 flex flex-col items-center justify-center mx-auto my-40 h-96 rounded-lg">
        <?php if(isset($error)) :?>
            <p class="text-white">Username / Password salah! <?php echo $_POST["submit"]?></p>
        <?php endif; ?>
        <h1
            class="text-4xl m-6 bg-gradient-to-r from-blue-600 to-purple-500 text-transparent bg-clip-text font-serif tracking-wider font-bold">
            ADMIN
        </h1>
        
        <form action="" method="post">
            <div class="user-box">
                <input type="text" name="username" id="username" required>
                <label for="username">Username</label>
                <span class="input-icon1">&#9786;</span>
            </div>

            <div class="user-box">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
                <span class="input-icon2">&#128274;</span>
            </div>
            <button type="submit" style="background-color: #52D3D8;"
                class="submit p-2 mt-4 rounded-md w-full" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>