<?php 

$sql="SELECT `id`, `name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE 1";
$run=mysqli_query($conn,$sql);
?>

<div class="cat_s">


    <div class="cat_s_box">
        <div class="i">

            <h1>Fruits and Vegetable</h1>
            <div class="button"><a href="" class="">All</a>
                <a href="" class="">Top Featured</a>
                <a href="" class="">Best Seller</a>
            </div>
        </div>

        <div class="cat_s_img item">
<?php 
while ($row=mysqli_fetch_assoc($run)) {
    

?>


            <div class="products-single">
                <div class="box-img-hover">
                    <div class="type-lb">
                        <p class="sale">Sale</p>
                    </div>

                    <img src="image/<?php echo($row["pic"])?>">
                    <div class="mask-icon">
                        <a class="cart" href="detail.php?id=<?php echo($row["id"])?>">More info</a>
                        <ul>
                            <li><a href="#" title="View"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                            <li><a href="#" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="why-text">
                    <h4><?php echo($row["name"])?></h4>
                    <h5>Price:-<?php echo($row["price"])?></h5>
                </div>
            </div>
        
<?php }?>
        </div>


    </div>

</div>