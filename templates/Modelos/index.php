<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo[]|\Cake\Collection\CollectionInterface $modelos
 */
?>
<a href="http://localhost/Carros/Usuario"><button class="button float-left">
Voltar</button></a> 
<br>
<br>
<div class="modelos index content">
    <?= $this->Html->link(__('Novo Modelo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modelos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Modelos') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelos as $modelo): ?>
                <tr>
                    <td><?= h($modelo->nomeModelo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $modelo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $modelo->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $modelo->id], ['confirm' => __('Quer mesmo apagar o Modelo {0}?', $modelo->nomeModelo)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
            <?= $this->Paginator->last(__('Último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Registros {{current}} de {{count}} no total')) ?></p>
    </div>
</div>
