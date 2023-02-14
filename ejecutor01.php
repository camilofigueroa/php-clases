<?php

    //Se incluye un archivo llamado Modelo01, no se sabe si es clase o es código estructurado.
    include( "Controlador01.php" );

    echo Controlador01::$ficha;
    echo "<br>";

    //Se instancia la clase.
    //Ojo, aquí se ejecuta el constructor incluso si no tiene código habilitado.
    $objetoControladorA = new Controlador01();
    
    //Al ejecutar el constructor la ficha se altera.
    echo Controlador01::$ficha;
    echo "<br>";

    //Este número cambiará en cada ejecución.
    echo $objetoControladorA->notaApreciativa;
    echo "<br>";

    //Ejecutamos un método del controlador y lo imprimimos.
    echo $objetoControladorA->sumar( 1, 3 );
    echo "<br>";

    //Ejecutamos un método que llama internamente a otro método.
    echo $objetoControladorA->promediar( 3.5, 4.2 );

    echo "<hr>"; //Se separan las dos instancias con una línea.

    //Se instancia la clase otra vez.
    //Vuelve y se ejecuta el constructor.
    $objetoControladorB = new Controlador01();

    //La ficha debe ser la misma.
    echo Controlador01::$ficha;
    echo "<br>";

    //Este número cambiará en cada ejecución y más si es otra instancia.
    echo $objetoControladorA->notaApreciativa;
    echo "<br>";

    echo "<hr>";

    //Una clase llama a su método estático sin necesidad de instanciar.
    echo Controlador01::capitalizar( "pepito PErez" );
    echo "<br>";
    //Una instancia puede llamar a un método estático pero no al revés.
    echo $objetoControladorA->capitalizar( "marIA lopez" );
    echo "<br>";