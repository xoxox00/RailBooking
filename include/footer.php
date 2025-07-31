<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="footer-flex">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <div class="footer-links">
                    <a href="index.php#about"><i class="fas fa-chevron-right"></i> About Us</a>
                    <a href="#"><i class="fas fa-chevron-right"></i> Terms & Conditions</a>
                    <a href="#"><i class="fas fa-chevron-right"></i> Privacy Policy</a>
                    <a href="#"><i class="fas fa-chevron-right"></i> FAQs</a>
                    <a href="#"><i class="fas fa-chevron-right"></i> Support</a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Train Categories</h3>
                <div class="footer-links">
                    <?php
                    $sql = "SELECT DISTINCT category FROM trains";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $category = $row['category'];
                            echo '<a href="trains.php?category=' . urlencode($category) . '"><i class="fas fa-train"></i> ' . htmlspecialchars($category) . '</a>';
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <div class="footer-contact">
                    <p><i class="fas fa-map-marker-alt"></i> 123 Railway street,Hyderabad, India</p>
                    <p><i class="fas fa-phone"></i>+91 9355447878</p>
                    <p><i class="fas fa-envelope"></i> support@railbooker.com</p>
                    <div class="social-links">
                        <a href="https://github.com/xoxox00" target="_blank"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 RailBooker - Railway Ticket Booking System. All Rights Reserved.</p>
            <p>Designed with <i class="fas fa-heart" style="color: #ef4444;"></i> for better railway experiences</p>
        </div>
    </div>
</footer>
<script src="script/global.js"></script>
