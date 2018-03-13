<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:37:"template/wap/default//Shop/index.html";i:1519790063;s:39:"template/wap/default/Shop/shopBase.html";i:1519787910;s:31:"template/wap/default/share.html";i:1513303784;s:37:"template/wap/default/Shop/search.html";i:1513303784;s:34:"template/wap/default/urlModel.html";i:1520231681;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $platform_shopname; ?></title>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script type="text/javascript">
	var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
	var APPMAIN='<?php echo __URL('APP_MAIN'); ?>';	
	//页面底部选中
	function buttomActive(event){
		clearButton();
		if(event == "#buttom_home"){
			$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
		}else if(event == "#buttom_classify"){
			$("#buttom_group").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
		}else if(event == "#bottom_cart"){
			$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
		}else if(event == "#bottom_member"){
			$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
		}
	}
	function clearButton(){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
		$("#buttom_group").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
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

	$(function(){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
		showLoadMaskLayer();
	})
	$(document).ready(function(){
		hiddenLoadMaskLayer();
		//编写代码
	})
</script>
<style>
body .sub-nav.nav-b5 dd i {
	margin: 3px auto 5px auto;
}

body .fixed.bottom {
	bottom: 0;
}
.mask-layer-loading{
	position: fixed;
    width: 100%;
    height: 100%;
    /* background: rgba(0,0,0,0.5); */
    z-index: 999999;
    top: 0;
    left: 0;
    text-align: center;
	display: none;
}
.mask-layer-loading i,.mask-layer-loading img{
	text-align: center;
	color:#ffffff;
	font-size:50px;
	position: relative;
	top:50%;
}
.sub-nav.nav-b5 dd{
	width:20%;
}
</style>

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/control_type.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/goods_list.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/shop_index.css">
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/collection_goods_or_shop.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/shop_index.js"></script>

</head>

<body class="body-gray">
	
<?php if($onekey_subscribe['url'] != ''AND $is_subscribe == 0): ?>
<div class="fixed-focus-on">
	<i class="close" onclick="$('.fixed-focus-on').hide();">x</i>
	<div class="foucs-on-block">
	<?php if($shop_info['shop_logo'] !=''): ?>
	<img class="user-bg" src="<?php echo $shop_info['shop_logo']; ?>">
	<?php else: ?>
	<img class="user-bg" src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_avatar.png">
	<?php endif; if($source_user_name !=''): ?>
	<p><?php echo lang('i_am_your_best_friend'); ?><span><?php echo $source_user_name; ?></span>,<?php echo lang('recommended_to_you_business_from_now'); ?></p>
	<button onclick="location.href='<?php echo $onekey_subscribe['url']; ?>'"><?php echo lang('click_on_the_attention'); ?></button>
	<?php else: ?>
	<p><?php echo lang('you_are_not_currently_concerned_about_the_WeChat_public_account'); ?>，<?php echo lang('click_on_the_attention'); ?></p>
	<button onclick="location.href='<?php echo $onekey_subscribe['url']; ?>'"><?php echo lang('click_on_the_attention'); ?></button>
	<?php endif; ?>
	</div>
</div>
<?php endif; ?>
<article class="user-head">


	
	<div class="user-info">
		<?php if($shop_info['shop_logo'] !=''): ?>
		<img class="user-logo" src="<?php echo $shop_info['shop_logo']; ?>">
		<?php else: ?>
		<img class="user-logo" src="__TEMP__/<?php echo $style; ?>/public/images/default/default_shop_logo.png">
		<?php endif; ?>
		<h1><?php echo $shop_info['shop_name']; ?></h1>
	</div>
	
	<div class="user-nav js-user-nav">
		<ul>
			<li><a href="<?php echo __URL('APP_MAIN/shop/goodslist?shop_id='.$shop_id); ?>"><i class="fa fa-align-justify"></i><?php echo lang('all_goods'); ?></a></li>
			<li><a href="<?php echo __URL('APP_MAIN/shop/goodslist?shop_id='.$shop_id); ?>"><i class="fa fa-list-ul"></i><?php echo lang('goods_group'); ?></a></li>
			<li onclick="collectionGoodsOrShop('.js-collection',<?php echo $shop_id; ?>,'shop','')">
				<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="js-collection">
						<?php if($is_member_fav_shop ==0): ?>
						<?php echo lang('mark_shop'); else: ?>
						<?php echo lang('goods_collected'); endif; ?>
					</span>
				</a>
			</li>
			<?php if($is_shop_member == 1): ?>
				<li><a href="<?php echo __URL('APP_MAIN/member/index?shop_id='.$shop_id); ?>" style="color:red;"><i class="fa fa-heart"></i><?php echo lang('member_member_center'); ?></a></li>
			<?php else: ?>
				<li><a href="javascript:;" onclick="userAssociateShop(<?php echo $shop_id; ?>,this)"><i class="fa fa-heart"></i><?php echo lang('membership_form'); ?></a></li>
			<?php endif; ?>
		</ul>
	</div>
</article>

	<div class="motify" style="display: none;"><div class="motify-inner"><?php echo lang('pop_up_prompt'); ?></div></div>
	
<div style="display:none;position: fixed;left: 10px;z-index: 999999;top:25%;border-radius: 100%;height:30px;width:30px;line-height: 30px;text-align: center;">
	<a href="<?php echo __URL('APP_MAIN'); ?>" style="color: #ffffff;">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/shop_goback.png"/>
	</a>
</div>
<input type="hidden" id="shop_id" value="<?php echo $shop_info['shop_id']; ?>">
<script language="javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<input type="hidden" id="appId" value="<?php echo $signPackage['appId']; ?>">
<input type="hidden" id="jsTimesTamp" value="<?php echo $signPackage['jsTimesTamp']; ?>">
<input type="hidden" id="jsNonceStr"  value="<?php echo $signPackage['jsNonceStr']; ?>">
<input type="hidden" id="jsSignature" value="<?php echo $signPackage['jsSignature']; ?>">
<script>
$(function(){
$.ajax({
	type:"post",
	url : "<?php echo __URL('APP_MAIN/shop/getsharecontents'); ?>",
	data : {
		'shop_id':$("#shop_id").val()
	},
	success : function(data){
		//alert(JSON.stringify(data));
			/* $("#share_title").val(data['share_title']);
			$("#share_desc").val(data['share_contents']);
			$("#share_url").val(data['share_url']);
			$("#share_img_url").val(data['share_img']);\ */
			wx.config({
			    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
			    appId: $("#appId").val(), // 必填，公众号的唯一标识
			    timestamp: $("#jsTimesTamp").val(), // 必填，生成签名的时间戳
			    nonceStr:  $("#jsNonceStr").val(), // 必填，生成签名的随机串
			    signature: $("#jsSignature").val(),// 必填，签名，见附录1
			    jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
			});
			wx.ready(function () {
			    var title = data['share_title'];
			    var share_contents = data['share_contents']+'\r\n';
			    var share_nick_name = data['share_nick_name']+'\r\n';
			    var desc2 = share_contents+ share_nick_name + "<?php echo lang('heat_collection'); ?>：★★★★★";
			    var url = data['share_url'];
			    var img_url = data['share_img'];
			        wx.onMenuShareAppMessage({
			            title: title,
			            desc: desc2,
			            link: url,
			            imgUrl: img_url,
			            trigger: function (res) {
//			                alert('用户点击发送给朋友');
			            },
			            success: function (res) {
//			                alert('已分享');
			           
			            },
			            cancel: function (res) {
			                //alert('已取消');
			            },
			            fail: function (res) {
			                //alert(JSON.stringify(res));
			            }
			        });

			    // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
			        wx.onMenuShareTimeline({
			            title: title,
			            link: url,
			            imgUrl: img_url,
			            trigger: function (res) {
			              // alert('用户点击分享到朋友圈');
			            },
			            success: function (res) {
			                //alert('已分享');
			            
			            },
			            cancel: function (res) {
			                //alert('已取消');
			            },
			            fail: function (res) {
			           //     alert(JSON.stringify(res));
			            }
			        });

			    // 2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口
			        wx.onMenuShareQQ({
			            title: title,
			            desc: desc2,
			            link: url,
			            imgUrl: img_url,
			            trigger: function (res) {
			                //alert('用户点击分享到QQ');
			            },
			            complete: function (res) {
			                //alert(JSON.stringify(res));
			            },
			            success: function (res) {
			                //alert('已分享');
			            	
			            },
			            cancel: function (res) {
			                //alert('已取消');
			            },
			            fail: function (res) {
			                //alert(JSON.stringify(res));
			            }
			        });

			    // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
			        wx.onMenuShareWeibo({
			            title: title,
			            desc: desc2,
			            link: url,
			            imgUrl: img_url,
			            trigger: function (res) {
			                //alert('用户点击分享到微博');
			            },
			            complete: function (res) {
			                //alert(JSON.stringify(res));
			            },
			            success: function (res) {
			                //alert('已分享');
			            
			            },
			            cancel: function (res) {
			                //alert('已取消');
			            },
			            fail: function (res) {
			                //alert(JSON.stringify(res));
			            }
			        });


			})
	
			}
		})
		
	$(".user-logo").next().css("padding-left",(parseInt($(".user-logo").width())+10)+"px");
})
</script>


<script>var is_member_fav_shop = "<?php echo $is_member_fav_shop; ?>";</script>
<div class="com-content">

<!-- {1include file='wap/default/Shop/navi'/} -->
<style type="text/css">.custom-search-button{top: 1px!important;}</style>
<div style="width: 100%;background-color: #fff;padding: 10px 0px;">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<div class="editing"><div class="control-group">
    <div class="custom-search" >
        <form action="" method="GET">
            <input type="text" class="custom-search-input" placeholder="<?php echo lang('search_goods'); ?>" value='' >
            <button type="button" class="custom-search-button"><?php echo lang('search'); ?></button>
        </form>
    </div>
    <div class="component-border"></div>
</div>
<div class="sort">
    <i class="sort-handler"></i>
</div>
</div>
</div>


	<?php if(is_array($goods_list['nav']) || $goods_list['nav'] instanceof \think\Collection || $goods_list['nav'] instanceof \think\Paginator): if( count($goods_list['nav'])==0 ) : echo "" ;else: foreach($goods_list['nav'] as $k=>$nav): if($nav['count']>0): ?>
	<div class="control">
		<div class="control_l">
			<!-- <span class="control_l_img"><img src="__TEMP__/<?php echo $style; ?>[images]" alt="" /></span> -->
			<h1><i></i><?php echo $nav['title']; ?><i></i></h1>
		</div>
	</div>
	<section class="members_goodspic">
		<ul>
			<?php if(is_array($goods_list['list'][$k]) || $goods_list['list'][$k] instanceof \think\Collection || $goods_list['list'][$k] instanceof \think\Paginator): if( count($goods_list['list'][$k])==0 ) : echo "" ;else: foreach($goods_list['list'][$k] as $key=>$goods): ?>
			<li class="gooditem">
				<div class="img">
					<a href="<?php echo __URL('APP_MAIN/Goods/goodsDetail?id='.$goods['goods_id'].'&shop_id='.$goods['shop_id']); ?>"><img class="lazy" src="<?php echo __IMG($goods['pic_cover_micro']); ?>"></a>
				</div>
				<div class="info">
					<p class="goods-title"><a href="<?php echo __URL('APP_MAIN/Goods/goodsDetail?id='.$goods['goods_id'].'&shop_id='.$goods['shop_id']); ?>"><?php echo $goods['goods_name']; ?></a></p>
					<p class="goods-price"><em>￥<?php echo $goods['promotion_price']; ?></em></p>
					<a href="javascript:CartGoodsInfo(<?php echo $goods['goods_id']; ?>,<?php echo $goods['state']; ?>)"><div class="goods-buy"></div></a>
				</div>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</section>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	<div class="h60"></div>
</div>

	
	<div class="fixed bottom">
		<div class="distribution-tip" id="distribution-tip" style="display: none;"></div>
		<dl class="sub-nav nav-b5">
			<dd id="buttom_home">
				<a href="<?php echo __URL('APP_MAIN/shop/index?shop_id='.$shop_id); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png"/>
						<span><?php echo lang('home_page'); ?></span>
						<!--<i class="fa fa-home fa-2x"></i> -->
					</div>
				</a>
			</dd>
			<dd id="buttom_group">
				<a href="<?php echo __URL('APP_MAIN/goods/goodsgrouplist?shop_id='.$shop_id); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png"/>
						<span><?php echo lang('goods_group'); ?></span>
					</div>
				</a>
			</dd>
			<dd id="buttom_store" >
				<a href="<?php echo __URL('APP_MAIN/index/shopstreet'); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png"/>
						<span>店铺</span>
					</div>
				</a>
			</dd>
			<dd id="bottom_cart" >
				<a href="<?php echo __URL('APP_MAIN/goods/cart?shop_id='.$shop_id); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png"/>
						<span><?php echo lang('goods_cart'); ?></span>
					</div>
				</a>
			</dd>
			<dd id="bottom_member" >
				<a href="<?php echo __URL('APP_MAIN/member/index?shop_id='.$shop_id); ?>">
					<div class="nav-b5-relative">
						<img src="__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png"/>
						<span><?php echo lang('member_member_center'); ?></span>
					</div>
				</a>
			</dd>
		</dl>
	</div>
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
		<!-- <i class="fa fa-spinner fa-pulse"></i> -->
	</div>
	
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
</body>
</html>