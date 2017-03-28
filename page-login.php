<?php /* Template Name: Login Page */get_header(); ?>
		
		<div class="container">
			<div class="login-form">
				<h1>Login</h1>
			<?php 
			$args = array(
				'echo'           => true,
				'remember'       => true,
				'redirect'		 => site_url(),
				//'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
				'form_id'        => 'loginform',
				'id_username'    => 'user_login',
				'id_password'    => 'user_pass',
				'id_remember'    => 'rememberme',
				'id_submit'      => 'c-submit',
				'label_username' => __( 'Email' ),
				'label_password' => __( 'Password' ),
				'label_remember' => __( 'Remember Me' ),
				'label_log_in'   => __( 'Log In' ),
				'value_username' => '',
				'value_remember' => false
			);

			?>
		<?php wp_login_form( $args ); ?> 
			</div>
		</div>

<?php get_footer(); ?>