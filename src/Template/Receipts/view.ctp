<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Receipt'), ['action' => 'edit', $receipt->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Receipt'), ['action' => 'delete', $receipt->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receipt->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Receipts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receipt'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="receipts view large-9 medium-8 columns content">
    <h3><?= h($receipt->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $receipt->has('user') ? $this->Html->link($receipt->user->id, ['controller' => 'Users', 'action' => 'view', $receipt->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($receipt->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($receipt->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Warranty') ?></th>
            <td><?= $this->Number->format($receipt->warranty) ?></td>
        </tr>
        <tr>
            <th><?= __('Purchased') ?></th>
            <td><?= h($receipt->purchased) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($receipt->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($receipt->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($receipt->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Filename') ?></h4>
        <?= $this->Text->autoParagraph(h($receipt->filename)); ?>
    </div>
</div>
