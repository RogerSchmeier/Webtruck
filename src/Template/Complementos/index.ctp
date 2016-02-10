<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?></li>
         </ul>
</div>
<div class="complementos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($complementos as $complemento): ?>
        <tr>
            <td><?= $this->Number->format($complemento->id) ?></td>
            <td><?= h($complemento->nome) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $complemento->id], ['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $complemento->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $complemento->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $complemento->id)]) ?>
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
