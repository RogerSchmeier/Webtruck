<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="implementos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('modelo') ?></th>
            <th><?= $this->Paginator->sort('chassis') ?></th>
            <th><?= $this->Paginator->sort('eixos') ?></th>
            <th><?= $this->Paginator->sort('placa') ?></th>
            <th><?= $this->Paginator->sort('renavan') ?></th>
            <th><?= $this->Paginator->sort('cidade_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($implementos as $implemento): ?>
        <tr>
            <td><?= $this->Number->format($implemento->id) ?></td>
            <td><?= h($implemento->modelo) ?></td>
            <td><?= h($implemento->chassis) ?></td>
            <td><?= $this->Number->format($implemento->eixos) ?></td>
            <td><?= h($implemento->placa) ?></td>
            <td><?= h($implemento->renavan) ?></td>
            <td>
                <?= $implemento->has('cidade') ? $this->Html->link($implemento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $implemento->cidade->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $implemento->id], ['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $implemento->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $implemento->id], ['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $implemento->id)]) ?>
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
