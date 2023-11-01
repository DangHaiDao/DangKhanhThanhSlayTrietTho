<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #form-bangdiem {
        border: 1px solid black;
        display: inline-block;
        padding: 8px;
    }

    #table-bangdiem {
        border-collapse: collapse;
        background-color: antiquewhite;
    }

    #table-bangdiem td {
        border: 2px solid burlywood;
        padding: 6px;
    }

    #form-bangdiem span {
        color: blue;
    }
    </style>
</head>

<body>

    <form action="thongtinsinhvien.php" id="form-bangdiem" method="post">
        <h2>BẢNG ĐIỂM</h2>
        <span>Tên: <?php echo $_GET['username']?></span>
        <table id="table-bangdiem">
            <tr>
                <td>STT</td>
                <td>Tên môn</td>
                <td>Điểm</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Cơ sở dữ liệu</td>
                <td>7</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Phát triển ứng dụng web</td>
                <td>8</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lập trình Java</td>
                <td>7.5</td>
            </tr>
            <tr><?php
            $name =urlencode($_GET['username']);
            $pwd =urlencode($_GET['pwd']);
    echo "<td colspan='3' align='center'><a href='./thongtinsinhvien.php?username=$name&pwd=$pwd'>Xem thông tin</a></td>";
?>
            </tr>
        </table>

    </form>
</body>

</html>
