<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 *              
 */

// echo $this->Form->control('marca');
// echo $this->Form->control('modelo');
// echo $this->Form->control('cores');

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usuario form content">
            <?= $this->Form->create($usuario) ?>
            <fieldset>
                <h4><center><?= __('Editar Dados') ?></center></h5>
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
            <center><?= $this->Form->button(__('Salvar Edição')) ?></center>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
