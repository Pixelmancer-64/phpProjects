<html>
	<head><title> Delimitadores PHP</title></head>

<body>
	<h1> Exemplo de uso de delimitadores PHP</h1>
	<?php
	$name = 'huguinho';
	$greetings= 'Bom dia,';
	// usando assim aparece um warning "non-numeric value encountered"
	$num = 25.3 + '13.7 coelhos';
	$all = '<b>' .$greetings.' '.$name.'</b>';
	$all .='<br /><br />';
	$chopchop = 35.278541657;
	$tomada = "";
	define('PI' , 3.14);
	$math = 1000 + 1000*0.2;
	$chop = (int)$chopchop;
	$months = array(
1 => 'Janeiro',
'Fevereiro',
'esse negócio de array é muito foda',
'o_porque' => 'por isso aqui mano'

	);
	settype($num, 'int');
	echo 'Aqui oq eu quero' .$math. '<br/><br/>';
	echo 'Oi mundoooooooooooooooo<br/><br/>';
	echo 'oi com apóstrofo<br/><br/>';
	echo $all;
	echo "Olá, $name, e se tiver mais de um, Olá ${name}s<br /><br />" ;

	echo 'Idade: ',16, ' Nome: ' ,$name,'<br/>' ;
	echo 'Idade: ' ,.16. ' Nome: ' .$name. '<br/>';
	echo $num,'<br/>','<br/>';
	echo $chopchop,'<br/>','<br/>';
	echo $chop,'<br/>','<br/>';
	echo gettype($num),'<br/>','<br/>';
	echo var_dump($all).'Var_dump';
	// var_dump(isset ($x['alguma coisa']));
	//unset ($arrayzinho['chave']); apaga o CONTEUDO da chave
	if(is_float($num)){
		echo 'Isso ai mesmo <br/><br/>';
	}else{
		echo 'ERRADO<br/><br/>';
	}

	function pr($data)
{
    echo "<pre>";
    print_r($data); // or var_dump($data);
    echo "</pre>";
}
	pr($months);
	foreach($months as $t){
		echo "UAU DEU CERTO NÉ $t <br/><br/>";
	}

	foreach($months as $chave => $aaa){
		echo "$chave = $aaa <br/><br/>";
	}

	echo "Usando uma string para chamar o array: ${months['o_porque']} <br/><br/>";
	if(isset($tomada)){
		echo 'Isso ai mesmo tomada <br/><br/>';
	}else{
		echo 'ERRADO tomada<br/><br/>';
	}

	if(empty($tomada)){
		echo 'vazio <br/><br/>';
	}else{
		echo 'INTRUSOS !! <br/><br/>';
	}
// o settype(PI, 'int') não funciona com constantes;
	echo PI,'<br/>','<br/>';
	// echo print_r( get_defined_constants());
	// potência aqui no php é **

	if(gettype($num)==gettype($chop)){
		echo 'IGUAIS <br/><br/>';
	}else{
		echo 'DIFERENTES !! <br/><br/>';
	}
	
	function teste(){
		global $num;
		echo 'Será que foi? ' .$num.'<br/>','<br/>';
	}
	teste();

	sort($months);
	pr($months);
	echo 'Tamanho: ' .sizeof($months).'<br/>','<br/>';
	//echo 'Somar array '.array_sum($num).'<br/>','<br/>';
	echo in_array('Janeiro',$months);
	//array_push quinem no java
	//array_values para as chaves em número
	echo print_r(explode('/', '27/10/2004'));
	//implode, que é o contrário
	//split separa cada letra de uma string em uma chave
	//str_replace('Original','substituidor',$variavel)

	//ltrim tira espaço do começo
	//rtrim tira espaço do final
	//trim tira de ambos

	// ucwords transforma a primeira letra em maiúscula de cada palavra se for um string maior

	// ucfirst só que apenas da primeira palavra

	//SEGUNDO DIA
	echo ("<br/><br/><br/><br/>");
	function exibir($infos){
		foreach($infos as $chave => $valor)
		echo "$chave : $valor<br/>";
	}
	function exibirPorReferencia(&$infos){
		if(gettype($infos['salario']) === 'double')
		$infos['salario']+= 1000;
		echo "{$infos['nome']} : {$infos['salario']}<br/>";
	}
	function exibirPorReferenciaComFor(&$infos){
		foreach($infos as $chave => &$valor){
			if(gettype($valor) === 'double')
			$valor +=400;
			echo "$chave : $valor<br/>";
		}
	}
	$informacoes = array(
		'nome' => 'Rafael',
		'salario' => 2600.50
	);
	exibir($informacoes);
	echo "Depois de executar a função exibir <br/>";
	var_dump($informacoes); echo "<br/><br/>";

	exibirPorReferencia($informacoes);
	echo "Depois de executar a função exibirPorReferencia<br/>";
	print_r($informacoes); echo "<br/><br/>";

	exibirPorReferenciaComFor($informacoes);
	echo "Depois de executar a função exibirPorReferenciaComFor<br/>";
	print_r($informacoes); echo "<br/><br>";

	?>
</body> 
	</html>
