<?php
/**
 * Template Name: Donate Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
	<div class="content">
		<h1>
			<?php the_title(); ?>
		</h1>
		<div class="donate-method">
			<h2 class="donate-method--title">via Paypal</h2>
			<div class="paypal-method">
				<h3>Once</h3>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="hidden" name="hosted_button_id" value="FZ9RY42U8D4A2" />
					<input type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" />
					<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0" border="0" />
				</form>
			</div>
			<div style="margin-bottom: 50px;" class="paypal-method">
				<h3>Recurring Donations</h3>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<select name="os0">
						<option value="$1 Monthly">$1.00 USD - Monthly</option>
						<option value="$5 Monthly">$5.00 USD - Monthly</option>
						<option value="$20 Monthly">$20.00 USD - Monthly</option>
						<option value="$30 Monthly">$30.00 USD - Monthly</option>
						<option value="$50 Monthly">$50.00 USD - Monthly</option>
						<option value="$100 Monthly">$100.00 USD - Monthly</option>
					</select>
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="image" alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" />
					<img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0" border="0" />
					<input type="hidden" name="hosted_button_id" value="FCDZZFAR57F4N" />
					<input type="hidden" name="currency_code" value="USD" />
					<input type="hidden" name="on0" value="" />
				</form>
			</div>
			<h2 class="donate-method--title">via Snail Mail</h2>
			<small>
				We can also accept a check or money order made payable to <strong>Space Advocates</strong>. Please mail your donations to:
			</small>
			<p class="address--mail">
				Space Advocates<br>
				PO Box 2035<br>
				Corvallis, Oregon 97339-2035
			</p>
		</div>
		<div class="donate-method">
			<h2 class="donate-method--title">via Cryptocurrency</h2>
			<h3>Bitcoin</h3>
			<p class="address--mail">
				<small>
					Bitcoin is a secure and anonymous digital currency. Bitcoins are a safer and faster alternative to other donation methods.
				</small>
			</p>
			<p class="address--mail">
				<a style="padding-left: 6em;" class="coinbase-button" data-code="17be5c12e3124b3550d38f1afe5ced9a" data-button-style="custom_large" href="https://coinbase.com/checkouts/17be5c12e3124b3550d38f1afe5ced9a">Donate Bitcoins</a>
			</p>
			<h3>Dogecoin</h3>
			<p class="address--mail">
				<small>Dogecoin is a decentralized, peer-to-peer digital currency that enables you to easily send money online. Dogecoin users may send Doge to the following address:</small>
			</p>
			<p class="address--mail">
				<a style="padding-left: 6em;" href="https://s3.amazonaws.com/SpaceAdvocatesImages/Dogecoin.png" target="_blank"><img style="max-width: 100px;" src="https://s3.amazonaws.com/SpaceAdvocatesImages/Dogecoin.png"></a>
				DSawmZCuHUzMHHiXNju28efCC8TnmQEeCF
			</p>
			<h3>Litecoin</h3>
			<p class="address--mail">
				<small>Simillar to Bitcoin, Litecoin allows for fast and secure transactions worldwide, and has many exchanges which allow you to trade for Litecoins. Litecoin users may send Litecoin to the following address:</small>
			</p>
			<p class="address--mail">
				<a style="padding-left: 6em;" href="https://s3.amazonaws.com/SpaceAdvocatesImages/Litecoin.png" target="_blank"><img style="max-width: 100px;" src="https://s3.amazonaws.com/SpaceAdvocatesImages/Litecoin.png"></a>
				Lfdui3LGfi37tBQUfSMtyen3Z4EQzGUUHy
			</p>

		</div>
		<div class="donate-method">
		</div>
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( 'content', 'notice' );

			endwhile;
		?>
	</div>
	<?php get_sidebar(); ?>
	<script src="https://coinbase.com/assets/button.js" type="text/javascript"></script>
<?php
get_footer();
