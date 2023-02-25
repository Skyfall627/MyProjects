const container = document.querySelector(".container"),
    showpw = document.querySelectorAll(".showpw"),
    pwField = document.querySelectorAll(".password"),
    register = document.querySelector(".register-link"),
    login = document.querySelector(".login-link");
    row = document.querySelector(".active_row");
    

    //js code for show and hide password
    showpw.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwField.forEach(pwField =>{
                if(pwField.type === "password"){
                    pwField.type = "text";
                    showpw.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })

                }else{ 
                    pwField.type = "password";
                    showpw.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                })
            }
        })
    })
})


    // Js code to switch between the login and register form

    register.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });

    // Js code for the navigation menu animation


function openNav() {
  document.getElementById("Hamburger").style.width = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("Hamburger").style.width = "0";
  document.body.style.backgroundColor = "white";
}

    // Js code to validate form
    function validateForm() {
        let x = document.forms["regg"]["logger"]["username"]["ID"]["password"].value;
        let y = document.querySelectorAll("moduleid")[0];
        
        if (x == "") {
          alert("Missing data required must be filled out");
          return false;
        }
         
        if (y > 8) {
            alert("Module ID is limited to 8 characters");
            return false;
        }
        
      }
     
    
    
