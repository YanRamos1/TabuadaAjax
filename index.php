<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
<div class="card shadow text-white d-flex" style="background-color: #210077">
    <h1 class="d-flex justify-content-center">Tabuada automatica</h1>
    <h3 class="d-flex justify-content-center">Escolha um numero</h3>
    <form id="FormTabuada" class="d-flex justify-content-center">
        <input type="number" name="numero" id="numero">
        <input type="submit" value="Enviar">
    </form>
    <div class="d-flex justify-content-center col" id="canvas">

    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#FormTabuada').submit(function (event) {
        event.preventDefault();
        var numero = $('#numero').val();
        var canvas = document.getElementById('canvas');

        $.ajax({
            url: 'http://localhost:800/tabuada.php',
            type: 'POST',
            data: {numero: numero},
            success: function (data) {
                canvas.innerHTML = data;
            },
        });
    });
</script>
</body>
</html>
