<form method="get" action="#">
    <table border="1" cellspacing="0">
        <tr><td>Hệ số a </td><td><input type="input" name="a"></td></tr>
        <tr><td>Hệ số b </td><td><input type="input" name="b"></td></tr>
        <tr><td>Hệ số c </td><td><input type="input" name="c"></td></tr>
        <tr><td colspan="2" align="center"><input type="Submit" value="Giải"
        name="Submit"></td></tr>
    </table>
</form>

<?php 
    if(isset($_GET['Submit'])&&($_GET['Submit']=="Giải")){
        $a = $_GET['a'];
        $b = $_GET['b'];
        $c = $_GET['c'];

        $delta = $b * $b - 4 * $a * $c;

        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Phương trình có hai nghiệm phân biệt:<br>x1 = $x1<br>x2 = $x2";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "Phương trình có nghiệm kép:<br>x = $x";
        }
        else echo "Phương trình vô nghiệm";
        
    }
?>