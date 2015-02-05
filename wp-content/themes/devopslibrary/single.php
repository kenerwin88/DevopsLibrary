<?php get_header(); ?>
<body class="homepage_index">
<header>
    <ul class="navbar">
        <li><a href="devopslibrary.com" id="logo" ></a>
            <form action="http://www.devopslibrary.com/search" id="search">
                <input autocomplete="off" class="search-query ui-autocomplete-input" id="term" name="term"
                       placeholder="Search Videos &amp; Guides" type="text">
                <a class="search-submit-link" href="http://www.devopslibrary.com/#"><i
                        class="icon2-search"></i>Search</a>
                <input style="display:none;" type="submit" value="Search">
                <ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox"
                    style="z-index: 1; top: 0; left: 0; display: none;"></ul>
            </form>
        </li>
        <li class="dropdown dropdown-categories">
            <a class="toggle" href="http://www.devopslibrary.com/#">Categories<i class="icon2-dropdown"></i></a>
            <ul class="dropdown-menu">
                <li><a href="http://www.devopslibrary.com/categories/5-Style">Chef</a></li>
                <li><a href="http://www.devopslibrary.com/categories/1-Food">Continous Integration</a></li>
                <li><a href="http://www.devopslibrary.com/categories/2-Tech">Monitoring</a></li>
                <li><a href="http://www.devopslibrary.com/categories/4-Dance">Version Control</a></li>
            </ul>
        </li>
    </ul>
</header>

<div id="page">
    <div id="content">

        <?php
        global $post;
        $args = array( 'posts_per_page' => 2, 'orderby' => 'rand' );
        $rand_posts = get_posts( $args );
        foreach ( $rand_posts as $post ) :
            setup_postdata( $post ); ?>
            <div id="big-topic-column">
                <div class="col">
                    <div class="big-topic">
                        <div class="category-icon food"></div>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <div class="content">

                                <span class="video-thumbsmall"><?php the_post_thumbnail( array(280, 160) ); ?></span></span>

                                <h2><?php the_title(); ?></h2>

                                <div class="category food">
                                    <span>MaLogging</span>
                                </div>
              <span class="expert">
                <span class="name">Date:</span>
                <span class="title">January 12, 2015</span>
              </span>

                                <?php the_excerpt(); ?>
                                <span class="watch-how">View Tutorial ▸</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
        <div class="homepage-sidebar" id="big-topic-column">
            <div class="col">
                <div id="featured-videos">
                    <h2>Follow DevOpsLibrary</h2>
                    <ul id="follow-howcast">
                        <li class="twitter-follow">
                            <a class="twitter-follow-button"
                               href="https://twitter.com/devopslibrary"
                               data-show-count="true"
                               data-lang="en">
                                Follow @devopslibrary
                            </a>
                        </li>
                        <li class="google-plus">Google Plus Placeholder
                            <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
                        </li>
                        <li class="youtube-subscribe">
                            <div class="g-ytsubscribe" data-channelid="UC3q80yTlbGzoYZFoTLQPTJw" data-layout="default"
                                 data-count="default"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
    <script>
        //<![CDATA[
        $('#term').focus();
        //]]>
    </script>

    <footer>
        <ul>
            <li><a href="http://info.devopslibrary.com/about">About Us</a></li>
            <li><a href="http://info.devopslibrary.com/site/tos">Terms Of Service</a></li>
            <li><a href="http://info.devopslibrary.com/site/privacy">Privacy</a></li>
            <li><a href="http://www.devopslibrary.com/faq">FAQs</a></li>
            <li class="copyright">DevOps Library © 2015</li>
        </ul>
    </footer>
</div>
<script type="text/javascript">
    //<![CDATA[
    (function () {

        $("input#term").val("");

        $("a.search-submit-link").click(function (e) {
            e.preventDefault();
            return $('form#search').submit();
        });

        if (DetectTierTablet() === true) {
            $("#header").addClass("ipad");
            $(document).click(function (e) {
                if (!($(this).is("a") || $(e.target).parents('.carousel').length === 1)) {
                    e.preventDefault();
                }
                if ($(e.target).parents().index($('.dropdown-categories')) === -1) {
                    if ($(".dropdown-categories").is(":visible")) {
                        $(".dropdown-categories").removeClass("open");
                    }
                }
                if ($(e.target).parents().index($('.dropdown-share')) === -1) {
                    if ($(".dropdown-share").is(":visible")) {
                        return $(".dropdown-share").removeClass("open");
                    }
                }
            });
            $('.dropdown').click(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('open')) {
                    return $(this).addClass('open');
                } else {
                    return $(this).removeClass('open');
                }
            });
            $("a").click(function () {
                return window.location = $(this).attr("href");
            });
            $("a li").click(function () {
                return window.location = $(this).parent("a").attr("href");
            });
        } else {
            $('.dropdown').mouseover(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('open')) {
                    return $(this).addClass('open');
                }
            });
            $('.dropdown').mouseout(function (e) {
                e.preventDefault();
                if ($(this).hasClass('open')) {
                    return $(this).removeClass('open');
                }
            });
            $('html').click(function () {
                if ($(".dropdown").hasClass("open")) {
                    return $('.dropdown').removeClass('open');
                }
            });
        }

    }).call(this);

    //]]>
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

