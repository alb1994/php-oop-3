<?php 
    class Email extends SistemiComunicazione {
        public $allegato;
        public $notifica_consegna;

        public function __construct($mittente, $destinatario, $oggetto, $contenuto, $allegato, $notifica_consegna) {
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
            $this->allegato = $allegato;
            $this->notifica_consegna = $notifica_consegna;
        }

        public function setAllegato($allegato) {
            $this->allegato = $allegato;
        }

        public function getAllegato() {
            return $this->allegato;
        } 

        public function setNotificaConsegna($notifica_consegna) {
            $this->notifica_consegna = $notifica_consegna;
        }

        public function getNotificaConsegna() {
            return $this->notifica_consegna;
        } 

        public function invio() {
            return 'Email inviata';
        }
    } 
?>