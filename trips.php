<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Trips - Travel Booking</title>
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
                        <a class="nav-link active" href="trips.php">Trips</a>
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

    <!-- Hero Section -->
    <header class="trips-header py-5 bg-dark text-white text-center">
        <div class="container">
            <h1 class="display-4">Explore Our Trips</h1>
            <p class="lead">Discover amazing destinations and unforgettable experiences</p>
        </div>
    </header>

    <!-- Trips Filter Section -->
    <section class="py-4 bg-light">
        <div class="container">
            <form action="trips.php" method="GET" class="row g-3">
                <div class="col-md-3">
                    <label for="destination" class="form-label">Destination</label>
                    <select class="form-select" id="destination" name="destination">
                        <option value="">All Destinations</option>
                        <?php
                        require_once 'config/db_connect.php';
                        $stmt = $conn->query("SELECT * FROM destinations ORDER BY name");
                        while ($row = $stmt->fetch()) {
                            echo "<option value='{$row['destination_id']}'>{$row['name']}, {$row['country']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="trip_type" class="form-label">Trip Type</label>
                    <select class="form-select" id="trip_type" name="trip_type">
                        <option value="">All Trip Types</option>
                        <?php
                        $stmt = $conn->query("SELECT * FROM trip_types ORDER BY name");
                        while ($row = $stmt->fetch()) {
                            echo "<option value='{$row['type_id']}'>{$row['name']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="duration" class="form-label">Duration</label>
                    <select class="form-select" id="duration" name="duration">
                        <option value="">Any Duration</option>
                        <option value="1-3">1-3 Days</option>
                        <option value="4-7">4-7 Days</option>
                        <option value="8-14">8-14 Days</option>
                        <option value="15+">15+ Days</option>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Filter Trips</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Trips Listing Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php
                require_once 'config/db_connect.php';
                
                // Build the query based on filters
                $query = "SELECT t.*, d.name as destination_name, d.country, d.city, tt.name as trip_type 
                          FROM trips t 
                          JOIN destinations d ON t.destination_id = d.destination_id 
                          JOIN trip_types tt ON t.type_id = tt.type_id";
                
                $conditions = [];
                $params = [];
                
                if (isset($_GET['destination']) && !empty($_GET['destination'])) {
                    $conditions[] = "t.destination_id = ?"; 
                    $params[] = $_GET['destination'];
                }
                
                if (isset($_GET['trip_type']) && !empty($_GET['trip_type'])) {
                    $conditions[] = "t.type_id = ?"; 
                    $params[] = $_GET['trip_type'];
                }
                
                if (isset($_GET['duration']) && !empty($_GET['duration'])) {
                    switch ($_GET['duration']) {
                        case '1-3':
                            $conditions[] = "t.duration BETWEEN 1 AND 3";
                            break;
                        case '4-7':
                            $conditions[] = "t.duration BETWEEN 4 AND 7";
                            break;
                        case '8-14':
                            $conditions[] = "t.duration BETWEEN 8 AND 14";
                            break;
                        case '15+':
                            $conditions[] = "t.duration >= 15";
                            break;
                    }
                }
                
                if (!empty($conditions)) {
                    $query .= " WHERE " . implode(" AND ", $conditions);
                }
                
                $query .= " ORDER BY t.featured DESC, t.price ASC";
                
                $stmt = $conn->prepare($query);
                $stmt->execute($params);
                $trips = $stmt->fetchAll();
                
                if (count($trips) > 0) {
                    foreach ($trips as $trip) {
                        ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <img src="<?php echo $trip['image']; ?>" class="card-img-top" alt="<?php echo $trip['name']; ?>" style="height: 200px; object-fit: cover;">
                                <?php if ($trip['featured']) { ?>
                                    <div class="badge bg-primary position-absolute top-0 end-0 m-2">Featured</div>
                                <?php } ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $trip['name']; ?></h5>
                                    <p class="card-text text-muted mb-1">
                                        <i class="fas fa-map-marker-alt"></i> <?php echo $trip['destination_name']; ?>, <?php echo $trip['country']; ?>
                                    </p>
                                    <p class="card-text text-muted mb-2">
                                        <i class="fas fa-tag"></i> <?php echo $trip['trip_type']; ?> | 
                                        <i class="fas fa-clock"></i> <?php echo $trip['duration']; ?> days
                                    </p>
                                    <p class="card-text"><?php echo substr($trip['description'], 0, 100); ?>...</p>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <span class="h5 text-primary mb-0">$<?php echo number_format($trip['price'], 2); ?></span>
                                    <a href="#" class="btn btn-outline-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col-12 text-center py-5">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i> No trips found matching your criteria. Please try different filters.
                            </div>
                          </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2>Ready for Your Next Adventure?</h2>
            <p class="lead">Contact our travel experts to plan your perfect trip</p>
            <a href="#" class="btn btn-light btn-lg mt-3">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Travel Booking</h5>
                    <p>Your trusted partner for unforgettable travel experiences around the world.</p>
                </div>
                <div class="col-md-4">
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
                        <i class="fas fa-map-marker-alt"></i> 123 Travel Street, City<br>
                        <i class="fas fa-phone"></i> +1 (555) 123-4567<br>
                        <i class="fas fa-envelope"></i> info@travelbooking.com
                    </address>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; 2023 Travel Booking. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>