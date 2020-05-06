<div id="sidecol"> 
	<h1 id='logo'><a href='<?php home_url(); ?>'><span>Ambient Control</span></a></h1>
	<div id='sidebar'>
		<?php $navopt = array(
		  'container'       => '', 
		  'menu_class'      => 'menu', 
		  'menu_id'         => 'nav',
		  'echo'            => true,
		  'depth'           => 0
		);?>
		<?php wp_nav_menu($navopt); ?>
		
		<div class='module'>
		<?php if(function_exists('iinclude_page')) iinclude_page(20); ?>
		</div>
	</div>
</div>
