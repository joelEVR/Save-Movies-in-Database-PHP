<!-- 
    Author: Joel Esteban Velasquez Rodriguez
    File Name: index.php
    Creation Date: November 30, 2023
    Due Date: Dec 03, 2023
    Course: CST8285 Lab Section: 332
    Description: A web page for managing movie details.
-->

<?php
// Define arrays for movie attributes
$genres = ['Action', 'Adventure', 'Comedy', 'Drama']; // Array for movie genres
$subjects = ['Animation', 'Children and Youth', 'People']; // Array for movie subjects
$directors = ['Director 1', 'Director 2', 'Director 3'];  // Array for movie directors

// Function to generate dropdown options from an array
function generateOptions($array)
{
    $options = '';
    foreach ($array as $value) {
        $options .= "<option>$value</option>"; // Append each value as an option
    }
    return $options;
}
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <title>Lab 5 - Web Programming</title> <!-- Updated title -->
    <meta name="author" content="Joel Esteban Velasquez Rodriguez">
    <link rel="stylesheet" href="css/styles1.css" /> <!-- Link to external CSS file -->
</head>

<body>
    <?php include "headerM.php"; ?> <!-- Including the header from an external PHP file -->

    <main>
        <form class="form" method="post" action="process.php" id="mainForm">
            <fieldset class="form__panel">
                <legend class="form__heading">Edit Movie Details</legend> <!-- Form heading -->
                <!-- Title input field -->
                <p class="form__row">
                    <label>Title</label><br />
                    <input type="text" name="title" class="form__input form__input--large" />
                </p>
                <!-- Description input field -->
                <p class="form__row">
                    <label>Description</label><br />
                    <input type="text" name="description" class="form__input form__input--large">
                </p>
                <!-- Genre dropdown -->
                <p class="form__row">
                    <label>Genre</label><br />
                    <select name="genre" class="form__input form__select">
                        <option>Choose genre</option>
                        <?php echo generateOptions($genres); ?>
                    </select>
                </p>
                <!-- Subject dropdown -->
                <p class="form__row">
                    <label>Subject</label><br />
                    <select name="subject" class="form__input form__select">
                        <option>Choose subject</option>
                        <?php echo generateOptions($subjects); ?>
                    </select>
                </p>
                <!-- Star input field -->
                <p class="form__row">
                    <label>Star</label><br />
                    <input type="text" name="Star" class="form__input form__input--medium" />
                </p>
                <!-- Year input field -->
                <p class="form__row">
                    <label>Year</label><br />
                    <input type="text" name="year" class="form__input form__input--small" />
                </p>
                <!-- Production input field -->
                <p class="form__row">
                    <label>Production</label><br />
                    <input type="text" name="Production" class="form__input form__input--medium" />
                </p>
                <!-- Main Director dropdown -->
                <p class="form__row">
                    <label>Main Director</label><br />
                    <select name="coStar" class="form__input form__select">
                        <option>Choose Main Director</option>
                        <?php echo generateOptions($directors); ?>
                    </select>
                </p>

                <!-- Form submission buttons -->
                <div class="form__box">
                    <input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">
                </div>
            </fieldset>
        </form>
    </main>
    <?php include "footerM.php"; ?> <!-- Including the footer from an external PHP file -->

</html>