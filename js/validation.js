
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
  
    if (nom.value=="") {
        nom.style.borderColor='red';
        nom.style.borderWidth='3px'
        img.innerHTM='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        nomid.innerHTML='fill the username Please!'
        return false
        
    }else if (nom.value!=="") {
        nom.style.borderColor='green';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        nomid.innerHTML="";
    }

    if (nom.value.length <2){
        nom.style.borderColor='red';
        nom.style.borderWidth='3px'
        img.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        nomid.innerHTML='** Username should contains at least 2 caracters! **'
        return false;
       }

    // if (phone.value=="") {
    //     phone.style.borderColor='red';
    //     phone.style.borderWidth='3px'
    //     img2.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
    //     phoneid.innerHTML='fill the phone Please!'
    //     return false

    // } else if (phone.value!=="") {
    //     phone.style.borderColor='green';
    //     phone.style.borderWidth='3px'
    //     img2.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
    //     phoneid.innerHTML="";
    // }
        
       if (!validatphone()) {
        phone.style.borderColor='red';
        phone.style.borderWidth='3px'
        img2.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        phoneid.innerHTML='** Invalid number phone! **'
        return false        

       }else if(validatphone()){
        phone.style.borderColor='green';
        phone.style.borderWidth='3px'
        img2.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        phoneid.innerHTML='';
     
       }

       if (email.value == "") {
        email.style.borderColor='red';
        email.style.borderWidth='3px'
        img3.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
        mailid.innerHTML='fill the username Please!'
        return false

    }else if (email.value!=="") {
        email.style.borderColor='green';
        email.style.borderWidth='3px'
        img3.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        mailid.innerHTML=""
        
    }

    else if (email.indexOf('@') <= 0) {
        email.style.borderColor='green';
        email.style.borderWidth='3px'
        img3.innerHTML='<img src="img/error.svg.png".png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
        mailid.innerHTML=" ** @ Invalid Position!! **"
        return false;
      }   

    //   if (Address.value == "") {
    //     Address.style.borderColor='red';
    //     Address.style.borderWidth='3px'
    //     img4.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
    //     addid.innerHTML='fill the Address Please!'
    //     return false

    // }else if (Address.value!=="") {
    //     Address.style.borderColor='green';
    //     Address.style.borderWidth='3px'
    //     img4.innerHTML='<img src="img/checked.png" style=" POSITION: RELATIVE;bottom: 40px; left: 334px; width:20px;">'
    //     addid.innerHTML=""
        
    // }

       if (Address.value.length>255) {
        Address.style.borderColor='red';
        Address.style.borderWidth='3px'
        img4.innerHTML='<img src="img/error.svg.png" style=" POSITION: RELATIVE;bottom: 46px; left: 404px; width:39px;">'
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