<?php
// Khai báo mảng
// có 2 cách khai báo mảng
// cách 1:
// $tên mảng = array(gt1, gt2, ...); => phiên bản php 5.4 trở xuống
// cách 2:
// $tên mảng = [gt1, gt2, ...];
$array1 = array(1,2,3,4);
// hiển thi mảng
echo "<pre>";
//print_r($array1);
// Mảng liên hợp
// Là mảng key/index là do ta tự sinh
// Khai báo mảng
// công thức
// $tên mảng = [key1 => gt1, key => gt2, ...]
$arraylh = ["A" => 5, "B" => 6, "C" => 7];
print_r($arraylh);
// lấy giá trị trong phần tử
// tên mảng[vị trí];
echo  $array1[1];
// duyệt mảng
// dùng foreach thì có thể dùng cho tất cả các mảng
// còn dùng mình vòng lặp khác thì chỉ có thể dùng cho mảng
// có key/index là dạng số tăng dần
// vòng lặp foreach có cách viết
// foreach($tên mảng as $biến chứa key => $biến chứa giá trị)
// foreach($tên mảng as $biến chứa giá trị)
// dùng vòng lặp in ra key và value của mảng trên
// Hàm trong php
// Hàm dùng để đóng gói 1 đoạn code chương trình hay 1 chức năng
// Giúp code gon gàng, tái sử dụng nhiều lần
$a = 5;
$b = 6;
echo $a + $b;
// Hàm chia làm 2 loại
// có trả  về  => hàm có chứa retunr
// hàm không trả về => hàm k chứa retunr
// Hàm không trả về phải tự lo đầu ra
function tongHaiSo($a, $b)
{
    // Hàm không có tham số là hàm trong () không chứa biến
    // nếu trong () có chứa biến thì biến đó được gọi là tham số
    // Và hàm đó được gọi là hàm có chứa tham số
    echo $a + $b;
}
// Dùng hàm thì phải gọi hàm
// Nếu hàm chứa tham số thì hàm đó chứa bao nhiêu tham số thì
// ta phải truyền vào đó bấy giá trị và mỗi giá trị các nhau 1
// dấy ,
// Khi gọi hàm
// Hàm không trả về thi các bạn chỉ cần gọi thẳng ra tên hàm ra
// Hàm có trả về thì khi gọi hàm bắt buộc phải có thêm 1 biến để
// lưu trữ hoặc là phải sử dụng ngay
tongHaiSo(5,7);
tongHaiSo(9,6);
// Xây dựng 1 hàm có tham số và không trả về
// Nhưng nhập thông tin cho những tham số sau
// Tên, Năm sinh, Đia chỉ, SCMT, SDT, giới tính
// Hay in nhưng nội dung sau
// tên tuổi đia chỉ SCMT SDT giới và kết luận
// Người được nhập thông đã đã tuổi kết hôn hay chưa
