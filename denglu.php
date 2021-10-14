<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Message</title>
		<style>
			@media screen and (max-width:650px){
				.computer{
					display: none;
				}
			}
			@media screen and (min-width:650px){
				.phone{
					display: none;
				}
			}
			.c_table1{
				margin: 0 auto;
				margin-top: 100px;
			}
			.c_a{
				text-decoration: none;color: #000000;
			}
			.c_li{
				height: 50px;width: 120px;list-style: none;display: flex;justify-content:center;align-items:center;
			}
			.c_li:hover{
				color: #fff;
				background: #bbb;
			}
			li a{
				text-decoration: none;
			}
			.c_nr{
				width: 800px;
				
				display: flex;
				justify-content:center;
			}
			
			.c_gonggao{
				
				
				width: 150px;
				height: 500px;
			}
			.c_show{
				width: 650px;
				padding: 150px 0px;
				display: flex;justify-content:center;align-items:center;
				
			}
			.c_content{
				padding: 15px 50px 15px 40px;
				font-size: 13px;
			}
			.c_content a{
				text-decoration: none;color: #006699;
			}
			.c_time{
				font-size: 10px;
				color: #aaa;
			}
			.c_page{
				
				width: 500px;
				height: 50px;
				font-size: 12px;
				color: #777;
				
			}
			.c_page a{
				text-decoration: none;color: #777;
			}
			.c_name{
				text-decoration: none;color: #0a96d9;font-family: "微软雅黑";font-style: bold;font-size: 14px;
			}
			.c_usern{
				color: #0a96d9;;
			}
		</style>
		<script>
			
			function chickuser(form){
				if(form.username.value==""){
				uts.innerText="Please enter username";
				
				return false;}else
				uts.innerText="";
				if(form.pw.value==""){
				pts.innerText="Please enter password";
				
				return false;}else
				pts.innerText="";
			}
		</script>
	</head>
	<body>
		<div class="computer" >
			<table class="c_table1" cellspacing="0" cellpadding="0" border="1" bordercolor="#ddd" width="800px">
				<tr>
					<td height="50px" style="display: flex;">
						<a class="c_a" href="home.php">
							<li class="c_li" >Message</li>
						</a>
						
						<li style="height: 50px;width: 200px;list-style: none;display: flex;justify-content:flex-end;align-items:center;font-size: 13px;"><a href='denglu.php'>Login</a>&nbsp;|&nbsp;<a href='register.php'>Sign up</a></li>
						
					</td>
					
				</tr>
				<tr>
					<td >
						<div class="c_nr">
							<div>
							<div class="c_show">
								<form name="denglu" action="login.php" method="post" onsubmit="return chickuser(this)">
									<table cellpadding="0" cellspacing="0" border="0" >
										<tr>
											<td><input placeholder="username" name="username" type="text" onblur="chickuser(denglu)" /><br><div id="uts" style="color:red;font-size: 12px;"></div></td>
										</tr>
										<tr>
											<td  style="padding:25px 0px 0px 0px;"><input placeholder="password" name="pw" type="password" onblur="chickuser(denglu)" /><br><div  style="color:red;font-size: 12px;" id="pts"></div></td>
										</tr>
										<tr>
											<td style="padding: 25px 0px 0px 0px;"><input name="sub" type="submit" value="Login" style="width: 60px;"/>&nbsp;&nbsp;&nbsp;<a href="register.php" style="text-decoration: none;color: #000;"><input style="width: 60px;" name="zhuce" type="button" value="Sigh up" /> </a></td>
										</tr>
									</table>
								</form>
							</div>
							<div class="c_page" align="center">
								
								
									
									
							</div></div>
						
						<div class="c_gonggao"></div>
						</div>
					</td>
					
				</tr>
			</table>
		</div>
	</body>
</html>
