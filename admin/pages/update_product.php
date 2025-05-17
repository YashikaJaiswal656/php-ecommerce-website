<?php include("../include/header.php")?>
<?php include("../../backend/conn.php")?>
<?php 

$sql="SELECT  `cat`, `slug` FROM `category` WHERE 1";
$run=mysqli_query($conn,$sql);
?>

<?php 
$id=$_GET["id"];

$sqll="SELECT  `id`,`name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE id=$id";
$runn=mysqli_query($conn,$sqll);
?>
<link rel="stylesheet" href="admin_cat.css">
<div class="ccc">
    <div class="sidebar">
          <h2>Dashboard Menu</h2>
          <ul>
            <a href="dashboard.php"><li > Home</li></a> 
             <a href="admin_cat.php"><li> Create Category</li></a>   
          <a href="add_product.php"><li> Add Product</li></a>   
            <a href="view_product.php"><li> View Products</li></a>  
            <a href="../../index.php"><li> Website</li></a> 
            
          </ul>
        </div>
  
      <div class="container_admin">

        <div class="form-container">
            <?php
             while ($roww=mysqli_fetch_assoc($runn)) {
                
            ?>
          <form method="POST" action="../../backend/update.php?id=<?php echo($roww["id"])?>">
            
            <h3>Product Name</h3>
            <input type="text" name="name" value="<?php echo($roww["name"])?>" placeholder="Product Name" />

            <h3>Short Description</h3>
            <input type="text" name="detail" value="<?php echo($roww["detail"])?>" placeholder="Detail" />

            <h3>Long Description</h3>
            <input type="text" name="description"value="<?php echo($roww["description"])?>" placeholder='Description'  />
            <h3>Add Category</h3>
            
            <select name="cat" value="<?php echo($roww["cat"])?>">
              <option value="">Select Category</option>
              <?php 
              while ($row=mysqli_fetch_assoc($run)) {
                
              
              ?>
                <option value="<?php echo($row["slug"])?>">
                  <?php echo($row["cat"])?>
                </option>
<?php }?>
            </select>

            <h3>Rating</h3>
            <input type="number" name="rate" value="<?php echo($roww["rate"])?>" placeholder="Rating" />

            <h3>Price</h3>
            <input type="number"name="price" value="<?php echo($roww["price"])?>"  placeholder="Price" />
            <h3>Product Picture</h3>
<input type="file" name="pic" />



            <button type="submit">Add Product</button>
          </form>
          <?php }?>
        </div>
      </div>
</div>
<?php include("../include/footer.php")?>