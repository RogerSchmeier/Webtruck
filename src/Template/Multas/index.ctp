<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="multas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('local') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('valor') ?></th>
            <th><?= $this->Paginator->sort('pontos') ?></th>
            <th><?= $this->Paginator->sort('veiculo_id') ?></th>
            <th><?= $this->Paginator->sort('implemento_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($multas as $multa): ?>
        <tr>
            <td><?= $this->Number->format($multa->id) ?></td>
            <td><?= h($multa->local) ?></td>
            <td><?= h($multa->data) ?></td>
            <td><?= $this->Number->format($multa->valor) ?></td>
            <td><?= $this->Number->format($multa->pontos) ?></td>
            <td>
                <?= $multa->has('veiculo') ? $this->Html->link($multa->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $multa->veiculo->id]) : '' ?>
            </td>
            <td>
                <?= $multa->has('implemento') ? $this->Html->link($multa->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $multa->implemento->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $multa->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $multa->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $multa->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $multa->id)]) ?>
                <?= $this->Html->link(__('Relatório'), ['action' => 'view_pdf', $multa->id], ['class'=>'btn btn-primary btn-xs']) ?>
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
