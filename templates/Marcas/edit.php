<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marca->id],
                ['confirm' => __('Quer mesmo apagar a Marca de ID # {0}?', $marca->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="marcas form content">
            <?= $this->Form->create($marca) ?>
            <fieldset>
            <h4><center><?= __('Editar Marca') ?></center></h5>
                <?php
                    echo $this->Form->control('nome');
                    $this->Form->control('idModelo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
