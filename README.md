lirangeProject
==============

本项目模板只使用于微信应用,以及web app等轻应用的开发,在实际开发中根据项目的实际情况进行修改

##项目整体目录结构:##
	lirageProject :
		|-assets :  存放静态文件
			|-js :
				jquery-1.10.2.min.js jquery库
			|-css :
				lirange_pc_reset.css pc端重置样式
				lirange_mobile_reset.css  mobile端重置样式
			|-image :
		|-static :  线下测试环境(grunt工具)
			|-js    :
			|-minjs : 压缩后的js文件
			|-sass	: css预编译scc文件
			|-css   : 编译后的css文件
			|-image :
			|-sprite: 合并后的image
		|-view :
			|-common
				headerjs-view.php 头部模块
				footer-view.php   尾部模块
				float-view.php    浮动模块
				share-view.php    分享模块
				table-view.php    表单模块
			index-view.php
		|-controller
		   index.php


##目录说明:##
1. js,css,image等各个目录下,根据项目的实际情况,可再详细划分目录;
2. view->common下的模块,是把整个网站中具有相同的部分(html+css),该模块可以根究项目实际情况进行增加;
3. controller

##具体的开发##
1. view	       文件的书写:

2. css         文件的书写:

3. js          文件的书写:

4. image       文件的书写:

5. model       文件的书写:

6. controller  文件的书写:

##需要注意的问题##
1. 不管是数据库开发,后端语言的开发,以及前端页面的开发,都需要理清,想清楚整个流程,总之就是思考到实践;
2. 页面的开发跟项目的逻辑结构的梳理是一样的,要从网站的整体开发到每个具体的页面开发都需要从整体入手,总之就是整体到局部;
4. ps切图,先考虑用代码实现,再考虑图片代替,网页中图片的应用无非不是不是背景,就是img,一般的背景图片保存成jpg格式,除特殊情况,
   需要透明的图片保存成bng格式;
3. 具体的代码开发;
4. 项目开发完成后,要进行对项目流程,数据的准确性各种可能就行测试,还有各种设备网页兼容性的测试;
5. 项目上线后,要对数据的正确性进行追踪,时刻跟客户沟通,及时响应bug;

##后期不断的补充##
1. grunt前端结构化工具
2. css预编译语言sass
3. node.js javascript前端服务器语言

具体的可以参考
1. [web开发流程][1]
2. [web开发规范][2]

[1]: http://xmiaomiao.sinaapp.com/build/index.php/archives/156/
[2]: http://xmiaomiao.sinaapp.com/build/index.php/archives/123/




