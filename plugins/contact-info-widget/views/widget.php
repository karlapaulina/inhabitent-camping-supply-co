<!-- This file is used to markup the public-facing widget. -->
<?php if(strlen(trim($phone_number)) > 0) : ?>
<p>
   <i class="fas fa-phone"></i>
    <a href="tel:<?php echo $phone_number;?>"><?php echo $phone_number;?></a>
</p>
<?php endif ?>

<?php if(strlen(trim($email)) > 0) : ?>
<p>
    <i class="fas fa-envelope"></i>
    <a href="mailto:<?php echo $email;?>" target="_top"><?php echo $email;?></a>
</p>
<?php endif ?>

<?php if(strlen(trim($address)) > 0) : ?>
<p>
    <i class="fas fa-map-marker-alt"></i>
   <span><?php echo $address;?></span>
</p>
<?php endif ?>