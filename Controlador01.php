<?php

    class Controlador01
    {

        public static $ficha = -1;
        public $notaApreciativa; //Ojo, aquí no se puede asignar. = rand( 0, 5 );

        /**
         * En otros lenguajes y anteriores versiones de php el constructor se llamaba
         * igual que la clase.
         * Para este caso, cuando se instancia la clase, se ejcuta automáticamente el constructor.
         */
        function __construct()
        {
            //Se debe quitar el comentario para comprobar la ejecución del constructor.
            //echo "Este método se ejecuta al instanciar la clase.";
            self::$ficha = 2500711;
            $this->notaApreciativa = rand( 0, 5 );
        }

        /**
         * Este método ya no es el constructor y se ejecuta cunado se llama.
         * Es un método público, no estático.
         * @return      texto       Saludo.
         */
        function sumar( $a, $b )
        {
            //
            return $a + $b;
        }

        /**
         * Realiza el cálculo del promedio de dos notas.
         * @param       número      Nota 1
         * @param       número      Nota 2
         * @return      número      Promedio calculado.
         */
        public function promediar( $nota1, $nota2 )
        {
            //Para llamar a un método interno instanciado se usa el operador $this->
            return $this->sumar( $nota1, $nota2 ) / 2;
        }

        /**
         * Arregla a matúsculas la priemra letra de nombres y apellidos.
         * @param       texto       Un nombre propio.
         * @return      texto       Un nombre propio arreglado.
         */
        public static function capitalizar( $nombre )
        {
            $nombre = strtolower( $nombre );
            return ucfirst( $nombre );
        }
    }