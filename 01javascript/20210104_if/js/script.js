var id,password;
id = prompt();

if(id == "admin"){
	// document.write("관리자입니다.");
	location.href = "login.html"
}else{
	// document.write("꺼져!");
	location.href = "error.html"
};