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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand">Painel</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li></li>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <br>
        <div class="container-fluid">
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#ModalAdicionar">Novo Cadastro <i class="bi bi-plus-circle" style="font-size: 20px;"></i></button>
                <table class="table table-secondary table-bordered caption-top">
                <caption><h1 class="text-black" align="center"> Gerenciador </h1></caption>
                    <thead>
                        <tr>
                            <th class="text-center">Código</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th class="text-center"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario as $usuario): ?>
                        <tr>
                            <td class="text-center"><?= h($usuario->id)  ?></td>
                            <td><?= h($usuario->marca)  ?></td>
                            <td><?= h($usuario->modelo) ?></td>
                            <td><?= h($usuario->cor)    ?></td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-warning" type="button"><?=$this->Html->link(__('Editar'), ['action' => 'edit', $usuario->id]) ?><i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-danger" data-toggle="modal" type="button" data-target="#apagando<?php echo $usuario->id; ?>">Apagar<i class="bi bi-trash-fill"></i></button>
                                    <div class="modal fade" id="apagando<?php echo $usuario->id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header"> 
                                                    <h5>Aviso <i class="bi bi-exclamation-triangle"></i></h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                <blockquote class="blockquote">
                                                        Você deseja apagar o carro de modelo <strong><?php echo $usuario->modelo ?></strong> do código <strong><?php echo $usuario->id ?></strong>.
                                                        </blockquote>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                        <button type="button" class="btn btn-danger" ><?= $this->Form->postLink(__('Sim, Tenho Certeza'), ['action' => 'delete', $usuario->id]) ?> <i class="bi bi-trash-fill"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php $this->fetch('postlink') ?>
                    </tbody>
                </table>
                <br>
                <? if($this->Paginator->counter(__('{{pages}}')) > 1 ){?>
                <ul class="pagination justify-content-center">
                    <div class="d-grid gap-5 d-md-block">
                    
                        <? if($this->Paginator->counter(__('{{count}}')) < 5 ){?>
                            <button class="btn btn-dark"><?= $this->Paginator->first(__('Primeiro')) ?></button>
                        
                        <?}?> 
                            <button class="btn btn-dark"><?= $this->Paginator->prev(__('Anterior')) ?></button>
                            <button class="btn btn-dark"> <?= $this->Paginator->next(__('Próxima')) ?></button>
                        <? if($this->Paginator->counter(__('{{page}}')) < $this->Paginator->counter(__('{{pages}}')) ){ ?>
                            <button class="btn btn-dark"><?= $this->Paginator->last(__('Última')) ?></button>
                        <?}?>
                    
                    </div>
                </ul>
                <?}?>
                <div class="text-center"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Registros {{current}} de {{count}} no total')) ?><div>
        </div>
    </body>
</html>
<div class="modal fade" id="ModalAdicionar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">    
    <div class="modal-dialog">
        <div class="modal-content">
            <br>
            <thead class="mb-3">
                <div class="row">
                    <div class="col-6">
                        <h4><i class="bi bi-stoplights"></i> Novo Carro <i class="bi bi-stoplights"></i></h4>
                    </div>
                    <div class="col-6">
                        <div class="d-flex justify-content-end" style="padding: 0.25em 1.25em !important;">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                    </div>
                </div>
            </thead>
            <div class="usuario form content">
                <?= $this->Form->create()?>
                <div class="modal-body">
                    <fieldset>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="modelo">Modelo</span>
                            <select class="form-select" type="text"
                                name="modelo" required="required"
                                id="modelo" maxlength="30">
                                    <option selected >Selecione um Item</option>
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
                                    <option selected>Selecione um Item</option>
                                        <?php foreach ($marcas as $marcas): ?>
                                    <option><?= h($marcas->nome) ?></option>
                                        <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="cor">Cor</span>
                            <select class="form-select" type="text" name="cor"
                            required="required" id="cor" maxlength="20">
                                <option selected>Selecione um Item</option>
                                    <?php foreach ($cores as $cores): ?>
                                <option><?= h($cores->nomeCor) ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </fieldset>
                </div>    
                <div class="modal-footer">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="Submit" class="btn btn-success"><i class="bi bi-clipboard-check"></i> Salvar</button>
                </div>
                </div>
                <?= $this->Form->end() ?>  
            </div>
        </div>
    </div>
</div>