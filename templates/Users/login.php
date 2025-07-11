<h1>Login</h1>
<?= $this->Form->create(); ?>
<fieldset>
    <?= $this->Form->control('email'); ?>
    <?= $this->Form->control('password'); ?>
    <?= $this->Form->button('Login'); ?>
</fieldset>
<?= $this->Form->end(); ?>