<?php 
    class SistemiComunicazione {
        private $mittente;
        private $destinatario;
        private $oggetto;
        private $contenuto;

        public function __construct($mittente, $destinatario, $oggetto, $contenuto) {
            $this->mittente = $mittente;
            $this->destinatario = $destinatario;
            $this->oggetto = $oggetto;
            $this->contenuto = $contenuto;
        }

        public function setMittente($mittente) {
            $this->mittente = $mittente;
        }

        public function getMittente() {
            return $this->mittente;
        }

        public function setDestinatario($destinatario) {
            $this->destinatario = $destinatario;
        }

        public function getDestinatario() {
            return $this->destinatario;
        }

        public function setOggetto($oggetto) {
            $this->oggetto = $oggetto;
        }

        public function getOggetto() {
            return $this->oggetto;
        }

        public function setContenuto($contenuto) {
            $this->contenuto = $contenuto;
        }

        public function getContenuto() {
            return $this->contenuto;
        }

        public function invio() {
            return 'Inviato';
        }
    }
?>