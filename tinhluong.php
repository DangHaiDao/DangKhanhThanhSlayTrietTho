<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lương nhân viên</title>
</head>
<style>
    .main{
        border: 1px solid black;
        width: 350px;
        padding: 5px;
        font-size: 16px;
        font-weight: 600;
    }
    .form_infor{
        background-color: rgb(255, 123, 0);
        
    }
    .top{
        margin-top: 8px;
    }
    .btn{
        border-radius: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .btn:hover{
        cursor: pointer;
    }
    .input_luong{
        margin-left: 46px;
    }
    .input_soNgay{
        margin-left: 14px;
    }
    .input_ten{
        margin-left: 30px;
    }
    .input_ma{
        margin-left: 33px;
    }
</style>
<body>
    <div class="main">
        <form method="get" action="#" class="form_infor">
            Mã nhân viên <input name="maNV" class="input_ma top" type="text" value="<?php echo isset($_GET['maNV']) ? $_GET['maNV']:'' ?>"><br>
            Tên nhân viên <input name="tenNV" class="input_ten top" type="text" value="<?php echo isset($_GET['tenNV']) ? $_GET['tenNV']:'' ?>"><br>
            Số ngày làm việc <input name="soNgay" class="input_soNgay top" type="text" value="<?php echo isset($_GET['soNgay']) ? $_GET['soNgay']:'' ?>"><br>
            Lương ngày <input name="luongNgay" type="text" class="input_luong top" value="<?php echo isset($_GET['luongNgay']) ? $_GET['luongNgay']:'' ?>"><br>
            Nhân viên quản lý <input name="check_ql" type="checkbox"><br>
            <input type="Submit" name="btn-cal-luong" class="btn" value="Lương tháng"><br>
        </form>
    </div>

    <?php
    include "nhanvien.php";
    if (isset($_GET['btn-cal-luong']) && $_GET['btn-cal-luong']=="Lương tháng"){
        $ma=$_GET['maNV'];
        $ten=$_GET['tenNV'];
        $songay=$_GET['soNgay'];
        $luongngay=$_GET['luongNgay'];
        if (isset($_GET['check_ql'])){
            $nv= new nhanvienQL();
            $nv->Gan($ma,$ten,$songay,$luongngay);
        } else {
            $nv=new nhanvien();
            $nv->Gan($ma,$ten,$songay,$luongngay);
        }
        $nv->InNhanVien();
        echo "Lương tháng: ".$nv->TinhLuong();
    }
    
?>

</body>
</html>