<div class="container span7 text-center col-md-12 col-lg-offset-3"style="margin: 0 auto;" >
    <div class="center-block">
        <?= $this->Html->image('logo sistema.png', array('width' => '300px')) ?>
    </div>
    <?= $this->Form->create() ?>

    <div >
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>   
    </div>

    <div class="text-right">
        <?= $this->Form->button('Login', ['class' => 'btn btn-success btn-lg ']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>