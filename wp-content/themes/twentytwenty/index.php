<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>
<!-- Изображение для меню -->





    <div class="offer">
        <div class="mobile-login">
            <!--    <button class="btn btn-succes">Login</button> -->
            <button type="button" style="border: solid 2px #FFFFFF;
                        background: #000055; font-color: #FFFFFFF; border-radius: 4px;
height: 40px; padding-top: 9px; text-transform: capitalize;">Login</button>
        </div>
        <h1>Do you wont visit to Paris?</h1>
    </div>
<div class="search-offer">
    <input type="text" style="width: 30%;" class="search-offer-item"placeholder="We are you living from?" value="">
    <input type="text" style="width: 30%;" class="search-offer-item"placeholder="We are do you wont to go?" value="">
    <input type="date" style="width: 25%;" class="search-offer-item" placeholder="Date" value="">
    <button class="search-offer-item" style="width: 15%;">Search</button>
</div>


<!-- -->

<main id="site-content" role="main" style="border: solid 1px; background: #FFFFFF;">
    <div class="container" style="margin-top: 150px; background: #FFFFFF;">
        <div class="row" style="padding: 0;">
            <div class="col-sm-12 col-md-3"><span>Flights</span></div>
            <div class="col-sm-12 col-md-3"></div>
            <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="active-link">Non stop</a>
                <a href="#" class="link-hotel">Best Price</a>
                <a href="#" class="link-hotel">Airline</a>
                <a href="#" class="link-hotel">Shedule</a></div>
        </div>
        <div class="definitions">
<div class="row" style="margin-top: 50px; margin-bottom: 50px; color: #808080; box-sizing:border-box;">

    <div class="col-sm-12 col-md-2">Airline</div>
    <div class="col-sm-12 col-md-2">Date</div>
    <div class="col-sm-12 col-md-2">Departure</div>
    <div class="col-sm-12 col-md-2">Arival</div>
    <div class="col-sm-12 col-md-2">Time</div>
    <div class="col-sm-12 col-md-2">Price</div>
</div>
        </div>
<div class="flight" style="border-top: solid 1px #C0C0C0;">
        <div class="row">
            <div class="col-sm-12 col-md-2"><i class="glyphicon glyphicon-plane"></i>&nbsp<b>Vueling</b><br />
                &nbsp &nbsp &nbsp V01367</div>
            <div class="col-sm-12 col-md-2"><b>03/11/2017</b><br />
            in 3 days</div>
            <div class="col-sm-12 col-md-2"><b>Paris (CDG)</b><br />
            07:15</div>
            <div class="col-sm-12 col-md-2"><b>Miami</b><br />
            05:00</div>
            <div class="col-sm-12 col-md-2"><b>08:45</b><br />
            CDG-MIA</div>
            <div class="col-sm-12 col-md-2"><div class="price">870 &#36</div></div>
        </div>
</div>

        <div class="flight">
            <div class="row">
                <div class="col-sm-12 col-md-2"><i class="glyphicon glyphicon-plane"></i>&nbsp<b> Vueling</b><br />
                    &nbsp &nbsp &nbsp V01367</div>
                <div class="col-sm-12 col-md-2"><b>03/11/2017</b><br />
                    in 3 days</div>
                <div class="col-sm-12 col-md-2"><b>Paris (CDG)</b><br />
                    07:15</div>
                <div class="col-sm-12 col-md-2"><b>Miami</b><br />
                    05:00</div>
                <div class="col-sm-12 col-md-2"><b>08:45</b><br />
                    CDG-MIA</div>
                <div class="col-sm-12 col-md-2"><div class="price">870 &#36</div></div>
            </div>
        </div>

        <div class="flight">
            <div class="row">
                <div class="col-sm-12 col-md-2"><i class="glyphicon glyphicon-plane"></i>&nbsp<b> Vueling</b><br />
                    &nbsp &nbsp &nbsp V01367</div>
                <div class="col-sm-12 col-md-2"><b>03/11/2017</b><br />
                    in 3 days</div>
                <div class="col-sm-12 col-md-2"><b>Paris (CDG)</b><br />
                    07:15</div>
                <div class="col-sm-12 col-md-2"><b>Miami</b><br />
                    05:00</div>
                <div class="col-sm-12 col-md-2"><b>08:45</b><br />
                    CDG-MIA</div>
                <div class="col-sm-12 col-md-2"><div class="price">870 &#36</div></div>
            </div>
        </div>

        <div class="flight">
            <div class="row">
                <div class="col-sm-12 col-md-2"><i class="glyphicon glyphicon-plane"></i>&nbsp <b>Vueling</b><br />
                    &nbsp &nbsp &nbsp V01367</div>
                <div class="col-sm-12 col-md-2"><b>03/11/2017</b><br />
                    in 3 days</div>
                <div class="col-sm-12 col-md-2"><b>Paris (CDG)</b><br />
                    07:15</div>
                <div class="col-sm-12 col-md-2"><b>Miami</b><br />
                    05:00</div>
                <div class="col-sm-12 col-md-2"><b>08:45</b><br />
                    CDG-MIA</div>
                <div class="col-sm-12 col-md-2"><div class="price">870 &#36</div></div>
            </div>
        </div>

        <div class="flight">
            <div class="row">
                <div class="col-sm-12 col-md-2"><i class="glyphicon glyphicon-plane"></i>&nbsp <b>Vueling</b><br />
                    &nbsp &nbsp &nbsp V01367</div>
                <div class="col-sm-12 col-md-2"><b>03/11/2017</b><br />
                    in 3 days</div>
                <div class="col-sm-12 col-md-2"><b>Paris (CDG)</b><br />
                    07:15</div>
                <div class="col-sm-12 col-md-2"><b>Miami</b><br />
                    05:00</div>
                <div class="col-sm-12 col-md-2"><b>08:45</b><br />
                    CDG-MIA</div>
                <div class="col-sm-12 col-md-2"><div class="price">870 &#36</div></div>
            </div>
        </div>

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12 col-md-6"></div>
              <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="link-hotel" ">See all fligts</a></div>
        </div>


        </div>






    <div class="container" style="margin-top: 150px; background: #FFFFFF;">

        <div class="row">
            <div class="col-sm-12 col-md-3"><span>Hotels</span></div>
            <div class="col-sm-12 col-md-3"></div>
            <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="active-link">Best Price</a>
                <a href="#" class="link-hotel">Distance</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="hotels">
                    <div class="hotel-foto"></div>
                    <div class="hotel-description">
                        <div class="hotel-wrapper">
                        <div class="hotel-description-wrapper">
Hotel Paris Ouest Acheres
                        </div>
                        <div class="data-hotel">
                            <div class="data-hotel-wrapper">12,3 km</div>
                            <div class="data-hotel-wrapper">Free WI-FI</div>
                        </div>
                        <div class="price-wrapper">
                            <div class="hotel-price">30 &#36</div>
                        </div>
                        </div>
                        </div>
        </div>
            </div>

            <div class="col-sm-12 col-md-4">
                <div class="hotels">
                    <div class="hotel-foto"></div>
                    <div class="hotel-description">
                        <div class="hotel-wrapper">
                            <div class="hotel-description-wrapper">
                                Hotel Paris Ouest Acheres
                            </div>
                            <div class="data-hotel">
                                <div class="data-hotel-wrapper">12,3 km</div>
                                <div class="data-hotel-wrapper">Free WI-FI</div>
                            </div>
                            <div class="price-wrapper">
                                <div class="hotel-price">30 &#36</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="hotels">
                    <div class="hotel-foto"></div>
                    <div class="hotel-description">
                        <div class="hotel-wrapper">
                            <div class="hotel-description-wrapper">
                                Hotel Paris Ouest Acheres
                            </div>
                            <div class="data-hotel">
                                <div class="data-hotel-wrapper">12,3 km</div>
                                <div class="data-hotel-wrapper">Free WI-FI</div>
                            </div>
                            <div class="price-wrapper">
                                <div class="hotel-price">30 &#36</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!-- wrapper -->
        </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="hotels">
                        <div class="hotel-foto"></div>
                        <div class="hotel-description">
                            <div class="hotel-wrapper">
                                <div class="hotel-description-wrapper">
                                    Hotel Paris Ouest Acheres
                                </div>
                                <div class="data-hotel">
                                    <div class="data-hotel-wrapper">12,3 km</div>
                                    <div class="data-hotel-wrapper">Free WI-FI</div>
                                </div>
                                <div class="price-wrapper">
                                    <div class="hotel-price">30 &#36</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="hotels">
                        <div class="hotel-foto"></div>
                        <div class="hotel-description">
                            <div class="hotel-wrapper">
                                <div class="hotel-description-wrapper">
                                    Hotel Paris Ouest Acheres
                                </div>
                                <div class="data-hotel">
                                    <div class="data-hotel-wrapper">12,3 km</div>
                                    <div class="data-hotel-wrapper">Free WI-FI</div>
                                </div>
                                <div class="price-wrapper">
                                    <div class="hotel-price">30 &#36</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="hotels">
                        <div class="hotel-foto"></div>
                        <div class="hotel-description">
                            <div class="hotel-wrapper">
                                <div class="hotel-description-wrapper">
                                    Hotel Paris Ouest Acheres
                                </div>
                                <div class="data-hotel">
                                    <div class="data-hotel-wrapper">12,3 km</div>
                                    <div class="data-hotel-wrapper">Free WI-FI</div>
                                </div>
                                <div class="price-wrapper">
                                    <div class="hotel-price">30 &#36</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="link-hotel" ">See all hotells</a></div>
        </div>

    <div class="container" style="margin-top: 150px; background: #FFFFFF;">
        <div class="row">
            <div class="col-sm-12 col-md-2"><span>Attractions</span></div>
            <div class="col-sm-12 col-md-1"></div>
            <div class="col-sm-12 col-md-9" style="text-align: right;"><a href="#" class="active-link">All</a>
                <a href="#" class="link-hotel">Shopping</a>
                <a href="#" class="link-hotel">Shows</a>
                <a href="#" class="link-hotel">Parks</a>
                <a href="#" class="link-hotel">Circuits</a>
                <a href="#" class="link-hotel">Museums</a>
                <a href="#" class="link-hotel">Monuments</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="hotels">
                    <div class="attraction-foto-vertical"></div>
                </div>
            </div>
                <div class="col-sm-12 col-md-8">
                    <div class="hotels">
                        <div class="attraction-foto"></div>
                    </div>
                    <div class="hotels">
                        <div class="attraction-foto"></div>
                </div>
            </div>
        </div>
<div class="row">
    <div class="col-sm 12 col-md-4">
        <div class="hotels">
            <div class="attractions-foto"></div>
        </div>
    </div>
    <div class="col-sm 12 col-md-4">
        <div class="hotels">
            <div class="attractions-foto"></div>
        </div>
    </div>
    <div class="col-sm 12 col-md-4">
        <div class="hotels">
            <div class="attractions-foto"></div>
        </div>
    </div>
</div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-6"></div>
            <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="link-hotel" ">See all attractions</a></div>
        </div>
    </div> <!-- container -->
    <div class="container" style="margin-top: 150px; background: #FFFFFF;">
        <div class="row">
            <div class="col-sm-12 col-md-2"><span>Trips</span></div>
            <div class="col-sm-12 col-md-1"></div>
            <div class="col-sm-12 col-md-9" style="text-align: right;"><a href="#" class="active-link">Best Trips</a>
                <a href="#" class="link-hotel">Popularity</a>
            </div>
        </div>
        <div class="row">
            <div class="col"
                <div class="trips-foto"></div>
            </div>
                <div class="trips-description"></div>
        </div>

        <div class="row">
<div class="col-sm-12 col-md-4">
		    <div class="hotels" style="padding-left: 0px;">
    <div class="hotel-foto" style="height: 100%;"></div>
		    </div>
		    </div>
            <div class="col-sm-12 col-md-8">
              <div class="hotels" style="padding-right: 0px;">
		    <div class="hotel-description" style="height: 100%; border-top: solid 1px #C0C0C0; border-left: solid 0px;">
		                       <h3>Accec</h3>
                    <p>Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text</p>
		    </div>
		    </div>
		    </div>
		    </div>
        <div class="row">
<div class="col-sm-12 col-md-4">
		    <div class="hotels" style="padding-left: 0px;">
    <div class="hotel-foto" style="height: 100%;"></div>
		    </div>
		    </div>
            <div class="col-sm-12 col-md-8">
              <div class="hotels" style="padding-right: 0px;">
		    <div class="hotel-description" style="height: 100%; border-top: solid 1px #C0C0C0; border-left: solid 0px;">
		                       <h3>Accec</h3>
                    <p>Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text</p>
		    </div>
		    </div>
		    </div>
		    </div>
		            <div class="row">
<div class="col-sm-12 col-md-4">
		    <div class="hotels" style="padding-left: 0px;">
    <div class="hotel-foto" style="height: 100%;"></div>
		    </div>
		    </div>
            <div class="col-sm-12 col-md-8">
              <div class="hotels" style="padding-right: 0px;">
		    <div class="hotel-description" style="height: 100%; border-top: solid 1px #C0C0C0; border-left: solid 0px;">
		                       <h3>Accec</h3>
                    <p>Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text
                        Text text text text text Text text text text text</p>
		    </div>
		    </div>
		    </div>
		    </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12 col-md-6"></div>
            <div class="col-sm-12 col-md-6" style="text-align: right;"><a href="#" class="link-hotel" ">See all trips</a></div>
        </div>
    </div> <!-- container -->
</main>
    <!--
    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-2">
<h3>Aerline</h3>
        </div>
    </div>
</div> -->
	<?php
/**
	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results */
/**
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}

	?>

	<?php get_template_part( 'template-parts/pagination' );

*/
 ?>

 </main> <!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' );
   ?>



<?php
get_footer();
