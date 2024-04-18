<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Herramientas </title>
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
                        <li><a href="#">Herramientas</a></li>
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
                    <img src="https://th.bing.com/th/id/OIP.hVvYuWfPE2fb2XrALmVD4wHaHw?rs=1&pid=ImgDetMain">
                </div>
                <div class="hero-text">
                    <h1>Explorando Herramientas para el Desarrollo Frontend</h1>
                    <p>En el mundo del desarrollo web, contar con las herramientas adecuadas es esencial para crear
                        sitios y aplicaciones modernas y funcionales. Aquí presentamos algunas de las herramientas
                        fundamentales utilizadas en el desarrollo frontend:</p>
                    <ol><br>
                        <li>
                            <strong>HTML (HyperText Markup Language)</strong>: Es el lenguaje estándar para la
                            estructura y el contenido de las páginas web. Permite definir elementos como encabezados,
                            párrafos, listas y enlaces, proporcionando la base sobre la cual se construye el contenido
                            de un sitio web.
                        </li><br>
                        <li>
                            <strong>CSS (Cascading Style Sheets)</strong>: Se utiliza para definir el estilo visual y el
                            diseño de una página web. Con CSS, es posible personalizar aspectos como colores,
                            tipografías, márgenes y animaciones, facilitando la creación de diseños adaptables y
                            atractivos.
                        </li><br>
                        <li>
                            <strong>JavaScript</strong>: Este lenguaje de programación permite agregar interactividad y
                            dinamismo a las páginas web. Desde efectos visuales hasta validaciones de formularios y
                            manipulación del DOM, JavaScript es esencial para crear experiencias de usuario ricas y
                            envolventes.
                        </li><br>
                        <li>
                            <strong>Frameworks y Bibliotecas Frontend</strong>: Herramientas como React.js, AngularJS y
                            Bootstrap proporcionan conjuntos de componentes predefinidos y funcionalidades que agilizan
                            el desarrollo frontend y promueven la consistencia en el código.
                        </li><br>
                        <li>
                            <strong>Herramientas de Gestión de Paquetes y Construcción</strong>: npm, yarn, Webpack y
                            otras herramientas permiten gestionar dependencias, automatizar tareas de construcción y
                            optimizar recursos para su implementación en producción.
                        </li><br>
                        <li>
                            <strong>Herramientas de Prueba y Depuración</strong>: Chrome DevTools, Firefox Developer
                            Tools y suites de pruebas como Jest y Selenium son fundamentales para garantizar la calidad
                            y estabilidad de las aplicaciones web, así como para identificar y corregir errores y
                            problemas de rendimiento.
                        </li><br>
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