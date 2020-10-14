    function validate(){
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var password = document.getElementById("password").value;
        var repassword = document.getElementById("repassword").value;

        if(username ==''){
        alert("Please enter a User Name")
        formlogin.phone.focus()
        return false
        }
        if(email ==''){
        alert("Please enter a email")
        formlogin.phone.focus()
        return false
        }
        if(phone ==''){
        alert("Please enter a phone")
        formlogin.phone.focus()
        return false
        }

        if(username.length < 6){
        alert("Please enter a more than six character username")
        formlogin.username.focus()
        return false
        }
        re = /[a-z]/;
        if(!re.test(myform.username.value)) {
        alert("Error: username must contain at least one lowercase letter (a-z)!");
        formlogin.username.focus();
        return false;
        }
        re = /[A-Z]/;
        if(!re.test(myform.username.value)) {
        alert("Error: username must contain at least one uppercase letter (A-Z)!");
        formlogin.username.focus();
        return false;
        }
        if(phone.length <5){
        alert("Please enter ten digit no.")
        formlogin.phone.focus()
        return false
        }
        if(phone.length >10){
        alert("Please enter below ten digit no.")
        formlogin.phone.focus()
        return false
        }

        // password validattion
        if(password.length < 6){
        alert("Please enter a more than six character username")
        formlogin.password.focus()
        return false
        }
        re = /[0-9]/;
        if(!re.test(myform.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        formlogin.password.focus();
        return false;
        }
        re = /[A-Z]/;
        if(!re.test(myform.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        formlogin.password.focus();
        return false;
        }
}

function validate(formlogin) { 
                password = myform.password.value; 
                repassword = myform.repassword.value; 
  
                // If password not entered 
                if (password == '') 
                    alert ("Please enter Password"); 
                      
                // If confirm password not entered 
                else if (repassword == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password != repassword) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                else{ 
                    alert("Password Match: Welcome to GeeksforGeeks!") 
                    return true; 
                } 
            } 