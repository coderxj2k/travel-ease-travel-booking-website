<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews - Travel Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
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
                        <a class="nav-link active" href="reviews.php">Reviews</a>
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

    <div class="container py-5">
        <h2 class="text-center mb-4">Travel Reviews</h2>
        <div class="row">
            <div class="col-md-8">
                <?php
                require 'config/db_connect.php';
                $sql = "SELECT * FROM reviews ORDER BY created_at DESC";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">' . $row['title'] . '</h5>
                                <p class="card-text">' . $row['content'] . '</p>
                                <p class="text-muted">- ' . $row['author'] . ', ' . date('M j, Y', strtotime($row['created_at'])) . '</p>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p>No reviews yet. Be the first to share your experience!</p>';
                }
                ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Share Your Experience</h5>
                        <form method="POST" action="">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Review</label>
                                <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="author" name="author" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                        <?php
                        if($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $title = mysqli_real_escape_string($conn, $_POST['title']);
                            $content = mysqli_real_escape_string($conn, $_POST['content']);
                            $author = mysqli_real_escape_string($conn, $_POST['author']);
                            $sql = "INSERT INTO reviews (title, content, author) VALUES ('$title', '$content', '$author')";
                            if(mysqli_query($conn, $sql)) {
                                echo '<div class="alert alert-success mt-3">Thank you for your review!</div>';
                            } else {
                                echo '<div class="alert alert-danger mt-3">Error: ' . mysqli_error($conn) . '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>