<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="keywords" content="云日记,日记本,记事本,写日记,E8工作室">
       <meta name="description" content="我们坚信每个人的生活都有一些小时光值得被记录，希望通过云日记网站能唤起人们用文字记录生活的这种被遗忘很久的习惯。">

        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="/notebook_php/Public/home/bootstrap/css/bootstrap.min.css">
        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="/notebook_php/Public/home/bootstrap/css/bootstrap-theme.min.css">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="/notebook_php/Public/home/bootstrap/js/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="/notebook_php/Public/home/bootstrap/js/bootstrap.min.js"></script>
        
        
        <link rel="stylesheet" type="text/css" href="/notebook_php/Public/home/css/login.css"/>
        <link rel="stylesheet" type="text/css" href="/notebook_php/Public/home/css/comm.css"/>
		<script src="/notebook_php/Public/home/js/loginCheck.js" language="javascript"></script>
        <title>云日记</title>
    </head>
    <body>
        <div class="bg">
            <p align="center"><img src="/notebook_php/Public/home/img/yun_2.jpg"></p>
            <form action="<?php echo U('Login/doLogin',null,false);?>" method="POST">
                <div class="form">
                     <p>账号</p>
                    <input type="text" name="username" placeholder="请输入账号喔"/>
                     <p>密码</p>
                    <input type="password" name="password"  placeholder="输入密码开启你的日记之旅吧"/>
                </div>
                <div class="zh">
                    <a href="http://wpa.qq.com/msgrd?v=3&uin=291000327&site=%BA%EF%B5%BA%C2%DB%CC%B3&menu=yes"  style="margin-left:30px;">联系我们</a>
                       <a href="<?php echo U('Register/index');?>" style=" float:right;margin-right:35px;">点击注册</a>
                   </div>
                <div class="dl">
                    <input type="submit" onclick="return check();" value="登录"/>
                </div>
            </form>
        </div>
    </body>
</html>