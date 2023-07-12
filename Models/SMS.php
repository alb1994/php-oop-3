<?php 
    class SMS extends SistemiComunicazione {
        private $notifica_lettura;
        private $accettazione_risposta;

        public function __construct(string $mittente, string $destinatario, string $oggetto, string $contenuto, string $notifica_lettura, string $accettazione_risposta) {
            parent::__construct($mittente, $destinatario, $oggetto, $contenuto);
            $this->notifica_lettura = $notifica_lettura;
            $this->accettazione_risposta = $accettazione_risposta;
        }

        public function getNotificaLettura() {
            return $this->notifica_lettura;
        }

        public function getAccettazioneRisposta() {
            return $this->accettazione_risposta;
        }

        //POLIMORFISMO SU INVIO

        public function invio() {
            return 'SMS inviato';
        }

        public function risposta() {
            return 'SMS ricevuto';
        }
    }
?>