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
    <title>Portfólio - DS Instalações Elétricas</title>

    <meta name="keywords" content="portfolio eletricista, trabalhos de eletricista, serviços executados, portfolio" />
    <meta name="description" content="Portfólio do seu eletricista em Florianópolis">
</head>
<body>

    <!-- HEADER -->
    <?php include "./header.html" ?>

    <div id="content-wrapper">

        <!-- TT-PAGELABEL -->
        <div class="tt-pagelabel background-block" style="background-image:url(img/breadcrumbs/breadcrumbs.jpg);">
            <div class="container">
                <h1 class="tt-pagelabel-title">Projetos</h1>
            </div>
        </div>

        <!-- TT-BREADCRUMB -->
        <div class="tt-breadcrumbs-wrapper">
            <div class="container">
                <ul class="tt-breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li><span>Projetos</span></li>
                </ul>
            </div>
        </div>


        <div class="bg-1">
            <div class="container">
                <div class="empty-space marg-lg-b80 marg-md-b50 marg-xs-b30"></div>

                <!-- TT-TAB-WRAPPER TYPE-1 -->
                <div class="tt-filter type-1 isotope">
                    <div class="tt-filter-select isotope-select mbottom35">
                        <div class="select-arrow"><i class="fa fa-angle-down"></i></div>
                        <select>
                            <option value="*" selected="">Todos</option>
                            <option value=".celesc">PADRÃO</option>
                            <option value=".comercial">Comercial</option>
                            <option value=".iluminacao">Iluminação</option>
                            <option value=".lustres">Lustres</option>
                            <option value=".piscinas">Piscinas</option>
                            <option value=".quadros">Quadros</option>
                            <option value=".residencial">Residencial</option>
                        </select>                            
                    </div>

                    <ul class="isotope-nav mbottom35">
                        <li class="selected"><a href="#todos" data-filter="*">Todos</a></li>
                        <li><a href="#celesc" data-filter=".celesc">PADRÃO</a></li>
                        <li><a href="#comercial" data-filter=".comercial">Comercial</a></li>
                        <li><a href="#iluminacao" data-filter=".iluminacao">Iluminação</a></li>
                        <li><a href="#lustres" data-filter=".lustres">Lustres</a></li>
                        <li><a href="#piscinas" data-filter=".piscinas">Piscinas</a></li>
                        <li><a href="#quadros" data-filter=".quadros">Quadros</a></li>
                        <li><a href="#residencial" data-filter=".residencial">Residencial</a></li>
                    </ul>

                    <div class="row">                           
                        <div class="isotope-content">
                            <div class="grid-sizer col-xs-6 col-sm-1"></div>
                            <div class="isotope-item comercial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/1-a.jpg" height="270" width="520" alt="comercial">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Tubulação" href="img/portfolio/1.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">comercial</a>
                                            <span class="simple-text">Tubulação para apartamentos</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item lustres residencial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/2-a.jpg" height="245" width="270" alt="lustres">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Lustres" href="img/portfolio/2.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">lustres</a>
                                            <span class="simple-text">Instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item iluminacao residencial col-xs-12 col-sm-4 col-md-6">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/3-a.jpg" height="520" width="570" alt="Iluminação">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Iluminação" href="img/portfolio/3.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Iluminação</a>
                                            <span class="simple-text">Inspeção e instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item celesc residencial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/4-a.jpg" height="245" width="270" alt="Disjuntor padrão">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Disjuntor padrão" href="img/portfolio/4.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Disjuntor padrão</a>
                                            <span class="simple-text">Montagem completa</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item lustres residencial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/5-a.jpg" height="245" width="270" alt="Lustres">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Lustres" href="img/portfolio/5.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Lustres</a>
                                            <span class="simple-text">Inspeção e instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item iluminacao col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/7-a.jpg" height="520" width="270" alt="Iluminação">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Iluminação" href="img/portfolio/7.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Iluminação</a>
                                            <span class="simple-text">Instalação e montagem</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>                            
                            <div class="isotope-item iluminacao piscinas col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/8-a.jpg" height="245" width="270" alt="Piscinas">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Piscinas" href="img/portfolio/8.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Piscinas</a>
                                            <span class="simple-text">Iluminação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item comercial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/6-a.jpg" height="245" width="270" alt="Comercial">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Instalações elétricas" href="img/portfolio/6.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Comercial</a>
                                            <span class="simple-text">Inspeção e Instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item comercial col-xs-12 col-sm-8 col-md-6">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/9-a.jpg" height="245" width="570" alt="Comercial">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Comercial" href="img/portfolio/9.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Comercial</a>
                                            <span class="simple-text">Inspeção e Instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item quadros col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/10-a.jpg" height="245" width="270" alt="Quadro de disjuntores">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Quadro de disjuntores" href="img/portfolio/10.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Quadro de disjuntores</a>
                                            <span class="simple-text">Inspeção, Montagem e Instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item iluminacao residencial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/11-a.jpg" height="245" width="270" alt="Iluminação">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Garagem" href="img/portfolio/11.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Iluminação</a>
                                            <span class="simple-text">Inspeção e instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item comercial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/12-a.jpg" height="520" width="270" alt="Comercial">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Comercial" href="img/portfolio/12.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Comercial</a>
                                            <span class="simple-text">Inspeção</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>                            
                            <div class="isotope-item quadros comercial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/13-a.jpg" height="245" width="270" alt="Quadro de condomínio">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Quadro de condomínio" href="img/portfolio/13.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Quadro de condomínio</a>
                                            <span class="simple-text">Comercial</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item residencial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/14-a.jpg" height="245" width="270" alt="Elétrica completa">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Instalações elétricas" href="img/portfolio/14.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Residencial</a>
                                            <span class="simple-text">Elétrica completa</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>
                            <div class="isotope-item comercial col-xs-12 col-sm-8 col-md-6">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/15-a.jpg" height="245" width="570" alt="Comercial">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Elétrica completa" href="img/portfolio/15.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Comercial</a>
                                            <span class="simple-text">Infraestrutura, tubulação e elétrica</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div> 
                            <div class="isotope-item quadros comercial col-xs-12 col-sm-4 col-md-3">
                                <div class="tt-project-2">
                                    <img class="img-responsive" src="img/portfolio/16-a.jpg" height="245" width="270" alt="Quadro de disjuntores">
                                    <span class="tt-project-2-hover">
                                        <span class="tt-project-2-btn">
                                            <!-- <a href="#"><i class="stroke-icon icon-Linked"></i></a> -->
                                            <a class="lightbox" data-title="Quadro de disjuntores" href="img/portfolio/16.jpg"><i class="stroke-icon icon-Search"></i></a>
                                        </span>
                                        <span class="tt-project-2-info">
                                            <a class="tt-project-2-link" href="javascript:void(0)">Quadro de disjuntores</a>
                                            <span class="simple-text">Inspeção, Montagem e Instalação</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="empty-space marg-lg-b30"></div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="empty-space marg-lg-b90 marg-md-b20 marg-xs-b0"></div>
                
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
                <!-- TT-BANNER FIM -->
            </div>
        </div>
       


    </div>


    <!-- FOOTER -->
    <?php include "./footer.html" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/idangerous.swiper.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagelightbox.min.js"></script>
    <script src="js/global.js"></script>
</body>

</html>
