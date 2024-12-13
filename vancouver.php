<?php
$meta_title = "24/7 Roadside Assistance Vancouver, WA | White Knight Roadside";
$meta_description = "Fast, reliable roadside assistance in Vancouver, WA. Serving downtown, Hazel Dell, Salmon Creek. 24/7 service with quick response. Call (503) 764-3154 now!";
include 'header.php';
?>

<section class="service-hero">
    <div class="container">
        <h1>Vancouver Roadside Assistance</h1>
        <p>Fast, Professional Service Throughout Vancouver and Surrounding Areas</p>
        <a href="tel:5037643154" class="cta-button">Get Immediate Help: (503) 764-3154</a>
    </div>
</section>

<section class="service-area-coverage">
    <div class="container">
        <h2 class="section-title">Vancouver Service Coverage</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Downtown Vancouver</h3>
                <p>Quick response times to Uptown Village, Esther Short Park, and surrounding areas.</p>
            </div>
            <div class="feature-item">
                <h3>North Vancouver</h3>
                <p>Serving Salmon Creek, Felida, Mount Vista, and Hazel Dell areas.</p>
            </div>
            <div class="feature-item">
                <h3>East Vancouver</h3>
                <p>Coverage in Fisher's Landing, Cascade Park, and surrounding communities.</p>
            </div>
            <div class="feature-item">
                <h3>Vancouver Mall Area</h3>
                <p>Service to Vancouver Mall and surrounding shopping districts.</p>
            </div>
        </div>
    </div>
</section>

<section class="local-services">
    <div class="container">
        <h2 class="section-title">Emergency Services in Vancouver</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Highway Assistance</h3>
                <p>Fast response on I-5, I-205, SR-500, SR-14, and major Vancouver highways.</p>
            </div>
            <div class="feature-item">
                <h3>Downtown Service</h3>
                <p>Quick help in downtown Vancouver and business districts.</p>
            </div>
            <div class="feature-item">
                <h3>Neighborhood Coverage</h3>
                <p>Service to all Vancouver neighborhoods and residential areas.</p>
            </div>
            <div class="feature-item">
                <h3>Shopping Centers</h3>
                <p>Help at Vancouver Mall, Hazel Dell Marketplace, and other retail areas.</p>
            </div>
        </div>
    </div>
</section>

<section class="common-locations">
    <div class="container">
        <h2 class="section-title">Common Service Locations</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Major Roads</h3>
                <ul>
                    <li>Interstate 5 (I-5)</li>
                    <li>Interstate 205 (I-205)</li>
                    <li>SR-500</li>
                    <li>SR-14</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Popular Areas</h3>
                <ul>
                    <li>Clark College</li>
                    <li>Washington State University Vancouver</li>
                    <li>Fort Vancouver</li>
                    <li>Vancouver Waterfront</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Shopping Districts</h3>
                <ul>
                    <li>Vancouver Mall</li>
                    <li>Hazel Dell Marketplace</li>
                    <li>Grand Central Shopping Center</li>
                    <li>East Vancouver Plaza</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Business Districts</h3>
                <ul>
                    <li>Downtown Vancouver</li>
                    <li>Uptown Village</li>
                    <li>Columbia Tech Center</li>
                    <li>Cascade Park</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="emergency-contact">
    <div class="container text-center">
        <h2>Stranded in Vancouver?</h2>
        <p class="mb-4">Our Vancouver team is ready to help 24/7. We'll reach you quickly anywhere in the Vancouver metro area!</p>
        <a href="tel:5037643154" class="cta-button">Call Now: (503) 764-3154</a>
        <p class="mt-4">Email: <a href="mailto:admin@wkroadside.com">admin@wkroadside.com</a></p>
    </div>
</section>

<!-- Local Business Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "White Knight Roadside LLC - Vancouver",
    "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/Alpha/images/logo.jpg",
    "description": "24/7 roadside assistance service in Vancouver, Washington",
    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/Alpha/vancouver",
    "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/Alpha/vancouver",
    "telephone": "+15037643154",
    "priceRange": "$$",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Vancouver",
        "addressRegion": "WA",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 45.6387,
        "longitude": -122.6615
    },
    "areaServed": {
        "@type": "City",
        "name": "Vancouver",
        "state": "Washington"
    }
}
</script>

<?php include 'footer.php'; ?>
