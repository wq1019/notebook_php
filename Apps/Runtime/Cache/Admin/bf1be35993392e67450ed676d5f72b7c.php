<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
  	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>e8通用后台</title>
    
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.css">
    
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/lib/zTree/css/zTreeStyle.css">

    <!-- e8 style -->
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/jsjkxyjs/Public/e8admin/default/css/main.css">
    
  </head>
  
  <body>
  
  	<div class="topbar">
    	
        <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/jsjkxyjs/admin.php/Center/index">
			<i class="fa fa-home fa-lg"></i>
			控制中心
			</a>
		</li>
	</ul> 
</div><!-- /.mbx -->

        <div class="topbar-search">
        	<form class="form-inline" role="form">
            	<div class="form-group">
            		<label class="sr-only" for="exampleInputEmail2"></label>
            		<input type="email" class="form-control input-sm" id="exampleInputEmail2">
                    
                    <i class="fa fa-search color-gray"></i>
          		</div>
            </form>
        </div>
    </div><!-- /.topbar -->
    
    <div class="page-content">
    
        <div class="page-header col-sm-12">
        	<h1>常用操作</h1>
        </div>
        
        <div class="col-sm-12">
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li class="active">
						<a  href="#">常用操作</a>
					</li>
				</ul>
				
				<div class="tab-content">
                    <div class="tab-pane in active">
                        <p class="title background-blue">添加常用操作</p>

                        <div class="">
                            <ul id="treeDemo" class="ztree"></ul>
                        </div>
                    		
                        <div style="width:100%;height:60px;"></div>
                        <div class="admin-add">
                            <button class="btn btn-primary btn-sm" type="button" id="submit">添加</button>
                            <span class="e8-danger msg" id="danger-msg"></span>
                            <span class="e8-prompt msg" id="prompt-msg"></span>
                        </div>
                    </div>

				</div> <!-- /.tab-content -->
			</div>
		</div><!-- /.col-sm-12 -->
        
    </div><!-- /.page-content -->
    
  
    <!-- jQuery文件 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="/jsjkxyjs/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/jsjkxyjs/Public/e8admin/default/lib/jquery-confirm/jquery.confirm.js"></script>
    <!-- 树形列表支持库文件 -->
    <script type="text/javascript" src="/jsjkxyjs/Public/e8admin/default/lib/zTree/js/jquery.ztree.core-3.5.js"></script>
    <script type="text/javascript" src="/jsjkxyjs/Public/e8admin/default/lib/zTree/js/jquery.ztree.excheck-3.5.js"></script>
    <!--  -->
    <script src="/jsjkxyjs/Public/e8admin/default/js/e8.js"></script>

    <script>
        <!--
        var APP = "/jsjkxyjs/admin.php";
        var setting = {
            check: {
                enable: true
            },
            data: {
                simpleData: {
                    enable: true
                }
            }
        };
        var zNodes = <?php echo ($menuJson); ?>;
        
        $(document).ready(function(){
            var zTree = $.fn.zTree.init($("#treeDemo"), setting, zNodes);

            $("#submit").click(function(){
                checkCount = zTree.getCheckedNodes(true);
                var arr = new Array();
                for (var i=0; i<checkCount.length;i++){
                    arr.push(checkCount[i].id);
                }
                $.ajax({
                    type: 'get',
                    url: APP + "/Usually/add/data/" + arr,
                    dataType: "json",
                    success: function(data){
                        $(".msg").html("");
                        if (data.status == 1) {
                            $("#prompt-msg").html(data.msg);
                            setTimeout(function () { 
                                location.href = APP + "/Usually/index";
                            }, 1500);
                        } else {
                            $("#danger-msg").html(data.msg);
                        }
                    },
                    error: function(request){
                        alert("提交请求失败,请联系维护人员!");
                    }

                });
            })
        });


    </script>
    
  </body>
</html>