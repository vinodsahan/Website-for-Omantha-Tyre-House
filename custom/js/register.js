function validreg() {
    function validEmail(){
        var email = document.getElementById('email').value;
        var at = email.indexOf('@');
        var dt = email.lastIndexOf('.');
        var len = email.length;

        if((at<2) || (dt-at<2) || (len-dt<2)){
            alert("Please Enter the valid Email");
            return false;
        }
        return true;
    }
    function validUsername(){
        var username = document.getElementById('username').value;
        if(username == "" || username == null){
            alert("Please Enter the User Name");
            return false;
        }
        return true;
    }

    function vaalidMobileNumber(){
        var num = document.getElementById('mobile').value;
        var len = num.length;
        
        if((isNaN(num)) || (len != 10)){
            alert("Please Enter Valid Mobile Number");
            return false;
        }
        else{
            return true;
        }
    }
    function validPassword(){
        var pass = document.getElementById('password').value;
        var len = pass.length;
        
        if(len<8 || len>16){
            alert("Please Enter the password minimum 8 character and maximum 16 character");
            return false;
        }
        else{
            return true;
        }
    }

    function validCpassword(){
        var pass = document.getElementById('password').value;
        var cpass = document.getElementById('cpassword').value;

        if(pass == cpass){
            return true;
        }
        else{
            alert("Don't Match the password");
            return false;
        }
    }

    function validateall(){
        if(validEmail() && validUsername() && vaalidMobileNumber() && validPassword() && 
        validCpassword()){
           
            alert("Resevation has been added");
        }
        else{
            event.preventDefault();
        }
    }
}