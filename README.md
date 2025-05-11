# Travel Booking System

A comprehensive web-based travel booking platform built with PHP and Bootstrap, offering user authentication and trip management capabilities.

## Features

- **User Authentication System**
  - Secure registration with email verification
  - Login functionality with session management
  - Password hashing for security

- **User Profile Management**
  - Personal information management (First Name, Last Name, Email)
  - Username and password updates
  - Account settings

- **Responsive Design**
  - Mobile-first approach using Bootstrap 5.3.0
  - Modern and clean user interface
  - Consistent styling across all pages

- **Navigation**
  - Home page with featured trips
  - Trips listing page
  - About Us section
  - User authentication pages

## Tech Stack

- **Frontend**
  - HTML5
  - CSS3
  - Bootstrap 5.3.0
  - Font Awesome 6.4.0
  - JavaScript

- **Backend**
  - PHP
  - MySQL/PDO for database operations
  - Session-based authentication

## Prerequisites

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/XAMPP recommended)

## Installation

1. Clone the repository
   ```bash
   git clone [your-repository-url]
   ```

2. Set up your web server (XAMPP)
   - Install XAMPP
   - Place the project files in the `htdocs` directory

3. Database Setup
   - Create a new MySQL database
   - Import the provided SQL schema
   - Configure database connection in `config/db_connect.php`

4. Configure the application
   - Update database credentials in configuration files
   - Set appropriate permissions for file uploads (if applicable)

5. Access the application
   - Open your web browser
   - Navigate to `http://localhost/[project-folder]`

## Project Structure

```
├── config/
│   └── db_connect.php       # Database configuration
├── css/
│   └── style.css           # Custom styles
├── js/
│   └── script.js           # Custom JavaScript
├── index.php               # Home page
├── login.php               # User login
├── register.php            # User registration
├── about.php              # About page
├── trips.php              # Trips listing
└── README.md              # Project documentation
```

## Security Features

- PDO prepared statements for SQL injection prevention
- Password hashing using PHP's password_hash()
- Input validation and sanitization
- CSRF protection
- Secure session management

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details

## Acknowledgments

- Bootstrap for the responsive design framework
- Font Awesome for the icons
- PHP community for excellent documentation and resources


creators:- jeel rupapara as fullsatck-devloper, jaimin rajyaguru as backend-devloper, hansal rudani as fronted-devloper
