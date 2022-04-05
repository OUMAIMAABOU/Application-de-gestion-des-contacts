var username=document.getElementById('username');
var idemail =document.getElementById('idemail')
var pass =document.getElementById('pass')
var img =document.getElementById('img')
var img2 =document.getElementById('img2')


function validation(){
    if(username.value==""  ){
        username.style.borderColor='red';
        username.style.borderWidth='3px'
        img.innerHTML='<img src="img/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        idemail.innerHTML='fill the username Please!'
        return false
    }else if(username.value!=""){
        username.style.borderColor='#7fff00';
        username.style.borderWidth='3px'
        img.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width: 39px;">' 
        idemail.innerHTML="";
      
    }
    if(!validateUsername(username.value)){
        username.style.borderColor='red';
        username.style.borderWidth='3px';
        img.innerHTML='<img src="img/1200px-OOjs_UI_icon_error-destructive.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width: 39px">'
        idemail.innerHTML="The username should contain only numbers and letters";
        return false
    }
   


    if(password.value=="" ){
        password.style.borderColor='red';
        password.style.borderWidth='3px';
        document.getElementById('pass').innerHTML ="Password does'nt Match!"
        img2.innerHTML='<img src="img/1200px-OOjs_UI_icon_error-destructive.svg.png" style="POSITION: relative;top:-49px;right:-395px;width: 39px;">'
        pass.innerHTML="fill the password Please!";
        return false
    }else if(password.value!=""){
        password.style.borderColor='green';
        password.style.borderWidth='3px';
        img2.innerHTML='<img src="img/checked.png" style="POSITION: relative;top:-49px;right:-395px;width: 39px;">';
        pass.innerHTML="";


    }
    if(validatePassword(password.value)){
        password.style.borderColor='red';
        password.style.borderWidth='3px'
        img2.innerHTML='<img src="img/1200px-OOjs_UI_icon_error-destructive.svg.png" style="POSITION: relative;top: -49px;right:-395px;width:39px;">';
        pass.innerHTML="The password should contain only numbers and letters";
        return false
    }
    if(password.value.length<7){
        password.style.borderColor='red';
        password.style.borderWidth='3px';
        img2.innerHTML='<img src="img/1200px-OOjs_UI_icon_error-destructive.svg.png" style="POSITION: relative;top: -49px;right:-395px;width:39px;">';
        pass.innerHTML="The password must be at least 6 characters";
        return false
    }
   

    else return true
}
function validateUsername(username) 
    {
        var re = /^[a-zA-Z]{3,20}$/;
        return re.test(username);
    }
    function validatePassword(password) 
    {
        var re = /\"|\#|\'|\*|\?|\!|\-/;
        return re.test(password);
    }
