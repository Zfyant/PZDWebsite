<style type="text/css">

/**********************************************/
/*             User Login Panels              */
/**********************************************/

.user-color-primary {
	color: #8F5AFF !important;
}



.user-button {
	background: rgba(10,10,10,0.75);
	width: 70px;
	height: 20px;
	padding: 4px;
	margin: 5px 0px 49px -25px;
	text-align: center;
	transform: rotate(90deg);
	line-height: 20px;
	cursor: pointer;
		-webkit-transform: rotate(90deg);
}

form input.login-btn {
	margin: 10px auto;
	padding: 10px;
	color: #ddd;
	border-radius: 10px;
	
}	.login-btn:hover {
		color: #8F5AFF; /* This should match '.user-color-primary' */
		background: rgba(50,50,50,0.5);
		border-radius: 15px;
	}


.user-logins-container {
	width: 280px;
	margin: -92px 0px 0px -340px;
	width: 0px;
	height: auto;
	margin: 35px 0px 0px 0px;
	right: 0;
	z-index: 100;
	position: absolute;
}
.user-logins-container a {
	display: block;
}
.user-panel {
	background: rgba(20,20,20,0.75);
	width: 300px;
	height: auto;
	padding: 20px;
	text-align: center;
	position: absolute;
	right: 0;
	top: 0;
	display: none;
	z-index: 1000;
}


body form {
	text-align: center;
	margin: 2% auto 0 auto;
}
body form ul {
	list-style: none;
}
body form input {
	padding: 5px;
	color: #8C44FF;
}
body form table {
	margin: auto;
}
body form table tr {
}
body form table td {
	margin: 15px auto;
	padding: 15px 5px;
}
body form .btn {
	text-align: center;
}
body form table input {
	padding: 7px;
	margin: 2px;
	border-radius: 5px;
	color: rgba(0,170,255,1);
}
form * {
	color: #999;
	margin: auto;
	width: auto;
	transition: border ease 0s;
		-webkit-transition: border ease 0s;
}
form input:focus,
form input:hover {
  background: #rgba(25,25,25,0.0);
  border-top: dotted 1px #8C44FF;
  border-bottom: dotted 1px #8C44FF;
}
form table ul {
	margin: 15px 0px;
	padding: 15px 5px;
	list-style: none;
	text-align: left;
}


/* Fix PHP Output */
.errors {
	margin-top: 15px;
}
.errors ul {
	background: transparent;
	list-style: none;
}
.errors li {
	text-align: center;
	color: #FF6363;
	margin: 0 auto;
}



/**********************************************/
/*            User Menu & Profile             */
/**********************************************/

.user-menu {
	width: 100%;
	height: 30px;
	box-sizing: border-box;
	line-height: 30px;
}
.online-status-object {
	margin: 5px;
}
.user-quicklinks {
	width: 100%;
	min-height: 100%;
	height: auto;
	margin: 0px;
	padding: 0px;
	float: left;
	color: #666;
	list-style: none;
	text-height: auto;
	position: absolute;
	z-index: 10;
}
.user-quicklinks > ul:hover {
	background: #111;
}
.user-quicklinks > ul {
	margin: -1px 0 0 -1px;
}
.user-quicklinks ul {
	background: rgba(0,0,0,0.5);
	width: 175px;
	list-style: none;
	cursor: default;
}
.user-quicklinks ul li {
	border-radius: 10px;
	text-align: center;
	line-height: 29px;
}
.user-quicklinks ul ul {
	background: transparent;
	padding: 8px;
	display: none
}
.user-quicklinks ul ul li {
	background: rgba(150,150,150,0);
	border: solid 1px rgba(50,50,50,0);
	text-align: left;
	line-height: 20px;
}
.user-quicklinks ul:hover ul {
	display: inline-block;
}
.user-quicklinks ul ul li a {
	padding: 2px 4px;
	border-radius: 5px;
}
.user-quicklinks ul ul li a:hover {
	text-shadow: 0px 0px 10px 10px #ddd;
}




/**********************************************/
/*                Panel Widgets               */
/**********************************************/

.panel_widget {
	background: rgba(0,0,0,0.5);
	width: 169px;
	height: 145px;
	margin: 15px;
	padding: 20px 10px;
	display: inline-block;
	text-align: center;
	vertical-align: middle;
}
.circle {
	background: rgba(50,50,50,0.6);
	width: 70px;
	height: 70px;
	margin: 10px auto;
	border-radius: 100px;
	border: solid 1px #ddd;
	font-size: 36px;
	vertical-align: middle;
	line-height: 190%;
}


.user-bg {
	margin: 5px auto;
	padding: 0px;
	height: 30px;
	width: 30px;
	border: 1px solid #999;
	border-radius: 20px;
	display: inline-block;
	text-align: center;
	transition: all .2s;
		-webkit-transition: all .2s;
}
.user-bg:hover {
	height: 35px;
	width: 35px;
}
.user-bg p {
	position: absolute;
}
.bg-label {
	position: absolute;
	color: #666;
	width: 100%;
	margin: 0px 3px 15px -3px;
	text-align: center;
	bottom: 0;
}
.bg-label:after { 
	color: #ddd; 
}

.bg0 {
	background-image: url(<?php echo $root; ?>images/bg-0.jpg) !important;
}
.bg1 {
	background-image: url(<?php echo $root; ?>images/bg-1.jpg) !important;
}
.bg2 {
	background-image: url(<?php echo $root; ?>images/bg-2.jpg) !important;
}
.bg3 {
	background-image: url(<?php echo $root; ?>images/bg-3.jpg) !important;
}

.user-bg:hover ~ .bg-label span {
	display: none;
}
.bg0:hover ~ .bg-label:after {
  content: 'Blur';
}
.bg1:hover ~ .bg-label:after {
  content: 'Space';
}
.bg2:hover ~ .bg-label:after {
  content: 'Combs';
}
.bg3:hover ~ .bg-label:after {
  content: 'Confetti';
}


</style>