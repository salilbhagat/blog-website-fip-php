 
<html lang="en" >
<head> 
    <link rel="stylesheet" >

</head>
<style>
body { 
    font-family: tahoma, sans-serif;
    font-size: 14px;
    line-height: 1.4; 
}

h1 {
    font-size: 24px;
    text-align: center;
}

h1 span {
    display: block;
    font-size: 18px;
    font-weight: normal;
}


.links ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.links li {
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}

.links li:hover {
    text-decoration: underline;
}
 
</style>
<body>
  <hr>
<h4 style="color: #F97300;" class="card-title"><b>SHARE</b></h4>
<div class="links">
    <ul>
        <button class="btn btn-light action-button" style="background-color:#4267B2;color: white"><a class="social-share-url facebook">facebook</a></button>
        <button class="btn btn-light action-button" style="background-color:#1DA1F2;color: white"><a class="social-share-url twitter">twitter</a></button>
        <button class="btn btn-light action-button" style="background-color:green;color: white"><a class="social-share-url whatsapp">whatsapp</a></button>
        <button class="btn btn-light action-button" style="background-color:#000000 ;color: white"><a class="clipboard">copy</a></button>
    </ul>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script >
setShareLinks();

function socialWindowScreen(url) {

    var left = (screen.width - 570)/2;
    var top = (screen.height - 570)/2;

    var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top="+top + ",left=" + left;

    window.open(url,"NewWindow",params);
} 
//
function  setShareLinks() {

    var pageUrl = encodeURIComponent(document.URL);
    var tweet = encodeURIComponent($("meta[property='og:description']").attr("content"));

    $(".social-share-url.facebook").on("click",function () {
        url = "https://www.facebook.com/sharer.php?u="+pageUrl;
        socialWindowScreen(url);
    })
    $(".social-share-url.twitter").on("click",function () {
        url = "https://www.twitter.com/intent/tweet?url=" +pageUrl + "&text=" +tweet;
        socialWindowScreen(url);
    })
    $(".social-share-url.linkedin").on("click",function () {
        url = "https://www.linkedin.com/shareArticle?mini=true&url=" +pageUrl;
        socialWindowScreen(url);
    })
    $(".social-share-url.whatsapp").on("click",function () {
        url = "https://wa.me/?text=" +pageUrl;
        socialWindowScreen(url);
    })
}
  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  
  /* Select the text field */
  
  copyText.select(); 
  
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  
  /* Alert the copied text */
  
  alert("Copied the text: " + copyText.value);
} 
var $temp = $("<input>");
var $url = $(location).attr('href');

$('.clipboard').on('click', function() {
  $("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");

})
</script>
</body>
</html>
