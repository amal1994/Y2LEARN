<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>
        <div id="header_bg" class="section clearfix">
            <div style="width:960px; margin-left: auto;margin-right:auto;"><div class='fl'>Contact TechAge</div></div>
        </div>
    </div><div id='page_content' ><div id='main' class='contact'>    
    <div class="left">
        <div class="t">It&#39s always great to hear from you</div>
        <div class="txt">You can send us a general message using the contact form below. Please note that there&#39s a lot going on, so please be patient, as it might take around 48 hours until we answer.<br /><br /></div>
        <div class="txt">Use the contact form below to get in touch with us.</div>
            <div class="ffield"><input type="text" name="name" value="" placeholder="Your Name..."></div>
            <div class="ffield"><input type="text" name="email" value="" placeholder="Your E-Mail Address..."></div>
            <div class="ffield"><input type="text" name="subject" value="" placeholder="Subject..."></div>
            <div class="tffield"><textarea name="message" value="" placeholder="Type in your message here..."></textarea></div>
            <div class="ffield" >
                <div class="field_label fl"><img src="images/captcha.jpg"></div>
                <div class="fl">
                    <input id='captcha_input' type="text" name="captcha_input" value="" placeholder="captcha text...">
                    <input type='hidden' name='action' value='contact'>
                    <input type='hidden' name='hash' value='bd43ac3c2138b058a20b50db07751cfe'>
                </div>
                <div class="buton load" style=" margin-left:10px;float:right;" ><i class="fa fa-envelope"></i> Send Message</div>
            </div>
            
    </div>
    <div class="right">
        <div class="t">Need Help?</div>
        <div class="txt"><span style='color:#c00;font-weight:bold;'>If you need Support for an item you&#39ve purchased on TechAge, please contact the item&#39s author and ask them for support.<br /><br />

Support for TechAgeLabs.com products are based on each author&#39s own level of support.</span><br /><br />

Note: It&#39s very important to include an order number, product name, or other relevant information so that authors can more easily locate any previous orders you've made.</div>
            </div>
        </div></div>
<script src="js\ajax.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
     function setProgress(obj,i)
        {
            all=(obj.width()+34)*i;
            obj.children('.progress').width(all);
        }
        function stop(obj,i)
        {
            clearInterval( interval );
            o=$(obj);
            o.width(parseInt(o.attr('w'))+1);
            setProgress(o,1);
            if(i==1)
            {
             //success
                res="fa-check";
                bg='green';
            }
            else
            {
             //error
             res="fa-times";
             bg='red';
             
            }
            o.html("");
            o.removeClass('loading').addClass(bg);
            setTimeout(function(){o.html("<i class=\"fa "+res+"\"></i>")},300);
            setTimeout(function(){o.css('color','#ffffff')},300);
            setTimeout(function(){o.removeClass(bg)},2000);
            setTimeout(function(){o.html("")},2000);
            setTimeout(function(){o.html($(obj).attr('content'))},2300);
        }
   $(document).ready(function() {
       
        $('.load').on('click',function(){
            if($(this).hasClass('loading')) return false;
            if( typeof(ga) == 'function') ga('send', 'event', 'Send Message - Contact Us', 'click', 'Send Message', 1);
            if($(this).attr('content') === undefined) $(this).attr('w',$(this).width());
            if($(this).attr('content') !== undefined && $(this).html() != $(this).attr('content')) return false;
                $(this).addClass('loading'); $(this).width($(this).width()); $(this).attr("content",$(this).html());
                $(this).html("<div class=\"progress\"></div>");
                var progress=-0.1; var a=$(this);
                interval = setInterval( function() {progress = Math.min( progress + Math.random() * 0.1, 0.96 ); setProgress(a,progress );if( progress === 1 ) {clearInterval( interval );}}, 100 );
                get(document.getElementById('main'));
        });
     $(".ffield IMG").on('click',function(){refresh_captcha(0);});
     $("#captcha_input").on('keyup',function(){$(this).removeClass('red');$("#captcha_input + label").removeClass('red');});
     //makePOSTRequest('/','upload_once='+Math.random());
     if( typeof(ga) == 'function') ga('send', 'event', 'Contact', 'view', '', 0);
 });
 
    function refresh_captcha(x)
        {
            // 0 - refresh with focus
            // 1 - refresh with error and focus
            // 2 - refresh without focus
            var a=$(".ffield IMG")[0].src.split("?"); $(".ffield IMG")[0].src=a[0]+"?"+Math.random(999999);
            if(x==1) {$("#captcha_input").addClass('red');}
            if(x<2) $("#captcha_input").val("").focus(); else $("#captcha_input").val("");
        }
</script>
<?php get_footer(); ?>
