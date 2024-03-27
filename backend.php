<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user_id']);

// Navigation links based on login status
$navLinks = [
    ['href' => '#home', 'text' => 'Home'],
    ['href' => '#about', 'text' => 'About Us'],
    ['href' => '#services', 'text' => 'Services'],
    ['href' => '#schedule', 'text' => 'Schedule'],
    ['href' => '#contact', 'text' => 'Contact Us']
];

// Add extra links for logged-in users
if ($isLoggedIn) {
    $navLinks[] = ['href' => '#profile', 'text' => 'Profile'];
    $navLinks[] = ['href' => 'logout.php', 'text' => 'Logout'];
} else {
    $navLinks[] = ['href' => 'login.php', 'text' => 'Login'];
    $navLinks[] = ['href' => 'register.php', 'text' => 'Register'];
}

// Output the navigation menu
echo '<nav>';
echo '<ul>';
foreach ($navLinks as $link) {
    echo '<li><a href="' . $link['href'] . '">' . $link['text'] . '</a></li>';
}
echo '</ul>';
echo '</nav>';


// Footer content
echo '<footer>';
echo '<p>&copy; ' . date("Y") . ' My Gym Website. All rights reserved.</p>';
echo '</footer>';



// Membership section content
echo '<section id="membership">';
echo '<h2>Membership</h2>';
echo '<p>Welcome to our membership section. Here you can find information about our membership plans and benefits.</p>';
// Add more content as needed
echo '</section>';


// Classes section content
echo '<section id="classes">';
echo '<h2>Classes</h2>';
echo '<p>Discover our exciting classes designed to help you achieve your fitness goals.</p>';
// Add more content as needed
echo '</section>';


// Trainers section content
echo '<section id="trainers">';
echo '<h2>Trainers</h2>';
echo '<p>Meet our experienced trainers who are dedicated to helping you succeed on your fitness journey.</p>';
// Add more content as needed
echo '</section>';


// Testimonials section content
echo '<section id="testimonials">';
echo '<h2>Testimonials</h2>';
echo '<div class="testimonial">';
echo '<blockquote>"I love the atmosphere and the personalized training sessions. Highly recommended!"</blockquote>';
echo '<cite>- John Doe</cite>';
echo '</div>';
// Add more testimonials as needed
echo '</section>';

?>

