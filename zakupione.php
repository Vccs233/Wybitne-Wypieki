<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:/</title>
    <meta name="description" content="opis">
    <link href="styl.css" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
</head>

<body>

    <div id="container">
        <div id="Nagłówek">
            <img src="img/logo.jpg" alt="logo">
            <h1 style="font-family: 'Brastagi', sans-serif;">Wyborne Wypieki</h1>
        </div>

        <div class="treść">
            <h2>Wybierz swoje alergeny:</h2>

            <!-- Formularz alergenów -->
            <form method="post">
                <div class="checkbox-group">
                    <input type="checkbox" id="gluten" name="allergens[]" value="Gluten">
                    <label for="gluten">Gluten</label><br>

                    <input type="checkbox" id="laktoza" name="allergens[]" value="Laktoza">
                    <label for="laktoza">Laktoza</label><br>

                    <input type="checkbox" id="orzechy" name="allergens[]" value="Orzechy">
                    <label for="orzechy">Orzechy</label><br>

                    <input type="checkbox" id="jaja" name="allergens[]" value="Jaja">
                    <label for="jaja">Jaja</label><br>

                    <input type="checkbox" id="soja" name="allergens[]" value="Soja">
                    <label for="soja">Soja</label><br>

                    <input type="checkbox" id="ryby" name="allergens[]" value="Ryby">
                    <label for="ryby">Ryby</label><br>

                    <input type="checkbox" id="skorupiaki" name="allergens[]" value="Skorupiaki">
                    <label for="skorupiaki">Skorupiaki</label><br>
                </div>

                <br>
                <input type="submit" value="Zatwierdź">
            </form>

            <?php
            // Sprawdzenie, czy formularz został przesłany
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Sprawdzenie, czy jakiekolwiek alergeny zostały zaznaczone
                if (!empty($_POST['allergens'])) {
                    echo "<h3>Zaznaczone alergeny:</h3>";
                    echo "<ul>";
                    
                    // Pętla przez wybrane alergeny
                    foreach ($_POST['allergens'] as $allergen) {
                        echo "<li>" . htmlspecialchars($allergen) . "</li>";
                    }

                    echo "</ul>";
                } else {
                    echo "<p>Nie zaznaczono żadnych alergenów.</p>";
                }
            }
            ?>
        </div>

        <div class="treść"><a class="kup" href="index.html">Powrót</a></div>
    </div>
    
    <div id="stopka">
        <h1>Wszystkie prawa nie zastrzeżone</h1>
    </div>

</body>

</html>
