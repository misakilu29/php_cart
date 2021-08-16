<?php include __DIR__. '/partials/init.php'; ?>

<?php include __DIR__. '/partials/html-head.php'; ?>
<?php include __DIR__. '/partials/navbar.php'; ?>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="./imgs/dog_food.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">dog_food</h5>
                        <p class="card-text">Price: NT.450</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">加入購物車</button>
                        <input type="hidden" name="Item_Name" value="dog_food">
                        <input type="hidden" name="Price" value="450">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="./imgs/dog_item.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">dog_item</h5>
                        <p class="card-text">Price: NT.650</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">加入購物車</button>
                        <input type="hidden" name="Item_Name" value="dog_item">
                        <input type="hidden" name="Price" value="650">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="./imgs/cat_food.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">cat_food</h5>
                        <p class="card-text">Price: NT.350</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">加入購物車</button>
                        <input type="hidden" name="Item_Name" value="cat_food">
                        <input type="hidden" name="Price" value="350">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="./imgs/cat_climb.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">cat_climb</h5>
                        <p class="card-text">Price: NT.750</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">加入購物車</button>
                        <input type="hidden" name="Item_Name" value="cat_climb">
                        <input type="hidden" name="Price" value="750">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>








<?php include __DIR__. '/partials/html-foot.php'; ?>