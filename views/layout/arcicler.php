<?php
    if(isset($_GET['option'])){
        switch($_GET['option']){
            case'home':
                include"views/home.php";
                break;
            case'signin':
                include"views/signin.php";
                break;
            case'logout':
                unset($_SESSION['member']);
                header("location: ?option=showsanpham");
                break;
            case'dangkytaikhoan':
                include"views/dangkytaikhoan.php";
                break;
            case'showsanpham':
                include"views/showproducts.php";
                break;
            case'productdetail':
                include"views/productdetail.php";
                break;
            case'cart':
                include"views/cart.php";
                break;
            case'order':
                include"views/order.php";
                break;
            case'ordersuccess':
                include"views/ordersuccess.php";
                break;
            case'showdonhang':
                include"views/showdonhang.php";
                break;
            case'donhangao':
                include"views/donhangao.php";
                break;
            case'chitietdonhang':
                include"views/chitietdonhang.php";
                break;
            case'delete':
                include"views/delete.php";
                break;
            case'showuser':
                include"views/showuser.php";
                break;
            case'userao':
                include"views/userao.php";
                break;
        
           
        }
    }
    else{
        include"views/home.php";
    }
?>