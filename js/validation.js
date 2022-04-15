
var nom=document.getElementById('nom');
var phone=document.getElementById('phone');
var email=document.getElementById('email');
var Address=document.getElementById('adress');
var phoneid=document.getElementById('phoneid');
var img =document.getElementById('img')
var img2 =document.getElementById('img2')
var img3 =document.getElementById('img3')
var img4 =document.getElementById('img4')


function validation(){          
  
    if (nom.value=="" || nom.value.length <2) {
        nom.style.borderColor='red';
        nom.style.borderWidth='3px'
        img.innerHTM='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 38px; left: 321px; width:33px;">'
        nomid.innerHTML='fill the username Please!'
        return false
        
    }else if (nom.value!=="") {
        nom.style.borderColor='green';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        nomid.innerHTML="";
    }

  
        
       if (!validatphone() && phone.value!="") {
        phone.style.borderColor='red';
        phone.style.borderWidth='3px'
        img2.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 38px; left: 321px; width:33px;">'
        phoneid.innerHTML='** Invalid number phone! **'
        return false        

       }else if(validatphone()){
        phone.style.borderColor='green';
        phone.style.borderWidth='3px'
        img2.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        phoneid.innerHTML='';
     
       }

       if (email.value == "" || email.indexOf('@') <= 0) {
        email.style.borderColor='red';
        email.style.borderWidth='3px'
        img3.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 38px; left: 321px; width:33px;">'
        mailid.innerHTML='fill the username Please!'
        return false

    }else if (email.value!=="") {
        email.style.borderColor='green';
        email.style.borderWidth='3px'
        img3.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        mailid.innerHTML=""
        
    }
 
       if (Address.value.length>255) {
        Address.style.borderColor='red';
        Address.style.borderWidth='3px'
        img4.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 38px; left: 321px; width:33px;">'
        addid.innerHTML='Address should contain at most 255 characters!!**'
        return false
       }else {
        Address.style.borderColor='green';
        Address.style.borderWidth='3px'
        img4.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        addid.innerHTML=''
       }

       function validatphone() {
           var regxp=/^[+]*[(]{0,1}[0-9]{1,2}[)]{0,1}[-\s\./0-9]*$/;
           return regxp.test(phone.value);
       }
    }