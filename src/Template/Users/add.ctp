
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __('Novo Usuário') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar'),['class'=>'btn btn-success  ']) ?>
    <?= $this->Form->end() ?>
</div>
