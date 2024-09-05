<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vocales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h2 class="text-center">Contador de Vocales</h2>
        </div>
        <div class="card-body">
            <form method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="texto" class="form-label">Introduce un texto</label>
                    <textarea class="form-control" id="texto" name="texto" rows="3" required><?php echo isset($_POST['texto']) ? $_POST['texto'] : ''; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Contar Vocales</button>
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $texto = strtolower($_POST['texto']);
                    $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

                    foreach (str_split($texto) as $letra) {
                        if (array_key_exists($letra, $vocales)) {
                            $vocales[$letra]++;
                        }
                    }

                    echo "<div class='alert alert-info'>";
                    foreach ($vocales as $vocal => $cantidad) {
                        echo "<strong>Vocal $vocal = $cantidad</strong><br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </div>

</body>
</html>
