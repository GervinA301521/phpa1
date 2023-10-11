<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<?php include('header.php'); ?>
    <h1 padding-left: style="padding-left:80px;">Contact Us</h1><br>
    <form action="mailto:test@test.com" method="post" enctype="text/plain" style="padding-left:85px;">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        
        <button type="submit">Submit</button>
    </form>

<?php include('footer.php') ?>
</body>
</html>
