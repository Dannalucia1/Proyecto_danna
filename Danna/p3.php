<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Responsividad </title>
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
                        <li><a href="p1.php">¿Qué es?</a></li>
                        <li><a href="p2.php">Herramientas</a></li>
                        <li><a href="#">Responsividad</a></li>
                        <li><a href="p4.php">Diferencias</a></li>
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://th.bing.com/th/id/OIP.kURfmulLxeGg1SMyY5lajQHaFt?rs=1&pid=ImgDetMain">
                </div>
                <div class="hero-text">
                    <h1>Explorando la Responsividad en el Diseño Web</h1>
                    <p>La responsividad en el diseño web es la capacidad de un sitio para adaptarse de manera dinámica a
                        diferentes dispositivos y tamaños de pantalla. Su objetivo es ofrecer una experiencia de usuario
                        óptima en cualquier dispositivo, eliminando la necesidad de versiones separadas del sitio para
                        cada tipo de pantalla.</p>
                    <p>Para lograr la responsividad, se utilizan diversas técnicas, entre las que se destacan:</p>
                    <ol>
                        <li>
                            <strong>Diseño adaptable (Responsive Design)</strong>: Esta técnica utiliza CSS para adaptar
                            el diseño y el contenido del sitio según el tamaño de la pantalla del dispositivo. Emplea
                            unidades relativas como porcentajes o ems en lugar de unidades absolutas como píxeles, y
                            media queries para aplicar estilos específicos según el tamaño de la pantalla.
                        </li><br>
                        <li>
                            <strong>Uso de flexbox y grid</strong>: Flexbox y CSS Grid son sistemas de diseño en CSS que
                            permiten crear diseños flexibles y complejos de manera eficiente. Facilitan la creación de
                            diseños responsivos al proporcionar herramientas para organizar y alinear elementos
                            dinámicamente, lo que resulta especialmente útil para diseños de varias columnas o elementos
                            con disposiciones complejas.
                        </li>
                    </ol>
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