<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - CMS v.s Framework</title>
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
                        <li><a href="p4.php">Diferencias</a></li>
                        <li><a href="p5.php">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="#">CMS v.s Framework</a></li>
                        <li><a href="p8.php">Array</a></li>
                    </ul>
                </nav>
            </header>
            <div class=" container">
                <div class="hero-pic">
                    <img src="https://cdn.geekboots.com/geek/cms-vs-framework-meta-1656603932515.jpg">
                </div>
                <div class="hero-text">
                    <h1>Comparación entre CMS y Frameworks Frontend</h1><br>
                    <p>En el ámbito del desarrollo frontend, la distinción principal entre un CMS (Sistema de Gestión de
                        Contenidos) y un framework reside en su propósito y enfoque:</p><br>

                    <h2>1. CMS (Sistema de Gestión de Contenidos):</h2><br>

                    <p>- Propósito: Un CMS es una plataforma completa diseñada para crear, administrar y publicar
                        contenido en línea de manera sencilla, sin necesidad de tener conocimientos técnicos avanzados.
                        Los CMS suelen ofrecer interfaces de usuario intuitivas para la creación y gestión de contenido,
                        así como funcionalidades adicionales como administración de usuarios, control de permisos y
                        gestión de medios.</p><br>
                    <p>- Ejemplos: WordPress, Drupal, Joomla, Magento, Shopify.</p><br>
                    <p>- Ejemplo: WordPress es un popular CMS utilizado para la creación de blogs, sitios web
                        corporativos, tiendas en línea y más. Proporciona una amplia gama de temas y plugins que
                        permiten personalizar y extender sus funcionalidades.</p><br>

                    <h2>2. Framework:</h2><br>

                    <p>- Propósito: Un framework frontend proporciona una base estructurada y herramientas predefinidas
                        para el desarrollo de aplicaciones web, pero no incluye una interfaz de usuario lista para usar
                        como en un CMS. Los frameworks frontend se centran en la creación de la interfaz de usuario y la
                        lógica de la aplicación, dejando la gestión del contenido y otras funcionalidades a cargo del
                        desarrollador.</p><br>
                    <p>- Ejemplos: React, Angular, Vue.js, Ember.js.</p><br>
                    <p>- Ejemplo: React es un framework frontend de JavaScript que se utiliza para construir interfaces
                        de usuario interactivas y reactivas. Proporciona un enfoque basado en componentes reutilizables
                        y una arquitectura flexible que permite crear aplicaciones web complejas de manera modular.</p>
                    <br>
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