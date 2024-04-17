<main>
  <h2>Add/Update Movie</h2>
  <form action="process_movie.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="add">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>
    <label for="genre">Genre:</label>
    <select name="genre" id="genre" required>
      <?php
        // Code to fetch genres from the database and populate the dropdown
      ?>
    </select>
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
</main>