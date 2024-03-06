<!-- 
    Author: Joel Esteban Velasquez Rodriguez
    File Name: process.php
    Creation Date: November 30, 2023
    Due Date: Dec 03, 2023
    Course: CST8285 Lab Section: 332
    Description: A web page for processing and displaying submitted movie information. 
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lab 5 - Process</title> <!-- Title of the web page -->
    <meta name="author" content="Joel Esteban Velasquez Rodriguez"> <!-- Meta tag for the author's name -->
    <link rel="stylesheet" href="css/styles1.css" /> <!-- Link to external CSS file -->
</head>

<body>
    <?php require 'headerM.php'; ?> <!-- Including the header from an external PHP file -->

    <main>
        <!-- Container for displaying the results of the form submission -->
        <div class="results">
            <!-- Caption for the results section -->
            <p class='results__caption'>Movie Information Saved</p>

            <?php
            // Check if the form has been submitted using the POST method
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve each form field value or set to an empty string if not present
                $title = isset($_POST["title"]) ? $_POST["title"] : "";
                $description = isset($_POST["description"]) ? $_POST["description"] : "";
                $genre = isset($_POST["genre"]) ? $_POST["genre"] : "";
                $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
                $star = isset($_POST["Star"]) ? $_POST["Star"] : "";
                $year = isset($_POST["year"]) ? $_POST["year"] : "";
                $production = isset($_POST["Production"]) ? $_POST["Production"] : "";
                $mainDirector = isset($_POST["coStar"]) ? $_POST["coStar"] : "";

                // Display the form data in a table
                echo '<table>';
                // Output each form field with labels and values
                echo "<tr><td class='results__label'>Title</td><td class='outputtext'>$title</td></tr>";
                echo "<tr><td class='results__label'>Description</td><td class='outputtext'>$description</td></tr>";
                echo "<tr><td class='results__label'>Genre</td><td class='outputtext'>$genre</td></tr>";
                echo "<tr><td class='results__label'>Subject</td><td class='outputtext'>$subject</td></tr>";
                echo "<tr><td class='results__label'>Star</td><td class='outputtext'>$star</td></tr>";
                echo "<tr><td class='results__label'>Year</td><td class='outputtext'>$year</td></tr>";
                echo "<tr><td class='results__label'>Production</td><td class='outputtext'>$production</td></tr>";
                echo "<tr><td class='results__label'>Main Director</td><td class='outputtext'>$mainDirector</td></tr>";
                echo '</table>';
            } else {
                // Display a message if no form data was submitted
                echo "<p>No form data submitted.</p>";
            }
            ?>
        </div>
    </main>
    <?php require 'footerM.php'; ?> <!-- Including the footer from an external PHP file -->
</body>

</html>
