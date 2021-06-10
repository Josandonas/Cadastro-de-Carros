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
            <?= $this->Html->link(__('Editar Modelo'), ['action' => 'edit', $modelo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $modelo->id], ['confirm' => __('Quer mesmo apagar o Modelo de ID # {0}?', $modelo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Modelos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Modelo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="modelos view content">
            <table>
                <tr>
                    <th><?= __('Modelo:') ?></th>
                    <td><?= h($modelo->nomeModelo) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
