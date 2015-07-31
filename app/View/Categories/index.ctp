<div class="row">
    <div class="col-md-3">
        <h3>Actions</h3>
        <ul>
            <li><?php echo $this->Html->link('New Category', array('controller' => 'categories', 'action' => 'add', 'full_base' => true)); ?></li>
            <li><?php echo $this->Html->link('Back', array('controller' => 'wallets', 'action' => 'index', 'full_base' => true)); ?></li>
        </ul>
    </div>
    <div class="col-md-8">
        <h3>Categories</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Purpose</th>
                    <th>Note</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?php echo $category['Category']['name']; ?>&nbsp;</td>
                        <td><?php
                            if ($category['Category']['purpose'] == 0) {
                                echo 'Spent';
                            } else {
                                echo 'Earned';
                            }
                            ?>&nbsp;</td>
                        <td><?php echo $category['Category']['note']; ?>&nbsp;</td>
                        <td class="actions">
                            <?php
                            echo $this->Html->link(
                                    $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')), array(
                                'action' => 'edit', $category['Category']['id']), array(
                                'class'  => 'btn btn-warning',
                                'escape' => false,
                            ));
                            ?>
                            <?php
                            echo $this->Html->link(
                                    $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')), array(
                                'action' => 'delete', $category['Category']['id']), array(
                                'class'  => 'btn btn-danger',
                                'escape' => false,
                            ));
                            ?>
                            </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
