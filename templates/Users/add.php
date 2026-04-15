<h2>Add User</h2>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Save') ?>
<?= $this->Form->end() ?>
