<?php
require 'sui/databaze.php';

$query = "SELECT * FROM matches"; // Název tabulky v databázi
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seznam zápasů</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Seznam zápasů</h1>
        <table class="table table-striped mt-4">
            <thead class="table-primary">
                <tr>
                    <th>Tým domácí</th>
                    <th>Tým hosté</th>
                    <th>Datum</th>
                    <th>Výsledek</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['team']) ?></td>
                    <td><?= htmlspecialchars($row['opponent']) ?></td>
                    <td><?= htmlspecialchars($row['match_date']) ?></td>
                    <td><?= htmlspecialchars($row['result']) ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <!-- Tlačítko pro přidání zápasu -->
        <a href="pridat_zapas.php" class="btn btn-success mt-3">Přidat nový zápas</a>
        <!-- Tlačítko zpět na hlavní stránku -->
        <a href="index.php" class="btn btn-secondary mt-3">Zpět na hlavní stránku</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
