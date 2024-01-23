<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui"/>

    <!-- FONTS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="css/stroke-gap.min.css" rel="stylesheet" type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" rel="stylesheet">
    <link href="css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css?v=2" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="img/favicon-e.ico" />
  	<title>Contato - DS Instalações Elétricas</title>

    <meta name="keywords" content="contato do site, informações de contato, contato de eletricista, eletricista em florianópolis" />
    <meta name="description" content="Contato com eletricista em florianópolis">
</head>
<body>

    <?php include "./header.html" ?>

    <div id="content-wrapper">

        <!-- TT-PAGELABEL -->
        <div class="tt-pagelabel background-block" style="background-image:url(img/breadcrumbs/breadcrumbs.jpg);">
            <div class="container">
                <h1 class="tt-pagelabel-title">Contato</h1>
            </div>
        </div>

        <!-- TT-BREADCRUMB -->
        <div class="tt-breadcrumbs-wrapper">
            <div class="container">
                <ul class="tt-breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contato</span></li>
                </ul>
            </div>
        </div>

		<div class="bg-1">
	        <div class="container">
                <div class="empty-space marg-lg-b80 marg-md-b60"></div>

                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <h3 class="tt-block-title c-h3">mensagem</h3>
                        <div class="empty-space marg-lg-b50 marg-md-b30"></div>                        

                        <div class="tt-white-wrapper type-2">        
                            <div class="tt-request-form">
                                <form  action="envia-contato.php" method="post">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 class="c-input-label">Nome</h5>
                                            <input class="c-input size-2 color-2" name="nome" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="c-input-label">E-mail</h5>
                                            <input class="c-input size-2 color-2" name="email" type="email" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="c-input-label">Telefone</h5>
                                            <input class="c-input size-2 color-2" name="telefone" type="text">
                                        </div>
                                    </div>
                                   

                                    <h5 class="c-input-label">Mensagem</h5>
                                    <textarea class="c-area color-2 size-2" name="msg" ></textarea>

                                    <div class="c-btn type-1 size-2 font-2 color-4">
                                       <input type="submit" value="Enviar">
                                       <input type="hidden" name="envia" value="ok">
                                       <input type="hidden" name="pagina" value="Página Contato">
                                    </div>
                                    <span class="tt-request-success"></span>
                                </form> 
                            </div>
                        </div>
                        <div class="empty-space marg-md-b60"></div> 
                    </div>                
                    <div class="col-md-5 col-md-pull-7">
                        <h3 class="tt-block-title c-h3">Contatos</h3>
                        <div class="empty-space marg-lg-b50 marg-md-b30"></div>

                        <div class="tt-contact clearfix">
                            <div class="tt-contact-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="tt-contact-info">
                                <div class="simple-text size-3">
                                    <p style="margin-top: 10px;">Florianópolis / SC</p>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space marg-lg-b50 marg-md-b30"></div>
                        <div class="tt-contact clearfix">
                            <div class="tt-contact-icon small">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="tt-contact-info">
                                <div class="simple-text size-3">
                                    <p style="margin-top: 10px;">
                                        <a href="mailto:contato@dsinstalacoeseletricas.com.br">contato@dsinstalacoeseletricas.com.br</a><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space marg-lg-b50 marg-md-b30"></div>
                        <div class="tt-contact clearfix">
                            <div class="tt-contact-icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="tt-contact-info">
                                <div class="simple-text size-3">
                                    <p style="margin-top: 10px;">
                                        <a href="tel:+5548998414008">(48) 99841-4008</a><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space marg-lg-b85 marg-md-b30"></div>

                        <h3 class="tt-block-title c-h5">horários</h3>
                        <div class="empty-space marg-lg-b25"></div>
                        <div class="tt-working">
                            <div class="tt-working-row">
                                <div class="tt-working-cell">Segunda a Sexta :</div>
                                <div class="tt-working-cell">8h até 12h - 13h até 18h</div>
                            </div>
                            <div class="tt-working-row">
                                <div class="tt-working-cell">Sábado :</div>
                                <div class="tt-working-cell">8h até 12h</div>
                            </div>
                        </div>                                                  
                    </div>
                </div>
            </div>

            <!-- TT-CONTACT-MAP -->
            <div class="addresses-block">
                <a data-lat="51.477254" data-marker="img/marker.png" data-lng="-0.026888" data-string="1. Here is some address or email or phone or something else..."></a>                 
            </div>

            <div class="container">
                <div class="empty-space marg-lg-b50 marg-md-b10 marg-sm-b10"></div>

                <!-- TT-BANNER -->
                <div class="tt-banner">
                    <img class="tt-banner-img" src="img/banner/banner.png" height="134" width="144" alt="">
                    <div class="tt-banner-info">
                        <h4 class="tt-banner-title">24/7 Emergência ligue: <a href="tel:+5548998414008">(48) 99841-4008</a></h4>
                        <div class="simple-text size-3 color-3">
                            <p>Instalação e Manutenção | Projeto e Execução | Padrões de energia</p>
                        </div>
                    </div>
                    <div class="tt-banner-link">
                        <a class="c-btn type-1 size-4 color-5 no-radius" href="https://wa.me/5548998414008?text=Olá! Vim pelo site e gostaria de mais informações" target="_blank" rel="nofollow noopener noreferrer"><span><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</span></a>
                    </div>
                </div>
            </div>            	
		</div>
    </div>


    <?php include "./footer.html" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="js/map.js"></script>    
    <script src="js/global.js"></script>
    <!--<script >
    function submitForm() {
            $.ajax({type:'POST', url:'email-action.php', data:$('#contact-form').serialize(), success: function(response) {
               $('.submit').html('sent');
               $('.tt-request-success').html('Your message was sent successfully').addClass('active');
               document.contactform.reset();                                 
            }});                
            return false;
        }       
    </script>-->
    
</body>

</html>
