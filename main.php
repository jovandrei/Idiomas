<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header">
		<header>
			<div class="container container_header">
			
				<div id="title">
					
	
				</div><!--#title-->			
				<div class="clear"></div>
			</div><!--.container-->
		</header>
	</div><!--#header-->
	
	<div class="container">
		<style>
		
			#sidebar-left ul li.current-menu-item a {
				background				:	#9fae00;
				color					:	#FFF;
			}
			
			#sidebar-left ul li.current-menu-item a.parent, #sidebar-left ul li.current-menu-parent a {
				background				:	#9fae00 url("http://dzggv69fpq0a3.cloudfront.net/wp-content/themes/live-mocha-theme/images/pag-nav.png") no-repeat 5px 3px;
				color					:	#FFF;
			}
			
			#sidebar-left ul li.current-menu-item a.parent:hover, #sidebar-left ul li.current-menu-parent a:hover {
				background				:	#9fae00 url("http://dzggv69fpq0a3.cloudfront.net/wp-content/themes/live-mocha-theme/images/pag-nav.png") no-repeat 5px 3px;
				color					:	#FFF;
			}
			
			#sidebar-left ul li.current-menu-item ul li a:hover {
				color				:	#9fae00;
				background			:	transparent;
			}
			
			#sidebar-left ul li.current-menu-parent ul li.current-menu-item a, #sidebar-left ul li.current-menu-parent ul li.current-menu-item a:hover {
				color				:	#9fae00;
				background			:	transparent;
			}
		
		</style>


		<div id="content-full">
	
			<div id="sidebar-left">
						
				<img src="images/sidebar.jpg" alt="My Classes">
						
				<div class="menu-main-menu-container">
					<ul class="sf-menu sf-js-enabled" id="menu-main-menu">
						<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a href="#">Introduction</a></li>
						<li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-37 current_page_item menu-item-55"><a href="#">Log In</a></li>
						<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="#">Categories</a></li>
						<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="#">Request Access</a></li>
						<li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a href="#">FAQs</a></li>
					</ul>
				</div>		
			</div>
			
			<div class="content-right">
			
						
					<h2 class="account_title">Log in</h2>

					<form name="login_form" id="login_form">
					
					<div class="password_wrapper">
				
						<input type="hidden" value="http://classroom.livemocha.com/mis-clases/?lang=es" name="es"> <input type="hidden" value="http://classroom.livemocha.com/minhas-aulas/?lang=pt-br" name="pt-br">				
						<p class="form_inputs"><strong>ID</strong></p>
						<input type="text" name="log" id="log">
						<div id="log_error"></div>
						
						<p class="form_inputs"><strong>Password</strong></p>
						<input type="password" name="pwd" id="pwd">
						<div id="pwd_error"></div>
						
						<p><a href="#">Forgot your password?</a></p>
						
						<div class="button_wrapper button_wrapper_right"><a class="button" id="submit_login">Login</a></div>
						
						<div id="signingup_error"></div>
						
					</div>
					
					<p>If you are not yet a member, send out a request</p>
					
					</form>
				
						
			</div>
	
		</div><!--#content-->
		
		<div class="clear"></div>
	</div><!--.container-->
	<?php include('footer.php');?>
</div><!--#main-->