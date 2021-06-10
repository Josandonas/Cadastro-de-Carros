<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $cores
 */
// $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id])
$this->disableAutoLayout();
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
                    
                    <div class="form-inline">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="form-inline">
                            <ul class="navbar-nav ">
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
                    </div>
                </div>
            </nav>
        </header>
        <br>
        <div class="container">
            <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalAD">Novo Cadastro <i class="bi bi-plus-lg" style="font-size: 20px;"></i></button>
                <table class="table table-secondary table-bordered caption-top">
                <caption><h1 class="text-black" align="center"> Gerenciador </h1></caption>
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cor</th>
                            <th class="text-center"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuario as $usuario): ?>
                        <tr>
                            <td><?= h($usuario->marca)  ?></td>
                            <td><?= h($usuario->modelo) ?></td>
                            <td><?= h($usuario->cor)    ?></td>
                            <td class="text-center">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-warning" type="button" >Editar <i class="bi bi-pencil-fill"></i></button>
                                    <button class="btn btn-danger" type="button"> <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $usuario->id], ['confirm' => __('Tem certeza que deseja Apagar', $usuario->id)]) ?> <i class="bi bi-trash-fill"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php $this->fetch('postlink') ?>
                    </tbody>
                </table>
                <br>
                <ul class="pagination justify-content-center">
                    <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
                    <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                    <?= $this->Paginator->last(__('Último') . ' >>') ?>
                </ul>
                <div class="form-inline"><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Registros {{current}} de {{count}} no total')) ?></div>
        </div>
    </body>
    <div class="modal fade" id="modalAD" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <div class="text-center"><h5 class="modal-title">Novo Registro</h5></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <?= $this->Form->create($usuario) ?>
                <fieldset>
                    <div class="form-group">
                <label>Modelo</label>
                <select class="form-select" name="modelo" id="modelo">
                    <option selected >Selecione um Item</option>
                        <?php foreach ($modelos as $modelos): ?>
                    <option><?= h($modelos->nomeModelo) ?></option>
                        <?php endforeach; ?>
                   
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Marca</label>
                <select class="form-select" name="marca" id="marca">
                    <option selected>Selecione um Item</option>
                        <?php foreach ($marcas as $marcas): ?>
                    <option><?= h($marcas->nome) ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Cor</label>
                <select class="form-select" name="cor" id="cor">
                    <option selected>Selecione um Item</option>
                        <?php foreach ($cores as $cores): ?>
                    <option><?= h($cores->nomeCor) ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="text-center"><button type="Submit" class="btn btn-success btn-lg">Salvar</button></div>
            <br>
        <!-- <div>Marca:<br> <input type="text" name="marca" id="marca" class="form-control" maxlength="40" required autofocus></div>
        <div>Modelo:<br> <input type="text" name="modelo" id="modelo" class="form-control" maxlength="5000" required autofocus></div>            
        <div>Cor:<br> <textarea type="text-area" name="cor" id="cor" class="form-control" maxlength="6000" required autofocus></textarea> -->
                </fieldset>
            <?= $this->Form->end() ?>        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        
        </div>
    </div>

</div>
</html>


