<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $multa->id],['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $multa->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $multa->id)]) ?> </li>
         </ul>
</div>
<div class="multas view large-10 medium-9 columns">
    <h2><?= h($multa->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Local') ?></h6>
            <p><?= h($multa->local) ?></p>
            <h6 class="subheader"><?= __('Veiculo') ?></h6>
            <p><?= $multa->has('veiculo') ? $this->Html->link($multa->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $multa->veiculo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Implemento') ?></h6>
            <p><?= $multa->has('implemento') ? $this->Html->link($multa->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $multa->implemento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Motorista') ?></h6>
            <p><?= $multa->has('motorista') ? $this->Html->link($multa->motorista->nome, ['controller' => 'Motoristas', 'action' => 'view', $multa->motorista->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $multa->has('cidade') ? $this->Html->link($multa->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $multa->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($multa->id) ?></p>
            <h6 class="subheader"><?= __('Valor') ?></h6>
            <p><?= $this->Number->format($multa->valor) ?></p>
            <h6 class="subheader"><?= __('Pontos') ?></h6>
            <p><?= $this->Number->format($multa->pontos) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($multa->data) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Motivo') ?></h6>
            <?= $this->Text->autoParagraph(h($multa->motivo)); ?>

        </div>
    </div>
</div>
