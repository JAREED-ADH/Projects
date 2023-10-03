
 function validateForm(){

    var fullname= document.getElementById("name").value.trim;
    var address= document.getElementById("address").value;
    var phonenumber= document.getElementById("phone").value;
    var email= document.getElementById("email").value;
    var username= document.getElementById("uname").value;
    var password= document.getElementById("password").value;
    var confirmpassword= document.getElementById("confirmpassword").value;

    var result= new Array();

  

//Password Validation:
    if(password=="" || password==null){
       
        result[0]=false;
        document.getElementById('pw').innerHTML="Password cannot be blank.";
        document.getElementById('pw').style.color="red";

    }
    else if(password.length<8){

        result[1]=false;
        document.getElementById('pw').innerHTML="Password must be 8 character long.";
        document.getElementById('pw').style.color="red";

    }
    else{
      
        result[2]=true;
        document.getElementById('pw').innerHTML="";
       
    }



    //Full name Validation:
    if(fullname=="" || fullname==null){
        result[3]=false;
        document.getElementById('fn').innerHTML="Name cannot be blank.";
        document.getElementById('fn').style.color="red";

    }
    else{
        result[4]=true;
        document.getElementById('fn').innerHTML="";
    }


    //Address Validation:
    if(address=="" || address==null){
        result[5]=false;
        document.getElementById('a').innerHTML="Address cannot be blank.";
        document.getElementById('a').style.color="red";
    }
    else{
        result[6]=true;
        document.getElementById('a').innerHTML="";
    }

    //Email Validation:

    if(email=="" || email==null){
        result[7]=false;
        document.getElementById('e').innerHTML="Email cannot be blank.";
        document.getElementById('e').style.color="red";

    }
    else{
        result[8]=true;
        document.getElementById('e').innerHTML="";
    }

    // Phone number Validation:
    if(phonenumber=="" || phonenumber==null){
        result[9]=false;
        document.getElementById('pn').innerHTML="Phone number cannot be blank.";
        document.getElementById('pn').style.color="red";

    }
    else if(phonenumber.length<10){
        result[10]=false;
        document.getElementById('pn').innerHTML="Phone number cannot be less than 10 digits.";
        document.getElementById('pn').style.color="red";
    }
    else{
        result[11]=true;
        document.getElementById('pn').innerHTML="";
    }
    
    
    //confirm password Validarion:
    
    if(confirmpassword=="" || confirmpassword==null){
        result[12]=false;
        document.getElementById('cpw').innerHTML="Password cannot be blank.";
        document.getElementById('cpw').style.color="red";

    }
    else if(confirmpassword!=password){
        result[13]=false;
        document.getElementById('cpw').innerHTML="Password did not match.";
        document.getElementById('cpw').style.color="red";
    }
    else{
        result[14]=true;
        document.getElementById('cpw').innerHTML="";
    }
    // Username Validation:
   if(username=="" || username==null){
        
    result[15]=false;
    document.getElementById('un').innerHTML="Username cannot be blank.";
    document.getElementById('un').style.color="red";

}
else if(username.length<4){
    
    result[16]=false;
    document.getElementById('un').innerHTML="Username must be 4 charcter long.";
    document.getElementById('un').style.color="red";
}

else{ 
    
    result[17]=true;
    document.getElementById('un').innerHTML="";
    

}
    

    for(var i=0;i<=result.length;i++){
        if(result[i]==false){
            return false;
        }
        else{
            return true;
            
        }
    }
}

   /* form.addEventListener('submit',e =>{
        e.preventDefault();

        validateForm();

    });

    function validateForm(){
        var namev= username.value.trim();
        var passwordv= password.value.trim();

        if(namev===""){
            setError(username, "Name must be atleast 4 character long.");
            
        }

        if(passwordv===""){
            setError(password, "Password must be 8 character long.");
            
        }
    }

    function setError(input, message){
        var formControl= input.parentElement;
        var p= formControl.querySelector('p');
        p.innerText= message;
    }*/


   /* function validateForm(){
        var name=document.myform.uname.value;
        var password= document.myform.passwordd.value;
        var result=new Array();

        if(name.length<4){
            result['u']="Name must be atleast 4 character long.";
            return false;
        }
        if(password.length<8){
            result['p']="Password must be atleast 8 character long."
            return false;
        }


        while(result.length>=0)
        return result;
    }*/
        
  


