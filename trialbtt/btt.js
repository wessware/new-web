var btt = document.getElementById("back-to-top"),
    body = document.body,
    docElem = document.documentElement,
    offset = 100,
    scrollPos, docHeight;
    isFirefox = navigator.userAgent.toLocaleLowerCase().indexOf( "firefox" ) > -1;
//calculate the document height
docHeight = Math.max(body.scrollHeight, body.offsetHeight, docElem.clientHeight, docElem.scrollHeight, docElem.offsetHeight);
 if (docHeight != undefined) {
     offset = docHeight / 8;
 }
 // add the scroll event listener
 window.addEventListener ("scroll", function (event){
     scrollPos = body.scrollTop || docElem.scrollTop;
     btt.className = (scrollPos > offset) ? "visible": "";
 });
 //this code above this line already worked !!
 //add a click event listener
 btt.addEventListener("click", function (event){
     //event.preventDefault();
     if (isFirefox) {
         docElem.scrollTop = 0;
     } else {
         body.scrollTop = 0;
     }
 });

 /* javscript counter to show when the set kenya event will be held in days 
 minutes and seconds */
//set the date of the event yet to happen
 let countDownDate = new Date("Jul 25, 2021 15:00:00").getTime();
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
 document.getElementById("demo").innerHTML = `${days} Days ${hours} Hours ${minutes} Minutes ${seconds} Seconds`;
 /// if the counter is finished show some text
 if (distance < 0 ) {
     clearInterval(x);
     document.getElementById("demo").innerHTML = "THE EVENT WAS SUCCESSFUL!!";
 }
 }, 1000);

 ///code for the readmore button for the blog page
$(".readmore-btn").on('click', () => {
    $(this).parent().toggleClass("showContent");
});


