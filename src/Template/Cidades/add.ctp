<!--- <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3> ---> 
    
</nav>
</div>
<div class="cidades form large-12 medium-9 columns">
    <?= $this->Form->create($cidade); ?>
    <fieldset>
        <legend><?= __('Adicionar cidade') ?></legend>
        <?php
        echo '<div class="col-md-7">';
            echo $this->Form->input('nome');
            echo '</div><div class="col-md-2">';
            echo $this->Form->input('uf');
            echo '</div><div class="col-md-7">';
            echo $this->Form->input('pais');
              echo '</div>';
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
