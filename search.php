<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results - Travel Booking</title>
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
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Search Results</h1>
                    <p class="lead">Find your perfect trip</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Results Section -->
    <section class="py-5">
        <div class="container">
            <!-- Search Filters -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Your Search Criteria</h5>
                            <?php
                            // Get search parameters
                            $destination = isset($_GET['destination']) ? $_GET['destination'] : '';
                            $trip_type = isset($_GET['trip_type']) ? $_GET['trip_type'] : '';
                            $travel_date = isset($_GET['travel_date']) ? $_GET['travel_date'] : '';
                            $travelers = isset($_GET['travelers']) ? $_GET['travelers'] : 1;
                            
                            // Map destination IDs to names
                            $destination_names = [
                                '1' => 'Paris, France',
                                '2' => 'Bali, Indonesia',
                                '3' => 'New York, USA'
                            ];
                            
                            // Map trip type IDs to names
                            $trip_type_names = [
                                '1' => 'Adventure',
                                '2' => 'Relaxation',
                                '3' => 'Cultural',
                                '4' => 'Family',
                                '5' => 'Romantic'
                            ];
                            
                            // Display search criteria
                            echo '<div class="row">';
                            
                            if (!empty($destination)) {
                                echo '<div class="col-md-3 mb-2">';
                                echo '<strong>Destination:</strong> ' . (isset($destination_names[$destination]) ? $destination_names[$destination] : 'Any');
                                echo '</div>';
                            }
                            
                            if (!empty($trip_type)) {
                                echo '<div class="col-md-3 mb-2">';
                                echo '<strong>Trip Type:</strong> ' . (isset($trip_type_names[$trip_type]) ? $trip_type_names[$trip_type] : 'Any');
                                echo '</div>';
                            }
                            
                            if (!empty($travel_date)) {
                                echo '<div class="col-md-3 mb-2">';
                                echo '<strong>Travel Date:</strong> ' . date('F j, Y', strtotime($travel_date));
                                echo '</div>';
                            }
                            
                            echo '<div class="col-md-3 mb-2">';
                            echo '<strong>Travelers:</strong> ' . $travelers;
                            echo '</div>';
                            
                            echo '</div>';
                            ?>
                            <div class="mt-3">
                                <a href="index.php#search-section" class="btn btn-outline-primary btn-sm">Modify Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Results -->
            <div class="row">
                <?php
                // In a real application, you would query the database based on search criteria
                // For this example, we'll display some hardcoded results based on destination
                
                // Define some sample trips
                $trips = [
                    // Paris trips
                    ['id' => 1, 'destination_id' => '1', 'name' => 'Paris Cultural Tour', 'image' => 'efeltower.jpg', 'duration' => '7 days', 'price' => 1200, 'type_id' => '3'],
                    ['id' => 8, 'destination_id' => '1', 'name' => 'Paris Romance Package', 'image' => 'paris.jpg', 'duration' => '5 days', 'price' => 1400, 'type_id' => '5'],
                    ['id' => 9, 'destination_id' => '1', 'name' => 'Paris Family Adventure', 'image' => 'champsld.jpg', 'duration' => '6 days', 'price' => 1600, 'type_id' => '4'],
                    
                    // Bali trips
                    ['id' => 2, 'destination_id' => '2', 'name' => 'Bali Adventure Package', 'image' => 'seminayk.jpg', 'duration' => '10 days', 'price' => 1500, 'type_id' => '1'],
                    ['id' => 10, 'destination_id' => '2', 'name' => 'Bali Relaxation Retreat', 'image' => 'bali.jpg', 'duration' => '8 days', 'price' => 1300, 'type_id' => '2'],
                    ['id' => 11, 'destination_id' => '2', 'name' => 'Bali Cultural Immersion', 'image' => 'ubudmonkey.jpg', 'duration' => '9 days', 'price' => 1450, 'type_id' => '3'],
                    
                    // New York trips
                    ['id' => 3, 'destination_id' => '3', 'name' => 'New York City Explorer', 'image' => 'central park.jpg', 'duration' => '5 days', 'price' => 1800, 'type_id' => '3'],
                    ['id' => 12, 'destination_id' => '3', 'name' => 'New York Adventure', 'image' => 'newyork.jpg', 'duration' => '6 days', 'price' => 1900, 'type_id' => '1'],
                    ['id' => 13, 'destination_id' => '3', 'name' => 'New York Family Fun', 'image' => 'stechu of lib.jpg', 'duration' => '7 days', 'price' => 2100, 'type_id' => '4']
                ];
                
                // Filter trips based on search criteria
                $filtered_trips = [];
                foreach ($trips as $trip) {
                    $match = true;
                    
                    // Filter by destination if specified
                    if (!empty($destination) && $trip['destination_id'] != $destination) {
                        $match = false;
                    }
                    
                    // Filter by trip type if specified
                    if (!empty($trip_type) && $trip['type_id'] != $trip_type) {
                        $match = false;
                    }
                    
                    if ($match) {
                        $filtered_trips[] = $trip;
                    }
                }
                
                // Display results
                if (empty($filtered_trips)) {
                    echo '<div class="col-12 text-center">';
                    echo '<div class="alert alert-info">No trips found matching your criteria. Please try a different search.</div>';
                    echo '</div>';
                } else {
                    foreach ($filtered_trips as $trip) {
                        echo '<div class="col-md-4 mb-4">';
                        echo '<div class="card h-100 shadow-sm">';
                        echo '<img src="' . $trip['image'] . '" class="card-img-top" alt="' . $trip['name'] . '">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $trip['name'] . '</h5>';
                        echo '<p class="card-text">Experience the best of ' . $destination_names[$trip['destination_id']] . ' with this amazing trip package.</p>';
                        echo '<p><strong>Duration:</strong> ' . $trip['duration'] . '</p>';
                        echo '<p><strong>Price:</strong> $' . $trip['price'] . ' per person</p>';
                        echo '<div class="d-flex justify-content-between">';
                        echo '<a href="trip-details.php?id=' . $trip['id'] . '" class="btn btn-outline-primary">View Details</a>';
                        echo '<a href="booking.php?trip_id=' . $trip['id'] . '&travelers=' . $travelers . '" class="btn btn-primary">Book Now</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

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