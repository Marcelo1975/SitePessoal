<?php
get_header();
?>
<div class="container body_top">
	<div class="row">
		<div class="col-sm-5 p-0">
			<?php if(get_theme_mod('ms_img')): ?>
				<img class="avatar" src="<?php echo wp_get_attachment_url(get_theme_mod('ms_img')); ?>" />
			<?php else: ?>
				<img class="avatar" src="<?php echo get_template_directory_uri().'/assets/images/user_temp.png' ?>" />
			<?php endif; ?>
		</div>
		<div class="col-sm p-0 d-flex flex-column">
			<div class="user_info m-4">
				<div class="welcome_box">Olá & Bem Vindo (a)</div>
				<div class="welcome_name">Eu sou <span><?php bloginfo('name'); ?></span></div>
				<div class="welcome_desc"><?php bloginfo('description'); ?></div>
				<table border="0" width="100%">
					<?php if(get_theme_mod('ms_idade')): ?>
					<tr>
						<td width="100" class="font-weight-bold">Idade:</td>
						<td><?php echo get_theme_mod('ms_idade'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_theme_mod('ms_endereco')): ?>
					<tr>
						<td width="100" class="font-weight-bold">Endereço:</td>
						<td><?php echo get_theme_mod('ms_endereco'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_theme_mod('ms_email')): ?>
					<tr>
						<td width="100" class="font-weight-bold">E-mail:</td>
						<td><?php echo get_theme_mod('ms_email'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_theme_mod('ms_telefone')): ?>
					<tr>
						<td width="100" class="font-weight-bold">Telefone:</td>
						<td><?php echo get_theme_mod('ms_telefone'); ?></td>
					</tr>
					<?php endif; ?>
					<?php if(get_theme_mod('ms_site')): ?>
					<tr>
						<td width="100" class="font-weight-bold">Site:</td>
						<td><?php echo get_theme_mod('ms_site'); ?></td>
					</tr>
					<?php endif; ?>
				</table>
			</div>
			<div class="social_area social_area_two">
				<?php if(get_theme_mod('ms_facebook')): ?>
                <div class="social_button_two">
                    <a href="<?php echo get_theme_mod('ms_facebook'); ?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/facebook.png' ?>" />
                    </a>
                </div>
            	<?php endif; ?>
            	<?php if(get_theme_mod('ms_twitter')): ?>
                <div class="social_button_two">
                    <a href="<?php echo get_theme_mod('ms_twitter'); ?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/twitter.png' ?>" />
                    </a>
                </div>
                <?php endif; ?>
                <?php if(get_theme_mod('ms_instagram')): ?>
                <div class="social_button_two">
                    <a href="<?php echo get_theme_mod('ms_instagram'); ?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png' ?>" />
                    </a>
                </div>
                <?php endif; ?>
                <?php if(get_theme_mod('ms_gplus')): ?>
                <div class="social_button_two">
                    <a href="<?php echo get_theme_mod('ms_gplus'); ?>">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/google.png' ?>" />
                    </a>
                </div>
            	<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>