<?php
/*
 * Plugin Name: WEN's Social Links
 * Version: 1.0
 * Plugin URI: #
 * Description: Simple plugin that can be used to link almost 21 social networks
 * Author: Web Experts Nepal, Manesh Timilsina
 * Author URI: http://webexpertsnepal.com
 * License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
class SocialLinksWidget extends WP_Widget
{
	/**
	* Declares the FollowerCounterWidget class.
	*
	*/
	function SocialLinksWidget(){
		add_action('wp_head', array(&$this, 'scEnqueueStyles'));
		$widget_ops = array('classname' => 'widget_FollowerCounter', 'description' => __( "Link with popular social media") );
		
		$this->WP_Widget('SocialLinks', __('WEN: Get Social'), $widget_ops, $control_ops);
	}
	
	/**
	* Displays the Widget
	*
	*/
	function widget($args, $instance){
		extract($args);
		$title 		=	apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
		$tooltip 	=	isset( $instance['tooltip'] ) ? $instance['tooltip'] : false;
		$rss 		=	$instance['rss'];
		$facebook 	=	$instance['facebook'];	
		$twitter 	=	$instance['twitter'];
		$gplus 		=	$instance['gplus'];	
		$linkedin 	=	$instance['linkedin'];
		$pinterest 	=	$instance['pinterest'];
		$digg 		=	$instance['digg'];
		$myspace 	=	$instance['myspace'];
		$tumblr 	=	$instance['tumblr'];
		$flickr 	=	$instance['flickr'];
		$reddit 	=	$instance['reddit'];
		$dribbble 	=	$instance['dribbble'];
		$blogger 	=	$instance['blogger'];		
		$yahoo 		=	$instance['yahoo'];
		$aim 		=	$instance['aim'];
		$skype 		=	$instance['skype'];
		$paypal 	=	$instance['paypal'];
		$youtube 	=	$instance['youtube'];
		$vimeo 		=	$instance['vimeo'];
		$dailymotion=	$instance['dailymotion'];
		$netflix	=	$instance['netflix'];

		/* check if http:// present in the link */
			if(!empty($rss)){
				if (false === strpos($rss, '://')) {
				    $rss = 'http://' . $rss;
				    
				}else{
					$rss = $rss;
				}
			}

			if(!empty($facebook)){
				if (false === strpos($facebook, '://')) {
				    $facebook = 'http://' . $facebook;
				    
				}else{
					$facebook = $facebook;
				}
			}

			if(!empty($twitter)){
				if (false === strpos($twitter, '://')) {
				    $twitter = 'http://' . $twitter;
				    
				}else{
					$twitter = $twitter;
				}
			}

			if(!empty($gplus)){
				if (false === strpos($gplus, '://')) {
				    $gplus = 'http://' . $gplus;
				    
				}else{
					$gplus = $gplus;
				}
			}

			if(!empty($linkedin)){
				if (false === strpos($linkedin, '://')) {
				    $linkedin = 'http://' . $linkedin;
				    
				}else{
					$linkedin = $linkedin;
				}
			}

			if(!empty($pinterest)){
				if (false === strpos($pinterest, '://')) {
				    $pinterest = 'http://' . $pinterest;
				    
				}else{
					$pinterest = $pinterest;
				}
			}

			if(!empty($digg)){
				if (false === strpos($digg, '://')) {
				    $digg = 'http://' . $digg;
				    
				}else{
					$digg = $digg;
				}
			}

			if(!empty($myspace)){
				if (false === strpos($myspace, '://')) {
				    $myspace = 'http://' . $myspace;
				    
				}else{
					$myspace = $myspace;
				}
			}

			if(!empty($tumblr)){
				if (false === strpos($tumblr, '://')) {
				    $tumblr = 'http://' . $tumblr;
				    
				}else{
					$tumblr = $tumblr;
				}
			}

			if(!empty($flickr)){
				if (false === strpos($flickr, '://')) {
				    $flickr = 'http://' . $flickr;
				    
				}else{
					$flickr = $flickr;
				}
			}

			if(!empty($reddit)){
				if (false === strpos($reddit, '://')) {
				    $reddit = 'http://' . $reddit;
				    
				}else{
					$reddit = $reddit;
				}
			}

			if(!empty($dribbble)){
				if (false === strpos($dribbble, '://')) {
				    $dribbble = 'http://' . $dribbble;
				    
				}else{
					$dribbble = $dribbble;
				}
			}

			if(!empty($blogger)){
				if (false === strpos($blogger, '://')) {
				    $blogger = 'http://' . $blogger;
				    
				}else{
					$blogger = $blogger;
				}
			}

			if(!empty($yahoo)){
				if (false === strpos($yahoo, '://')) {
				    $yahoo = 'http://' . $yahoo;
				    
				}else{
					$yahoo = $yahoo;
				}
			}

			if(!empty($aim)){
				if (false === strpos($aim, '://')) {
				    $aim = 'http://' . $aim;
				    
				}else{
					$aim = $aim;
				}
			}

			if(!empty($skype)){
				if (false === strpos($skype, '://')) {
				    $skype = 'http://' . $skype;
				    
				}else{
					$skype = $skype;
				}
			}

			if(!empty($paypal)){
				if (false === strpos($paypal, '://')) {
				    $paypal = 'http://' . $paypal;
				    
				}else{
					$paypal = $paypal;
				}
			}

			if(!empty($youtube)){
				if (false === strpos($youtube, '://')) {
				    $youtube = 'http://' . $youtube;
				    
				}else{
					$youtube = $youtube;
				}
			}

			if(!empty($vimeo)){
				if (false === strpos($vimeo, '://')) {
				    $vimeo = 'http://' . $vimeo;
				    
				}else{
					$vimeo = $vimeo;
				}
			}

			if(!empty($dailymotion)){
				if (false === strpos($dailymotion, '://')) {
				    $dailymotion = 'http://' . $dailymotion;
				    
				}else{
					$dailymotion = $dailymotion;
				}
			}

			if(!empty($netflix)){
				if (false === strpos($netflix, '://')) {
				    $netflix = 'http://' . $netflix;
				    
				}else{
					$netflix = $netflix;
				}
			}
		?>
       
        <div class="wen-side-socials">
      
   
        	<h2><?php echo $title; ?></h2>
            <ul class="wen-social-links">
            	
            	<?php if(!empty($rss)){ ?> 
            		<li><a class="wen-side-rss" href="<?php echo $rss; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="rss"'; endif; ?>>RSS</a></li>
                 <?php } ?>
                 <?php if(!empty($facebook)){ ?> 
            		<li><a class="wen-side-facebook" href="<?php echo $facebook; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="facebook"'; endif; ?>>FACEBOOK</a></li>
                 <?php } ?>
                  <?php if(!empty($twitter)){ ?> 
            		<li><a class="wen-side-twitter" href="<?php echo $twitter; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="twitter"'; endif; ?>>TWITTER</a></li>
                 <?php } ?>
                  <?php if(!empty($gplus)){ ?> 
            		<li><a class="wen-side-gplus" href="<?php echo $gplus; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="google+"'; endif; ?>>GOOGLE</a></li>
                 <?php } ?>
                 <?php if(!empty($linkedin)){ ?> 
            		<li><a class="wen-side-linkedin" href="<?php echo $linkedin; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="linkedin"'; endif; ?>>LINKEDIN</a></li>
                 <?php } ?>
                 <?php if(!empty($pinterest)){ ?> 
            		<li><a class="wen-side-pinterest" href="<?php echo $pinterest; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="pinterest"'; endif; ?>>PINTEREST</a></li>
                 <?php } ?>
                 <?php if(!empty($digg)){ ?> 
            		<li><a class="wen-side-digg" href="<?php echo $digg; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="digg"'; endif; ?>>DIGG</a></li>
                 <?php } ?>
                 <?php if(!empty($myspace)){ ?> 
            		<li><a class="wen-side-myspace" href="<?php echo $myspace; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="myspace"'; endif; ?>>MYSPACE</a></li>
                 <?php } ?>
                  <?php if(!empty($tumblr)){ ?> 
            		<li><a class="wen-side-tumblr" href="<?php echo $tumblr; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="tumblr"'; endif; ?>>TUMBLR</a></li>
                 <?php } ?>
                 <?php if(!empty($flickr)){ ?> 
            		<li><a class="wen-side-flickr" href="<?php echo $flickr; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="flickr"'; endif; ?>>FLICKR</a></li>
                 <?php } ?>
                 <?php if(!empty($reddit)){ ?> 
            		<li><a class="wen-side-reddit" href="<?php echo $reddit; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="reddit"'; endif; ?>>REDDIT</a></li>
                 <?php } ?>
                 <?php if(!empty($dribbble)){ ?> 
            		<li><a class="wen-side-dribbble" href="<?php echo $dribbble; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="dribbble"'; endif; ?>>DRIBBBLE</a></li>
                 <?php } ?>
                 <?php if(!empty($blogger)){ ?> 
            		<li><a class="wen-side-blogger" href="<?php echo $blogger; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="blogger"'; endif; ?>>BLOGGER</a></li>
                 <?php } ?>
                 <?php if(!empty($yahoo)){ ?> 
            		<li><a class="wen-side-yahoo" href="<?php echo $yahoo; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="yahoo"'; endif; ?>>YAHOO</a></li>
                 <?php } ?>
                 <?php if(!empty($aim)){ ?> 
            		<li><a class="wen-side-aim" href="<?php echo $aim; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="aim"'; endif; ?>>AIM</a></li>
                 <?php } ?>
                 <?php if(!empty($skype)){ ?> 
            		<li><a class="wen-side-skype" href="<?php echo $skype; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="skype"'; endif; ?>>SKYPE</a></li>
                 <?php } ?>
                 <?php if(!empty($paypal)){ ?> 
            		<li><a class="wen-side-paypal" href="<?php echo $paypal; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="paypal"'; endif; ?>>PAYPAL</a></li>
                 <?php } ?>
                 <?php if(!empty($youtube)){ ?> 
            		<li><a class="wen-side-youtube" href="<?php echo $youtube; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="youtube"'; endif; ?>>YOUTUBE</a></li>
                 <?php } ?>
                 <?php if(!empty($vimeo)){ ?> 
            		<li><a class="wen-side-vimeo" href="<?php echo $vimeo; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="vimeo"'; endif; ?>>VIMEO</a></li>
                 <?php } ?>
                 <?php if(!empty($dailymotion)){ ?> 
            		<li><a class="wen-side-dailymotion" href="<?php echo $dailymotion; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="dailymotion"'; endif; ?>>DAILYMOTION</a></li>
                 <?php } ?>
                 <?php if(!empty($netflix)){ ?> 
            		<li><a class="wen-side-netflix" href="<?php echo $netflix; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="netflix"'; endif; ?>>NETFLIX</a></li>
                 <?php } ?>
            </ul>
        </div>
        <?php
	}
	
	
	
	/**
	* Creates the edit form for the widget.
	*
	*/
	function form($instance){
		# Output the options
		//$defaults = array('title' => 'Get Social');
		$instance = wp_parse_args((array) $instance, $defaults); 
		$tooltip = isset( $instance['tooltip'] ) ? (bool) $instance['tooltip'] : false;
		?>
        
        
		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('title'); ?>">Title:</label>
			<input style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>

        <p>
        	<input class="checkbox" type="checkbox" <?php checked( $tooltip ); ?> id="<?php echo $this->get_field_id( 'tooltip' ); ?>" name="<?php echo $this->get_field_name( 'tooltip' ); ?>" />
		<label for="<?php echo $this->get_field_id( 'tooltip' ); ?>"> Enable Tooltip ?</label>
        </p>
        
		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('rss'); ?>">RSS Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" value="<?php echo $instance['rss']; ?>" />
		</p>
        
		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('facebook'); ?>">Facebook Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $instance['facebook']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('twitter'); ?>">Twitter Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $instance['twitter']; ?>" />
		</p>
        
         <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('gplus'); ?>">Google+ Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('gplus'); ?>" name="<?php echo $this->get_field_name('gplus'); ?>" value="<?php echo $instance['gplus']; ?>" />
		</p>
        
         <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('linkedin'); ?>">LinkedIn Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo $instance['linkedin']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('pinterest'); ?>">Pinterest Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" value="<?php echo $instance['pinterest']; ?>" />
		</p>
        
         <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('digg'); ?>">Digg Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('digg'); ?>" name="<?php echo $this->get_field_name('digg'); ?>" value="<?php echo $instance['digg']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('myspace'); ?>">Myspace Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('myspace'); ?>" name="<?php echo $this->get_field_name('myspace'); ?>" value="<?php echo $instance['myspace']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('tumblr'); ?>">Tumblr Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" value="<?php echo $instance['tumblr']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('flickr'); ?>">Flickr Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" value="<?php echo $instance['flickr']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('reddit'); ?>">Reddit Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('reddit'); ?>" name="<?php echo $this->get_field_name('reddit'); ?>" value="<?php echo $instance['reddit']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('dribbble'); ?>">Dribbble Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" value="<?php echo $instance['dribbble']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('blogger'); ?>">Blogger Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('blogger'); ?>" name="<?php echo $this->get_field_name('blogger'); ?>" value="<?php echo $instance['blogger']; ?>" />
		</p>
        
         <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('yahoo'); ?>">Yahoo Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('yahoo'); ?>" name="<?php echo $this->get_field_name('yahoo'); ?>" value="<?php echo $instance['yahoo']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('aim'); ?>">AIM Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('aim'); ?>" name="<?php echo $this->get_field_name('aim'); ?>" value="<?php echo $instance['aim']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('skype'); ?>">Skype Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" value="<?php echo $instance['skype']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('paypal'); ?>">Paypal Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('paypal'); ?>" name="<?php echo $this->get_field_name('paypal'); ?>" value="<?php echo $instance['paypal']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('youtube'); ?>">Youtube Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo $instance['youtube']; ?>" />
		</p>
        
        <p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('vimeo'); ?>">Vimeo Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo $instance['vimeo']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('dailymotion'); ?>">Dailymotion Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('dailymotion'); ?>" name="<?php echo $this->get_field_name('dailymotion'); ?>" value="<?php echo $instance['dailymotion']; ?>" />
		</p>

		<p style="text-align:left;">
			<label for="<?php echo $this->get_field_name('netflix'); ?>">Netflix Link:</label>
			<input style="width: 220px;" id="<?php echo $this->get_field_id('netflix'); ?>" name="<?php echo $this->get_field_name('netflix'); ?>" value="<?php echo $instance['netflix']; ?>" />
		</p>
        
        <?php
		
	
	} //end of form

	/**
	* Saves the widgets settings.
	*
	*/
	function update($new_instance, $old_instance){
		$instance 				=	$old_instance;
		$instance['title']		=	strip_tags(stripslashes($new_instance['title']));
		$instance['tooltip']	=	(bool) $new_instance['tooltip'];
		$instance['rss']		=	strip_tags(stripslashes($new_instance['rss']));
		$instance['facebook']	=	strip_tags(stripslashes($new_instance['facebook']));
		$instance['twitter']	=	strip_tags(stripslashes($new_instance['twitter']));
		$instance['gplus']		=	strip_tags(stripslashes($new_instance['gplus']));
		$instance['linkedin']	=	strip_tags(stripslashes($new_instance['linkedin']));
		$instance['pinterest']	=	strip_tags(stripslashes($new_instance['pinterest']));
		$instance['digg']		=	strip_tags(stripslashes($new_instance['digg']));
		$instance['myspace']	=	strip_tags(stripslashes($new_instance['myspace']));
		$instance['tumblr']		=	strip_tags(stripslashes($new_instance['tumblr']));
		$instance['flickr']		=	strip_tags(stripslashes($new_instance['flickr']));
		$instance['reddit']		=	strip_tags(stripslashes($new_instance['reddit']));
		$instance['dribbble']	=	strip_tags(stripslashes($new_instance['dribbble']));
		$instance['blogger']	=	strip_tags(stripslashes($new_instance['blogger']));
		$instance['yahoo']		=	strip_tags(stripslashes($new_instance['yahoo']));
		$instance['aim']		=	strip_tags(stripslashes($new_instance['aim']));
		$instance['skype']		=	strip_tags(stripslashes($new_instance['skype']));
		$instance['paypal']		=	strip_tags(stripslashes($new_instance['paypal']));
		$instance['youtube']	=	strip_tags(stripslashes($new_instance['youtube']));
		$instance['vimeo']		=	strip_tags(stripslashes($new_instance['vimeo']));
		$instance['dailymotion']=	strip_tags(stripslashes($new_instance['dailymotion']));
		$instance['netflix']	=	strip_tags(stripslashes($new_instance['netflix']));
		
		
		return $instance;
	}
	
	

	public function scEnqueueStyles()
			{
				wp_enqueue_style('SC_styles', plugins_url('/css/style.css', __FILE__), array(), $this->version, 'all');
				wp_deregister_script('jquery');
				wp_register_script( 'jquery', 'http://code.jquery.com/jquery-latest.js' );
				wp_enqueue_script('jquery');

				wp_deregister_script( 'jquery-ui-core' );
				wp_enqueue_script('jquery-ui-core', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js');				
				
				wp_enqueue_script('SC_custom', plugins_url( '/js/custom.js' , __FILE__ ));
				
			}
			
	
	}// END class
	
	/**
	* Register  widget.
	*
	* Calls 'widgets_init' action after widget has been registered.
	*/
	function SocialLinksInit() {
		register_widget('SocialLinksWidget');
	}	
	add_action('widgets_init', 'SocialLinksInit');

	add_shortcode('socialiconsall',myshortcode);
	
		function myshortcode($args){
			$instance=$args;
			$title 		=	apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
			$tooltip 	=	isset( $instance['tooltip'] ) ? $instance['tooltip'] : false;
			$rss 		=	$instance['rss'];
			$facebook 	=	$instance['facebook'];	
			$twitter 	=	$instance['twitter'];
			$gplus 		=	$instance['gplus'];	
			$linkedin 	=	$instance['linkedin'];
			$pinterest 	=	$instance['pinterest'];
			$digg 		=	$instance['digg'];
			$myspace 	=	$instance['myspace'];
			$tumblr 	=	$instance['tumblr'];
			$flickr 	=	$instance['flickr'];
			$reddit 	=	$instance['reddit'];
			$dribbble 	=	$instance['dribbble'];
			$blogger 	=	$instance['blogger'];		
			$yahoo 		=	$instance['yahoo'];
			$aim 		=	$instance['aim'];
			$skype 		=	$instance['skype'];
			$paypal 	=	$instance['paypal'];
			$youtube 	=	$instance['youtube'];
			$vimeo 		=	$instance['vimeo'];
			$dailymotion=	$instance['dailymotion'];
			$netflix	=	$instance['netflix'];

			/* check if http:// present in the link */
			if(!empty($rss)){
				if (false === strpos($rss, '://')) {
				    $rss = 'http://' . $rss;
				    
				}else{
					$rss = $rss;
				}
			}

			if(!empty($facebook)){
				if (false === strpos($facebook, '://')) {
				    $facebook = 'http://' . $facebook;
				    
				}else{
					$facebook = $facebook;
				}
			}

			if(!empty($twitter)){
				if (false === strpos($twitter, '://')) {
				    $twitter = 'http://' . $twitter;
				    
				}else{
					$twitter = $twitter;
				}
			}

			if(!empty($gplus)){
				if (false === strpos($gplus, '://')) {
				    $gplus = 'http://' . $gplus;
				    
				}else{
					$gplus = $gplus;
				}
			}

			if(!empty($linkedin)){
				if (false === strpos($linkedin, '://')) {
				    $linkedin = 'http://' . $linkedin;
				    
				}else{
					$linkedin = $linkedin;
				}
			}

			if(!empty($pinterest)){
				if (false === strpos($pinterest, '://')) {
				    $pinterest = 'http://' . $pinterest;
				    
				}else{
					$pinterest = $pinterest;
				}
			}

			if(!empty($digg)){
				if (false === strpos($digg, '://')) {
				    $digg = 'http://' . $digg;
				    
				}else{
					$digg = $digg;
				}
			}

			if(!empty($myspace)){
				if (false === strpos($myspace, '://')) {
				    $myspace = 'http://' . $myspace;
				    
				}else{
					$myspace = $myspace;
				}
			}

			if(!empty($tumblr)){
				if (false === strpos($tumblr, '://')) {
				    $tumblr = 'http://' . $tumblr;
				    
				}else{
					$tumblr = $tumblr;
				}
			}

			if(!empty($flickr)){
				if (false === strpos($flickr, '://')) {
				    $flickr = 'http://' . $flickr;
				    
				}else{
					$flickr = $flickr;
				}
			}

			if(!empty($reddit)){
				if (false === strpos($reddit, '://')) {
				    $reddit = 'http://' . $reddit;
				    
				}else{
					$reddit = $reddit;
				}
			}

			if(!empty($dribbble)){
				if (false === strpos($dribbble, '://')) {
				    $dribbble = 'http://' . $dribbble;
				    
				}else{
					$dribbble = $dribbble;
				}
			}

			if(!empty($blogger)){
				if (false === strpos($blogger, '://')) {
				    $blogger = 'http://' . $blogger;
				    
				}else{
					$blogger = $blogger;
				}
			}

			if(!empty($yahoo)){
				if (false === strpos($yahoo, '://')) {
				    $yahoo = 'http://' . $yahoo;
				    
				}else{
					$yahoo = $yahoo;
				}
			}

			if(!empty($aim)){
				if (false === strpos($aim, '://')) {
				    $aim = 'http://' . $aim;
				    
				}else{
					$aim = $aim;
				}
			}

			if(!empty($skype)){
				if (false === strpos($skype, '://')) {
				    $skype = 'http://' . $skype;
				    
				}else{
					$skype = $skype;
				}
			}

			if(!empty($paypal)){
				if (false === strpos($paypal, '://')) {
				    $paypal = 'http://' . $paypal;
				    
				}else{
					$paypal = $paypal;
				}
			}

			if(!empty($youtube)){
				if (false === strpos($youtube, '://')) {
				    $youtube = 'http://' . $youtube;
				    
				}else{
					$youtube = $youtube;
				}
			}

			if(!empty($vimeo)){
				if (false === strpos($vimeo, '://')) {
				    $vimeo = 'http://' . $vimeo;
				    
				}else{
					$vimeo = $vimeo;
				}
			}

			if(!empty($dailymotion)){
				if (false === strpos($dailymotion, '://')) {
				    $dailymotion = 'http://' . $dailymotion;
				    
				}else{
					$dailymotion = $dailymotion;
				}
			}

			if(!empty($netflix)){
				if (false === strpos($netflix, '://')) {
				    $netflix = 'http://' . $netflix;
				    
				}else{
					$netflix = $netflix;
				}
			}


			?>
	       
	        <div class="wen-side-socials">
	      
	   
	        	<h2><?php echo $title; ?></h2>
	            <ul class="wen-social-links">
	            	
	            	<?php if(!empty($rss)){ ?> 
	            		<li><a class="wen-side-rss" href="<?php echo $rss; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="rss"'; endif; ?>>RSS</a></li>
	                 <?php } ?>
	                 <?php if(!empty($facebook)){ ?> 
	            		<li><a class="wen-side-facebook" href="<?php echo $facebook; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="facebook"'; endif; ?>>FACEBOOK</a></li>
	                 <?php } ?>
	                  <?php if(!empty($twitter)){ ?> 
	            		<li><a class="wen-side-twitter" href="<?php echo $twitter; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="twitter"'; endif; ?>>TWITTER</a></li>
	                 <?php } ?>
	                  <?php if(!empty($gplus)){ ?> 
	            		<li><a class="wen-side-gplus" href="<?php echo $gplus; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="google+"'; endif; ?>>GOOGLE</a></li>
	                 <?php } ?>
	                 <?php if(!empty($linkedin)){ ?> 
	            		<li><a class="wen-side-linkedin" href="<?php echo $linkedin; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="linkedin"'; endif; ?>>LINKEDIN</a></li>
	                 <?php } ?>
	                 <?php if(!empty($pinterest)){ ?> 
	            		<li><a class="wen-side-pinterest" href="<?php echo $pinterest; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="pinterest"'; endif; ?>>PINTEREST</a></li>
	                 <?php } ?>
	                 <?php if(!empty($digg)){ ?> 
	            		<li><a class="wen-side-digg" href="<?php echo $digg; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="digg"'; endif; ?>>DIGG</a></li>
	                 <?php } ?>
	                 <?php if(!empty($myspace)){ ?> 
	            		<li><a class="wen-side-myspace" href="<?php echo $myspace; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="myspace"'; endif; ?>>MYSPACE</a></li>
	                 <?php } ?>
	                  <?php if(!empty($tumblr)){ ?> 
	            		<li><a class="wen-side-tumblr" href="<?php echo $tumblr; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="tumblr"'; endif; ?>>TUMBLR</a></li>
	                 <?php } ?>
	                 <?php if(!empty($flickr)){ ?> 
	            		<li><a class="wen-side-flickr" href="<?php echo $flickr; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="flickr"'; endif; ?>>FLICKR</a></li>
	                 <?php } ?>
	                 <?php if(!empty($reddit)){ ?> 
	            		<li><a class="wen-side-reddit" href="<?php echo $reddit; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="reddit"'; endif; ?>>REDDIT</a></li>
	                 <?php } ?>
	                 <?php if(!empty($dribbble)){ ?> 
	            		<li><a class="wen-side-dribbble" href="<?php echo $dribbble; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="dribbble"'; endif; ?>>DRIBBBLE</a></li>
	                 <?php } ?>
	                 <?php if(!empty($blogger)){ ?> 
	            		<li><a class="wen-side-blogger" href="<?php echo $blogger; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="blogger"'; endif; ?>>BLOGGER</a></li>
	                 <?php } ?>
	                 <?php if(!empty($yahoo)){ ?> 
	            		<li><a class="wen-side-yahoo" href="<?php echo $yahoo; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="yahoo"'; endif; ?>>YAHOO</a></li>
	                 <?php } ?>
	                 <?php if(!empty($aim)){ ?> 
	            		<li><a class="wen-side-aim" href="<?php echo $aim; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="aim"'; endif; ?>>AIM</a></li>
	                 <?php } ?>
	                 <?php if(!empty($skype)){ ?> 
	            		<li><a class="wen-side-skype" href="<?php echo $skype; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="skype"'; endif; ?>>SKYPE</a></li>
	                 <?php } ?>
	                 <?php if(!empty($paypal)){ ?> 
	            		<li><a class="wen-side-paypal" href="<?php echo $paypal; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="paypal"'; endif; ?>>PAYPAL</a></li>
	                 <?php } ?>
	                 <?php if(!empty($youtube)){ ?> 
	            		<li><a class="wen-side-youtube" href="<?php echo $youtube; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="youtube"'; endif; ?>>YOUTUBE</a></li>
	                 <?php } ?>
	                 <?php if(!empty($vimeo)){ ?> 
	            		<li><a class="wen-side-vimeo" href="<?php echo $vimeo; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="vimeo"'; endif; ?>>VIMEO</a></li>
	                 <?php } ?>
	                 <?php if(!empty($dailymotion)){ ?> 
	            		<li><a class="wen-side-dailymotion" href="<?php echo $dailymotion; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="dailymotion"'; endif; ?>>DAILYMOTION</a></li>
	                 <?php } ?>
	                 <?php if(!empty($netflix)){ ?> 
	            		<li><a class="wen-side-netflix" href="<?php echo $netflix; ?>" target="_blank" <?php if ( $tooltip ): echo 'title="netflix"'; endif; ?>>NETFLIX</a></li>
	                 <?php } ?>
	            </ul>
	        </div>
	        <?php
		}
		