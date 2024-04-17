<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieTube</title>
    <link rel="stylesheet" href="crud.css">
    <style>
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #c5d1c2;
            border-radius: 5px;
        }
        input[type="text"], input[type="number"], textarea, select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: green;
        }
    </style>
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
        <h2>Add Movie</h2>
        <form action="process_movie.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea>
            <label for="genre">Genre:</label>
            <input type=text name="genre" id="genre" required>
            <label for="director">Director:</label>
            <input type="text" name="director" id="director" required>
            <label for="releaseYear">Release Year:</label>
            <input type="number" name="releaseYear" id="releaseYear" min="1900" max="<?php echo date('Y'); ?>" required>
            <label for="poster">Poster:</label>
            <input type="file" name="poster" id="poster" accept="image/*">
            <label for="video">Video:</label>
            <input type="file" name="video" id="video" accept="video/*">
            <input type="submit" value="Add Movie">
        </form>

        <h2>Update Movie</h2>
        <form action="process_movie.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <label for="updateTitle">Title:</label>
            <input type="text" name="title" id="updateTitle" required>
            <label for="updateDescription">Description:</label>
            <textarea name="description" id="updateDescription" required></textarea>
            <label for="updateDirector">Director:</label>
            <input type="text" name="director" id="updateDirector" required>
            <label for="updateReleaseYear">Release Year:</label>
            <input type="number" name="releaseYear" id="updateReleaseYear" min="1900" max="<?php echo date('Y'); ?>" required>
            <label for="updatePoster">Poster:</label>
            <input type="file" name="poster" id="updatePoster" accept="image/*">
            <label for="updateVideo">Video:</label>
            <input type="file" name="video" id="updateVideo" accept="video/*">
            <input type="submit" value="Update Movie">
        </form>

        <h2>Delete Movie</h2>
        <form action="process_movie.php" method="post">
            <input type="hidden" name="action" value="delete">
            <label for="deleteMovieId">Movie ID:</label>
            <input type="number" name="movieId" id="deleteMovieId" required>
            <input type="submit" value="Delete Movie">
        </form>

    </main>
    <footer>
        <p>&copy; MovieTube</p>
    </footer>
    <script rel="script"></script>
</body>
</html>

