<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - ¿Que es? - Función </title>
    <link rel="stylesheet" href="css\estilos.index.inicio.css">
    <!----Font awesome cdn  font icon css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <div class="hero-header">
        <div class="wrapper">
            <header>
                <nav>
                    <div class="togglebtn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="navlinks">
                        <li><a href="index.inicio.php">Inicio</a></li>
                        <li><a href="#">¿Qué es?</a></li>
                        <li><a href="p2.php">Herramientas</a></li>
                        <li><a href="p3.php">Responsividad</a></li>
                        <li><a href="p4.php">Diferencias</a></li>
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://th.bing.com/th/id/OIP.W29bdMf0F47eNJfitzY3LQHaD4?rs=1&pid=ImgDetMain">
                </div>
                <div class="hero-text">
                    <h1>Explorando el Frontend</h1>
                    <p>En el vasto mundo del desarrollo web, el término "frontend" abarca una gama de elementos
                        cruciales que dan forma a la experiencia de usuario. Desde el código HTML que define la
                        estructura de una página hasta el estilo y diseño proporcionado por CSS, y la interactividad
                        habilitada por JavaScript; estos son los bloques de construcción esenciales.</p>
                    <p>El frontend es más que solo código; abarca imágenes, videos, fuentes y otros medios que
                        enriquecen la experiencia visual. Su propósito fundamental es crear interfaces intuitivas y
                        atractivas que permitan a los usuarios navegar sin esfuerzo y realizar acciones con facilidad.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!---typed js for typing text effect-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js"></script>
    <script>
    /** creating button click show hide navbar **/
    var togglebtn = document.querySelector(".togglebtn");
    var nav = document.querySelector(".navlinks");
    var links = document.querySelector(".navlinks li");

    togglebtn.addEventListener("click", function() {
        this.classList.toggle("click");
        nav.classList.toggle("open");
    })

    var typed = new Typed(".input", {
        strings: ["Frontend Developer", "UX Designer", "Web Developer"],
        typedSpeed: 70,
        backSpeed: 55,
        loop: true
    })
    </script>
</body>

</html>