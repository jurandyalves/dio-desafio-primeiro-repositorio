<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Acordeão com JQuery</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://code.jquery.com/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>
</head>
<body>
    <div id="accordion">
        <h3>Seção 1</h3>
        <div>
            <p>
                Texto da seção 1
            </p>
        </div>
        <h3>Seção 2</h3>
        <div>
            <p>
                Texto seção 2
            </p>
        </div>
        <h3>Seção 3</h3>
        <div>
            <p>
                Texto seção 3
            </p>
            <ul>
                <li>Item 1</li>
                <li>Item 2</li>
                <li>Item 3</li>
                <li>Item 4</li>
            </ul>
        </div>
        <h3>seção 4</h3>
        <div>
            <p>
                Primeiro parágrafo de Texto da seção 4
            </p>
            <p>
                Segundo parágrafo de texto da seção 4
            </p>
        </div>
    </div>
</body>
</html>