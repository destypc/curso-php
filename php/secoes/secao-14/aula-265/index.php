<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="processamento.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="Marca do Carro">
        </div>
        <div>
            <input type="text" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcional[]" value="Teto Solar">Teto Solar
        </div>
        <div>
            <input type="checkbox" name="pelicula[]" value="Película">
            Película
        </div>
        <div>
            <input type="checkbox" name="blindado[]" value="Blindado">Blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>