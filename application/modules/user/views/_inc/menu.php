<?php include('menu_css.php'); ?>

<?php
	##############################################################################################################	
	## 상단 바
	##############################################################################################################	
?>
<nav class="container-fluid">
	<div class="nav_left">
		<a href="<?=base_url();?>boss/main">
			업템포 관리자
		</a>
	</div>
	<div class="nav_right">
		정보 | 정보 | 로그아웃
	</div>
	<div class="clearfix"></div>
</nav>

<?php
	##############################################################################################################	
	## 왼쪽
	##############################################################################################################	
?>
<aside class="left_aside">
	<div class="main_menu" style="padding: 0;">
		<ul class="nav navbar-nav" id="sidenav">

			<li class="nav_menu_li">
				<a href="<?=base_url();?>boss/main">
					대쉬보드
				</a>
			</li>

			<li class="nav_menu_li">
				<a href="#" data-toggle="collapse" data-target="#favlink">
					↘ 바로가기
				</a>
				<div class="collapse" id="favlink">
					<ul class="nav nav-list">
						<li class="nav_menu_li li_sub">
							<a href="#">
								홈페이지
							</a>
						</li>
						<li class="nav_menu_li li_sub">
							<a href="#">
								-- 수정
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav_menu_li">
				<a href="#" data-toggle="collapse" data-target="#admin">
					↘ 관리자 관리
				</a>
				<div class="collapse" id="admin">
					<ul class="nav nav-list">
						<li class="nav_menu_li li_sub">
							<a href=<?=base_url();?>boss/admin>
								관리자 리스트
							</a>
						</li>
						<li class="nav_menu_li li_sub">
							<a href="#">
								작업 내역
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav_menu_li">
				<a href="#" data-toggle="collapse" data-target="#coin">
					↘ 코인 관리
				</a>
				<div class="collapse" id="coin">
					<ul class="nav nav-list">
						<li class="nav_menu_li li_sub">
							<a href="#">
								코인 리스트
							</a>
						</li>
						<li class="nav_menu_li li_sub">
							<a href="#">
								수수료 관리
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li class="nav_menu_li">
				<a href="#">
					회원 관리
				</a>
			</li>

			<li class="nav_menu_li">
				<a href="#">
					국가 관리
				</a>
			</li>

			<li class="nav_menu_li">
				<a href="#">
					집단 감수
				</a>
			</li>

			<li class="nav_menu_li">
				<a href="#">
					1:1 감수
				</a>
			</li>

			<li class="nav_menu_li">
				<a href="#">
					프로젝트 감수
				</a>
			</li>

		</ul>
	</div>
</aside>

<?php
	##############################################################################################################	
	## 본문 시작
	##############################################################################################################	
?>
<main>

<?php
	##############################################################################################################
	## JS
	##############################################################################################################
?>
<script>
	$('.nav_left')
		.addClass('col-sm-8');

	$('.nav_right')
		.addClass('col-sm-4');

	$('.main_menu')
		.addClass('navbar-collapse')
		.addClass('collapse')
		.addClass('sidebar-navbar-collapse');
</script>