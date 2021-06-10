
<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $cores
 */
?>
<a href="http://localhost/Carros/Usuario"><button class="button float-left">
Voltar</button></a> 
<br>
<br>
<div class="cores index content">
    <?= $this->Html->link(__('Nova Cor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('idCor') ?></th>
                    <th><?= $this->Paginator->sort('nomeCor') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cores as $core): ?>
                <tr>
                    <td><?= $this->Number->format($core->idCor) ?></td>
                    <td><?= h($core->nomeCor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $core->idCor]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $core->idCor]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $core->idCor], ['confirm' => __('Quer mesmo apagar a cor do ID # {0}?', $core->idCor)]) ?>
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
