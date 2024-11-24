document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); 
  
    var confirmationMessage = document.getElementById("confirmationMessage");
    confirmationMessage.style.display = "block"; 

   
    setTimeout(function() {
        confirmationMessage.style.display = "none"; 
    }, 5000); 
});
