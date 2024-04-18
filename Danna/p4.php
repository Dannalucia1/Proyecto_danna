<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Diferencias </title>
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
                        <li><a href="p3.php">Responsividad</a></li>
                        <li><a href="#">Diferencias</a></li>
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://i2.wp.com/www.ana2lp.mx/wp-content/uploads/2014/05/2014-06-26-HTML_CSS_JS_logo.png?fit=300%2C193&ssl=1"
                        alt="profile pic">
                </div>
                <div class="hero-text">
                    <h1>Explorando las Diferencias</h1><br>
                    <p>En el contexto del desarrollo frontend, HTML, CSS y JavaScript desempeñan roles distintos y
                        fundamentales:</p><br>
                    <ol>
                        <li>
                            <p><strong>HTML (HyperText Markup Language):</strong> HTML es el lenguaje de marcado
                                estándar utilizado para crear la estructura y el contenido de las páginas web. Se
                                utiliza para definir la disposición de los elementos en una página, como encabezados,
                                párrafos, listas, enlaces, imágenes y otros elementos. HTML proporciona la estructura
                                básica sobre la cual se construye una página web y es fundamental para la accesibilidad
                                y la indexación por parte de los motores de búsqueda.</p><br>
                        </li>
                        <br>
                        <li>
                            <p><strong>CSS (Cascading Style Sheets):</strong> CSS es un lenguaje de estilo utilizado
                                para controlar la presentación y el diseño de una página web. Permite definir el aspecto
                                visual de los elementos HTML, como el color, la tipografía, el tamaño, el espaciado, la
                                disposición y otros estilos. CSS proporciona la capacidad de personalizar la apariencia
                                de una página web de manera consistente y eficiente, separando así el contenido de su
                                presentación.</p><br>
                        </li>
                        <br>
                        <li>
                            <p><strong>JavaScript:</strong> JavaScript es un lenguaje de programación que se utiliza
                                para agregar interactividad y funcionalidad dinámica a las páginas web. Permite crear
                                efectos visuales interactivos, validar formularios, manipular el contenido de la página
                                en tiempo real, responder a eventos del usuario y comunicarse con servidores web para
                                cargar datos de manera asíncrona (AJAX). JavaScript es esencial para crear experiencias
                                de usuario dinámicas y ricas en contenido en el frontend de una aplicación web.</p><br>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!---typed js for typing text effect-->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.min.js">
    </script>
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