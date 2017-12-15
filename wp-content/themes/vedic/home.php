<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */
/*
Template Name: Homepage
 */
get_header(); ?>

    <div id="intro">
        <div id="intro-logo"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/logo-vedic-large.png" alt="VEDIC"/></div>
        <h2 id="tagline">A modern programming environment for the modern programmer</h2>
        <div  id="btn-download">
            <a href="https://github.com/WilliamRADFunk/vedic" target="_blank">Fork<br/>the Repo</a>
        </div>
    </div>
    <div id="feature">
        <h3>Interactive Development Environment</h3>
        <div id="feature-node" onclick="openFeatureTip()"> </div>
        <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-feature.jpg"/>
        <div id="feature-tooltip">
            <div class="tooltip-close" onclick="closeFeatureTip()"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/btn-close.png"/></div>
            <div id="feature-tooltip-message">
                <ul id="feature-carousel">
                    <li>In the viewing of a database mode, the user will see a multitude of different shapes of varying colors, some interconnected, some standalone. These will consist of SQL tables with distinct sections representing columns within these tables. Both tables and columns will be labeled and their colors will be specific to the type of variable they contain (integer, float, char, etc.). Colored pipes or wires will connect these tables where relationships exist (joinings, sharedvariables, etc.). The number of rows in the table will either exist as a number adjacent to the table's title, or in the relative height of the object in scale with the other table shapes.</li>
                    <li>The creation and/or manipulation of databases mode will have the user seated at a virtual work­bench. On a wall directly in front of the desk/bench, and within arms­reach, will be a series of shelves with cabinets, bins, drawers, or boxes labeled with the corresponding object(s) they contain, with the image of the representative shape(s) on the front (ie. a cyan­colored, flat, rectangular cube representing a column that contains an integer type). On the desk/work­bench in front of the user will be the complex object they are building or manipulating (much like a 3­dimensional circuit diagram). This object/SQL­table will hover above the work­bench and can be connected using specifically colored wires/pipes to other tables and their columns. The user can change between view and edit modes at will. This mode will comply with the standard C.R.U.D. array of database operations: database tables can be Created, data can be Read from rows by columns (more easily in the view mode). Tables, columns, and rows can be Updated while any of those can be Deleted, as well. The system will implement one query at a time as the user submits them.</li>
                    <li>Third VEDIC mode is the viewing of a C# project. This mode will contain colored shapes and connections similar to the viewing of the database mode. The difference will be the number of different shapes and colors as a programming project has a more diverse set of components than that of an SQL database. This view will share many similarities with a UML diagram, both structural and behavioral, with a third dimension to better illustrate the complexity and interaction that the objects possess.</li>
                    <li>The fourth and final VEDIC mode of operation is the creation and/or manipulation of C# files and classes within a project. Similar to the create/edit mode for databases, there will be many more shapes, colors, and connections to add into the 3D circuit floating above the work­bench. These classes, their functions and variables, can be transpiled into an export format when the user elects to do so, and converted to C# files in a project folder for later compiling by the user outside of the VEDIC system.</li>
                </ul>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
    <div id="developers">
        <div class="sub-header">DEVELOPERS</div>
        <div id="devs">
            <div class="developer">
                <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-funk.png" onclick="openBio('funk');" />
                <h4>FUNK</h4>
                <h5>The guy with the party plan</h5>
            </div>
            <div class="developer">
                <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-rodriguez.png" onclick="openBio('rodriguez');"/>
                <h4>RODRIGUEZ</h4>
                <h5>The guy with the snacks</h5>
            </div>
            <div class="developer">
                <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-vinson.png" onclick="openBio('vinson');"/>
                <h4>VINSON</h4>
                <h5>The guy with the entertainment</h5>
            </div>
            <div id="dev-tooltip">
                <div class="tooltip-close" onclick="closeBio()"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/btn-close.png"/></div>
                <div id="dev-tooltip-message"></div>
            </div>
        </div>
    </div>
    <div id="tools">
        <div class="sub-header">TOOLS</div>
        <div class="tool-box">
            <div class="text-wrapper">
                <h3>OCULUS RIFT DK2</h3>
                <p>With one lightweight headset, an end-user can transport themselves into a whole new reality. With the DevKit 2.0, a programmer can launch their code into untapped frontiers.</p>
                <div id="btn-learn-more-wrapper">
                    <a id="btn-learn-more" href="https://www.oculus.com/en-us/dk2/" target="_blank">Learn<br/>More</a>
                </div>
            </div>
            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-oculus.jpg"/>
        </div>
        <div class="tool-box">
            <div class="text-wrapper">
                <h3>LEAP MOTION</h3>
                <p>Never before has the term reach-out-and-touch been better realized than with the Leap Motion Controller. With this gadget, and supporting software, any object inside VEDIC is fair game for manipulation.</p>
                <div id="btn-learn-more-wrapper">
                    <a id="btn-learn-more" href="https://developer.leapmotion.com/orion" target="_blank">Learn<br/>More</a>
                </div>
            </div>
            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img-leap.jpg"/>
        </div>
    </div>
    <div id="documentation">
        <div class="sub-header">DOCUMENTATION</div>
        <div class="doc-wrapper">
<?php 
//query_posts('category_name=documentation');
if (have_posts()) : ?>
        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="documentation" posts_per_page="4" scroll="false" button_label="More..."]'  ); ?>
<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'vedic'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&acute;t here.', 'vedic'); ?></p>
		<?php get_search_form(); ?>

<?php endif; ?>
        </div>
    </div>

    <div id="how-it-works">
        <div class="sub-header">HOW IT WORKS</div>
        <div class="text-wrapper">
            <ul>
                <li>Represents an SQL database and allows C.R.U.D. queries to applied in a visually intuitive way.</li>
                <li>Identifies and displays connections between SQL tables and their contents in a way not possible with two dimensions.</li>
                <li>Represents a series of C# files/classes/objects/etc. in a 3D virtual reality context that better portrays an object-oriented language.</li>
                <li>Represents a 3D programming environment and allows the user to create/manipulate the environment for developing their own code/systems.</li>
                <li>Assembles function declarations using a jigsaw puzzle of components.</li>
                <li>Identifies dependencies to a class in a visual context (interfaces and abstract classes).</li>
            </ul>
        </div>
        <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/bgd-how-it-works.png"/>
    </div>
<?php get_footer(); ?>