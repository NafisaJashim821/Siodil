<footer class="footer-section lazy-section">
  <div class="footer-container">

    <!--  Logo -->
    
<div class="footer-logo lazy-section">
  <img src="<?php echo $footerurl; ?>" alt="Siodil Logo">
  <p>DOCTOR RECOMMENDED</p>
</div>


    <!-- Column 1 -->
    <div class="footer-links lazy-section">
      <ul>
        <li><a href="#">Our Products</a></li>
        <li><a href="#">Ingredients</a></li>
        <li><a href="#">Skin Smarts</a></li>
        <li><a href="#">Why SIODIL</a></li>
        <li><a href="#">Skincare Solution</a></li>
        <li><a href="#">Glossary</a></li>
      </ul>
    </div>

    <!-- Column 2 -->
    <div class="footer-links lazy-section">
      <ul>
        <li><a href="#">Terms and Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">News</a></li>
      </ul>
    </div>

    <!-- Right Column -->
    <div class="footer-contact lazy-section">
      <h4>REMARK LLC</h4>
      <p>71 Teresa place<br>Hempstead, New York 11550</p>
      <p><a href="https://www.siodil.com">www.siodil.com</a><br>+1 (585) 512 7594</p>

      <div class="footer-social lazy-section">
        <p>Follow us</p>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>

  </div>
</footer>

<!-- JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<?php 
// Include extra JS files passed from the page
if(isset($extra_js) && is_array($extra_js)) {
    foreach($extra_js as $js) {
        echo '<script src="'.htmlspecialchars($js).'"></script>';
    }
}
?>

</body>
</html>
