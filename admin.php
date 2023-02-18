
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

    <link rel="icon" href="./img/g.ico">
    <title>G-SHOP</title>
    <script src="https://kit.fontawesome.com/df59baf6b8.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script defer src="stock.js"></script>
    <script defer src="modal.js"></script>
    <script defer src="app.js"></script>
</head>
<body>
    <header>
        <h1 id="titulo" class="titulo">G-SHOP</h1>
        <h2 id="subtitulo" class="titulo">DASHBOARD</h2>
    </header>
    <div>
        <canvas id="myChart" width="400" height="400"></canvas>

    </div>
    
</body>
<script> 
    var ctx= document.getElementById("myChart").getContext("2d");
    var myChart= new Chart(ctx,{
        type:"pie",
        data:{
            labels:['domingo','lunes','martes','miercoles','juves','viernes','sabado'],
            datasets:[{
                label:'Num visitas',
                data:[10,2,15,2,1,0,2],
                backgroundColor:[
                    'rgb(214,181,208)',
                    'rgb(202, 227,195)',
                    'rgb(216,230,145)',
                    'rgb(236,149,158)',
                    'rgb(243,202,218)',
                    'rgb(207,188,184)',
                    'rgb(163,214,214)',
                ]
            }]
        },
        options:{
            scales:{
                yAxes:[{
                    ticks:{
                        beginAtZaero:true
                    }
                }]
            }
        }
    });
</script>
<a class="btn btn-primary py-3 px-5" href="index.php">Go Back To Home</a>
</html>


<!-- include "./contador.php"; // Incluir el archivo contador.php -->
<!-- Checar porque no encuentra el archivo -->