<?php
$result = null;
$message = null;

// Procesar datos si se envían a través del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number1 = isset($_POST['number_1']) ? (float) $_POST['number_1'] : null;
    $number2 = isset($_POST['number_2']) ? (float) $_POST['number_2'] : null;
    $operation = $_POST['operation'] ?? null;

    if ($number1 === null || $number2 === null) {
        $message = "Por favor, introduce ambos números.";
    } else {
        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                $message = "La suma de $number1 y $number2 es: $result";
                break;
            case 'sub':
                $result = $number1 - $number2;
                $message = "La resta de $number1 y $number2 es: $result";
                break;
            case 'mult':
                $result = $number1 * $number2;
                $message = "La multiplicación de $number1 y $number2 es: $result";
                break;
            case 'div':
                if ($number2 == 0) {
                    $message = "No se puede dividir entre cero.";
                } else {
                    $result = $number1 / $number2;
                    $message = "La división de $number1 entre $number2 es: $result";
                }
                break;
            default:
                $message = "Operación no válida.";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <div class="result-container">
            <?php if ($message): ?>
                <p><?php echo $message; ?></p>
            <?php else: ?>
                <p>No se realizó ninguna operación.</p>
            <?php endif; ?>
        </div>
        <div class="btn-operator-container">
            <a href="index.php">
                <button type="button" class="operators">Volver al inicio</button>
            </a>
        </div>
    </main>
</body>

</html>
