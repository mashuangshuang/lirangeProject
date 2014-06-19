<?php require("./view/common/headerjs-view.php");?>
<!--引入头部文件-->

<!--申明index-view-->
<div class="view index_view">
<!--每个page可以使用相同的view类,同时添加标示不同page的class-->
	
	<!--手机端可以完全使用html5新元素-->
	<header id="header"></header>
	<article class="container">
		具体的内容
	</article>
	<footer id="footer"></footer>

	<!--如果是兼容所有的终端,浏览器-->	
	<div id="header"></div>
	<div id="container">
		具体的内容
	</div>
	<footer id="footer"></footer>
</div>
<!--view end-->

<?php require("./view/common/footer-view.php");?>
<!--引入尾部文件-->
