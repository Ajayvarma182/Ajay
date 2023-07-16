const rating = document.querySelector('.rating');
const child = document.querySelectorAll('.child');
const feed = document.querySelector('.feed');
const btn = document.querySelector('#btn');

let icon;
rating.addEventListener('click',  (event) => {


icon = event.target.parentNode;


   for(let i=0; i<child.length; i++){
      console.log(child[i])
      child[i].classList.remove('active');
   }

   if(!icon.classList.contains('active')){
       icon.classList.add('active');
   }

})

btn.addEventListener('click', () => {
   console.log(icon);

   let user_feedback;
   let user_feedback_icon;

   if(icon === undefined){
      user_feedback = "";
   }else{
      user_feedback = icon.children[1].innerText;
      user_feedback_icon = icon.children[0].innerText;
   }

   if(user_feedback !== ""){
      console.log(user_feedback_icon)
      feed.innerHTML = `
         <div class="response-screen ">
            <p>${user_feedback_icon}</p>
            <h3>your Feedback: ${user_feedback}</h3>
            <p>💖 Thank You  for your response</p>
      
         <div class="feedback-button">
            <a href="feedback.html">Back</a>
           </div>
        </div>
      `
   }



})
$(document).ready(function() {
   // Handle form submission
   $('#feedbackForm').submit(function(event) {
     event.preventDefault(); // Prevent default form submission
 
     // Get form data
     var name = $('#name').val();
     
     var email = $('#email').val();
     var number =$('#contact').val();
   //   var Descriptions = $('#Description').val();
 
     // Perform form validation
     if (name === '' ||  email === '' || number === '' ) {
       alert('Please fill in all fields');
       return;
     }
 
     // Send form data to the server (you can replace this with your own backend endpoint)
   //   $.ajax({
   //     // url: '/submit-feedback', // Replace with your backend endpoint
   //     method: 'POST',
   //     data: {
   //       name: name,
   //       last: last,
   //       email: email,
   //       number: number,
   //       Descriptions: Descriptions,
         
 
   //     },
   //     success: function(response) {
   //       // Clear form fields
   //       $('#name').val('');
   //       $('#email').val('');
   //       $('#number').val('');
   //       $('#Descriptions').val('');
 
   //       // Display success message
   //       $('#successMessage').show();
   //     },
   //     error: function(xhr, status, error) {
   //       // Handle error
   //       alert('Error: ' + error);
   //     }
   //   });
   });
 });