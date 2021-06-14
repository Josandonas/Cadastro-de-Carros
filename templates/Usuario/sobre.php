<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $cores
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
$this->disableAutoLayout();
$cakeDescription = 'Página de Cadastro de Carros';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css(['paginas']) ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body id="edicao">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand">Sobre</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>                    
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav active">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/Carros">Voltar <i class="bi bi-house-door"style="font-size: 25px;"></i></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Relatórios <i class="bi bi-file-text" style="font-size: 25px;"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="http://localhost/Carros/Cores">Relatório de Cores <i class="bi bi-file-earmark-bar-graph"></i></a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Carros/Modelos">Relatório de Modelos <i class="bi bi-file-earmark-bar-graph"></i></a></li>
                                    <li><a class="dropdown-item" href="http://localhost/Carros/Marcas">Relatório de Marcas <i class="bi bi-file-earmark-bar-graph"></i></a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/Carros/pages/home">Estado da Aplicação <i class="bi bi-wrench"style="font-size: 25px;"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/Carros/Usuario/sobre">Sobre <i class="bi bi-info-circle" style="font-size: 26px;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container" style="padding-top: 19px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                    <div class="card-body">
                        <div class="text-center"><h5 class="card-title">Sobre o Projeto</h5></div>
                        <br>
                        <p class="card-text" style="text-justify: auto; margin-left:19px;">Em si o projeto tem o intuito de lidar coma a mecânica de implementação de um CRUD (create,read,update,delete), portanto os devidos cuidados </p>
                        <p>foram tomados e por incrível que pareça a experiência foi incrível!</p>
                        <a href="http://localhost/Carros" class="btn btn-primary">Voltar ao Painel!</a>
                    </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                    <?echo $this->Html->image("antiguidade.jpg", ['fullBase' => true]);?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slide 1</h5>
                    </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                    <?echo $this->Html->image("lamborguini-laranja.jpg", ['fullBase' => true]);?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slide 2</h5>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <?echo $this->Html->image("mostraCarros.jpg", ['fullBase' => true]);?>
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Slide 3</h5>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </body>
</html>