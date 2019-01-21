window.onload = PageLoad;

function PageLoad(){
    var formHandle = document.forms[0];
    formHandle.onsubmit = validateForm;
    
    function validateForm(){
        var first = document.forms["newsletterForm"]["fname"];
        var last = document.forms["newsletterForm"]["lname"];
        var address = document.forms["newsletterForm"]["add"];
        var email = document.forms["newsletterForm"]["email"];
        var telephone = document.forms["newsletterForm"]["tel"];
        var t = document.getElementById[""];
        
          
        if (first.value === "" || last.value === "" || address.value === "" || email.value === "" || telephone.value === ""){
            alert("Please fill up all of the fields");
            
            if(first.value === ""){
                first.style.backgroundColor = "red";
            }else{
                first.style.backgroundColor = "white";
            }
            if(last.value === ""){
                last.style.backgroundColor = "red";
            }else{
                last.style.backgroundColor = "white";
            }
            if(address.value === ""){
                address.style.backgroundColor = "red";
            }
            else{
                address.style.backgroundColor = "white";
            }
            if(email.value === ""){
                email.style.backgroundColor = "red";
            }
            else{
                email.style.backgroundColor = "white";
            }
            if(telephone.value === ""){
                telephone.style.backgroundColor = "red";
            }
            else{
                telephone.style.backgroundColor = "white";
            }
            return false;
        }else{
            alert("Thank you for signing up!");
        }
        
        
    }
}