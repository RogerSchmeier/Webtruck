<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
    </ul>
</div>
<div class="veiculos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('modelo') ?></th>
            <th><?= $this->Paginator->sort('marca') ?></th>
            <th><?= $this->Paginator->sort('motor') ?></th>
            <th><?= $this->Paginator->sort('chassis') ?></th>
            <th><?= $this->Paginator->sort('renavam') ?></th>
            <th><?= $this->Paginator->sort('placa') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($veiculos as $veiculo): ?>
        <tr>
            <td><?= $this->Number->format($veiculo->id) ?></td>
            <td><?= h($veiculo->modelo) ?></td>
            <td><?= h($veiculo->marca) ?></td>
            <td><?= h($veiculo->motor) ?></td>
            <td><?= h($veiculo->chassis) ?></td>
            <td><?= h($veiculo->renavam) ?></td>
            <td><?= h($veiculo->placa) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $veiculo->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $veiculo->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $veiculo->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $veiculo->id)]) ?>
                <?= $this->Html->link(__('Relatório'), ['action' => 'view_pdf', $veiculo->id], ['class'=>'btn btn-primary btn-xs']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
