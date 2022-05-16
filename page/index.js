let container=document.getElementById('container')

toggle = () =>{
container.classList.toggle('sign-in')
container.classList.toggle('sign-up')
}

setTimeout(() =>{
    container.classList.add('sign-in')
},200)

function validate() {
    var name=document.main.username.value;
    var mail=document.main.email.value;
    var password1=document.main.password.value;
    var password2=document.main.cpassword.value;
    var atpos=mail.indexOf("@");
    var k1=mail.indexOf("kabarak");
    var k2=mail.lastIndexOf("kabarak");
    var dot1=mail.indexOf(".ac");
    var dot2=mail.indexOf(".ke");
    var ac1=mail.indexOf("ac");
    var ac2=mail.lastIndexOf("ac");
    var ke1=mail.indexOf("ke");
    var ke2=mail.lastIndexOf("ke");
    if(name==null||name=="") {
        alert("Username cannot be blank.")
        return false;
    }else if(name.length<3){
        alert("Username too short.")
        return false;
    }else if (mail==null||mail=="") {
        alert("Email cannot be blank.")
        return false;
    } else if(atpos>k1||k1>k2||k2>dot1||dot1>dot2||ac1>ac2||ac2>dot2||dot2>ke1||ke1>ke2||dot1>ac1){
        alert("Enter a valid school email")
        return false;
    }else if((password1||password2)==null||(password1||password2)==""){
        alert("Kindly enter your password")
        return false;
    }else if(password1.length<6){
        alert("password length should be more than 6 characters")
        return false;
    }else if(password1!=password2){
        alert("Passwords don't match")
        return false;
    }else {
        alert("Registration successful!\n Welcome to Blackmark industries😊")
        return true;
    }
}