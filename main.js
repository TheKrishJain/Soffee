function show() {
    var x = document.getElementById("LoginPassword");
    if (x.type === "password") {
        x.type = "text";
    }
     else {
            x.type = "password";
          }
    
} 
function checkPass() {
    var og = document.getElementById("ogPassword")
    var re = document.getElementById("rePassword");
    if(og.value!=re.value){
        alert("Password Doesn't Match")
        //re.style.backgroundColor="red";
    }
    else{
        re.setCustomValidity("");
    }
}

function ageCalculator() {  
    var userinput = document.getElementById("DOB").value;  
    var dob = new Date(userinput);  
      
    //calculate month difference from current date in time  
    var month_diff = Date.now() - dob.getTime();  
      
    //convert the calculated difference in date format  
    var age_dt = new Date(month_diff);   
      
    //extract year from date      
    var year = age_dt.getUTCFullYear();  
      
    //now calculate the age of the user  
    var age = Math.abs(year - 1970);  
      
    //display the calculated age  
    document.getElementById("result").innerHTML =    
              age + " years. ";  
    } 

function Search(){
document.getElementById("rasengan").style.visibility="hidden";
document.getElementById("searchspan").style.visibility="visible";

}