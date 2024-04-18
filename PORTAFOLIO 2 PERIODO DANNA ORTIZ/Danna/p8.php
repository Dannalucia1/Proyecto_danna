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
                        <li><a href="p7.php">CMS v.s Framework</a></li>
                        <li><a href="#">Array</a></li>
                    </ul>
                </nav>
            </header>
            <div class=" container">
                <div class="hero-pic">
                    <img src="imagen/php.webp "><br>
                </div>
                <div class="hero-text">
                    <h1>¿Que es array en php?</h1><br>
                    <p>Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más. Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales. </p><br>

                    <h2>Ejemplos de array</h2><br>

                    <p>
                        1)Declaración literal de array: Puedes definir un array especificando explícitamente los índices y valores.
                     <img src="imagen/Captura11.png"><br>

                    2) Declaración abreviada de array (sintaxis corta [] a partir de PHP 5.4): A partir de PHP 5.4, puedes utilizar una sintaxis más corta para definir arrays.
                    <img src="imagen/Captura2.png"><br>

                    3)Array asociativo: Puedes crear un array donde los índices son cadenas de texto en lugar de números.</p> 
                    <img src="imagen/Captura3.png"><br>

                    4) Usando la función range(): Para crear un array con un rango de valores.
                    <img src="imagen/Captura44.png"><br>


                <br>
                    
                    <h2>Operaciones con array:</h2><br>

                    <p>1) Acceder a elementos individuales: Puedes acceder a elementos individuales de un array utilizando corchetes y el índice del elemento. </p><br>
                    <p><img src ="imagen/Captura22.png"></p><br>

                    <p>2)Agregar elementos: Puedes agregar elementos al final de un array utilizando la sintaxis de corchetes vacíos. </p>
                    <p><img src="imagen/Captura23.png"><br>

                    <p>3)  Eliminar elementos: Puedes eliminar elementos de un array utilizando la función unset() o la función array_splice().</p><br>
                    <p><img src ="imagen/Captura24.png"></p><br>

                    <h2>2 Ejemplos practicos:</h2><br>
                    <p> Ejemplo 1: Registro de ventas. </p>
                    <p>  Una tienda de electrónica desea llevar un registro de las ventas realizadas cada día de la semana. Se desea calcular el total de ventas de la semana y mostrar el promedio diario de ventas. </p>
                    <p><img src ="imagen/Captura25.png"></p><br>

                    <p> Ejemplo 2: Sistema de gestión de empleados.</p>
                    <p>Una empresa necesita un sistema de gestión de empleados que almacene información como nombre, edad y departamento al que pertenece cada empleado. También necesita poder agregar nuevos empleados y buscar empleados por departamento. </p>
                    <p><img src ="imagen/Captura26.png"></p><br>

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