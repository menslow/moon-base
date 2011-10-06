<?php
/**
 * @package WordPress
 * @subpackage 
 */
 
global $page_id;
$page = get_page($page_id);

?>

	<ul class="statGroup">
		<?php /* if using widgets */
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-right') ) : ?>
		<?php endif; ?>
		
		<li class="statWrap widget">
			<div class="stat">
			<h3 class="h_widget">Widget</h3>
				<ul>
					<li class="blob cell">
						<ul class="actions">
							<li><a href="#" class="follow"><span class="action_tip">Follow</span><span class="ico">+</span></a></li>
						</ul>
						<div class="blob-content">
							<p class="blob_date"><span class="time">Monday, 9/19 @11:00 AM</span> Vancouver</p>
							<h3><a href="#">Developing an Enterprise Wide Social Media Solution </a></h3>
							<p class="describe">Strategy, tips, advice and guidelines for putting social media into practice within large organizations. Speakers include representatives from Unilever, Nissan and AON</p> 
							<!-- User Actions -->
							<div class="aside links">
							<ul><li><a href="#" class="grn"><span class="ico pin">via</span> Hard Rock Hotel</a></li></ul>
						</div>
					</li>
					<li class="blob cell">
						<ul class="actions">
							<li><a href="#" class="follow"><span class="action_tip">Follow</span><span class="ico">+</span></a></li>
						</ul>
						<div class="blob-content">
							<p class="blob_date"><span class="time">Monday, 9/19 @11:00 AM</span> Vancouver</p>
							<h3><a href="#">Developing an Enterprise Wide Social Media Solution </a></h3>
							<p class="describe">Strategy, tips, advice and guidelines for putting social media into practice within large organizations. Speakers include representatives from Unilever, Nissan and AON</p> 
							<!-- User Actions -->
							<div class="aside links">
							<ul><li><a href="#" class="grn"><span class="ico pin">via</span> Hard Rock Hotel</a></li></ul>
						</div>
					</li>
				</ul>
			</div>
		</li>

		<li class="statWrap widget">
			<h3 class="h_widget">Widget</h3>
			<ul class="trending">
				<li class="blob cell">
					<ul class="actions">
						<li><a href="#" class="follow"><span class="action_tip">Follow</span><span class="ico">+</span></a></li>
					</ul>
					<a href="#" class="hash">#WhyAreYou</a>
				</li>
				<li class="blob cell">
					<ul class="actions">
						<li><a href="#" class="follow"><span class="action_tip">Follow</span><span class="ico">+</span></a></li>
					</ul>
					<a href="#" class="hash">#WhyAreYou</a>
				</li>
			</ul>
		</li>
		
		<li class="statWrap widget">
			<h3 class="h_widget">Widget</h3>
			<ul class="trending links">
				<li class="blob cell">
					<ul class="actions">
						<li class="ticker">13</li>
					</ul>
					<a href="#" class="grn"><span class="ico pin">via</span> Grand Central Station</a>
				</li>
				<li class="blob cell">
					<ul class="actions">
						<li class="ticker">42</li>
					</ul>
					<a href="#" class="grn"><span class="ico pin">via</span> Beer Garden</a>
				</li>
			</ul>
		</li>
		
		<li class="statWrap widget">
			<h3 class="h_widget">Widget</h3>
			<ul>
				<li class="blob cell">
					<ul class="actions">
						<li><a href="#" class="retweet"><span class="action_tip">Retweet</span><span class="ico">+</span></a></li>
					</ul>
					<div class="blob-content">
						<span class="mug"><img src=""></span>
						<h2><a href="#">Some such</a></h2>
						<span class="blob_meta gry">1 hour ago</span>
						<p class="describe">Shoulder pork sausage, turkey andouille pork loin beef ribs. Andouille beef flank jowl pork belly. Brisket andouille short loin jowl pastrami corned beef</p> 
						<!-- User Actions -->
						<ul class="aside links">
							<!--li><a class="grn" href="#"><span class="ico pin">via</span> Grand Central Station</a></li-->
						</ul>
					</div>
				</li>
				
				<li class="blob cell">
					<ul class="actions">
						<li><a href="#" class="retweet"><span class="action_tip">Retweet</span><span class="ico">+</span></a></li>
					</ul>
					<div class="blob-content">
						<span class="mug"><img src=""></span>
						<h2><a href="#">Some such</a></h2>
						<span class="blob_meta gry">1 hour ago</span>
						<p class="describe">Shoulder pork sausage, turkey andouille pork loin beef ribs. Andouille beef flank jowl pork belly. Brisket andouille short loin jowl pastrami corned beef</p> 
						<!-- User Actions -->
						<ul class="aside links">
							<!--li><a class="grn" href="#"><span class="ico pin">via</span> Grand Central Station</a></li-->
						</ul>
					</div>
				</li>
			</ul>
		</li>
		
		<?php wp_meta(); ?>
	</ul>