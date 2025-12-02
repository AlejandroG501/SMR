<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    
    <form method="post">
        Número 1: <input type="number" name="num1" step="any" required><br><br>
        
        Operación: 
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br><br>
        
        Número 2: <input type="number" name="num2" step="any" required><br><br>
        
        <button type="submit" name="calcular">Calcular</button>
        <input type="number" value="<?php if(isset($_POST['calcular'])){echo $resultado;}">
    </form>
    <?php
    if (isset($_POST['calcular'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op = $_POST['op'];
        
        if ($op == '+') {
            $resultado = $a + $b;
        } elseif ($op == '-') {
            $resultado = $a - $b;
        } elseif ($op == '*') {
            $resultado = $a * $b;
        } elseif ($op == '/') {
            if ($b == 0) {
                $resultado = 'Error: División por cero';
            } else {
                $resultado = $a / $b;
            }
        }
        
    }
    ?>

    <input class="CajaTexto" type="text" 
       value="<?php if (isset($_POST['rel'])) echo $resultado; ?>" 
       placeholder="0" readonly><br><br>
</body>
</html>