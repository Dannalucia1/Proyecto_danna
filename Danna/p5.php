<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Accesibilidad </title>
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
                        <li><a href="#">Accesibilidad</a></li>
                        <li><a href="p6.php">Frameworks</a></li>
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img
                        src="https://i0.wp.com/www.tribunahacker.com.ar/wp-content/uploads/2017/11/pruebas-accesibilidad-web2.jpg?resize=760%2C447&ssl=1">
                </div>
                <div class="hero-text">
                    <h1>Explorando la Accesibilidad en el Diseño Frontend</h1>
                    <p>La accesibilidad en el diseño frontend es esencial para garantizar que todas las personas,
                        independientemente de sus capacidades físicas o cognitivas, puedan acceder y utilizar un sitio
                        web de manera efectiva. Algunas razones por las que la accesibilidad es importante incluyen:</p>
                    <ol>
                        <li>
                            <p><strong>Inclusión y equidad:</strong> La accesibilidad asegura que todas las personas,
                                incluidas aquellas con discapacidades visuales, auditivas, motoras o cognitivas, puedan
                                acceder y utilizar un sitio web sin barreras. Esto fomenta la inclusión digital y la
                                equidad en línea.</p><br>
                        </li>
                        <li>
                            <p><strong>Cumplimiento legal y normativo:</strong> En muchos países, existen leyes y
                                regulaciones que exigen que los sitios web sean accesibles para todas las personas.
                                Cumplir con estas normativas no solo es una obligación legal, sino también un compromiso
                                con los derechos humanos y la igualdad de oportunidades.</p><br>
                        </li>
                        <li>
                            <p><strong>Mejora de la experiencia del usuario:</strong> La implementación de prácticas de
                                accesibilidad beneficia no solo a las personas con discapacidades, sino también a todos
                                los usuarios. Por ejemplo, un diseño claro y fácil de navegar beneficia a personas
                                mayores, usuarios con conexiones lentas a internet o aquellos que prefieren navegar
                                utilizando dispositivos móviles.</p><br>
                        </li>
                    </ol>
                    <p>Para mejorar la accesibilidad en una página web, se pueden implementar diversas prácticas, entre
                        las cuales se incluyen:</p>
                    <ol>
                        <li>
                            <p><strong>Utilizar etiquetas semánticas en HTML:</strong> Emplear elementos semánticos HTML
                                como &lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;footer&gt;, entre otros, ayuda a los
                                usuarios, especialmente a aquellos que utilizan lectores de pantalla, a comprender la
                                estructura y el contenido del sitio de manera más clara.</p><br>
                        </li>
                        <li>
                            <p><strong>Asegurar un contraste adecuado:</strong> Utilizar combinaciones de colores con un
                                buen contraste entre el texto y el fondo facilita la legibilidad para personas con
                                discapacidad visual o dificultades para distinguir colores. Es importante verificar que
                                el contraste cumpla con los estándares de accesibilidad, como los establecidos por el
                                Web Content Accessibility Guidelines (WCAG).</p><br>
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