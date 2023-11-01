<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #sign-up_form {
        border: 1px solid black;
        background-color: pink;
        display: inline-block;
        padding: 8px;
    }

    input[type='submit'] {
        padding: 8px 14px;
    }
    </style>
</head>

<body>
    <form action="bangdiem.php" id="sign-up_form" method="get">
        <h2>Đăng nhập hệ thống xem điểm</h2>
        <table>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text" name="pwd"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit"></td>
            </tr>
            <tr>
                <?php
                if (isset($_GET['submit'])) {
                    $uname = $_GET['username'];
                    $pwd = $_GET['pwd'];  
                }
                ?>
            </tr>
        </table>
    </form>
</body>

</html>
