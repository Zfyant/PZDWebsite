
<?php
 $user_bg = $php_root."images/bg-2.jpg";
?>

<style type="text/css">

/**********************************************/
/*  Resets                                    */
/**********************************************/
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, code, em, img, q, s, b, u, i, center,
dl, dt, dd, ol, ul, li, audio, video,
fieldset, form, label, legend, embed, 
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	position: relative;
	transition: all ease .25s;
		-webkit-transition: all ease .25s;
		-moz-transition: all ease .25s;
}

/**********************************************/
/*  Body & Include Fields                     */
/**********************************************/

body, html {
	background-color: #0b092a;
	background-image: url(<?php echo $root; ?>images/bg-0.jpg);
	background-attachment: fixed;
	background-position: center;
	-webkit-background-size: cover;
	   -moz-background-size: cover;
	     -o-background-size: cover;
	        background-size: cover;
	min-height: 100%;
	width: 100%;
	color: #ddd;
	font-family: 'Open Sans', sans-serif;
	z-index: 1;
}
body a {
	text-align: center;
}
h1, h2, h3 {
	text-align: center;
}
.clearfix {
	clear: both;
}
.wrapper {
	background: rgba(0,0,0,0.7);
	padding: 0 0 30px 0;
	min-height: 275px;
	margin: 0 auto;
	padding-bottom: 20px;
	left: 0;
	right: 0;
	list-style-type: disc;
  box-sizing: border-box;
}
.wrapper, .nav {
	width: 80%;
}
.wrapper a, .wrapper a:visited, .wrapper a:active, .wrapper a:link {
	color: #007dc8;
	text-decoration: none;
}
.wrapper a:hover {
	color: #ddd;
}
.wrapper-content {
	width: 94%;
	margin-left: 3%;
	margin-right: 3%;
}
.clear {
	clear: both;
}
.content {
	width: 98%;
	padding: 2% 1% 4% 1%;
	margin: auto;
	color: #ddd;
	text-align: center;
	line-height: 150%;
	top: 0;
	left: 0;
	overflow: auto;
}
.content ul {
	background: rgba(100,100,100,0.0);
	border-radius: 10px;
	margin: 10px;
	text-align: center;
	list-style: square;
}
.content ul ul, .content ol ul {
	color: #888;
}
.content li {
	width: auto;
	text-align: left;
	padding: 5px;
	margin-left: 30px;
}


/**********************************************/
/*  Global Colors                             */
/**********************************************/

/**** Universal Border ****/
.primary-border,
.wrapper, .intro-banner-container, .feed-item, .panel_widget,
.user-panel, .user-button, .user-quicklinks > ul,
.collection, .iFrame, .folder, .download-table,
.comments li, .comment-box
{
	border: solid 1px rgba(0,90,200,0.6);
}


/**** Universal Feint-Border ****/
.secondary-border,
.posts li
{
	border: solid 1px rgba(0,90,200,0.45);
}



/**** Misc Borders ****/
.menu, .comment-container {
	border-left: solid 1px rgba(0,90,200,0.6);
	border-bottom: solid 1px rgba(0,90,200,0.6);
	border-right: solid 1px rgba(0,90,200,0.6);
}
.user-menu, .user-stamp {
	border-bottom: solid 1px rgba(0,90,200,0.6);
}
.controls-container, .title, .footer {
	border-top: solid 1px rgba(0,90,200,0.6);
}
.folder .contents {
	border-left: solid 1px rgba(0,90,200,0.6);
	border-right: solid 1px rgba(0,90,200,0.6);
}


/**** User/Form Borders (+BG) ****/
.legend-item,
form input, .login-btn {
	background: rgba(0,0,0,0.2);
	border-top: solid 1px rgba(0,90,200,0.45);
	border-bottom: solid 1px rgba(0,90,200,0.45);
	border-right: 0px; border-left: 0px;
}		input:-webkit-autofill {
			-webkit-box-shadow: 0 0 0px 1000px #151515 inset;
			/* This should match MainFontColor */
			-webkit-text-fill-color: #8C44FF !important;
		}

/**********************************************/
/*  Footer                                    */
/**********************************************/

.footer {
	background: rgba(0,0,0,0.7);
	width: 100%;
	text-align: center;
	line-height: 50px;
}
.footer:hover {
	cursor: pointer;
}

.social {
	background-color: #000;
	margin: 5px;
	padding: 0;
	height: 40px;
	width: 40px;
	border: 1px solid #333;
	position: relative;
	z-index: 50;
	display: inline-block;
	border-radius: 20px;
	overflow: hidden;
		-webkit-border-radius: 20px;
		-moz-border-radius: 20px;
}
.social:hover {
	transform: rotate(45deg);
	margin-top: 5px;
		-webkit-transform: rotate(45deg);
		-moz-transform: rotate(45deg);
}

/* Fix but Absolute */
.footer {
  position: absolute;
  bottom: 0;
	height: 110px;
}
body:after {
  content: "";
  display: block;
	height: 70px;
}
body {
  padding-bottom: 70px;
}



/**********************************************/
/*  Slideshow                                 */
/**********************************************/

.intro-banner-container, .feed-item {
	margin-top: 40px;
	overflow: hidden;
} 
.aspect-16-9 {
	background: #000;
	width: 100%;
	overflow: hidden;
}
	.aspect-16-9::before {
		padding-bottom: 56.25%; /* 16:9 */
		padding-top: 25px;
		height: 0;
	}
	/* Ratio        Padding-Bottom
			16:9    |     56.25%
			4:3     |     75%
			3:2     |     66.66%
			8:5     |     62.5% */
.slide {
	display: none;
	overflow: hidden;
}
.active-slide {
	display: inline-block;
}
.bg01 {
	background: #111 url(<?php echo $root; ?>images/slide_bg01.jpg);
	background-size: cover;
	width: 100%;
}
.bg02 {
	background: #111 url(<?php echo $root; ?>images/slide_bg02.jpg);
	background-size: cover;
	width: 100%;
}
.bg03 {
	background: #111 url(<?php echo $root; ?>images/slide_bg03.jpg);
	background-size: cover;
	width: 100%;
}
	.bg01::after, .bg02::after, .bg03::after {
		padding-top: 56.25%;
		display: block;
		content: '';
	}
.controls-container {
	background: rgba(0,0,0,0.6);
	width: 100%;
	margin: auto;
	text-align: center;
	font-size: large;
	padding: 4px 0 0 0;
}
.slideshow {
	background-repeat: no-repeat;
	height: 18px;
	width: 18px;
	margin: 4px 4px;
	padding: 0;
	display: inline-block;
}
.sl-back {
	background: url(<?php echo $root; ?>images/Slideshow_Back.png);
}
	.sl-back:hover {
		background: url(<?php echo $root; ?>images/Slideshow_Back_RO.png);
	}
.sl-option {
	background: url(<?php echo $root; ?>images/Slideshow_Mid.png);
	background-repeat: no-repeat;
	height: 13px;
	width: 13px;
	margin-top: -16px;
	margin-left: 4px;
	margin-right: 4px;
	padding: 0;
	display: inline-block;
	vertical-align: middle;
}
.sl-next {
	background: url(<?php echo $root; ?>images/Slideshow_Next.png);
}
	.sl-option:hover, .sl-active {
		background: url(<?php echo $root; ?>images/Slideshow_Mid_RO.png);
	}
	.sl-next:hover {
		background: url(<?php echo $root; ?>images/Slideshow_Next_RO.png);
	}
.slide span {
	background: rgba(100,0,0,0.0);
	position: absolute;
	display: inline-block;
	margin: 50px;
	padding: 20px;
	font-size: 24px;
	z-index: 1000;
}



/**********************************************/
/*  Front Page - News Section                 */
/**********************************************/

.news-feed {
	background: rgba(0,0,100,0);
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif !important;
	height: auto;
	padding-bottom: 15px;
	/*text-align: justify;
  text-justify: distribute-all-lines;*/
	display: inline-block;
}
.feed-item {
	background: rgba(20,20,30,0.75) !important;
	color: #bbb;
	width: 48%;
	height: auto;
  box-sizing: border-box;
	padding: 0px;
	cursor: pointer;
	display: inline-block;
}
.feed-item:nth-child(odd){
    clear: both;
    float: left;
		margin-right: 2%
}
.feed-item:nth-child(even){
    float: right;
		margin-left: 2%
}
.feed-item .feed-header {
	background: rgba(10,60,150,0.5);
	margin: 0px;
	padding: 0px;
	cursor: auto;
}
.feed-item .feed-header-title {
	color: #FFF;
	padding: 10px;
	margin-bottom: 5px;
	font-size: 30px;
	font-weight: 800;
	letter-spacing: 3px;
	line-height: 100%;
}
.feed-item .feed-header-date {
	background: rgba(0,0,0,0.2);
	font-size: 12px;
	padding: 4px;
	border-top: solid 1px rgba(30,103,225,0.6);
	border-bottom: solid 1px rgba(30,103,225,0.6);
	color: #aaa;
}
.feed-header-date span {
	color: rgba(50,203,255,1);
	font-style: italic;
}
.feed-item .feed-body {
	cursor: text;
	padding: 20px;
	list-style-type: disc;
}
.feed-item .feed-body img {
	max-width: 350px;
	width: 90%;
	margin: auto;
	opacity: 0.5;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
}
.feed-item .feed-body:hover img {
	opacity: 1;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}
.feed-item .feed-body span {
	background: rgba(100,100,100,0.2);
	padding: 5px;
	border-radius: 10px;
	width: 100%;
}
.feed-item .feed-footer {
	background: rgba(0,0,0,0.15);
	padding: 10px;
	border-top: solid 1px rgba(30,103,225,0.3);
}
.feed-footer, .feed-footer a {
	color: #548CC7 !important;
}
#copier {
	background-color: transparent;
	border: 0;
	color: #ddd;
}
#copier:before {
	content: 'Simply click to copy';
	background-color: rgba(100,100,100,0.2);
	color: rgba(50,203,255,0.7);
	height: 25px;
	width: 150px;
	top: -35px;
	line-height: 200%;
	position: absolute;
	z-index: 30;
	border-radius: 10px;
	display: none;
}
#copier:focus {
	outline: 0;
}
#copier:hover::before {
	display: block;
}
#copier:focus::before {
	content: 'Copied';
}

/**********************************************/
/*  Comment Page Bar                          */
/**********************************************/
.comment-container {
	background: #111;
	margin-top: -2%;
	padding: 5px 0px;
	text-align: center;
}
.comment-box {
	background: rgba(0,0,0,0.6);
	width: 100%;
	padding: 15px;
	color: #00601A;
	min-height: 80px;
	z-index: 20;
}
.comment-box:focus {
	background: #111;
	box-shadow: inset 0px 0px 5px 5px #333;
}
.comment-info {
	background: rgba(54,5,175,0.3);
	height: 46px;
	top: -1px;
}
.comment-counter {
	padding: 7px;
	display: inline-block;
}
.comment-info .btn-post {
	background: rgba(50,50,50,0.4);
	padding: 7px 22px;
	height: 30px; 
	right: 8px;
	top: 8px;
	position: absolute !important;
	border-radius: 10px;
	border: solid 1px rgba(0,100,100,0.0);
	transition: all ease .3s;
}
.comment-info .btn-post:hover {
	background: #111;
}
form .disabled {
	color: rgba(100,0,0,1) !important;
	pointer-events: none;
	border: solid 1px rgba(100,0,0,0.6);
}
.posts {
	margin-top: 20px;
	padding: 10px;
	list-style: none;
	border: solid 1px rgba(0,100,100,0.0);
	border-radius: 5px;
}
.comments {
	margin: 0 !important;
}
.comments li {
	background: rgba(30,30,70,0.8);
	margin: 20px 10px;
	padding: 10px;
	left: 0;
	color: #aaa;
	list-style: none;
}
.comments li .userstamp {
	width: 100%;
	color: #777;
}
.comments li span {
	color: #3D83FF;
}
.comments li p {
	margin-top: 10px;
}
.comments .edit-btn {
	position: absolute;
	top: 0;
	right: 65px;
}
.comments .del-btn, .comments .reply-btn {
	position: absolute;
	top: 0;
	right: 15px;
}
.comments button {
	background: rgba(0,0,0,0);
	border: 0;
	color: #ddd;
	transition: all ease .25s;
	float: right;
	opacity: 0.7;
}
.comments button:hover {
	opacity: 1;
}
.comments .del-btn button:hover {
	opacity: 1;
	color: #FF8D8F;
}
.comments h2 {
	margin: 20px auto;
}

/**********************************************/
/*  Article Page Section                      */
/**********************************************/

.article {
	margin: 0 15px;
}
.article .images img {
	width: 48%;
	margin-bottom: 20px;
	box-shadow: 0px 0px 10px 2px #000;
	display: block;
}
.tutorial_buttons {
	clear: both;
	text-align: center;
	margin: 10px;
}
.tutorial_buttons a {
	background: rgba(50,50,50,0.8);
	padding: 10px;
	margin: 0 5px;
}
.article-body {
	text-align: left;
	margin-top: 40px;
}
.article h1, .article h2, .article h3 {
	text-align: left;
	margin-bottom: 10px;
}


/**********************************************/
/*  Download Page                             */
/**********************************************/


.table-label {
	text-decoration: underline;
	font-size: large;
	font-style: oblique;
}



/**********************************************/
/*  Misc                                      */
/**********************************************/


.legend {
	display: inline-block;
	padding: 10px 5px;
	vertical-align: middle;
}
.legend-item {
	background: rgba(0,0,0,0.4);
	margin: 5px;
	padding: 5px 10px;
	display: inline-block;
	border-radius: 10px;
}



/**********************************************/
/*  Widgets                                   */
/**********************************************/

.widgets-container {
	background: rgba(100,100,100,0.0);
	width: 100%;
	min-height: 40%;
	margin: auto;
	display: inline-block;
}
.widget, .widget .widget-frame, .widget .widget-body {
	width: 257px;
	/* Also Edit .widget-frame (Height)               */
	/* Also Edit .widget img   (Height & Width -57px) */
}
.widget {
	margin: 20px;
	border-radius: 5px;
	display: inline-block;
	vertical-align: top;
}
.widget .widget-frame {
	background: url(<?php echo $root; ?>images/widget.png);
	background-size: cover;
	height: 257px;
	margin: auto;
	top: 10px;
	border-radius: 15px;
		overflow: hidden;
    justify-content: center;
    align-items: center;
			-webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -ms-grid-row-align: center;
}
.widget .widget-frame img {
	width: 200px;
	height: 200px;
		position: absolute;
		left: 0;
		right: 0;
		top: 0;
		bottom: 0;
		margin: auto;
		border-radius: 255px;
}
.widget .widget-title {
	width: 100%;
	padding: 10px 0 2px 0;
	border-bottom: solid 1px rgba(50,50,50,0.6);
	
}
.widget .widget-body {
	font-size: 12px;	
	padding: 5px;
	margin: auto;
}









</style>