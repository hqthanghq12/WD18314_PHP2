<?php
class ConNguoi{
    public $chan;
    public $tay;
    protected $mat;
    public $mieng;
    public function __construct($mat, $mieng, $tay, $chan)
    {
        $this->mat = $mat;
        $this->tay = $tay;
        $this->mieng = $mieng;
        $this->chan = $chan;
    }

    public function an(){
        echo "ăn bằng miệng";
    }
}
class NguoiLon extends ConNguoi {
    public $longnach;
    public function __construct($mat, $mieng, $tay, $chan, $longnach)
    {
//        Ghi đè hàm khởi ta
        parent::__construct($mat, $mieng, $tay, $chan);
//        gh
        $this->longnach =$longnach;
    }

    public function di(){
        echo $this->mat;
        $this->di();
        echo "Đi bằng 2 chân";
    }

    public function ngu(){
        echo "Dậy sớm để thành công";
    }
}
class  TreCon extends NguoiLon {
    public function bo(){
        echo $this->mat;
        $this->di();
        echo "Bò băằng cả tay và chân";
    }
}
// Khởi tạo đối tượng
$tc = new TreCon();
$tc->tay;
$tc->longnach;