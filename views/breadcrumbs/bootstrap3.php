<?php

/** @var \ByTIC\Navigation\Breadcrumbs\Breadcrumbs $breadcrumbs */
$firstBreadcrumb = reset($breadcrumbs);
$lastBreadcrumb = end($breadcrumbs);
?>
<?php if (count($breadcrumbs)) { ?>
<div id="breadcrumbs">
<ol class="breadcrumb">
    <?php foreach ($breadcrumbs as $crumb) { ?>
        <?php
        $classes = [];
        if ($crumb == $firstBreadcrumb) {
            $classes[] = 'first';
        }
        if ($crumb == $lastBreadcrumb) {
            $classes[] = 'active';
        }
        ?>

        <li class="<?php echo $classes ? implode(" ", $classes).'' : ''; ?>" >
            <a href="<?php echo $crumb->url(); ?>" title="<?php echo $crumb->title(); ?>">
                <?php echo $crumb->title(); ?>
            </a>
        </li>
    <?php } ?>
</ol>
</div>
<?php } ?>