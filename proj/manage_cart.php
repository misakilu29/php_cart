<?php include __DIR__. '/partials/init.php'; ?>

<?php 
//session_start();
//session_destroy();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>
                    alert('商品已加入購物車');
                    window.location.href='product_list.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>
                    alert('商品已存在購物車');
                    window.location.href='product_list.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('Item_Name'=>$POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
            echo "<script>
                    alert('商品已存在購物車');
                    window.location.href='product_list.php';
                </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_Name']==$_POST['Item_Name'])
                {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                    alert('產品已刪除');
                    window.location.href='mycart.php';
                </script>";
                }   
        }
    }
}

?>