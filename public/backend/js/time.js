function display_ct7() {
    var x = new Date()
    var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
    hours = x.getHours( ) % 12;
    hours = hours ? hours : 12;
    hours=hours.toString().length==1? 0+hours.toString() : hours;
    
    var minutes=x.getMinutes().toString()
    minutes=minutes.length==1 ? 0+minutes : minutes;
    
    var seconds=x.getSeconds().toString()
    seconds=seconds.length==1 ? 0+seconds : seconds;
    
    //var month=(x.getMonth() +1).toString();
    var month=(x.getMonth() + 1);
    //month=month.length==1 ? 0+month : month;
    switch (month) {
        case 1: 
            month = 'January';
            break;
        case 2: 
            month = 'February';
            break;
        case 3: 
            month = 'March';
            break;
        case 4: 
            month = 'April';
            break;
        case 5: 
            month = 'May';
            break;
        case 6: 
            month = 'June';
            break;
        case 7: 
            month = 'July';
            break;
        case 8: 
            month = 'August';
            break;
        case 9: 
            month = 'September';
            break;
        case 10: 
            month = 'October';
            break;
        case 11: 
            month = 'November';
            break;
        case 12: 
            month = 'December';
            break;
    }
    
    var dt=x.getDate().toString();
    dt=dt.length==1 ? 0+dt : dt;
    
    var x1=dt + " " + month + " " + x.getFullYear(); 
    x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
    document.getElementById('ct7').innerHTML = x1;
    display_c7();
}
function display_c7() {
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()