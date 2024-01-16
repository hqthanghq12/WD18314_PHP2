<?php
//  khai báo class
class SinhVien{
//    Khai báo thuộc tính -> Biến trong class
    public $maSV;
    public $tenSV;
    public $namSinh;
    public $CCCD;
//  Phương thức khởi tạo
    public function __construct($maSV, $tenSV, $namSinh, $CCCD)
    {
//        Trên class có bao nhiêu thuộc tính tính thì ta chuyề
//        Bây nhiêu thuộc tính

        $this->tenSV =$tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
        $this->CCCD = $CCCD;
    }
//    Khai báo phương thức -> Hàm trong class
//    Khai báo phương thức set(đưa giá trị vào thuộc tính)
    public  function setTenSV($tenSV){
        $this->tenSV =$tenSV;
    }
// Khai báo phương thức get (lấy ra giá trị trong thuộc tính)
    public function getTenSV(){
        return $this->tenSV;
    }


    public function hienThiThongTin(){
        // Nếu muốn gọi thuộc tính hay phương thức thì hay nhớ
        // đến từ khó this
        echo $this->maSV;
        echo  $this->namSinh;
        echo $this->tenSV;
        echo $this->CCCD;
    }
}
// khởi tạo đối tượng
$sv = new SinhVien("PH123", "Nguyễn Thành Trung", 2004, "000000001");
//$sv->tenSV = "Nguyễn Thành Trung";
//$sv->setTenSV("Nguyễn Thành Trung");
$sv->hienThiThongTin();
