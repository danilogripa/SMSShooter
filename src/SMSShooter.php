<?php

/*
 *
 * Banco de dados
 * id, number, message, priority, modem, saveDate, sendDate
 *
 */

class SMSShooter {


    public $number;
    public $message;
    public $priority;

    public function __construct($number = null, $message = null, $priority = null) {
        $this->message = $message;
        $this->number = $number;
        $this->priority = $priority;
    }

//    public function send(){}
//    public function send($number, $message, $priority = null){}
    public function send($number = null, $message = null, $priority = null){
        /*
         *
         * salva no banco de dados a msg, o numero, e prioridade
         * se der problema no banco de dados cria um arquivo local com as mensagens
         * adiciona na fila de envio
         * 
         */
    }

    public function saveToDatabase(){}

    public function updateDatabase(){}

    public function saveToPool(){}

    public function checkPool(){}

    public function removeFromPool(){}

    public function checkModem(){}

    public function verifyDongleSent(){}

    public function saveToFile(){}

    public function checkFile(){}

    public function cleanFile(){}

    public function sendingRoutine(){
        /*
         * Roda a cada 5 min
         * 
         * verifica qual modem está disponivel
         * verifica se tem um arquivo com mensagens para serem enviadas caso tenha envia por order de prioridade
         * verifica se tem mensagens na fila de envio caso tenha envia por ordem de prioridade
         * verifica quais mensagens foram enviadas
         * caso alguma mensagem não tenha sido enviada ela é adicionada novamente na fila
         * limpa o arquivo e a fila de envio, mantendo as que devem ser enviadas novamente
         * atualiza o banco de dados com as que foram enviadas
         *
         */
    }

}
