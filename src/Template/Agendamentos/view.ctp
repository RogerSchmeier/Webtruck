<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Editar'), ['action' => 'edit', $agendamento->id], ['class'=>'btn btn-default btn-xs']) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $agendamento->id], ['class'=>'btn btn-danger btn-xs'], ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $agendamento->id)]) ?> </li>
        </ul>
</div>
<div class="agendamentos view large-10 medium-9 columns">
    <h2><?= h($agendamento->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Motivo') ?></h6>
            <p><?= h($agendamento->motivo) ?></p>
            <h6 class="subheader"><?= __('Endereco') ?></h6>
            <p><?= h($agendamento->endereco) ?></p>
            <h6 class="subheader"><?= __('Implemento') ?></h6>
            <p><?= $agendamento->has('implemento') ? $this->Html->link($agendamento->implemento->modelo, ['controller' => 'Implementos', 'action' => 'view', $agendamento->implemento->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Veiculo') ?></h6>
            <p><?= $agendamento->has('veiculo') ? $this->Html->link($agendamento->veiculo->modelo, ['controller' => 'Veiculos', 'action' => 'view', $agendamento->veiculo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Cidade') ?></h6>
            <p><?= $agendamento->has('cidade') ? $this->Html->link($agendamento->cidade->nome, ['controller' => 'Cidades', 'action' => 'view', $agendamento->cidade->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($agendamento->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($agendamento->data) ?></p>
        </div>
    </div>
</div>
