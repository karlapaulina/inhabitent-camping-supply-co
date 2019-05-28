<!-- This file is used to markup the public-facing widget. -->
<?php if(strlen(trim($mon_fri)) > 0) : ?>
<p>
    <span class="day-of-week">Monday-Friday:</span>
    <span><?php echo $mon_fri;?></span>
</p>
<?php endif ?>

<?php if(strlen(trim($sat)) > 0) : ?>
<p>
    <span class="day-of-week">Saturday:</span>
   <span><?php echo $sat;?></span>
</p>
<?php endif ?>

<?php if(strlen(trim($sun)) > 0) : ?>
<p>
    <span class="day-of-week">Sunday:</span>
    <span><?php echo $sun;?></span>
</p>
<?php endif ?>