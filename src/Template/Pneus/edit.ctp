<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $pneus->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $pneus->id)]
            )
        ?></ul>
</div>
<div class="pneus form large-10 medium-9 columns">
    <?= $this->Form->create($pneus); ?>
    <fieldset>
        <legend><?= __('Editar Pneu') ?></legend>
        <?php
            echo $this->Form->input('marca');
            echo $this->Form->input('km_inicial');
            echo $this->Form->input('km_final');
            echo $this->Form->input('media_km');
            echo $this->Form->input('preco');
            echo $this->Form->input('numero');
            echo $this->Form->input('dano_total');
            echo $this->Form->input('fornecedore_id', ['options' => $fornecedores]);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
