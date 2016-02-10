<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="recapagens index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('km_inicial') ?></th>
            <th><?= $this->Paginator->sort('km_final') ?></th>
            <th><?= $this->Paginator->sort('media_km') ?></th>
            <th><?= $this->Paginator->sort('preco_recape') ?></th>
            <th><?= $this->Paginator->sort('recape') ?></th>
            <th><?= $this->Paginator->sort('pneu_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($recapagens as $recapagen): ?>
        <tr>
            <td><?= $this->Number->format($recapagen->id) ?></td>
            <td><?= $this->Number->format($recapagen->km_inicial) ?></td>
            <td><?= $this->Number->format($recapagen->km_final) ?></td>
            <td><?= $this->Number->format($recapagen->media_km) ?></td>
            <td><?= $this->Number->format($recapagen->preco_recape) ?></td>
            <td><?= h($recapagen->recape) ?></td>
            <td>
                <?= $recapagen->has('pneus') ? $this->Html->link($recapagen->pneus->numero, ['controller' => 'Pneus', 'action' => 'view', $recapagen->pneus->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $recapagen->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $recapagen->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $recapagen->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $recapagen->id)]) ?>
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
