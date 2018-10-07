<?php

class Mensagem {
	
	private $para;
	private $cc;
	private $assunto;
	private $texto;
	
	function __construct($para, $cc, $assunto, $texto) {
		$this->para = $para;
		$this->cc = $cc;
		$this->assunto = $assunto;
		$this->texto = $texto;

		$this->novaMensagem();
	}
	
	private function novaMensagem() {
		$msgXML = xmlwriter_open_memory();

		xmlwriter_set_indent($msgXML, 1);
		xmlwriter_start_document($msgXML, '1.0', 'UTF-8');

		xmlwriter_start_element($msgXML, 'mensagem');

			xmlwriter_start_element($msgXML, 'para');
			xmlwriter_text($msgXML, $this->para);
			xmlwriter_end_element($msgXML);

			xmlwriter_start_element($msgXML, 'cc');
			xmlwriter_text($msgXML, $this->cc);
			xmlwriter_end_element($msgXML); 

			xmlwriter_start_element($msgXML, 'assunto');
			xmlwriter_text($msgXML, $this->assunto);
			xmlwriter_end_element($msgXML); 

			xmlwriter_start_element($msgXML, 'texto');
			xmlwriter_text($msgXML, $this->texto);
			xmlwriter_end_element($msgXML); 

		xmlwriter_end_element($msgXML);

		xmlwriter_end_document($msgXML);

		$arquivo = "files/mensagens/enviadas/".$this->getDatetimeNow().".xml";
		$handle = fopen($arquivo, 'w') or die('Erro no arquivo: '.$arquivo);
		fwrite($handle, xmlwriter_output_memory($msgXML));
	}

	// HELPRES
	private function getDatetimeNow() {
	    $dateZone = new DateTimeZone('Brazil/East');
	    $datetime = new DateTime();
	    $datetime->setTimezone($dateZone);

	    return $datetime->format('Y\-m\-d\_h\-i\-s');
	}
	
}

?>