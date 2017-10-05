     var count=100;
     var counter=setInterval(timer,1000);//1000 will run it every 1 seconds

     function timer(){
       count =count-1;
       if(count<=0){
         clearInterval(counter);
         //counter ended do someting here
     window.location.href='http://localhost/attendance%20system';
         return;
       }
       //Do code for showing the number of seconds here
       document.getElementById('timer').innerHTML='Please wait...Redirecting in ' + count;
     }
