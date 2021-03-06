<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="introquote parallax">
                <div class="">
                    <p><em>"You can descend a staircase here a hundred and fifty feet down, and stand at the edge of the water. After you have done it, you will wonder why you did it; but you will then be too late.... I never was so scared before and survived it."</em></p>
                    <p><em>Mark Twain, 1871</em></p>

                    <div class="downarrow">&#x2304;</div>
                </div>
            </section>

            <div class="jumbotron">
                <div class="content flexbox">

                    <div class="cover">
                        <img src="wp-content/uploads/2016/08/coverMockup.png" alt="Niagara Cover" class="" />
                    </div>

                    <section class="mainTitle">
                        <h1>Niagara</h1>
                        <h2>A Novel</h2>
                        <h4>By Linda Grace</h4>
                        <p>Available now in print and Kindle formats </p>
                        <div class="buyButtons">
                            <div class="linkbutton"><a target="_blank" href="https://www.amazon.com/dp/0997577401" class="buy">Buy at Amazon</a></div>
                            <!-- <div class="linkbutton"><a target="_blank" href="https://www.amazon.com/Niagara-Novel-Linda-Grace-ebook/dp/B01LYZKGLR" class="buy">Buy at Amazon (Kindle)</a></div>-->
                            <div class="linkbutton"><a target="_blank" href="http://a.co/jdzwEpf" class="sample">Read Sample Chapters</a></div>
                            <!-- <a href="" class="sample">Read Sample Chapters</a>
						<a href="" class="amazon">Buy at Amazon</a> -->
                        </div>
                        <img src="wp-content/themes/niagara/images/layout/bigRockLogo.png" alt="" class="bigRockLogo" />

                        <div class="icons share">
                            <p>Share:</p>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=www.niagarathenovel.com" title="" class="genericon genericon-facebook" target="_blank"></a>
                            <a href="https://twitter.com/home?status=Now%20reading%3A%20Niagara%3A%20A%20Novel%20by%20Linda%20Grace.%20www.niagarathenovel.com" title="" class="genericon genericon-twitter" target="_blank"></a>
                            <a href="https://plus.google.com/share?url=www.niagarathenovel.com" title="" class="genericon genericon-googleplus" target="_blank"></a>
                        </div>

                    </section>

                </div>
            </div>
            <!-- /jumbotron -->

            <section class="reviews parallax">
                <div class="content">
                    <div class="slider">

                        <div class="sliderItem">
                            <p>"[Reading Niagara] we were forced to allow the deeper questions of existence and belief to enter our world of consciousness. We were led to contemplate the warming of the planet and the ephemeral value of our natural world."</p>
                            <p>-- Walter, Washington, D.C.</p>
                        </div>

                        <div class="sliderItem">
                            <p>"A number of references in this delightful novel conjure up visions of colorful figures that left their indelible mark on the Cataract City. Grace knows of where she writes."</p>
                            <p>-- Don Glynn, Niagara Gazette</p>
                        </div>

                        <div class="sliderItem">
                            <p>"… the story made a nice blend of history both long past and recent… characters were interesting and believable…. [a] very suspenseful and exciting finish."</p>
                            <p>-- Tom, Youngstown, NY</p>
                        </div>

                        <div class="sliderItem">
                            <p>&quot;This novel will not leave me soon. It will remind me that every place, even if less majestic than Niagara Falls, has a history that should not be forgotten, and a future that is determined by its peoples.&quot;</p>
                            <p>-- Dr. Tammie L. Merino, The Behrend College, Penn State Erie&quot;</p>
                        </div>

                        <div class="sliderItem">
                            <p>&quot;The author ... offers a special treat to those who know Niagara Falls intimately. ...Great fun and worth the read!.&quot;</p>
                            <p>-- Sheila Z, Niagara Falls</p>
                        </div>
                        

                    </div>
                </div>
                <div class="arch"></div>
            </section>

            <section class="news">

                <h2 class="banner">
                    <span class="left"></span>
                        Latest News &amp; Events
                    <span class="right"></span>
                </h2>

                <div class="content flexbox">
                    <?php 
                        
                        //hit db for posts
                        query_posts( 'cat=3&posts_per_page=2' );

                        // Start the Loop.
                        while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>">

                            <header class="entry-header">
                                <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                            </header>

                            <div class="flexbox">
                                <div class="excerpt">
                                    <?php the_excerpt();?>
                                </div>

                                <div class="morelink linkbutton">
                                    <a href=" <?php echo esc_url( get_permalink() );?> ">Full Article</a>
                                </div>
                            </div>

                        </article>
                        <!-- #post-## -->

                        <?	endwhile;
                            ?>
                </div>

            </section>

            <section class="synopsis">

                <div class="content flexbox">

                    <h3>Always on the brink ... </h3>

                    <div class="sample">
                        <p>When Anne Techa learns that the landmark Turtle building near the American Falls has been purchased by a mysterious Native American corporation, she fears that new development in downtown Niagara Falls will threaten her historic home by the upper rapids. The man behind the purchase, a Seneca Indian named John Lone, is hoping that his project in Niagara Falls will bring him long-sought acclaim.</p>

                        <p>Teenage Phoebe Techa enters a rebranded Maid of the Mist beauty contest hoping to win fame and fortune – and a ticket out of Niagara Falls. Her friend Leonard Mountview, whose grandfather is a prominent Tuscarora Indian activist for native rights, struggles to find his footing between two worlds.</p>

                        <p>The future always bumps against the past in Niagara Falls: Mark Twain, Red Jacket, Abraham Lincoln, Nikola Tesla, and Marilyn Monroe are among historical figures in this novel whose ties to Niagara still resound.</p>

                        <div class="linkbutton">
                            <a target="_blank" href="http://a.co/jdzwEpf">Read More</a>
                        </div>

                    </div>

                    <div class="photo">
                        <img src="wp-content/themes/niagara/images/layout/fallsPhoto.jpg" alt="" title="" />
                    </div>

                </div>
            </section>

        </main>
        <!-- .site-main -->

        <!-- <?php get_sidebar( 'content-bottom' ); ?> -->

    </div>
    <!-- .content-area -->

    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>
