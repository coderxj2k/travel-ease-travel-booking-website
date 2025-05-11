<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking - Explore the World</title>
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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trips.php">Trips</a>
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

    <!-- Video Hero Section -->
    <header class="video-hero-section">
        <div class="video-container">
            <video autoplay muted loop id="hero-video">
                <source src="181376-866506956_small.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
        <div class="container h-100 position-relative">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center text-white">
                    <h1 class="display-3 fw-bold">Discover Your Next Adventure</h1>
                    <p class="lead">Explore amazing destinations around the world</p>
                    <a href="trips.php" class="btn btn-primary btn-lg">Browse Trips</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Section -->
    <section class="search-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Find Your Perfect Trip</h3>
                            <form action="search.php" method="GET">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="destination" class="form-label">Destination</label>
                                        <select class="form-select" id="destination" name="destination">
                                            <option value="">Choose a destination</option>
                                            <option value="1">Paris, France</option>
                                            <option value="2">Bali, Indonesia</option>
                                            <option value="3">New York, USA</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="trip_type" class="form-label">Trip Type</label>
                                        <select class="form-select" id="trip_type" name="trip_type">
                                            <option value="">Choose a trip type</option>
                                            <option value="1">Adventure</option>
                                            <option value="2">Relaxation</option>
                                            <option value="3">Cultural</option>
                                            <option value="4">Family</option>
                                            <option value="5">Romantic</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="travel_date" class="form-label">Travel Date</label>
                                        <input type="date" class="form-control" id="travel_date" name="travel_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="travelers" class="form-label">Number of Travelers</label>
                                        <input type="number" class="form-control" id="travelers" name="travelers" min="1" value="1">
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Destinations -->
    <section class="featured-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Featured Destinations</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="paris.jpg" class="card-img-top" alt="Paris">
                        <div class="card-body">
                            <h5 class="card-title">Paris, France</h5>
                            <p class="card-text">The city of love and lights</p>
                            <a href="trip-details.php?id=1" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="bali.jpg" class="card-img-top" alt="Bali">
                        <div class="card-body">
                            <h5 class="card-title">Bali, Indonesia</h5>
                            <p class="card-text">Tropical paradise with beautiful beaches</p>
                            <a href="trip-details.php?id=2" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="newyork.jpg" class="card-img-top" alt="New York">
                        <div class="card-body">
                            <h5 class="card-title">New York, USA</h5>
                            <p class="card-text">The city that never sleeps</p>
                            <a href="trip-details.php?id=3" class="btn btn-outline-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Trips -->
    <section class="featured-trips py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Popular Trips</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="efeltower.jpg" class="card-img-top" alt="Paris Cultural Tour">
                        <div class="card-body">
                            <h5 class="card-title">Paris Cultural Tour</h5>
                            <p class="card-text">Experience the rich culture and history of Paris</p>
                            <p><strong>Duration:</strong> 7 days</p>
                            <p><strong>Price:</strong> $1,200</p>
                            <a href="trip-details.php?id=1" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="seminayk.jpg" class="card-img-top" alt="Bali Adventure Package">
                        <div class="card-body">
                            <h5 class="card-title">Bali Adventure Package</h5>
                            <p class="card-text">Explore the natural beauty of Bali</p>
                            <p><strong>Duration:</strong> 10 days</p>
                            <p><strong>Price:</strong> $1,500</p>
                            <a href="trip-details.php?id=2" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="central park.jpg" class="card-img-top" alt="New York City Explorer">
                        <div class="card-body">
                            <h5 class="card-title">New York City Explorer</h5>
                            <p class="card-text">Discover the vibrant city of New York</p>
                            <p><strong>Duration:</strong> 5 days</p>
                            <p><strong>Price:</strong> $1,800</p>
                            <a href="trip-details.php?id=3" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials py-5">
        <div class="container">
            <h2 class="text-center mb-5">What Our Customers Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="ratings">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class="card-text text-center">"The Paris Cultural Tour was amazing! The guides were knowledgeable and the accommodations were excellent. Highly recommend!"</p>
                            <p class="text-center fw-bold mb-0">John Smith</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="ratings">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half-alt text-warning"></i>
                                </div>
                            </div>
                            <p class="card-text text-center">"Bali was a dream come true! The adventure package had the perfect mix of relaxation and excitement. Will book again!"</p>
                            <p class="text-center fw-bold mb-0">Sarah Johnson</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-center mb-3">
                                <div class="ratings">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class="card-text text-center">"New York City Explorer was the best city tour I've ever experienced. The itinerary was perfect and we saw all the major attractions!"</p>
                            <p class="text-center fw-bold mb-0">Michael Brown</p>
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