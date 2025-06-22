<?php
$data = $_GET['data'] ?? 'Tidak ada data';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Scan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">
    <div class="container text-center">
        <h3>Hasil Scan</h3>
        <div class="alert alert-success mt-4"><?= htmlspecialchars($data) ?></div>
        <a href="index.php" class="btn btn-primary mt-3">Scan Lagi</a>
    </div>
</body>
</html>
