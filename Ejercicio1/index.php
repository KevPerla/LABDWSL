<!-- factorial.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card">
        <div class="card-header bg-dark text-white">
            <h2 class="text-center">Calculadora de Factorial</h2>
        </div>
        <div class="card-body">
            <form method="POST" class="mb-3">
                <div class="mb-3">
                    <label for="numero" class="form-label">Introduce un número</label>
                    <input type="number" class="form-control" id="numero" name="numero" value="<?php echo isset($_POST['numero']) ? $_POST['numero'] : ''; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calcular Factorial</button>
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $numero = $_POST['numero'];
                    $factorial = 1;

                    if ($numero >= 0) {
                        for ($i = 1; $i <= $numero; $i++) {
                            $factorial *= $i;
                        }
                        echo "<div class='alert alert-success text-center'>El factorial de $numero es <strong>$factorial</strong>.</div>";
                    } else {
                        echo "<div class='alert alert-danger text-center'>Por favor, introduce un número mayor o igual a 0.</div>";
                    }
                }
            ?>
        </div>
    </div>

</body>
</html>
