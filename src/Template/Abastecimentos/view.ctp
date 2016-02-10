<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $abastecimento->id], ['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $abastecimento->id], ['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Are you sure you want to delete # {0}?', $abastecimento->id)]) ?> </li>
        </ul>
</div>
<div class="abastecimentos view large-10 medium-9 columns">
    <h2><?= h($abastecimento->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Posto') ?></h6>
            <p><?= h($abastecimento->Posto) ?></p>
            <h6 class="subheader"><?= __('Media') ?></h6>
            <p><?= h($abastecimento->media) ?></p>
            <h6 class="subheader"><?= __('Veiculo') ?></h6>
            <p><?= $abastecimento->has('veiculo') ? $this->Html->link($abastecimento->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $abastecimento->veiculo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Implemento') ?></h6>
            <p><?= $abastecimento->has('implemento') ? $this->Html->link($abastecimento->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $abastecimento->implemento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Combustivei') ?></h6>
            <p><?= $abastecimento->has('combustivei') ? $this->Html->link($abastecimento->combustivei->nome, ['controller' => 'Combustiveis', 'action' => 'view', $abastecimento->combustivei->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Complemento') ?></h6>
            <p><?= $abastecimento->has('complemento') ? $this->Html->link($abastecimento->complemento->nome, ['controller' => 'Complementos', 'action' => 'view', $abastecimento->complemento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $abastecimento->has('cidade') ? $this->Html->link($abastecimento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $abastecimento->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($abastecimento->id) ?></p>
            <h6 class="subheader"><?= __('Preco Comb') ?></h6>
            <p><?= $this->Number->format($abastecimento->preco_comb) ?></p>
            <h6 class="subheader"><?= __('Preco Comp') ?></h6>
            <p><?= $this->Number->format($abastecimento->preco_comp) ?></p>
            <h6 class="subheader"><?= __('Litros Comb') ?></h6>
            <p><?= $this->Number->format($abastecimento->litros_comb) ?></p>
            <h6 class="subheader"><?= __('Litros Comp') ?></h6>
            <p><?= $this->Number->format($abastecimento->litros_comp) ?></p>
            <h6 class="subheader"><?= __('Km Inicio') ?></h6>
            <p><?= $this->Number->format($abastecimento->km_inicio) ?></p>
            <h6 class="subheader"><?= __('Km Fim') ?></h6>
            <p><?= $this->Number->format($abastecimento->km_fim) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($abastecimento->data) ?></p>
        </div>
    </div>
</div>
