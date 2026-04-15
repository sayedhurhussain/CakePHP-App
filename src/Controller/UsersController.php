<?php

namespace App\Controller;

class UsersController extends AppController
{
    // READ (List)
    public function index()
    {
        $users = $this->Users->find();
        $this->set(compact('users'));
    }

    // CREATE
    public function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success('User created successfully');
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error('Failed to create user');
        }

        $this->set(compact('user'));
    }

    // UPDATE
    public function edit($id)
    {
        $user = $this->Users->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Flash->success('User updated');
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error('Update failed');
        }

        $this->set(compact('user'));
    }

    // DELETE
    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $user = $this->Users->get($id);

        if ($this->Users->delete($user)) {
            $this->Flash->success('User deleted');
        } else {
            $this->Flash->error('Delete failed');
        }

        return $this->redirect(['action' => 'index']);
    }
}
