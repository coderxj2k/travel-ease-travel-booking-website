<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Trips - Travel Booking</title>
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
                        <a class="nav-link active" href="popular-trips.php">Popular Trips</a>
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

    <!-- Page Header -->
    <header class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Popular Trips</h1>
                    <p class="lead">Our most booked and highly-rated travel experiences</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Popular Trips Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="efeltower.jpg" class="card-img-top" alt="Paris Cultural Tour">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Paris Cultural Tour</h5>
                                <span class="badge bg-primary">Best Seller</span>
                            </div>
                            <p class="card-text">Experience the rich culture and history of Paris with guided tours of iconic landmarks, museums, and cultural sites.</p>
                            <div class="trip-details mb-3">
                                <p><i class="fas fa-calendar-alt me-2"></i><strong>Duration:</strong> 7 days</p>
                                <p><i class="fas fa-users me-2"></i><strong>Group Size:</strong> Max 12 people</p>
                                <p><i class="fas fa-utensils me-2"></i><strong>Meals:</strong> Breakfast included</p>
                                <p><i class="fas fa-hotel me-2"></i><strong>Accommodation:</strong> 4-star hotel</p>
                                <p><i class="fas fa-tag me-2"></i><strong>Price:</strong> $1,200</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="trip-details.php?id=1" class="btn btn-outline-primary">View Details</a>
                                <a href="booking.php?trip_id=1" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="seminayk.jpg" class="card-img-top" alt="Bali Adventure Package">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">Bali Adventure Package</h5>
                                <span class="badge bg-success">Top Rated</span>
                            </div>
                            <p class="card-text">Explore the natural beauty of Bali with this adventure package that includes hiking, water activities, and cultural experiences.</p>
                            <div class="trip-details mb-3">
                                <p><i class="fas fa-calendar-alt me-2"></i><strong>Duration:</strong> 10 days</p>
                                <p><i class="fas fa-users me-2"></i><strong>Group Size:</strong> Max 10 people</p>
                                <p><i class="fas fa-utensils me-2"></i><strong>Meals:</strong> All meals included</p>
                                <p><i class="fas fa-hotel me-2"></i><strong>Accommodation:</strong> Mix of hotels and eco-resorts</p>
                                <p><i class="fas fa-tag me-2"></i><strong>Price:</strong> $1,500</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="trip-details.php?id=2" class="btn btn-outline-primary">View Details</a>
                                <a href="booking.php?trip_id=2" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="central park.jpg" class="card-img-top" alt="New York City Explorer">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0">New York City Explorer</h5>
                                <span class="badge bg-danger">Hot Deal</span>
                            </div>
                            <p class="card-text">Discover the vibrant city of New York with guided tours of famous landmarks, Broadway shows, and shopping experiences.</p>
                            <div class="trip-details mb-3">
                                <p><i class="fas fa-calendar-alt me-2"></i><strong>Duration:</strong> 5 days</p>
                                <p><i class="fas fa-users me-2"></i><strong>Group Size:</strong> Max 15 people</p>
                                <p><i class="fas fa-utensils me-2"></i><strong>Meals:</strong> Breakfast included</p>
                                <p><i class="fas fa-hotel me-2"></i><strong>Accommodation:</strong> 4-star hotel in Manhattan</p>
                                <p><i class="fas fa-tag me-2"></i><strong>Price:</strong> $1,800</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="trip-details.php?id=3" class="btn btn-outline-primary">View Details</a>
                                <a href="booking.php?trip_id=3" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Trips Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">More Amazing Trips</h2>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?tokyo" class="card-img-top" alt="Tokyo Adventure">
                        <div class="card-body">
                            <h5 class="card-title">Tokyo Adventure</h5>
                            <p class="card-text">Explore the vibrant city of Tokyo.</p>
                            <p><strong>Duration:</strong> 6 days</p>
                            <p><strong>Price:</strong> $1,600</p>
                            <a href="trip-details.php?id=4" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?rome" class="card-img-top" alt="Rome Explorer">
                        <div class="card-body">
                            <h5 class="card-title">Rome Explorer</h5>
                            <p class="card-text">Discover the ancient history of Rome.</p>
                            <p><strong>Duration:</strong> 7 days</p>
                            <p><strong>Price:</strong> $1,400</p>
                            <a href="trip-details.php?id=5" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?sydney" class="card-img-top" alt="Sydney Highlights">
                        <div class="card-body">
                            <h5 class="card-title">Sydney Highlights</h5>
                            <p class="card-text">Experience the best of Sydney.</p>
                            <p><strong>Duration:</strong> 5 days</p>
                            <p><strong>Price:</strong> $1,700</p>
                            <a href="trip-details.php?id=6" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?barcelona" class="card-img-top" alt="Barcelona Getaway">
                        <div class="card-body">
                            <h5 class="card-title">Barcelona Getaway</h5>
                            <p class="card-text">Enjoy the beauty of Barcelona.</p>
                            <p><strong>Duration:</strong> 6 days</p>
                            <p><strong>Price:</strong> $1,300</p>
                            <a href="trip-details.php?id=7" class="btn btn-outline-primary btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
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