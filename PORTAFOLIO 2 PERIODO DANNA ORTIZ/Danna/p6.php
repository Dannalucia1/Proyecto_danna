<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Frontend - Frameworks </title>
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
                        <li><a href="p8.php">Array</a></li>

                    </ul>
                </nav>
            </header>
            <div class="container">
                <div class="hero-pic">
                    <img src="https://th.bing.com/th/id/OIP.3kVqg8TShxgMLDHGD71h3QHaDW?rs=1&pid=ImgDetMain">
                </div>
                <div class="hero-text">
                    <h1>Explorando los Frameworks Frontend</h1><br>
                    <p>Los frameworks frontend son conjuntos de herramientas, bibliotecas y componentes predefinidos que
                        facilitan y agilizan el desarrollo de aplicaciones web al proporcionar una estructura y
                        funcionalidades comunes. Estos frameworks suelen incluir funcionalidades para el manejo de la
                        interfaz de usuario, gestión del estado de la aplicación, enrutamiento, manipulación del DOM,
                        comunicación con servidores, entre otros aspectos.</p><br>

                    <p>Utilizar un framework frontend puede ayudar a los desarrolladores a reducir el tiempo de
                        desarrollo, mejorar la organización del código, y facilitar la colaboración entre equipos.</p>
                    <br>

                    <h2>Ejemplos de Frameworks Frontend:</h2><br>

                    <ol>
                        <li>
                            <p><strong>React:</strong> Desarrollado por Facebook, React es un framework de JavaScript de
                                código abierto que se utiliza para construir interfaces de usuario interactivas y
                                reactivas. Se basa en un modelo de componentes reutilizables que permiten crear
                                interfaces de usuario complejas de manera modular y eficiente. React utiliza un enfoque
                                de programación declarativa y virtual DOM para optimizar el rendimiento de las
                                aplicaciones web.</p><br>
                        </li>
                        <li>
                            <p><strong>Vue.js:</strong> Vue.js es otro framework de JavaScript de código abierto que se
                                utiliza para construir interfaces de usuario interactivas y reactivas. A menudo se
                                describe como un enfoque progresivo para el desarrollo frontend, lo que significa que se
                                puede integrar fácilmente en proyectos existentes y ampliarse según sea necesario.
                                Vue.js proporciona una sintaxis clara y concisa, y se centra en la simplicidad y la
                                flexibilidad.</p><br>
                        </li>
                    </ol>
                    <p>Los desarrolladores utilizan frameworks frontend en lugar de escribir todo el código desde cero
                        por varias razones:</p><br>

                    <ul>
                        <li>Productividad: Los frameworks frontend proporcionan herramientas y abstracciones que
                            permiten a los desarrolladores construir aplicaciones web de manera más rápida y eficiente,
                            ya que no necesitan reinventar la rueda para cada proyecto.</li><br>
                        <li>Consistencia: Utilizar un framework establecido proporciona una estructura coherente y una
                            metodología de desarrollo común, lo que facilita la colaboración entre equipos y la
                            mantenibilidad del código.</li><br>
                        <li>Optimización de rendimiento: Muchos frameworks frontend están optimizados para rendimiento,
                            lo que significa que ofrecen soluciones eficientes para problemas comunes de rendimiento,
                            como la manipulación del DOM y la actualización de datos.</li><br>
                        <li>Comunidad y soporte: Los frameworks frontend populares suelen tener comunidades activas de
                            desarrolladores y una amplia gama de recursos disponibles, como documentación, tutoriales,
                            plugins y bibliotecas de terceros, lo que facilita el aprendizaje y la resolución de
                            problemas.</li><br>
                    </ul>
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