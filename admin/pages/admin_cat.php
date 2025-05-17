<?php include("../include/header.php")?>

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
          <form method="POST" action="../../backend/insert_cat.php">
        <h3>Create Category</h3>
        <input type="text" name="cat" oninput="wri()" class="cat"/>

        <h3>Create Slug</h3>
        <input type="text" name="slug" class="slug"/>
        <button type="submit"> Add Category</button>
        </form>
      </div>
      </div>
</div>
<script>
 let  wri=()=>{
    let cat=document.querySelector(".cat").value;
    let slug=cat.replace(" ","_")
    document.querySelector(".slug").value=slug;
  }
</script>
<?php include("../include/footer.php")?>