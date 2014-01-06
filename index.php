<html>
<head>
	<title>Reinforce '14</title>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<style type="text/css">
		*{padding: 0px; font-family: "calibri";}
		#wrapper
		{
			margin: auto;
			width: 1000px;	min-height: 550px;
			background-color: #ffffff;
			box-shadow: 0px 0px 10px #000000;
			border-radius: 10px;
			overflow: hidden;
		}
		#home_imgs_wrapper
		{
			width: 1000px; height:550px;
			margin: -16px auto;
		}
		#imgs_container
		{
			width: 1000px;	height: 534px;
			margin: 0px auto;
		}
		#home_imgs_ul {list-style-type: none; height: 534px;	position: relative; top:0px;}
		#home_imgs_ul li{list-style-type: none; position: absolute; top:0px; left: 0px;}
		.home_imgs_list
		{
			width: 1000px;	height: 534px;
		}
		.home_imgs_list img{width: 1000px;	height: 534px;	opacity: 0.5;}
		.home_page_elements_border
		{
			margin-left: auto;	margin-right: auto;
			position: relative;
			border: 5px solid;	border-color: rgba(255,0,0,0.8);
			z-index: 99;
			padding: 5px;
		}
		.home_page_elements{	background-color: rgba(255,0,0,0.8);	overflow: hidden;	}
		#recent_event_border{height: 100px;	width: 400px; top:-450px;}
		#recent_event{	text-align: center;	margin: 0px; height: 100px;	width: 400px;}
		#latest_happenings_border{top:-400px;	height: 70px;	width: 400px;}
		#latest_happenings{		padding: 10px;	margin: 0px;	height: 50px;	width: 380px;}
		#latest_happenings ul{list-style-type: none;	overflow: hidden; position: relative; top:0px; margin-top: 0px;}
		#latest_happenings ul li{list-style-type: none; height: 50px; overflow: hidden;}

	</style>
</head>
<body>
	<div id="wrapper">
		<?php require ("header.inc"); ?>
		<?php require ("navigation.inc");	?>
		<div id="home_imgs_wrapper">
			<div id="imgs_container">
				<div>
					<ul id="home_imgs_ul">
						<li id="img1_li"><div id="img1" class="home_imgs_list"><img src="./imgs/home_imgs/img1.jpg"></div></li>
						<li id="img2_li"><div id="img2" class="home_imgs_list"><img src="./imgs/home_imgs/img2.jpg"></div></li>
						<li id="img3_li"><div id="img3" class="home_imgs_list"><img src="./imgs/home_imgs/img3.jpg"></div></li>
						<li id="img4_li"><div id="img4" class="home_imgs_list"><img src="./imgs/home_imgs/img4.jpg"></div></li>
						<li id="img5_li"><div id="img5" class="home_imgs_list"><img src="./imgs/home_imgs/img5.jpg"></div></li>
						<li id="img6_li"><div id="img6" class="home_imgs_list"><img src="./imgs/home_imgs/img6.jpg"></div></li>
					</ul>
				</div>
				<div id='recent_event_border' class='home_page_elements_border'>
				<div id="recent_event" class="home_page_elements">
					<div id="recent_event_holder">
						<span style="font-size:20px; font-weight:900;">RECENT EVENT</span><br>
						<span>The Most Exciting Bridge Designing Event Happening At High-Tech Block in Room No. H-909. Event Coodinators Paras Bhatia and Sagar Khanna</span>
					</div>
				</div>
				</div>
				<div id='latest_happenings_border' class='home_page_elements_border'>
				<div id="latest_happenings" class="home_page_elements">					
					<div style='height:100%; width:100%;	overflow:hidden;'>
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
					</div>
				</div>
				</div>
			</div>
		</div>		
		<?php require("footer.inc"); ?>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('#home_imgs_ul li').hide();
		$('#img1_li').fadeIn(400);
	});
</script>
<script type="text/javascript">
	t=setTimeout(function() {transition_effect()},1000);
	var home_img_count=2;
	function transition_effect()
	{
		setInterval(function(){
			$('#home_imgs_ul li').fadeOut(2000);
			$('#img'+home_img_count+'_li').fadeIn(2000);
			if(home_img_count>=6){home_img_count=1;}
			else{home_img_count++;}
		},5000);
	}
</script>
<script type="text/javascript">
	var news1='This is the news item 1 for the news section of reinforce14 This is the news item 1 for the news section';
	var news2='This is the news item 2 for the news section of reinforce14 ';
	var news3='This is the news Item 3 for the news section of reinforce14 ';
	var news4='This is the news item 4 for the news section of reinforce14 ';

	var news_item= new Array(news1,news2,news3,news4);
	var data_index=0;
	var data_content_index=0;
	var no_of_items=4;

	function typewriting_effect()
	{
		if(data_content_index>=news_item[data_index].length-1)
		{
	        clearInterval(T);
	        setTimeout(function()
	        {
	        	data_content_index=0;
	        	if(data_index>=no_of_items-1)
	        	{
	        		data_index=0;
	        		$('#latest_happenings ul li span').remove();
	        		$('#latest_happenings ul').css('top','0px');
	        	}
	        	else
	        	{
	        		$('#latest_happenings ul').animate({top:'-=50px'});
	        		// $('#latest_happenings ul li:eq('+data_index+') span').remove();
	        		data_index++;
	        	}
	        	T=setInterval("typewriting_effect()",50);
	        },2000);        
    	}
    	_span = '<span>'+news_item[data_index][data_content_index]+'</span>';
    	$('#latest_happenings ul li:eq('+data_index+')').append(_span);
    	data_content_index++;
   	}
   	 T=setInterval("typewriting_effect()",50);
</script>
</html>