<?php
require_once __DIR__.'/Models/SistemiComunicazione.php';
require_once __DIR__.'/Models/Allegato.php';
require_once __DIR__.'/Models/Email.php';
require_once __DIR__.'/Models/SMS.php';

$email = new Email('mittente@example.com', 'destinatario@example.com', 'Oggetto dell\'email', 'Contenuto dell\'email', 'allegato.pdf', 'Notifica di consegna abilitata');

echo 'Mittente: ' . $email->getMittente() . '<br>';
echo 'Destinatario: ' . $email->getDestinatario() . '<br>';
echo 'Oggetto: ' . $email->getOggetto() . '<br>';
echo 'Contenuto: ' . $email->getContenuto() . '<br>';
echo 'Allegato: ' . $email->getAllegato() . '<br>';
echo 'Notifica di consegna: ' . $email->getNotificaConsegna() . '<br>';
echo 'Invio email: ' . $email->invio();


$sms = new SMS('mittente', 'destinatario', 'Oggetto del SMS', 'Contenuto del SMS', 'Notifica di lettura abilitata', 'Accettazione della risposta abilitata');
echo 'Mittente del SMS: ' . $sms->getMittente() . '<br>';
echo 'Destinatario del SMS: ' . $sms->getDestinatario() . '<br>';
echo 'Oggetto del SMS: ' . $sms->getOggetto() . '<br>';
echo 'Contenuto del SMS: ' . $sms->getContenuto() . '<br>';
echo 'Notifica di lettura del SMS: ' . $sms->getNotificaLettura() . '<br>';
echo 'Accettazione della risposta del SMS: ' . $sms->getAccettazioneRisposta() . '<br>';
echo 'Invio SMS: ' . $sms->invio() . '<br>';
echo 'Risposta al SMS: ' . $sms->risposta();
?>
