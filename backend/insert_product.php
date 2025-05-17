<?php include("conn.php")?>
<?php 
$name=$_POST["name"];
$detail=$_POST["detail"];
$description=$_POST["description"];
$rate=$_POST["rate"];
$price=$_POST["price"];
$pic=$_POST["pic"];
$cat=$_POST["cat"];
$sql="INSERT INTO `product`(`name`, `detail`, `description`, `cat`, `rate`, `price`, `pic`) VALUES ('$name','$detail','$description','$cat','$rate','$price','$pic')";
if($run=mysqli_query($conn, $sql)){
    echo"  <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Product Insert Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../admin/pages/add_product.php';
            });
        </script>
    </body>
    </html>";
}
?>