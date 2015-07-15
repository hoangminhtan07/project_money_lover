<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>Edit User</legend>
        <?php
        echo $this->Form->input('username', array(
            'default'  => AuthComponent::user('username'),
            'required' => false,
        ));
        echo $this->Form->input('email', array(
            'default'  => AuthComponent::user('email'),
            'required' => false,
            'type'     => 'text',
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end('Submit'); ?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Form->postlink('Delete User', array('action' => 'delete'), array('confirm' => 'Are you sure?')); ?></li>
        <li><?php echo $this->Html->link('Change Password', array('action' => 'changePassword')); ?></li>
        <li><?php echo $this->Html->link('Back', array('controller' => 'wallets', 'action' => 'index')); ?></li>
    </ul>
</div>