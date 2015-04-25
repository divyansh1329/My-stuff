function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
function div_show() {
document.getElementById('abc').style.display = "block";
}
function div_hide(){
document.getElementById('abc').style.display = "none";
}
function show() {
document.getElementById('abc2').style.display = "block";
}
function hide(){
document.getElementById('abc2').style.display = "none";
}
function check2()
{
	var flag=1;
	var data_field = document.getElementsByClassName("inp");
	for(i=0;i<6;i++)
	{
		if(data_field[i].value == "") { flag = 0; break; }
	}
	if ( flag == 1) alert ("Form Submitted Successfully!");
		else alert("Please fill all the fields");
}

function check_pass(){

 	var pass = document.getElementById("password2");
 	var r_pass = document.getElementById("r_password");
 	if(pass.value != r_pass.value)
 	window.alert("The passwords do not match");
}