<?php
/*
Template Name: Detail Page
*/
?>
<?php get_header(); ?>
        <div id="header_bg" class="section clearfix">
            <div style="width:960px; margin-left: auto;margin-right:auto;text-shadow:1px 1px rgba(90, 90, 90, 0.3);">
                <div id='hleft' style="float:left; width:470px;text-align:left;font-size:28px;"><h1 style="line-height:inherit;font-size:inherit;text-align:inherit;">Browse All Items</h1></div>
                <div id='hright' style="float:right; width:470px;text-align:right;">390 items</div>
            </div>
        </div>
    </div>        
 <style>
    #minp{left:0px;}
    #maxp{right:0px;}
    .slider_holder {height:50px; margin-top:5px;}
    .slider_holder.h40 {height:40px;}
    .slider_holder .slab {line-height:25px; height:25px; font-size:14px; color:#111;}
    .slider_holder:hover .ui-slider-handle {opacity:1;margin-left: -5px;top: -2px;height: 10px;width: 10px;}
    .slider_holder:hover .ui-slider-handle:last-child {opacity:1;margin-left: -5px;top: -2px;height: 10px;width: 10px;}
    .slider_holder:hover .mp {color:#111;}
    .slider_holder .ui-slider-handle:hover {border:1px solid #111;}
    #s { background-color: #f9f9f6;
        border: 1px solid #ebebeb;
        border-radius: 2px;
        height: 35px;
        line-height: 35px;
        text-align: left;
        transition: border-color 150ms ease-in-out 0ms;
        width: 100%;
        margin-top:7px;
        margin-bottom:15px;
        padding:0px 24px 0px 8px;
    }
    #s:focus {border:1px solid #c6c6c6;}
    #s + i {
        height: 35px;
        line-height: 38px;
        margin-left: -22px;
        margin-top: 5px;
        position: absolute;
        cursor:pointer;
        font-size:14px;
    }
    #s + i:hover {color:#111;}
</style>
 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
 <div id='over'></div>
 <div id='pay'></div>
<div id="page_content">
    <div id="main" class="category">
        <div class='left'>
            <div class='begin'>
                <select id='oo'>
                    <option value='0'>Best Sellers</option>
                    <option value='1'>Latest Additions</option>
                    <option value='2'>Most Recommended</option>
                    <option value='3'>Cheapest</option>
                    <option value='4'>Most Expensive</option>
                    <option value='5'>Top Discount</option> 
                </select>
                <div class='pag'>
                                                <div class="pagenr">
                                <div class="pl">
                                    <div class="ss">Page</div>
                                    <div class="hh ll">
                                                                                                    </div>
                                </div>
                                <div class="pc"><input type="text" name="page" id="pagenumber" value="1"></div>
                                <div class="pr">
                                    <div class="ss">of 13</div>
                                    <div class="hh rr">
                                <a onclick='$("#p").val(2);filter();'><i class="fa fa-angle-right"></i></a>                                        <a onclick='$("#p").val(13);filter();'>13</a>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $('#pagenumber').on('blur',function(){ if($(this).val()!=1)$("#p").val($(this).val());filter();});
                                $('#pagenumber').on('keypress',function(event){ if(event.which == 13) {if($(this).val()!=1)$("#p").val($(this).val());filter();}});
                            </script>
                                </div>
            </div>
            <div class='separator'></div>
            <div class='filters'>
                
                                <input type='hidden' name='t' value='0' id='t'>
                <input type='hidden' name='c' value='0' id='c'>
                <input type='hidden' name='pf' value='5' id='pf'>
                <input type='hidden' name='pt' value='219' id='pt'>
                <input type='hidden' name='tg' value='0' id='tg'>
                <input type='hidden' name='rr' value='0' id='rr'>
                <input type='hidden' name='pb' value='628' id='pb'>
                <input type='hidden' name='o' value='0' id='o'>
                <input type='hidden' name='p' value='0' id='p'>
<input type='hidden' name='l16' value='0' id='l16'><div class='nofilters'><i class='fa fa-info-circle'></i> Use the filters from the right column to find what you are looking for.</div>            </div>

<?php /* THE LOOP */ ?>

	<?php 
	
		if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
			
		 <div class="p">                                <div class="th">
                                    <?php the_post_thumbnail(); ?>
									
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_8'><input type='hidden' name='p' value='8' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
							
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
									
                                        <div class='pn'><?php the_title(); ?></div>
										
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Miscellaneous</strong> / <strong>Photography</strong> / <strong>Film &amp; TV</strong></div>
                                    </div>
                                    <div class='prc'>
        $52                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='<?php the_permalink(); ?>' title='PinBoard'><?php the_title(); ?></a>
                                        <!-- <div class="v">v2.2.9</div> -->
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href='<?php the_permalink(); ?>'>posted by: <?php the_author(); ?></a></div>
           <div><i class='fa fa-clock-o'></i> on <?php the_time('F j, Y'); ?></div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 96%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
									<?php the_excerpt(); ?>
                               </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$119</div><div class='disc'>$52</div></div>
                    </div>
					<?php endwhile;
		
					endif;
			
					?>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_43'><input type='hidden' name='p' value='43' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Corporate</strong> / <strong>Real Estate</strong> / <strong>Business</strong></div>
                                    </div>
                                    <div class='prc'>
        $43                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='RealEstate'>Y2LEARN</a>
                                        <div class="v">v2.1.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Corporate</a> / <a href=''>Real Estate</a> / <a href=''>Business</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 86%</div>
                                        </div>
                                <div class='d'>
         

RealEstate is a HTML5 &amp; CSS3 Drupal Theme for creating Real Estate Sites, Property Classified Sites and House Rental Agencies. It includes a lot of features you can easily setup to get your sit                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$48</div><div class='disc'>$43</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_6'><input type='hidden' name='p' value='6' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Miscellaneous</strong> / <strong>Business</strong> / <strong>Directory and Listings</strong></div>
                                    </div>
                                    <div class='prc'>
        $96                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='FlatClassifieds - Drupal MultiLingual Classified Ads Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.8</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Miscellaneous</a> / <a href=''>Business</a> / <a href=''>Directory and Listings</a></div>                                                <div><i class='fa fa-clock-o'></i> 13 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         

With the responsive FlatClassifieds theme you'll have a complete and robust Drupal classified ads theme up and running within minutes. FlatClassifieds is clean, modern and uses the newest "flat d                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$149</div><div class='disc'>$96</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_41'><input type='hidden' name='p' value='41' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Creative</strong> / <strong>Corporate</strong> / <strong>Miscellaneous</strong></div>
                                    </div>
                                    <div class='prc'>
        $40                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Seven'>Y2LEARN</a>
                                        <div class="v">v2.1.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Creative</a> / <a href=''>Corporate</a> / <a href=''>Miscellaneous</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
        

Seven is a Responsive HTML5 &amp; CSS3 Drupal theme for creating Business, Corporate, Agency and Freelance websites. It includes a lot of features you can easily setup to get your site 99% ready in                                 </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$48</div><div class='disc'>$40</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_207'><input type='hidden' name='p' value='207' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg
"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Creative</strong> / <strong>Corporate</strong> / <strong>Retail</strong></div>
                                    </div>
                                    <div class='prc'>
        $51                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='xPalladium'>Y2LEARN</a>
                                        <div class="v">v1.0.4</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Creative</a> / <a href=''>Corporate</a> / <a href=''>Retail</a></div>                                                <div><i class='fa fa-clock-o'></i> 5 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 93%</div>
                                        </div>
                                <div class='d'>
         

xPalladium is a Bootstrap 3, HTML5 &amp; CSS3 Drupal Theme for creating Multipurpose websites. It includes a lot of features you can easily setup to get your site 99% ready in just a few minutes. T                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$79</div><div class='disc'>$51</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_33'><input type='hidden' name='p' value='33' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg
"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Corporate</strong> / <strong>Retail</strong> / <strong>Technology</strong></div>
                                    </div>
                                    <div class='prc'>
        $47                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='EBazar'>Y2LEARN</a>
                                        <div class="v">v1.0.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Corporate</a> / <a href=''>Retail</a> / <a href=''>Technology</a></div>                                                <div><i class='fa fa-clock-o'></i> 17 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
         

EBazar is a Retina Responsive HTML5 &amp; CSS3 Bootstrap 3 based Drupal Commerce theme for online ecommerce websites and stores. It includes a lot of features you can easily setup to get your site                                 </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$53</div><div class='disc'>$47</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png
">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_40'><input type='hidden' name='p' value='40' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Blog / Magazine</strong> / <strong>Personal</strong> / <strong>News / Editorial</strong></div>
                                    </div>
                                    <div class='prc'>
        $40                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='NewsCenter'>Y2LEARN</a>
                                        <div class="v">v1.1.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Blog / Magazine</a> / <a href=''>Personal</a> / <a href=''>News / Editorial</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
        

NewsCenter is a fully responsive Drupal 7 theme for creating blogs, online magazines, post or articles communities, newspapers websites, editorials and more.

NewsCenter's responsive feature targets                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$43</div><div class='disc'>$40</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_24'><input type='hidden' name='p' value='24' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Corporate</strong> / <strong>Miscellaneous</strong> / <strong>Business</strong></div>
                                    </div>
                                    <div class='prc'>
        $47                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='JobBoard'>Y2LEARN</a>
                                        <div class="v">v1.2.1</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Corporate</a> / <a href=''>Miscellaneous</a> / <a href=''>Business</a></div>                                                <div><i class='fa fa-clock-o'></i> 13 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 93%</div>
                                        </div>
                                <div class='d'>
         

UPDATE MAY 2015!!! Now JobBoard Supports Payments for Submissions!

JobBoard is a Retina Responsive HTML5 &amp; CSS3 Bootstrap based Drupal theme for Job Boards, Job Classifieds &amp; Job Community                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$53</div><div class='disc'>$47</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_36'><input type='hidden' name='p' value='36' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Retail</strong> / <strong>Technology</strong> / <strong>eCommerce</strong></div>
                                    </div>
                                    <div class='prc'>
        $43                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='inStock'>Y2LEARN</a>
                                        <div class="v">v1.2.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Retail</a> / <a href=''>Technology</a> / <a href=''>eCommerce</a></div>                                                <div><i class='fa fa-clock-o'></i> 20 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
         

inStock is a Retina Responsive HTML5 &amp; CSS3 Bootstrap based Drupal Commerce theme for online ecommerce websites and stores. It includes a lot of features you can easily setup to get your site 9                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$48</div><div class='disc'>$43</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_42'><input type='hidden' name='p' value='42' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Corporate</strong> / <strong>Retail</strong> / <strong>Business</strong></div>
                                    </div>
                                    <div class='prc'>
        $43                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='CarDealer'>Y2LEARN</a>
                                        <div class="v">v2.1.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Corporate</a> / <a href=''>Retail</a> / <a href=''>Business</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
        

CarDealer is a Retina Responsive HTML5 &amp; CSS3 Drupal Theme for creating Car Classified Sites, Car Dealer Sites and Car Rental Agencies. It includes a lot of features you can easily setup to get                                 </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$48</div><div class='disc'>$43</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_31'><input type='hidden' name='p' value='31' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Blog / Magazine</strong> / <strong>Personal</strong> / <strong>News / Editorial</strong></div>
                                    </div>
                                    <div class='prc'>
        $43                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Postwall'>Y2LEARN</a>
                                        <div class="v">v1.0.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Blog / Magazine</a> / <a href=''>Personal</a> / <a href=''>News / Editorial</a></div>                                                <div><i class='fa fa-clock-o'></i> 15 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
         

Postwall is a Retina Responsive HTML5 &amp; CSS3 Bootstrap based Drupal theme for Magazine, Blog &amp; Community Theme. It includes a lot of features you can easily setup to get your site 99% ready                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$48</div><div class='disc'>$43</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_44'><input type='hidden' name='p' value='44' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Creative</strong> / <strong>Corporate</strong> / <strong>Portfolio</strong></div>
                                    </div>
                                    <div class='prc'>
        $41                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Slash'>Y2LEARN</a>
                                        <div class="v">v1.2.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Creative</a> / <a href=''>Corporate</a> / <a href=''>Portfolio</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
        

Slash is a Retina Responsive HTML5 &amp; CSS3 Bootstrap based Drupal theme for Agency, Portfolio, Business and Corporate websites. It includes a lot of features you can easily setup to get your sit                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$49</div><div class='disc'>$41</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_7'><input type='hidden' name='p' value='7' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Y2LEARN</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Entertainment</strong> / <strong>Miscellaneous</strong> / <strong>Film &amp; TV</strong></div>
                                    </div>
                                    <div class='prc'>
        $59                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='ProVideo'>Y2LEARN</a>
                                        <div class="v">v1.0.4</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Entertainment</a> / <a href=''>Miscellaneous</a> / <a href=''>Film &amp; TV</a></div>                                                <div><i class='fa fa-clock-o'></i> 20 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         

ProVideo is a  Drupal 7 Responsive Video Theme  that's simple and clean for visitors. But it's still loaded with great video features.

The Drupal ProVideo theme is our second simple, yet compreh                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$99</div><div class='disc'>$59</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_53'><input type='hidden' name='p' value='53' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>RetailShop</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Retail</strong> / <strong>eCommerce</strong> / <strong>Shopping</strong></div>
                                    </div>
                                    <div class='prc'>
        $39                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Y2LEARN'>Y2LEARN</a>
                                        <div class="v">v1.0.2</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Retail</a> / <a href=''>eCommerce</a> / <a href=''>Shopping</a></div>                                                <div><i class='fa fa-clock-o'></i> 41 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        

Give your Drupal commerce website a fresh and clean look with the Retail Shop Drupal commerce theme. Built using the Drupal Commerce module, the Retail Shop theme features two different front page s                                </div>
                            </div>
                        </div>
                        <div class="pr">$39</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_22'><input type='hidden' name='p' value='22' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>DrupalMag - Responsive Magazine &amp; News Drupal Theme</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>News / Editorial</strong> / <strong>Miscellaneous</strong> / <strong>Fashion</strong></div>
                                    </div>
                                    <div class='prc'>
        $48                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='DrupalMag - Responsive Magazine &amp; News Drupal Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.4</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>News / Editorial</a> / <a href=''>Miscellaneous</a> / <a href=''>Fashion</a></div>                                                <div><i class='fa fa-clock-o'></i> 12 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         

DrupalMag is an awesome premium Drupal magazine theme. Its fully responsive layout, outstanding attention to design, and Bootstrap 3 Framework with built-in flexibility makes it one of the most adv                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$89</div><div class='disc'>$48</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_47'><input type='hidden' name='p' value='47' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>ProClassifieds</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Miscellaneous</strong> / <strong>eCommerce</strong> / <strong>Shopping</strong></div>
                                    </div>
                                    <div class='prc'>
        $59                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='ProClassifieds'>Y2LEARN</a>
                                        <div class="v">v1.0.12</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Miscellaneous</a> / <a href=''>eCommerce</a> / <a href=''>Shopping</a></div>                                                <div><i class='fa fa-clock-o'></i> 29 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         



With the responsive ProClassifieds theme you'll have a complete Drupal classifieds website up in minutes. ProClassifieds is fully responsive and is initially packed with some great features that                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$119</div><div class='disc'>$59</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_58'><input type='hidden' name='p' value='58' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Shoppica</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Retail</strong> / <strong>eCommerce</strong> / <strong>Fashion</strong></div>
                                    </div>
                                    <div class='prc'>
        $29                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Shoppica'>Y2LEARN</a>
                                        <div class="v">v1.0.2</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Retail</a> / <a href=''>eCommerce</a> / <a href=''>Fashion</a></div>                                                <div><i class='fa fa-clock-o'></i> 49 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        New! Shoppica is also available with Ubercart. Buy the default Commerce version and get the Ubercart version for free! Both the Ubercart and Commerce Shoppica versions are in the same file package.

                                </div>
                            </div>
                        </div>
                        <div class="pr">$29</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_34'><input type='hidden' name='p' value='34' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Classic Drupal 7 Responsive Theme</div>
                                        <div class='an'>By <strong>drupalthemes</strong> in <strong>Creative</strong> / <strong>Corporate</strong> / <strong>Portfolio</strong></div>
                                    </div>
                                    <div class='prc'>
        $50                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Classic Drupal 7 Responsive Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.2</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>drupalthemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Creative</a> / <a href=''>Corporate</a> / <a href=''>Portfolio</a></div>                                                <div><i class='fa fa-clock-o'></i> 17 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        

Classic is a clean and multi-purpose Drupal 7 Responsive Theme. It is well suited to be a Corporate / Business theme, a consultancy / creative agency web presence or a personal site. Classic Drupal                                 </div>
                            </div>
                        </div>
                        <div class="pr">$50</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_35'><input type='hidden' name='p' value='35' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>FILIA - Ultimate Responsive eCommerce Drupal Theme</div>
                                        <div class='an'>By <strong>StyleMultimedia</strong> in <strong>eCommerce</strong> / <strong>Business</strong> / <strong>Fashion</strong></div>
                                    </div>
                                    <div class='prc'>
        $58                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='FILIA - Ultimate Responsive eCommerce Drupal Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.0</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>StyleMultimedia</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>eCommerce</a> / <a href=''>Business</a> / <a href=''>Fashion</a></div>                                                <div><i class='fa fa-clock-o'></i> 19 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
            

(MAY 2014) NEW VERSION IS RELEASED! THE THEME AND ITS MODULES ARE UPDATED TO LATEST VERSIONS! 

FILIA is a premium eCommerce theme that is available for Drupal 7 version. It has a clean and m                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$150</div><div class='disc'>$58</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_50'><input type='hidden' name='p' value='50' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Best Mobile</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Blog / Magazine</strong> / <strong>News / Editorial</strong> / <strong>Miscellaneous</strong></div>
                                    </div>
                                    <div class='prc'>
        $29                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Best Mobile'>Y2LEARN</a>
                                        <div class="v">v1.0.1</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Blog / Magazine</a> / <a href=''>News / Editorial</a> / <a href=''>Miscellaneous</a></div>                                                <div><i class='fa fa-clock-o'></i> 40 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        

Introducing the Best Mobile Drupal Theme -- a fully responsive Drupal theme for all devices that uses the popular Skeleton responsive framework. Our first mobile theme, GoMobile, was a huge success!                                </div>
                            </div>
                        </div>
                        <div class="pr">$29</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_45'><input type='hidden' name='p' value='45' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>SQ: Square Metro</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Personal</strong> / <strong>News / Editorial</strong> / <strong>Corporate</strong></div>
                                    </div>
                                    <div class='prc'>
        $49                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='SQ: Square Metro'>Y2LEARN</a>
                                        <div class="v">v1.0.3</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Personal</a> / <a href=''>News / Editorial</a> / <a href=''>Corporate</a></div>                                                <div><i class='fa fa-clock-o'></i> 26 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        

The SQ: Square Metro Drupal theme was built after the WordPress version of SQ: Square Metro (you can view the WordPress version here: SQ: Square Metro for WordPress). This Drupal theme has a modern                                 </div>
                            </div>
                        </div>
                        <div class="pr">$49</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_38'><input type='hidden' name='p' value='38' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Droupon</div>
                                        <div class='an'>By <strong>ThemesDojo</strong> in <strong>Directory and Listings</strong> / <strong>Marketing</strong></div>
                                    </div>
                                    <div class='prc'>
        $87                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Droupon'>Y2LEARN</a>
                                        <div class="v">v1.3.1</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>ThemesDojo</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Directory and Listings</a> / <a href=''>Marketing</a></div>                                                <div><i class='fa fa-clock-o'></i> 20 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 85%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        Introducing Droupon - the Premium Drupal Deals and Coupons Theme that works like Groupon. Droupon has automatic coupon codes generation and an integrated payment system built right in. Simply uplo                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$219</div><div class='disc'>$87</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href="images\TechAge Logo.jpg"><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_62'><input type='hidden' name='p' value='62' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Ecommerce Pro</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Miscellaneous</strong> / <strong>eCommerce</strong> / <strong>Fashion</strong></div>
                                    </div>
                                    <div class='prc'>
        $29                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Ecommerce Pro'>Y2LEARN</a>
                                        <div class="v">v1.0.1</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Miscellaneous</a> / <a href=''>eCommerce</a> / <a href=''>Fashion</a></div>                                                <div><i class='fa fa-clock-o'></i> 63 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        

You're sure to increase your orders with our new Drupal Ecommerce Pro theme with the Commerce module. This theme takes the power of Commerce to the next level. The Ecommerce Pro has 5 theme colors t                                </div>
                            </div>
                        </div>
                        <div class="pr">$29</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_39'><input type='hidden' name='p' value='39' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Sencillo - 3 in 1</div>
                                        <div class='an'>By <strong>DoubleMThemes</strong> in <strong>Creative</strong> / <strong>Portfolio</strong> / <strong>Photography</strong></div>
                                    </div>
                                    <div class='prc'>
        $40                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Sencillo - 3 in 1'>Y2LEARN</a>
                                        <div class="v">v2.0.38</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>DoubleMThemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Creative</a> / <a href=''>Portfolio</a> / <a href=''>Photography</a></div>                                                <div><i class='fa fa-clock-o'></i> 21 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
                                        </div>
                                <div class='d'>
        

Sencillo is a Responsive 3 in 1 Creative &amp; Portfolio Drupal theme for 7.x major version. It's an awesome theme for building portfolio sites in minutes. It combines flexibility, customization &am                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$43</div><div class='disc'>$40</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_46'><input type='hidden' name='p' value='46' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Drupit</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>News / Editorial</strong> / <strong>Miscellaneous</strong> / <strong>Experimental</strong></div>
                                    </div>
                                    <div class='prc'>
        $44                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Drupit'>Y2LEARN</a>
                                        <div class="v">v1.0.8</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>News / Editorial</a> / <a href=''>Miscellaneous</a> / <a href=''>Experimental</a></div>                                                <div><i class='fa fa-clock-o'></i> 26 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         

Drupit is a completely responsive, premium Drupal content curation theme that lets you gather and share the content you like from around the web. Drupit is based on the popular Scoop.it website th                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$89</div><div class='disc'>$44</div></div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_49'><input type='hidden' name='p' value='49' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>Q&amp;A 2</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Personal</strong> / <strong>Miscellaneous</strong> / <strong>Business</strong></div>
                                    </div>
                                    <div class='prc'>
        $79                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='Q&amp;A 2'>Y2LEARN</a>
                                        <div class="v">v1.0.1</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Personal</a> / <a href=''>Miscellaneous</a> / <a href=''>Business</a></div>                                                <div><i class='fa fa-clock-o'></i> 33 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         



Get tons of options with  Questions &amp; Answers 2 -- a comprehensive and unique Q&amp;A responsive Drupal theme. Questions &amp; Answers 2 has many new features versus our first Drupal 6.x Q                                </div>
                            </div>
                        </div>
                        <div class="pr">$79</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_119'><input type='hidden' name='p' value='119' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>CouponPress :: Premium All-in-one HTML Theme</div>
                                        <div class='an'>By <strong>kiarashi</strong> in <strong>Business</strong></div>
                                    </div>
                                    <div class='prc'>
        $14                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='CouponPress :: Premium All-in-one HTML Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.0</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>kiarashi</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Business</a></div>                                                <div><i class='fa fa-clock-o'></i> 11 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 66%</div>
                                        </div>
                                <div class='d'>
        Couponpress is a WordPress-inspired responsive HTML template designed for anyone who wants to start working with the affiliate market using their own coupon website. Not only does it look like a sophi                                </div>
                            </div>
                        </div>
                        <div class="pr">$14</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_219'><input type='hidden' name='p' value='219' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>GRE - Responsive Real Estate Drupal Theme</div>
                                        <div class='an'>By <strong>bahnalthemes</strong> in <strong>Real Estate</strong> / <strong>Directory and Listings</strong></div>
                                    </div>
                                    <div class='prc'>
        $49                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='GRE - Responsive Real Estate Drupal Theme'>Y2LEARN</a>
                                        <div class="v">v1.0.2</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>bahnalthemes</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Real Estate</a> / <a href=''>Directory and Listings</a></div>                                                <div><i class='fa fa-clock-o'></i> 4 months ago</div>
                                            </div>
                                <div class='d'>
        GRE is a Flat and flexible Drupal Theme. This theme is built for professionals and agencies working in Real Estate sector. It can also be used for Corporate, Portfolio, eCommerce sites and Creative ag                                </div>
                            </div>
                        </div>
                        <div class="pr">$49</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_48'><input type='hidden' name='p' value='48' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>WoowShop</div>
                                        <div class='an'>By <strong>Y2LEARN</strong> in <strong>Miscellaneous</strong> / <strong>eCommerce</strong> / <strong>Fashion</strong></div>
                                    </div>
                                    <div class='prc'>
        $59                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='WoowShop'>Y2LEARN</a>
                                        <div class="v">v1.0.7</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>Y2LEARN</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Miscellaneous</a> / <a href=''>eCommerce</a> / <a href=''>Fashion</a></div>                                                <div><i class='fa fa-clock-o'></i> 31 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
         



WoowShop is a premium and fully responsive Drupal Commerce theme that is sure to "Wow" your customers! WoowShop is fully responsive (mobile), easy to setup and configure for managing products, a                                </div>
                            </div>
                        </div>
                        <div class="pr">$59</div>
                    </div>
        <div class="p">                                <div class="th">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TechAge-Logo-11-300x103.png">
                            <div class='thi'>
                                <div class='thid'><a href=""><i class='fa fa-file-text-o' title='More Details'></i></a></div>
                                <div class='thio'>
                                    <a href=''><i class='fa fa-eye' title='Demo'></i></a>
                                    <i pid="" hash="" class='wish fa  fa-heart-o' title='Add to Wishlist' w='0'></i>
                                    <i class='fa fa-shopping-cart' title='Buy Now!' id='buy_37'><input type='hidden' name='p' value='37' /><input type='hidden' name='q1' value='0' /><input type='hidden' name='q2' value='0' /><input type='hidden' name='action' value='buy_product' /></i>
                                </div>
                            </div>
                            <div class='poster'>
                                <div class='thu'><img src="images\loading.png" srcx="images\TechAge Logo.jpg"></div>
                                <div class='thui'>
                                    <div>
                                        <div class='pn'>DrupAds</div>
                                        <div class='an'>By <strong>ThemesDojo</strong> in <strong>Corporate</strong> / <strong>Directory and Listings</strong> / <strong>Marketing</strong></div>
                                    </div>
                                    <div class='prc'>
        $109                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inf">
                            <div>
                                <div class='n'>
                                    <div class='n'><a href='' title='DrupAds'>Y2LEARN</a>
                                        <div class="v">v1.2.0</div>
                                    </div>
                                </div>
                                <div class='i'>
                                    <div><i class='fa fa-user'></i> <a href=''>ThemesDojo</a></div>
        <div><i class='fa fa-folder-o'></i> <a href=''>Corporate</a> / <a href=''>Directory and Listings</a> / <a href=''>Marketing</a></div>                                                <div><i class='fa fa-clock-o'></i> 20 months ago</div>
                                                        <div><i class='fa fa-thumbs-o-up'></i> 100%</div>
        <div><i class='fa fa-archive'></i> In club</div>                                </div>
                                <div class='d'>
        This is a powerful Drupal 7 Classified Ads theme.  It’s being developed using the latest usability guides.

First of all it has great features, like faceted search , ad types , locations , a superb                                </div>
                            </div>
                        </div>
                        <div class="pr"><div class='full'>$219</div><div class='disc'>$109</div></div>
                    </div>
                    <div class='pag'>
                            <div class="pagenr">
                                <div class="pl">
                                    <div class="ss">Page</div>
                                    <div class="hh ll">
                                                                                                    </div>
                                </div>
                                <div class="pc"><input type="text" name="page" id="pagenumber" value="1"></div>
                                <div class="pr">
                                    <div class="ss">of 13</div>
                                    <div class="hh rr">
                                <a onclick='$("#p").val(2);filter();'><i class="fa fa-angle-right"></i></a>                                        <a onclick='$("#p").val(13);filter();'>13</a>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $('#pagenumber').on('blur',function(){ if($(this).val()!=1)$("#p").val($(this).val());filter();});
                                $('#pagenumber').on('keypress',function(event){ if(event.which == 13) {if($(this).val()!=1)$("#p").val($(this).val());filter();}});
                            </script>
            </div>
                        </div>
    <div class='right'>
                <input type="text" id='s' name="s" value="" placeholder="shoot a keyword here"><i class="fa fa-search"></i>
                                <div class='t'><i class='fa fa-list-alt'></i> Product Types</div>
                                <div class='tt'>
                                <div class='ttl' t='3'><a>Drupal Themes</a></div>
                                <div class='ttr'>89</div>
                            </div>
                                                    <div class='tt'>
                                <div class='ttl' t='5'><a>HTML/CSS</a></div>
                                <div class='ttr'>73</div>
                            </div>
                                                    <div class='tt'>
                                <div class='ttl' t='7'><a>Joomla! Templates</a></div>
                                <div class='ttr'>55</div>
                            </div>
                                                    <div class='tt'>
                                <div class='ttl' t='4'><a>PSD Template</a></div>
                                <div class='ttr'>15</div>
                            </div>
                                                    <div class='tt'>
                                <div class='ttl' t='1'><a>Wordpress Themes</a></div>
                                <div class='ttr'>158</div>
                            </div>
                        <div class='separator'></div>                        <div class='t'><i class='fa fa-folder-o'></i> Categories</div>
                                <div class='tt c'>
                                <div class='ttl' c='14'><a href=''>Blog / Magazine</a></div>
                                <div class='ttr'>83</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='18'><a href=''>Corporate</a></div>
                                <div class='ttr'>111</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='17'><a href=''>Creative</a></div>
                                <div class='ttr'>101</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='25'><a href=''>eCommerce</a></div>
                                <div class='ttr'>43</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='27'><a href=''>Education</a></div>
                                <div class='ttr'>7</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='22'><a href=''>Entertainment</a></div>
                                <div class='ttr'>18</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='24'><a href=''>Miscellaneous</a></div>
                                <div class='ttr'>67</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='21'><a href=''>Nonprofit</a></div>
                                <div class='ttr'>8</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='26'><a href=''>Real Estate</a></div>
                                <div class='ttr'>11</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='19'><a href=''>Retail</a></div>
                                <div class='ttr'>38</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='20'><a href=''>Technology</a></div>
                                <div class='ttr'>24</div>
                            </div>
                                    <div class='tt c'>
                                <div class='ttl' c='23'><a href=''>Wedding</a></div>
                                <div class='ttr'>7</div>
                            </div>
        <div class='separator'></div>                    <div class='t'><i class='fa fa-money'></i> Price Range<div class='controls' id='price_slider_controls'><i class='fa fa-times'></i> <i class='fa fa-check'></i></div></div>
            
            <div class='slider_holder'>
                <div class='slab'></div>
                <div id='price_slider'></div>
                <div style='position:relative;'>
                    <input type='hidden' id='vpf' value='5'>
                    <input type='hidden' id='vpt' value='219'>
                    <div id='minp' class='mp'>$5</div>
                    <div id='maxp' class='mp'>$219</div>
                </div>
            </div>
            <div class='separator'></div>
            <script>
                $( "#price_slider" ).slider({
    range: true,
    min: 5,
    max: 219,
    values: [ 5, 219 ],
    slide: function( event, ui ) {
        /*ui.values[0]*/
        if(ui.values[0] !== ui.values[1])
        {
            $( "#price_slider" ).prev().html('$'+ui.values[0]+' - $'+ui.values[1]);
        }
        else
        {
            $( "#price_slider" ).prev().html('$'+ui.values[0]);
        }
        cv=0;
        $('#vpf').val(ui.values[0]);
        $('#vpt').val(ui.values[1]);
        if(ui.values[0]!=5) {cv++;}
        if(ui.values[1]!=219) {cv++;}
        if(cv==0)
        {
            $( "#price_slider_controls").hide();
        }
        else
        {
            $( "#price_slider_controls").show();
        }
    }
    });
    $( "#price_slider_controls .fa-times").on('click', function(){
        $( "#price_slider" ).slider( "values", [ 5, 219 ] );
        $('#pf').val('5');
        $('#pt').val('219');
        if($("#price_slider").slider( "values", 0 ) !== $("#price_slider").slider( "values", 1 ))
        {
            $( "#price_slider" ).prev().html('$'+$("#price_slider").slider( "values", 0 )+' - $'+$("#price_slider").slider( "values", 1 ));
        }
        else
        {
            $( "#price_slider" ).prev().html('$'+$("#price_slider").slider( "values", 0 ));
        }
         $( "#price_slider_controls").hide();
    });
    $( "#price_slider_controls .fa-check").on('click', function(){
        $('#pf').val($("#price_slider").slider( "values", 0 ));
        $('#pt').val($("#price_slider").slider( "values", 1 ));
         $( "#price_slider_controls").hide();
         filter();
    });
        if($("#price_slider").slider( "values", 0 ) !== $("#price_slider").slider( "values", 1 ))
        {
            $( "#price_slider" ).prev().html('$'+$("#price_slider").slider( "values", 0 )+' - $'+$("#price_slider").slider( "values", 1 ));
        }
        else
        {
            $( "#price_slider" ).prev().html('$'+$("#price_slider").slider( "values", 0 ));
        }



            </script>
                        <div class='t'><i class='fa fa-tags'></i> Tags</div>
                        
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='123'>responsive</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='101'>portfolio</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='94'>business</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='21'>Mobile Drupal Themes</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='95'>clean</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='119'>blog</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='96'>corporate</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='107'>modern</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='105'>creative</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='157'>multipurpose</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='28'>Drupal Business Themes</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='126'>wordpress</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='129'>woocommerce</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='79'>Mobile HTML Templates</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='57'>WordPress Mobile Themes</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='296'>bootstrap</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='111'>ecommerce</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='118'>shop</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='548'>joomla template</a></div>
                            <div class='ttr'></div>
                        </div>
                            
                        <div class='tt tg'>
                            <div class='ttl'><a class='tags' tg='80'>Business HTML Templates</a></div>
                            <div class='ttr'></div>
                        </div>
        <div class='separator'></div>            <div class='t'><i class='fa fa-thumbs-o-up'></i> Recommendation Rate<div class='controls' id='rate_slider_controls'><i class='fa fa-times'></i> <i class='fa fa-check'></i></div></div>
            <input type='hidden' id='vrr' value='0'>
            <div class='slider_holder'>
                <div class='slab'></div>
                <div id='rate_slider'></div>
            </div>
            <div class='separator'></div>
            <script>
                $( "#rate_slider" ).slider({
    range: 'max',
    min: 0,
    max: 100,
    value: 0 ,
    slide: function( event, ui ) {
        /*ui.values[0]*/
            $( "#rate_slider" ).prev().html(ui.value+'%');
            $('#vrr').val(ui.value);
            if(ui.value==0)
            {
                $( "#rate_slider_controls").hide();
            }
            else
            {
                $( "#rate_slider_controls").show();
            }
    }
    });
         $( "#rate_slider" ).prev().html($("#rate_slider").slider( "value")+ '%');
         $('#rate_slider .ui-slider-range-max').css('right','0px');
         
         $( "#rate_slider_controls .fa-times").on('click', function(){
            $( "#rate_slider" ).slider( "value", 0 );
            $( "#rate_slider" ).prev().html('0%');
            $("#vrr").val('0')
            $('#rr').val($("#vrr").val());
            $( "#rate_slider_controls").hide();
    });
    $( "#rate_slider_controls .fa-check").on('click', function(){
            $('#rr').val($("#vrr").val());
            $( "#rate_slider_controls").hide();
         filter();
    });


            </script>
                <div class='t'><i class='fa fa-clock-o'></i> Published in last<div class='controls' id='published_slider_controls'><i class='fa fa-times'></i> <i class='fa fa-check'></i></div></div>
            <input type='hidden' id='vpb' value='628'>
            <div class='slider_holder h40'>
                <div class='slab'></div>
                <div id='published_slider'></div>
            </div>
            <div class='separator'></div>
            <script>
                $( "#published_slider" ).slider({
    range: 'min',
    min: 0,
    max: 628,
    value: 628 ,
    slide: function( event, ui ) {
        /*ui.values[0]*/
            $( "#published_slider" ).prev().html(ui.value+' days');
            $('#vpb').val(ui.value);
            if(ui.value==628)
            {
                $( "#published_slider_controls").hide();
            }
            else
            {
                $( "#published_slider_controls").show();
            }
    }
    });
         $( "#published_slider" ).prev().html($("#published_slider").slider( "value")+ ' days');

    $( "#published_slider_controls .fa-times").on('click', function(){
            $( "#published_slider" ).slider( "value", 628 );
            $( "#published_slider" ).prev().html('628 days');
            $("#vpb").val('628')
            $('#pb').val($("#vpb").val());
            $( "#published_slider_controls").hide();
    });
    $( "#published_slider_controls .fa-check").on('click', function(){
            $('#pb').val($("#vpb").val());
            $( "#published_slider_controls").hide();
         filter();
    });

            </script>
                <div class='t'>Retina-Ready</div>
                                    <div class='tt' l='16'>
                            <div class='ttl'><a class='lists' l='83'>N/A</a></div>
                            <div class='ttr'>21</div>
                        </div> 
                                    <div class='tt' l='16'>
                            <div class='ttl'><a class='lists' l='82'>No</a></div>
                            <div class='ttr'>73</div>
                        </div> 
                                    <div class='tt' l='16'>
                            <div class='ttl'><a class='lists' l='81'>Yes</a></div>
                            <div class='ttr'>296</div>
                        </div> 
            <div class='separator'></div>    </div>
            </div>
    <script src="js\ajax.js" type="text/javascript"></script>
    <link href="<?php echo get_template_directory_uri(); ?>/css/select-2.css" rel="stylesheet" />
</div>
 <i class='fa fa-spin fa-spinner' id="spinme" style='margin:0;display:none;cursor:none;z-index:9999;position:absolute;'></i>
 <script>
          $('.fa-shopping-cart').on('click',function(){getself(this);});$('.tt > .ttl[t] a').on('click',function(){$('#t').val($(this).parent().attr('t'));filter();});$('.tt > .ttl > a[tg]').on('click',function(){$('#tg').val($(this).attr('tg'));filter();});$('.tt > .ttl > a.lists').on('click',function(){$('#l'+$(this).parent().parent().attr('l')).val($(this).attr('l'));filter();});$('.thi').on('mouseover',function(){var pi=$(this).next().find('img'); if(pi.attr('srcx').length>0) {pi.attr('src',pi.attr('srcx')); }});         function centrr() {
            var T = $(window).height() / 2 - $('#pay').height() / 2 + $(window).scrollTop(),
                L = $(window).width() / 2 - $('#pay').width() / 2;
            $('#pay').css({
                top: T,
                left: L
            });
        };
         $(document).mousemove(function (e) {
             //console.log(e);
             
                    $('#spinme').css({ 'top': parseInt(parseInt(e.pageY)-10), 'left': parseInt(parseInt(e.pageX)-10),});
             });
             
        if(window.location.hash.length>1 )
             {
                 !isNaN(window.location.hash.slice(1))
                 {
                     window.scrollTo(0,window.location.hash.slice(1));
                 }
             }
             /*ALL - category*/         function filter()
         {
             var strurl='';
                          if($('#t').val()!=='0')
             {
                 strurl+='t='+($('#t').val())+'&';
             }
                          if($('#c').val()!=='0')
             {
                 strurl+='c='+($('#c').val())+'&';
             }
                          
             if($('#s').val().length>0)
             {
                 strurl+='s='+($('#s').val())+'&';
             }
             
             if($('#pf').val()!=='5')
             {
                 strurl+='pf='+($('#pf').val())+'&';
             }
             if($('#pt').val()!=='219')
             {
                 strurl+='pt='+($('#pt').val())+'&';
             }
             if($('#tg').val()!=='0')
             {
                 strurl+='tg='+($('#tg').val())+'&';
             }
             if($('#p').val()!=='0')
             {
                 strurl+='p='+($('#p').val())+'&';
             }
             if($('#rr').val()!=='0')
             {
                 strurl+='rr='+($('#rr').val())+'&';
             }
             if($('#pb').val()!=='628')
             {
                 strurl+='pb='+($('#pb').val())+'&';
             }
                             if($('#l16').val()!=='0')
             {
                 strurl+='l16='+($('#l16').val())+'&';
             }     
                          if($('#o').val()!=='0')
             {
                 strurl+='o='+($('#o').val())+'&';
             }     
             $('#spinme').css({'display':'block'});
             $('#main.category').css({'opacity':'0.4','cursor':'none'});
             
             if(strurl.length>0 && strurl.slice(-1)==='&') {strurl=strurl.slice(0,-1);};
             if($(document).scrollTop()>0)
             {
                 sc='#'+$(document).scrollTop();
             }
             else
             {
                 sc='';
             }
             
             if(strurl.length>0)
             {
                 console.log(strurl);
                document.location.href='detail.php'+strurl+sc;
              //  console.log('detail.php'+strurl+sc);
             }
             else
             {
                document.location.href='detail.php'+sc;
//                console.log('detail.php'+sc);
             }
             
         }
//          $(document).ready(function() {
          $('select').select2({minimumResultsForSearch: -1}).on("change", function(e) {
           $('#o').val(e.val); filter();
        });
        $('#s').on('keypress',function(e)
        {
            var code = e.keyCode || e.which;
            if(code == 13) { //Enter keycode
              filter();
            }
        });
        $('#s + i').on('click',function(e)
        {
              filter();
        });
        $('i.wish').on('click',function(){
            if($(this).attr('hash').length ==0) { return false;}
                if($(this).hasClass('fa-heart-o'))
                {
                    makePOSTRequest(document.location.href,'I='+$(this).attr('pid')+'&action=remove_from_wishlist&hash='+$(this).attr('hash'));
                }
                else
                {
                    makePOSTRequest(document.location.href,'I='+$(this).attr('pid')+'&action=add_to_wishlist&hash='+$(this).attr('hash'));
                }
            }).on('mouseover mousemove mousedown',function(){
                if($(this).attr('hash').length ==0) { return false;}
                if($(this).attr("w")=="0")
                {
                    $(this).removeClass('fa-heart-o').addClass('fa-heart');
                }
                else 
                {
                    $(this).attr('title','Remove from wishlist').removeClass('fa-heart').addClass("fa-heart-o").css('color','red');
                }
            }).on('mouseout',function(){
                if($(this).attr("w")=="0")
                {
                    $(this).attr('title','Add to wishlist').removeClass('fa-heart').addClass("fa-heart-o").css('color','');
                }
                else
                {
                    $(this).attr('title','In my wishlist').removeClass('fa-heart-o').addClass("fa-heart").css('color','');
                }
            });
            $(document).ready(function() {
                            if( typeof(ga) == 'function') ga('send', 'event', 'Category Page', 'view', '', 0);
                        });
  //        });
</script>   
<?php get_footer(); ?> 
