<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'],['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="servicos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fantasia') ?></th>
            <th><?= $this->Paginator->sort('razao') ?></th>
            <th><?= $this->Paginator->sort('cnpj') ?></th>
            <th><?= $this->Paginator->sort('cpf') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th><?= $this->Paginator->sort('celular') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($servicos as $servico): ?>
        <tr>
            <td><?= $this->Number->format($servico->id) ?></td>
            <td><?= h($servico->fantasia) ?></td>
            <td><?= h($servico->razao) ?></td>
            <td><?= h($servico->cnpj) ?></td>
            <td><?= h($servico->cpf) ?></td>
            <td><?= h($servico->telefone) ?></td>
            <td><?= h($servico->celular) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $servico->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $servico->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $servico->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $servico->id)]) ?>
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
