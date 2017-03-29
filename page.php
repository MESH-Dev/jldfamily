<?php get_header(); ?>
<?php 
	//Get the current user's id
	$id = get_current_user_id();
	//var_dump($id);

	//Get the current user's userdata, which includes the access level
	$user_info = get_userdata($id);
	
	//Get the access level attributed to their account
	// __Access can equal
	//   family - Family Access
	//   shareholder - Shareholder Access
	//   admin - Admin Only Access
	$access = get_field('user_access_level', $user_info); 
	//var_dump($access);
	

	$page_access = get_field('access_level');
	//var_dump($page_access);
	$show_content = false;
	
?>
<main id="content">

	<div class="container">
		<div class="row">
			<?php 
			//Check page access against user access to show content
			if ($page_access == 'public' || $access == 'admin'){
				$show_content=true;
				//var_dump($access);
			} elseif($page_access == 'family'){
				if($access == 'family' || $access == 'shareholder' || $access == 'admin'){
					$show_content = true;
				}
			}elseif ($page_access == 'shareholder'){
				if($access == 'shareholder' || $access == 'admin'){
					$show_content = true;
				}
			}else{
				$show_content = false;
			}
			//var_dump($show_content);
			?>


			<?php if ($show_content == true ){ ?>
			<div class="slider_container row">
				<?php if (have_rows('slide_panel')): ?>
					<div class="columns-4 no-padding imgslider">
					<?php while (have_rows('slide_panel')):the_row(); 
							$image = get_sub_field('slide_image');
							$image_url = $image['sizes']['large'];
							$image_alt = $image['alt'];
							$title = get_sub_field('slide_title');
							$subtitle = get_sub_field('slide_subtitle');
							$slide_content = get_sub_field('slide_panel_text');
						?>

						
							<div class="indiv_slide" style="background-image: url('<?php echo $image_url; ?>');">
								<span class="sr-only"><?php echo $image_alt;?></span>
								<!-- <img style="display:none;" src="<?php //echo $image_url; ?>" alt="<?php //echo $image_alt;?>"> -->
							</div>
							<?php endwhile; ?>
						</div> <!-- end imgslider -->
							<?php endif; ?>
							
						<?php if (have_rows('slide_panel')): ?>
						<div class="columns-8 no-padding textslider">
							<?php while (have_rows('slide_panel')):the_row(); 
							$image = get_sub_field('slide_image');
							$image_url = $image['sizes']['large'];
							$title = get_sub_field('slide_title');
							$subtitle = get_sub_field('slide_subtitle');
							$slide_content = get_sub_field('slide_panel_text');
							?>

							<div class="indiv_text_slide">
								<h3><?php echo $title; ?></h3>
								<?php if ($subtitle != ''){ ?>
								<h5><?php echo $subtitle; ?></h5>
								<?php } ?>
								<?php echo $slide_content; ?>
							</div>
							<?php endwhile; ?>
						</div><!-- end textslider -->
							<?php endif; ?>
			</div><!-- end slider container -->
			<div id="content_container" class="content">
				<!-- <?php //the_content(); ?> -->

				<?php if (have_rows('column')):
						$column_cnt=0;
						while (have_rows('column')):the_row(); 
						$rows = get_field('column');
						$row_count = count($rows);
						//var_dump($row_count);
						$column_title = get_sub_field('column_title');
						$column_content = get_sub_field('column_content');

						//Column classes
						$column_class = "";
						if($row_count == 1){
							$column_class = "columns-10";
						}elseif($row_count== 2){
							$column_class = "columns-6";
						}elseif($row_count==3){
							$column_class = "columns-4";
						}

						?>
				<div class="content_columns <?php echo $column_class; ?>">
					<div class="wrap">
						<h3><?php echo $column_title; ?></h3>
						<?php echo $column_content; ?>
					</div>
				</div>
				<?php endwhile; endif; ?>
				<!-- <div class="content_columns columns-4">
					<h3>Vision</h3>
					<p>Our family and family enterprises will proactively manage our complex future by:<br><br><ul><li>Honoring our past values and future vision</li><li>Empowering our Investment Committee to evolve</li><li>Providing open communication to the entire family</li></ul></p>
				</div><div class="content_columns columns-4">
					<h3>Upcoming Events</h3>
					<p>New Event</p>
				</div> -->
			</div> <!-- end content container -->
		
			<?php }else{ ?>
				<div class="error">
					<h3>Sorry, you do not have access to view this page.  If you feel that you are receiving this in error, please contact the site administrator</h3>
				</div>
			<?php } ?>


		</div><!-- end row -->
		
	</div><!-- end container -->

</main><!-- End of Content -->

<?php get_footer(); ?>
