<?php
$topbar_display = immiex_get_option( 'topbar_display', immiex_get_config('topbar_display') );

if($topbar_display): ?>
<div <?php immiex_topbar_class(); ?>>
	<div class="headerwp clearfix">

		<!-- Infotmation -->
		<div class="headertopleft">			     			
			<div class="header-info clearfix">
				<?php echo immiex_get_topbar_widgets( 'topbar_style1_left_items' ) ?>
	    	</div>
		</div>

			<!-- Contacts -->
<div class="headertopright header-contacts">
    <ul class="top_links">
       <li>
        <a href="<?php echo home_url('/free-calculator'); ?>">Free Calcuator</a>
       </li>
       <li>
        <a href="<?php echo home_url('/free-assessment'); ?>">Free Assisment</a>
       </li>
       <li>
        <a href="<?php echo home_url('/consultancy'); ?>" class="talk_lawyer">Talk to a Laywer</a>
       </li>
     </ul>	
</div>

	</div>
</div>
<?php endif; ?>