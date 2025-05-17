
<link rel="stylesheet" href="include/slider.css">

    <div class="show">
    <div class="show_cont">
        <div class="arrow_cont">
            <i class="fa fa-arrow-left"></i>
            <i class="fa fa-arrow-right"></i>

        </div>

        <div class="slide_show">
            <?php 

$sql="SELECT  `name`, `detail`, `description`, `cat`, `rate`, `price`, `pic` FROM `product` WHERE 1";
$run=mysqli_query($conn,$sql);
?>
<?php 
while ($row=mysqli_fetch_assoc($run)) {
    

?>
                
            <img src="image/<?php echo($row["pic"])?>">
            <?php }?>
        </div>
    </div>
</div>
<script>
    let pcont = document.querySelector('.slide_show');
        let nextBtn = document.querySelector('.fa-arrow-right');
        let prevBtn = document.querySelector('.fa-arrow-left');

        let scrollAmount = 280;

        if (pcont && nextBtn && prevBtn) {
            nextBtn.addEventListener('click', () => {
                pcont.scrollLeft += scrollAmount;
            });

            prevBtn.addEventListener('click', () => {
                pcont.scrollLeft -= scrollAmount;
            });
        }
</script>
