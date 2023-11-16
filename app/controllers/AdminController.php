<?php
   include "../views/Admin/menuleft.php";

   if(isset($_GET['act'])){
    $act=$_GET['act'];

    switch ($act){
      case 'thuvienanhsanpham':
        include "../views/Admin/thuvien_sanpham.php";
        break;
      case 'danhsachsanpham':
        include "../views/Admin/sanpham/list.php";
        break;
        case 'dachsachnhomsp':
            include "../views/Admin/nhom_sanpham/list.php";
            break;
        case 'dachsachsizesp':
            include "../views/Admin/Size/list.php";
            break;
        case 'dachsachmausp':
            include "../views/Admin/mau/list.php";
            break;
        case 'dachsachgioitinhsp':
            include "../views/Admin/gioitinh_sanpham/list.php";
            break;
        case 'dachsachdonhang':
            include "../views/Admin/donhang/list.php";
            break;
        case 'dachsachvaitro':
            include "../views/Admin/vaitro/list.php";
            break;
        case 'danhsachbinhluan':
            include "../views/Admin/binhluan/list.php";
            break;
        case 'danhsachkhachhang':
            include "../views/Admin/khachhang/list.php";
            break;
                                
      default:
         include "../controllers/AdminController.php";
        break;
        
    } }

    include "../views/Admin/footer.php";
    
?>