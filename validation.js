

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	var email = $("#email");
	var emailInfo = $("#emailInfo");
	var pass1 = $("#pass1");
	var pass1Info = $("#pass1Info");
	var pass2 = $("#pass2");
	var pass2Info = $("#pass2Info");
	var phone = $("#phone");
	var phoneInfo = $("#phoneInfo");
	var inden = $("#inden");
	var indenInfo = $("#indenInfo")
	//On blur
	name.blur(validateName);
	email.blur(validateEmail);
	pass1.blur(validatePass1);
	pass2.blur(validatePass2);
	phone.blur(validatePhone);
	inden.blur(validateInden);
	//On key press
	name.keyup(validateName);
	pass1.keyup(validatePass1);
	pass2.keyup(validatePass2);
	phone.keyup(validatephone);
	inden.blur(validateInden);
	//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validatePass1() & validatePass2() & validatePhone() & validateInden())
			return true
		else
			return false;
	});
	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text("Email này sẽ dùng để đăng nhập");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Email chưa đúng định dạng");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("Tên phải gồm 3 kí tự trở lên");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text("Tên hợp lệ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	function validatePass1(){
		var a = $("#password1");
		var b = $("#password2");

		//it's NOT valid
		if(pass1.val().length <5){
			pass1.addClass("error");
			pass1Info.text("Mật khẩu gồm tối thiểu 5 kí tự: gồm chữ cái,chữ số hoặc '_'");
			pass1Info.addClass("error");
			return false;
		}
		//it's valid
		else{			
			pass1.removeClass("error");
			pass1Info.text("Mật khẩu hợp lệ");
			pass1Info.removeClass("error");
			validatePass2();
			return true;
		}
	}
	function validatePass2(){
		var a = $("#password1");
		var b = $("#password2");
		//are NOT valid
		if( pass1.val() != pass2.val() ){
			pass2.addClass("error");
			pass2Info.text("Xác nhận mật khẩu không đúng");
			pass2Info.addClass("error");
			return false;
		}
		//are valid
		else{
			pass2.removeClass("error");
			pass2Info.text("Mật khẩu hợp lệ");
			pass2Info.removeClass("error");
			return true;
		}
	}
	function IsNumeric(input)
   {
   return (input - 0) == input && input.length > 0;
   }

	function validatePhone(){
		//it's NOT valid
		if(phone.val().length < 10 || !IsNumeric(phone.val())){
		    phone.addClass("error");
		    phoneInfo.text("Số điện thoại phải >= 10 chữ số");
			phoneInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			phone.removeClass("error");
			phoneInfo.text("Số điện thoại hợp lệ");
			phoneInfo.removeClass("error");
			return true;
		}
	}
	function validateInden(){
		//it's NOT valid
		if(inden.val().length != 9 || !IsNumeric(inden.val())){
		    inden.addClass("error");
		    indenInfo.text("Số CMND gồm 9 chữ số");
			indenInfo.addClass("error");
			return false;
		}
		//it's valid
		else{			
			inden.removeClass("error");
			indenInfo.text("Số CMND hợp lệ");
			indenInfo.removeClass("error");
			return true;
		}
	}
});