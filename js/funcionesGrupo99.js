const menuBtn = document.querySelector(".menu-toggle");
const topNav = document.querySelector(".navbar-style");
if(menuBtn && topNav){
menuBtn.addEventListener("click", function () {
    topNav.classList.toggle("navbar-style-open");
    menuBtn.classList.toggle("menu-open");
});
}

function ageCalculator() {  
  var userinput = document.querySelector(".date").value;  
  var dob = new Date(userinput);  
  if(userinput==null || userinput=='') {      
    return false;   
  } 
  
  else {  
    
  //calculate month difference from current date in time  
  var month_diff = Date.now() - dob.getTime();  
    
  //convert the calculated difference in date format  
  var age_dt = new Date(month_diff);   
    
  //extract year from date      
  var year = age_dt.getUTCFullYear();  
    
  //now calculate the age of the user  
  var age = Math.abs(year - 1970);  
    
  //display the calculated age  
 return alert(age)
  } 
  
  
}  

function validar() {
   var txtNombre = document.getElementById('nombre'); 
   var txtApellido = document.getElementById('apellido'); 

   if (txtNombre.value.length <= '2') {
      alert('El nombre debe tener mas de 2 caracteres');
      return false;
      
  } 


    if (txtApellido.value.length <= "1") {
      alert('El apellido debe tener mas de 1 caracter ');
      return false;
  }  
   
  }
  
  function mostrarAlertOperacion(){
    alert('Operacion Exitosa');
  }

  const boton = document.getElementById("btn"); boton.addEventListener("click", ()=>{ boton.style.color = "white"; boton.style.backgroundColor = "green"; });


  