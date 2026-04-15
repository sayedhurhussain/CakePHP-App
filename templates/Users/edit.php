<h2>Edit User</h2>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('name') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password', ['required' => false]) ?>
<?= $this->Form->button('Update') ?>
<?= $this->Form->end() ?>
