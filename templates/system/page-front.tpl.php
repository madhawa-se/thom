<?php
/**
 * @file
 * Displays a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the theme is located in, e.g. themes/garland or
 *   themes/garland/minelli.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   element.
 * - $head: Markup for the HEAD element (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: A set of CSS classes for the BODY tag. This contains flags
 *   indicating the current layout (multiple columns, single column), the
 *   current path, whether the user is logged in, and so on.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled in
 *   theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been
 *   disabled in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been
 *   disabled.
 * - $primary_links (array): An array containing primary navigation links for
 *   the site, if they have been configured.
 * - $secondary_links (array): An array containing secondary navigation links
 *   for the site, if they have been configured.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the left sidebar.
 * - $breadcrumb: The breadcrumb trail for the current page.
 * - $title: The page title, for use in the actual HTML content.
 * - $help: Dynamic help text, mostly for admin pages.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - $content: The main content of the current Drupal page.
 * - $right: The HTML for the right sidebar.
 * - $node: The node object, if there is an automatically-loaded node associated
 *   with the page, and the node ID is the second argument in the page's path
 *   (e.g. node/12345 and node/12345/revisions, but not comment/reply/12345).
 *
 * Footer/closing data:
 * - $feed_icons: A string of all feed icons for the current page.
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic
 *   content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */
$banner_image = $node->field_homepage_image_1[0]['filepath'];
$banner_strapline = $node->field_homepage_strapline_1[0]['value'];
//$banner_content = $node->field_banner_content[0]['value'];
//$banner_company = $node->field_banner_company[0]['value'];
$banner_text = $node->field_homepage_cta_1[0]['value'];
$banner_action= $node->field_homepage_link_1[0]['value'];



//services
$services_header = $node->field_services_heading[0]['value'];
$services_body = $node->field_services_strapline[0]['value'];


$services_icon_1 = $node->field_services_image_1[0]['view'];
$services_text_1 = $node->field_services_cta_text_1[0]['value'];
$services_link_1 = $node->field_services_cta_1[0]['value'];

$services_icon_2 = $node->field_services_image_2[0]['view'];
$services_text_2 = $node->field_services_cta_text_2[0]['value'];
$services_link_2 = $node->field_services_cta_2[0]['value'];

$services_icon_3 = $node->field_services_image_3[0]['view'];
$services_text_3 = $node->field_services_cta_text_3[0]['value'];
$services_link_3 = $node->field_services_cta_3[0]['value'];

$services_icon_4 = $node->field_services_image_4[0]['view'];
$services_text_4 = $node->field_services_cta_text_4[0]['value'];
$services_link_4 = $node->field_services_cta_4[0]['value'];

$services_icon_5 = $node->field_services_image_5[0]['view'];
$services_text_5 = $node->field_services_cta_text_5[0]['value'];
$services_link_5 = $node->field_services_cta_5[0]['value'];

//accounting
$accounting_header = $node->field_onlineaccounting_heading[0]['value'];
$accounting_body = $node->field_onlineaccounting_body[0]['value'];
$accounting_cta_link = $node->field_onlineaccouting_cta[0]['url'];
$accounting_cta_text = $node->field_onlineaccouting_cta[0]['title'];


//events
$events_header = $node->field_events_heading[0]['value'];
$events_body = $node->field_events_signup_body[0]['value'];
$events_cta_link = $node->field_events_signup_cta[0]['value'];
$events_cta_text = $node->field_events_signup_cta_text[0]['value'];

//testimonial

$testimonial_image = $node->field_testimonials_image[0]['filepath'];

//vac
$vac_header = $node->field_vacancies_heading[0]['value'];
$vac_body = $node->field_vacancies_signup_body[0]['value'];
$vac_cta_url = $node->field_vacancies_signup_cta[0]['value'];
$vac_cta_text = $node->field_vacancies_signup_text[0]['value'];

$vac_header_1 = $node->field_vacancies_heading_1[0]['value'];
$vac_body_1 = $node->field_vacancies_signup_body_1[0]['value'];
$vac_cta_url_1 = $node->field_vacancies_signup_cta_1[0]['value'];
$vac_cta_text_1 = $node->field_vacancies_signup_text_1[0]['value'];

//$main_action_left = $node->field_ctaleft_content[0]['view'];
//$main_action_right = $node->field_ctaright_content[0]['view'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
    <head>
        <?php print $head; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php print $head_title; ?></title>
            <?php print $styles; ?>
            <?php print $scripts; ?>
            <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?></script>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"></link>
    </head>
    <body class="<?php print $body_classes; ?>">

        <div id="header" class="container header">
            <div class="row hidden-xs">
                <div class="col-sm-6">
                    <!-- header-logo -->
                    <div id="logo" class="logo">
                        <?php if (!empty($logo)) { ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo-link">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php } ?>

                    </div>
                    <!-- /header-logo -->

                </div>
                <div class="col-sm-6">
                    <!-- header-right -->
                    <?php if (!empty($header_right)): ?>
                        <?php print $header_right; ?>
                    <?php endif; ?>
                    <!-- /header-right -->
                </div> 
            </div>

            <div id="navigation" class="navigation menu hidden-xs <?php
            if (!empty($primary_links)) {
                print "withprimary";
            } if (!empty($secondary_links)) {
                print " withsecondary";
            }
            ?> ">
                     <?php if (!empty($primary_links)) { ?>
                    <div id="primary" class="primary mclearfix">
                        <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
                    </div>
                <?php } ?>

            </div> <!-- /navigation -->


            <div class="mob-nav visible-xs">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">


                        <!-- header-logo -->
                        <div id="logo" class="logo">
                            <?php if (!empty($logo)) { ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo-link">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                </a>
                            <?php } ?>

                        </div>
                        <!-- /header-logo -->

                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="search"><a data-toggle="modal" data-target="#search-modal"><i class="fa fa-search"></i></a></div>  



                    </div>
                    <!-- Collection of nav links and other content for toggling -->
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right nav-tools">
                            <li><a class="btn btn-default" href="#">Login</a></li>
                            <li><a class="btn btn-default" href="#">Register</a></li>
                            <li><a data-toggle="modal" data-target="#search-modal" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                        </ul>
                        <?php print theme('links', $primary_links, array('class' => 'links primary-links nav navbar-nav')); ?>

                    </div>
                </nav>
            </div>


        </div>
        <!-- /header -->
        <div class="fluid banner" style="background-image: url(<?php print $banner_image ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-11 col-sm-push-1">
                        <?php echo $banner_strapline ?>

                        <a class="ui-btn btn-outline" href=" <?php print $banner_action ?>"><?php print $banner_text ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="fluid help">
            <div class="container">
                <div class="row">
                    <div class="col-sm-push-2 col-sm-8">

                        <div id="content">
                            <?php if (!empty($title)) { ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php } ?>
                            <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
                            <?php
                            if (!empty($messages)): print $messages;
                            endif;
                            ?>
                            <?php
                            if (!empty($help)): print $help;
                            endif;
                            ?>
                            <div id="content-content" class="clear-block">
                                <div class="para">
                                    <?php print $content; ?>
                                </div> <!-- /content -->
                            </div>
                            <?php print $feed_icons; ?>
                        </div>
                    </div>
                    <ul class="ul-div  ui-clearfix">


                        <li class="col-sm-2 col-sm-push-1 col-xm-12">
                            <a class="img-card" href="<?php print $services_link_1 ?>">
                                <div class="hidden-xs"><?php print $services_icon_1 ?></div>
                                <p><?php print $services_text_1 ?></p>
                            </a>
                        </li>
                        <li class="col-sm-2 col-sm-push-1 col-xm-12">
                            <a class="img-card" href="<?php print $services_link_2 ?>">
                                <div class="hidden-xs"><?php print $services_icon_2 ?></div>
                                <p><?php print $services_text_2 ?></p>
                            </a>
                        </li>
                        <li class="col-sm-2 col-sm-push-1 col-xm-12">
                            <a class="img-card" href="<?php print $services_link_3 ?>">
                                <div class="hidden-xs"><?php print $services_icon_3 ?></div>
                                <p><?php print $services_text_3 ?></p>
                            </a>
                        </li>
                        <li class="col-sm-2 col-sm-push-1 col-xm-12">
                            <a class="img-card" href="<?php print $services_link_4 ?>">
                                <div class="hidden-xs"><?php print $services_icon_4 ?></div>
                                <p><?php print $services_text_4 ?></p>
                            </a>
                        </li>
                        <li class="col-sm-2 col-sm-push-1 col-xm-12">
                            <a class="img-card" href="<?php print $services_link_5 ?>">
                                <div class="hidden-xs"><?php print $services_icon_5 ?></div>
                                <p><?php print $services_text_5 ?></p>
                            </a>
                        </li>


                    </ul>

                </div>
            </div>
        </div>

        <div class="fluid accounting">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <h2 class="title"><?php print $accounting_header ?></h2>
                        <p class="para"><?php print $accounting_body ?></p>
                        <a class="ui-btn btn-outline in-block" href=" <?php print $accounting_cta_link ?>"><?php print $accounting_cta_text ?></a>
                    </div>

                    <div class="col-sm-6 img-panel">
                        <ul class="in-block">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                $accounting_icon = $node->{"field_onlineaccouting_image_$i"}[0]['view'];
                                ?>
                                <li class="">
                                    <div class="img-card">
                                        <?php print $accounting_icon ?>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <div class="events">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-sm-push-1">
                        <h2 class="title"><?php print $events_header ?></h2>
                        <p class="para"><?php print $events_body ?></p>
                        <a class="ui-btn in-block" href=" <?php print $events_cta_link ?>"><?php print $events_cta_text ?></a>
                    </div>
                    <?php if (!empty($events)) { ?>
                        <div class="col-sm-4 col-sm-push-1">
                            <?php print $events; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>




        <div class="fluid testimonial" style="background-image: url(<?php print $testimonial_image ?>)">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-push-6 col-sm-6 frame">
                        <!-- 
                        <div class="text">
                            <p class="title">“A very professional firm, who understand our business and deliver a first class service.”</p>
                            <p class="name">Ian Fraser, First Scottish Group Limited</p>
                            <a class="ui-btn btn-outline">TESTIMONIALS</a>
                        </div>
                        -->
                        <?php if (!empty($testimonial)) { ?>
                            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                <?php print $testimonial; ?>            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="fluid vacancies_intro" style="background-image: url(<?php print $testimonial_image ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">         
                        <div class="text">
                            <h2 class="title"><?php print $vac_header_1 ?></h2>
                            <p class="para"><?php print $vac_body_1 ?></p>
                            <a class="ui-btn in-block" href="<?php print $vac_cta_url_1 ?>"><?php print $vac_cta_text_1 ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="vacancies">
            <div class="container">   
                <div class="center">
                    <h2 class="title"><?php print $vac_header ?></h2>
                    <p class="para"><?php print $vac_body ?></p>
                    <a class="ui-btn btn-outline" href="<?php print $vac_cta_url ?>"><?php print $vac_cta_text ?></a>
                </div>
            </div>
        </div>

        <div class="container feed-wrap">
            <div class="row">
                <!--
                <div class="col-sm-8 col-sm-push-4">
                <?php if (!empty($feeds)) { ?>
                                                                                                                                <h2>News & Blog</h2>
                                                                                                                                <div>
                    <?php // print $feeds; ?> 
                                                                                                                                </div>
                <?php } ?>
                </div>
                -->

                <?php if (!empty($feeds)) { ?>
                    <div>
                        <?php print $feeds; ?> 
                    </div>
                <?php } ?>

            </div>
        </div>
        <footer class="fluid footer">
            <div class="container">
                <?php if (!empty($footer_top)) { ?>
                    <div class="row">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <?php print $footer_top; ?> 
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($footer)) { ?>
                    <div class="row">
                        <?php print $footer; ?> 
                    </div>

                <?php } ?>
                <?php if (!empty($footer_message)) { ?>
                    <div class="msg">
                        <?php print $footer_message; ?>
                    </div>
                <?php } ?>
                <?php
                /*
                  $columns = 2;
                  $rows = 2;
                  $count=sizeof($primary_links);

                  for($i=0;$i<$columns;$i++){

                  }


                  if (is_array($primary_links)) {
                  ?>
                  <?php
                  for ($i = 0; $i < sizeof($primary_links); $i++) {
                  $link = $primary_links[$i];
                  ?>
                  <li class="sliding-element"><?php
                  $href = $link['href'] == "<front>" ? base_path() : base_path() . drupal_get_path_alias($link['href']);
                  print "<a href='" . $href . "'>" . $link['title'] . "</a>";
                  ?>
                  </li>
                  <?php } ?>

                  <?php } ?>
                  <?php } */
                ?>

        </footer>

        <div class="visible-xs hidden-sm hidden-md hidden-lg">xs</div>
        <div class="hidden-xs visible-sm hidden-md hidden-lg">sm</div>
        <div class="hidden-xs hidden-sm visible-md hidden-lg">md</div>
        <div class="hidden-xs hidden-sm hidden-md visible-lg">lg</div>
    </body>
</html>
