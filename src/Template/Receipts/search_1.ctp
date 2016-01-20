<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Receipts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<h1>
    Bookmarks tagged with
    <?= $this->Text->toList($tags) ?>
</h1>

<section>
<?php foreach ($receipts as $receipt): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($receipt->title, $receipt->url) ?></h4>
        <small><?= h($receipt->url) ?></small>

        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($receipt->description) ?>
    </article>
<?php endforeach; ?>
</section>