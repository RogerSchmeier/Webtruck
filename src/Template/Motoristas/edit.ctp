<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $motorista->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $motorista->id)]
            )
        ?>
</div>
<div class="motoristas form large-10 medium-9 columns">
    <?= $this->Form->create($motorista); ?>
    <fieldset>
        <legend><?= __('Editar Motorista') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('CPF');
            echo $this->Form->input('RG');
            echo $this->Form->input('CNH');
            echo $this->Form->input('data_nasc');
            echo $this->Form->input('data_adm');
            echo $this->Form->input('data_dem');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
            echo $this->Form->input('endereco');
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
