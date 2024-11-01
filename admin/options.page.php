<?php

if( ! defined('ABSPATH') ) exit;

$default_settings = array( 'getcomplied_id' => '' );

$settings = get_option( 'tm_getcomplied_wp_settings' );
$settings = is_array( $settings ) ? $settings : $default_settings;

?>
<nav class="mainnav navbar navbar-expand-md drop-shadow bg-white">
	<div class="container-fluid">
		<a class="logo navbar-brand" target="_blank" href="https://www.getcomplied.com?gc_aid=70">
			<img class="logo-image d-block" src="<?php echo TM_GETCOMPLIED_GDPR_WP_ADMIN_IMG_DIR; ?>/getcomplied_logo.svg" alt="<?php _e('GetComplied - GDPR Platform', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?>">
			<span class="d-none">TM_GETCOMPLIED_GDPR_WP_NAME</span>
		</a>
	</div>
</nav>
<div class="container-fluid">
	<div class="row justify-content-center h-100 align-items-center">
		<div class="col">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="row">
						<div class="col">
							<div class="text-size-l text-blue border-bottom font-weight-bold mt-3 py-2">
								<p><?php _e('Follow these steps in order to get GetComplied installed.', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></p>
								<ul class="list-group list-group-flush list-group-clean text-blue">
									<li class="list-group-item">
										<div class="row">
											<div class="col-auto">
												1.
											</div>
											<div class="col">
												<div class="text-size-m font-weight-light">
													<?php _e('Visit', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?> <a href="https://www.getcomplied.com?gc_aid=70" target="_blank">www.getcomplied.com</a> <?php _e('and create an account.', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-auto">
												2.
											</div>
											<div class="col">
												<div class="text-size-m font-weight-light">
													<?php _e('Create at least 1 policy and 1 cookie.', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-auto">
												3.
											</div>
											<div class="col">
												<div class="text-size-m font-weight-light">
													<?php echo sprintf( __('Create your project and add this site domain ( %s ) in the Info -> Project Domains.', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN), '<b>'.$_SERVER['HTTP_HOST'].'</b>') ?>
												</div>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-auto">
												4.
											</div>
											<div class="col">
												<div class="text-size-m font-weight-light">
													<strong><?php _e('Copy paste your Project ID.', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></strong>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-auto"></div>
											<div class="col">
												<form method="post" action="options.php">
													<?php settings_fields( 'tm_getcomplied_wp_settings' ); ?>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="gc-prefix">GC-</span>
														</div>
														<input class="form-control" type="text" autocomplete="off" id="getcomplied_id" name="tm_getcomplied_wp_settings[getcomplied_id]" value="<?php echo ( isset( $settings['getcomplied_id'] ) )? $settings['getcomplied_id'] : ''; ?>"  placeholder="<?php _e('Insert your project id', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?>"  aria-describedby="gc-prefix"/>
														<div class="input-group-append">
															<input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="<?php _e( 'Save Project ID', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN ) ?>">
														</div>
													</div>
												</form>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-auto">
												5.
											</div>
											<div class="col">
												<div class="text-size-m font-weight-light">
													<?php _e('Open your website and check your compliances', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?>.
													<a target="_blank" href="/" class="btn btn-success btn-block mt-3"><?php _e('Visit my website', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<div class="col text-center">
					<img src="<?php echo TM_GETCOMPLIED_GDPR_WP_ADMIN_IMG_DIR; ?>/getcomplied_illustration.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="row text-left mt-5">
				<div class="col">
					<ul>
						<li><a target="_blank" href="https://blog.getcomplied.com/adicionar-ao-wordpress-um-plugin-para-rgpd/?gc_aid=70"><?php _e('Tutorial to install and configure this Plugin', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a></li>
						<li><a target="_blank" href="https://www.getcomplied.com?gc_aid=70"><?php _e('Visit the offical site: www.getcomplied.com', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a></li>
						<li><a target="_blank" href="https://docs.getcomplied.com?gc_aid=70"><?php _e('Developer Docs', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a></li>
						<li><a target="_blank" href="https://www.facebook.com/getcomplied"><?php _e('Follow us in FACEBOOK', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a></li>
						<li><a target="_blank" href="https://twitter.com/GetComplied"><?php _e('Follow us in TWITTER', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>