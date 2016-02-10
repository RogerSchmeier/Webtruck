<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $veiculo->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $veiculo->id)]
            )
        ?>
    </ul>
</div>
<div class="veiculos form large-10 medium-9 columns">
    <?= $this->Form->create($veiculo); ?>
    <fieldset>
        <legend><?= __('Editar Veículo') ?></legend>
        <?php
            echo $this->Form->input('modelo');
            echo $this->Form->input('marca');
            echo $this->Form->input('ano');
            echo $this->Form->input('motor');
            echo $this->Form->input('chassis');
            echo $this->Form->input('renavam');
            echo $this->Form->input('placa');
            echo $this->Form->input('antt');
            echo $this->Form->input('obs');
            echo $this->Form->input('motorista_id', ['options' => $motoristas]);
            echo $this->Form->input('eixos');
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
            echo $this->Form->input('kilometragem');
            echo $this->Form->input('cor');
         
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
