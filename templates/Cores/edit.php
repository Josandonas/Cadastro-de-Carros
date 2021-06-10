<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $core
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $core->idCor],
                ['confirm' => __('Quer mesmo apagar a cor do ID # {0}?', $core->idCor), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Cores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cores form content">
            <?= $this->Form->create($core) ?>
            <fieldset>
            <h4><center><?= __('Editar Cor') ?></center></h5>
                <?php
                    echo $this->Form->control('nomeCor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
