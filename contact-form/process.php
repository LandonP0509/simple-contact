<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Process</title>
       <link rel="stlesheet" href="styles.css">
    </head>
    <body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = htmlspecialchars($_POST['first_name']);
        $lastName = htmlspecialchars($_POST['last_name']);
        $username = htmlspecialchars($_POST['username']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zip = htmlspecialchars($_POST['zip']);

        echo "<h2>Form Submission Details</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>Username: @$username</p>";
        echo "<p>City: $city</p>";
        echo "<p>State: $state</p>";
        echo "<p>Zip: $zip</p>";
    
        header("Location: process.php?message=Info Submitted");
        exit();
    }
    ?>

    <?php if (isset($_GET['message'])): ?>
        <p><?php echo htmlspecialchars($_GET['message']); ?></p>
    <?php endif; ?>
    </body>
</html>