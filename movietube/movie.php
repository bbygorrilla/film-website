<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieTube</title>
    <link rel="stylesheet" href="movie.css">
</head>
<body>
    <header>
        <h1>MovieTube</h1>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="movie.php">Movies</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="crud.php">CRUD</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <table class="movies-table" border="1">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Director</th>
                    <th>Poster</th>
                    <th>Trailer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    session_start();
                    include 'db_conn.php';

                    // Query to retrieve movie data
                    $sql = "SELECT film.title,
                    genre.genreName,
                    CONCAT(director.voornaam, ' ', director.achternaam) AS Director,
                    film.posterFile,
                    film.videoFile
                    FROM film
                    JOIN genre ON film.genreID = genre.genreID
                    JOIN director ON film.directorID = director.directorID";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) {
                            
                            echo "<tr>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["genreName"] . "</td>";
                            echo "<td>" . $row["Director"] . "</td>";
                            echo "<td><img src='" . $row["posterFile"] . "' alt='Movie Poster' style ='width: 200px;'></td>";
                            echo "<td><video src='" . $row["videoFile"] . "' controls style ='width: 300px;'></video></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No results found.</td></tr>";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; MovieTube</p>
    </footer>

    <script rel="script" ></script>
</body>
</html>
