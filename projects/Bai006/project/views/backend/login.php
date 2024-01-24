<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once "$root/Bai006/project/common.php";
    global $controllerBasePath;

    print_r($_SESSION['user']);
?>

<div>
    <div>
        <?php
            if ($_SESSION['error']) {
                echo '<label id="error-message">'. $_SESSION['error'] .'</label>';
                unset($_SESSION['error']);
            }
        ?>
    </div>

    <h1>Login</h1>
    <div>
        <form id="be-login-form" action="<?= $controllerBasePath ?>/backend/UserLogin.php" method="POST">
            <div>
                <label>Username:</label>
                <div><input type="text" name="username" id="be-login-form-username"></div>
            </div>
            <div>
                <label>Password:</label>
                <div><input type="password" name="password" id="be-login-form-password"></div>
            </div>
            <div><button type="submit">Login</button> </div>
        </form>
    </div>
</div>