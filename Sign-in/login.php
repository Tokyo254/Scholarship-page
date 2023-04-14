<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf(
        "SELECT * FROM user
                    WHERE email = '%s'",
        $mysqli->real_escape_string($_POST["email"])
    );

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {

        if (password_verify($_POST["password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["user_id"] = $user["id"];

            header("Location: Dashboard.php");
            exit;
        }
    }

    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./login.css">
</head>

<body>

    <div class="container">
        <video autoplay loop muted plays-inline class="video">
            <source src="./vid/Web vid.mp4" type="video/mp4">
        </video>
        <div class="form-box">
            <h1 id="title">Log In</h1>
            <form method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" placeholder="Password" name="password">
                    </div>

                    <p class="cont">Forgot password <a href="#">Click Here</a></p>
                    <p class="cont">If you don't have an account <a href="./signup.html">Click Here</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupBtn">Sign In</button>
                </div>
            </form>
            <div class="message">
                <?php if ($is_invalid) : ?>
                    <em>Invalid user details</em>
                <?php endif; ?>
            </div>
        </div>
    </div>

</body>

</html>