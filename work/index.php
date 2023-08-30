<?php
// $lang = pb | en
$lang = (isset($_REQUEST['lang']) && $_REQUEST['lang'] !== '') ? $_REQUEST['lang']: 'pb';
$arrData = [
    'title' => [
        'pb' => 'MPDV Digital',
        'en' => 'Digital MPDV',
    ],

    'headerImpact' => [
        'pb' => 'CHEGOU A HORA DE IMPACTAR',
        'en' => 'IT\'S TIME TO IMPACT',
    ],
    'headerImpact2' => [
        'pb' => 'O PONTO DE VENDA COM O MPDV',
        'en' => 'THE POINT OF SALE WITH DIGITAL',
    ],
    'headerImpact3' => [
        'pb' => 'DIGITAL',
        'en' => 'MPDV',
    ],

    'headerRelease' => [
        'pb' => 'UM LANÇAMENTO QUE CHEGOU',
        'en' => 'A NEW LAUNCH THAT HAS ARRIVED',
    ],
    'headerRelease2' => [
        'pb' => 'PARA INOVAR O VAREJO BRASILEIRO!',
        'en' => 'TO INNOVATE BRAZILIAN RETAIL!',
    ],
    'headerReleaseText' => [
        'pb' => 'A <strong>Ciclo Comunicação Criativa</strong> encontrou um jeito de inovar a maneira de chamar
            atenção para as gôndolas, através do <strong>MPDV Digital</strong>. Uma solução de sinalização
            exclusiva que só a gente pode oferecer no Brasil, destacando <strong>sua marca</strong> nas
            gôndulas e <strong>aumentando sua performance na loja</strong>.',
        'en' => '<strong>Ciclo Comunicação Criativa</strong> has found a way to innovate the way of drawing attention to gondolas,
            through MPDV Digital. An exclusive signage solution that only we can offer in Brazil,
            highlighting your brand on the shelves and <strong>increasing your in-store performance</strong>.',
    ],

    'gifMpdvUrl' => [
        'pb' => 'img/giff-mpdv-ciclo-.gif',
        'en' => 'img/giff-mpdv-ciclo-en.gif',
    ],

    'bulletsTitle' => [
        'pb' => 'TOTALMENTE PERSONALIZÁVEIS!',
        'en' => 'FULLY CUSTOMIZABLE!',
    ],
    'bulletsColors' => [
        'pb' => 'DIFERENTES CORES, FORMATOS E TAMANHOS',
        'en' => 'DIFFERENT COLORS, SHAPES AND SIZES',
    ],
    'bulletsOperation' => [
        'pb' => 'OPERAÇÃO, INSTALAÇÃO E MANUTENÇÃO SIMPLES',
        'en' => 'SIMPLE OPERATION, INSTALLATION AND MAINTENANCE',
    ],
    'bulletsSlim' => [
        'pb' => 'FINOS, LEVES E DURÁVEIS',
        'en' => 'SLIM, LIGHTWEIGHT AND DURABLE',
    ],
    'bulletsBattery' => [
        'pb' => '<strong>ALIMENTADOS POR BATERIA</strong> (ATÉ 12 MESES DE DURAÇÃO E PODEM SER SUBSTITUÍDAS)',
        'en' => '<strong>BATTERY-POWERED</strong> (UP TO 12 MONTHS AND CAN BE REPLACED)',
    ],
    'bulletsRefrigerated' => [
        'pb' => 'PODE SER UTILIZADO EM ÁREAS REFRIGERADAS DE ATÉ 4 GRAUS',
        'en' => 'CAN BE USED IN REFRIGERATED AREAS UP TO 4 DEGREES',
    ],
    'bulletsCables' => [
        'pb' => 'NÃO REQUER CABOS E NEM PRECISA DE ENERGIA ELÉTRICA',
        'en' => 'DOES NOT REQUIRE CABLES OR ELECTRICITY',
    ],

    'footerInfo' => [
        'pb' => 'UM PRODUTO QUE SUPEROU AS EXPECTATIVAS
            <br />
            DE SEU LANÇAMENTO COM MÉDIA DE',
        'en' => 'A PRODUCT THAT EXCEEDED EXPECTATIONS
            <br />
            OF ITS LAUNCH WITH AN AVERAGE',
    ],
    'footerInfo2' => [
        'pb' => '66% DE AUMENTO NAS VENDAS',
        'en' => '66% INCREASE IN SALES',
    ],
    'footerInfo3' => [
        'pb' => 'Visto por <strong>75% mais consumidores</strong>, o MPDV digital é <strong>percebido 8x mais rápido</strong>
            <br />
            que sinalização estática. Testado e aprovado por redes de varejo de toda a
            <br />
            América Latina. Seja para campanhas institucionais, promoções, ativações,
            <br />
            gerenciamento de categoria ou demais ações.',
        'en' => 'Seen by <strong>75% more consumers</strong>, digital MPDV is <strong>perceived 8x faster</strong>
            <br />
            than static signage. Tested and approved by retail chains across Latin America.
            <br />
            Whether for institutional campaigns, promotions, activations,
            <br />
            category management or other actions.',
    ],
    'footerInfo4' => [
        'pb' => '<span style="font-weight: lighter;">GARANTA JÁ A PRESENÇA E A</span>
            <br />
            <span id="cf-text-5" class="font-hackney-vector">VISIBILIDADE</span>
            <br />
            QUE O <strong>SEU PRODUTO MERECE</strong>',
        'en' => '<span style="font-weight: lighter;">Get the presence and</span>
            <br />
            <span id="cf-text-5" class="font-hackney-vector">VISIBILITY</span>
            <br />
            <strong>YOUR PRODUCT DESERVES</strong>',
    ],

    'btnClickHere' => [
        'pb' => 'CLIQUE AQUI',
        'en' => 'CLICK HERE',
    ],
    'btnImpactText' => [
        'pb' => 'Vamos impactar e movimentar o ponto de vendas juntos!',
        'en' => 'Let\'s make an impact and move the point of sale together!',
    ],
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <title><?= $arrData['title'][$lang] ?? '' ?> | Ciclo Comunicação Criativa</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="row no-gutters bg-yellow">
            <div id="header-intro-container" class="col">
                <div class="container pt-5">
                    <div class="header-intro-text font-barlow">
                        <?= $arrData['headerImpact'][$lang] ?? '' ?>
                    </div>
                    <br />
                    <div class="header-intro-text font-barlow-bold">
                        <?= $arrData['headerImpact2'][$lang] ?? '' ?>
                    </div>
                    <br />
                    <div class="header-intro-text-digital text-white font-hackney-vector">
                        <?= $arrData['headerImpact3'][$lang] ?? '' ?>
                    </div>
                </div>

                <img id="arte-header" class="img-fluid" src="img/arte-top-header.gif" />
            </div>
        </div>

        <div id="container-lancamento" class="container mb-containers mt-5">
            <div class="cl-text font-barlow pt-4">
                <?= $arrData['headerRelease'][$lang] ?? '' ?>
            </div>
            <br />
            <div class="cl-text container-lancamento font-barlow-bold mb-3">
                <?= $arrData['headerRelease2'][$lang] ?? '' ?>
            </div>

            <div id="cl-descricao" class="font-barlow-semi">
                <?= $arrData['headerReleaseText'][$lang] ?? '' ?>
            </div>
        </div>

        <div id="container-gondola" class="row no-gutters bg-gondola mb-containers">
            <div id="container-mpdv" class="container text-center">
                <img id="cg-mpdv-gif" src="<?= $arrData['gifMpdvUrl'][$lang] ?? '' ?>" alt="MPDV Ciclo" class="img-fluid">
            </div>

            <div id="container-produtos" class="row">
                <div class="col-md-4">
                    <img id="prod-img-canon-blast" src="img/prod-canon-blast.gif" alt="Canon Blast" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <img id="prod-img-vitamin-water" src="img/prod-vitamin-water.gif" alt="Vitamin Water" class="img-fluid" />
                </div>
                <div class="col-md-4">
                    <img id="prod-img-monster" src="img/prod-monster.gif" alt="Monster Energy Drink" class="img-fluid" />
                </div>
            </div>
        </div>

        <div class="container" id="container-bullets">
            <div id="cb-title" class="text-center font-barlow-bold">
                <?= $arrData['bulletsTitle'][$lang] ?? '' ?>
            </div>

            <div id="cb-bullets" class="row font-barlow-bold">
                <div class="col-lg-4 col-sm-6">
                    <img src="img/01-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsColors'][$lang] ?? '' ?>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/02-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsOperation'][$lang] ?? '' ?>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/03-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsSlim'][$lang] ?? '' ?>
                </div>
                <div class="col-lg-4 col-sm-6 font-barlow">
                    <img src="img/04-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsBattery'][$lang] ?? '' ?>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/05-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsRefrigerated'][$lang] ?? '' ?>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <img src="img/06-bullet.png" class="img-fluid" />
                    <?= $arrData['bulletsCables'][$lang] ?? '' ?>
                </div>
            </div>
        </div>

        <div class="row no-gutters bg-dots pt-4 pb-4">
            <div class="col-sm-3 col-6 no-gutters">
                <img class="img-fluid" src="img/mosaico-img-1.gif" />
                <img class="img-fluid" src="img/mosaico-img-7.gif" />
            </div>
            <div class="col-sm-3 col-6 no-gutters">
                <img class="img-fluid" src="img/mosaico-img-2.gif" />
                <img class="img-fluid" src="img/mosaico-img-6.gif" />
            </div>
            <div class="col-sm-3 col-6 no-gutters">
                <img class="img-fluid" src="img/mosaico-img-3.gif" />
            </div>
            <div class="col-sm-3 col-6 no-gutters">
                <img class="img-fluid" src="img/mosaico-img-4.gif" />
                <img class="img-fluid" src="img/mosaico-img-5.gif" />
            </div>
        </div>

        <div id="container-footer" class="row no-gutters bg-yellow pt-5">
            <div class="container font-barlow">
                <div id="cf-text-1" class="text-center">
                    <?= $arrData['footerInfo'][$lang] ?? '' ?>
                </div>
                <div id="cf-text-2" class="text-center font-barlow-bold">
                    <?= $arrData['footerInfo2'][$lang] ?? '' ?>
                </div>
                <div id="cf-text-3" class="text-center mt-5 mb-5">
                    <?= $arrData['footerInfo3'][$lang] ?? '' ?>
                </div>
                <div class="black-line"></div>
                <div id="cf-text-4" class="text-center mt-5 mb-3">
                    <?= $arrData['footerInfo4'][$lang] ?? '' ?>
                </div>
            </div>

            <div id="container-arte-footer">
                <img id="arte-footer-lady" class="img-fluid" src="img/footer-lady.gif" />
                <img id="arte-footer-shelf" class="img-fluid" src="img/footer-shelf.gif" />
            </div>
            <div id="container-arte-footer-small">
                <div class="row">
                    <div class="col-md-3 offset-md-3 col-5 offset-1">
                        <img id="arte-footer-lady-small" class="img-fluid" src="img/footer-lady.gif" />
                    </div>
                    <div class="col-md-3 col-5">
                        <img id="arte-footer-shelf-small" class="img-fluid" src="img/footer-shelf.gif" />
                    </div>
                </div>
            </div>
        </div>

        <div id="container-clique-aqui" class="container font-barlow-semi text-center mb-5">
            <a id="cca-button" href="javascript:;" onClick="window.open('mailto:mpdvdigital@ciclocomunicacao.com.br?subject=Contato MPDV Digital')">
                <?= $arrData['btnClickHere'][$lang] ?? '' ?>
            </a>
            <div id="cca-text-1" class="text-center font-barlow">
                <?= $arrData['btnImpactText'][$lang] ?? '' ?>
            </div>
        </div>

        <?php
        /*
        <div id="container-footer-contact" class="container font-barlow">
            <div class="row cfc-contact">
                <div class="col-lg-3 offset-lg-1 col-md-4 offset-md-1 col-12">
                    <img src="img/footer-icon-1.jpg" alt="Onde estamos" class="img-fluid" />

                    <strong>Onde estamos:</strong>
                    <br />
                    R. Helena Steimberg, 1456
                    <br />
                    Nova Campinas, Campinas / SP
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="img/footer-icon-2.jpg" alt="Email" class="img-fluid" />

                    <strong>Email:</strong>
                    <br />
                    contato@ciclocomunicacao.com.br
                    <br />
                    anapaula@ciclocomunicacao.com.br
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <img src="img/footer-icon-3.jpg" alt="Telefone" class="img-fluid" />

                    <strong>Telefone:</strong>
                    <br />
                    +55 (19) 3213.3871
                </div>
            </div>
            <div class="grey-line"></div>
        </div>
        */
        ?>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
</html>