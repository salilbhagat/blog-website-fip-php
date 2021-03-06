<style>
body {
  font-family: sans-serif;
   margin: 0;
   background: #f2f2f2;
}

h1 {
  text-align: center;
  margin-top: 50px;
}

p {
  text-align: center;
  margin-bottom:60px;
}

h4{
  text-align:center; 
  line-height:80px;
  font-weight:normal;

}

.masonry { /* Masonry container */
    -webkit-column-count: 4;
  -moz-column-count:4;
  column-count: 4;
  -webkit-column-gap: 1em;
  -moz-column-gap: 1em;
  column-gap: 1em;
   margin: 1.5em;
    padding: 0;
    -moz-column-gap: 1.5em;
    -webkit-column-gap: 1.5em;
    column-gap: 1.5em;
    font-size: .85em;
}
.item {
    display: inline-block;
    background: #fff;
    padding: 1em;
    margin: 0 0 1.5em;
    width: 100%;
	-webkit-transition:1s ease all;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-shadow: 2px 2px 4px 0 #ccc;
}
.item img{max-width:100%;}

@media only screen and (max-width: 320px) {
    .masonry {
        -moz-column-count: 1;
        -webkit-column-count: 1;
        column-count: 1;
    }
}

@media only screen and (min-width: 321px) and (max-width: 768px){
    .masonry {
        -moz-column-count: 2;
        -webkit-column-count: 2;
        column-count: 2;
    }
}
@media only screen and (min-width: 769px) and (max-width: 1200px){
    .masonry {
        -moz-column-count: 3;
        -webkit-column-count: 3;
        column-count: 3;
    }
}
@media only screen and (min-width: 1201px) {
    .masonry {
        -moz-column-count: 4;
        -webkit-column-count: 4;
        column-count: 4;
    }
}
</style>
<h1>Responsive Masonry Grid</h1>
<p>A pure CSS-only responsive masonry.</p>
<div class="masonry">
  <div class="item">
    1
    <img src="http://www.pixeden.com/media/k2/galleries/468/001-business-card-clip-brand-mock-up-vol-20-psd.jpg">
  </div>
  <div class="item">
    2
    <img src="http://www.graphicsfuel.com/wp-content/uploads/2015/11/branding-mockup-psd.jpg">
  </div>
  <div class="item">
    3
    <img src="http://www.pixeden.com/media/k2/galleries/511/001-business-card-mockup-vol-22-box-brand-psd.jpg">
  </div>
  <div class="item">
    4
    <img src="http://freede.ru/wp-content/uploads/2015/01/6546546542.jpg">
  </div>
  <div class="item">
    5
    <img src="https://blog.spoongraphics.co.uk/wp-content/uploads/2013/mockup/23.jpg">
  </div>
  <div class="item">
    6
    <img src="http://jquerypluginplus.com/wp-content/uploads/2015/09/Psd_Business_Card_MockUp.jpg">
  </div>
  <div class="item">
    7
    <img src="http://www.pixeden.com/media/k2/galleries/754/001-businesscard-mockup-presentation-psd-free-resource.jpg">
  </div>
  <div class="item">
    8
    <img src="http://designdecoding.com/wp-content/uploads/2014/09/001-a4-paper-brand-stationery-isometric-print-mock-up-psd-1.jpg">
  </div>
  <div class="item">
    9
    <img src="http://www.blugraphic.com/wp-content/uploads/2014/04/Folded-Page-Mockup1.jpg">
  </div>
  <div class="item">
    10
    <img src="http://cdn.designinstruct.com/files/542-free-branding-identity-mockups/29-branding-identity-mock-up-vol-8-full.jpg">
  </div>
  <div class="item">
    11
    <img src="http://www.thomsoon.com/img/portfolio/7clean/7-clean-business-card-mockup-psd-3.jpg">
  </div>
    <div class="item">
    12
    <img src="http://www.pixeden.com/media/k2/galleries/640/001-business-card-cardboard-mockup-presentation-wall-free-psd.jpg">
  </div>

  


</div>
<h4>Photo from <a href="https://www.google.com.tw/search?q=mock+up&espv=2&tbm=isch&source=lnt&tbs=isz:m&sa=X&ved=0ahUKEwidx5_s29DLAhVIj5QKHRblBf8QpwUIEw&dpr=1&biw=1920&bih=971"> google</a>.</h4>