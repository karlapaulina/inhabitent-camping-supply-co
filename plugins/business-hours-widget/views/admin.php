<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('mon_fri'); ?>">Monday to Friday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('mon_fri'); ?>" name="<?php echo $this->get_field_name('mon_fri'); ?>" type="text" value="<?php echo $mon_fri; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('sat'); ?>">Saturday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sat'); ?>" name="<?php echo $this->get_field_name('sat'); ?>" type="text" value="<?php echo $sat; ?>">
   </p>
   <p><label for="<?php echo $this->get_field_id('sun'); ?>">Sunday:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('sun'); ?>" name="<?php echo $this->get_field_name('sun'); ?>" type="text" value="<?php echo $sun; ?>">
   </p>

</div>
