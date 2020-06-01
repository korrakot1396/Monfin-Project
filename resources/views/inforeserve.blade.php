@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <title>Vlava - One page responsive bootstrap site template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

  <link rel="stylesheet" href="css/style.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <!-- =======================================================
    Theme Name: Vlava
    Theme URL: https://bootstrapmade.com/vlava-free-bootstrap-one-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
<style>

/*
#1 = 85b0be
#2 = 95cbdd
*/

a:hover {
	color: #95cbdd;
}

/* menu */
.nav>li>a:hover {
	color: #95cbdd;
}

.navbar .navbar-nav > .active > a {
	color: #95cbdd;
	border-bottom: 4px solid #85b0be;
}

/* flexslider */
.flex-control-paging li a {
	background: #85b0be;
}


.testimonial span.author a {
	color: #95cbdd;
}

/* --- icon box hover --- */
.hi-icon-effect-5 .hi-icon {
	color: #85b0be;
	box-shadow: 0 0 0 4px #85b0be;
}
.no-touch .hi-icon-effect-5 .hi-icon:hover {
	background: #85b0be;
	box-shadow: 0 0 0 8px  #95cbdd;
}


/* portfolio */
.portfolio-item .portfolio-desc {
	background: #85b0be;
}

/* btn */
.btn-theme {
  background: #95cbdd;
}
.btn-theme:hover,.btn-theme:focus,.btn-theme:active{
  background: #85b0be;
}
.btn-cta,.btn-cta.btn-lg {
  background: #85b0be;
  border-color: #95cbdd;
}

.btn-cta:focus,.btn-cta:active{
   border-color: #85b0be;
}

/* footer */
.social-circle li a {
	background:#85b0be;
}

a.scrollup{
	background:#85b0be;
}

/*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/

/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/

body{
padding:0;
margin:0;
background:#dab411;
font-family: 'Lato', sans-serif !important;
}

h1,h2,h3,h4,h5,h6{
	margin:0;			   
}	
p{
	margin:0;
}
ul{
	margin:0;
	padding:0;
}
label{
	margin:0;
}
/*-- main --*/
.main{
	padding:110px 0;
}
.main h1{
	font-family: 'Viga', sans-serif;
    font-size: 36px;
    text-align: center;
    color: #fff;
    margin-bottom: 80px;
    text-transform: uppercase;
}
.content{
    margin: 0 auto;
    width: 67%;
}
.footer-grids{
	background: #282828;
    padding: 3em 3em;
}
p.footer-gd {
    color: #908F8F;
    font-weight: 500;
	font-size:14px;
}
p.footer-gd a {
	color:#fff;
}
p.footer-gd a:hover {
	color: #2e99ff;
}
.footer{
	float:left;
}
.footer h3{
    font-size: 18px;
    color: #fff;
    font-weight: 500;
    margin-bottom: 32px;
    font-family: 'Viga', sans-serif;
}
.footer.one {
    width: 37%;
}
p.adam{
	float:right;
	color:#6F6E6E !important;
	font-size:13px !important;
	margin-top:20px;
}
.footer.three {
    width: 23%;
}
.footer.one p{
	color:#908F8F;
	line-height:2em;
	font-size:14px;
}
.footer.two {
    width: 23%;
    margin: 0 8%;
}
.footer.two ul{
	margin:0;
	padding:0;
}
.footer.two ul li{
	list-style-type:none;
	display:block;
    line-height: 1.5em;
	font-size:14px;
}
.footer.two ul li a{
color:#908F8F;	
display:block;
}
.footer.two ul li a.fb {
	background: url('../images/social2.png') no-repeat 0px 4px;  
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb1 {
	background: url('../images/social1.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb2 {
    background: url('../images/social3.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb3 {
    background: url('../images/social4.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.two ul li a.fb4 {
    background: url('../images/social5.png') no-repeat 0px 4px;
    padding: 10px 0 12px 52px;
}
.footer.three ul li {
    list-style-type: none;
    display: block;
    color: #908F8F;
    font-size: 14px;
    line-height: 2.5em;
}
.footer.three ul li span {
    display: block;
}
.footer.three ul li:nth-child(1) {
    background: url('../images/icon2.png') no-repeat 0px 6px;
    padding-left: 38px;
}
.footer.three ul li:nth-child(2) {
    background: url('../images/icon3.png') no-repeat 0px 6px;
    padding-left: 38px;
}
.footer.three ul li a {
    background: url('../images/icon1.png') no-repeat 0px 6px;
    padding-left: 38px;
    display: block;
	color:#908F8F;
}
.copy-right-grids {
	padding: 20px 20px;
    background: #211E1E;
}
.copy-left{
	float:left;
}
.copy-right{
	float:right;
}
.copy-right ul li {
    list-style-type: none;
    display: inline-block;
    margin: 0 0px;
    border-left: 1px solid #444343;
    padding: 0 12px;
}
.copy-right ul li a {
    color: #908F8F;
	font-size:13px;
}
.copy-right ul li:nth-child(1) {
    border: none;
}
.footer.two ul li a.fb:hover {
    background: url('../images/social3hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb1:hover {
    background: url('../images/social2hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb2:hover {
    background: url('../images/social4hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb3:hover {
    background: url('../images/social5hover.png') no-repeat 0px 4px;
}
.footer.two ul li a.fb4:hover {
    background: url('../images/social1hover.png') no-repeat 0px 4px;
}
.footer.two ul li a:hover,.copy-right ul li a:hover,.footer.three ul li a:hover{
	color:#2e99ff;
}
/*-- responsive media queries --*/

@media (max-width: 1440px){
	.content {
		width: 73%;
	}	
}
@media (max-width: 1366px){
	.footer.one {
		width: 38%;
	}
	.footer-grids {
		padding: 2.5em 2.5em;
	}	
}
@media (max-width: 1280px){
	.main {
		padding: 80px 0;
	}	
}
@media (max-width: 1080px){
	.content {
		width: 80%;
	}
	.footer h3 {
		font-size: 19px;
	}
	.copy-left {
		float: none;
		text-align: center;
		margin-bottom: 15px;
	}
	.copy-right {
		float: none;
		text-align: center;
	}
	.footer.two ul li a.fb2 ,.footer.two ul li a.fb,.footer.two ul li a.fb1,.footer.two ul li a.fb3,.footer.two ul li a.fb4{
		padding: 10px 0 10px 38px;
	}
	.footer h3 {
		font-size: 18px;
	}
	.main h1 {
		font-size: 34px;
	}	
}
@media (max-width: 1024px){
	.footer-grids {
		padding: 2em 2em;
	}
	.content {
		width: 82%;
	}
	.main h1 {
		font-size: 33px;
		margin-bottom: 55px;
	}
}
@media (max-width: 991px){
	.footer.two {
		width: 27%;
		margin: 0 5%;
	}
	.footer.three {
		width: 25%;
	}	
}
@media (max-width: 800px){
	.content {
		width: 88%;
	}
	.footer.one p {
		font-size: 13px;
	}
	.footer.two ul li {
		font-size: 13px;
	}
	.footer.three ul li {
		font-size: 13px;
	}	
	.footer.three ul li:nth-child(1),.footer.three ul li:nth-child(2),.footer.three ul li a{
		padding-left: 32px;	
	}
	.footer h3 {
		font-size: 16px;
	}
}
@media (max-width: 768px){
	.content {
		width: 90%;
	}
	p.footer-gd {
		font-size: 13px;
	}	
	.main {
		padding: 135px 0;
	}
	.main h1 {
		margin-bottom: 120px;
	}
}
@media (max-width: 736px){
	.main {
		padding: 80px 0;
	}
	.main h1 {
		margin-bottom: 60px;
	}
	.footer.one {
		width: 35%;
	}
	.footer.two {
		width: 29%;
		margin: 0 4%;
	}
	.footer.three {
		width: 27%;
	}	
}
@media (max-width: 667px){
	.footer.one {
		width: 100%;
	}
	.footer.two {
		width: 48%;
		margin: 0 4% 0 0;
	}	
	.footer.three {
		width: 48%;
	}
	.footer.one {
		margin-bottom: 40px;
	}
}
@media (max-width: 640px){
	.main h1 {
		font-size: 30px;
	}	
	.footer-grids {
		padding: 2.5em 2.5em;
	}
}
@media (max-width: 600px){
	.main {
		padding: 65px 0;
	}
	.main h1 {
		font-size: 28px;
		margin-bottom: 45px;
	}
}
@media (max-width: 568px){
	
}
@media (max-width: 480px){
	.footer-grids {
		padding: 1.5em 1.5em;
	}
	.copy-right-grids {
		padding: 20px 10px;
	}
	.copy-right ul li {
		padding: 0 10px;
	}
	p.footer-gd {
		line-height: 1.8em;
	}	
	p.adam {
		margin-top: 9px;
	}
	.main h1 {
		font-size: 26px;
		margin-bottom: 38px;
	}
}
@media (max-width: 414px){
.footer.two {
    width: 100%;
}
.footer.three {
    width: 100%;
}
.footer h3 {
    margin-bottom: 18px;
}
.footer.one {
    margin-bottom: 0;
}
.footer.two {
    width: 100%;
    margin: 30px 0;
}
.footer-grids {
    padding: 2em 2em;
}
.main h1 {
    font-size: 25px;
}
.copy-right ul li {
    line-height: 1.8em;
}	
}
@media (max-width: 384px){
	
}
@media (max-width: 375px){
	.main h1 {
		font-size: 23px;
	}
	.main {
		padding: 60px 0;
	}	
}
@media (max-width: 320px){
	.main h1 {
		font-size: 21px;
	}
	.footer-grids {
		padding: 1em 1em;
	}
	.main {
		padding: 50px 0;
	}	
}

</style>
</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      	  <span class="fa fa-bars color-white"></span>
        </button>
        <div class="navbar-logo">
          <a href="index.html"><img data-0="width:155px;" data-300=" width:120px;" src="img/logo.png" alt=""></a>
        </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#section-about">About</a></li>
          <li><a href="#section-works">Portfolio</a></li>
          <li><a href="#section-contact">Contact</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to Vlava!</h2>
      <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
      <div>
        <a href="#section-services" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
  </section>

  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-screen">screen</a>
            </div>
          </div>
          <h3 class="text-bold">Responsive</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-location">location</a>
            </div>
          </div>
          <h3 class="text-bold">Multi usage</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-images">images</a>
            </div>
          </div>
          <h3 class="text-bold">Beautiful</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-archive">archive</a>
            </div>
          </div>
          <h3 class="text-bold">Valid HTML5</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-contract">Mobile</a>
            </div>
          </div>
          <h3 class="text-bold">Modern</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="#" class="hi-icon hi-icon-clock">Faster</a>
            </div>
          </div>
          <h3 class="text-bold">Fast loading</h3>
          <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

          <div class="clear"></div>
        </div>

      </div>
    </div>
  </section>

  <!-- spacer section:testimonial -->
  <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="align-center">
            <div class="flexslider testimonials-slider">
              <ul class="slides">
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial1.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
                    <br/>
                    <span class="author">&mdash; SARAH DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>

                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial2.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
												</h5>
                    <br/>
                    <span class="author">&mdash; NICOLE DOE <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
                <li>
                  <div class="testimonial clearfix">
                    <div class="mar-bot20">
                      <img alt="" src="img/testimonial/testimonial3.png" class="img-circle">
                    </div>
                    <i class="fa fa-quote-left fa-5x"></i>
                    <h5>
											Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
                    <br/>
                    <span class="author">&mdash; DASON KRUN <a href="#">www.siteurl.com</a></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- about -->
  <section id="section-about" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Behind Vlava</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member1.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Jason Doe</h4>
              <span>User experiences</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member2.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Timothy Clark</h4>
              <span>Web developer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member3.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Vicky Tan</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/member4.jpg" alt=""></figure>
            <div class="team-detail">
              <h4>Kevin Peterson</h4>
              <span>UI designer</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->

  <!-- spacer section:stats -->
  <section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-coffee fa-5x"></i>
            </div>
            <strong id="counter-coffee" class="number">500</strong><br>
            <span class="text">Black Coffee Cups</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-music fa-5x"></i>
            </div>
            <strong id="counter-music" class="number">345</strong><br>
            <span class="text">MP3 Songs</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-clock-o fa-5x"></i>
            </div>
            <strong id="counter-clock" class="number">1235</strong><br>
            <span class="text">Hard Minutes</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-heart fa-5x"></i>
            </div>
            <strong id="counter-heart" class="number">478</strong><br>
            <span class="text">Lovely Clients</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Portfolio</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn btn-small" data-filter="*">All</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn btn-small" data-filter=".print">Print</a></li>
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img1.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img1.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img2.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img2.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>


              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img3.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img3.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img4.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img4.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img5.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img5.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem webdesign">
                <div class="portfolio-item">
                  <img src="img/portfolio/img6.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img6.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img7.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img7.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem photography">
                <div class="portfolio-item">
                  <img src="img/portfolio/img8.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img8.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-md-4 isotopeItem print">
                <div class="portfolio-item">
                  <img src="img/portfolio/img9.jpg" alt="">
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">Portfolio name</a></h5>
                      <a href="img/portfolio/img9.jpg" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="clients" class="section clearfix bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo1.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo2.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo3.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo4.png">
            </div>

            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo5.png">
            </div>
            <div class="col-sm-2 align-center">
              <img alt="logo" src="img/clients/logo6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- map -->
  <section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cform" id="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" class="contactForm">

              <div class="field your-name form-group">
                <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                <div class="validation"></div>
              </div>
              <div class="field your-email form-group">
                <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                <div class="validation"></div>
              </div>
              <div class="field subject form-group">
                <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validation"></div>
              </div>

              <div class="field message form-group">
                <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validation"></div>
              </div>

              <div class="send-btn">
                <input type="submit" value="SEND MESSAGE" class="btn btn-theme">
              </div>

            </form>
          </div>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
            <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row align-center mar-bot20">
        <ul class="footer-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Privacy policy</a></li>
          <li><a href="#">Get in touch</a></li>
        </ul>
      </div>
      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>Copyright &copy; All rights reserved</p>
        </div>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Vlava
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>

@endsection