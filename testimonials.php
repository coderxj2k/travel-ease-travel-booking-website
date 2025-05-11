<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Travel Booking</title>
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
                        <a class="nav-link active" href="testimonials.php">Testimonials</a>
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
                    <h1>Customer Testimonials</h1>
                    <p class="lead">Read what our travelers have to say about their experiences</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Testimonials Section -->
    <?php
require 'config/db_connect.php';

// Initialize variables
$error_msg = '';
$success_msg = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $testimonial = $_POST['testimonial'];
    $trip_id = $_POST['trip'];

    $stmt = $conn->prepare("INSERT INTO testimonials (name, email, rating, testimonial, trip_id) VALUES (:name, :email, :rating, :testimonial, :trip_id)");
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':rating' => $rating,
        ':testimonial' => $testimonial,
        ':trip_id' => $trip_id
    ]);

    if ($stmt->rowCount() > 0) {
        echo '<div class="alert alert-success text-center">Thank you for your testimonial! We appreciate your feedback.</div>';
        $success_msg = 'Thank you for your testimonial!';
    } else {
        $error_msg = 'Error: Unable to submit testimonial. Please try again.';
    }
}

// Fetch existing testimonials
$testimonials = $conn->query("SELECT * FROM testimonials ORDER BY created_at DESC");
?>

<section class="py-5">
        <div class="container">
            <?php if (!empty($error_msg)): ?>
                <div class="alert alert-danger"><?php echo $error_msg; ?></div>
            <?php endif; ?>

            <!-- Testimonial Form -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Share Your Experience</h5>
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="rating" class="form-label">Rating</label>
                                    <select class="form-select" id="rating" name="rating" required>
                                        <option value="5">5 Stars</option>
                                        <option value="4">4 Stars</option>
                                        <option value="3">3 Stars</option>
                                        <option value="2">2 Stars</option>
                                        <option value="1">1 Star</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="trip" class="form-label">Select Trip</label>
                                    <select class="form-select" id="trip" name="trip" required>
                                        <option value="" selected disabled>Choose a trip</option>
                                        <option value="1">Paris Cultural Tour</option>
                                        <option value="2">Bali Adventure Package</option>
                                        <option value="3">New York City Explorer</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="testimonial" class="form-label">Your Testimonial</label>
                                    <textarea class="form-control" id="testimonial" name="testimonial" rows="5" required></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Testimonial</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
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
                            <p class="card-text text-center">"The Paris Cultural Tour was amazing! The guides were knowledgeable and the accommodations were excellent. Every detail was taken care of, and we got to experience the real Paris beyond just the tourist spots. Highly recommend!"</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">John Smith</p>
                                <p class="text-muted small">Paris Cultural Tour, May 2023</p>
                            </div>
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
                            <p class="card-text text-center">"Bali was a dream come true! The adventure package had the perfect mix of relaxation and excitement. The local guides were fantastic and showed us hidden gems we would never have found on our own. The eco-resorts were beautiful and sustainable. Will book again!"</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">Sarah Johnson</p>
                                <p class="text-muted small">Bali Adventure Package, June 2023</p>
                            </div>
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
                            <p class="card-text text-center">"New York City Explorer was the best city tour I've ever experienced. The itinerary was perfect and we saw all the major attractions! The hotel location in Manhattan was perfect, and the Broadway show tickets were a highlight. Can't wait to book my next trip!"</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Michael Brown" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">Michael Brown</p>
                                <p class="text-muted small">New York City Explorer, April 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-5">
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
                            <p class="card-text text-center">"Our family trip to Bali was incredible! The kids loved the monkey forest and the beach activities. The guides were patient with our children and made sure everyone had a great time. The accommodations were family-friendly and comfortable."</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Jennifer Wilson" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">Jennifer Wilson</p>
                                <p class="text-muted small">Bali Family Adventure, July 2023</p>
                            </div>
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
                                    <i class="far fa-star text-warning"></i>
                                </div>
                            </div>
                            <p class="card-text text-center">"Paris was beautiful, and the tour covered all the major sites. The hotel was in a great location, making it easy to explore on our own during free time. The only downside was that some days felt a bit rushed, but overall it was a wonderful experience."</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="David Thompson" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">David Thompson</p>
                                <p class="text-muted small">Paris Cultural Tour, March 2023</p>
                            </div>
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
                            <p class="card-text text-center">"My husband and I had an amazing time in New York! The hotel was luxurious, and the itinerary was well-balanced with guided tours and free time. We especially loved the food tour in different neighborhoods. Would definitely book with Travel Booking again!"</p>
                            <div class="text-center">
                                <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Emily Davis" class="rounded-circle mb-2" width="60">
                                <p class="fw-bold mb-0">Emily Davis</p>
                                <p class="text-muted small">New York City Explorer, February 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Submit Your Testimonial Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Share Your Experience</h3>
                            <form action="submit-testimonial.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="trip" class="form-label">Trip You Took</label>
                                    <select class="form-select" id="trip" name="trip" required>
                                        <option value="" selected disabled>Select your trip</option>
                                        <option value="Paris Cultural Tour">Paris Cultural Tour</option>
                                        <option value="Bali Adventure Package">Bali Adventure Package</option>
                                        <option value="New York City Explorer">New York City Explorer</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="rating" class="form-label">Rating</label>
                                    <select class="form-select" id="rating" name="rating" required>
                                        <option value="5">5 Stars - Excellent</option>
                                        <option value="4">4 Stars - Very Good</option>
                                        <option value="3">3 Stars - Good</option>
                                        <option value="2">2 Stars - Fair</option>
                                        <option value="1">1 Star - Poor</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="testimonial" class="form-label">Your Testimonial</label>
                                    <textarea class="form-control" id="testimonial" name="testimonial" rows="5" required></textarea>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                                    <label class="form-check-label" for="consent">I consent to having my testimonial and name displayed on the website</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit Testimonial</button>
                                </div>
                            </form>
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