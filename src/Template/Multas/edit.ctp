<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $multa->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $multa->id)]
            )
        ?>
</div>
<div class="multas form large-10 medium-9 columns">
    <?= $this->Form->create($multa); ?>
    <fieldset>
        <legend><?= __('Editar Multa') ?></legend>
        <?php
            echo $this->Form->input('local');
            echo $this->Form->input('data');
            echo $this->Form->input('valor');
            echo $this->Form->input('pontos');
            echo $this->Form->input('motivo');
            echo $this->Form->input('veiculo_id', ['options' => $veiculos]);
            echo $this->Form->input('implemento_id', ['options' => $implementos]);
            echo $this->Form->input('motorista_id', ['options' => $motoristas]);
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
