<h2>Users List</h2>

<a href="<?= $this->Url->build(['action' => 'add']) ?>">Add User</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user->id ?></td>
        <td><?= $user->name ?></td>
        <td><?= $user->email ?></td>
        <td>
            <a href="<?= $this->Url->build(['action' => 'edit', $user->id]) ?>">Edit</a>

            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $user->id],
                ['confirm' => 'Are you sure?']
            ) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
