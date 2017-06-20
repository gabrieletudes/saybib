<?php include('header.php') ?>
<?php include($data['view']); ?>
<?php if (isset($data['article'])): ?>
    <?php include($data['article']); ?>
<?php endif; ?>
<?php if (isset($data['aside'])): ?>
    <?php include($data['aside']); ?>
<?php endif; ?>
<?php include('footer.php') ?>