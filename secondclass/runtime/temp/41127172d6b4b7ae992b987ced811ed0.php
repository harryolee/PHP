<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"/var/www/www.gxfwz36524.com/secondclass/public/../application/index/view/index/news.html";i:1553000168;s:81:"/var/www/www.gxfwz36524.com/secondclass/application/index/view/common/common.html";i:1548075575;s:82:"/var/www/www.gxfwz36524.com/secondclass/application/index/view/common/include.html";i:1552805207;s:85:"/var/www/www.gxfwz36524.com/secondclass/application/index/view/common/nav-header.html";i:1552878225;s:81:"/var/www/www.gxfwz36524.com/secondclass/application/index/view/common/footer.html";i:1548075576;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo $settinginfo['content']; ?>">
  <meta name="keywords" content="<?php echo $settinginfo['content']; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title><?php echo $settinginfo['title']; ?></title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/secondclass/public/static/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="/secondclass/public/static/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/secondclass/public/static/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/secondclass/public/static/assets/css/app.css">
	<!--[if (gte IE 9)|!(IE)]><!-->
	<script src="/secondclass/public/static/assets/js/jquery.min.js"></script>
	<!--<![endif]-->
	<!--[if lte IE 8 ]>
	<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
	<script src="/secondclass/public/static/assets/js/amazeui.ie8polyfill.min.js"></script>
	<![endif]-->
	<script src="/secondclass/public/static/assets/js/amazeui.min.js"></script>
	<!-- <script src="/secondclass/public/static/assets/js/app.js"></script> -->
  <script src="/secondclass/public/static/assets/js/amazeui.datetimepicker.min.js"></script>
  <script src="/secondclass/public/static/assets/js/amazeui.datetimepicker.zh-CN.js" charset="UTF-8"></script>
  <link rel="stylesheet" href="/secondclass/public/static/assets/css/amazeui.datetimepicker.css"/>
  <link rel="shortcut icon" href="/secondclass/public/static/assets/fonts/favicon.ico">
  <script src="/secondclass/public/static/assets/js/wangEditor.min.js"></script>
</head>
<body id="blog">
<header class="am-g am-g-fixed blog-fixed blog-text-center blog-header">
    <div class="am-u-md-4 am-u-sm-12">
        <img width="100%" src="/secondclass/public/static/images/logoa.png"/>
    </div>
</header>
<hr>

<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li ><a href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/index">首页</a></li>
  <li ><a href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/newslist">活动列表</a></li>
    <li><a href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/apply">学分申请</a></li>
        <li><a href="http://222.30.226.10">汇华首页</a></li>
    </ul>
    <form class="am-topbar-form am-topbar-right am-form-inline" role="search">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
      </div>
    </form>
  </div>
</nav>
<hr>

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">


	<div class="am-u-md-12 am-u-sm-12">
	<ol class="am-breadcrumb">
		  <li><a href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/index" class="am-icon-home">首页</a></li>
		  <li><a href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/newslist">活动列表</a></li>
		  <li class="am-active">活动详情</li>
	</ol>
	</div>
	<div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img  am-hide-sm-only">
				<?php if(empty($actinfo['image']) || (($actinfo['image'] instanceof \think\Collection || $actinfo['image'] instanceof \think\Paginator ) && $actinfo['image']->isEmpty())): ?>
				<img src="/secondclass/public/static/images/defult.png" alt="" class="am-u-sm-12">
				<?php else: ?>
				<img src="https://www.gxfwz36524.com/secondclass/public<?php echo $actinfo['image']; ?>" alt="" class="am-u-sm-12">
				<?php endif; ?>
                
    </div>
     <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                
                <h1><?php echo $actinfo['title']; ?></h1>
		 <span><i class="am-icon-cc-discover am-icon-home am-icon-fw"></i>  <?php echo $actinfo['leader']; ?></span><br><br>
				<span><i class="am-icon-clock-o am-icon-sm am-icon-fw"></i>  <?php echo $actinfo['time']; ?></span><br><br>
				<span><i class="am-icon-map-marker am-icon-sm am-icon-fw"></i>  <?php echo $actinfo['place']; ?></span><br><br>
				<span><i class="am-icon-user am-icon-sm am-icon-fw"></i>  <?php echo $actinfo['total']; ?>人</span><br><br>
				<span><i class="am-icon-line-chart am-icon-home am-icon-fw"></i>  <?php echo $actinfo['value']; ?>分</span><br><br>
				<button class="am-btn am-btn-success am-round am-lg" onclick="join(this)" name="<?php echo $actinfo['id']; ?>" value="<?php echo \think\Session::get('userinfo.schoolnum'); ?>" id="b">我要报名</button>
				
                
    </div>
<script>
	var schoonum=$("#b").val()
	var id=$("#b").attr("name")

    $.ajax(
        {
            url:"https://www.gxfwz36524.com/secondclass/public/index.php/index/index/isjoin",
            data:{
                "schoolnum":schoonum,
                "id":id
            },
            type:'post',
            dataType:'json',

            success:function (data) {
                console.log(data);
                console.log(data=='"fail"')
                if(data=='"fail"')
                    $("#b").attr("disabled", true);

            },
            complete:function (res) {
				console.log(res)
            }

        }
    )









    function join(btn) {
        console.log("dddd")
        console.log(btn.value)
		console.log(btn.name)
        if(btn.value.length!=10)
		{

		    alert("请先登录");
		    window.location.href="https://www.gxfwz36524.com/secondclass/public/index.php/index/index/index"
		}
		else {

            $.ajax(
				{
					url:"https://www.gxfwz36524.com/secondclass/public/index.php/index/index/join",
					data:{
					    "schoolnum":btn.value,
						"id":btn.name
					},
					type:'post',
                    dataType:'json',

					success:function (data) {
                        console.log(data);
                        console.log(typeof(data))
					     console.log(data==="success");
						if(data=='"success"')
						{
						  alert("报名成功");
						$("#b").attr("disabled", true);
						}
                    }

                }
			)
		}
    }
</script>
    <div class="am-u-md-12 am-u-sm-12">
		<div class="am-article-bd">          
        <h2>活动简介：</h2>
		<p><?php echo $actinfo['content']; ?></p>	
        <hr>
    </div>

    </div>



</div>
<!-- content end -->
<footer class="blog-footer">  
    <div class="blog-text-center"><?php echo $settinginfo['copyright']; ?></div>    
</footer>
</body>
</html>