<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $receipt->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $receipt->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Receipts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="receipts form large-9 medium-8 columns content">
    <?= $this->Form->create($receipt, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Receipt') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->file('filename');
            echo $receipt->filename_original; 
            echo $this->Html->image('uploads/'.$receipt->filename, ['alt' => 'CakePHP']);
            echo $this->Form->input('warranty');
            echo $this->Form->input('purchased');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
