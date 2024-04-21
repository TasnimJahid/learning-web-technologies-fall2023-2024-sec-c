<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>
<style>
        body {
            font-family: Arial, sans-serif; /* Set default font family */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
 
        /* Style for the header */
        header {
            background-color: #333; /* Background color */
            color: #fff; /* Text color */
            padding: 10px 0; /* Padding for the header */
            text-align: center; /* Center align text */
        }
 
        /* Style for the main content */
        .container {
            max-width: 800px; /* Set maximum width for the content */
            margin: 20px auto; /* Center align content */
            padding: 0 20px; /* Add padding to the sides */
        }
 
        /* Style for the h1 heading */
        h1 {
            text-align: center; /* Center align heading */
        }
 
        /* Style for the paragraph */
        p {
            text-align: center; /* Center align paragraph */
        }
</style>
</head>
<body>
<header>
<h1>Admin Panel</h1>
</header>
<?php include 'navbar_admin.php'?>
<div class="container">
<p>You can control your website from here.</p>
</div>
</body>
</html>