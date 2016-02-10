<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $manutenco->id],['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $manutenco->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $manutenco->id)]) ?> </li>
        </ul>
</div>
<div class="manutencoes view large-10 medium-9 columns">
    <h2><?= h($manutenco->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Garantia') ?></h6>
            <p><?= h($manutenco->garantia) ?></p>
            <h6 class="subheader"><?= __('Veiculo') ?></h6>
            <p><?= $manutenco->has('veiculo') ? $this->Html->link($manutenco->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $manutenco->veiculo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Servico') ?></h6>
            <p><?= $manutenco->has('servico') ? $this->Html->link($manutenco->servico->fantasia, ['controller' => 'Servicos', 'action' => 'view', $manutenco->servico->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Fornecedore') ?></h6>
            <p><?= $manutenco->has('fornecedore') ? $this->Html->link($manutenco->fornecedore->fantasia, ['controller' => 'Fornecedores', 'action' => 'view', $manutenco->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Implemento') ?></h6>
            <p><?= $manutenco->has('implemento') ? $this->Html->link($manutenco->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $manutenco->implemento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $manutenco->has('cidade') ? $this->Html->link($manutenco->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $manutenco->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($manutenco->id) ?></p>
            <h6 class="subheader"><?= __('Km Veiculo') ?></h6>
            <p><?= $this->Number->format($manutenco->km_veiculo) ?></p>
            <h6 class="subheader"><?= __('Preco Obra') ?></h6>
            <p><?= $this->Number->format($manutenco->preco_obra) ?></p>
            <h6 class="subheader"><?= __('Preco Peca') ?></h6>
            <p><?= $this->Number->format($manutenco->preco_peca) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($manutenco->data) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Motivo') ?></h6>
            <?= $this->Text->autoParagraph(h($manutenco->motivo)); ?>

        </div>
    </div>
</div>
