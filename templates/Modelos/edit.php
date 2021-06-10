<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo $modelo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $modelo->id],
                ['confirm' => __('Quer mesmo apagar o Modelo de ID  # {0}?', $modelo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Modelos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelos form content">
            <?= $this->Form->create($modelo) ?>
            <fieldset>
                <h4><center><?= __('Editar Modelo') ?></center></h5>
                <?php
                    echo $this->Form->control('nomeModelo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
