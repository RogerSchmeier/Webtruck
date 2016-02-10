<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $implemento->id],['class'=>'btn btn-danger btn-xs'],
                ['confirm' => __('Tem certeza de que deseja excluir? # {0}?', $implemento->id)]
            )
        ?>
    </ul>
</div>
<div class="implementos form large-10 medium-9 columns">
    <?= $this->Form->create($implemento); ?>
    <fieldset>
        <legend><?= __('Edit Implemento') ?></legend>
        <?php
            echo $this->Form->input('modelo');
            echo $this->Form->input('ano');
            echo $this->Form->input('chassis');
            echo $this->Form->input('eixos');
            echo $this->Form->input('placa');
            echo $this->Form->input('renavan');
            echo $this->Form->input('obs');
            echo $this->Form->input('cidade_id', ['options' => $cidades]);
            echo $this->Form->input('motorista_id', ['options' => $motoristas]);
            echo $this->Form->input('cor');
            echo $this->Form->input('antt');
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
