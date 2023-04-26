
function Alert(){
    alert("There is no page for this selection because this is a limited prototype.");
}

function AddAppointment(){
    window.open("addform.html", "_self");
}

function CancelAppointment(){
    window.open("cancelform.html", "_self");
}

function ViewAppts2(){
    
    var outputMond = document.getElementById('mondayoutput');
    var outputMond1 = document.getElementById('mondayoutput1');
    var outputMond2 = document.getElementById('mondayoutput2');


    var day2room1 = document.getElementById('room1for2');
    if (day2room1.style.display === "none"){
        day2room1.style.display = "block";
        outputMond.style.display = "block"; 
    }
    else {
        day2room1.style.display = "none";
        outputMond.style.display = "none";
    }
    
    var day2room2 = document.getElementById('room2for2');
    if (day2room2.style.display === "none"){
        day2room2.style.display = "block";
        outputMond.style.display = "block";
    }
    else {
        day2room2.style.display = "none";
        outputMond.style.display = "none";
    }

    var day2room3 = document.getElementById('room3for2');
    if (day2room3.style.display === "none"){
        day2room3.style.display = "block";
        outputMond1.style.display = "block";

    }
    else {
        day2room3.style.display = "none";
        outputMond1.style.display = "none";
    }
    
    var day2room4 = document.getElementById('room4for2');
    if (day2room4.style.display === "none"){
        day2room4.style.display = "block";
        outputMond1.style.display = "block";
    }
    else {
        day2room4.style.display = "none";
        outputMond1.style.display = "none";
    }
    
    var day2room5 = document.getElementById('room5for2');
    if (day2room5.style.display === "none"){
        day2room5.style.display = "block";
        outputMond2.style.display = "block";
    }
    else {
        day2room5.style.display = "none";
        outputMond2.style.display = "none";
    }
    var day2room6 = document.getElementById('room6for2');
    if (day2room6.style.display === "none"){
        day2room6.style.display = "block";
        outputMond2.style.display = "block";
    }
    else {
        day2room6.style.display = "none";
        outputMond2.style.display = "none";
    }
   
} 

function ViewAppts3(){
    
    var day3room1 = document.getElementById('room1for3');
    var outputTues = document.getElementById('tuesdayoutput');
    var outputTues1 = document.getElementById('tuesdayoutput1');
    var outputTues2 = document.getElementById('tuesdayoutput2');
    if (day3room1.style.display === "none"){
        day3room1.style.display = "block";
        outputTues.style.display = "block";
    }
    else {
        day3room1.style.display = "none";
        outputTues.style.display = "none";
    }
    
    var day3room2 = document.getElementById('room2for3');
    if (day3room2.style.display === "none"){
        day3room2.style.display = "block";
        outputTues.style.display = "block";
    }
    else {
        day3room2.style.display = "none";
        outputTues.style.display = "none";
    }

    var day3room3 = document.getElementById('room3for3');
    if (day3room3.style.display === "none"){
        day3room3.style.display = "block";
        outputTues1.style.display = "block";
    }
    else {
        day3room3.style.display = "none";
        outputTues1.style.display = "none";
    }
    
    var day3room4 = document.getElementById('room4for3');
    if (day3room4.style.display === "none"){
        day3room4.style.display = "block";
        outputTues1.style.display = "block";
    }
    else {
        day3room4.style.display = "none";
        outputTues1.style.display = "none";
    }
    
    var day3room5 = document.getElementById('room5for3');
    if (day3room5.style.display === "none"){
        day3room5.style.display = "block";
        outputTues2.style.display = "block";
    }
    else {
        day3room5.style.display = "none";
        outputTues2.style.display = "none";
    }
    var day3room6 = document.getElementById('room6for3');
    if (day3room6.style.display === "none"){
        day3room6.style.display = "block";
        outputTues2.style.display = "block";
    }
    else {
        day3room6.style.display = "none";
        outputTues2.style.display = "none";
    }
   
} 

function ViewAppts4(){
  
    var day4room1 = document.getElementById('room1for4');
    var outputWed = document.getElementById('wednesdayoutput');
    var outputWed1 = document.getElementById('wednesdayoutput1');
    var outputWed2 = document.getElementById('wednesdayoutput2');
    if (day4room1.style.display === "none"){
        day4room1.style.display = "block";
        outputWed.style.display = "block";
    }
    else {
        day4room1.style.display = "none";
        outputWed.style.display = "none";
    }
    
    var day4room2 = document.getElementById('room2for4');
    if (day4room2.style.display === "none"){
        day4room2.style.display = "block";
        outputWed.style.display = "block";
    }
    else {
        day4room2.style.display = "none";
        outputWed.style.display = "none";
    }

    var day4room3 = document.getElementById('room3for4');
    if (day4room3.style.display === "none"){
        day4room3.style.display = "block";
        outputWed1.style.display = "block";
    }
    else {
        day4room3.style.display = "none";
        outputWed1.style.display = "none";
    }
    
    var day4room4 = document.getElementById('room4for4');
    if (day4room4.style.display === "none"){
        day4room4.style.display = "block";
        outputWed1.style.display = "block";
    }
    else {
        day4room4.style.display = "none";
        outputWed1.style.display = "none";
    }
    
    var day4room5 = document.getElementById('room5for4');
    if (day4room5.style.display === "none"){
        day4room5.style.display = "block";
        outputWed2.style.display = "block";
    }
    else {
        day4room5.style.display = "none";
        outputWed2.style.display = "none";
    }
    var day4room6 = document.getElementById('room6for4');
    if (day4room6.style.display === "none"){
        day4room6.style.display = "block";
        outputWed2.style.display = "block";
    }
    else {
        day4room6.style.display = "none";
        outputWed2.style.display = "none";
    }
   
} 

function ViewAppts5(){
  
    var day5room1 = document.getElementById('room1for5');
    var outputThu = document.getElementById('thursdayoutput');
    var outputThu1 = document.getElementById('thursdayoutput1');
    var outputThu2 = document.getElementById('thursdayoutput2');
    if (day5room1.style.display === "none"){
        day5room1.style.display = "block";
        outputThu.style.display = "block";
    }
    else {
        day5room1.style.display = "none";
        outputThu.style.display = "none";
    }
    
    var day5room2 = document.getElementById('room2for5');
    if (day5room2.style.display === "none"){
        day5room2.style.display = "block";
        outputThu.style.display = "block";
    }
    else {
        day5room2.style.display = "none";
        outputThu.style.display = "none";
    }

    var day5room3 = document.getElementById('room3for5');
    if (day5room3.style.display === "none"){
        day5room3.style.display = "block";
        outputThu1.style.display = "block";
    }
    else {
        day5room3.style.display = "none";
        outputThu1.style.display = "none";
    }
    
    var day5room4 = document.getElementById('room4for5');
    if (day5room4.style.display === "none"){
        day5room4.style.display = "block";
        outputThu1.style.display = "block";
    }
    else {
        day5room4.style.display = "none";
        outputThu1.style.display = "none";
    }
    
    var day5room5 = document.getElementById('room5for5');
    if (day5room5.style.display === "none"){
        day5room5.style.display = "block";
        outputThu2.style.display = "block";
    }
    else {
        day5room5.style.display = "none";
        outputThu2.style.display = "none";
    }
    var day5room6 = document.getElementById('room6for5');
    if (day5room6.style.display === "none"){
        day5room6.style.display = "block";
        outputThu2.style.display = "block";
    }
    else {
        day5room6.style.display = "none";
        outputThu2.style.display = "none";
    }
   
} 

function ViewAppts6(){
  
    var day6room1 = document.getElementById('room1for6');
    var outputFri = document.getElementById('fridayoutput');
    var outputFri1 = document.getElementById('fridayoutput1');
    var outputFri2 = document.getElementById('fridayoutput2');
    if (day6room1.style.display === "none"){
        day6room1.style.display = "block";
        outputFri.style.display = "block";
    }
    else {
        day6room1.style.display = "none";
        outputFri.style.display = "none";
    }
    
    var day6room2 = document.getElementById('room2for6');
    if (day6room2.style.display === "none"){
        day6room2.style.display = "block";
        outputFri.style.display = "block";
    }
    else {
        day6room2.style.display = "none";
        outputFri.style.display = "none";
    }

    var day6room3 = document.getElementById('room3for6');
    if (day6room3.style.display === "none"){
        day6room3.style.display = "block";
        outputFri1.style.display = "block";
    }
    else {
        day6room3.style.display = "none";
        outputFri1.style.display = "none";
    }
    
    var day6room4 = document.getElementById('room4for6');
    if (day6room4.style.display === "none"){
        day6room4.style.display = "block";
        outputFri1.style.display = "block";
    }
    else {
        day6room4.style.display = "none";
        outputFri1.style.display = "none";
    }
    
    var day6room5 = document.getElementById('room5for6');
    if (day6room5.style.display === "none"){
        day6room5.style.display = "block";
        outputFri2.style.display = "block";
    }
    else {
        day6room5.style.display = "none";
        outputFri2.style.display = "none";
        
    }
    var day6room6 = document.getElementById('room6for6');
    if (day6room6.style.display === "none"){
        day6room6.style.display = "block";
        outputFri2.style.display = "block";
    }
    else {
        day6room6.style.display = "none";
        outputFri2.style.display = "none";
    }
   
} 




