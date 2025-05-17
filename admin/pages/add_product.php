<?php include("../include/header.php")?>
<?php include("../../backend/conn.php")?>
<?php 

$sql="SELECT  `cat`, `slug` FROM `category` WHERE 1";
$run=mysqli_query($conn,$sql);
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
          <form method="POST" action="../../backend/insert_product.php">
            <h3>Product Name</h3>
            <input type="text" name="name" placeholder="Product Name" />

            <h3>Short Description</h3>
            <input type="text" name="detail"  placeholder="Detail" />

            <h3>Long Description</h3>
            <input type="text" name="description" placeholder='Description'  />
            <h3>Add Category</h3>
            
            <select name="cat" >
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
            <input type="number" name="rate" placeholder="Rating" />

            <h3>Price</h3>
            <input type="number"name="price"  placeholder="Price" />
            <h3>Product Picture</h3>
<input type="file" name="pic" />



            <button type="submit">Add Product</button>
          </form>
        </div>
      </div>
</div>
<?php include("../include/footer.php")?>