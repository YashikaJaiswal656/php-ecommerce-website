<?php include("../include/header.php")?>
<?php include("../../backend/conn.php")?>
<?php 

$sql="SELECT  `id`,`name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE 1";
$run=mysqli_query($conn,$sql);
?>
<link rel="stylesheet" href="view_product.css">
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
  
      <div class="view_cont">
        
        <div class="view_back">
          
    
        
          
        
        <?php 
        while ($row=mysqli_fetch_assoc($run)) {
          
        
        ?>

            <div class="view_box">
              <img src="../../image/<?php echo($row["pic"])?>"  />

              <h2><?php echo($row["name"]) ?></h2>
              <div class="pricee"><h1><sup>₹</sup><?php echo($row["price"])?></h1></div>
              <p><?php echo($row["detail"])?></p>
              <div class="button">

               <a href="update_product.php?id=<?php echo($row["id"])?>"> <button class="edit"><i class="fas fa-edit"></i> Edit</button>  </a>
               <a href="../../backend/delete.php?id=<?php echo($row["id"])?>"> <button class="delete" ><i class="fas fa-trash"></i> Delete</button></a>
                <button class="view"><i class="fas fa-eye"></i> View</button>
              </div>
            </div>
            <?php } ?>
                  
                  </div>
          </div>
        
      </div>
      <?php include("../include/footer.php")?>