<?php
session_start();

if(isset($_POST['login'])) {
    // Database connection (replace with your actual credentials)
    $servername = "localhost"; // Or "127.0.0.1"
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "project1";

// Create connection
$conn = new mysqli("localhost",  " root", "", "project1");

    header("Location: index.php"); 



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jigjiga High School</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            background-color:rgb(255, 236, 236);
        }
        h1 {
            font-size: 2.5em;
        }
        nav ul {
            list-style: none;
            padding: 0;
            background-color:rgb(255, 236, 236);
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav a {
            text-decoration: none;
            color: purble;
        
    }   
        
        section {
            margin-bottom: 20px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 10px;
            background-color:rgb(255, 236, 236);
        }
    </style>
</head>
<body>

    <header>
        <h1>Jigjiga High School</h1>
       
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="#">Admissions</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">about developer</a></li>
        </ul>
    </nav>

    <section>
        <h2>Welcome to Jigjiga High School</h2>
        <p>
            Jigjiga High School is a renowned educational institution dedicated to providing quality education to students. 
            We strive to foster a supportive and engaging learning environment that encourages intellectual growth and personal development.
        </p>
    </section>
    <section>
    <h2>admin section</h2>
        <a href="http://localhost/demo/login.php">inventory management</a>
       
        </section>
    <section>
        <h2>Our Mission</h2>
        <p>
            To empower students with the knowledge, skills, and values necessary to become successful and responsible citizens.
        </p>
        <h2>about me</h2>
        <section><img src="mawliit.jpeg" alt="mawliit mahamed abdo 0318/15" width="300" height="300" >
    </section>
    </section>
    <section>
        <p>This is the assignment you sent us teacher. we are a group of five students. I know it's not exactly the way it should be but this is my first one , and also I faced many challenges druring this project, 
 and I didn't have enough time to prepare this project becaouce  I was busy with another university exam.
but  finally I did it</p>
    </section>
    <footer>
        &copy; 2025 haramaya university students.
    </footer>

</body>
</html>