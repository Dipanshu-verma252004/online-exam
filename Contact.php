<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body {
            margin: 0px;
            padding: 0px;
            background: url(https://plus.unsplash.com/premium_photo-1661686491904-63cac3166829?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-repeat: no-repeat;
            background-size: cover;
            /* background-size: 100% 100%; */
            background-position: center;
            background-attachment: fixed;
            /* background-size: 1550px 800px; */
            color: white;
            font-family: 'Baloo Bhaina 2', cursive;
            background-color: rgba(0, 0, 0, 0.329);


        }
        .navbar {
            display: inline-block;
            /* border: 3px solid white; */
            margin-left: 25%;
            margin-top: 25px;
            border-radius: 5px;
        }

        .navbar li {
            display: inline-block;
        }

        .navbar li a {
            color: white;
            font-size: 23px;
            padding: 33px 50px;
            text-decoration: none;
        }

        .navbar li a:hover {

            color: rgb(97, 7, 7);
            font-size: 23px;
            padding: 0px 50px;
            text-decoration: none;
            border-bottom: 2px solid orange;
        }

.container {
    max-width: 550px;
    margin: 65px auto;
    padding: 20px;
    /* background: white; */
    border:red;
    /* border-radius: 5px; */
    /* box-shadow: 0 0 10px rgba(0, 0, 0, 5); */
    box-shadow: 0 0 1rem 1rem  lightgray inset;
    border-radius: 25px;


}

h1 {
    text-align: center;
    /* color:black; */
    font-size:50px;
}

.form-group {
    margin-bottom: 15px;
    /* color:black; */
    font-size:20px;


}

label {
    display: block;
    margin-bottom: 15px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

button {
    width: 98%;
    padding: 20px;
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

.response-message {
    margin-top: 20px;
    text-align: center;
    font-weight: bold;
}

        
    </style>
</head>
<body>
    <header style=" background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0, 0, 0, 0.26);">
    <div class="navbar">
        <ul>
            <li><a href="index.php"> Home</a> </li>
            <li><a href="Registeration.php">Registeration</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
</header>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contactForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div><br>
            <button type="submit">Send Message</button>
        </form>
        <div id="responseMessage" class="response-message"></div>
    </div>
  
</body>
</html>