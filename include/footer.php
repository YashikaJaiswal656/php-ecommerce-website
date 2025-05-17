<link rel="stylesheet" href="include/footer.css">
    <footer class="custom-footer">
      <div class="footer-container">
        <div class="footer-sections">
          
          
          <div class="footer-box">
            <h3>Business Hours</h3>
            <ul class="footer-list">
              <li>Monday - Friday: 08.00am - 05.00pm</li>
              <li>Saturday: 10.00am - 08.00pm</li>
              <li>Sunday: <span class="closed">Closed</span></li>
            </ul>
          </div>


          <div class="footer-box">
            <h3>Subscribe to Our Newsletter</h3>
            <form class="newsletter-form">
              <input type="email" placeholder="Enter your email" />
              <button type="submit">Subscribe</button>
            </form>
          </div>

          
          <div class="footer-box">
            <h3>Connect with Us</h3>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook" ></i></a>
              <a href="https://github.com/YashikaJaiswal656" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://www.linkedin.com/in/yashika-jaiswal-83202a345/" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="mailto:yashikajaiswal30@gmail.com" target="_blank"><i class="fab fa-google-plus"></i></a>
              <a href="https://wa.me/8448260585" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>

        </div>

        <hr />

        <div class="footer-sections">
          
          
          <div class="footer-box">
            <h3>About Freshshop</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>

          
          <div class="footer-box">
            <h3>Useful Links</h3>
            <ul class="footer-links">
              <li><Link to="#">About Us</Link></li>
              <li><Link to="#">Customer Service</Link></li>
              <li><Link to="#">Terms & Conditions</Link></li>
              <li><Link to="#">Privacy Policy</Link></li>
              <li><Link to="#">Delivery Info</Link></li>
            </ul>
          </div>

          
          <div class="footer-box">
            <h3>Contact Us</h3>
            <ul class="footer-list">
              <li><i class="fas fa-map-marker-alt"></i> Delhi Shahdara </li>
              <li><i class="fas fa-phone"></i> <a href="tel:+1888705770">+91 8448260587</a></li>
              <li><i class="fas fa-envelope"></i> <a href="mailto:contactinfo@gmail.com">yashikajaiswal30@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="footer-bottom">
        <p>© 2024 ThewayShop | Developed by <a href="">YASHIKA JAISWAL</a></p>
      </div>
    </footer>

    <script>
        const toggleMenu = () => {
        const sideMenu = document.querySelector(".side_two");
        const menuIcon = document.querySelector(".menu-icon");

        if (sideMenu.classList.contains("showw")) {
            sideMenu.classList.remove("showw");
            menuIcon.classList.remove("fa-times");
            menuIcon.classList.add("fa-bars");
        } else {
            sideMenu.classList.add("showw");
            menuIcon.classList.remove("fa-bars");
            menuIcon.classList.add("fa-times");
        }
    };

</script>
</body>
</html>