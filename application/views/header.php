<div id="topbar">
	<div class="wrapper">
		<a href="/" id="logo">LOGO</a>

		<ul class="menu">
			<li><a href="/map">地图</a></li>
			<li><a href="/baby">宝宝</a></li>
			<li><a href="/travel">旅游</a></li>
			<li><a href="/work">工作</a></li>
		</ul>

		<ul class="user">
			<li><a href="/user/<?=$user['id']?>"><?=$user['name']?></a></li>
			<li><a href="/user/setting">设置</a></li>
			<li><a href="/msg" <?if($n_notice):?>class="red"<?endif?>>提醒(<?=$n_notice?>)</a></li>
			<li><a href="/bbs/node/站务">站务区</a></li>
			<li><a href="/logout">退出</a></li>
		</ul>
		<div class="clear"></div>
	</div>
</div>