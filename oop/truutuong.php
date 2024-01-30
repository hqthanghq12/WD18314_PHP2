<?php
// class truu tuong
abstract class DongVat{
    // class truu tuong la class chua phuong thuc truu tuong
    // class truu tuong van co phuong thuc va thuoc nhu cac
    // class khac
    // class truu tuong k duoc khoi tạo

    // khai bao phuong thuc truu tuong
    abstract public function di();
}
class ConGa extends DongVat{
    public function di()
    {
        echo "Di bang xoai va coc";
    }
}
//