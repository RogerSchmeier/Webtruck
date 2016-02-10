<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo'), ['action' => 'add'], ['class'=>'btn btn-default btn-xs']) ?></li>
        </ul>
</div>
<div class="fornecedores index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fantasia') ?></th>
            <th><?= $this->Paginator->sort('razao') ?></th>
            <th><?= $this->Paginator->sort('cnpj') ?></th>
            <th><?= $this->Paginator->sort('telefone') ?></th>
            <th><?= $this->Paginator->sort('celular') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fornecedores as $fornecedore): ?>
        <tr>
            <td><?= $this->Number->format($fornecedore->id) ?></td>
            <td><?= h($fornecedore->fantasia) ?></td>
            <td><?= h($fornecedore->razao) ?></td>
            <td><?= h($fornecedore->cnpj) ?></td>
            <td><?= h($fornecedore->telefone) ?></td>
            <td><?= h($fornecedore->celular) ?></td>
            <td><?= h($fornecedore->email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $fornecedore->id],['class'=>'btn btn-info btn-xs']) ?>
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fornecedore->id],['class'=>'btn btn-default btn-xs']) ?>
                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $fornecedore->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $fornecedore->id)]) ?>
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