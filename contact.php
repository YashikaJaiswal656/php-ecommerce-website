
<?php include("include/header.php")?>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="detail.css">
<?php include("backend/conn.php")?>
            <div class="detail_cont">
                <div class="detail_back char">
                    <h1>Contact</h1>
                    <button class='btn_3'>Contact</button>
                </div>
            </div>
            <div class="contact_container">
                <div class="contact_cont">

                    <div class="contact_formm">
                        <h2>GET IN TOUCH</h2>
                        <p>We’re here to help! Whether you have questions about your order, need help with a product, or just want to say hello — feel free to reach out.

                            Customer Support Hours:
                            Monday – Saturday: 9:00 AM – 6:00 PM</p>
                        <form action="msg.php" method="POST">
                            <input type="text" placeholder="Your Name" name='name' required />
                            <input type="email" placeholder="Your Email" name='email' required />
                            <input type="text" placeholder="Subject" name='subject' required />
                            <textarea placeholder='Your Message' name='message' required></textarea>

                            <button class='btn_3' type="submit" name="send" >Send Message</button>
                        </form>
                    </div>


                    <div class="contact_add">

                        <h2>CONTACT INFO</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Jwala Nagar Shahdara</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+91 8448260587">+91 8448260587</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:yashikajaiswal30@gmail.com">yashikajaiswal30@gmail.com</a></p>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
            <?php include("include/slider.php")?>
<?php include("include/footer.php")?>
        