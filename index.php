<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
</head>
<body>
    <h1>Izračunajte vrijednost varijable</h1>
    <form method="post" action="">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a" step="any" required><br><br>
        
        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b" step="any" required><br><br>
        
        <button type="submit">Pošalji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        
       
        $c = (3 * $a - $b) / 2;
        
        echo "<h2>Rezultat:</h2>";
        echo "<p>Vrijednost varijable c je: <strong>" . $c . "</strong></p>";
    }
    ?>
</body>
</html>
