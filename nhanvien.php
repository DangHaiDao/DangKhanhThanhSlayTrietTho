<?php
// lớp nhân viên
    class nhanvien {
        private $ma,$ten,$songay, $luonggay;
        public function Gan ($ma, $ten, $songay,$luongngay){
            $this->ma=$ma;
            $this->ten=$ten;
            $this->songay=$songay;
            $this->luonggay=$luongngay;
        }
// In nhân viên
        public function InNhanVien(){
            echo "Mã nhân viên: ". $this->ma. "<br>";
            echo "Tên nhân viên: ".$this->ten."<br>";
            echo "Số ngày làm việc: ".$this->songay."<br>";
            echo "Lương ngày: ".$this->luonggay."<br>";
        }
// Tính lương nhân viên
        public function TinhLuong(){
            return ($this->luonggay*$this->songay);
        }
    }
// Lớp nhanvienQL kế thừa nhanvien
    class nhanvienQL extends nhanvien {
        private $phucap=2000;
        // khai báo lại pt InNhanVien
        public function InNhanVien(){
            parent ::InNhanVien();
            echo "Phụ cấp: ".$this->phucap."<br>";
        }
        // khai báo lại pt tính lương
        public function TinhLuong(){
          return (parent::TinhLuong()+$this->phucap);
        }
    }


?>