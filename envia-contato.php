<?php

// testa se existe o "envia" hidden, pra seguranca - tem que ter no form na pagina um campo hidden com name envia e valor ok
// ex: <input type="hidden" name="envia" value="ok" />
if ( isset( $_POST['envia'] ) && $_POST['envia'] == 'ok' )
{
	// recaptcha (comentado ate por um)
	/*
	$recaptchaResponse = $_POST['g-recaptcha-response'];

	$secret = '6LdCR9IUAAAAADQhgv_Fhy9HWbLVFQj6G_Qh5NHE';

	$url = 'https://www.google.com/recaptcha/api/siteverify';

	$data1 = array('secret' => $secret, 'response' => $recaptchaResponse);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$response = curl_exec($ch);
	curl_close($ch);

	$status = json_decode($response, true);

	if ( $status['success'] )
	{
		//faz nada
	}
	else
	{
		echo '<html>
				<head><title>Erro :(</title></head>
					<body>
					<script>alert("Você precisa clicar em *Não sou um robô* para enviar um contato.\nPor gentileza, tente novamente.")</script>
					</body>
			  </html>';
			
		echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
				URL='https://felipelima.com.br/#contact'\">";
			die();
	}
	*/
	// fim recaptcha

	function enviaEmail($nome,$de,$para,$mensagem,$assunto)
	{
		$headers= "From: $nome <$de>\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\b";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "X-Priority: 1\r\n";

		$manda = mail($para, $assunto, $mensagem, $headers);

		if ( !$manda )
		{
			return false;

		}
		else
		{
			return true;
		}
	}

	// pega a pagina de onde enviou o contato - pra isso tem que ter um campo hidden com o name="pagina" e value com o nome da pagina
	// ex: <input type="hidden" name="pagina" value="Página de contato" />
	if ( !isset( $_POST['pagina'] ) || empty( $_POST['pagina'] ) )
	{
		$pagina = "Desconhecida";

	}
	else
	{
		$pagina = $_POST['pagina'];
	}

	// dados para o e-mail
	$assunto  = 'Contato pela página: '.$pagina;


	$nome 	  = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
	$email 	  = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);
	//$assunto  = filter_var($_POST['assunto'], FILTER_SANITIZE_STRING);
	$msg	  = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);



	$msg = "
	Olá! Foi enviado um novo contato pelo site DS Instalações Elétricas.<br>
	Seguem abaixo os detalhes:<br><br>

	Enviado pela página: <b>$pagina</b><br>

	Nome: <b>$nome</b><br>
	e-mail do cliente: <b>$email</b><br>
	Telefone: <b>$telefone</b><br>

	Mensagem: <b>$msg</b><br><br>
	";

	// envia o e-mail
	$enviaEmail = enviaEmail($nome,$email,'contato@dseletricista.com.br',$msg,$assunto);

	// testa se enviou o email
	if ( $enviaEmail )
	{
		echo '<html>
				<head><title>Sucesso</title></head>
					<body>
					<script>alert("Sua mensagem foi enviada.\nRetornamos em breve!\nObrigado.")</script>
					</body>
			  </html>';

			echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
				URL='https://dsinstalacoeseletricas.com.br/'\">";
	}
	else
	{
		echo '<html>
				<head><title>Erro :(</title></head>
					<body>
						<script>alert("Ocorreu um erro e sua mensagem NÃO foi enviada.\nPor gentileza, tente novamente ou nos avise por telefone.\nObrigado.")</script>
					</body>
			  </html>';

			echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
				URL='https://dsinstalacoeseletricas.com.br/contato.html'\">";
	}

}
else
{
	echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
		URL='https://dsinstalacoeseletricas.com.br/'\">";

}
