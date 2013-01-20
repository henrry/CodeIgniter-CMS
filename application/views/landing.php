<div class="container grid_9">
    <?php if(isset($records)) : foreach ($records as $row) : ?>

    <h1><?php echo $row->thema; ?></h1>
    <div class="record"><?php echo $row->content; ?></div>
    <?php endforeach; ?>
    <?php else: ?>

    <h2>No Records Returned.</h2>

    <?php endif; ?>
</div>
