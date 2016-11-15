<style type="text/css">

/**********************************************/
/*    Banner                                  */
/**********************************************/

.banner {
	width: 60%;
	top: 30px;
	margin: 0 auto 60px;
	display: block;
	transition: all ease .5s;
		-webkit-transition: all ease .5s;
}
.banner a {
	display: block;
}
.banner a img {
	width: 100%;
}


/**********************************************/
/*    Main Navigation MENU                    */
/**********************************************/
.nav {
	z-index: 1000;
}
.nav {	
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	height: 90px;
	position: fixed;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.menu-button {
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	color: #fff;
	font-size: 16px;
	text-transform: uppercase;
	font-size: x-large;
	position: fixed;
	cursor: default;
	display: block;
}
.menu-button:hover, .menu-button:active {
	color: black;
}
.menu * {
	transition: all ease 0.25s;
		-webkit-transition: all ease 0.25s;
}
.menu {
	width: 100%;
	height: 40px;
	margin: 0 auto;
	display: none;
	position: relative;
}
.menu, .menu li ul li,
/* For Mobile */
.menu li:nth-child(1):before:hover {
	background: #151515;
}
.menu a {
	color: #ddd;
	height: 100%;
	font-size: 15px;
	text-decoration: none;
	text-align: center;
	font-variant: small-caps;
	cursor: pointer;
	display: block;
	line-height: 275%;
}
/* Each Tab */
.menu li {
	background: rgba(0,0,0,0.5);
	width: 20%;
	height: 100%;
	list-style: none;
	margin: 0;
	padding: 0;
	float: left;
	position: relative;
	box-sizing: border-box;
	text-align: center;
}
.menu li:hover {
	background: rgba(0,100,200,0.5);
	box-shadow: inset 0px 0px 0px #3DCC99;
}
.menu li a:hover {
	/*color: #8F5AFF;*/
}
.menu li ul li:hover {
	display: block;
}
.menu li ul {
	height: 100%;
	width: 100%;
	list-style: none;
	padding: 0px;
	position: relative;
	margin: 0px;
	display: none;
}
.menu li ul li {
	width: 100%;
	height: 100%;
	margin-top: -1px;
	border-left: solid 1px rgba(0,90,200,0.8);
	border-right: solid 1px rgba(0,90,200,0.8);
	border-bottom: solid 1px rgba(0,90,200,0.8);
	position: relative;
}
.click-thru > a {
	cursor: default !important;
}
.click-thru > a:hover {
	background: rgba(0,0,0,0.5);
	color: #9578BF !important;
}



/******** Active Page ********/
.active-page a, .active-page span {
	color: #00E3FF !important;
}
.active-page span{
	left: -78px !important;
	top: 0 !important;
}
.active-page img {
	display: none !important;
}

</style>