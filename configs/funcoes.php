<?php

function ipIsBR($_ip)
{
	$retorno = false;

	$prefixos_br = array('187', '189', '200', '201');
	$prefixo_ip = substr($_ip, 0, 3);

	if (in_array($prefixo_ip, $prefixos_br))
	{
		$retorno = true;
	}
	else
	{
		$retorno = false;
	}

	return $retorno;
}

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function formataCategoria($parametro)
{
	$retorno = "";
	
	if($parametro == 'E')
		$retorno = "Para a Escola";
	elseif($parametro == 'T')
		$retorno = "Para o Trabalho";
	else
		$retorno = "Para Casa";
		
	return $retorno;
}


function formataIdioma($idiomaChar)
{
	$retorno = "";
	
	if($idiomaChar == 'E')
		$retorno = "Espanhol";
	elseif($idiomaChar == 'I')
		$retorno = "Inglês";
	else
		$retorno = "Português";
		
	return $retorno;
}

function conv_data2($datahora, $tipo=1, $dataHora = true)
{
	if( $datahora )
	{
		if($tipo==1){
			$data = substr($datahora,0,10);
			$data = substr($data, 8,2) . "/" . substr($data, 5,2) . "/" . substr($data, 0,4);
			$hora = substr($datahora,11,(strlen($datahora)-14));
		}
	
		if($tipo==2){
			$data = substr($datahora,0,10);
			$data = substr($data, -4) . "-" . substr($data, 3,2) . "-" . substr($data, 0,2);
			$hora = substr($datahora,11,(strlen($datahora)-11));
		}
		
		if($dataHora)
		{
			$retorno = $data . ' ' . $hora;
		}
		else
		{
			$retorno = $data;
		}
	
		return $retorno;
	}
}

?>