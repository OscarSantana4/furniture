<!DOCTYPE html>
<!--[if IE 7]><html class = "ie7"><![endif]-->
<!--[if IE 8]><html class = "ie8"><![endif]-->
<!--[if IE 9]><html class = "ie9"><![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
<html>
<!--<![endif]-->
<head>
<title>Opening - Job Board HTML Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.11.0.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<!--[if IE]><script src="js/html5.js"></script><link rel="stylesheet" type="text/css" href="css/ie.css"><![endif]-->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="login">
<div class="wrapper login-wrapper">
    <h1>LOGIN - HOMESPOT</h1>
  </header>
  <!-- header -->
  <div class="post">
    <div class="post-header">
      <h2>Sign in</h2>
    </div>
    <!-- .post-header -->
    <?php echo validation_errors(); ?>
    <?php echo form_open('LoginController/index'); ?>
      <div class="col-xs-8">
      <input required  id="ex2" class="form-control" name="email" type="email" placeholder="Email" />
      </div>
      <div class="col-xs-8">
      <input required  id="ex2" class="form-control" name="contrasena" type="password" placeholder="Contrasena" />
       </div>
      <a href="reset_password.html">Recordar Contrasena?</a>

      <input type="submit" value="Sign in" />
    </form>
    <!-- .login-form -->
    <div class="post-footer">
      <p>No tienes cuenta? <a href="sign_up.php">Sign Up</a></p>
    </div>
    <!-- .post-footer -->
  </div>
  <!-- .post -->
</div>
<!-- .wrapper -->

<style type="text/css">
  *{
    margin:0;
    padding:0
}
a img{
    border:none
}
.wrapper{
    background:#f9f9f9;
    font:13px OpenSans;
    min-width:1200px;
    overflow:visible
}
.version4.wrapper{
    overflow:hidden
}
@font-face{
    font-family:OpenSans;
    src:url('../fonts/OpenSans-Regulard41d.eot?#iefix') format('embedded-opentype'),url('../fonts/OpenSans-Regular.woff') format('woff'),url('../fonts/OpenSans-Regular.ttf') format('truetype'),url('../fonts/OpenSans-Regular.svg#copperplate_gothic_bolRg') format('svg')
}
@font-face{
    font-family:OpenSans-Bold;
    src:url('../fonts/OpenSans-Boldd41d.eot?#iefix') format('embedded-opentype'),url('../fonts/OpenSans-Bold.woff') format('woff'),url('../fonts/OpenSans-Bold.ttf') format('truetype'),url('../fonts/OpenSans-Bold.svg#copperplate_gothic_bolRg') format('svg')
}
@font-face{
    font-family:OpenSans-Light;
    src:url('../fonts/OpenSans-Lightd41d.eot?#iefix') format('embedded-opentype'),url('../fonts/OpenSans-Light.woff') format('woff'),url('../fonts/OpenSans-Light.ttf') format('truetype'),url('../fonts/OpenSans-Light.svg#copperplate_gothic_bolRg') format('svg')
}
@font-face{
    font-family:OpenSans-ExtraBold;
    src:url('../fonts/OpenSans-ExtraBoldd41d.eot?#iefix') format('embedded-opentype'),url('../fonts/OpenSans-ExtraBold.woff') format('woff'),url('../fonts/OpenSans-ExtraBold.ttf') format('truetype'),url('../fonts/OpenSans-ExtraBold.svg#copperplate_gothic_bolRg') format('svg')
}
header{
    background:#fff;
    border-bottom:1px solid #cdcdcd;
    width:100%;
    height:73px
}
.with-slider header{
    height:72px
}
header a{
    text-decoration:none
}
.site-header{
    width:1200px;
    margin:0 auto
}
.site-title{
    float:left;
    padding:12px 70px 25px 30px;
    margin-left:130px
}
.site-title h1{
    text-transform:uppercase;
    padding:1px 0 0 3px;
    display:inline-block
}
.site-title a{
    font:21px OpenSans-ExtraBold;
    color:#3d4346
}
.site-nav ul{
    list-style:none
}
.site-nav li{
    position:relative
}
.site-nav>ul>li{
    float:left
}
.site-nav a{
    color:#566266;
    padding:24px 20px 32px;
    display:block;
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.site-nav>ul>.current_page_item>a{
    background:#f1f1f1;
    border-bottom:4px solid #3b4346;
    color:#566266;
    padding-bottom:28px
}
.site-nav li:hover>a{
    color:#a8abb0
}
.sub-menu{
    display:none;
    position:absolute;
    z-index:200
}
.sub-menu a{
    background:#f1f1f1;
    border:1px solid #cdcdcd;
    min-width:130px;
    padding:24px 20px;
    margin-top:-1px
}
.site-nav li:hover>.sub-menu{
    display:block
}
.user-area{
    background:url('../images/dropdown.png') right 34px no-repeat #fff;
    cursor:pointer;
    float:right;
    margin-right:131px;
    position:relative;
    top:-1px;
    height:74px
}
.avatar{
    width:40px;
    height:40px;
    position:relative;
    top:16px;
    padding-right:7px
}
.user-area p{
    font:14px OpenSans;
    color:#666;
    display:inline-block;
    padding-right:25px
}
.user-area span{
    font:14px OpenSans-Bold
}
.user-options{
    background:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    display:none;
    list-style:none;
    padding:5px 0 7px;
    position:absolute;
    top:90px;
    left:-6px;
    z-index:100
}
.user-options a{
    display:block;
    color:#999;
    padding:10px 20px;
    width:100px
}
.user-options a:hover{
    background:#f8f8f8;
    border:1px solid #e0e0e0;
    border-left:none;
    border-right:none;
    color:#5a5a5a;
    padding:9px 20px
}
.user-options:before{
    border:6px solid;
    border-color:transparent;
    border-bottom-color:#fff;
    content:'';
    position:absolute;
    top:-11px;
    left:20px;
    width:0;
    height:0;
    z-index:10
}
.user-options:after{
    border:5px solid;
    border-color:transparent;
    border-bottom-color:#ccc;
    content:'';
    position:absolute;
    top:-11px;
    left:21px;
    width:0;
    height:0;
    z-index:9
}
.slider{
    text-align:center;
    position:relative
}
.version2 .slide,.version2 .slider{
    height:452px
}
.version3 .slide,.version3 .slider{
    height:582px
}
.version4 .slide,.version4 .slider{
    height:449px
}
.slide{
    width:100%;
    position:absolute;
    overflow:hidden
}
.slide-img{
    height:auto;
    position:relative
}
.slide-blackout{
    background:rgba(0,0,0,.6);
    position:absolute;
    width:100%;
    height:100%;
    left:0;
    top:0
}
.sliderBtns{
    position:absolute;
    z-index:100
}
.version2 .sliderBtns{
    top:273px
}
.version3 .sliderBtns,.version4 .sliderBtns{
    top:402px
}
.slider h2{
    position:absolute;
    top:200px;
    width:100%;
    text-align:center
}
.slider p{
    font:14px OpenSans;
    position:absolute;
    left:0;
    right:0;
    margin:0 auto;
    letter-spacing:-.3px
}
.slide-1 h2{
    font:60px OpenSans-Light;
    color:#fff;
    top:49px
}
.slide-1 p{
    color:#8f9294;
    width:462px;
    top:141px
}
.learn-more{
    right:0;
    margin:0 auto
}
.slide-2 h2{
    font:32px OpenSans-Light;
    color:#fff;
    top:59px
}
.slide-2 p{
    color:#fff;
    opacity:.5;
    width:462px;
    top:110px
}
img.slider-search-results{
    position:absolute;
    width:305px;
    height:220px;
    right:0;
    left:0;
    margin:0 auto;
    z-index:10;
    top:150px
}
.slide-3 h2{
    font:50px OpenSans-Light;
    color:#fff;
    top:88px;
    line-height:1.2em;
    width:650px;
    text-align:left;
    right:0;
    left:468px;
    margin:0 auto
}
.slide-3 .slider p{
    color:#fff;
    opacity:.5;
    width:329px;
    top:223px;
    left:149px;
    text-align:left
}
img.slide-phone{
    position:absolute;
    width:318px;
    height:521px;
    right:0;
    left:-581px;
    margin:0 auto;
    z-index:10;
    top:70px
}
.app-store{
    width:152px;
    position:absolute;
    right:0;
    left:-27px;
    margin:0 auto;
    top:301px
}
.version2 .app-store{
    top:212px
}
.slider-indicator{
    background:#fff;
    border-radius:50%;
    box-shadow:0 0 5px #000;
    -webkit-box-shadow:0 0 5px #000;
    width:10px;
    height:10px;
    float:left;
    margin:5px;
    opacity:.3;
    cursor:pointer;
    -moz-transition:all .3s ease-in-out;
    -webkit-transition:all .3s ease-in-out;
    -o-transition:all .3s ease-in-out;
    -ms-transition:all .3s ease-in-out;
    transition:all .3s ease-in-out
}
.slider-indicator:hover{
    opacity:.5
}
.slider-indicator.current{
    background:#9da1a2;
    box-shadow:inset 0 1px 2px #000;
    -webkit-box-shadow:inset 0 1px 2px #000;
    opacity:1
}
.learn-more{
    font:14px OpenSans-Bold;
    color:#fff;
    opacity:.2;
    position:absolute;
    top:203px;
    left:0;
    width:100%;
    text-align:center;
    text-transform:uppercase;
    text-decoration:none;
    z-index:100
}
.main{
    padding:38px 129px 79px;
    width:942px;
    margin:auto
}
.version1 .main{
    padding-bottom:76px
}
.user-profile .main,.version4 .main{
    padding-bottom:48px
}
.opening-page .main{
    padding-bottom:50px
}
.opening-header{
    background:#f1f1f1;
    border:1px solid #cdcdcd;
    border-radius:5px;
    width:100%;
    height:238px;
    margin-bottom:15px
}
.opening-header.no-image{
    padding:107px 271px 0 280px;
    width:389px;
    height:131px
}
.content{
    float:left;
    width:672px
}
.left-sidebar .content{
    float:right
}
.opening-search{
    margin-bottom:18px;
    z-index:100
}
.search-top{
    background:#3b4346;
    border:1px solid #cdcdcd;
    border-bottom:none;
    border-radius:5px 5px 0 0;
    padding:22px 0 39px 30px;
    position:relative
}
.search-top label{
    font:11px OpenSans;
    color:#fff;
    text-transform:uppercase;
    position:relative;
    width:290px
}
.search-field{
    float:left;
    padding-right:27px;
    position:relative
}
.left-sidebar .search-field{
    padding-right:18px
}
.search-top input[type=text]{
    background-color:#ebebeb;
    border:1px solid #31373a;
    border-radius:5px;
    box-shadow:0 1px 0 #585f62;
    -webkit-box-shadow:0 1px 0 #585f62;
    font:13px OpenSans;
    color:#566266;
    padding:12px 5px 14px 35px;
    margin-top:8px;
    width:250px;
    position:relative;
    left:-1px;
    outline:0
}
.icon{
    position:absolute;
    top:38px;
    left:10px;
    width:16px;
    height:16px
}
#keyword+.icon{
    background:url('../images/sprites.png') -416px -18px no-repeat
}
#location+.icon{
    background:url('../images/sprites.png') -515px -18px no-repeat
}
#category+.icon{
    background:url('../images/sprites.png') -217px -18px no-repeat
}
.search-top .with-dropdown{
    background:url('../images/dropdown.png') 273px 19px no-repeat #ebebeb
}
.with-slider .search-wrapper{
    position:relative;
    margin-bottom:50px
}
.with-slider .opening-search{
    position:absolute;
    top:-172px;
    left:1px
}
.with-slider .search-top{
    border:none;
    border-radius:5px 5px 0 0;
    padding:23px 30px 18px
}
.full-width .search-top:after,.with-slider .search-top:after{
    display:inline-block
}
.with-slider .search-top label{
    width:270px
}
.with-slider .search-field{
    padding-right:18px
}
.with-slider .search-top input[type=text]{
    background-position-x:252px;
    width:230px
}
.with-slider .zip-codes{
    right:1px
}
.with-slider .search-top #category{
    background-position-x:183px;
    width:160px
}
.search-button{
    background:-moz-linear-gradient(#e4d24a,#dec83d);
    background:-webkit-linear-gradient(#e4d24a,#dec83d);
    background:-o-linear-gradient(#e4d24a,#dec83d);
    background:-ms-linear-gradient(#e4d24a,#dec83d);
    background:linear-gradient(#e4d24a,#dec83d);
    box-shadow:inset 0 1px 1px rgba(255,255,255,.5);
    -webkit-box-shadow:inset 0 1px 1px rgba(255,255,255,.5);
    border:1px solid #2a2c0f;
    border-radius:5px;
    height:46px;
    width:81px;
    margin-top:25px;
    position:relative;
    cursor:pointer
}
.search-button:after{
    background:url('../images/sprites.png') -215px -65px no-repeat;
    display:block;
    position:absolute;
    content:'';
    width:16px;
    height:16px;
    right:0;
    left:0;
    top:14px;
    bottom:0;
    margin:0 auto
}
.search-button:hover{
    background:-moz-linear-gradient(#dec83d,#e4d24a);
    background:-webkit-linear-gradient(#dec83d,#e4d24a);
    background:-o-linear-gradient(#dec83d,#e4d24a);
    background:-ms-linear-gradient(#dec83d,#e4d24a);
    background:linear-gradient(#dec83d,#e4d24a)
}
.search-button:active{
    box-shadow:inset 0 1px 0 #636824,inset 0 -1px 0 rgba(255,255,255,.4)
}
.center{
    margin:0 auto;
    width:970px
}
.full-width .search-wrapper{
    margin:0;
    top:-1px;
    height:183px
}
.full-width .opening-search{
    margin:0 auto;
    top:0;
    width:100%
}
.full-width .search-top{
    border:none;
    border-radius:0;
    padding:23px 30px 15px 60px
}
.full-width .search-button{
    width:71px
}
.full-width .search-top #category,.full-width .search-top input[type=text]{
    background-position-x:252px;
    width:230px
}
.search-top input[type=text]:focus{
    background:#fff
}
.zip-codes{
    border-bottom:1px dashed #7f8486;
    font:11px OpenSans;
    color:#7f8486;
    text-transform:uppercase;
    text-decoration:none;
    position:absolute;
    padding-bottom:2px;
    top:0;
    right:0;
    width:56px
}
@-moz-document url-prefix(){
    .zip-codes{
        left:230px;
        width:65px
    }
    .with-slider .zip-codes{
        left:210px
    }
    .with-slider .opening-search{
        top:-150px
    }
    .full-width .opening-search{
        top:0
    }
}
.search-bottom{
    background:#fff;
    border:1px solid #cdcdcd;
    border-top:none;
    border-radius:0 0 5px 5px;
    box-shadow:1px 1px 1px rgba(0,0,0,.1),-1px 0 1px rgba(0,0,0,.1);
    -webkit-box-shadow:1px 1px 1px rgba(0,0,0,.1),-1px 0 1px rgba(0,0,0,.1);
    padding:12px 31px 20px 30px;
    position:relative
}
.with-slider .search-bottom{
    padding:11px 31px 22px 29px
}
.full-width .search-bottom{
    border-radius:0
}
.search-bottom .center{
    padding-left:33px
}
.dropdown{
    border:1px solid rgba(0,0,0,.2);
    border-radius:5px;
    box-shadow:1px 1px 3px rgba(0,0,0,.1),-1px 0 3px rgba(0,0,0,.1);
    -webkit-box-shadow:1px 1px 3px rgba(0,0,0,.1),-1px 0 3px rgba(0,0,0,.1);
    display:none;
    list-style:none;
    text-transform:none;
    position:absolute;
    overflow:hidden;
    margin-top:7px;
    left:-2px;
    width:100%;
    z-index:100
}
.dropdown li{
    background:#fff;
    border-top:1px dashed #cdcdcd;
    color:#bfc1c5;
    padding:12px 10px 22px 8px;
    position:relative
}
.dropdown li:first-child{
    border:none;
    padding-top:13px
}
.dropdown li:hover{
    color:#566266
}
.dropdown li.checked{
    background:#ebebeb;
    color:#566266
}
.checkbox{
    background:url('../images/sprites.png') 0 0 no-repeat;
    width:22px;
    height:22px;
    position:relative;
    display:inline-block;
    margin-right:8px;
    top:7px;
    left:0
}
.checkbox-label{
    cursor:pointer
}
.dark-label,.dark-label.contract,.dark-label.freelance,.dark-label.full-time{
    background:#c4c4c4;
    border-radius:3px;
    cursor:pointer;
    font:12px OpenSans;
    color:#fff;
    padding:3px 10px 3px 8px;
    margin-right:7px;
    position:relative;
    -moz-transition:background-color .5s ease-in-out;
    -webkit-transition:background-color .5s ease-in-out;
    -o-transition:background-color .5s ease-in-out;
    -ms-transition:background-color .5s ease-in-out;
    transition:background-color .5s ease-in-out
}
.home-v2 .dark-label{
    padding:2px 10px 4px 8px
}
.home-v2 .dark{
    top:7px
}
.dark-label:hover{
    background:#ababab
}
.dark-label.checked{
    background:#3b4346
}
.dark{
    background:url('../images/sprites.png') center no-repeat #9d9d9d;
    border-radius:3px 0 0 3px;
    width:22px;
    height:21px;
    position:relative;
    display:inline-block;
    top:6px;
    left:-8px;
    -moz-transition:background-color .5s ease-in-out;
    -webkit-transition:background-color .5s ease-in-out;
    -o-transition:background-color .5s ease-in-out;
    -ms-transition:background-color .5s ease-in-out;
    transition:background-color .5s ease-in-out
}
.dark-label:hover>.dark{
    background-color:#898989
}
.dark-label.checked>.dark{
    background-color:#2f3638
}
.dark-label.full-time.checked,.dark-label.full-time:hover{
    background:#d59842
}
.dark-label.full-time.checked>.dark,.dark-label.full-time:hover>.dark{
    background-color:#946a30
}
.dark-label.contract.checked,.dark-label.contract:hover{
    background:#32c1b2
}
.dark-label.contract.checked>.dark,.dark-label.contract:hover>.dark{
    background-color:#289a8e
}
.dark-label.freelance.checked,.dark-label.freelance:hover{
    background:#5886ba
}
.dark-label.freelance.checked>.dark,.dark-label.freelance:hover>.dark{
    background-color:#466b95
}
.warning{
    background:#f1e2a4;
    border:1px solid #ccbf8b;
    border-radius:5px;
    color:#998f68;
    text-align:justify;
    line-height:1.65;
    padding:14px 46px 15px 88px;
    margin-bottom:19px;
    position:relative
}
.warning span{
    font:13px OpenSans-Bold
}
.warning .warning-img{
    background:url('../images/sprites.png') -250px -50px no-repeat;
    position:absolute;
    width:48px;
    height:48px;
    left:20px;
    top:20px
}
.warning .close-btn{
    background:url('../images/sprites.png') -370px -71px no-repeat;
    position:absolute;
    cursor:pointer;
    width:8px;
    height:8px;
    top:9px;
    right:9px
}
.post{
    background:#fff;
    border:1px solid #cdcdcd;
    border-radius:5px;
    box-shadow:1px 1px 2px rgba(100,100,100,.1),-1px -1px 2px rgba(100,100,100,.1);
    -webkit-box-shadow:1px 1px 2px rgba(100,100,100,.1),-1px -1px 2px rgba(100,100,100,.1);
    overflow:hidden;
    position:relative;
    margin-bottom:17px
}
.post-header{
    background:#f1f1f1;
    border-bottom:1px solid #cdcdcd;
    box-shadow:0 1px 3px rgba(0,0,0,.1);
    -webkit-box-shadow:0 1px 3px rgba(0,0,0,.1);
    padding:22px 21px 23px 20px;
    position:relative
}
.opening-info .post-header{
    padding-bottom:21px
}
.post-header h2{
    font:14px OpenSans-Bold;
    color:#4d4d4d;
    display:inline-block;
    margin-right:15px;
    text-transform:uppercase
}
.about{
    margin-bottom:19px
}
.about .post-header{
    padding:21px 21px 23px 30px
}
.post-header a{
    text-decoration:none;
    color:#a8abb0;
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.post-header .edit-link{
    font:14px OpenSans
}
.post-header a.company-openings{
    float:right
}
.posted-on{
    color:#a8abb0;
    float:right
}
.posted-on span{
    color:#e16143
}
.results{
    font:14px OpenSans;
    color:#4d4d4d;
    margin-left:10px
}
.results span{
    font:14px OpenSans-Bold
}
.sort{
    font:11px OpenSans;
    color:#7c8490;
    text-transform:uppercase;
    float:right;
    margin-right:2px;
    position:relative;
    top:-17px
}
.sort .select{
    margin-left:39px;
    width:98px;
    top:-25px;
    margin-right:28px
}
.sort .select-header{
    font:13px OpenSans;
    width:99px
}
.sort .opt-list{
    width:119px
}
.select{
    text-transform:none;
    position:relative;
    cursor:pointer
}
.select-header{
    background:#fff;
    border:1px solid #cdcdcd;
    border-radius:5px;
    padding:7px 10px 9px;
    position:relative;
    width:200px;
    z-index:10
}
.select-header p{
    color:#a8abb0
}
.select-header:after{
    background:url('../images/sprites.png') -320px -69px no-repeat;
    position:absolute;
    right:11px;
    top:15px;
    opacity:.5;
    content:'';
    display:inline-block;
    width:7px;
    height:4px
}
.opt-list{
    border:1px solid #cdcdcd;
    border-radius:5px;
    display:none;
    list-style:none;
    position:absolute;
    top:38px;
    width:220px;
    overflow:hidden;
    z-index:20
}
.option{
    background:#fff;
    border-top:1px solid #f1f1f1;
    padding:10px;
    color:#999
}
.option:first-child{
    border:none
}
.option:first-child:hover{
    border-top:none
}
.option:last-child:hover{
    border-bottom:none
}
.option:hover{
    background:#f8f8f8;
    border-top:1px solid #e0e0e0;
    border-bottom:1px solid #e0e0e0;
    color:#5a5a5a
}
.option:hover+.option{
    border:none
}
.table-wrapper{
    position:relative;
    height:593px
}
.openings{
    position:absolute
}
.openings a{
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.opening:first-child{
    border:none
}
.opening:hover{
    background:#f1f1f1;
    border-top:1px solid #cdcdcd;
    border-bottom:1px solid #cdcdcd
}
.opening:first-child:hover{
    border-top:none
}
.opening:last-child:hover{
    border-bottom:none
}
.opening:hover+.opening{
    border:none
}
.openings .opening-logo{
    padding:11px 5px 26px 60px;
    width:1px
}
.star{
    background:url('../images/sprites.png') -114px -65px no-repeat;
    position:relative;
    cursor:pointer;
    width:19px;
    height:18px;
    left:-40px;
    top:38px
}
.star-checked{
    background:url('../images/sprites.png') -163px -65px no-repeat
}
.opening:last-child .opening-logo{
    padding-bottom:26px
}
.openings .opening-meta{
    padding:21px 0 0 15px;
    width:220px
}
.opening-meta h2{
    margin-bottom:2px
}
.openings .opening-type{
    padding:46px 26px 0 21px;
    width:1px
}
.openings .opening-location{
    background:url('../images/opening-location.png') 1px 49px no-repeat;
    padding:46px 0 0 22px
}
.opening-location a{
    color:#566266;
    text-decoration:none
}
.opening-name{
    font:15px OpenSans-Bold;
    color:#4d4d4d;
    text-decoration:none
}
.opening-name:hover{
    color:#e16143
}
.company{
    font:13px OpenSans;
    color:#a8abb0;
    text-decoration:none;
    display:block;
    position:relative
}
.company:hover{
    color:#566266
}
.openings .opening-type p,p.opening-type{
    border-radius:3px;
    display:inline-block;
    font:12px OpenSans;
    color:#fff;
    width:73px;
    height:20px;
    text-align:center;
    padding:2px 0 0;
    position:relative
}
.opening-loader{
    background:url('../images/loadinfo.net.gif') center no-repeat;
    display:none;
    position:absolute;
    width:48px;
    height:48px;
    top:45%;
    left:45%
}
.freelance{
    background:#5886ba
}
.full-time{
    background:#d59842
}
.contract{
    background:#32c1b2
}
.post table{
    width:100%;
    border-collapse:collapse
}
.post td{
    border-bottom:1px dashed #cdcdcd;
    color:#566266;
    padding:25px 33px 6px 20px;
    text-align:left;
    vertical-align:top
}
.post td p{
    padding-bottom:21px;
    line-height:1.65
}
.post th{
    border-bottom:1px dashed #cdcdcd;
    font:14px OpenSans-Bold;
    color:#4d4d4d;
    padding:26px 18px 28px 20px;
    width:33%;
    text-align:left;
    vertical-align:top
}
.post tr:last-child td,.post tr:last-child th{
    border:none;
    padding-bottom:4px
}
.company-profile th{
    padding-left:30px
}
.company-profile td{
    padding-top:27px
}
.company-profile tr:last-child td,.company-profile tr:last-child th{
    padding-bottom:23px
}
.post-footer{
    background:#f1f1f1;
    border-top:1px solid #cdcdcd;
    box-shadow:0 1px 3px rgba(0,0,0,.1);
    -webkit-box-shadow:0 1px 3px rgba(0,0,0,.1);
    padding:18px 21px 20px 19px
}
.post-footer a{
    color:#a8abb0;
    text-decoration:none;
    margin-right:26px;
    position:relative;
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.print:before,.report:before,.save-job:before{
    content:'';
    display:inline-block;
    position:relative;
    width:16px;
    height:16px;
    top:4px;
    margin-right:10px
}
.save-job:before{
    background:url('../images/sprites.png') -66px -65px no-repeat
}
.print:before{
    background:url('../images/sprites.png') -611px -18px no-repeat
}
.report:before{
    background:url('../images/sprites.png') -15px -65px no-repeat
}
.post-footer a:hover,.post-header a:hover{
    color:#566266
}
.post-footer img{
    position:relative;
    top:4px;
    margin-right:10px
}
.post-footer .edit-link{
    float:right;
    margin:0;
    position:relative;
    top:2px;
    left:2px
}
.no-results{
    background:url('../images/no-results.png') 165px 99px no-repeat #fff;
    text-align:center;
    margin-bottom:35px
}
.no-results .post-header{
    text-align:left;
    margin-bottom:34px
}
.no-results .results{
    font:14px OpenSans;
    color:#4d4d4d;
    width:auto;
    margin:0 0 0 10px
}
.no-results h2{
    font:32px OpenSans-Bold;
    color:#3b4346;
    margin:370px 0 6px 1px
}
.no-results p{
    color:#566266;
    width:320px;
    padding-right:27px;
    line-height:1.6;
    margin:0 auto 77px
}
.submit-request{
    background:-moz-linear-gradient(#e46a49,#de583d);
    background:-webkit-linear-gradient(#e46a49,#de583d);
    background:-o-linear-gradient(#e46a49,#de583d);
    background:-ms-linear-gradient(#e46a49,#de583d);
    background:linear-gradient(#e46a49,#de583d);
    border:1px solid #b34c36;
    border-radius:5px;
    box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    cursor:pointer;
    font:14px OpenSans-Bold;
    color:#fff;
    float:right;
    padding:12px 24px;
    margin-top:2px;
    text-transform:uppercase;
    text-shadow:0 1px 0 #b34c36;
    position:relative
}
.submit-request:hover{
    background:-moz-linear-gradient(#de583d,#e46a49);
    background:-webkit-linear-gradient(#de583d,#e46a49);
    background:-o-linear-gradient(#de583d,#e46a49);
    background:-ms-linear-gradient(#de583d,#e46a49);
    background:linear-gradient(#de583d,#e46a49)
}
.submit-request:active{
    box-shadow:inset 0 1px 0 #b34c36,inset 0 -1px 0 rgba(255,255,255,.4);
    -webkit-box-shadow:inset 0 1px 0 #b34c36,inset 0 -1px 0 rgba(255,255,255,.4);
    text-shadow:none
}
.settings-field{
    border-bottom:1px dashed #cdcdcd;
    padding:19px 7px 15px 20px;
    position:relative
}
.add-opening .settings-field:first-child{
    padding-bottom:22px
}
.add-opening .settings-field:first-child input[type=text]{
    margin-bottom:15px
}
.user-profile .settings-field:first-child{
    padding-bottom:19px
}
.settings-field:last-child{
    border:none;
    padding-bottom:34px
}
.edit-company .settings-field:last-child{
    padding-bottom:24px
}
.settings-field input[type=text],.settings-field input[type=password],.settings-field input[type=text],.settings-field textarea{
    background:#fff;
    border:1px solid #d2d2d2;
    border-radius:5px;
    box-shadow:inset 0 1px 1px rgba(0,0,0,.1);
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.1);
    color:#566266;
    padding:13px 9px;
    margin-bottom:4px;
    width:612px;
    max-width:100%;
    position:relative;
    outline:0;
    -moz-transition:all .3s ease-in-out;
    -webkit-transition:all .3s ease-in-out;
    -o-transition:all .3s ease-in-out;
    -ms-transition:all .3s ease-in-out;
    transition:all .3s ease-in-out
}



.settings-field input[type=password]{
    background:url('../images/password.png') 9px 15px no-repeat #fff;
    width:256px;
    padding-left:34px;
    margin-bottom:7px
}
.settings-field input[name=password]{
    margin-right:24px
}
.settings-field textarea{
    padding-top:7px;
    min-height:43px;
    resize:none;
    margin-bottom:0;
    overflow:hidden
}
.settings-field .invalid:invalid{
    background:#f0e8e6;
    border-color:#e16143;
    box-shadow:1px 1px 2px rgba(225,97,67,.3),-1px -1px 2px rgba(225,97,67,.3);
    -webkit-box-shadow:1px 1px 2px rgba(225,97,67,.3),-1px -1px 2px rgba(225,97,67,.3)
}
#contacts input[type=text],#contacts input[type=text]{
    padding-left:34px;
    width:256px
}
.user-profile #contacts{
    margin-left:130px
}
.user-profile #contacts input[type=text],.user-profile #contacts input[type=text]{
    width:197px;
    margin:0
}
.user-profile #contacts input[type=text]{
    margin-right:14px
}
#contacts input[type=text]{
    background:url('../images/contacts-text.png') 9px 14px no-repeat #fff;
    margin-right:25px
}
#contacts input[type=text]{
    background:url('../images/contacts-phone.png') 9px 14px no-repeat #fff
}
.post.add-opening .post-footer{
    padding-bottom:40px
}
#contacts input[type=text]:invalid,#contacts input[type=text]:invalid,.settings-field input[type=text]:invalid,.settings-field input[type=password]:invalid,.settings-field input[type=text]:invalid,.settings-field textarea:invalid{
    background-color:#ebebeb
}
#contacts input[type=text]:focus,#contacts input[type=text]:focus,.settings-field input[type=text]:focus,.settings-field input[type=password]:focus,.settings-field input[type=text]:focus,.settings-field textarea:focus{
    background-color:#fff;
    border-color:#39b5cf;
    box-shadow:1px 1px 2px rgba(57,181,207,.3),-1px -1px 2px rgba(57,181,207,.3);
    -webkit-box-shadow:1px 1px 2px rgba(57,181,207,.3),-1px -1px 2px rgba(57,181,207,.3)
}
.settings-field input[type=text].file{
    width:480px
}
.settings-field #file-1{
    margin-top:15px
}
input[type=button].file{
    border-radius:5px;
    box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    font:14px OpenSans-Bold;
    padding:12px 5px 13px;
    margin-left:20px;
    width:111px;
    text-align:center;
    text-transform:uppercase;
    background:#f2f2f2;
    border:1px solid #c4c4c4;
    position:relative;
    cursor:pointer;
    color:#ababab
}
input[type=reset],input[type=submit]{
    border-radius:5px;
    box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    cursor:pointer;
    position:relative;
    font:14px OpenSans-Bold;
    float:right;
    padding:12px 5px 13px;
    width:102px;
    text-align:center;
    margin:3px 0 30px 18px;
    text-transform:uppercase
}
input[type=submit]{
    background:-moz-linear-gradient(#97c161,#80b350);
    background:-webkit-linear-gradient(#97c161,#80b350);
    background:-o-linear-gradient(#97c161,#80b350);
    background:-ms-linear-gradient(#97c161,#80b350);
    background:linear-gradient(#97c161,#80b350);
    border:1px solid #6f9546;
    color:#fff;
    text-shadow:0 1px 0 #6f9546
}
input[type=submit]:hover{
    background:-moz-linear-gradient(#80b350,#97c161);
    background:-webkit-linear-gradient(#80b350,#97c161);
    background:-o-linear-gradient(#80b350,#97c161);
    background:-ms-linear-gradient(#80b350,#97c161);
    background:linear-gradient(#80b350,#97c161)
}
input[type=submit]:active{
    box-shadow:inset 0 1px 0 #6f9546,inset 0 -1px 0 rgba(255,255,255,.4);
    -webkit-box-shadow:inset 0 1px 0 #6f9546,inset 0 -1px 0 rgba(255,255,255,.4);
    text-shadow:none
}
input[type=reset]{
    background:-moz-linear-gradient(#f8f8f8,#ececec);
    background:-webkit-linear-gradient(#f8f8f8,#ececec);
    background:-o-linear-gradient(#f8f8f8,#ececec);
    background:-ms-linear-gradient(#f8f8f8,#ececec);
    background:linear-gradient(#f8f8f8,#ececec);
    border:1px solid #c4c4c4;
    color:#ababab
}
input[type=button].file:hover,input[type=reset]:hover{
    background:-moz-linear-gradient(#ececec,#f8f8f8);
    background:-webkit-linear-gradient(#ececec,#f8f8f8);
    background:-o-linear-gradient(#ececec,#f8f8f8);
    background:-ms-linear-gradient(#ececec,#f8f8f8);
    background:linear-gradient(#ececec,#f8f8f8)
}
input[type=button].file:active,input[type=reset]:active{
    box-shadow:inset 0 1px 0 #cdcdcd,inset 0 -1px 0 rgba(255,255,255,.4);
    -webkit-box-shadow:inset 0 1px 0 #cdcdcd,inset 0 -1px 0 rgba(255,255,255,.4);
    text-shadow:none
}
.edit-company .settings-field:first-child input[type=text]{
    width:392px;
    margin-left:220px
}
.user-profile .settings-field:first-child input[type=text]{
    width:482px;
    margin-left:130px
}
.edit-company .settings-field:first-child input[name=company-name]{
    margin-bottom:18px
}
.company-logo{
    width:200px;
    height:108px;
    position:absolute
}
.user-avatar{
    width:109px;
    height:109px;
    position:absolute
}
.paging ul{
    list-style:none
}
.paging a{
    background:#f9f9f9;
    border:1px solid #cdcdcd;
    border-radius:6px;
    cursor:pointer;
    color:#cdcdcd;
    padding:15px 5px 16px;
    margin-right:8px;
    float:left;
    width:40px;
    text-align:center;
    position:relative;
    text-decoration:none
}
.paging a:hover{
    background:#fff
}
.paging a:active{
    background:#f2f2f2;
    box-shadow:inset 0 1px 1px rgba(0,0,0,.1);
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.1)
}
.paging .neighbour a{
    padding:15px 25px 15px 24px
}
.paging .dots{
    background:0 0;
    border:none;
    color:#cdcdcd;
    padding:15px 8px 15px 12px;
    float:left;
    width:21px
}
.version1 .paging .current a{
    background:#fff;
    color:#555c5f
}
.paging .current a{
    background:#3b4346;
    color:#fff
}
.sidebar{
    float:right;
    width:242px
}
.left-sidebar .sidebar{
    float:left
}
.widget{
    background:#fff;
    border:1px solid #cdcdcd;
    border-radius:5px;
    box-shadow:1px 1px 2px rgba(100,100,100,.1),-1px -1px 2px rgba(100,100,100,.1);
    -webkit-box-shadow:1px 1px 2px rgba(100,100,100,.1),-1px -1px 2px rgba(100,100,100,.1);
    color:#566266;
    padding:15px 23px 24px 20px;
    margin-bottom:29px;
    position:relative
}
.wrapper.add-opening-page .widget,.wrapper.user-profile .widget{
    margin-bottom:19px
}
.widget h3{
    background:#f1f1f1;
    border-bottom:1px solid #c4c4c4;
    box-shadow:0 1px 1px rgba(100,100,100,.1);
    font:14px OpenSans-Bold;
    text-transform:uppercase;
    padding:22px 20px 23px;
    position:relative;
    width:200px;
    top:-14px;
    left:-20px
}
.widget p{
    line-height:1.65
}
.widget a{
    color:#d4d4d4;
    text-decoration:none;
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.widget a:hover{
    color:#566266
}
.widget.add-opening{
    border:none;
    box-shadow:0 2px 3px rgba(0,0,0,.1);
    -webkit-box-shadow:0 2px 3px rgba(0,0,0,.1);
    padding:0;
    margin-bottom:28px;
    overflow:hidden
}
.company-profile .add-opening,.opening-page .add-opening{
    margin-bottom:17px
}
.add-opening button{
    background:-moz-linear-gradient(#97c161,#80b350);
    background:-webkit-linear-gradient(#97c161,#80b350);
    background:-o-linear-gradient(#97c161,#80b350);
    background:-ms-linear-gradient(#97c161,#80b350);
    background:linear-gradient(#97c161,#80b350);
    box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 1px 0 0 rgba(255,255,255,.2),inset -1px -1px 0 rgba(255,255,255,.2);
    border:1px solid #6f9546;
    border-radius:5px;
    position:relative;
    cursor:pointer;
    font:14px OpenSans-Bold;
    color:#fff;
    text-transform:uppercase;
    padding:12px 48px 13px 4px;
    width:242px;
    text-shadow:0 1px 0 #6f9546
}
.plus{
    background:rgba(0,0,0,.2);
    border-radius:0 5px 5px 0;
    cursor:pointer;
    font:20px OpenSans-Bold;
    color:#fff;
    position:absolute;
    right:0;
    top:0;
    padding:10px 17px
}
.add-opening button:hover{
    background:-moz-linear-gradient(#80b350,#97c161);
    background:-webkit-linear-gradient(#80b350,#97c161);
    background:-o-linear-gradient(#80b350,#97c161);
    background:-ms-linear-gradient(#80b350,#97c161);
    background:linear-gradient(#80b350,#97c161)
}
.add-opening button:active{
    box-shadow:inset 0 1px 0 #6f9546,inset 0 -1px 0 rgba(255,255,255,.4);
    -webkit-box-shadow:inset 0 1px 0 #6f9546,inset 0 -1px 0 rgba(255,255,255,.4);
    text-shadow:none
}
.featured-company img{
    width:200px;
    height:auto;
    margin:5px 0 11px
}
.featured-companies h2{
    margin-bottom:1px
}
.featured-companies{
    padding-bottom:16px
}
.featured-company{
    position:relative;
    list-style:none
}
.count{
    background:#e16143;
    border:3px solid #fff;
    border-radius:50%;
    color:#fff;
    font:13px OpenSans-Bold;
    width:24px;
    height:21px;
    padding-top:3px;
    text-align:center;
    vertical-align:middle;
    position:absolute;
    top:-1px;
    right:-8px
}
.newsletter{
    background:url('../images/mail-bg.png') -1px -1px #fff;
    padding:15px 23px 24px 19px;
    margin-bottom:28px
}
.newsletter h3{
    background:0 0;
    border:none;
    padding-bottom:13px;
    text-align:center;
    top:-13px;
    left:-19px
}
.newsletter input[type=text]{
    border:1px solid #39b5cf;
    border-radius:4px;
    position:relative;
    font:13px OpenSans;
    color:#566266;
    padding:13px;
    outline:0;
    margin-bottom:3px;
    -moz-transition:all .3s ease-in-out;
    -webkit-transition:all .3s ease-in-out;
    -o-transition:all .3s ease-in-out;
    -ms-transition:all .3s ease-in-out;
    transition:all .3s ease-in-out
}
.newsletter input[type=text]:focus{
    box-shadow:1px 1px 3px rgba(57,181,207,.3),-1px -1px 3px rgba(57,181,207,.3);
    -webkit-box-shadow:1px 1px 3px rgba(57,181,207,.3),-1px -1px 3px rgba(57,181,207,.3)
}
.info{
    font:12px OpenSans;
    color:#c4c4c4;
    margin-top:6px
}
.required{
    color:#e16143
}
.video{
    background:url('../images/video.html') top no-repeat;
    border:none;
    box-shadow:none;
    -webkit-box-shadow:none;
    padding:0;
    height:170px
}
.company-profile .video{
    margin-bottom:14px
}
.video-title{
    font:12px OpenSans;
    color:#cbcbcb;
    position:absolute;
    bottom:-3px;
    left:1px
}
.company-widget{
    padding-bottom:0;
    margin-bottom:20px;
    overflow:hidden
}
.company-meta{
    margin-top:5px;
    position:relative
}
.company-meta img{
    margin-bottom:11px
}
.company-widget .count{
    top:-6px
}
.company-location{
    background:url('../images/opening-location.png') 0 6px no-repeat;
    padding:2px 22px 17px;
    color:#a8abb0
}
a.company-link{
    background:url('../images/link.png') 0 0 no-repeat;
    color:#e16143;
    display:inline-block;
    padding:0 22px 17px
}
a.company-link:hover{
    color:#e16143;
    cursor:pointer;
    text-decoration:underline
}
.contacts{
    background:#f1f1f1;
    border-top:1px solid #cdcdcd;
    padding:27px 27px 3px 17px;
    margin-top:23px;
    position:relative;
    left:-20px;
    width:196px
}
.phones{
    background:url('../images/contacts-phone.png') 0 2px no-repeat
}
.texts{
    background:url('../images/contacts-text.png') 0 2px no-repeat
}
.contacts ul{
    color:#a8abb0;
    list-style:none;
    padding:0 25px 14px;
    position:relative
}
.contacts li{
    margin-bottom:9px
}
.company-openings{
    padding-bottom:0;
    overflow:hidden
}
.company-openings ul{
    list-style:none
}
.company-opening{
    border-bottom:1px dashed #cdcdcd;
    padding:16px 10px 32px 90px;
    position:relative;
    left:-20px;
    width:200px
}
.opening-name a{
    font:15px OpenSans-Bold;
    color:#4d4d4d;
    margin-bottom:4px
}
.opening-name:hover a{
    color:#e16143
}
.company-openings .opening-name{
    margin-bottom:3px
}
.company-opening:first-child{
    padding-top:4px
}
.company-opening:first-child img{
    top:6px
}
.company-opening img{
    position:absolute;
    top:19px;
    left:20px;
    width:50px;
    height:50px
}
.company-opening:last-child{
    border:none;
    padding-bottom:31px
}
.widget-footer{
    background:#f1f1f1;
    border-top:1px solid #cdcdcd;
    padding:15px 20px 14px;
    position:relative;
    left:-20px;
    width:200px
}
.widget-footer a{
    color:#cacaca
}
footer{
    background:#fff;
    border-top:1px solid #cdcdcd;
    width:100%;
    height:73px
}
footer a{
    text-decoration:none
}
.site-footer{
    width:1200px;
    margin:0 auto;
    padding-top:4px
}
.site-footer h1{
    opacity:.25
}
.links{
    float:right;
    margin:16px 121px 0 0
}
.links a{
    margin-right:10px;
    display:inline-block;
    width:36px;
    height:36px;
    -moz-transition:opacity .5s ease-in-out;
    -webkit-transition:opacity .5s ease-in-out;
    -o-transition:opacity .5s ease-in-out;
    -ms-transition:opacity .5s ease-in-out;
    transition:opacity .5s ease-in-out
}
.facebook{
    background:url('../images/sprites.png') -406px -57px no-repeat
}
.twitter{
    background:url('../images/sprites.png') -455px -57px no-repeat
}
.youtube{
    background:url('../images/sprites.png') -507px -57px no-repeat
}
.links a:hover{
    opacity:.5
}
.login{
    background:#f9f9f9;
    width:100%;
    height:100%
}
.login-wrapper{
    margin:auto;
    padding-top:8%;
    width:402px;
    min-width:402px;
    height:403px
}
.login header{
    background:#f9f9f9;
    border:none;
    height:auto;
    margin-bottom:19px;
    text-align:center
}
.login header img{
    position:relative;
    left:1px;
    margin-right:5px
}
.login header h1{
    display:inline-block;
    font:21px OpenSans-ExtraBold;
    color:#3d4346;
    text-transform:uppercase
}
.login .post-header{
    padding:21px 21px 23px 28px
}
.login-form{
    padding:30px 27px 30px 30px
}
.login-form input[type=text],.login-form input[type=password]{
    border:1px solid #d2d2d2;
    border-radius:5px;
    box-shadow:inset 0 1px 1px rgba(0,0,0,.1);
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.1);
    position:relative;
    color:#a8abb0;
    padding:12px 9px 14px 34px;
    margin-bottom:14px;
    width:297px;
    max-width:95%;
    outline:0;
    -moz-transition:all .3s ease-in-out;
    -webkit-transition:all .3s ease-in-out;
    -o-transition:all .3s ease-in-out;
    -ms-transition:all .3s ease-in-out;
    transition:all .3s ease-in-out
}
.login-form input[type=text]{
    background:url('../images/text.png') 9px 14px no-repeat #fff
}
.login-form input[type=password]{
    background:url('../images/password.png') 9px 14px no-repeat #fff
}
.login-form input[type=text]:focus,.login-form input[type=password]:focus{
    border-color:#39b5cf;
    box-shadow:1px 1px 2px rgba(57,181,207,.3),-1px -1px 2px rgba(57,181,207,.3);
    -webkit-box-shadow:1px 1px 2px rgba(57,181,207,.3),-1px -1px 2px rgba(57,181,207,.3)
}
.login-form input[type=submit]{
    margin:5px 0 0 18px
}
.login-form .invalid:invalid{
    border-color:#e16143;
    box-shadow:1px 1px 2px rgba(225,97,67,.3),-1px -1px 2px rgba(225,97,67,.3);
    -webkit-box-shadow:1px 1px 2px rgba(225,97,67,.3),-1px -1px 2px rgba(225,97,67,.3)
}
.login-form a{
    display:inline-block;
    color:#a8abb0;
    text-decoration:none;
    margin-top:20px;
    -moz-transition:color .2s ease-in-out;
    -webkit-transition:color .2s ease-in-out;
    -o-transition:color .2s ease-in-out;
    -ms-transition:color .2s ease-in-out;
    transition:color .2s ease-in-out
}
.login-form a:hover{
    color:#566266
}
.login .post-footer{
    padding:25px 21px 30px 44px
}
.login .post-footer p{
    font:15px OpenSans;
    color:#a8abb0;
    text-align:center
}
.login .post-footer a{
    font:15px OpenSans-Bold;
    color:#3b4346
}
.login .dark-label{
    top:9px;
    padding:3px 16px 3px 6px
}
.login .dark{
    left:-6px
}
.clearfix:after{
    clear:both;
    content:'';
    display:table
}



</style>
</body>
</html>