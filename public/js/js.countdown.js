
/***********************************************
* Dynamic Countdown script- © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/


function cdtime(container, targetdate){
    if (!document.getElementById || !document.getElementById(container)) return
    this.container=document.getElementById(container)
    this.currentTime=new Date()
    this.targetdate=new Date(targetdate)
    this.timesup=false
    this.updateTime()
    }
    
    cdtime.prototype.updateTime=function(){
    var thisobj=this
    this.currentTime.setSeconds(this.currentTime.getSeconds()+1)
    setTimeout(function(){thisobj.updateTime()}, 1000) //update time every second
    }
    
    cdtime.prototype.displaycountdown=function(baseunit, functionref){
    this.baseunit=baseunit
    this.formatresults=functionref
    this.showresults()
    }
    
    cdtime.prototype.showresults=function(){
    var thisobj=this
    
    
    var timediff=(this.targetdate-this.currentTime)/1000 //difference btw target date and current date, in seconds
    if (timediff<0){ //if time is up
    this.timesup=true
    this.container.innerHTML=this.formatresults()
    return
    }
    var oneMinute=60 //minute unit in seconds
    var oneHour=60*60 //hour unit in seconds
    var oneDay=60*60*24 //day unit in seconds
    var dayfield=Math.floor(timediff/oneDay)
    var hourfield=Math.floor((timediff-dayfield*oneDay)/oneHour)
    var minutefield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour)/oneMinute)
    var secondfield=Math.floor((timediff-dayfield*oneDay-hourfield*oneHour-minutefield*oneMinute))
    if (this.baseunit=="hours"){ //if base unit is hours, set "hourfield" to be topmost level
    hourfield=dayfield*24+hourfield
    dayfield="n/a"
    }
    else if (this.baseunit=="minutes"){ //if base unit is minutes, set "minutefield" to be topmost level
    minutefield=dayfield*24*60+hourfield*60+minutefield
    dayfield=hourfield="n/a"
    }
    else if (this.baseunit=="seconds"){ //if base unit is seconds, set "secondfield" to be topmost level
    var secondfield=timediff
    dayfield=hourfield=minutefield="n/a"
    }
    this.container.innerHTML=this.formatresults(dayfield, hourfield, minutefield, secondfield)
    setTimeout(function(){thisobj.showresults()}, 1000) //update results every second
    }
    
    // digunakan untuk meload font pada input
      WebFontConfig = {
        google: { families: [ 'Quantico:400,400italic,700italic:latin' ] }
      };
      (function() {
        var wf = document.createElement('script');
        wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
        wf.type = 'text/javascript';
        wf.async = 'true';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })(); 
    
    /////CUSTOM FORMAT OUTPUT FUNCTIONS BELOW//////////////////////////////
    
    //Create your own custom format function to pass into cdtime.displaycountdown()
    //Use arguments[0] to access "Days" left
    //Use arguments[1] to access "Hours" left
    //Use arguments[2] to access "Minutes" left
    //Use arguments[3] to access "Seconds" left
    
    //The values of these arguments may change depending on the "baseunit" parameter of cdtime.displaycountdown()
    //For example, if "baseunit" is set to "hours", arguments[0] becomes meaningless and contains "n/a"
    //For example, if "baseunit" is set to "minutes", arguments[0] and arguments[1] become meaningless etc
    
    function displayCountDown(){
    if (this.timesup==false){ //if target date/time not yet met
    var displaystring="<span id='days'>"+arguments[0]+" <div>Hari</div></span> <span>"+arguments[1]+"<div>Jam</div></span> <span>"+arguments[2]+"<div>Menit</div></span> <span>"+arguments[3]+"<div>Detik</div></span>";
    }
    else{ //else if target date/time met
    // var displaystring="form.php" //Don't display any text
    document.getElementById("judul").style.display='none';
    document.getElementById("twd-container").style.margin='0% auto';
    // document.getElementById("twd-form").style.display="block";
    var displaystring="<div id='twd-form'><h2 class='head'>Masukan &nbsp Username &nbsp dan &nbsp Password &nbsp Anda</h2></br><form name='form1' id='twd-email-form' action='index.php' method='post'><input id='nopas' type='text' class='input' name='nopas' placeholder='Masukan Username Anda' required='required'/> </br></br> <input id='pass' type='text' class='input' name='pass' placeholder='Masukan Password Anda' required='required' /></br></br><button type='submit' class='button' onclick='lulusan();' style='width:20%'>Proses</button></form></div> <div style='font-style:italic;font-family:Arial;margin-top:20px'><H5>&nbsp Masukan &nbspUsername&nbsp dan&nbsp Password&nbsp sesuai&nbsp di&nbsp kartu&nbsp Ujian</H5> </div>";
    }
    return displaystring;
    }
    
    function lulusan(){
      var hr = new XMLHttpRequest(); // Create some variables we need to send to our PHP file
      var url = "loadDAta.php"; 
      var nopas = document.getElementById("nopas").value;
      var pass =document.getElementById("pass").value; 
      var vars = "nopas="+nopas+"&"+"pass="+pass;
        hr.open("POST", url, true); // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function(){ 
          if(hr.readyState == 4 && hr.status == 200){ 
              var return_data = hr.responseText; document.getElementById("count-down-container").innerHTML = return_data; }
          } // Send the data to PHP now... and wait for response to update the status div
        hr.send(vars); // Actually execute the request
        document.getElementById("twd-form").style.display='none';
        document.getElementById("count-down-container").innerHTML = "Checking Database...";
        
    
    }