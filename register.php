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
			var xmlobj;
			function chickpw(pw){
				var reg=/^\w{6,16}$/;
				if(pw==''){
					pts.innerText="password cannot be empty!";
				}else if(!reg.test(pw)){
					pts.innerText="The password is 6~16 letters or numbers!"
				}else{
					pts.innerText="";
				}
			}
			
			function chickuser(form){
				if(form.username.value==""){
					uts.innerText="Username cannot be empty!";
					return false;
				}else{
					uts.innerText="";
				}
				if(form.pw.value==""){
					pts.innerText="password cannot be empty!";
					return false;
				}else{
					pts.innerText="";
				}
				if(form.pw2.value==""){
				pts2.innerText="Please enter password!";
			
				return false;}
				else{
					pts2.innerText="";
				}
				if(form.pw.value!=form.pw2.value){
				pts2.innerText="The two passwords entered are different!";
				return false;
				}
			}
			function chickusername(user){
				var reg=/^\S*$/;
				console.log(user);
				if(user==''){
					uts.innerText="Please enter username!";
				}else if(!reg.test(user)){
					uts.innerText="The user name is not legal!";
				}
			}

		</script>
	</head>
	<body>
		<div class="computer" >
			<table class="c_table1" cellspacing="0" cellpadding="0" border="1" bordercolor="#ddd" width="800px">
				<tr>
					<td height="50px" style="display: flex;">

						
						<li style="height: 50px;width: 200px;list-style: none;display: flex;justify-content:flex-end;align-items:center;font-size: 13px;"><a href='login.php'>Login</a>&nbsp;|&nbsp;<a href='register.php'>Sign up</a></li>
						
					</td>
					
				</tr>
				<tr>
					<td >
						<div class="c_nr">
							<div>
							<div class="c_show">
								<form name="denglu" action="check.php" method="post" onsubmit="return chickuser(this);">
									<table cellpadding="0" cellspacing="0" border="0" >
										<tr>
											<td><input placeholder="Enter username" name="username" type="text" onblur="chickusername(denglu.username.value);" /><br><div id="uts" style="color:red;font-size: 12px;"></div></td>
										</tr>
										<tr>
											<td  style="padding:25px 0px 0px 0px;"><input placeholder="Enter password" name="pw" type="password" onblur="chickpw(denglu.pw.value);"/><br><div  style="color:red;font-size: 12px;" id="pts"></div></td>
										</tr>
										<tr >
											<td style="padding:25px 0px 0px 0px;"><input placeholder="Enter password again" name="pw2" type="password" /><br><div  style="color:red;font-size: 12px;" id="pts2"></div></td>
										</tr>
										<tr align="center">
											<td style="padding: 25px 0px 0px 0px;"><input name="sub" type="submit" value="Sign up" style="width: 100px;"/></td>
										</tr>
									</table>
								</form>
							</div>
							</div>
						
						<div class="c_gonggao"></div>
						</div>
					</td>
					
				</tr>
			</table>
		</div>
	</body>
</html>
