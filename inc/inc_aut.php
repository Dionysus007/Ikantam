<?
if (isset($_POST['submit'])) {
    $link = mysqli_connect("localhost", "root", "", "ikantam");
    $query = mysqli_query($link, "SELECT * FROM users WHERE "
            . "user_login='" . $_POST['login'] . "' AND "
            . "user_password='" . $_POST['password'] . "'");
    if (mysqli_num_rows($query) > 0) {
        $w = mysqli_fetch_assoc($query);
        $_SESSION['user_id'] = $w['user_id'];
        $_SESSION['user_login'] = $w['user_login'];
        echo "Вы успешно вошли в систему!";
    }
}