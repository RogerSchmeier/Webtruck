
<div class="implementos form large-10 medium-9 columns">
    <?= $this->Form->create($implemento); ?>
    <fieldset>
        <legend><?= __('Add Implemento') ?></legend>
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
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
