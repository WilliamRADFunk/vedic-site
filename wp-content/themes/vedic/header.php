<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="keywords" content="<?php bloginfo('url'); _e('Andrea, Andrea Acosta, Andrea Acosta Duarte, William Robert Funk, Funk, William RAD Funk, William Funk, Bill Funk, Artist, Web Designer, Front-End Developer, Professional, freelance, contract, web, art direction, graphic designer, graphic design, designer, branding, colour, color, type, production, seo, search engine optimization, implementation, maintenance, websites, sites, digital, adobe, photoshop, illustrator, indesign, dreamweaver, fireworks, html, xhtml, css, office, mac, pc, javascript, jquery, php, mysql, independent', 'nsomnium'); ?>" />
<meta name="author" content="http://www.williamrobertfunk.com" />
<meta name="copyright" content="William Robert Funk" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Google Open Sans font -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- Resets all default browser stylings for a clean slate -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/reset_author_richard_clark.css">
<!-- Pure Drawer hamburger menu library -->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/pure_drawer.css">
<!-- Customized styles by William R.A.D. Funk -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/scripts.js"></script>	
<?php wp_enqueue_script("jquery"); ?>   

<?php wp_head(); ?>    
</head>

<body>
<?php //get_sidebar(); 
?>
<div id="wrapper">
	<header>
        <div id="desktop-menu">
            <a href="http://vedicode.com/" id="logo-vedic"></a>
            <ul id="main-nav">
                <li><a href="http://vedicode.com/#feature">DATABASE</a></li>
                <li><a href="http://vedicode.com/#developers">DEVELOPERS</a></li>
                <li><a href="http://vedicode.com/#tools">TOOLS</a></li>
                <li><a href="http://vedicode.com/#documentation">DOCUMENTATION</a></li>
                <li><a href="http://vedicode.com/#how-it-works">HOW IT WORKS</a></li>
            </ul>
            <div id="ext-links">
                <a class="ext-link" href="http://vedicode.com/blog/">BLOG</a>
                <a class="ext-link" href="http://vedicode.com/contact-us/">CONTACT US</a>
            </div>
        </div>
        <div id="hamburger-menu" class="pure-container" data-effect="pure-effect-slide">
            <input type="checkbox" id="pure-toggle-left" class="pure-toggle" data-toggle="left">
            <label class="pure-toggle-label" for="pure-toggle-left" data-toggle-label="left">
                <span class="pure-toggle-icon"></span>
            </label>

            <div class="pure-drawer" data-position="left">
                <ul>
                    <li><a href="http://vedicode.com/#feature" data-toggle="left">DATABASE</a></li>
                    <li><a href="http://vedicode.com/#developers">DEVELOPERS</a></li>
                    <li><a href="http://vedicode.com/#tools">TOOLS</a></li>
                    <li><a href="http://vedicode.com/#documentation">DOCUMENTATION</a></li>
                    <li><a href="http://vedicode.com/#how-it-works">HOW IT WORKS</a></li>
                    <li><a href="http://vedicode.com/blog/">BLOG</a></li>
                    <li><a href="http://vedicode.com/contact-us/">CONTACT US</a></li>
                </ul>
            </div>
            <div class="pure-pusher-container">
                <div class="pure-pusher">
                    <a href="http://vedicode.com/" id="logo-vedic"></a>
                    <ul id="main-nav">
                        <li><a href="http://vedicode.com/#feature">DATABASE</a></li>
                        <li><a href="http://vedicode.com/#developers">DEVELOPERS</a></li>
                        <li><a href="http://vedicode.com/#tools">TOOLS</a></li>
                        <li><a href="http://vedicode.com/#documentation">DOCUMENTATION</a></li>
                        <li><a href="http://vedicode.com/#how-it-works">HOW IT WORKS</a></li>
                    </ul>
                    <div id="ext-links">
                        <a class="ext-link" href="http://vedicode.com/blog/">BLOG</a>
                        <a class="ext-link" href="http://vedicode.com/contact-us/">CONTACT US</a>
                    </div>
                </div>
            </div>
            <label class="pure-overlay" for="pure-toggle-left" data-overlay="left"></label>
        </div>
    </header>
