<?php 
    class Libro {
        private $id;
        private $tituloLibro;
        private $autor;
        private $anioPublicacion;
                
        function __construct($id, $tituloLibro, $autor, $anioPublicacion){
            $this->id = $id;
            $this->tituloLibro =$tituloLibro;
            $this->autor = $autor;
            $this->anioPublicacion = $anioPublicacion;
        }
        public function getId(){
                return $this->id;
        }
        public function setId($id){
                $this->id = $id;
                return $this;
        }

        public function gettituloLibro(){
                return $this->tituloLibro;
        }

        public function setNombre($tituloLibro){
                $this->tituloLibro = $tituloLibro;
                return $this;
        }

        public function getautor(){
                return $this->autor;
        }

        public function setautor($autor){
                $this->autor = $autor;
                return $this;
        }
        public function getanioPublicacion(){
                return $this->anioPublicacion;
        }
        public function setanioPublicacion($anioPublicacion){
                $this->anioPublicacion = $anioPublicacion;
                return $this;
        }

    }

?>    