<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $email = $_POST['email'];

      // Simpan data ke dalam file teks untuk sementara
      $file = fopen("data.txt", "a");
      fwrite($file, "Name: $name, Email: $email\n");
      fclose($file);

      // Menampilkan pesan konfirmasi
      echo "Data has been saved!";
      }
     ?>

</body>
</html>
