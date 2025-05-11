<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Featured Destinations - Travel Booking</title>
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
                        <a class="nav-link active" href="destinations.php">Destinations</a>
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
                    <h1>Featured Destinations</h1>
                    <p class="lead">Explore our most popular travel destinations</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Destinations Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="paris.jpg" class="card-img-top" alt="Paris">
                        <div class="card-body">
                            <h5 class="card-title">Paris, France</h5>
                            <p class="card-text">The city of love and lights, known for its iconic Eiffel Tower, world-class museums, and charming cafes. Experience the rich history, art, and culture of this magnificent European capital.</p>
                            <p><strong>Popular Attractions:</strong></p>
                            <ul>
                                <li>Eiffel Tower</li>
                                <li>Louvre Museum</li>
                                <li>Notre-Dame Cathedral</li>
                                <li>Champs-Élysées</li>
                                <li>Montmartre</li>
                            </ul>
                            <a href="trip-details.php?id=1" class="btn btn-primary">View Trips to Paris</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="bali.jpg" class="card-img-top" alt="Bali">
                        <div class="card-body">
                            <h5 class="card-title">Bali, Indonesia</h5>
                            <p class="card-text">Tropical paradise with beautiful beaches, lush rice terraces, and vibrant cultural heritage. Bali offers a perfect blend of relaxation, adventure, and spiritual experiences.</p>
                            <p><strong>Popular Attractions:</strong></p>
                            <ul>
                                <li>Ubud Monkey Forest</li>
                                <li>Tanah Lot Temple</li>
                                <li>Uluwatu Temple</li>
                                <li>Seminyak Beach</li>
                                <li>Tegallalang Rice Terraces</li>
                            </ul>
                            <a href="trip-details.php?id=2" class="btn btn-primary">View Trips to Bali</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="newyork.jpg" class="card-img-top" alt="New York">
                        <div class="card-body">
                            <h5 class="card-title">New York, USA</h5>
                            <p class="card-text">The city that never sleeps, offering world-famous landmarks, diverse neighborhoods, incredible dining, and vibrant arts and entertainment scenes.</p>
                            <p><strong>Popular Attractions:</strong></p>
                            <ul>
                                <li>Statue of Liberty</li>
                                <li>Central Park</li>
                                <li>Times Square</li>
                                <li>Empire State Building</li>
                                <li>Brooklyn Bridge</li>
                            </ul>
                            <a href="trip-details.php?id=3" class="btn btn-primary">View Trips to New York</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Destinations Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Discover More Destinations</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?tokyo" class="card-img-top" alt="Tokyo">
                        <div class="card-body">
                            <h5 class="card-title">Tokyo, Japan</h5>
                            <p class="card-text">Ultra-modern meets traditional in Japan's bustling capital.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?rome" class="card-img-top" alt="Rome">
                        <div class="card-body">
                            <h5 class="card-title">Rome, Italy</h5>
                            <p class="card-text">Ancient history and modern life blend perfectly in the Eternal City.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?sydney" class="card-img-top" alt="Sydney">
                        <div class="card-body">
                            <h5 class="card-title">Sydney, Australia</h5>
                            <p class="card-text">Stunning harbor city known for its iconic Opera House.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/random/300x200/?barcelona" class="card-img-top" alt="Barcelona">
                        <div class="card-body">
                            <h5 class="card-title">Barcelona, Spain</h5>
                            <p class="card-text">Vibrant city famous for its art, architecture, and beaches.</p>
                            <a href="#" class="btn btn-outline-primary">Learn More</a>
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