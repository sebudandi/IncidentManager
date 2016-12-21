<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->idlogs]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->idlogs], ['confirm' => __('Are you sure you want to delete # {0}?', $log->idlogs)]) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logs view large-9 medium-8 columns content">
    <h3><?= h($log->idlogs) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Action') ?></th>
            <td><?= h($log->action) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idlogs') ?></th>
            <td><?= $this->Number->format($log->idlogs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Iduser') ?></th>
            <td><?= $this->Number->format($log->user_iduser) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($log->date) ?></td>
        </tr>
    </table>
</div>
