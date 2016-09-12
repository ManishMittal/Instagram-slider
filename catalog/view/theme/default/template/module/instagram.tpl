<!--
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
-->
<h3><?php echo $heading_title; ?></h3>
<?php if(!empty($error)) {echo $error;} ?>
<div id="instagram" class="owl-carousel">
<?php 
if(isset($images)) {
foreach ($images as $image) { ?>
  <div class="item text-center" style='margin:1px;'>
    <?php if ($image['link']) { ?>
    <a href="<?php echo $image['link']; ?>" target='_blank'><img src="<?php echo $image['image']; ?>" alt="<?php echo $image['title']; ?>" class="img-responsive" /></a>
    <?php } else { ?>
    <img src="<?php echo $image['image']; ?>" alt="<?php echo $image['title']; ?>" class="img-responsive" />
    <?php } ?>
  </div>
  <?php } }?>
</div>
<script type="text/javascript"><!--
$('#instagram').owlCarousel({
	center:true,
	loop:true,
	items:<?php echo $item;?>,
	autoPlay: <?php if($autoplay) echo '3000'; else echo $autoplay;?>,
	navigation: <?php echo $navigation;?>,
	navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
	pagination: <?php echo $pagination;?>,
	lazyLoad:false,
	stopOnHover:true,
	lazyEffect : "fade",
	rewindNav : <?php echo $rewindnav;?>,

        
});
$( document ).ready
(
	
	function()
	{
		var width=$('.owl-item').css('width');
		var widths=width.split('px');
        	var no_of_items=<?php echo $item;?>;
                var width=Number(widths[0])/Number(no_of_items);
                var dimension=<?php echo $width;?>;
                if(Number(dimension)<Number(width))
		{  
			var left_width=Number(width)-Number(dimension);
			left_width=Number(left_width)/2;
			left_width=parseInt(left_width);
			//alert(left_width);
                     	$('.owl-item').css({'padding-left':left_width+'px','padding-right':left_width+'px'});
		}
	}
);
--></script>
