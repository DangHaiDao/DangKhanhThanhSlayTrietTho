// completed by Do Nguyen Triet
// chicken

<form method="get" acction="#">
  Nhập tên cần tìm <input type="text" name="tencantim"><br><br>
  <input type="Submit" name="Tim" value="Tìm">
</form>

<?php
function InMang($array)
{
  foreach ($array as $ten => $tuoi) {
    echo $ten . "\t" . $tuoi . "<br>";
  }
}
function TimTen($array, $str)
{
  foreach ($array as $ten => $tuoi) {
    if ($ten == $str) {
      return true;
    }
  }
  return false;
}
?>

<?php
$ban = array("Tuấn" => 21, "Tú" => 19, "Tâm" => 22, "Tùng" => 20);
if (isset($_GET['Tim']) && ($_GET['Tim'] == "Tìm")) {
  $ten = $_GET['tencantim'];
  if (TimTen($ban, $ten) == true) {
    echo "Tìm thấy " . $ten . " trong mảng<br>";
  } else {
    echo "Tìm không thấy <br>";
  }
  echo "<h3>Xuất mảng</h3>";
  InMang($ban);
}
?>

<?php
// xuat ten cac ban co tuoi > 20
function XuatTenTuoiLonHon20($array)
{
  foreach ($array as $ten => $tuoi) {
    if ($tuoi > 20) {
      echo $ten . "\t" . $tuoi . "<br>";
    }
  }
}

// sap xep mang 1 chieu tang dan theo tuoi
function SapXepTangDanTheoTuoi(&$array)
{
  asort($array);
}

// them 1 phan tu vao cuoi danh sach mang
function ThemPhanTu($array, $ten, $tuoi)
{
  $array[$ten] = $tuoi;
  return $array;
}

// tim 1 phan tu theo tuoi
function TimPhanTuTheoTuoi($array, $tuoi)
{
  $result = array();
  foreach ($array as $ten => $age) {
    if ($age == $tuoi) {
      $result[$ten] = $age;
    }
  }
  return $result;
}

// xoa 1 phan tu theo ten
function XoaPhanTuTheoTen(&$array, $ten)
{
  if (isset($array[$ten])) {
    unset($array[$ten]);
  }
}

?>

<?php
//
echo "Tên các bạn có tuổi lớn hơn 20:";
XuatTenTuoiLonHon20($ban);
//
SapXepTangDanTheoTuoi($ban);
//
$ban = ThemPhanTu($ban, "Huy", 25);
//
$tim22 = TimPhanTuTheoTuoi($ban, 22);
echo "Các bạn có tuổi là 22:<br>";
//
InMang($tim22);
XoaPhanTuTheoTen($ban, "Tùng");

?>
