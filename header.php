<?php
// Determine if we're in a subdirectory
$in_subfolder = strpos($_SERVER['PHP_SELF'], '/blog/') !== false;
$relative_path = $in_subfolder ? '../' : '';

if (!defined('SITE_URL')) {
    include $relative_path . 'config.php';
}

// Clean the current URI for canonical URL
$current_uri = $_SERVER['REQUEST_URI'];
$current_uri = preg_replace('/\.php$/', '', $current_uri);
$current_uri = str_replace('/Alpha/', '/', $current_uri);
$current_uri = $current_uri === '/' ? $current_uri : rtrim($current_uri, '/');
$canonical_url = 'https://www.wkroadside.com' . $current_uri;

// Generate breadcrumb data
$path_segments = explode('/', trim($current_uri, '/'));
$breadcrumbs = [];
$current_path = '';
foreach ($path_segments as $segment) {
    if (!empty($segment)) {
        $current_path .= '/' . $segment;
        $breadcrumbs[] = [
            'name' => ucwords(str_replace('-', ' ', $segment)),
            'url' => 'https://www.wkroadside.com' . $current_path
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($meta_title) ? $meta_title : 'White Knight Roadside | 24/7 Professional Roadside Assistance in Portland & Vancouver'; ?></title>
    <meta name="description" content="<?php echo isset($meta_description) ? $meta_description : 'White Knight Roadside provides 24/7 roadside assistance in Portland, OR and Vancouver, WA. Services include jumpstarts, fuel delivery, tire changes, and mobile mechanic. Fast response times guaranteed.'; ?>">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo isset($meta_title) ? $meta_title : 'White Knight Roadside | 24/7 Roadside Assistance'; ?>">
    <meta property="og:description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional roadside assistance in Portland & Vancouver. Available 24/7.'; ?>">
    <meta property="og:image" content="<?php echo $canonical_url . '/images/logo.jpg'; ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="White Knight Roadside">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($meta_title) ? $meta_title : 'White Knight Roadside | 24/7 Roadside Assistance'; ?>">
    <meta name="twitter:description" content="<?php echo isset($meta_description) ? $meta_description : 'Professional roadside assistance in Portland & Vancouver. Available 24/7.'; ?>">
    <meta name="twitter:image" content="<?php echo $canonical_url . '/images/logo.jpg'; ?>">
    
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo $relative_path; ?>styles.min.css">
    <link rel="icon" type="image/jpg" href="<?php echo $relative_path; ?>images/logo.jpg">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "White Knight Roadside",
        "image": "<?php echo $canonical_url . '/images/logo.jpg'; ?>",
        "url": "<?php echo $canonical_url; ?>",
        "@id": "<?php echo $canonical_url; ?>#organization",
        "telephone": "+15037643154",
        "priceRange": "$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Portland Metro Area",
            "addressLocality": "Portland",
            "addressRegion": "OR",
            "postalCode": "97201",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 45.5155,
            "longitude": -122.6789
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday",
                "Friday", "Saturday", "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": [
            "https://www.facebook.com/whiteknightroadside",
            "https://www.yelp.com/biz/white-knight-roadside-portland"
        ],
        "areaServed": [
            {
                "@type": "City",
                "name": "Portland",
                "sameAs": "https://en.wikipedia.org/wiki/Portland,_Oregon"
            },
            {
                "@type": "City",
                "name": "Vancouver",
                "sameAs": "https://en.wikipedia.org/wiki/Vancouver,_Washington"
            }
        ],
        "serviceArea": {
            "@type": "GeoCircle",
            "geoMidpoint": {
                "@type": "GeoCoordinates",
                "latitude": 45.5155,
                "longitude": -122.6789
            },
            "geoRadius": "50000"
        }
    }
    </script>

    <!-- Breadcrumb Schema -->
    <?php if (!empty($breadcrumbs)): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.wkroadside.com"
            }<?php
            $position = 2;
            foreach ($breadcrumbs as $breadcrumb) {
                echo ',{
                    "@type": "ListItem",
                    "position": ' . $position . ',
                    "name": "' . $breadcrumb['name'] . '",
                    "item": "' . $breadcrumb['url'] . '"
                }';
                $position++;
            }
            ?>
        ]
    }
    </script>
    <?php endif; ?>
</head>
<body>
    <!-- Skip to main content link for accessibility -->
    <a href="#main-content" class="skip-to-main">Skip to main content</a>

    <header>
        <div class="header-top">
            <div class="container">
                <a href="tel:5037643154" class="emergency-phone" aria-label="Call our 24/7 emergency number">📞 24/7 Emergency: (503) 764-3154</a>
            </div>
        </div>
        <nav class="main-nav" aria-label="Main navigation">
            <div class="container">
                <a href="/" class="logo">
                    <img src="<?php echo $relative_path; ?>images/logo.jpg" alt="White Knight Roadside Logo" width="200" height="200" loading="lazy">
                </a>
                <button class="nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
                    <span class="visually-hidden">Menu</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <ul class="nav-links" role="menu">
                    <li role="none"><a href="/" role="menuitem">Home</a></li>
                    <li role="none"><a href="/roadside-assistance" role="menuitem">Roadside Assistance</a></li>
                    <li role="none"><a href="/jumpstart" role="menuitem">Jumpstart Service</a></li>
                    <li role="none"><a href="/fuel-delivery" role="menuitem">Fuel Delivery</a></li>
                    <li role="none"><a href="/tire-change" role="menuitem">Tire Change</a></li>
                    <li role="none"><a href="/tire-replacement" role="menuitem">Tire Replacement</a></li>
                    <li role="none"><a href="/mobile-mechanic" role="menuitem">Mobile Mechanic</a></li>
                    <li role="none"><a href="/blog" role="menuitem">Tips & Resources</a></li>
                </ul>
            </div>
        </nav>

        <!-- Breadcrumb Navigation -->
        <?php if (!empty($breadcrumbs)): ?>
        <nav aria-label="Breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb-list">
                    <li><a href="/">Home</a></li>
                    <?php foreach ($breadcrumbs as $breadcrumb): ?>
                    <li><a href="<?php echo $breadcrumb['url']; ?>"><?php echo $breadcrumb['name']; ?></a></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </nav>
        <?php endif; ?>
    </header>
    <main id="main-content">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.querySelector('.nav-toggle');
            const navLinks = document.querySelector('.nav-links');

            if (navToggle && navLinks) {
                navToggle.addEventListener('click', function() {
                    const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
                    navToggle.setAttribute('aria-expanded', !isExpanded);
                    navLinks.classList.toggle('active');
                });

                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!event.target.closest('.nav-toggle') && !event.target.closest('.nav-links')) {
                        navLinks.classList.remove('active');
                        navToggle.setAttribute('aria-expanded', 'false');
                    }
                });

                // Handle escape key
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        navToggle.setAttribute('aria-expanded', 'false');
                    }
                });
            }
        });
    </script>
