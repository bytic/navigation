<?php

/** @var \ByTIC\Navigation\Breadcrumbs\Breadcrumbs $breadcrumbs */
$breadcrumbs->rewind();
$firstBreadcrumb = $breadcrumbs->current();
$lastBreadcrumb = $breadcrumbs->end();
?>
<?php if (count($breadcrumbs)) { ?>
<div id="breadcrumbs">
<ol class="breadcrumb">
<?php foreach ($breadcrumbs as $crumb) {

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