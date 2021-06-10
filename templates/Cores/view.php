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
            <?= $this->Html->link(__('Editar Cor'), ['action' => 'edit', $core->idCor], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $core->idCor], ['confirm' => __('Quer mesmo apagar a cor do ID # {0}?', $core->idCor), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Cores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Cor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cores view content">
            <h3><?= h($core->idCor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cor:') ?></th>
                    <td><?= h($core->nomeCor) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
