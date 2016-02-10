<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Motorista'), ['action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="motoristas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('CPF') ?></th>
            <th><?= $this->Paginator->sort('RG') ?></th>
            <th><?= $this->Paginator->sort('CNH') ?></th>
            <th><?= $this->Paginator->sort('data_nasc') ?></th>
            <th><?= $this->Paginator->sort('data_adm') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($motoristas as $motorista): ?>
        <tr>
            <td><?= $this->Number->format($motorista->id) ?></td>
            <td><?= h($motorista->nome) ?></td>
            <td><?= h($motorista->CPF) ?></td>
            <td><?= h($motorista->RG) ?></td>
            <td><?= h($motorista->CNH) ?></td>
            <td><?= h($motorista->data_nasc) ?></td>
            <td><?= h($motorista->data_adm) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $motorista->id], ['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $motorista->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $motorista->id], ['class'=>'btn btn-danger btn-xs'],['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $motorista->id)]) ?>
                
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
