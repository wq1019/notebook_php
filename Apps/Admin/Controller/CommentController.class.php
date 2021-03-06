<?php

namespace Admin\Controller;
use Think\Controller;
use Think\Model;

class CommentController extends BaseController {
	//权限验证
    public function __construct() {
        parent::__construct ();
        $this->checkPerm();
    }
    /**
	*显示留言
	**/
	public function index(){
		$Comment = D('Comment');
		$where = "";//默认为空
		//分页
		$count = $Comment->count();
		$Page = new \Think\Page($count , 5);
		$show = $Page->show();

		$commentList = $Comment->limit ( $Page ->firstRow . ',' . $Page ->listRows )->order('stutime desc')->select();
	    //p($commentList);die();
		$this->assign("commentList",$commentList);
		$this->assign("page",$show);
		$this->display();

	}

	/**
	**删除留言
	**/
     public function del(){
		$Comment = M('Comment');

		//$id = isset($_GET['id'])?$_GET['id']:null;
       
		$id = I ('get.id',null);

		if (!empty($id)) {

			$Comment->where ("id = $id AND statu = 0")->delete();
			if (!empty($Comment)){
				//写入日志
				$Operationlog = D ('Operationlog');
				$info = "提示语：删除留言成功! <br />模块：".MODULE_NAME.",控制器：".CONTROLLER_NAME.",方法：".ACTION_NAME." <br />请求方式：GET";
				$get = __SELF__;
				$Operationlog->write($this->user['id'],1,$info,$get,$this->user['last_login_ip']);
				
				$this->success("删除留言成功！");
			}else{
				$this->error ( '删除留言失败!');
			}
		} else {
			$this->error('非法操作!');
		}
	
	}


	/**
	**回复留言
	**/
	public function reply(){
		$Comment = D ('Comment','Model');
		//分页
	    $count=$Comment->count();
	    $Page= new \Think\Page($count , 5);
	    $show = $Page ->show();

		if(IS_POST) {
			if (!$Comment->validate ( $Comment->MemberValidate )->create ()) {
					$this->error ( $Comment->getError () );
				} else {

				$Comment = D("Comment");
				//写入数据库
				$data['teadata'] = $_POST ['teadata'];
				$rid = $_POST['rid'];
                $data['teatime'] = time();
				if ($Comment->where(" id = $rid ")->save ($data) !== false) {		
					//p($Comment->getlastsql());
			
					// 写入日志
					//$Operationlog = D ( 'Operationlog' );
					$info = "提示语：回复成功! <br />模块：" . MODULE_NAME . ",控制器：" . CONTROLLER_NAME . ",方法：" . ACTION_NAME . " <br />请求方式：POST";
					$get = __SELF__;
					//$Operationlog->write ( $this->user ['id'], 1, $info, $get, $this->user ['last_login_ip'] );

					$this->success ( '回复成功!', __APP__ . '/Comment/index' );
				} else {
					$this->error ( '回复失败!');
				}
			}
 		}else{

 			$id = $_GET['id'];
			$commentList = $Comment->where("id = $id")->select();	
			// $this->assign ('departmentList',$departmentList);
			$this->assign("page",$show);
			$this->assign ("id",$id);
			$this->assign ("commentList",$commentList);
			$this->display();
		}
	}

}
