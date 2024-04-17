<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "film_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to execute a query
function executeQuery($conn, $query)
{
    $result = $conn->query($query);
    if (!$result) {
        die("Query failed: " . $conn->error);
    }
    return $result;
}

// Function to get the last inserted ID
function getLastInsertId($conn)
{
    return $conn->insert_id;
}

// Function to save files
function saveFile($file, $uploadDir)
{
    $fileName = basename($file["name"]);
    $targetFilePath = $uploadDir . "/" . $fileName;
    if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
        return $targetFilePath;
    } else {
        return null;
    }
}

// Get the action from the submitted form
$action = isset($_POST['action']) ? $_POST['action'] : '';

// Perform CRUD operations
switch ($action) {
    case 'add':
        // Get form data
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
        $director = isset($_POST['director']) ? $_POST['director'] : '';
        $releaseYear = isset($_POST['releaseYear']) ? $_POST['releaseYear'] : '';
        $posterFile = isset($_FILES['poster']) ? $_FILES['poster'] : null;
        $videoFile = isset($_FILES['video']) ? $_FILES['video'] : null;

        // Save files
        $posterPath = $posterFile ? saveFile($posterFile, 'poster_files') : NULL;
        $videoPath = $videoFile ? saveFile($videoFile, 'movie_files') : NULL;

        // First, fetch the genreID from the genre table
        $getGenreIdQuery = "SELECT genreID FROM genre WHERE genreName = '$genre'";
        $genreIdResult = executeQuery($conn, $getGenreIdQuery);

        if ($genreIdResult->num_rows > 0) {
            $genreRow = $genreIdResult->fetch_assoc();
            $genreID = $genreRow['genreID'];

            // Then, fetch the directorID from the director table
            $getDirectorIdQuery = "SELECT directorID FROM director WHERE CONCAT(voornaam, ' ', achternaam) = '$director'";
            $directorIdResult = executeQuery($conn, $getDirectorIdQuery);

            if ($directorIdResult->num_rows > 0) {
                $directorRow = $directorIdResult->fetch_assoc();
                $directorID = $directorRow['directorID'];

                // Insert the film into the film table
                $insertFilmQuery = "INSERT INTO film
                                    (title, description, genreID, directorID, releasedatum, posterFile, videoFile, taalD, rating)
                                    VALUES ('$title', '$description', '$genreID', '$directorID', '$releaseYear', 
                                            " . ($posterPath === NULL ? 'NULL' : "'$posterPath'") . ",
                                            " . ($videoPath === NULL ? 'NULL' : "'$videoPath'") . ",
                                            '1', '1')";
                executeQuery($conn, $insertFilmQuery);
                $filmID = getLastInsertId($conn);

                // Redirect to the home page after adding
                header('Location: movie.php?filmID=' . $filmID);
                exit;
            } else {
                echo "Director not found.";
            }
        } else {
            echo "Genre not found.";
        }
        break;

    case 'update':
        // Code to update an existing movie
        // ...
        break;

    case 'delete':
        // Code to delete a movie based on the filmID
        $movieId = isset($_POST['movieId']) ? $_POST['movieId'] : '';
        if ($movieId) {
            // Query to delete the movie from the database
            // ...
        }
        break;
}
?>
