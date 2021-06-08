<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modelo[]|\Cake\Collection\CollectionInterface $modelos
 */
?>
<?= $this->Html->link(__('Voltar'), ['action' => 'home'], ['class' => 'button float-left']) ?>
<br>
<br>
<div class="modelos index content">
    <?= $this->Html->link(__('Novo Modelo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Modelos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nomeModelo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($modelos as $modelo): ?>
                <tr>
                    <td><?= $this->Number->format($modelo->id) ?></td>
                    <td><?= h($modelo->nomeModelo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $modelo->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $modelo->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $modelo->id], ['confirm' => __('Quer mesmo apagar o Modelo de ID # {0}?', $modelo->id)]) ?>
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
            <?= $this->Paginator->last(__('Anterior') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Registros {{current}} de {{count}} no total')) ?></p>
    </div>
</div>
