<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Operaciones Básicas</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <main>
        <form action="logic.php" method="post">
            <div class="numbers">
                <div>
                    <label for="number_1">Número 1</label>
                    <input type="text" name="number_1" required>
                </div>
                <div>
                    <label for="number_2">Número 2</label>
                    <input type="text" name="number_2" required>
                </div>
            </div>
            <div class="btn-operator-container">
                <button class="operators" name="operation" value="add" type="submit">Sumar</button>
                <button class="operators" name="operation" value="sub" type="submit">Restar</button>
                <button class="operators" name="operation" value="mult" type="submit">Multiplicar</button>
                <button class="operators" name="operation" value="div" type="submit">Dividir</button>
            </div>
            <button type="reset" >limpiar</button>
        </form>
    </main>
</body>

</html>