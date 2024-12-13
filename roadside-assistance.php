<?php
$meta_title = "24/7 Roadside Assistance | Portland & Vancouver | White Knight";
$meta_description = "Fast, professional roadside assistance in Portland & Vancouver. 24/7 service, quick response times, and experienced technicians for all vehicle types. Call (503) 764-3154 now!";
include 'header.php';
?>

<!-- Service Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Roadside Assistance",
    "provider": {
        "@type": "LocalBusiness",
        "name": "White Knight Roadside",
        "telephone": "+15037643154"
    },
    "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
            "@type": "GeoCoordinates",
            "latitude": "45.5155",
            "longitude": "-122.6789"
        },
        "geoRadius": "50"
    },
    "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "<?php echo $canonical_url; ?>",
        "servicePhone": "+15037643154",
        "availableLanguage": "English"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Roadside Assistance Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Battery Jump Start"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Tire Change Service"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Fuel Delivery"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Lock-Out Service"
                }
            }
        ]
    }
}
</script>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "How quickly can you arrive for roadside assistance?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We prioritize fast response times with service vehicles strategically located throughout Portland and Vancouver. Typical arrival times are between 30-45 minutes, depending on your location and current traffic conditions."
            }
        },
        {
            "@type": "Question",
            "name": "What types of vehicles do you service?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We service all types of vehicles including cars, trucks, SUVs, and commercial vehicles. Our experienced technicians are equipped to handle various vehicle makes and models."
            }
        },
        {
            "@type": "Question",
            "name": "Do you provide 24/7 service?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, we provide 24/7 roadside assistance services, including holidays. Our emergency response team is always ready to help, day or night."
            }
        }
    ]
}
</script>

<section class="service-hero">
    <div class="container">
        <h1>Professional Roadside Assistance Service</h1>
        <p class="hero-subtitle">Fast, Reliable Emergency Help - Available 24/7</p>
        <a href="tel:5037643154" class="cta-button">Get Immediate Help: (503) 764-3154</a>
    </div>
</section>

<section class="service-features">
    <div class="container">
        <h2 class="section-title">Comprehensive Roadside Assistance</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <img src="<?php echo $relative_path; ?>images/jumpstarts.jpg" alt="Battery Jump Start Service" width="300" height="200" loading="lazy">
                <h3>Battery Services</h3>
                <p>Dead battery? We'll jumpstart your vehicle or replace the battery if needed.</p>
            </div>
            <div class="feature-item">
                <img src="<?php echo $relative_path; ?>images/tirechange.jpg" alt="Tire Change Service" width="300" height="200" loading="lazy">
                <h3>Tire Services</h3>
                <p>Flat tire changes and tire replacement services available on the spot.</p>
            </div>
            <div class="feature-item">
                <img src="<?php echo $relative_path; ?>images/fueldelivery.jpg" alt="Fuel Delivery Service" width="300" height="200" loading="lazy">
                <h3>Fuel Delivery</h3>
                <p>Run out of gas? We'll deliver fuel to get you back on the road.</p>
            </div>
            <div class="feature-item">
                <img src="<?php echo $relative_path; ?>images/lockouts.jpg" alt="Vehicle Lock-Out Service" width="300" height="200" loading="lazy">
                <h3>Lock-Out Service</h3>
                <p>Locked your keys in the car? We'll help you regain access safely.</p>
            </div>
        </div>
    </div>
</section>

<section class="service-benefits">
    <div class="container">
        <h2 class="section-title">Why Choose White Knight Roadside?</h2>
        <div class="feature-grid">
            <div class="feature-item">
                <h3>24/7 Availability</h3>
                <p>Emergency assistance available any time, day or night, including holidays.</p>
            </div>
            <div class="feature-item">
                <h3>Fast Response Times</h3>
                <p>Quick arrival times with service vehicles strategically located throughout the area.</p>
            </div>
            <div class="feature-item">
                <h3>Experienced Technicians</h3>
                <p>Certified professionals equipped with the latest tools and technology.</p>
            </div>
            <div class="feature-item">
                <h3>All Vehicles Served</h3>
                <p>Service for cars, trucks, SUVs, and commercial vehicles.</p>
            </div>
        </div>
    </div>
</section>

<section class="service-area">
    <div class="container">
        <h2 class="section-title">Service Coverage Area</h2>
        <p class="text-center mb-4">We provide fast and reliable roadside assistance services across all major highways and local roads in our coverage area. Whether you're stuck on the highway or in a parking lot, we'll get to you quickly.</p>
        <div class="text-center">
            <a href="tel:5037643154" class="cta-button">Call Now: (503) 764-3154</a>
        </div>
    </div>
</section>

<section class="service-process">
    <div class="container">
        <h2 class="section-title">How It Works</h2>
        <div class="process-steps">
            <div class="step">
                <span class="step-number">1</span>
                <h3>Call Us</h3>
                <p>Contact our 24/7 emergency number for immediate assistance.</p>
            </div>
            <div class="step">
                <span class="step-number">2</span>
                <h3>Share Location</h3>
                <p>Provide your location and brief description of the issue.</p>
            </div>
            <div class="step">
                <span class="step-number">3</span>
                <h3>Quick Response</h3>
                <p>Our nearest technician will be dispatched to your location.</p>
            </div>
            <div class="step">
                <span class="step-number">4</span>
                <h3>Problem Solved</h3>
                <p>We'll fix the issue and get you back on the road safely.</p>
            </div>
        </div>
    </div>
</section>

<section class="faq-section" id="faq">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h3>How quickly can you arrive for roadside assistance?</h3>
                <p>We prioritize fast response times with service vehicles strategically located throughout Portland and Vancouver. Typical arrival times are between 30-45 minutes, depending on your location and current traffic conditions.</p>
            </div>
            <div class="faq-item">
                <h3>What types of vehicles do you service?</h3>
                <p>We service all types of vehicles including cars, trucks, SUVs, and commercial vehicles. Our experienced technicians are equipped to handle various vehicle makes and models.</p>
            </div>
            <div class="faq-item">
                <h3>Do you provide 24/7 service?</h3>
                <p>Yes, we provide 24/7 roadside assistance services, including holidays. Our emergency response team is always ready to help, day or night.</p>
            </div>
        </div>
    </div>
</section>

<section class="emergency-contact">
    <div class="container text-center">
        <h2>Need Immediate Roadside Assistance?</h2>
        <p class="mb-4">Don't wait - our emergency response team is ready to help!</p>
        <a href="tel:5037643154" class="cta-button">Call Now: (503) 764-3154</a>
        <p class="mt-4">Email: <a href="mailto:admin@wkroadside.com">admin@wkroadside.com</a></p>
    </div>
</section>

<?php include 'footer.php'; ?>
