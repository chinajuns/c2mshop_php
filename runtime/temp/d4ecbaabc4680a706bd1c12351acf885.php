<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"template/wap/default//Index/shopStreet.html";i:1513303784;s:30:"template/wap/default/base.html";i:1520580411;s:34:"template/wap/default/urlModel.html";i:1520231681;s:32:"template/wap/default/footer.html";i:1520580272;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php if($title_before != ''): ?><?php echo $title_before; ?>&nbsp;-&nbsp;<?php endif; ?><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script src="__STATIC__/js/load_bottom.js" type="text/javascript"></script>
<script src="__STATIC__/js/time_common.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
var UPLOADCOMMON = 'UPLOAD_COMMON';
var SHOPMAIN = "SHOP_MAIN";
var temp = "__TEMP__/";//外置JS调用
var STATIC = "__STATIC__";
$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//防止IOS手机返回不刷新
var isPageHide = false;
window.addEventListener('pageshow', function () {
	if (isPageHide) window.location.reload();
});
window.addEventListener('pagehide', function () {
	isPageHide = true;
});


//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
.sub-nav.nav-b5 dd{width:33.33%;font-size:14px;}

.modal {
    position: fixed;
    top: 25%;
    left: 8%;
    z-index: 1050;
    width: 74%;
    background-color: #ffffff;
    border: 1px solid #999;
    border: 1px solid rgba(0, 0, 0, 0.3);
    outline: none;
    -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.fade {
    opacity: 1;
    -webkit-transition: opacity 0.15s linear;
    -moz-transition: opacity 0.15s linear;
    -o-transition: opacity 0.15s linear;
    transition: opacity 0.15s linear;
	padding:0 16px;
	border-radius: 6px;
}
.modal-title{
	    height: 45px;
    line-height: 45px;
    text-align: center;
    border-bottom: 1px solid #eee;
    color: red;
    font-size: 17px;
    font-weight: normal;
}
.log-cont{
	margin-top: 15px;
    height: 40px;
    line-height: 40px;
    border: 1px solid #eee;
    background: #fff;
    border-radius: 3px;
	padding: 1px 5px;
	padding-left: 10px;
}
.loginbotton{
	margin-top: 25px;
    height: 38px;
    line-height: 38px;
    text-align: center;
    background: red;
    margin-bottom: 33px;
    border-radius: 3px;
}

.lang-btn{
    border: 0;
    background: red;
    color: #fff;
}
input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
    background-color: rgba(217, 217, 217, 0.29);
}
input{
	border:0;
	background:#fff;
}
.getvilidate{
    border: 1px solid red;
    border-radius: 3px;
    color: red;
	padding: 0 5px;
    height: 25px;
    line-height: 25px;
    margin-top: 4px;
}
body{max-width: 640px;}
</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/shopStreet.css">

<!-- 添加样式文件 -->
<style type="text/css">
.vertical-bar{
	border-left: 1px solid #efefef;
	height: 64px;
	vertical-align: middle;
	display: inline-block;
	margin-top: 5px;
	float: left;
}
</style>

</head>
<input type="hidden" id="shop_rewrite_model" value="<?php echo rewrite_model(); ?>">
<input type="hidden" id="shop_url_model" value="<?php echo url_model(); ?>">
<script>
function __URL(url)
{
    url = url.replace('SHOP_MAIN', '');
    url = url.replace('APP_MAIN', 'wap');
    if(url == ''|| url == null){
        return 'SHOP_MAIN';
    }else{
        var str=url.substring(0, 1);
        if(str=='/' || str=="\\"){
            url=url.substring(1, url.length);
        }
        if($("#shop_rewrite_model").val()==1 || $("#shop_rewrite_model").val()==true){
            return 'SHOP_MAIN/'+url;
        }
        var action_array = url.split('?');
        //检测是否是pathinfo模式
        url_model = $("#shop_url_model").val();
        if(url_model==1 || url_model==true)
        {
            var base_url = 'SHOP_MAIN/'+action_array[0];
            var tag = '?';
        }else{
            var base_url = 'SHOP_MAIN?s=/'+ action_array[0];
            var tag = '&';
        }
        if(action_array[1] != '' && action_array[1] != null){
            return base_url + tag + action_array[1];
        }else{
        	 return base_url;
        }
    }
}
 /**
  * 处理图片路径
  */
function __IMG(img_path){
	var path = "";
	if(img_path != undefined && img_path != ""){
		if(img_path.indexOf("http://") == -1 && img_path.indexOf("https://") == -1){
			path = "__UPLOAD__\/"+img_path;
		}else{
			path = img_path;
		}
	}
	return path;
}
</script>
<body class="body-gray" style="margin: auto;">
	
<section class="head">
	<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)">
<!-- 	<i class="icon-back"></i> -->
	</a>
	<div class="head-title">
		<div class="custom-search" >
			<form action="" method="get">
				<input type="text" class="custom-search-input" style="position:relative;" placeholder="请输入店铺名称" value='<?php echo $shop_name; ?>' id="shop">
				<button type="button" class="custom-search-button" onclick="search()">搜索</button>
			</form>
		</div>
	</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div class="order_div">
	<!-- 全部 -->
	<?php if($shop_group_name == ''): if($order_type == ''): ?>
			<span class="select" id="shop_group"><a href="javascript:;">全部 </a>
		<?php else: ?>
			<span id="shop_group">全部
		<?php endif; else: ?>
		<span id="shop_group"><?php echo $shop_group_name; endif; ?>
		</span>

	<!-- 销量 -->
	<?php if($order_type == 1): ?>
		<span class="select" >
	<?php else: ?>
		<span>
	<?php endif; if($order_type == 1 && $sort == 'desc'): ?>
			<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=1&sort=asc&shop_group_name=<?php echo $shop_group_name; ?>">销量<i class='desc_selected'></i></a>
			<?php else: ?>
			<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=1&sort=desc&shop_group_name=<?php echo $shop_group_name; ?>">销量
				<?php if($order_type != 1): ?>
					<i class="desc"></i>
				<?php else: ?>
					<i class="asc_selected"></i>
				<?php endif; ?>
			</a>
		<?php endif; ?>
		</span>

	<!-- 信誉 -->
	<?php if($order_type == 2): ?>
		<span class="select" >
	<?php else: ?>
		<span>
	<?php endif; if($order_type == 2 && $sort == 'desc'): ?>
		<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=2&sort=asc&shop_group_name=<?php echo $shop_group_name; ?>">信誉<i class='desc_selected'></i></a>
		<?php else: ?>
		<a href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $shop_group_id; ?>&shop_name=<?php echo $shop_name; ?>&order_type=2&sort=desc&shop_group_name=<?php echo $shop_group_name; ?>">信誉
			<?php if($order_type != 2): ?>
				<i class="desc"></i>
			<?php else: ?>
				<i class="asc_selected"></i>
			<?php endif; ?>
		</a>
	<?php endif; ?>
	</span>
		
	<!-- 筛选 -->
	<span><a href="javascript:;"><i class="screening"></i>筛选</a></span>
</div>
<!-- 店铺列表 -->
<div class="main">
	<?php if($total_count == 0): ?>
	<div class="nothing-data" align="center">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>
		<div>没有找到您想要的商品…</div>
	</div>
	<?php else: ?>
	<ul class="shop-list">
		 <?php if(is_array($shop_list) || $shop_list instanceof \think\Collection || $shop_list instanceof \think\Paginator): if( count($shop_list)==0 ) : echo "" ;else: foreach($shop_list as $key=>$vo): ?>
		<li>
			<a href="APP_MAIN/shop/index?shop_id=<?php echo $vo['shop_id']; ?>"  title="<?php echo $vo['shop_name']; ?>">
				
					<div class="store-name">
						<h1><?php echo $vo['shop_name']; ?></h1>
						<?php if($vo['shop_type'] == 1): ?>
						<span class="flag-stores">直营店</span>
						<?php else: ?>
<!-- 						<span class="flag-brand">普通店</span> -->
						<?php endif; ?>
						<span class="flag-security">保</span>
						<img  src="__TEMP__/<?php echo $style; ?>/public/images/right_arrow.png" class="right-arrow" />
					</div>
				<div class="store-item">
					<?php if($vo['shop_logo'] == '' or $vo['shop_logo'] == null): ?>
					<img alt="" src="__TEMP__/<?php echo $style; ?>/public/images/default_shop_logo.png" class="store-logo">
					<?php else: ?>
					<img alt="" src="__UPLOAD__/<?php echo $vo['shop_logo']; ?>"  class="store-logo">
					<?php endif; ?>
					<div class="store-right">
						<div class="store-detail">
							<div class="left">
								<div class="scope-business">经营范围：<strong><?php echo $vo['grou_name']; ?></strong></div>
								<div class="good-rate">好评率：<strong>90%</strong></div>
								<div class="credibility">信誉：
								<?php for($i = 0;$i<5;$i++){
							if( $vo["shop_credit"] <= $i){?>
										<img style="vertical-align: middle;width:15px;" src="__TEMP__/<?php echo $style; ?>/public/images/credibility_starts_none.png" alt='<?php echo $vo["shop_credit"]; ?>' />
								<?php	}else{?>
									<img style="vertical-align: middle;width:15px;" src="__TEMP__/<?php echo $style; ?>/public/images/credibility_starts.png" alt='<?php echo $vo["shop_credit"]; ?>' />
								<?php }
						} ?>
								</div>
							</div>
							<i class="vertical-bar" style="display:none"></i>
							<div class="right" style="margin-top:12px;display:none">
								<address>太原</address>
								<span>成交：<strong>3000</strong></span>
							</div>
						</div>
					</div>
				</div>
			</a>
		</li>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<?php endif; ?>
</div>
<!-- 导航 -->
<!-- 全部分类 -->
<div class="total_content" style="display:none;">
	<div class="total_left">
		<ul>
			<?php if($shop_group_id == ''): ?>
			<li><a target="_self" href="APP_MAIN/index/shopstreet" class="selected"><span>全部</span></a></li>
			<?php else: ?>
			<li><a target="_self" href="APP_MAIN/index/shopstreet" ><span>全部</span></a></li>
			<?php endif; foreach($shop_group_list as $vo): if($vo['shop_group_id'] == $shop_group_id): ?>
				<li>
					<a  class="selected" target="_self" href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $vo['shop_group_id']; ?>" title="<?php echo $vo['group_name']; ?>" class="selected">
						<span><?php echo $vo['group_name']; ?></span>
					</a>
				</li>
				<?php else: ?>
				<li>
					<a target="_self" href="APP_MAIN/index/shopstreet?shop_group_id=<?php echo $vo['shop_group_id']; ?>&shop_group_name=<?php echo $vo['group_name']; ?>" title="<?php echo $vo['group_name']; ?>">
						<span><?php echo $vo['group_name']; ?></span>
					</a>
				</li>
				<?php endif; endforeach; ?>
		</ul>
	</div>
</div>

	
	
		<?php if($custom_template_is_enable == 1): ?>
		
			<div class="js-bottom-blank" style="height:56px;"></div>
			<?php echo hook("customtemplate",['type'=>'wap_common_footer']); else: ?>
		
			<div style="height:58px;"></div>
			<!-- 底部菜单 -->
<div class="fixed bottom">
	<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
	<dl class="sub-nav nav-b5">
		<dd id="buttom_home">
			<a href="<?php echo __URL('APP_MAIN'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/home_check.png"/>
					<span><?php echo lang('home_page'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_cart">
			<a href="<?php echo __URL('APP_MAIN/goods/cart'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
					<span><?php echo lang('goods_cart'); ?></span>
				</div>
			</a>
		</dd>
		<dd id="bottom_member">
			<a href="<?php echo __URL('APP_MAIN/member/index'); ?>">
				<div class="nav-b5-relative">
					<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
					<span><?php echo lang('member_member_center'); ?></span>
				</div>
			</a>
		</dd>
	</dl>
</div>
			
		<?php endif; ?>
		
	
	
	<input type="hidden" value="<?php echo $uid; ?>" id="uid"/>
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script type="text/javascript">
$("#shop_group ").click(function(){
	if($(".total_content").is(":hidden")){
		$(".total_content").show();
	}else{
		$(".total_content").hide();
	}
});
function search(){
	var shop_name_1=$('#shop').val();
	location.href="APP_MAIN/index/shopStreet?shop_name="+shop_name_1;
}

$(function(){
	buttomActive('#buttom_stroe');
});
</script>


</body>
</html>