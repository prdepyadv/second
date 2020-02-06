<!DOCTYPE html>
<html>
<title>Learn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
   </script>

<style type="text/css">

@import url('https://fonts.googleapis.com/css?family=Pacifico&display=swap');
@import url('https://fonts.googleapis.com/css?family=Gelasio:400i&display=swap');
@import url('https://fonts.googleapis.com/css?family=Raleway:600&display=swap');

h4 {
		font-family: 'Gelasio', serif;
		margin-left : 10%;


}



.top {
	
	color : white; 
	font-family : Arial, Helvetica, sans-serif;
	text-decoration : none;
}

.top:hover {
	background-color: green;

}


#label {
	
	
	font-family: 'Gelasio', serif;

}

.inn{

	width : 35%;
	border : 0.5px solid black;
	height : 26px;
	
		
}


.inn:hover {

	border-bottom : 1.5px solid #cc0000;


}



.bttn {
	
	border: 1.5px solid black;
	padding : 10px;
	width : 40%;
	margin-left: 30%;
	border-radius: 25px;
	outline: none;

}

.bttn:hover {
	
	border: 1.5px solid #cc0000;

}

.pp {
	overflow: hidden;
	background-color: black;
	margin-top : 8px;
}

.pp a {
  float: left;
  display: block;
  color: white;
  padding: 18px 16px;
  text-decoration: none;
  font-family : Verdana, Helvetica, sans-serif;
}


input[type=text],input[type=email] ,input[type=password] ,input[type=date]  {
  width: 100%;
  padding: 15px 40px;
  margin-bottom : 10px;
  box-sizing: border-box;
  border: none;
  border-bottom: 1.5px solid black;
  border-radius: 25px;
  outline: none;
  font-family : Verdana, Helvetica, sans-serif;
  
}


.container {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  width : 40%;
  align: center;
  display : none;
  
}


.check {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  text-align: center;
  width: 700px ;
  margin-left: auto ;
  margin-right: auto ;
  display: none;
  font-family: 'Raleway', sans-serif;

}
.login {
  border-radius: 50px;
  background-color: #f2f2f2;
  padding: 30px;
  width : 40%;
  margin-left: auto ;
  margin-right: auto ;
  display: block;
  font-family: 'Gelasio', serif;

}

legend {
    font-size:  1.3em;
    font-weight:  bold;
    position:  relative;
    top:  -.1em;
}

.header {
	
  padding: 5px 25px;
  text-align: center;
  background : #D6D6D6;
  margin : -8px;
  font-size: large;
  font-family: 'Pacifico', cursive;
  

}

body {
  background-color: #CCCFE3;
	

}

fieldset {

	border-radius: 25px;

}

.rad {
		
		font-family: 'Gelasio', serif;
}

.inn1:hover {
			border-bottom : 1.5px solid #cc0000;


}

.bttn1 {
	border: 1.5px solid black;
	padding : 10px;
	width : 40%;
	margin-left: 30%;
	border-radius: 25px;
	outline: none;

}

.bttn1:hover {
			border: 1.5px solid #cc0000;


}




</style>

<body >

<div class="header">
  <h1>-- My Website --</h1>
</div>

<div class="pp">
	<a class="top pp"href="https://www.google.com/" title="Home">Home</a>
	<a class="top pp"href="https://www.google.com/" title="Audio">Audio</a>
	<a class="top pp"href="www.google.com" title="Video">Video</a>
	<a class="top pp"href="www.google.com" title="File">File</a>
	<a class="top pp"href="www.google.com" title="Contact Us">Contact Us</a>
	<a class="top pp" id="wel" style="float:right" href="#" onclick="tt()"></a>
	

</div>
<br>
<br>
<br>
<br>

<div class="check">
<p id="ch1"></p>
<p id="ch2"></p>
<p id="ch3"></p>
<p id="ch4"></p>
<p id="ch5"></p>
</div>

<div class="login">
<br>
<form method="post" onsubmit="return gg();" action="./success.php">
<fieldset>
<legend><b>
Login</b>
</legend>
<br>
<input class="inn1" name="username" id="username" type="text" data-toggle="popover" data-trigger="hover" data-content="Enter Username" placeholder="Username" required>
<input class="inn1" id="pass_word" type="password"  data-toggle="popover" data-trigger="hover" data-content="Enter Password" placeholder="Password" required>
<br><br>
<button class="bttn1" type="Submit"><b>Submit</b></button>
<br>
<br>
<h4>Not registered yet? <a onclick="uu();">Sign up now!</a></h4>

</fieldset>
</form>
</div>

<div class="container">
<form method="post" id="pform" onsubmit="return ff();" action="./check.php">
<fieldset>
<legend><b>
Registration</b>
</legend>
<br>

<p id="label" >First Name* :</p>
<input class="inn" type="text" onkeyup="firs()" placeholder="Enter your first name" name="first" autocomplete="on">
<p id="label">Last Name :</p>
<input class="inn" type="text" placeholder="Enter your last name" name="last" autocomplete="on">
<br>

<p id="label">Email* :</p> 
<input class="inn" type="email" onkeyup="mi()" placeholder="Email here" name="email" autocomplete="on">

<p id="label">New Password* :</p> 
<input class="inn" type="password" name="password" placeholder="Password should be more than 8"> 

<p id="label">Confirm Password* :</p> 
<input class="inn" type="password" onkeyup='funct()' placeholder="Confirm here"> 
<br>
<p id="label">Date of Birth* :</p> 
<input class="inn" onkeyup="db() "type="date" name="dob" value="2020-01-16">
<br>
<br>
<br>
<button class="bttn" type="submit">Join Now</button>
<br>
<br>
<h4>Already registered! <a onclick="tt()">Login now!</a></h4>
</fieldset>
</form>
</div>

<script>

//stop here

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});

var f1=0,f2=0,f3=0,f4=0,flag=0;

function ff() {

//prdepyadv

var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var letters = /^[A-Za-z]+$/;
var f = document.getElementsByClassName("inn")[0].value;
var l = document.getElementsByClassName("inn")[1].value;
var ema = document.getElementsByClassName("inn")[2].value;
var pass = document.getElementsByClassName("inn")[3].value;
var pass1 = document.getElementsByClassName("inn")[4].value;
var dob = document.getElementsByClassName("inn")[5].value;
var data = dob.split("-");

pass = pass.trim();
pass1=pass1.trim();

/*
var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
db.transaction(function (tx) {   
	tx.executeSql('CREATE TABLE IF NOT EXISTS Test (id INTEGER PRIMARY KEY AUTOINCREMENT, f_name, l_name, email , password, Dob, register_date)');
});
*/


if(f.length < 3 || ! (f.match(letters))){
alert("Enter Valid name");
document.getElementsByClassName("inn")[0].focus();
return false
}
else if(! ema.match(mailformat)){
alert("Enter Valid email id");
document.getElementsByClassName("inn")[2].focus();
return false
}
else if(pass.length < 8 ){
alert("password length should be 8 or more");
document.getElementsByClassName("inn")[3].focus();
return false
}
else if(pass != pass1){
alert("password doesnt match");
document.getElementsByClassName("inn")[4].focus();
return false
}
else if(data[0] < 1930 || data[0]>2002){
alert("Enter Valid DOB");
return false
}
else {

	return email_validate();


/*

	db.transaction(
			function(tx){
				tx.executeSql( "SELECT * FROM test WHERE email = ?",[ema],checkmail)})
							
	function checkmail(tx,results){		
				console.log(results);
				if(results.rows.length > 0)
				{
					alert("Email id already exists");
					document.getElementsByClassName("inn")[2].style.borderBottom = "solid black";
					document.getElementsByClassName("inn")[2].focus();
					
				}else{
					document.getElementsByClassName("container")[0].style.display = "none";
					document.getElementsByClassName("check")[0].style.display = "block";

					document.getElementById("ch1").innerHTML = "Name : "+f+" "+l;
					document.getElementById("ch3").innerHTML = "Email : "+ema;
					document.getElementById("ch4").innerHTML = "Password : "+pass;
					document.getElementById("ch5").innerHTML = "Date of Birth : "+dob;

					document.getElementById("wel").innerHTML = "Welcome, "+f;

					var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);
					db.transaction(function (tx) {
						tx.executeSql('INSERT INTO Test(f_name , l_name, email , password, Dob,register_date) VALUES (?,?,?,?,?,?)',[f,l,ema,pass,dob,Date()]);
					});
				}}
				
*/

}
}

function email_validate(){
    
var ema = document.getElementsByClassName("inn")[2].value;

var temp;
        $.ajax({
            url: './email_val.php',
            type: 'post',
            async: false,
            data: {'email' : ema},
            
            success: function(response)
            {
                
                
                if(response>0){
                    alert("email exist")
                    document.getElementsByClassName("inn")[2].style.borderBottom = "solid black";
                    temp=false;
                }
                else{
                   
                    temp=true;
                }
            },
            error: function(result){
                
                return false;
            }
        });
    return temp;
}

function gg(){

var user = document.getElementById("username").value;
var pas = document.getElementById("pass_word").value;


if(user.length < 3 || pas.length < 8){
alert("Enter valid credentials");
document.getElementsByClassName("inn")[0].focus();
return false
}
else {
   
	
return login_validate();

/*
var db = openDatabase('mydb', '1.0', 'Test DB', 2 * 1024 * 1024);

db.transaction(
		function(tx){
			tx.executeSql( "SELECT * FROM test WHERE email = ? and password = ?",[user,pas],displayResults)})

function displayResults( tx, results ){
		
		if(results.rows.length == 0) {
			alert("username not available or incorrect password");
			document.getElementsByClassName("inn1")[1].value="";
			//document.getElementsByClassName("inn1")[1].setAttribute('data-content','new content');
			return false;
		}
		document.getElementsByClassName("container")[0].style.display = "none";
		document.getElementsByClassName("login")[0].style.display = "none";
		document.getElementsByClassName("check")[0].style.display = "block";
		document.getElementById("ch1").innerHTML = "Name : "+results.rows[0]["f_name"]+" "+results.rows[0]["l_name"];
		document.getElementById("ch3").innerHTML = "Email : "+results.rows[0]["email"];
		document.getElementById("ch5").innerHTML = "Date of Birth : "+results.rows[0]["Dob"];
		document.getElementById("wel").innerHTML = "Welcome, "+results.rows[0]["f_name"];
		
}
*/
    
}
}

function login_validate(){

var user = document.getElementById("username").value;
var pas = document.getElementById("pass_word").value; 
var temp1;

        $.ajax({
            url: './login.php',
            type: 'post',
            async: false,
            data: {'username' : user,'password': pas},
            success: function(response)
            {
		    console.log(response);
                if(response != '1'){
                    alert("username not available or incorrect password")
                    document.getElementsByClassName("inn1")[1].value="";
                    temp1=false;
                }
                else{
                    temp1=true;
                }
            },
            error: function(result){
                return false;
            }
        });
    return temp1;   
}



function firs(){
var letters = /^[A-Za-z]+$/;
var f = document.getElementsByClassName("inn")[0];
if(f.value.length > 2 && f.value.match(letters)){
f.style.borderBottom = "solid #00FF00";
f1=1;
}
else{
f.style.borderBottom = "solid black";
f1=0;
}
if(f1==1 && f2==1 && f3==1 && f4==1){
document.getElementsByClassName("bttn")[0].style.border = "solid green";
}
}

function mi(){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var ema = document.getElementsByClassName("inn")[2];
if(ema.value.match(mailformat)){
ema.style.borderBottom = "solid #00FF00";
f2=1;
}
else if(! ema.value.match(mailformat)){
ema.style.borderBottom = "solid black";
f2=0;
}
         
if(f1==1 && f2==1 && f3==1 && f4==1){
document.getElementsByClassName("bttn")[0].style.border = "solid green";
}
}

function funct(){
var pass = document.getElementsByClassName("inn")[3].value;
var pass1 = document.getElementsByClassName("inn")[4].value;
pass = pass.trim();
pass1=pass1.trim();
if(pass == pass1 &&pass.length > 7){
document.getElementsByClassName("inn")[4].style.borderBottom = "solid #00FF00";
document.getElementsByClassName("inn")[3].style.borderBottom = "solid #00FF00";
f3=1;
}
else{
document.getElementsByClassName("inn")[4].style.borderBottom = "solid black";
f3=0;
}
if(f1==1 && f2==1 && f3==1 && f4==1){
document.getElementsByClassName("bttn")[0].style.border = "solid green";
}
}

function db(){

var dob = document.getElementsByClassName("inn")[5].value;
var data = dob.split("-");
if(data[0] > 1930 && data[0] < 2002){
document.getElementsByClassName("inn")[5].style.borderBottom = "solid #00FF00";
f4=1;
}
else{
document.getElementsByClassName("inn")[5].style.borderBottom = "solid black";
f4=0;
}
if(f1==1 && f2==1 && f3==1 && f4==1){
document.getElementsByClassName("bttn")[0].style.border = "solid green";
}
}

function tt() {

document.getElementsByClassName("container")[0].style.display = "none";
document.getElementsByClassName("login")[0].style.display = "block";
document.getElementsByClassName("check")[0].style.display = "none"
document.getElementsByClassName("inn1")[1].value="";

}

function uu() {

document.getElementsByClassName("container")[0].style.display = "block";
document.getElementsByClassName("login")[0].style.display = "none";
document.getElementsByClassName("check")[0].style.display = "none";
document.getElementsByClassName("inn")[3].value="";
document.getElementsByClassName("inn")[4].value="";


}

</script>

</body>
</html>