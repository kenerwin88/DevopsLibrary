<?php get_header(); ?>
<body class="homepage_index" data-action="index" data-controller="homepage" itemscope=""
      itemtype="http://schema.org/WebPage" data-twttr-rendered="true">
<header>
    <ul class="navbar">
        <li>
            <a href="images/devopslibrary   The best how-to videos on the web.html" id="logo">devopslibrary</a>
        </li>
        <li>
            <form action="http://www.devopslibrary.com/search" id="search">
                <input autocomplete="off" class="search-query ui-autocomplete-input" id="term" name="term"
                       placeholder="Search Videos &amp; Guides" type="text" role="textbox" aria-autocomplete="list"
                       aria-haspopup="true">
                <a class="search-submit-link" href="http://www.devopslibrary.com/#"><i
                        class="icon2-search"></i>Search</a>
                <input style="display:none;" type="submit" value="Search">
                <ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox"
                    aria-activedescendant="ui-active-menuitem"
                    style="z-index: 1; top: 0px; left: 0px; display: none;"></ul>
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
<section class="blue" id="hero">
    <div class="content">
        <div class="carousel">
            <div class="main">
                <h2>
                    Featured Tutorials
                </h2>
                <ol class="dots">
                    <li data-i="0" class="">
                        <a href="http://www.devopslibrary.com/" title="Temp"></a>
                    </li>
                    <li data-i="1" class="">
                        <a href="http://www.devopslibrary.com" title="Temp"></a>
                    </li>
                    <li data-i="2">
                        <a href="http://www.devopslibrary.com" title="Temp"></a>
                    </li>
                    <li data-i="3">
                        <a href="http://www.devopslibrary.com" title="Temp"></a>
                    </li>
                    <li data-i="4">
                        <a href="http://www.devopslibrary.com" title="Temp"></a>
                    </li>
                </ol>
                <div class="icon-overlay">
                    <div class="category-icon dance" style="display: none;"></div>
                    <div class="category-icon parenting" style="display: none;"></div>
                    <div class="category-icon dance" style="display: block;"></div>
                    <div class="category-icon food" style="display: none;"></div>
                    <div class="category-icon health" style="display: none;"></div>
                </div>
                <div class="window">
                    <ol style="left: -2910px;">
                        <li class="">
                            <a href="http://www.devopslibrary.com/Temp" title="Temp">
                                <div class="content">
                                    <h1>Stir it up, your first Chef recipe</h1>

                                    <div class="category health">
                                        <span>Configuration Management</span>
                                    </div>
                                </div>
                                <div class="video-thumb">
                                    <img alt="Weight Loss Tips"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/images/chef2.jpg">
                                    <span class="play"></span>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="http://www.devopslibrary.com" title="Temp">
                                <div class="content">
                                    <h1>Take me to me whale!</h1>

                                    <div class="category dance">
                                        <span>Containers</span>
                                    </div>
                                </div>
                                <div class="video-thumb">
                                    <img alt="How to Enjoy Winter"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/images/docker.jpg">
                                    <span class="play"></span>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="http://www.devopslibrary.com/" title="Temp">
                                <div class="content">
                                    <h1>Jenkins for Ops Overview</h1>

                                    <div class="category parenting">
                                        <span>Continuous Integration</span>
                                    </div>
                                </div>
                                <div class="video-thumb">
                                    <img alt="Christmas Gift Guide"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/images/jenkins.jpg">
                                    <span class="play"></span>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="http://www.devopslibrary.com/" title="Temp">
                                <div class="content">
                                    <h1>Version Control: Saving and Sharing Code</h1>

                                    <div class="category dance">
                                        <span>Version Control</span>
                                    </div>
                                </div>
                                <div class="video-thumb">
                                    <img alt="Temp"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/images/githubdumped3.jpg">
                                    <span class="play"></span>
                                </div>
                            </a>
                        </li>
                        <li class="">
                            <a href="http://www.devopslibrary.com" title="Temp">
                                <div class="content">
                                    <h1>Logging (!Flogging) matters: ELK</h1>

                                    <div class="category food">
                                        <span>Monitoring</span>
                                    </div>
                                </div>
                                <div class="video-thumb">
                                    <img alt="How to Make Candy"
                                         src="<?php bloginfo('stylesheet_directory'); ?>/images/elk.jpg">
                                    <span class="play"></span>
                                </div>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="overlay">
                <a class="prev" href="http://www.devopslibrary.com/#">◀</a>
                <ol>
                    <li style="display: none;">
                        <h3>Are you good in the kitchen? Fortunately this time it doesn’t matter, you’ll be mixing up
                            Chef recipes before you know it!</h3>

                        <div class="watch"><a href="http://www.devopslibrary.com/" title="Temp">View Tutorial ▸</a>
                        </div>
                    </li>
                    <li style="display: none;">
                        <h3>We'll sail into the harbour no prouder man there'll be. We'll show them all that docker
                            rocks and really is easy. </h3>

                        <div class="watch"><a href="http://www.devopslibrary.com" title="Temp">View Tutorial ▸</a></div>
                    </li>
                    <li style="display: list-item;">
                        <h3>Jenkins isn't just for developers! Make your scripts easy to reuse, run, and test with our
                            favorite butler! </h3>

                        <div class="watch"><a href="http://www.devopslibrary.com/" title="Temp">View Tutorial ▸</a>
                        </div>
                    </li>
                    <li style="display: none;">
                        <h3>Version control is about saving your future self today or: How I learned to stop worrying
                            and love the Github.</h3>

                        <div class="watch"><a href="http://www.devopslibrary.com/" title="Temp">View Tutorial ▸</a>
                        </div>
                    </li>
                    <li style="display: none;">
                        <h3>What do you get when you combine Elasticsearch, Logstash, and Kibana? An amazing (and free)
                            logging platform. </h3>

                        <div class="watch"><a href="http://www.devopslibrary.com" title="Temp">View Tutorial ▸</a></div>
                    </li>
                </ol>
                <a class="next" href="http://www.devopslibrary.com/#">▶</a>
            </div>
        </div>

    </div>
</section>

<div id="page">
    <section id="new-topics">
        <div class="wide-header">
            <h2>Newest Tutorials</h2>
        </div>
        <div class="content-row">
            <?php
            $args = array('numberposts' => 3,
                'offset' => 0,
                'category' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'suppress_filters' => true);

            $recent_posts = wp_get_recent_posts($args, ARRAY_A);
            foreach ($recent_posts as $post) {
                ?>
                <ul class="topics">
                    <li data-category="Tech">
                        <a href="http://www.devopslibrary.com/Temp" title="Temp">
                            <div class="thumb">
                                <?php echo get_the_post_thumbnail($post['ID'],array(112,63)); ?>
                            </div>
                            <div class="content">
                                <h3><?php echo get_the_title($post['ID']); ?></h3>
                                <p class="meta"><?php echo get_the_time(get_option('date_format'), $post['ID']);?></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </section>

    <div id="content">

        <div id="big-topic-column">
            <div class="col">
                <div class="big-topic">
                    <div class="category-icon food"></div>
                    <a href="http://www.devopslibrary.com/Temp" title="Coming Soon">
                        <div class="content">
                            <span class="video-thumb"><img alt="Temp" height="160"
                                                           src="<?php bloginfo('stylesheet_directory'); ?>/images/elk.jpg"
                                                           width="280"><span class="play"></span></span>

                            <h2>Logging (!Flogging) Matters: ELK</h2>

                            <div class="category food">
                                <span>Logging</span>
                            </div>
              <span class="expert">
                <span class="name">Date:</span>
                <span class="title">January 12, 2015</span>
              </span>

                            <p>Learn how to set up the ELK stack from the ground up, a perfect free logging
                                platform.</p>
                            <span class="watch-how">View Tutorial ▸</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="big-topic-column">
            <div class="col">
                <div class="big-topic">
                    <div class="category-icon food"></div>
                    <a href="http://www.devopslibrary.com/" title="Temp">
                        <div class="content">
                            <span class="video-thumb"><img alt="Temp" height="160"
                                                           src="<?php bloginfo('stylesheet_directory'); ?>/images/githubdumped3.jpg"
                                                           width="280"><span class="play"></span></span>

                            <h2>Version Control with Github</h2>

                            <div class="category food">
                                <span>Version Control</span>
                            </div>
              <span class="expert">
                <span class="name">Date:</span>
                <span class="title">January 15, 2015</span>
              </span>

                            <p>An introduction to version control, with a focus on Github.</p>
                            <span class="watch-how">View Tutorial ▸</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
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

<script>
    //<![CDATA[
    var _qevents = _qevents || [];
    (function () {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
    })();
    _qevents.push({
        qacct: "p-e3dbUX4Rp2rJ-"
    });
    //]]>
</script>
<iframe src="images/container.html" style="visibility: hidden; display: none;"></iframe>
<noscript>
    &lt;div style='display: none'&gt;
    &lt;img alt="Quantcast" border="0" height="1" src="//pixel.quantserve.com/pixel/p-e3dbUX4Rp2rJ-.gif" width="1" /&gt;
    &lt;/div&gt;
</noscript>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

