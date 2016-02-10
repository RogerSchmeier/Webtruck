<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
        <li><?= $this->Html->link(__('Recapagens'), ['controller'=>'Recapagens','action' => 'index'],['class'=>'btn btn-warning btn-xs']) ?> </li>
        </ul>
</div>
<div class="pneus index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('marca') ?></th>
            <th><?= $this->Paginator->sort('km_inicial') ?></th>
            <th><?= $this->Paginator->sort('km_final') ?></th>
            <th><?= $this->Paginator->sort('media_km') ?></th>
            <th><?= $this->Paginator->sort('preco') ?></th>
            <th><?= $this->Paginator->sort('numero') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pneus as $pneus): ?>
        <tr>
            <td><?= $this->Number->format($pneus->id) ?></td>
            <td><?= h($pneus->marca) ?></td>
            <td><?= $this->Number->format($pneus->km_inicial) ?></td>
            <td><?= $this->Number->format($pneus->km_final) ?></td>
            <td><?= $this->Number->format($pneus->media_km) ?></td>
            <td><?= $this->Number->format($pneus->preco) ?></td>
            <td><?= $this->Number->format($pneus->numero) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $pneus->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pneus->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $pneus->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $pneus->id)]) ?>
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
