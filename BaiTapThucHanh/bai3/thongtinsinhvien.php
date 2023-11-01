<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #table-thongtin {
        border: 1px solid black;
        padding: 8px;
    }

    #table-thongtin th {
        color: aqua;
    }

    #table-thongtin td {
        padding: 6px 0;
        color: chartreuse;
    }
    </style>
</head>

<body>
    <table id="table-thongtin">
        <tr>
            <th>Thông tin sinh viên</th>
        </tr>
        <tr>
            <td>Tên: <?php echo$_GET['username']?></td>
        </tr>
        <tr>
            <td>Mật khẩu: <?php echo$_GET['pwd']?></td>
        </tr>
    </table>
</body>

</html>
