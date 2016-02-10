<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $recapagen->id] ,['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $recapagen->id],['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $recapagen->id)]) ?> </li>
    </ul>
</div>
<div class="recapagens view large-10 medium-9 columns">
    <h2><?= h($recapagen->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Recape') ?></h6>
            <p><?= h($recapagen->recape) ?></p>
            <h6 class="subheader"><?= __('Pneus') ?></h6>
            <p><?= $recapagen->has('pneus') ? $this->Html->link($recapagen->pneus->numero, ['controller' => 'Pneus', 'action' => 'view', $recapagen->pneus->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Fornecedore') ?></h6>
            <p><?= $recapagen->has('fornecedore') ? $this->Html->link($recapagen->fornecedore->fantasia, ['controller' => 'Fornecedores', 'action' => 'view', $recapagen->fornecedore->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Dano Total') ?></h6>
            <p><?= h($recapagen->dano_total) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($recapagen->id) ?></p>
            <h6 class="subheader"><?= __('Km Inicial') ?></h6>
            <p><?= $this->Number->format($recapagen->km_inicial) ?></p>
            <h6 class="subheader"><?= __('Km Final') ?></h6>
            <p><?= $this->Number->format($recapagen->km_final) ?></p>
            <h6 class="subheader"><?= __('Media Km') ?></h6>
            <p><?= $this->Number->format($recapagen->media_km) ?></p>
            <h6 class="subheader"><?= __('Preco Recape') ?></h6>
            <p><?= $this->Number->format($recapagen->preco_recape) ?></p>
        </div>
    </div>
</div>
