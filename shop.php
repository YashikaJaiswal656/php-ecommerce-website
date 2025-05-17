<?php include("include/header.php")?>
<link rel="stylesheet" href="shop.css">
<?php include("backend/conn.php")?>
<?php 


$sql="SELECT `id`, `name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE 1";
$run=mysqli_query($conn,$sql);
?>
            
            <div class="card_cont_back">
                <div class="card_back">
                    <p class="cardtext">Check each product page for other buying options. Price and other details may vary based on product size and colour.
                    </p>
                    <?php 
                    while ($row=mysqli_fetch_assoc($run)) {
                        
                    
                    ?>
                    
                       <div class="box">
                         <img src="image/<?php echo($row["pic"])?>" />
                            <div class="text">
                                <h2>Premium Product</h2>

                                <div class="pricee">
                                    <h1><sup>₹</sup><?php echo($row["price"])?></h1>
                                </div>
                                <p>Save money with our offer</p>
                                <span>Fresh food</span>
                                <p>Free Delivery On <b>Sunday</b></p>
                                <a href="detail.php?id=<?php echo($row["id"])?>"><button class="btn_3">More Info</button></a>
                            </div>
                        </div>


<?php }?>

                </div>
            </div>
            
            
<?php include("include/slider.php")?>

<?php include("include/footer.php")?>