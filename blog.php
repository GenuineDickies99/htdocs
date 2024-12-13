<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Basic variables
$meta_title = "Blog | White Knight Roadside";
$meta_description = "Roadside assistance tips and resources";

// Try including files with error reporting
try {
    require 'config.php';
    require 'header.php';
} catch (Exception $e) {
    die('Error including files: ' . $e->getMessage());
}
?>

<div class="blog-hero">
    <div class="container">
        <h1>Roadside Assistance Tips & Resources</h1>
        <p>Expert advice to keep you safe on the roads of Portland and Vancouver</p>
    </div>
</div>

<div class="container">
    <div class="blog-grid">
        <article class="blog-card">
            <img src="images/tirechange.jpg" alt="Flat Tire Signs and Prevention">
            <div class="blog-content">
                <div class="blog-category">Tire Care</div>
                <h2>5 Warning Signs of a Flat Tire and How to Prevent Them</h2>
                <p class="blog-excerpt">Learn the early warning signs of tire problems and how to prevent flat tires on Portland and Vancouver roads.</p>
                <a href="blog/flat-tire-prevention" class="cta-button">Read More</a>
                <div class="blog-meta">
                    <span class="read-time">5 min read</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="images/jumpstarts1.jpg" alt="Battery Care in Winter">
            <div class="blog-content">
                <div class="blog-category">Battery Care</div>
                <h2>Winter Battery Care: Preparing for Pacific Northwest Weather</h2>
                <p class="blog-excerpt">Essential tips for maintaining your car battery during cold Portland winters.</p>
                <a href="blog/winter-battery-care" class="cta-button">Read More</a>
                <div class="blog-meta">
                    <span class="read-time">4 min read</span>
                </div>
            </div>
        </article>

        <article class="blog-card">
            <img src="images/roadsideassistance1.jpg" alt="Emergency Kit Guide">
            <div class="blog-content">
                <div class="blog-category">Safety</div>
                <h2>Essential Emergency Kit for Portland-Vancouver Drivers</h2>
                <p class="blog-excerpt">Build the perfect emergency kit for your car with local considerations.</p>
                <a href="blog/emergency-kit-guide" class="cta-button">Read More</a>
                <div class="blog-meta">
                    <span class="read-time">6 min read</span>
                </div>
            </div>
        </article>
    </div>
</div>

<?php
try {
    require 'footer.php';
} catch (Exception $e) {
    die('Error including footer: ' . $e->getMessage());
}
?>
