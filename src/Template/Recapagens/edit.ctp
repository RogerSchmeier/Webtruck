<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $recapagen->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $recapagen->id)]
            )
        ?>
    </ul>
</div>
<div class="recapagens form large-10 medium-9 columns">
    <?= $this->Form->create($recapagen); ?>
    <fieldset>
        <legend><?= __('Editar Recapagem') ?></legend>
        <?php
            echo $this->Form->input('km_inicial');
            echo $this->Form->input('km_final');
            echo $this->Form->input('media_km');
            echo $this->Form->input('preco_recape');
            echo $this->Form->input('recape');
            echo $this->Form->input('pneu_id', ['options' => $pneus]);
            echo $this->Form->input('fornecedore_id', ['options' => $fornecedores]);
            echo $this->Form->input('dano_total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
