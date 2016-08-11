<?php
/**
 * 助学众筹模块微站定义
 *测试模块
 * @author BoomNice
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class Boomnice_zhongchouModuleSite extends WeModuleSite {

	public function doMobileFengmian() {
		//这个操作被定义用来呈现 功能封面
	}
	public function doWebLiebiao() {
		//这个操作被定义用来呈现 规则列表
	}
	public function doWebGuanli() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobileIndex1() {
		//这个操作被定义用来呈现 微站首页导航图标
	}
	public function doMobileCenter1() {
		//这个操作被定义用来呈现 微站个人中心导航
	}
	public function doMobileKuaijie() {
		//这个操作被定义用来呈现 微站快捷功能导航
	}

}