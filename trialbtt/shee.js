///magdalene wanjiku article timer. 
 //set the date of the event yet to happen
 let countDownDate = new Date("Jul 28, 2020 23:30:25").getTime();
 //update the count down every one second
 let x = setInterval(function() {
 //get todays date
 let now = new Date().getTime();
 //find the distance between now and the set date of event
 let distance = countDownDate - now;
 //time calculations for days, hours, minutes and seconds
 let days = Math.floor(distance/(1000*60*60*24));
 let hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
 let minutes = Math.floor((distance % (1000*60*60))/(1000*60));
 let seconds = Math.floor((distance%(1000*60)) / 1000);
 //display the results in the element with the demo id
 document.getElementById("demo1").innerHTML = `${days} Days ${hours} Hours ${minutes} Minutes ${seconds} Seconds`;
 /// if the counter is finished show some text
 if (distance < 0 ) {
     clearInterval(x);
     document.getElementById("demo1").innerHTML = "EXPIRED";
 }
 }, 1000);