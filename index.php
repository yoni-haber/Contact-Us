<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method=""POST>
        <h1>Contact Us!</h1>
        <label for="first-name">First Name:</label>
        <input type="text" name="first-name" id="first-name" placeholder="Type here..." required pattern="[a-zA-Z]+">
        <br>
        <br>
        <label for="last-name">Last Name:</label>
        <input type="text" name="last-name" id="last-name" placeholder="Type here..." required pattern="[a-zA-Z]+">
        <br>
        <br>
        <label for="email">Email Address:</label>
        <input type="email" name="email" id="email" placeholder="Type here..." required>
        <br>
        <br>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" placeholder="Type here..." required>
        <br>
        <br>
        <label for="message">Message:</label>
        <br>
        <textarea rows="5" cols="30" id="message" name="message" required placeholder="Type here..." minlength="2"></textarea>
        <br>
        <br>
        <input type="reset">
        <input type="submit" value="Send">
    </form>
</body>
</html>