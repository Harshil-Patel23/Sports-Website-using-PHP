<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h2>APEX SPORTS</h2>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p><strong>Address:</strong> 23 Wall Street, London, UK</p>
            <p><strong>Mobile:</strong> 8527419631</p>
            <p><strong>Hours:</strong> 10:00 - 18:00, Mon - Sat</p>
        </div>
        <div class="footer-section">
            <h3>About Us</h3>
            <a href="about.php">About us</a>
            <a href="privacy.php">Privacy Policy</a>
            <a href="tandc.php">Terms & Conditions</a>
            <a href="contact.php">Contact us</a>
        </div>
        <div class="footer-section">
            <h3>My Account</h3>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Logout</a>
                <a href="cart.php">View Cart</a>
            <?php else: ?>
                <a href="login.php">Sign in</a>
                <a href="register.php">View Cart</a>
            <?php endif; ?>
        </div>
    </div>
    <p class="developer" style="color: #f39c12;">Developed by Harshil Patel</p>
    <p>&copy; 2024 Sports E-Commerce. All rights reserved.</p>
</footer>