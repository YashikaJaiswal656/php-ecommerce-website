<?php include("include/header.php")?>
<link rel="stylesheet" href="detail.css">

<?php include("backend/conn.php")?>
<?php 
$id=$_GET["id"];
$sql="SELECT `id`, `name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE id=$id";
$run=mysqli_query($conn,$sql);
?>
            <div class="detail_cont">
            <div class="detail_back char">
                <h1>Shop Details</h1>
                <button class='btn_3'>Shop details</button>
            </div>
            </div>
            <div class="detail_container">

                <?php 
                while ($row=mysqli_fetch_assoc($run)) {
                 
                ?>
                
                <div class="half_detail">

                    <div class="detail_img">
                        <img src="image/<?php echo($row["pic"])?>" />
                    </div>
                    <div class="single-product-details ">
                        <h2><?php echo($row["name"])?></h2>
                        <h5> Rs <?php echo($row["price"])?></h5>
                        <p class="available-stock"><span> More than 20 available / <a href="#">8 sold </a></span></p>
						<h4>Short Description:</h4>
						<p> <?php echo($row["description"])?></p>
						

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
                            <button class='btn_3'>Buy New</button>
                            
                           <a href="cart.php?id=<?php echo($row["id"])?>"> <button class='btn_3'>Add to cart</button></a>
                                
							</div>
						</div>

						<div class="add-to-btn">
							<div class="add-comp">
								<button class="btn_3" ><i class="fas fa-heart"></i> Add to wishlist</button>
								<button class="btn_3" ><i class="fas fa-sync-alt"></i> Add to wishlist</button>

							</div>
							<div class="share-bar">
								<button class='btn_3'><i class="fab fa-facebook" aria-hidden="true"></i></button>
								<button class='btn_3'><i class="fab fa-google-plus" aria-hidden="true"></i></button>
								<button class='btn_3'><i class="fab fa-twitter" aria-hidden="true"></i></button>
								<button class="btn_3" ><i class="fab fa-pinterest-p" aria-hidden="true"></i></button>
								<button class="btn_3"><i class="fab fa-whatsapp" aria-hidden="true"></i></button>
							</div>
						</div>
                    </div>
                </div>
                <?php }?>
                
            </div>
            <?php include("include/slider.php")?>

            <?php include("include/footer.php")?>