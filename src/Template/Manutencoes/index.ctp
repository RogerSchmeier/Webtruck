<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
        <li><?= $this->Html->link(__('Fornecedores'), ['controller' => 'Fornecedores', 'action' => 'index'],['class'=>'btn btn-warning btn-xs'] ) ?> </li>
        </ul>
</div>
<div class="manutencoes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('km_veiculo') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('garantia') ?></th>
            <th><?= $this->Paginator->sort('preco_obra') ?></th>
            <th><?= $this->Paginator->sort('preco_peca') ?></th>
            <th><?= $this->Paginator->sort('veiculo_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($manutencoes as $manutenco): ?>
        <tr>
            <td><?= $this->Number->format($manutenco->id) ?></td>
            <td><?= $this->Number->format($manutenco->km_veiculo) ?></td>
            <td><?= h($manutenco->data) ?></td>
            <td><?= h($manutenco->garantia) ?></td>
            <td><?= $this->Number->format($manutenco->preco_obra) ?></td>
            <td><?= $this->Number->format($manutenco->preco_peca) ?></td>
            <td>
                <?= $manutenco->has('veiculo') ? $this->Html->link($manutenco->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $manutenco->veiculo->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $manutenco->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $manutenco->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $manutenco->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $manutenco->id)]) ?>
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
