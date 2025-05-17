<?php  include("conn.php")?>
<?php
$id=$_GET["id"];
$sql="DELETE FROM `product` WHERE id=$id";
if($run=mysqli_query($conn,$sql)){
    echo" <html>
    <head>
        <!-- SweetAlert2 CDN -->
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Product Delete Successfully',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../admin/pages/view_product.php';
            });
        </script>
    </body>
    </html>";

};
?>