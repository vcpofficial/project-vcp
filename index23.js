// Implement a listener for speech segment updates
// voice detection
console.log("lol");


//for locking inspect page
document.addEventListener('contextmenu', event=> event.preventDefault()); 
document.onkeydown = function(e) {
  if(event.keyCode == 123) {
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'H'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'E'.charCodeAt(0)){
  return false;
  }
}
var speech = true;
window.SpeechRecognition = window.SpeechRecognition
        || window.webkitSpeechRecognition;

const recognition = new SpeechRecognition();
recognition.interimResults = true;
const words = document.querySelector('.words');
words.appendChild(p);

recognition.addEventListener('result', e => {
  const transcript = Array.from(e.results)
    .map(result => result[0])
    .map(result => result.transcript)
    .join('')

  document.getElementById("p").innerHTML = transcript;
  console.log(transcript);
});

if (speech == true) {
  recognition.start();
  recognition.addEventListener('end', recognition.start);
}



  function myfunction(){
    
    let submitpost = confirm("Are you sure to submit ?");
    if(submitpost)
    {
      console.log("you post deleted");
    }
    else{
      console.log("not deleted");
    }
  }



  



//   $( ".change" ).on("click", function() {
//     if( $( "body" ).hasClass( "dark" )) {
//         $( "body" ).removeClass( "dark" );
//         $( ".change" ).text( "dark" );
//     } else {
//         $( "body" ).addClass( "dark" );
//         $( ".change" ).text( "light" );
//     }
// });





   