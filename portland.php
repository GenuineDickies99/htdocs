<?php
$meta_title = "24/7 Roadside Assistance Portland, OR | White Knight Roadside";
$meta_description = "Fast, reliable roadside assistance in Portland, OR. Serving downtown, Gresham, Beaverton, Hillsboro. 24/7 service with quick response. Call (503) 764-3154 now!";
include 'header.php';
?>

<section class="service-hero">
    <div class="container">
        <h1>Portland Roadside Assistance</h1>
        <p>Fast, Professional Service Throughout Portland and Surrounding Areas</p>
        <a href="tel:5037643154" class="cta-button">Get Immediate Help: (503) 764-3154</a>
    </div>
</section>

<section class="service-area-coverage">
    <div class="container">
        <h2 class="section-title">Portland Service Coverage</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Downtown Portland</h3>
                <p>Quick response times to Pearl District, Old Town, South Waterfront, and surrounding areas.</p>
            </div>
            <div class="feature-item">
                <h3>East Portland</h3>
                <p>Serving Gresham, Troutdale, Fairview, and Wood Village areas.</p>
            </div>
            <div class="feature-item">
                <h3>West Portland</h3>
                <p>Coverage in Beaverton, Hillsboro, Tigard, and surrounding communities.</p>
            </div>
            <div class="feature-item">
                <h3>North Portland</h3>
                <p>Service to St. Johns, University Park, and neighboring areas.</p>
            </div>
        </div>
    </div>
</section>

<section class="local-services">
    <div class="container">
        <h2 class="section-title">Emergency Services in Portland</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>Highway Assistance</h3>
                <p>Fast response on I-5, I-84, I-205, US 26, and major Portland highways.</p>
            </div>
            <div class="feature-item">
                <h3>Downtown Service</h3>
                <p>Quick help in busy downtown areas and parking structures.</p>
            </div>
            <div class="feature-item">
                <h3>Neighborhood Coverage</h3>
                <p>Service to all Portland neighborhoods and residential areas.</p>
            </div>
            <div class="feature-item">
                <h3>Shopping Centers</h3>
                <p>Help at Lloyd Center, Washington Square, Clackamas Town Center, and other retail areas.</p>
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
                    <li>Interstate 84 (I-84)</li>
                    <li>Interstate 205 (I-205)</li>
                    <li>US Highway 26</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Popular Areas</h3>
                <ul>
                    <li>Portland International Airport</li>
                    <li>Portland State University</li>
                    <li>OHSU</li>
                    <li>Providence Park</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Shopping Districts</h3>
                <ul>
                    <li>Pioneer Place</li>
                    <li>Lloyd Center</li>
                    <li>Washington Square</li>
                    <li>Clackamas Town Center</li>
                </ul>
            </div>
            <div class="feature-item">
                <h3>Business Districts</h3>
                <ul>
                    <li>Downtown Portland</li>
                    <li>Pearl District</li>
                    <li>South Waterfront</li>
                    <li>Lloyd District</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="emergency-contact">
    <div class="container text-center">
        <h2>Stranded in Portland?</h2>
        <p class="mb-4">Our Portland team is ready to help 24/7. We'll reach you quickly anywhere in the Portland metro area!</p>
        <a href="tel:5037643154" class="cta-button">Call Now: (503) 764-3154</a>
        <p class="mt-4">Email: <a href="mailto:admin@wkroadside.com">admin@wkroadside.com</a></p>
    </div>
</section>

<!-- Local Business Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "White Knight Roadside LLC - Portland",
    "image": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/images/logo.jpg",
    "description": "24/7 roadside assistance service in Portland, Oregon",
    "@id": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/portland",
    "url": "https://<?php echo $_SERVER['HTTP_HOST']; ?>/portland",
    "telephone": "+15037643154",
    "priceRange": "$$",
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "Portland",
        "addressRegion": "OR",
        "addressCountry": "US"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 45.5155,
        "longitude": -122.6789
    },
    "areaServed": {
        "@type": "City",
        "name": "Portland",
        "state": "Oregon"
    }
}
</script>

<?php include 'footer.php'; ?>
