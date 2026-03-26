<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['digit1'] . $_POST['digit2'] . $_POST['digit3'] .
              $_POST['digit4'] . $_POST['digit5'] . $_POST['digit6'];

    // Aquí puedes validar el código contra tu base de datos o lógica
    if ($codigo === "123456") {
        echo "Código correcto ";
    } else {
        echo "Código incorrecto ";
    }
}
?>