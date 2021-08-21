<?php include __DIR__. '/partials/init.php'; ?>

<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center border rounded be-light my-5">
            <h1>購物車</h1>
        </div>

        <div class="col-lg-9">
            <table class="table table-striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">編號</th>
                        <th scope="col">商品名稱</th>
                        <th scope="col">單價</th>
                        <th scope="col">數量</th>
                        <th scope="col">小計</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                    $total=0;
                        if(!empty($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                            {   
                                $sr=$key+1;
                                // $total=$total+$value['Price'];
                                echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                        <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                        </td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form action='manage_cart.php' method='POST'>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>刪除</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="col-lg-3">
            <div class= "border bg-light rounded p-4">
                <h4>總金額:</h4>
                <h6 class="text-right" class="gtotal">元</h6>
                <!-- $<?php echo number_format($gtotal, 2) ?> -->
                <br>
                <?php
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                    {
                ?>
                <form action="purchase.php" method="POST">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="defaultCheck1" checked>
                        <label class="form-check-label" for="defaultCheck1">
                            現金支付
                        </label>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block" name="purchase">商品結帳</button>
                </form>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<script>

    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementsByClassName('gtotal');

    function subTotal()
    {   
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText=gt;
    }


    subTotal();

</script>


<?php include __DIR__. '/partials/html-foot.php'; ?>