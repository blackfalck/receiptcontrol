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
            echo $this->Form->hidden('id');
            echo $this->Form->input('title', array('type' => 'text'));
            echo $this->Form->input('description', array('type' => 'text'));
            echo $this->Form->file('filename');
            echo $this->Form->button('delete' , ['type' => 'button', 'class' => 'deleteimage']);
            echo $this->Form->hidden('deleted', ['value' => 0, 'class' => 'deleted']);
            
           
            echo $this->Html->image('uploads/'.$receipt->filename, ['alt' => 'CakePHP']);
            echo $this->Form->input('warranty');
            echo $this->Form->datetime('purchased',
                [
                   'hour' => [
                        'class' => 'hidden',
                    ],
                    'minute' => [
                        'class' => 'hidden',
                    ],
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
