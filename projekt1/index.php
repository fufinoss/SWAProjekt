<?php
include 'sui/navbar.php';
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotbalový kalendář</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Vítejte ve Fotbalovém kalendáři</h1>
            <p class="lead">Plánujte zápasy, sledujte výsledky a udržujte přehled o statistikách!</p>
            <!-- Tlačítko pro přechod na stránku se zápasy -->
            <a href="zapasy.php" class="btn btn-light btn-lg mt-3">Přejít na zápasy</a>
        </div>
    </header>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Fotbalový kalendář. Všechna práva vyhrazena.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
