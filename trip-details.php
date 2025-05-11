<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trip Details - Travel Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Travel Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trips.php">Trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="destinations.php">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="popular-trips.php">Popular Trips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.php">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
<li class="nav-item">
    <a class="nav-link" href="booking.php">Booking</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
</li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    // Get trip ID from URL
    $trip_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    
    // In a real application, you would fetch trip details from the database
    // For this example, we'll use hardcoded data
    $trips = [
        1 => [
            'name' => 'Paris Cultural Tour',
            'destination' => 'Paris, France',
            'image' => 'efeltower.jpg',
            'gallery' => ['paris.jpg', 'champsld.jpg', 'dame.jpg'],
            'duration' => '7 days',
            'price' => 1200,
            'description' => 'Experience the rich culture and history of Paris with guided tours of iconic landmarks, museums, and cultural sites.',
            'highlights' => [
                'Guided tour of the Louvre Museum',
                'Skip-the-line access to the Eiffel Tower',
                'Seine River cruise',
                'Walking tour of Montmartre',
                'Day trip to Versailles Palace'
            ],
            'itinerary' => [
                'Day 1: Arrival in Paris, welcome dinner',
                'Day 2: Louvre Museum and Tuileries Garden',
                'Day 3: Eiffel Tower and Seine River cruise',
                'Day 4: Notre-Dame Cathedral and Latin Quarter',
                'Day 5: Montmartre and Sacré-Cœur Basilica',
                'Day 6: Day trip to Versailles Palace',
                'Day 7: Free time for shopping, departure'
            ],
            'includes' => [
                'Accommodation in a 4-star hotel',
                'Daily breakfast',
                'Welcome and farewell dinners',
                'All entrance fees to attractions',
                'Professional English-speaking guide',
                'Transportation within Paris'
            ],
            'excludes' => [
                'International flights',
                'Travel insurance',
                'Personal expenses',
                'Meals not mentioned in the itinerary',
                'Optional activities'
            ]
        ],
        2 => [
            'name' => 'Bali Adventure Package',
            'destination' => 'Bali, Indonesia',
            'image' => 'seminayk.jpg',
            'gallery' => ['bali.jpg', 'ubudmonkey.jpg', 'uluwantutemple.jpg'],
            'duration' => '10 days',
            'price' => 1500,
            'description' => 'Explore the natural beauty of Bali with this adventure package that includes hiking, water activities, and cultural experiences.',
            'highlights' => [
                'Sunrise trek to Mount Batur volcano',
                'White water rafting on the Ayung River',
                'Ubud Monkey Forest visit',
                'Traditional Balinese cooking class',
                'Snorkeling at Blue Lagoon',
                'Visit to ancient temples'
            ],
            'itinerary' => [
                'Day 1: Arrival in Bali, transfer to Ubud',
                'Day 2: Ubud Monkey Forest and rice terraces',
                'Day 3: Mount Batur sunrise trek',
                'Day 4: White water rafting and spa treatment',
                'Day 5: Cooking class and traditional dance performance',
                'Day 6: Transfer to Seminyak beach area',
                'Day 7: Beach day and sunset at Tanah Lot Temple',
                'Day 8: Snorkeling trip to Blue Lagoon',
                'Day 9: Visit to Uluwatu Temple and farewell dinner',
                'Day 10: Free time, departure'
            ],
            'includes' => [
                'Accommodation in eco-resorts and boutique hotels',
                'Daily breakfast and select meals',
                'All activities and entrance fees',
                'Private transportation',
                'English-speaking guide',
                'Airport transfers'
            ],
            'excludes' => [
                'International flights',
                'Travel insurance',
                'Personal expenses',
                'Meals not mentioned in the itinerary',
                'Optional activities'
            ]
        ],
        3 => [
            'name' => 'New York City Explorer',
            'destination' => 'New York, USA',
            'image' => 'central park.jpg',
            'gallery' => ['newyork.jpg', 'stechu of lib.jpg', 'central park.jpg'],
            'duration' => '5 days',
            'price' => 1800,
            'description' => 'Discover the vibrant city of New York with guided tours of famous landmarks, Broadway shows, and shopping experiences.',
            'highlights' => [
                'Guided tour of Manhattan landmarks',
                'Skip-the-line access to Empire State Building',
                'Broadway show tickets',
                'Statue of Liberty and Ellis Island tour',
                'Central Park bike tour',
                'Shopping on Fifth Avenue'
            ],
            'itinerary' => [
                'Day 1: Arrival in New York, Times Square visit',
                'Day 2: Manhattan landmarks tour and Empire State Building',
                'Day 3: Statue of Liberty and Ellis Island, evening Broadway show',
                'Day 4: Central Park bike tour and Fifth Avenue shopping',
                'Day 5: Free time, departure'
            ],
            'includes' => [
                'Accommodation in a 4-star hotel in Manhattan',
                'Daily breakfast',
                'Broadway show tickets',
                'All entrance fees to attractions',
                'Professional guide',
                'New York City Metro pass'
            ],
            'excludes' => [
                'Flights to/from New York',
                'Travel insurance',
                'Personal expenses',
                'Meals not mentioned in the itinerary',
                'Optional activities'
            ]
        ]
    ];
    
    // Check if trip exists
    if (!isset($trips[$trip_id])) {
        echo '<div class="container py-5">';
        echo '<div class="alert alert-danger">Trip not found. <a href="trips.php">View all trips</a></div>';
        echo '</div>';
    } else {
        $trip = $trips[$trip_id];
    ?>
    
    <!-- Trip Header -->
    <header class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1><?php echo $trip['name']; ?></h1>
                    <p class="lead"><?php echo $trip['destination']; ?></p>
                    <div class="d-flex align-items-center mb-3">
                        <div class="ratings me-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <span>4.5/5 (48 reviews)</span>
                    </div>
                    <div class="trip-meta">
                        <p><i class="fas fa-calendar-alt me-2"></i><strong>Duration:</strong> <?php echo $trip['duration']; ?></p>
                        <p><i class="fas fa-tag me-2"></i><strong>Price:</strong> $<?php echo $trip['price']; ?> per person</p>
                    </div>
                    <a href="booking.php?trip_id=<?php echo $trip_id; ?>" class="btn btn-primary btn-lg mt-3">Book This Trip</a>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo $trip['image']; ?>" alt="<?php echo $trip['name']; ?>" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </header>

    <!-- Trip Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <h2 class="card-title">Trip Overview</h2>
                            <p class="card-text"><?php echo $trip['description']; ?></p>
                            
                            <h3 class="mt-4">Highlights</h3>
                            <ul class="list-group list-group-flush mb-4">
                                <?php foreach ($trip['highlights'] as $highlight): ?>
                                <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i><?php echo $highlight; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            
                            <h3>Itinerary</h3>
                            <div class="accordion mt-3 mb-4" id="accordionItinerary">
                                <?php foreach ($trip['itinerary'] as $index => $day): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                        <button class="accordion-button <?php echo ($index > 0) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo ($index === 0) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                            <?php echo $day; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo ($index === 0) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionItinerary">
                                        <div class="accordion-body">
                                            <p>Detailed itinerary for this day would be shown here. In a real application, this would include specific activities, timing, and other relevant information.</p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <h3>Photo Gallery</h3>
                            <div class="row mt-3 mb-4">
                                <?php foreach ($trip['gallery'] as $image): ?>
                                <div class="col-md-4 mb-3">
                                    <img src="<?php echo $image; ?>" alt="Trip Image" class="img-fluid rounded">
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Price Details</h3>
                            <p class="display-6 text-primary">$<?php echo $trip['price']; ?></p>
                            <p class="text-muted">per person</p>
                            <hr>
                            <h5>What's Included</h5>
                            <ul class="list-unstyled">
                                <?php foreach ($trip['includes'] as $item): ?>
                                <li><i class="fas fa-check text-success me-2"></i><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <h5 class="mt-3">What's Not Included</h5>
                            <ul class="list-unstyled">
                                <?php foreach ($trip['excludes'] as $item): ?>
                                <li><i class="fas fa-times text-danger me-2"></i><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="booking.php?trip_id=<?php echo $trip_id; ?>" class="btn btn-primary w-100 mt-3">Book Now</a>
                        </div>
                    </div>
                    
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title">Need Help?</h3>
                            <p>Have questions about this trip? Contact our travel experts for assistance.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-phone me-2"></i>+1 (123) 456-7890</li>
                                <li><i class="fas fa-envelope me-2"></i>info@travelbooking.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Related Trips -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">You Might Also Like</h2>
            <div class="row">
                <?php 
                // Get other trips (excluding current one)
                $related_trips = array_filter($trips, function($key) use ($trip_id) {
                    return $key != $trip_id;
                }, ARRAY_FILTER_USE_KEY);
                
                foreach ($related_trips as $id => $related_trip): 
                ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $related_trip['image']; ?>" class="card-img-top" alt="<?php echo $related_trip['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $related_trip['name']; ?></h5>
                            <p class="card-text"><?php echo substr($related_trip['description'], 0, 100); ?>...</p>
                            <p><strong>Duration:</strong> <?php echo $related_trip['duration']; ?></p>
                            <p><strong>Price:</strong> $<?php echo $related_trip['price']; ?></p>
                            <a href="trip-details.php?id=<?php echo $id; ?>" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <?php } // End of else (trip exists) ?>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Travel Booking</h5>
                    <p>Your trusted partner for unforgettable travel experiences around the world.</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Home</a></li>
                        <li><a href="trips.php" class="text-white">Trips</a></li>
                        <li><a href="destinations.php" class="text-white">Destinations</a></li>
                        <li><a href="popular-trips.php" class="text-white">Popular Trips</a></li>
                        <li><a href="testimonials.php" class="text-white">Testimonials</a></li>
                        <li><a href="about.php" class="text-white">About Us</a></li>
                        <li><a href="login.php" class="text-white">Login</a></li>
                        <li><a href="register.php" class="text-white">Register</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <address>
                        <p><i class="fas fa-map-marker-alt me-2"></i> 123 Travel Street, City, Country</p>
                        <p><i class="fas fa-phone me-2"></i> +1 (123) 456-7890</p>
                        <p><i class="fas fa-envelope me-2"></i> info@travelbooking.com</p>
                    </address>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2023 Travel Booking. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>