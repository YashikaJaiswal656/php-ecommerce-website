<?php include("include/header.php")?>
<link rel="stylesheet" href="detail.css">
<link rel="stylesheet" href="cart.css">
<?php include("backend/conn.php")?>
<?php 
$id=$_GET["id"];
$sql="SELECT `id`, `name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE id=$id";
$run=mysqli_query($conn,$sql);
?>
            <div class="detail_cont">
                <div class="detail_back char">
                    <h1>Cart</h1>
                    <button class='btn_3'>Cart</button>
                </div>
            </div>
            <div class="cart_cont">
                <div class="cart_container">
                    <table class="cart_table">
                        <thead class="thead">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            while ($row=mysqli_fetch_assoc($run)) {
                                
                            
                            ?>
                            <tr>
                                <td>
                                    <img src="image/<?php echo($row["pic"])?>" alt="Product" class="cart_img" />
                                </td>
                                <td class="name_pr"><?php echo($row["name"])?></td>
                                <td class="amt_price"><?php echo($row["price"])?></td>
                                <td><input type="number" minvalue="1" class="quantity_input " placeholder="1" /></td>
                                <td class="update_pr"><?php echo($row["price"])?></td>
                                <td><i class="fas fa-times remove_icon"></i></td>
                            </tr>

                            
                            <?php }?>
                        </tbody>
                    </table>
                    <button class="but" onclick="update()">Update Cart</button>
                    <div class="order_summary">
                        <h3>Order Summary</h3>
                        <div class="summary_item">
                            <h4>Sub Total</h4>
                            <div class="summary_value cart_price">130 </div>
                        </div>
                        
                        <hr />
                        
                        <div class="summary_item">
                            <h4>Gst</h4>
                            <div class="summary_value cart_gst">2 </div>
                        </div>
                        <div class="summary_item">
                            <h4>Shipping Cost</h4>
                            <div class="summary_value"> 0 </div>
                        </div>
                        <hr />
                        <div class="summary_total">
                            <h5>Grand Total</h5>
                            <div class="summary_value cart_total"> 388 </div>
                        </div>
                        <hr />
                        <div class="shopping_box">
                            

<form action="checkout.php" method="POST">
    <input type="hidden" name="pn" class="pn">
    <input type="hidden" name="pq" class="pq" value="1">
    <input type="hidden" name="pg" class="pg" >
    <input type="hidden" name="pt" class="pt" id="">
    <input type="hidden" name="gt" class="gt" id="">



                            <button class="btn_checkout" type="submit">
                            Checkout
</button>
</form>
                        </div>

                    </div>



                </div>
            </div>
            <script>

                const amtname = document.querySelector(".name_pr").innerHTML;
        const amtElement = document.querySelector(".amt_price");
        const quantityInput = document.querySelector(".quantity_input");
        const updateElement = document.querySelector(".update_pr");
        const updateElementt = document.querySelector(".update_pr").innerHTML;
        document.querySelector(".cart_price").innerHTML=updateElementt;
        document.querySelector(".gt").value=updateElementt;
        let gstt=updateElementt*10/100;
        document.querySelector(".pn").value=amtname;
        document.querySelector(".cart_gst").innerHTML=gstt;
                document.querySelector(".pg").value=gstt;
        let grand_pricee=parseInt(updateElementt)+parseInt(gstt);
        document.querySelector(".cart_total").innerHTML=grand_pricee
        document.querySelector(".pt").value=grand_pricee;
        
            quantityInput.addEventListener('input', () => {

                
                let quantity = parseInt(quantityInput.value) || 1;
                let amt=parseInt(amtElement.innerHTML)
                let total = amt * quantity;
                updateElement.innerHTML = total;
                document.querySelector(".pq").value=quantity;
                document.querySelector(".gt").value=total;

            });


   let update=()=>{
        let cart_sub=document.querySelector(".update_pr").innerHTML;
        document.querySelector(".cart_price").innerHTML=cart_sub;
        let gst=cart_sub*10/100;
        document.querySelector(".cart_gst").innerHTML=gst;
        document.querySelector(".pg").value=gst;
        let grand_price=parseInt(cart_sub)+parseInt(gst);
        document.querySelector(".cart_total").innerHTML=grand_price
        document.querySelector(".pt").value=grand_price
        }
            </script>
            <?php include("include/slider.php")?>
            <?php include("include/footer.php")?>