<?php include("conn.php")?>
<?php 
$cat=$_POST["cat"];
$slug=$_POST["slug"];
$sql="INSERT INTO `category`( `cat`, `slug`) VALUES ('$cat','$slug')";
if($run=mysqli_query($conn,$sql)){
echo " <html>
    <head>
        <!-- SweetAlert2 CDN -->
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Category Insert Success',
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '../admin/pages/admin_cat.php';
            });
        </script>
    </body>
    </html>";
}
?>