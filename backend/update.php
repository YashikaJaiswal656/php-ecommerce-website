<?php include("conn.php")?>
<?php 
$name=$_POST["name"];
$detail=$_POST["detail"];
$description=$_POST["description"];
$rate=$_POST["rate"];
$price=$_POST["price"];
$pic=$_POST["pic"];
$cat=$_POST["cat"];
$id=$_GET["id"];
$sql="UPDATE `product` SET `name`='$name',`detail`='$detail',`description`='$description',`cat`='$cat',`rate`='$rate',`price`='$price',`pic`='$pic' WHERE id=$id";
if($run=mysqli_query($conn, $sql)){
    echo"  <html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Product update Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../admin/pages/view_product.php';
            });
        </script>
    </body>
    </html>";
}
?>