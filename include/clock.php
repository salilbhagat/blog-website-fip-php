<style>
  #outer{width:300px;text-align:center;margin:0 auto}
  #cover{padding:2px 0;border:1px solid #111}
#da,#dt,#time{text-align:center; }
</style>

<u style="color: #f97300">
    <text style="color:#f97300;font-size: 15px" id=da></text>
    <text style="color:#f97300;font-size: 15px" id=dt></text>
    <text style="color:#f97300;font-size: 15px" id=time></text>
</u>

<script>
  function clock(){
    var date=new Date();
    var weekday=date.getDay();
    var year=date.getYear();
    var month=date.getMonth();
    var day=date.getDate();
    var hour=date.getHours();
    var minute=date.getMinutes();
    var second=date.getSeconds();
    var days=new Array ('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
    var months=new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
    var monthname=months[month];
    var dayname=days[weekday];
    var ap;if(year<1000){year=year+1900} if(hour>=12){hour=hour-12;ap='PM'}else{ap='AM'} if(minute<10){minute='0'+minute} if(second<10){second='0'+second};
    document.getElementById('time').innerHTML=' | '+hour+' : '+ minute +' : '+second+' ' +ap; 
    document.getElementById('da').innerHTML=dayname+',';
    document.getElementById('dt').innerHTML=day+' '+monthname+' '+year;
    setTimeout('clock()',1000 )}window.onload=function(){clock()}
</script>