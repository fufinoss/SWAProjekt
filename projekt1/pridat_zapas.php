<?php
require 'sui/databaze.php'; // Připojení k databázi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Získání dat z formuláře
    $team = $_POST['team'];
    $opponent = $_POST['opponent'];
    $match_date = $_POST['match_date'];
    $result = $_POST['result'];

    // SQL příkaz pro vložení dat
    $query = "INSERT INTO matches (team, opponent, match_date, result) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $team, $opponent, $match_date, $result);

    if ($stmt->execute()) {
        $message = "Zápas byl úspěšně přidán!";
    } else {
        $message = "Chyba při přidávání zápasu: " . $conn->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přidat nový zápas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Přidat nový zápas</h1>
        <?php if (!empty($message)): ?>
            <div class="alert alert-info text-center"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>
        <form method="POST">
            <div class="mb-3">
                <label for="team" class="form-label">Domácí tým</label>
                <input type="text" class="form-control" id="team" name="team" required>
            </div>
            <div class="mb-3">
                <label for="opponent" class="form-label">Hostující tým</label>
                <input type="text" class="form-control" id="opponent" name="opponent" required>
            </div>
            <div class="mb-3">
                <label for="match_date" class="form-label">Datum zápasu</label>
                <input type="date" class="form-control" id="match_date" name="match_date" required>
            </div>
            <div class="mb-3">
                <label for="result" class="form-label">Výsledek (nepovinné)</label>
                <input type="text" class="form-control" id="result" name="result">
            </div>
            <button type="submit" class="btn btn-primary">Přidat zápas</button>
        </form>
        <a href="zapasy.php" class="btn btn-secondary mt-3">Zpět na seznam zápasů</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
