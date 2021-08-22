<?php include __DIR__. '/partials/init.php'; ?>

<?php
// $con=mysqli_connect("localhost","root","","shopping_cart");

// if(mysqli_connect_error()){
//     echo"<script>
//         alert('cannot connect to database');
//         window.location.href='mycart.php';
//     </script>";
//     exit();
// }

// if($_SERVER["REQUEST_METHOD"] =="POST")
// {
//     if(isset($_POST['purchase']))
//     {
//         $query1 = "INSERT INTO `user_details`(`name`, `mobile`, `address`, `paymode`) VALUES ('$_POST[name]', '$_POST[mobile]', '$_POST[address]', '$_POST[paymode]')";
//         if(mysqli_query($con, $query1))
//         {   
//             $order_id=mysqli_insert_id($con);
//             $query2 = "INSERT INTO `user_orders`(`order_id`, `name`, `price`, `quantity`) VALUES ('?','?','?','?')";
//             $stmt=mysqli_prepare($con, $query2);
//             if($stmt)
//             {
//                 mysqli_stmt_bind_param($stmt,"isii",$order_id, $name, $price, $quantity);
//                 foreach($_SESSION['cart'] as $key => $values)
//                 {
//                     $name=$values['name'];
//                     $price=$values['price'];
//                     $quantity=$values['quantity'];
//                     mysqli_stmt_execute($stmt);
//                 }
//                 unset($_SESSION['cart']);
//                 echo "<script>
//                     alert('order placed successfully');
//                     window.location.href='index.php';
//                 </script>";
//             }
//         }
//         else
//         {
//             echo "<script>
//                 alert('SQL Error');
//                 window.location.href='mycart.php';
//             </script>";
//         }
//     }
// }

?>