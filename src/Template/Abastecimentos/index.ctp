<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?></li>
       <li><?= $this->Html->link(__('Combustivel'), ['controller' => 'Combustiveis', 'action' => 'index'],['class'=>'btn btn-warning btn-xs'] ) ?> </li>
         <li><?= $this->Html->link(__('Complemento'), ['controller' => 'Complementos', 'action' => 'index'], ['class'=>'btn btn-warning btn-xs']) ?> </li>
       </ul>
</div>
<div class="abastecimentos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('preco_comb') ?></th>
            <th><?= $this->Paginator->sort('preco_comp') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('litros_comb') ?></th>
            <th><?= $this->Paginator->sort('litros_comp') ?></th>
            <th><?= $this->Paginator->sort('Posto') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($abastecimentos as $abastecimento): ?>
        <tr>
            <td><?= $this->Number->format($abastecimento->id) ?></td>
            <td><?= $this->Number->format($abastecimento->preco_comb) ?></td>
            <td><?= $this->Number->format($abastecimento->preco_comp) ?></td>
            <td><?= h($abastecimento->data) ?></td>
            <td><?= $this->Number->format($abastecimento->litros_comb) ?></td>
            <td><?= $this->Number->format($abastecimento->litros_comp) ?></td>
            <td><?= h($abastecimento->Posto) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $abastecimento->id], ['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $abastecimento->id], ['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $abastecimento->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $abastecimento->id)]) ?>
                <?= $this->Html->link(__('Relatório'), ['action' => 'view_pdf', $abastecimento->id], ['class'=>'btn btn-primary btn-xs']) ?>

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
