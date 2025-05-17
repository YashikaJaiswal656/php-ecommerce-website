<?php include("include/header.php")?>
<link rel="stylesheet" href="detail.css">

<link rel="stylesheet" href="checkout.css">
<link rel="stylesheet" href="cart.css">
<?php include("backend/conn.php")?>
<?php
$pn=$_POST["pn"];
$pg=$_POST["pg"];
$pt=$_POST["pt"];
$pq=$_POST["pq"];
$gt=$_POST["gt"];
?>

            <div class="detail_cont">
                <div class="detail_back char">
                    <h1>Checkout</h1>
                    <button class='btn_3'>Checkout</button>
                </div>
            </div>
            <div class="cart_cont">
                <div class="cart_containerr">
                    <div class="cart_cont_one">

                        <div class="contact_form">
                            <h2>BILING ADDRESS</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio justo, ultrices ac nisl sed, lobortis porta elit. Fusce in metus ac ex venenatis ultricies at cursus mauris.</p>
                            <form  action="form.php" method="POST">
                                <label htmlFor="">Your name*</label>
                                <input type="text" name="name" required />
                                <label htmlFor="">Your email*</label>

                                <input type="email" name="email" required />
                                <label htmlFor="" >Address one*</label>

                                <input type="text" name="address_one" required />
                                <label htmlFor="">Address two*</label>

                                <input type="text" name="address_two" required />
                                <label htmlFor="">Phone number*</label>

                                <input type="number"name="phone" required />
                                <label htmlFor="">Zip code*</label>

                                <input type="number" name="code" required />

                                
                                    <div class="name">
                                        <input type="hidden" name="pr_name" value="<?php echo($pn)?>" />
<input type="hidden" name="quantity" value="<?php echo($pq)?>" />
<input type="hidden" name="price" value="<?php echo($gt)?>" />
<input type="hidden" name="gst" value="<?php echo($pg)?>" />
<input type="hidden" name="total" value="<?php echo($pt)?>" />

                                    </div>
                            
                                <button class='btn_3'name="send" type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="cart_cont_two">
                        <div class="order_summaryy">
                            <h3>Your Order</h3>
                            <div class="summary_item">


                                <h4>Product Name</h4>
                                <div class="summary_value  cart_name"> <?php echo($pn)?> </div>
                            </div>
                            <div class="summary_item">
                                <h4>Product Quantity</h4>
                                <div class="summary_value cart_quantity"> <?php echo($pq)?> </div>
                            </div>
                            <div class="summary_item">
                                <h4>Sub Total</h4>
                                <div class="summary_value cart_price "> <?php echo($gt)?> </div>
                            </div>

                            <hr />

                            <div class="summary_item">
                                <h4>Gst</h4>
                                <div class="summary_value cart_gst"><?php echo($pg)?></div>
                            </div>
                            <div class="summary_item">
                                <h4>Shipping Cost</h4>
                                <div class="summary_value"> 0 </div>
                            </div>
                            <hr />
                            <div class="summary_total">
                                <h5>Grand Total</h5>
                                <div class="summary_value cart_total"> <?php echo($pt)?></div>
                            </div>
                            <hr />
                            

                        </div>

                    </div>
                
                </div>
            </div>
            <?php include("include/slider.php")?>
            <?php include("include/footer.php")?>
