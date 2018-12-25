<?php
$var1 = 1;

$name = "Eduardo";
$lastName = "Rasgado Ruiz";
// concatenacion con comillas dobles
$fullName = "$name $lastName";

$jobs = [
    [
            'title' => "Desarrollador PHP"
    ],
    [
        'title' => "Desarrollador C++"
    ],
    [
        'title' => "Desarrollador React.js"
    ],
    [
        'title' => "Desarrollador Node.js"
    ],
    [
        'title' => "Desarrollador Python"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi CV</title>
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light" >
        <a class="navbar-brand" href="#"><?php echo $fullName ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Contacto</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Usuario" aria-label="user">
                <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" aria-label="password">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ingresar</button>
            </form>
        </div>
    </nav>
    <div class="space"></div>
    <div class="container">
        <div class="row presenter">
            <div class="col-md-4">
                <img src="img/Bart.jpg" alt="" class="imgProfile">
            </div>
            <div class="col-md-4">
                <h2>[Tu nombre aqui]</h2>
                <h3>[Desarrollador Web]</h3>
                <div class="group1">
                    <p>Mail: [Tu mail]</p>
                    <p>Número de teléfono: [Tu phone number]</p>
                    <p>LinkedIn: [ulr al sitio]</p>
                    <p>Github: [Tu Github]</p>
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <h1>Resumen profesional</h1>
            <p>Caesiums prarere, tanquam flavum poeta.The alignment is an ordinary machine. Confucius says: in wonderland wrestle earthly life.
                Confucius says: in wonderland wrestle earthly life.Confucius says: in wonderland wrestle earthly life.Confucius says: in wonderland wrestle earthly life.
                Caesiums prarere, tanquam flavum poeta.Caesiums prarere, tanquam flavum poeta.Caesiums prarere, tanquam flavum poeta.Caesiums prarere, tanquam flavum poeta.</p>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h2>Experiencia laboral</h2>
                <?php
                    $i = 0;
                    do{
                        echo "
                            <div>
                                <h3>".$jobs[$i]['title']."</h3>
                                <p>Season each side of the steak with twelve pounds of cabbage.Season each side of the steak with twelve pounds of cabbage.
                                    Season each side of the steak with twelve pounds of cabbage.Season each side of the steak with twelve pounds of cabbage.</p>
                                <p>Años de experiencia: [años]</p>
                            </div>
                        ";
                        $i++;
                    } while($i < count($jobs));
                ?>
            </div>
            <div class=" jumbotron col-md-4">
                <h2>Herramientas de desarrollo</h2>
                <h3>Backend:</h3>
                <ul>
                    <li>Php</li>
                    <li>Laravel</li>
                    <li>Nodejs</li>
                    <li>ASP.Net</li>
                </ul>
                <h3>FrontEnd:</h3>
                <ul>
                    <li>HTML, CSS & JS </li>
                    <li>React.js</li>
                    <li>Bootstrap 4</li>
                </ul>
                <h3>Database:</h3>
                <ul>
                    <li>MSSQL Server</li>
                    <li>PostgreSQL</li>
                    <li>MySQL/MariaDB</li>
                    <li>SQLite3</li>
                    <li>Redis</li>
                    <li>MongoDB</li>
                </ul>
                <h3>Cloud:</h3>
                <ul>
                    <li>Servidores linux</li>
                </ul>
                <h3>Stacks:</h3>
                <ul>
                    <li>MEAN</li>
                    <li>LAMPP</li>
                    <li>Laravel & React.js</li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="text-center">
        Desarrollado por Eduardo Rasgado. Desarrollador de software. 2018.
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


