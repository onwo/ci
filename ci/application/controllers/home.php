<?php
// .-----------------------------------------------------------------------------------
// |  Software: [ZAN framework]
// |   Version: 2014.1
// |      Site: http://www.zancms.com
// |-----------------------------------------------------------------------------------
// |    Author: 赞生 <onmichina@gmail.com>
// | Copyright (c) 2012-2014, http://www.zan3.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------
/**
 * web is very nice
 * site www.zan3.com
 * 赞CMS，一个简单的cms
 * @package zan3
 * @author zansheng <onmichina@gmail.com>
 * @time 2014年5月3日20:20:49
 * |-----------------------------------------------------------------------------------
/*
 *这是一个由ci框架底层开发的系统
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //安全机制

class Home extends CI_Controller{
	/**
	 * 前台默认方法
	 * @return [type] [description]
	 */
	public function index(){

		$data['title']= '为是标题';
		$data['name']= array(
				'王五',
				'李斯',
				'马六',
				'丙烯'
			);
		p($data);
		// $this->load->helper('url');
		// redirect('home/zancms'); //必须载入辅助函数url ->跳转
		// echo site_url();
		echo base_url();
		$this->load->view('index/home.php',$data);
		// 分配数据和试图
		// 默认是.php
		// $this->load->vied('home.html');
	}
	public function zancms(){
		echo "zancms";
	}
}
?>