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
 * @time 2014年5月3日22:33:09
 * |-----------------------------------------------------------------------------------
/*
 *这是一个由ci框架底层开发的系统
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //安全机制
class Admin extends CI_Controller{
	/**
	 * 后台登陆显示首页
	 * @return [type] [description]
	 */
	public function index(){
		$this->load->view('admin/main.html');
	}
	/**
	 * 顶部导航
	 * @return [type] [description]
	 */
	public function iframetop(){
		$this->load->view('admin/top.html');
	}
	/**
	 * 左侧列表
	 * @return [type] [description]
	 */
	public function iframeleft(){
		$this->load->view('admin/left.html');
	}
	/**
	 * 首页欢迎
	 * @return [type] [description]
	 */
	public function iframeindex(){
		$this->load->view('admin/index.html');
	}
	/**
	 * 默认工作台
	 * @return [type] [description]
	 */
	public function iframedefault(){
		$this->load->view('admin/default.html');
	}
	/**
	 * 模型管理
	 * @return [type] [description]
	 */
	public function imgtable(){
		$this->load->view('admin/imgtable.html');
	}
	/**
	 * 模块设计
	 * @return [type] [description]
	 */
	public function imglist(){
		$this->load->view('admin/imglist.html');
	}
	/**
	 * 常用工具
	 * @return [type] [description]
	 */
	public function tools(){
		$this->load->view('admin/tools.html');
	}
	/**
	 * 文件管理
	 * @return [type] [description]
	 */
	public function computer(){
		$this->load->view('admin/computer.html');
	}
	/**
	 * 系统设置
	 * @return [type] [description]
	 */
	public function tab(){
		$this->load->view('admin/tab.html');
	}
}
?>