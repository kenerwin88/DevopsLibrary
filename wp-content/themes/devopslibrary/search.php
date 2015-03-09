<?php get_header(); ?>
<body class="homepage_index">
<header>
    <ul class="navbar">
        <li><a href="devopslibrary.com" id="logo" ></a>
            <form action="<?php bloginfo('home'); ?>" id="search">
                <input autocomplete="off" class="search-query ui-autocomplete-input" id="s" name="s"
                       placeholder="Search Videos &amp; Guides" type="text" value="<?php echo wp_specialchars($s, 1); ?>">
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
        <script src="https://apis.google.com/js/platform.js"></script>
        <h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>

        <span style="text-align: center;"><h3>If you like our videos please subscribe :D  Thank you!  --  <div class="g-ytsubscribe" data-channelid="UCOnioSzUZS-ZqsRnf38V2nA" data-layout="full" data-count="default"></div></h3></span>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content("Continue reading " . get_the_title()); ?>
            <?php comments_template(); ?>

        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

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

