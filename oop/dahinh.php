<?php
interface DiChuyen{
    // interface k phai là 1 class
    // Vay nen no khong co pt và tt nhu nhung class bt
    //nhung no co pt tru tuong hay noi don gian là mọi ham
    // trong  interface deu là pt truu tuong
    function di();
}
class ConNguoi implements DiChuyen{
    public function di()
    {
        // TODO: Implement di() method.
        echo "Di bang 2 chan";
    }
}
class OTo implements DiChuyen{
    public function di()
    {
        echo "Di bang 4 banh";
    }
}
// abstract và interface đều la ban thiet cho nhung phan mem
// interface là bản thiet ke cho nhung class co chung hanh dong
// nhung khac tinh chat
// abstract là ban thiet ke cho nhung class co chung ban chat
// interface co khả mo rong du an cao hon