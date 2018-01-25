// JavaScript Document
// Hide script from older browsers
//the function to print the page
function printPage()
{
	window.print();
}
function closeMe(){
	window.close();
}
function myFunction(){
	 
	window.open("form1.html", "window1", "width=220, height=440");
}

//---------------------------------------------------------------------------------------------------------------------------------


function makeEnable()
{

	var x=document.form1.mySelect;

	if(x.disabled == true){
		x.disabled=false;
	}else{
		x.disabled=true;
	}
}
//--------------------------Pull down menu-----------------------------------------------------------------------//

		function toggleMenu(currMenu) {
			if (document.getElementById) {
				thisMenu = document.getElementById(currMenu).style;
				if (thisMenu.display == "block") {
					thisMenu.display = "none";
				}
				else {
					thisMenu.display = "block";
				}
				return false;
			}
			else {
				return true;
			}
		}
		
		
		
//------------------Preloading images section-----------------------------------------------------------------------\\
if(document.images){

normal0=new Image();			//---Normal section---//
normal0.src="images/rmf.gif";

normal1=new Image();
normal1.src="images/onyx.gif";

normal2=new Image();
normal2.src="images/chch.gif";

normal3=new Image();
normal3.src="images/wai.gif";	//--End of normal section---//


over0=new Image();				//--Start of over section--//
over0.src="images/rmf2.gif";

over1=new Image();
over1.src="images/onyx2.gif";

over2=new Image();
over2.src="images/chch2.gif";

over3=new Image();
over3.src="images/wai2.gif";	//--End of over section--//


//----------------Roll over function-----------------------------------------------//
function onOver(imgName,imgObj){
	//alert(imgName);
	window.document.images[imgName].src=imgObj.src;
}



//-------------------------------------------------Form Section--------------//


var phoneExp=RegExp("^(\\+[0-9]{2})?(\\(?([0-9]{2,3})\\)?)?[0-9]{7}$");	

function checkData(whatform){
	// whatform is the variable name for the form that is submitted
	if(emptyFirst(whatform.first)){
		alert("Please enter a first Name!");
		whatform.first.focus();
		return false;
	}
	else if(emptyLast(whatform.last)){
		alert("Please enter a last name!");
		whatform.last.focus();
		return false;
	}
	else if(emptyAddress1(whatform.address1)){
		whatform.address1.focus();
		alert("Please enter address!");
		return false;
	} 
	else if(emptyAddress2(whatform.address2)){
		whatform.address2.focus();
		alert("Please complete your address!");
		return false;
	}
	else if(emptyAddress3(whatform.address3)){
		whatform.address3.focus();
		alert("Please complete the rest of your address!");
		return false;
	}
	else if(checkEmail(whatform.email)){
		whatform.email.focus();
		alert("Please enter an email!");
		return false;
	}
	
	else if(preprocess(whatform.checkbox)){
		whatform.checkbox.focus();
		alert("Please tick the check box!");
		return false;
	}//checks that check box is checked
	
	
	
	else if(Choice(whatform.mySelect)){
		alert("Please select a type!");
		
		return false;
	}

	else if(emptyPhone(whatform.phone)){
		whatform.phone.focus();
		alert("Please enter a phone number!");
		return false;
	}
	
	
	
	else{
		return true;
	}
}
		
//------------------------------------------------------------------------------------------------------------------------------	
function emptyFirst(formObj){
	if(formObj.value.length==0){
		return true;
	}
	var i;
	for(i=0; i<formObj.value.length; i++){
		var ch = formObj.value.charAt(i);
		if(isNaN(ch)){
			return false;
		}
	}
	return true;
}

function emptyLast(formObj){
	if(formObj.value.length==0){
		return true;
	}
	var i;
	for(i=0; i<formObj.value.length; i++){
		var ch = formObj.value.charAt(i);
		if(isNaN(ch)){
			return false;
		}
	}
	return true;
}

function emptyAddress1(formObj){
	if(formObj.value.length==0){
		return true;
	}
	var i;
	for(i=0; i<formObj.value.length; i++){
		var ch = formObj.value.charAt(i);
		
		if(ch != '' &&ch != '\t'){
			return false;
		}
	}
	return true;
}

function emptyAddress2(formObj){
	if(formObj.value.length==0){
		return true;
	}
	var i;
	for(i=0; i<formObj.value.length; i++){
		var ch = formObj.value.charAt(i);
		if(ch != ''&& ch     !=     '\t'){
			return false;
		}
	}
	return true;
}
	
	function emptyAddress3(formObj){
	if(formObj.value.length==0){
		return true;//nothing has benn entered, go up top(function)
	}
	var i;
	for(i=0; i<formObj.value.length; i++){
		var ch = formObj.value.charAt(i);// check for entered characters
		if(ch !=''&& ch !='\t'){// if there is data with no tab spaces then !(not) is false
			return false;
		}
	}
	return true;// if entered data matches ch then go to top
}
//------phone field--------------------------------------------------------------------------------------------------//
function emptyPhone(formObj){
	var data=document.form1.phone.value;
	

	var phoneExp=RegExp("^(\\+[0-9]{2})?(\\(?([0-9]{2,3})\\)?)?[0-9]{7}$");


	
	
	if(phoneExp.test(data)){
		//return false;
		alert("valid number!");
	}
								
	else{
		return true;
		
	}
}
	
	

//-------------------------------------------------------------------------------------------------//



function checkEmail(fieldObj){
	var chEmail=fieldObj.value;
	if(chEmail.length<7){
		return true;
	}
	else if((chEmail.indexOf("@")==-1)&&(chEmail.indexOf(".")==-1)){
		return true;
	}
	else{
		return false; 
	}
}

//---------------------End of form section----------------------------------------------//

//start of check box section------------------------------------------------------------------------------------------//
function preprocess(){
	{

	var x=document.form1.checkbox;

	if(x.checked){
		return false;//alert("thanks");//user finally selected check box(true)aka return false
		
	}
	
	else{
		return true;//user did not select box, go to top(false)aka true
	}
}
	

}

	
	
//--start of  choosen section---------------------------------------------------------------------------------------//

//---end of function tag------------------------------------------------------------------------------------------------//

function Choice(){
	var radioSelected = false;
	for(var i=0; i<form1.r1.length; i++){
		if(form1.r1[i].checked){
			radioSelected=true;
			if(form1.r1[i].value == 'fax'){
				
				
				alert("fax");
				
				// check phone number regular expression for fax
			}
			if(form1.r1[i].value == 'landline'){
				alert("landline");
				
				// check phone number regular expression for phone
			}
			if(form1.r1[i].value == 'mobile'){
				alert("mobile");
				
				// check phone number regular expression for mobile
			}
		}
		//return true
	}
	if(!radioSelected){
		
		return true;//false
	}
	
	
}
	//---end of loop tag--//
	
	



//----end of section-------------------------------------------------------------------------------------------//
//---------------------cookie function--------------------------------------------------//
expireDate = new Date
		expireDate.setMonth(expireDate.getMonth()+6)
	
		userName = ""
		if (document.cookie != "") {
			userName = document.cookie.split("=")[1]
		}
	
		function setCookie() {
			userName = document.form1.first.value
			document.cookie = "userName="+userName+";expires=" + expireDate.toGMTString()
		}
		
document.cookie="Name=test";
var cookieValue=document.cookie;
if(cookieValue.indexOf("test")==-1){
	alert("Cookies not enabled");
	
}

else{
	
document.cookie.value=true//alert("Cookies enabled");
}

}
//-----------------------------------------end of cookie section-------------------------------------------------------//

// browser detection---------------------------------------------------//
// checks for flash plugins
