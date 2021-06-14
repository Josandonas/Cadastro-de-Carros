<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 *              
 */
//  $this->Html->link(__('List Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) 
$this->disableAutoLayout();
$cakeDescription = 'Edição';
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
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>        
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand">Página de Edição</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown">
                                <a class="nav-link active" aria-current="page" href="http://localhost/Carros">Voltar <i class="bi bi-house-door"style="font-size: 25px;"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="http://localhost/Carros/pages/home">Estado da Aplicação <i class="bi bi-wrench"style="font-size: 25px;"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container" style="padding-top: 20px;">
            <div class="card ">
                <div class="card-header">
                    <h4><center>Edição de Dados <i class="bi bi-pencil-fill"></i></center></h5>
                </div>
                <div class="card-body">
                    <?= $this->Form->create($usuario) ?>
                    <fieldset>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="modelo">Modelo</span>
                            <select class="form-select" type="text"
                                name="modelo" required="required"
                                id="modelo" maxlength="30">
                                    <option selected ><? echo $usuario->modelo?></option>
                                        <?php foreach ($modelos as $modelos): ?>
                                    <option><?= h($modelos->nomeModelo) ?></option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="marca">Marca</span>
                            <select class="form-select"
                                name="marca" id="marca" required="required"
                                id="marca" maxlength="30">
                                    <option selected><? echo $usuario->marca?></option>
                                        <?php foreach ($marcas as $marcas): ?>
                                    <option><?= h($marcas->nome) ?></option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                                
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="cor">Cor</span>
                            <select class="form-select" type="text" name="cor"
                            required="required" id="cor" maxlength="20">
                                <option selected><? echo $usuario->cor?></option>
                                    <?php foreach ($cores as $cores): ?>
                                <option><?= h($cores->nomeCor) ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </fieldset>    
                </div>         
                <div class="card-footer">
                    <center><button type="Submit" class="btn btn-success"><i class="bi bi-clipboard-check"></i> Salvar Edição</button></center>
                </div>
                <?= $this->Form->end() ?>   
            </div>
        </div>
    </body>
</html>

