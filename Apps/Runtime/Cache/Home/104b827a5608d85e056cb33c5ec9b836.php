<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($classnameList["classname"]); ?> -- <?php echo ($webInfo["sitename"]); ?></title>
<link href="/jsjkxyjs/Public/e8home/default/style/css.css" rel="stylesheet" type="text/css" />
<link href="/jsjkxyjs/Public/e8home/default/style/style.css" rel="stylesheet" type="text/css" />
<script src="/jsjkxyjs/Public/e8home/default/js/jquery-1.4a2.min.js" type="text/javascript"></script>

<script src="/jsjkxyjs/Public/e8home/default/js/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/jsjkxyjs/Public/e8home/default/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function (){
    $(".nav ul li").on("mouseover",function(){
        $(".subnav").hide();
        $(this).children("div").show();
    });
    $(".nav ul li").on("mouseout",function(){
        $(".subnav").hide();
    });
    
});
</script>

</head>

<body>
<!--页面开始 -->
<div id="content">
<!--Header开始-->

  
<div class="header">
    <embed src="/jsjkxyjs/Public/e8home/default/flash/header.swf" width="998" height="241"></embed>
  </div>
  <!--Hader结束--> 
 
  <!--导航开始-->
  <div class="nav_Left left"></div>
  <div class="nav left">
    <ul>
      <li><a style="background:none;" href="/jsjkxyjs/index.php/Index/index">首页</a></li>
      <?php if(is_array($navList)): foreach($navList as $key=>$nav): ?><li><a href="<?php echo ($nav["url"]); ?>"><?php echo ($nav["nav_name"]); ?></a>
        <div class="subnav">

          <?php if(is_array($nav['sub_nav'])): foreach($nav['sub_nav'] as $key=>$sub): ?><!--二级子栏目 sub_nav是三维数组的底层-->
          <p><a href="<?php echo ($sub["url"]); ?>"><?php echo ($sub["nav_name"]); ?></a></p><?php endforeach; endif; ?>
        
        </div>
      </li><?php endforeach; endif; ?>
      <!--
      <li><a href="article_pic_list.html">人才培养</a>
        <div class="subnav">
          <p><a href="list.html">培养目标</a></p>
          <p><a href="page.html">培养方案</a></p>
          <p><a href="list.html">培养论证</a></p>
          <p><a href="list.html">培养体系</a></p>
        </div>
      </li>
      <li><a href="article_pic_list.html">教学条件</a>
        <div class="subnav">
          <p><a href="">经费投入</a></p>
          <p><a href="">精品课程</a></p>
          <p><a href="">教改课题</a></p>
          <p><a href="">教材建设</a></p>
          <p><a href="">教学建设</a></p>
          <p><a href="">实习基地</a></p>
        </div>
      </li>
      <li><a href="picture_list.html">校企合作</a></li>
      <li><a href="article_content.html">学生风采</a>
        <div class="subnav">
          <p><a href="page.html">获奖荣誉</a></p>
          <p><a href="activity.html">课外项目</a></p>
          <p><a href="page.html">学术作品</a></p>
        </div>
      </li>
      <li><a href="article_content.html">课程建设</a></li>
      -->
    </ul>
  </div>
  <div class="nav_Right right"></div> 

  <!--导航结束--> 

<!--picture_index开始-->
<div id="list_index">
    <div class="con_content">
        <div class="left Con_right">
      <p class="tszy_title"><?php echo ($classnameList["classname"]); ?></p>
      <ul>
        <?php if(is_array($childList)): foreach($childList as $key=>$child): ?><li><a href="/jsjkxyjs/index.php/List/article/class/<?php echo ($child["id"]); ?>"><?php echo ($child["classname"]); ?></a></li><?php endforeach; endif; ?>
      </ul>
    </div>
        <div class="left con_list">
            <div class="title">当前位置：<a href="/jsjkxyjs/index.php/Index/index">首页</a>&gt;&gt;<a href="/jsjkxyjs/index.php/List/article/class/<?php echo ($childList["id"]); ?>"><?php echo ($classnameList["classname"]); ?></div>
            <div class="picture_list">
                <ul>
                  <?php if(is_array($teacherList)): foreach($teacherList as $key=>$teacher): ?><li>
                    <a href="/jsjkxyjs/index.php/List/teacher/class/<?php echo ($teacher["id"]); ?>"><img src="/jsjkxyjs/Public/e8admin/upload/<?php echo ($teacher["photo"]); ?>" /></a>
                    <span><?php echo ($teacher["name"]); ?></span>
                    </li><?php endforeach; endif; ?>
                </ul>

               <!-- <ul>
                  <?php if(is_array($teacherList)): foreach($teacherList as $key=>$teacher): ?><li>
                    <a href="/jsjkxyjs/index.php/List/content/class/<?php echo ($teacher["id"]); ?>"><img src="/jsjkxyjs/Public/e8admin/upload/<?php echo ($teacher["photo"]); ?>" /></a>
                    <span><?php echo ($teacher["name"]); ?></span>
                    </li><?php endforeach; endif; ?>
                </ul>-->
                <p class="pager"><?php echo ($page); ?></p>
            </div>
        </div>
        
    </div>
</div>
<!--picture_index结束-->
        
<!--footer结束-->
<div class="address"> <a href="http://211.70.176.141/jxx/">主办：淮南师范学院计算机学院</a><br />
    <a href="http://www.e8net.cn">技术支持：淮南师范学院E8网络工作室</a><br />
    <a href="">地址:淮南师范学院计算机学院大学生创业孵化基地</a> </div>
</div>

</div>
<!--页面结束 -->



</body>
</html>