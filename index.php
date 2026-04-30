<!DOCTYPE html>
<html>
<body style="font-family:Arial;text-align:center;padding:50px;background:#f0f0f0">
<h1>Calcolatrice PHP</h1>

<?php
if(isset($_POST['calcola'])) {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operazione'];
    
    switch($op) {
        case '+': $ris = $n1 + $n2; break;
        case '-': $ris = $n1 - $n2; break;
        case '*': $ris = $n1 * $n2; break;
        case '/': $ris = ($n2!=0) ? $n1/$n2 : 'Errore'; break;
    }
    echo "<h2>Risultato: $ris</h2>";
}
?>

<form method="POST">
    <input type="number" name="num1" placeholder="Numero 1" required><br><br>
    <select name="operazione">
        <option>+</option><option>-</option><option>*</option><option>/</option>
    </select><br><br>
    <input type="number" name="num2" placeholder="Numero 2" required><br><br>
    <button type="submit" name="calcola">CALCOLA</button>
</form>
</body>
</html>