<form method="post">
    Número: <input type="number" name="numero" min="0" required>
    <button type="submit">Calcular</button>
</form>

<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }

    echo "El factorial de $numero es: $factorial";
}
?>
