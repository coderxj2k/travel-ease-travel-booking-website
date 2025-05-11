<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking - Travel Booking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link" href="booking.php">Booking</a>
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

    <!-- Booking Form -->
    <div class="container py-5">
        <h2 class="text-center">Finalize Your Booking</h2>
        <form method="POST" action="">
<?php
require 'config/db_connect.php';

// Initialize error message
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, trip_id, booking_date) VALUES (:name, :email, :trip, :date)");
    $stmt->execute([
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':trip' => $_POST['trip'],
        ':date' => $_POST['date']
    ]);

    if ($stmt->rowCount() > 0) {
        echo '<div class="alert alert-success">Booking successful!</div>';
        } else {
        $error_msg = 'Error: Booking failed. Please try again.';
    }
}

// Display error message if exists
if (!empty($error_msg)) {
    echo '<div class="alert alert-danger">' . $error_msg . '</div>';
}
?>
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
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
                <label for="date" class="form-label">Booking Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
