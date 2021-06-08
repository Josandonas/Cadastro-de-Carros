<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<?= $this->Html->link(__('Voltar'), ['action' => 'home'], ['class' => 'button float-left']) ?>
<br>
<br>
<div class="marcas index content">
    <?= $this->Html->link(__('Nova Marca'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Marcas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('idModelo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($marcas as $marca): ?>
                <tr>
                    <td><?= $this->Number->format($marca->id) ?></td>
                    <td><?= h($marca->nome) ?></td>
                    <td><?= $this->Number->format($marca->idModelo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $marca->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $marca->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $marca->id], ['confirm' => __('Quer mesmo apagar a Marca de ID # {0}?', $marca->id)]) ?>
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
