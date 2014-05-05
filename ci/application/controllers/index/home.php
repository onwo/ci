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
 * @time 2014年5月3日21:41:49
 * |-----------------------------------------------------------------------------------
/*
 *
 *这是一个由ci框架底层开发的系统
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //安全机制
class Home extends CI_Controller{
	/**
	 * 首页前台显示方法
	 * @return [type] [description]
	 */
	public function index(){
		// echo base_url().'style/index/';
		// echo site_url() .'/index/blog'
		$this->load->view('index/home.html');
	}
	/**
	 * 文章列表显示
	 * @return [type] [description]
	 */
	public function blog(){
		$this->load->view('index/blog.html');
	}
	/**
	 * 文章内容显示页面
	 * @return [type] [description]
	 */
	public function blog_item(){
		$this->load->view('index/blog_item.html');
	}
}
?>