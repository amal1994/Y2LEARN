<?php
/*
Template Name: Single Post Page
*/
?>
<?php get_header(); ?>
<?php /* THE LOOP */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
         <div id="header_bg" class="section clearfix">
            <div style="width:960px; margin-left: auto;margin-right:auto;">
                <div id='hleft' style="float:left; width:470px;text-align:left;" itemprop="name"><h1 style="line-height:inherit;font-size:inherit;text-align:inherit;"><?php the_title(); ?></h1></div>
                <div id='hright' style="float:right; width:470px;text-align:right;"><a href='detail.php' itemprop="genre">Miscellaneous</a> / <a href='detail.php' title='Drupal Themes' itemprop="genre">Drupal Themes</a></div>
              
            </div> 
            <div style='display:none' ></div>
        </div>
    </div>
                <div id="floating" style="position:fixed;width:100%;top:0px;display:none;">
            
            <div id="header" style='position:relative;top:0px;width:960px;margin:0px auto;z-index:99999;border-left:1px solid #ebebeb;border-right:1px solid #ebebeb;'>
                <div id="logo" class="section clearfix" >
                    <div style='width:100%;margin-left: auto;margin-right:auto;height:50px;text-align:left;display:table;'><img src='images\TechAge-Logo-11-300x103.png' style='float: left; margin-left:5px;margin-top:5px;margin-right:5px;width:40px;height:40px;'>
                    <div style='display:table-cell;min-width:400px;max-width:400px;max-height: 50px;height:50px;vertical-align:middle;overflow:hidden;color:#666;font-size:14px;line-height:18px;'><strong>PinBoard</strong> </div>
                        <div class='buynow' onclick="$('.right .top .butttonbig').click();" style="margin-bottom:5px;">Buy Now - <i style='text-decoration:none;font-style:normal;'>$</i>52</div>
                                                    <a href='images\TechAge-Logo-11-300x103.png' rel='nofollow' target='_blank'><div class='buynow frame' style="margin-bottom:5px;"><i class="fa fa-eye"></i> Live Demo</div></a>
                        </div>
                </div>
                <div id="logo" class="section clearfix" style='height:auto;'>

                </div>
                <div id="header_bg" class="section clearfix" style='min-height:3px;height:auto;line-height:1px;'>
                    <div style="width:100%; margin-left: auto;margin-right:auto;min-height:3px;height:auto;line-height:1px;">
                    </div>
                </div>
            </div>
        </div>
        <script>
            function checkOverflow(el)
{
   var curOverflow = el.style.overflow;
   if ( !curOverflow || curOverflow === "visible" )
      el.style.overflow = "hidden";

   var isOverflowing = el.clientWidth < el.scrollWidth 
      || el.clientHeight < el.scrollHeight;

   el.style.overflow = curOverflow;

   return isOverflowing;
}
             $(document).ready(function() {
                while(checkOverflow(document.getElementById('hright')))
                {
                    $('#hright').css('font-size',parseInt($('#hright').css('font-size'))-1);
                }
                $('#hright').css('font-size',parseInt($('#hright').css('font-size'))-1);
                while(checkOverflow(document.getElementById('hleft')))
                {
                    $('#hleft').css('font-size',parseInt($('#hleft').css('font-size'))-1);
                }
                $('#hleft').css('font-size',parseInt($('#hleft').css('font-size'))-1);
             });
 </script>
 <div id="fb-root"></div>
<div id='over'></div>
<div id='pay'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&appId=617426275044711&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page_content">
    <div id='morefiles'>
        <div class='pclose'>Close <i class='fa fa-times'></i></div>
        <div class='pname'><i class='fa fa-list'></i> PinBoard<br><span>The List of Files</span></div>
        <div id='listoffiles'>
        </div>
    </div>
    <div id='changelog'>
        <div class='pclose'>Close <i class='fa fa-times'></i></div>
        <div class='pname'><i class='fa fa-list'></i> PinBoard<br><span>The Changelog</span></div>
        <div id='changelogitems'>
        </div>
    </div>    <div id="main" class="product">

<div class='left'>
					<?php /*getting the url of the thumbnail */ ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
					
    <div id='poster' style="min-height:322px;"><img itemprop="image"  src="<?php echo $url ?>"  style='min-width:592px;max-width:592px;min-height:302px;max-height:302px;box-shadow: inset 0 0 2px #000000;border:1px solid #fff;'><a class='posterhover' target='_blank' href=''><i class='fa fa-circle' style='font-size:70px; color:#111; opacity:0.5;text-shadow:none;'></i><i class='fa fa-plus' style='font-size:30px; color:#fff; opacity:1;display:block;position:absolute;margin-top:-137px;margin-left:283px;'></i></a><link itemprop="thumbnailUrl" href="" /><div id='gallery' style='float:right;width:72px;padding-right:9px;'><div class='gbefore'><i class='fa fa-chevron-up'></i></div><img id='gal_poster' src='images\TechAge-Logo-11-300x103.png' class='selected'><img id='gal_0' src='images\TechAge-Logo-11-300x103.png'><img id='gal_1' src='images\TechAge-Logo-11-300x103.png'><img id='gal_2' src='images\TechAge-Logo-11-300x103.png'><img id='gal_3' src='images\TechAge-Logo-11-300x103.png'><div style='height:17px;'>&nbsp;</div><div class='gafter'><i class='fa fa-chevron-down'></i></div></div></div>
    <div id='spread'>
        Spread the word:            <div style="display:inline-block;vertical-align:middle;float:right;margin-left:10px;">
                <a href="#" rel="nofollow" class="pi"><i class="fa fa-pinterest-square"></i><span>Pinterest</span></a>
                <div class="countme" id="pishares">0</div>
            </div>
            <div style="display:inline-block;vertical-align:middle;float:right;margin-left:10px;">
                <a href="#" rel="nofollow" class="ln"><i class="fa fa-linkedin-square"></i><span>Linkedin</span></a>
                <div class="countme" id="lnshares">0</div>
            </div>
            <div style="display:inline-block;vertical-align:middle;float:right;margin-left:10px;">
                <a href="//twitter.com/share" rel="nofollow" target="_blank" class="tw"><i class="fa fa-twitter-square"></i><span>Twitter</span></a>
                <div class="countme" id="twshares">0</div>
            </div>
            <div style="display:inline-block;vertical-align:middle;float:right;margin-left:10px;">
                <div class="fb-like" data-href="" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                <div class="countme" id="fblikes">0</div>
            </div>
        </div>
    <div class="separator"></div>
    <div id="main_description">
        <p><img alt="" src="images\TechAge Logo.jpg" width= 700 height = 100 /><a href=""><img alt="Pinitall Drupal Premium Theme" src="images\TechAge Logo.jpg"width= 700 height = 200 /></a> <a href=""><img alt="" src="images\TechAge Logo.jpg" width= 700 height = 100 /></a> <img alt="" src="/data/products/d267b5ffb87b6b7b3664de42a6f903f7.jpg" /></p>

<h3><?php the_content(); ?></h3>
<?php endwhile; ?>

<hr />
<p> </p>

<p>PinBoard v2 now available! PinBoard is a robust <strong>Pinterest clone </strong> with very similar functionality as Pinterest.com. PinBoard is built entirely using Drupal, the powerful open source CMS. PinBoard comes with a simple installation profile that quickly helps you set up the theme within just a few short steps. Y2LEARN's Pinterest clone also combines full flexibility and the ability for your own unique customizations (using Drupal's standard theming and modules). The PinBoard theme comes with a clean design built on a fully-enabled mobile framework.</p>

<p>With PinBoard you can create your own custom pinboards, share them, repin other user's pins, follow other user's, or allow certain users you approve to pin to your own boards. Our full featured Pinterest clone also provides you with the ability to  <strong>add video pins from YouTube and Vimeo! </strong> All required modules are included in your PinBoard theme package download along with Drupal core. <strong>Purchasing the PinBoard Pinterest clone theme gives you access to ALL future enhancements and releases for free </strong>. Follow our <a href="">PinBoard Roadmap document </a> for more details and updates!</p>

<p> </p>

<blockquote>
<p><em>The Drupal 8 port (or rather re-write) is now underway!</em></p>
</blockquote>

<h3>PinBoard Mobile App for iOS using <a href="">PhoneGap</a></h3>

<p><a href=""><img alt="PinBoard v2 now includes the iOS mobile app, built using PhoneGap . So, you can easily create your own mobile app, let people to submit and manage their own Pins, and even submit your new app to iTunes after enabling it for your particular website/application." src="/data/products/7178d8a9b1a10b6782bd782c9a020f26.png" /></a></p>

<p>For more information, please visit:  <strong> <a href="">PinBoard PhoneGap Mobile App for iOS Documentation</a></strong></p>

<p><strong> </strong></p>

<h3><strong><strong>PinBoard Bookmarklet Button</strong></strong></h3>

<p><strong><img alt="Pinterest Style Bookmarklet Button" src="/data/products/dd65aa11bfcf613284171d2c7e7b5626.png" /></strong></p>

<p><strong> </strong></p>

<h2><strong><strong>PinBoard Theme Main Features</strong></strong></h2>

<ul>
	<li>Fully responsive mobile theme using <strong>CSS / JavaScript</strong></li>
	<li><strong>Pin bookmarklet button</strong> (add to your IE, Firefox, Chrome, or Safari browsers)</li>
	<li>Easy pinning wizard panel for pinning images/videos (videos from YouTube and Vimeo currently)</li>
	<li>Easily customize social media buttons (via the ShareThis module)</li>
	<li>"Pinned to Board...," "Originally Pinned by...," and Repin stats on Pin pages</li>
	<li>Repin counter</li>
	<li>Advanced pinning options (price for products , URL, tags, body)</li>
	<li>Pin overlay with easy, one-click Pin closing to return to main page or category page</li>
	<li>Invitation system</li>
	<li>Search page with Pin image results</li>
	<li>Facebook &amp; Twitter login integration</li>
	<li>SEO friendly html code</li>
	<li>RTL (Right to left support for Arabic, Greek, Latin, etc.)</li>
	<li>Translate PinBoard to your language (using standard Drupal translation modules)</li>
	<li>Works in all major browsers</li>
	<li>Choose from 5 color schemes, 15 different Google font types, and 37 different backgrounds !</li>
	<li><strong>PhoneGap mobile app support</strong> (using PhoneGap's documentation)</li>
	<li><strong>Animated Gif support</strong></li>
	<li>Featured pins on front page</li>
	<li>Unfollowers counter</li>
	<li>Zoom cursor on front page</li>
	<li>Category selection in search</li>
	<li>Repeating ad blocks option on front page (for ad banners)</li>
	<li>Capture videos from YouTube categories pages</li>
	<li>Option for placing ads at the beginning of pin lists</li>
	<li>Retina display support is added</li>
	<li>HybridAuth added for social login access</li>
	<li>Login functionality for PinIt button for anonymous users</li>
	<li>Currency selection for products, such as Pounds, Dollar, etc.</li>
	<li><strong>Feed Import</strong> module (manage import feeds into PinBoard)</li>
</ul>

<p><strong> </strong></p>

<h2><strong><strong>Main Admin Features of PinBoard</strong></strong></h2>

<ul>
	<li>Full use and flexibility of Drupal's robust admin interface</li>
	<li>Manage or add board main categories</li>
	<li>Manage/edit/delete user boards</li>
	<li>Manage/edit all user Pins</li>
	<li>Manage or add other site admins</li>
	<li>View and manage reported Pins</li>
	<li>Manage/edit comments</li>
	<li>Manage all users/members</li>
	<li>Customize top menus, right column blocks, etc.</li>
	<li>Add Captchas, ban IPs, restrict usage (using basic Drupal functions or modules)</li>
	<li>Optional Pin fields - Price, Alt text for images, Tags, URL, etc. (any can be turned off if not needed. New fields can be added at your discretion)</li>
	<li><span><span>Completely customizable right column on standard Pin pages (using Blocks)</span></span></li>
	<li>Add other complimentary Drupal modules (improve SEO or other functionality)</li>
	<li>Quick editing of all front-facing theme blocks with one click (top menu, top navigation, etc)</li>
	<li>Manage advertising ads or banners below Pins and right column</li>
	<li>The ability of disabling the overlay when viewing a pin</li>
	<li>The ability of disabling repins display on the front page</li>
	<li>Default settings for notifying users</li>
	<li>The ability of disabling "Unfollowers" counter on pin and user pages</li>
	<li>The ability to disable the opening of all links from pin page in a new page</li>
	<li>Plus way to much to list!</li>
</ul>

<p><strong> </strong></p>

<h3><strong><strong>Basic PinBoard Static Pages</strong></strong></h3>

<ul>
	<li><span>About</span></li>
	<li><span>Contact</span></li>
	<li><span>Member </span><span>profile page</span></li>
	<li><span>Member activity page</span></li>
	<li><span>Member boards page</span></li>
	<li><span>Member pins pages</span></li>
	<li><span>Popular pins page</span></li>
	<li><span>Videos page</span></li>
	<li><span>Search pins page (generated from user search)</span></li>
	<li><span>Pins by price pages, i.e. $0 - $20, $20 - $50, etc.</span></li>
	<li><span>Add as many other pages as needed with Drupal's native functionality</span></li>
	<li><span>Blog pages (also can allow for users to have their own blog if needed) </span></li>
</ul>

<p><strong> </strong></p>

<h3><strong><strong>Compatibility of PinBoard</strong></strong></h3>

<ul>
	<li><span>Drupal 7 .x compatible only</span></li>
	<li>Compatibility (Browsers: IE 7, IE 8, IE9, Firefox, Opera, Safari, Chrome)</li>
	<li>iPad, iPhone, Android compatible</li>
</ul>

<p><strong> </strong></p>

<h3><strong><strong>Drupal Modules Used</strong></strong></h3>

<ul>
	<li>Views</li>
	<li>Chaos Tools Suite</li>
	<li>ShareThis</li>
	<li>Video Embed Field</li>
	<li>Automatic Node Titles</li>
	<li>Gravatar</li>
	<li>Pin Board Helper</li>
	<li>Invite</li>
	<li>Rate</li>
	<li>Voting API</li>
	<li>Transliteration</li>
</ul>

<p><strong> </strong></p>

<h3><strong><strong>PinBoard Support Links</strong></strong></h3>

<ul>
	<li><a href=""><span>TechAge Drupal 7.x Theme Setup Guide</span></a> </li>
	<li><a href="">Roadmap document for the PinBoard theme </a></li>
	<li><a href="">PinBoard main support page</a></li>
	<li><a href="">PinBoard theme guide </a> (file/configuration guide)</li>
	<li><a href="">PinBoard Theme Tutorial</a></li>
	<li><a href="">Request to get admin/test user account</a></li>
</ul>

<p><strong> </strong></p>

<h3><strong><strong>Several PinBoard Theme Testimonials</strong></strong></h3>

<blockquote>
<p>Hi guys! I purchased another Pinterest clone script three weeks ago and it got hacked one week later because it was not built on a CMS but rather custom code. I then bought PinBoard and have not looked back. This is perhaps the most powerful Pinterest clone on the market! I appreciate all your help and advise before purchasing. ~ James E.</p>
</blockquote>

<blockquote>
<p>Dear TechAge team, your PinBoard theme probably saved us $15,000 at least considering we were looking at rolling our own Pinterest clone a few months ago. Now that we have PinBoard all I can say is THANK YOU! We can now focus on building our brand and user base versus building virtually the same functionality you guys already build in PinBoard. Keep up the great work guys! ~ Frederick B.</p>
</blockquote>

<blockquote>
<p>The rest of the Pinterest clones on the market just don't compare. We've purchased a few and your PinBoard Drupal theme beats them all. Reliable, easy to customize, regular updates -- all for less than $250! ~ Manny W.</p>
</blockquote>

<blockquote>
<p>We had purchased another Pinterest clone script in May of 2012. Once we found out how limiting it was for our needs, we quickly scrambled for something with actual options and scalability. Then we found PinBoard from techagelabs.com! This is really more than just a theme, it's a real, robust solution for any company serious about running their own Pinterest-style website. You guys are fantastic. Thanks for such a great product! ~Gerome R.</p>
</blockquote>

<p><strong> </strong></p>

<p><strong><strong>Notice about PinBoard Updates: </strong> </strong>This theme will be updated and improved following our <a href="">PinBoard Roadmap Information </a> document. We will make every effort to fix, enhance, and improve this theme in accordance to Drupal standards and best practices. It is advised that you sign up at the PinBoard demo and review this theme's functionality and understand all documentation and our terms of service before purchasing. Our goal is to make this script the most powerful Pinterest clone/PHP solution online!</p>

<p>Note: Our themes are updated about once every two months. Since we update our themes regularly you can be sure you get as close to the latest stable releases of Drupal core and the modules used in our themes. Note: We often do not update our themes with "Beta" or "Dev" module releases, as these change more frequently, are not as stable, and sometimes cause errors and other site issues.</p>

<p><strong> </strong></p>

<blockquote><strong><strong>Important: </strong></strong>The PinBoard theme comes with an installation profile which installs the theme using the MySQL database and website information that you see in the demo of this theme. This means the theme needs to be installed on a new MySQL database and as a fresh Drupal installation unless you want to attempt to migrate the theme into your existing website . Read the easy setup instructions for the PinBoard theme using the included profile installation. Please read our <strong>Terms of Service</strong> before purchasing this product. It's understood that you are agreeing to these terms if you choose to purchase and use this theme.</blockquote>

<p><strong><img alt="Development Service" src="images\TechAge Logo.jpg" height = 100 width = 650  /></strong></p>
    </div>
</div>
        
        
        <div class='right' itemprop="offers" itemscope itemtype="http://schema.org/Offer">
            
            <meta itemprop="priceCurrency" content="USD" />
            <div class='discountleftbg'></div><div class='discountleft'><div class='timer'><div class='num' id='timers'>48</div><div class='lab'>S</div></div><div class='timer'><div class='num' id='timerm'>40</div><div class='lab'>M</div></div><div class='timer'><div class='num' id='timerh'>12</div><div class='lab'>H</div></div><div class='timer'><div class='num' id='timerd'>8</div><div class='lab'>D</div></div><div class='hurry'>Hurry up!</div><div class='expires'>Discount expires in:</div></div>            <div class="top" style="min-height:322px;">
                <input type='hidden' name='p' value='8' />
                    <input type='hidden' name='action' value='buy_product' />
                    <input type='hidden' name='q1' value='1' />
                    <input type='hidden' name='q2' value='0' />
                <div class="price">
                    <div class="pricelabel">Price:</div>
                    <div class="pricevalue">
                        <div class="pv1"><i style='text-decoration:none;font-style:normal;'>$</i>119</div>
                        <div class="pv2">-56%</div>
                        <div class="pv3" itemprop="price"><i style='text-decoration:none;font-style:normal;'>$</i>52</div>
                    </div>
                </div>
                                    <div>
                        <select id="license" name="license">
                            <option selected="selected" value="1">Regular License</option>
                            <option value="2" disabled='disabled'>Extended License - N/A</option>
                        </select>
                    </div>
                    <div class="regular">
                        <div class="rtxt">
    used by you or one client, in a single end product which end users are not charged for. <a href=''>Read more...</a></div>
                    </div>
                    <div class="extended">
                        <div class="rtxt">
    used by more than one client or multiple end products, or which end users are charged for. <a href=''>Read more...</a></div>
                    </div>
                    <div>
                    <div class='butttonbig' style='float:left;' ><i class='fa fa-shopping-cart'></i> Buy Now - <span><i style='text-decoration:none;font-style:normal;'>$</i>52</span></div>
                    <div>
                                             <div class='buttton' style='float:left;padding:0px;' id='livedemo'><i class='fa fa-eye'></i> Live Demo</div>
    <div class='buttton' id='support'><a href="" rel="nofollow"><i class="fa fa-support"></i> Support</a></div>                    </div>
                </div>
                <div>
                     <div class="recommended" >
                         
                        <div><i class='fa fa-thumbs-o-up'></i> 96% recommended</div>
                        <div>153 of 159</div>
                    </div>
                    <div class="wishlist">
                        <div><i class='fa fa-heart-o'></i> Add to wishlist</div>
                        <div><a href=''><i class='fa fa-comments'></i> 24</a></div>                    </div>
                </div>
            </div>
            <div class='pdesc'>                <div class="affil">
                    <div class="tp">Spread the Word<br/>and Earn!</div>
                    <div class="tb"><a href="/user/register/" style='font-weight:bold;'>Register</a> or <a href="/marketplace/affiliate-program.html">Find out more <i class='fa fa-angle-right'></i></a></div>
                </div>
                                <div class='updates'>
                    <div class='version'>Version 2.2.9                                <div class='changelog'><a>Changelog</a></div>
                                                            </div>                    <div class='added'>Added on 18 Jan 2013</div>
                    <div class='updated'>Updated on 13 Jun 2015</div>                </div>
                                                           <div class='compatibility'>
                                               <div class='ctitle'>Compatibility</div>
                                               <div class='cvalues'><div class="r"><div class="t">Retina-Ready:</div><div class="t2"><div class="v">Yes</div></div></div><div class="r"><div class="t">Layout:</div><div class="t2"><div class="v">Responsive</div></div></div><div class="r"><div class="t">Browsers:</div><div class="t2"><div class="v">IE8, IE9, Firefox, Safari, Opera, Chrome</div></div></div><div class="r"><div class="t">Drupal compatible with:</div><div class="t2"><div class="v">N/A</div></div></div><div class="r"><div class="t">Drupal software version:</div><div class="t2"><div class="v">7.3.x, 7.2.x, 7.1, 7.0</div></div></div><div class="r"><div class="t">Columns:</div><div class="t2"><div class="v">4+</div></div></div><div class="r"><div class="t">Drupal Framework:</div><div class="t2"><div class="v">N/A</div></div></div></div>
                                           </div>
                                                           <div class='compatibility files'>
                    <div class='ctitle'>You Get<div class='morefiles'><a>Full Files List</a></div></div>
                    <div class='cvalues'>                            <div class="r"><div class="t">GITIGNORE files</div><div class="t2"><div class="v">2</div></div></div>
                                                <div class="r"><div class="t">HTACCESS files</div><div class="t2"><div class="v">2</div></div></div>
                                                <div class="r"><div class="t">TXT files</div><div class="t2"><div class="v">141</div></div></div>
                                                <div class="r"><div class="t">PHP files</div><div class="t2"><div class="v">438</div></div></div>
                                                <div class="r"><div class="t">INC files</div><div class="t2"><div class="v">757</div></div></div>
                                                <div class="r"><div class="t">JS files</div><div class="t2"><div class="v">159</div></div></div>
                                                <div class="r"><div class="t">PNG files</div><div class="t2"><div class="v">530</div></div></div>
                                                <div class="r"><div class="t">CSS files</div><div class="t2"><div class="v">282</div></div></div>
                                                <div class="r"><div class="t">ICO files</div><div class="t2"><div class="v">6</div></div></div>
                                                <div class="r"><div class="t">GIF files</div><div class="t2"><div class="v">36</div></div></div>
                                                <div class="r"><div class="t">INFO files</div><div class="t2"><div class="v">176</div></div></div>
                                                <div class="r"><div class="t">INSTALL files</div><div class="t2"><div class="v">86</div></div></div>
                                                <div class="r"><div class="t">MODULE files</div><div class="t2"><div class="v">161</div></div></div>
                                                <div class="r"><div class="t">TEST files</div><div class="t2"><div class="v">161</div></div></div>
                                                <div class="r"><div class="t">XML files</div><div class="t2"><div class="v">14</div></div></div>
                                                <div class="r"><div class="t">HTML files</div><div class="t2"><div class="v">150</div></div></div>
                                                <div class="r"><div class="t">PO file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">JPG files</div><div class="t2"><div class="v">286</div></div></div>
                                                <div class="r"><div class="t">SCRIPT files</div><div class="t2"><div class="v">2</div></div></div>
                                                <div class="r"><div class="t">SQL files</div><div class="t2"><div class="v">2</div></div></div>
                                                <div class="r"><div class="t">GZ files</div><div class="t2"><div class="v">5</div></div></div>
                                                <div class="r"><div class="t">PROFILE files</div><div class="t2"><div class="v">4</div></div></div>
                                                <div class="r"><div class="t">SH files</div><div class="t2"><div class="v">11</div></div></div>
                                                <div class="r"><div class="t">TPL file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">CRT file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">OTHER files</div><div class="t2"><div class="v">9</div></div></div>
                                                <div class="r"><div class="t">TTF files</div><div class="t2"><div class="v">41</div></div></div>
                                                <div class="r"><div class="t">INI files</div><div class="t2"><div class="v">5</div></div></div>
                                                <div class="r"><div class="t">PNG file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">TXT file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">MD file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">PDF files</div><div class="t2"><div class="v">4</div></div></div>
                                                <div class="r"><div class="t">EOT files</div><div class="t2"><div class="v">38</div></div></div>
                                                <div class="r"><div class="t">SVG files</div><div class="t2"><div class="v">38</div></div></div>
                                                <div class="r"><div class="t">WOFF files</div><div class="t2"><div class="v">38</div></div></div>
                                                <div class="r"><div class="t">RTF files</div><div class="t2"><div class="v">2</div></div></div>
                                                <div class="r"><div class="t">TMP file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">GIFIMGMAX800 file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">PNGGALLERY3 file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">ENGINE file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">CONFIG file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">ZIP file</div><div class="t2"><div class="v">1</div></div></div>
                                                <div class="r"><div class="t">TGZ files</div><div class="t2"><div class="v">36</div></div></div>
                    </div>
                </div>
                                                <div class='compatibility files'>
                                                    <div class='ctitle'>Author</div>
                                                    <div class='uu'>
                                                        <div class="uui"><a href=""><img style="width:80px;height:80px;" src="images\TechAge-Logo-11-300x103.png"></a></div>
                                                        <div class="uud" style="width: 132px;">
                                                            <div class="uudn"><a href="" itemprop="seller">TechAge Themes </a></div>
                                                            <div class="uudnr">Has 24 Products</div>
                                                            <div class="uudf"><a><i class="fa fa-plus-circle"></i> Follow</a></div>
                                                            <div class="uudl"><a href=""><i class="fa fa-briefcase"></i> View Portfolio</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class='compatibility files'>
                        <div class='ctitle'>Club Subscription</div>
                        <div class='cvalues'><div class='txt'>Get all TechAge&#39;s items by joining his club for  <strong><i style='text-decoration:none;font-style:normal;'>$</i>499</strong>. It Includes one month access for free, after which the monthly fee is  <strong><i style='text-decoration:none;font-style:normal;'>$</i>30</strong>.</div><div class='buton red' id='join_my_club'><input type='hidden' name='join' value='new' /><input type='hidden' name='oid' value='1' />Join Club - <span><i style='text-decoration:none;font-style:normal;'>$</i>499</span></div><div class='separator'></div></div>
                    </div>
                                       <div class='compatibility files tags'>
                                       <div class='ctitle'>Tags</div>
                                       <div class='cvalues'><a href=''>Mobile Drupal Themes</a> <a href=''>Drupal Business Themes</a> <a href=''>Pinterest Clones</a> </div>
                                   </div>
                               </div>
</div>        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" style='display:none;'>
            <meta itemprop="ratingValue" content="4.80" />
            <meta itemprop="ratingCount" content="159" />
        </div>
        <meta itemprop="discussionUrl" content='' />
</div>
    
<div class='box_header' id='feat'><i class='fa  fa-hand-o-right'></i> Handpicked Featured Items from our Top Authors</div><div class="box "><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="420" hash="06b4af54065258de5410c5cf93c94755" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_420"><input type='hidden' name='p' value='420' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top  ">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">Directory Builder - Classified Ads Listings &amp; Events</div>
                                                    <div class="an">By <strong>AlexGurghis</strong></div>
                                                </div>
                                                <div class="prc">
                    $57
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="207" hash="d7f4eeab70c1f8c4f3ee83dd1c6780c7" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_207"><input type='hidden' name='p' value='207' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top  ">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">xPalladium</div>
                                                    <div class="an">By <strong>DoubleMThemes</strong></div>
                                                </div>
                                                <div class="prc">
                    $51
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="6" hash="b6be8dd8f8a723bd6a0879ac04e252a8" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_6"><input type='hidden' name='p' value='6' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top  ">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">FlatClassifieds - Drupal MultiLingual Classified Ads Theme</div>
                                                    <div class="an">By <strong>TechAge</strong></div>
                                                </div>
                                                <div class="prc">
                    $96
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="180" hash="c19538823d954c094eb5f5a550c598dd" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_180"><input type='hidden' name='p' value='180' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top  ">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">Drupal Commerce Bundle</div>
                                                    <div class="an">By <strong>DoubleMThemes</strong></div>
                                                </div>
                                                <div class="prc">
                    $121
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="215" hash="5c83f122f43dfb8e34126085a0cbeefd" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_215"><input type='hidden' name='p' value='215' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top   mid">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">WPCook - Recipes &amp; Cooking Responsive WordPress Theme</div>
                                                    <div class="an">By <strong>radu</strong></div>
                                                </div>
                                                <div class="prc">
                    $95
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="8" hash="6761c75948ae20df947f7d4bf1ac37e7" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_8"><input type='hidden' name='p' value='8' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top   mid">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">PinBoard</div>
                                                    <div class="an">By <strong>TechAge</strong></div>
                                                </div>
                                                <div class="prc">
                    $52
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="219" hash="663a596b34077b60af7b987e97a3a25b" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_219"><input type='hidden' name='p' value='219' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top   rght">
                                            <div class="thu"><img src="" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">GRE - Responsive Real Estate Drupal Theme</div>
                                                    <div class="an">By <strong>bahnalthemes</strong></div>
                                                </div>
                                                <div class="prc">
                    $49
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="22" hash="e5c1f433940ef6a7780b409ff27bb521" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_22"><input type='hidden' name='p' value='22' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top   rght">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">DrupalMag - Responsive Magazine &amp; News Drupal Theme</div>
                                                    <div class="an">By <strong>Y2LEARN</strong></div>
                                                </div>
                                                <div class="prc">
                    $48
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="179" hash="fb893b84b7d0018f03b4d06940955b24" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_179"><input type='hidden' name='p' value='179' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top   rght">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">Drupal Classifieds Bundle</div>
                                                    <div class="an">By <strong>DoubleMThemes</strong></div>
                                                </div>
                                                <div class="prc">
                    $119
                                                </div>
                                            </div>
                                        </div>
                                    </div><div class="th pz">
                                        <img src="images\TechAge-Logo-11-300x103.png" style="width:80px; height:80px;">
                                        <div class="thi">
                                            <div class="thid"><a href=""><i class="fa fa-file-text-o" title="More Details"></i></a></div>
                                            <div class="thio">
                                                <a href=""><i class="fa fa-eye" title="Demo"></i></a>
                                                <i pid="31" hash="d18d6fa79ac9776761e89ea4415d6ea9" class="wish fa  fa-heart-o" title="Add to Wishlist" w="0"></i>
                                                <i class="fa fa-shopping-cart" title="Buy Now!" id="buy_31"><input type='hidden' name='p' value='31' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                            </div>
                                        </div>
                                        <div class="poster top  top   rght">
                                            <div class="thu"><img src="images\TechAge Logo.jpg" style="width:458px; height:255px;"></div>
                                            <div class="thui">
                                                <div>
                                                    <div class="pn">Postwall</div>
                                                    <div class="an">By <strong>DoubleMThemes</strong></div>
                                                </div>
                                                <div class="prc">
                    $43
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div>

<script src="js\ajax.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/css/login-form.css" rel="stylesheet" />
<script>
    $('.posterhover').on('mouseover', function(){
        $(this).prev().css('opacity','0.6');
        $(this).attr('href','?gallery#'+$('#gallery .selected').attr('id'));
    }).on('mouseout', function(){ $(this).prev().css('opacity','1');});
    
    function overflow_down()
    {
        return $('#gallery').scrollTop() +5<  232 -document.getElementById('gallery').offsetHeight ;
        return (element.offsetHeight < element.scrollHeight);
    }
    function overflow_up()
    {
        return ($("#gallery").scrollTop()>0);
    }
    function fixh(h,y)
    {
        if(h<43) {
            $("#gallery .gbefore").fadeOut();
            return 0;
        }
        else
        {
            $("#gallery .gbefore").fadeIn();
        }
        if(y<0)
        {
            $("#gallery .gafter").fadeIn();
        }
        if(h==43)
        {
            return h+y;
        }
        else
        {
            return h;
        }

    }
    function test_overflow()
    {
        $("#gallery").css('height','300px');
        $("#gallery .gbefore").css("top",160 +'px');
         if($("#gallery").scrollTop()<43) {
            $("#gallery .gafter").css({"top":(174+10 +$("#gallery").height()-30)+'px', "height":"15px"});
        }
        else
        {
            $("#gallery .gafter").css({"top":(174 +$("#gallery").height()-30)+'px', "height":"20px"});
        }
        if($('#gallery').attr('stop')!='a')
        {
            $("#gallery .gafter").on('click',function(){
                h=fixh($("#gallery").scrollTop()+43,17);
                    if(h<43) {
                        $("#gallery .gafter").css({"top":(174+10 +$("#gallery").height()-30)+'px', "height":"15px"});
                    }
                    else
                    {
                        $("#gallery .gafter").css({"top":(174 +$("#gallery").height()-30)+'px', "height":"20px"});
                    }
                    //$('#gallery > img.selected + img').click();
                $("#gallery").animate({scrollTop:h}, '500', 'swing',function(){
                    test_overflow();
                });
            });
            $("#gallery .gbefore").on('click',function(){
                h=fixh($("#gallery").scrollTop()-43,-17);
                if(h<43) {
                        $("#gallery .gafter").css({"top":(174+10 +$("#gallery").height()-30)+'px', "height":"15px"});
                    }
                    else
                    {
                        $("#gallery .gafter").css({"top":(174 +$("#gallery").height()-30)+'px', "height":"20px"});
                    }
                $("#gallery").animate({scrollTop:h}, '500', 'swing',function(){
                    test_overflow();
                });
            });
        }
        gg= $("#gallery");
        if(overflow_up())
        {
            $("#gallery .gbefore").fadeIn();
        }
        else
        {
            $("#gallery .gbefore").fadeOut();
        }
        if(overflow_down())
        {
            $("#gallery .gafter").fadeIn();
        }
        else
        {
            $("#gallery .gafter").fadeOut();
        }
        $('#gallery').attr('stop','a');
    }
    function centrr() {
            var T = $(window).height() / 2 - $('#customization').height() / 2 + $(window).scrollTop(),
                L = $(window).width() / 2 - $('#customization').width() / 2;
            $('#customization').css({
                top: T,
                left: L
            });
            var T = $(window).height() / 2 - $('#pay').height() / 2 + $(window).scrollTop(),
                L = $(window).width() / 2 - $('#pay').width() / 2;
            $('#pay').css({
                top: T,
                left: L
            });
                                 //   console.log($(window).scrollTop());
//                        console.log($('#spread').offset().top);
                if($(window).scrollTop()>$('#spread').offset().top+50)
                {
                    $('#floating').fadeIn().css('z-index','99999');
                }
                else
                {
                    $('#floating').hide();
                }
            };
     $(document).ready(function() {
         
         $URL=document.location.href;
          setTimeout(function(){
        $.getJSON( 'https://graph.facebook.com/fql?q=SELECT%20like_count,%20total_count,%20share_count,%20click_count,%20comment_count%20FROM%20link_stat%20WHERE%20url%20=%20%27'+$URL+'%27', function( fbdata ) {
                $('#fblikes').html( fbdata.data[0].total_count);
            });
        $.getJSON( 'https://cdn.api.twitter.com/1/urls/count.json?url=' + $URL + '&callback=?', function( twitdata ) {
                $('#twshares').html( twitdata.count);
            });
        $('#twshares').prev().click(function() {
                 var NWin = window.open($(this).prop('href'), '', 'height=600,width=600');
                 if (window.focus)
                 {
                   NWin.focus();
                 }
                 return false;
                });
        $.getJSON( 'https://www.linkedin.com/countserv/count/share?url=' + $URL + '&callback=?', function( linkdindata ) {
                $('#lnshares').html(linkdindata.count);
            });
        $('#lnshares').prev().attr('href','https://www.linkedin.com/shareArticle?mini=true&url='+$URL+'&title='+document.title+'&source=http://techagelabs.com/').click(function() {
                 var NWin = window.open($(this).prop('href'), '', 'height=600,width=600');
                 if (window.focus)
                 {
                   NWin.focus();
                 }
                 return false;
                });
        $.getJSON( 'https://widgets.pinterest.com/v1/urls/count.json?source=6&url=' + $URL + '&callback=?', function( pindata ) {
            $('#pishares').html(pindata.count);
        });

        $('#pishares').prev().attr('href','//pinterest.com/pin/create/button/?url='+encodeURIComponent($URL)+'&media='+encodeURIComponent('http://demo.thememarketscript.com/data/poster_pictures/')).click(function() {
                 var NWin = window.open($(this).prop('href'), '', 'height=600,width=600');
                 if (window.focus)
                 {
                   NWin.focus();
                 }
                 return false;
                });
 },1000);
        $('.morefiles a').on('click',function(){
            if( typeof(ga) == 'function') ga('send', 'event', 'View All Files', 'click', 'View All Files', 1);
            makePOSTRequest(document.location.href,'I=2528&action=product_files&hash=374313f4752ad9886dea801d0f297ac3');
        });
        $('.changelog a').on('click',function(){
            if( typeof(ga) == 'function') ga('send', 'event', 'View Changelog', 'click', 'Changelog', 1);
            makePOSTRequest(document.location.href,'I=2528&action=changelog&hash=099d25b428ecf512e6b2af35e8c51718');
        });
        $("select").select2( {minimumResultsForSearch: -1});
        $("#s2id_license").css('width','100%');
        $('#s2id_license').css({'font-size':'14px','text-align':'left'});
        $('.select2-drop').css({'font-size':'14px'});
        $("select#license").on("change",function(){
            if($(this).val()==1)
            {
                 $('.extended').hide();
                $('.regular, .regular *').show();
                $('.regular .rtxt').hide().fadeIn();
                $('.price .pv1').html('<i style=\'text-decoration:none;font-style:normal;\'>$</i>119');
                $('.price .pv2').html('-56%');
                $('.price .pv3').html('<i style=\'text-decoration:none;font-style:normal;\'>$</i>52');
                $('.butttonbig span').html('<i style=\'text-decoration:none;font-style:normal;\'>$</i>52');
                            }
            else
            {
                 $('.regular').hide();
                $('.extended, .extended *').show();
                $('.extended .rtxt').hide().fadeIn();
                $('.price .pv1').html('');
                $('.price .pv2').html('');
                $('.price .pv3').html('');
                                $('.butttonbig span').html('');
            }
            
        });
        $('#gallery').css('overflow','hidden');
        $("#gal_poster").on("click",function(){$("#gallery img").removeClass("selected"); $(this).addClass("selected"); $("#poster > img:first-child").attr("src","images\TechAge-Logo-11-300x103.png")});$("#gal_0").on("click",function(){$("#gallery img").removeClass("selected"); $(this).addClass("selected"); $("#poster > img:first-child").attr("src","images\TechAge-Logo-11-300x103.png");});$("#gal_1").on("click",function(){$("#gallery img").removeClass("selected"); $(this).addClass("selected"); $("#poster > img:first-child").attr("src","images\TechAge-Logo-11-300x103.png");});$("#gal_2").on("click",function(){$("#gallery img").removeClass("selected"); $(this).addClass("selected"); $("#poster > img:first-child").attr("src","images\TechAge-Logo-11-300x103.png");});$("#gal_3").on("click",function(){$("#gallery img").removeClass("selected"); $(this).addClass("selected"); $("#poster > img:first-child").attr("src","images\TechAge-Logo-11-300x103.png");});    test_overflow();
    $(window).scroll(centrr);
    $(window).resize(centrr);
    $('div#preview').on('click',function(){if( typeof(ga) == 'function') ga('send', 'event', 'Gallery', 'click', 'Preview', 1); document.location.href='?gallery';});
    $('div#livedemo').on('click',function(){if( typeof(ga) == 'function') ga('send', 'event', 'Live Demo', 'click', 'Live Demo', 1); document.location.href='?demo';});
    $('.fa-shopping-cart').on('click',function(){getself(this);});$('.right .top .butttonbig').on('click',function(){if( typeof(ga) == 'function') ga('send', 'event', 'Buy Now Button Logged Out', 'click', 'Buy Now', 1);getself($('.right .top')[0]);});$('#join_my_club').on('click',function(){getself($(this)[0]);});                            var secleft=736848;
                    setInterval(function(){
                        var days   = Math.floor(secleft / 86400);
                        var hours   = Math.floor((secleft - (days*86400)) / 3600);
                        var minutes = Math.floor((secleft - (days*86400) - (hours * 3600)) / 60);
                        var seconds = secleft - (days*86400) - (hours * 3600) - (minutes * 60);

                        $('#timers').html(seconds);
                        $('#timerm').html(minutes);
                        $('#timerh').html(hours);
                        $('#timerd').html(days);
        
        secleft--;
                    },1000);
                            if( typeof(ga) == 'function') ga('send', 'event', 'Product Page - Logged Out', 'view', '',0);
    });
    
    
</script>
<?php get_footer(); ?>
