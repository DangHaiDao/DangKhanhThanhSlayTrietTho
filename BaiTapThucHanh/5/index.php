<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Calculator_icon.svg/2048px-Calculator_icon.svg.png">
    <title>Fraction</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <table>
    <tr>
        <td colspan="2" style="font-size: 20px; text-align: center; padding-bottom: 30px">MÁY TÍNH SIÊU CẤP 2023 🤯</td>
    </tr>
    <tr>
        <td>Tử số 1</td>
        <td><input type="text" name="tuso1" id="tuso1"></td>
    </tr>
    <tr>
        <td>Mẫu số 1</td>
        <td><input type="text" name="mauso1" id="mauso1"></td>
    </tr>
    <tr>
        <td>Tử số 2</td>
        <td><input type="text" name="tuso2" id="tuso2"></td>
    </tr>
    <tr>
        <td>Mẫu số 2</td>
        <td><input type="text" name="mauso2" id="mauso2"></td>
    </tr>
   
    <tr>
        <td colspan="2">Chọn phép tính</td>
    </tr>
    <tr>
        <td style="padding: 0px">
            <input type="radio" name="operator" id="" value="add" checked> +
            <input type="radio" name="operator" id="" value="subtract"> -
            <input type="radio" name="operator" id="" value="multiply"> *
            <input type="radio" name="operator" id="" value="devide"> /
        </td>
        <td align="center"><input type="submit" class="submit-btn" value="Tính" onclick="showResult()"></td>
    </tr>
    <tr>
        <td>Kết quả</td>
        <td id="result-show">
        <?php

//Lấy data từ inputs
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mauso1 = (int)htmlspecialchars($_POST["mauso1"]);
    $tuso1 = (int)htmlspecialchars($_POST["tuso1"]);
    $mauso2 = (int)htmlspecialchars($_POST["mauso2"]);
    $tuso2 = (int)htmlspecialchars($_POST["tuso2"]);
    $operator = htmlspecialchars($_POST["operator"]);

    // $mauso1 = $_POST["mauso1"];
    // $tuso1 = $_POST["tuso1"];
    // $mauso2 = $_POST["mauso2"];
    // $tuso2 = $_POST["tuso2"];
    // $operator = $_POST["operator"];

    $error = false;
    if (empty($mauso1) || empty($tuso1) || empty($mauso2) || empty($tuso2) || empty($operator)) {
        echo "<p class='error-notif'>Điền vô giùm tui cái</p>";
        $error = true;
    } 
    if ($error == false) {
        $result = 0;
        switch ($operator) {
            case "add": 
                $result = (($tuso1*$mauso2)+($tuso2*$mauso1))/($mauso1*$mauso2);
                break;
            case "subtract":
                $result = (($tuso1*$mauso2)-($tuso2*$mauso1))/($mauso1*$mauso2);
                break;
            case "multiply":
                $result = ($tuso1*$tuso2)/($mauso1*$mauso2);
                break;
            case "devide":
                $result = ($mauso1* $tuso2)/($tuso1*$mauso2);
                break;
            default: 
                echo "<p class='error-notif'>Điền số giùm tui cái</p>";
        }
        echo $result;  
    }
     
} 
?>
        </td>
    </tr>
    </table>
    
</form>
</body>
</html>