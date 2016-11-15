
<style type="text/css">

/**********************************************/
/*           Body & Include Fields            */
/**********************************************/

@media only screen and (max-width: 600px) {
    .wrapper, .nav, .banner {
			width: 100%;
    }
		.wrapper {
			background: rgba(0,0,0,0);
			border: 0;
		}
		.content, .wrapper-content {
			width: 100%;
			margin-left: 0;
			margin-right: 0;
			padding-left: 0;
			padding-right: 0;
		}
		.content {
			margin: 0;
			border-bottom: solid 1px rgba(0,90,200,0.6);
		}
		.content * {
  		box-sizing: border-box !important;
		}
		.menu, .menu li ul li, .wrapper, .content *, 
		.user-panel, .comments li {
			border-left: 0px;
			border-right: 0px;
		}
		
		/* Mobile Transparency Enzymes */
		.content, .feed-body, .feed-footer, 
		.user-button, .user-quicklinks > ul,
		.comment-redirect, .menu li {
			background: #111 !important;
		}
		form, .comments {
			width: 100% !important;
			padding: 0 !important;
		}
		.comments li {
			margin: 20px 0 !important;
		}
		.home-doh {
			padding: 0;
			background: transparent !important;
		}
		
		
		/* Menu Items */
    .menu {
			height: 200px;
    }
		.nav {
			height: auto;
		}
		.nav, .banner, .menu-button {
			position: relative;
		}
		.menu-button {
			background: rgba(0,100,200,1);
			width: 100%;
			height: 40px;
			position: relative;
			text-align: center;
		}
    .menu li {
			float: none;
			width: 100%;
			height: 40px;
    }
		.menu li:hover {
			background: rgba(0,50,100,0.5);
		}
		
		/* Fix Mobile Clicking Home */
    .menu li:nth-child(1):before {
			display: block;
			content: "Welcome";
			width: 100%;
			height: 40px;
			background: #111;
			float: none;
			line-height: 40px;
			color: #444;
			top: -40px;
			position: absolute;
    }
    .menu li:nth-child(1) {
			margin-top: 40px;
    }
			/* Fix Subitems */
			.menu li ul li:nth-child(1):before {
				display: none;
			}
			.menu li ul {
				top: -40px;
			}
		
		/* Body Items */
		.comment-container {
			margin-top: 0;
			padding: 5px 0;
		}
		.intro-banner-container, feed-item {
			margin: 30px auto 0 auto;
		}
		.feed-item {
			width: 100%;
			margin: 50px 0 0;
    	float: none;
    }
		* {
    	opacity: 1 !important;
    		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  	}
		
		
		/* Login Items */
		.user-menu {
			text-align: center;
			color: #999;
			padding: 0;
		}
		div.user-logins-container,
		div.user-logins-container * {
			transition: all ease 0s !important;
				-webkit-transition: all ease 0s !important;
				-moz-transition: all ease 0s !important;
		}
		.user-logins-container {
			width: 100%;
			height: auto;
			padding: 0px;
			margin: 0px;
			left: 0;
			top: 0;
		}
		.user-button {
			margin: 0px;
			float: left;
			width: 50%;
			height: 30px;
			border-left: transparent;
			border-right: transparent;
			border-bottom: transparent;
  		box-sizing: border-box;
			transform: rotate(0deg);
				-webkit-transform: rotate(0deg);
				-moz-transform: rotate(0deg);
		}
		.user-panel {
			background: #111;
			width: 100%;
			margin: 29px auto 0 auto;
		}
		.user-quicklinks > ul {
			margin: 0 auto;
			border-bottom: 0px;
		}
		.user-quicklinks ul:hover {
			/* Copy From Primary Border */
			border-bottom: solid 1px rgba(0,90,200,0.6);
		}
		.content form td {
			display: table-row;
		}
		.content form tr {
			display: block;
			margin: 10px 0 40px;
		}
		
		
		/* Folders */
		.file-browser {
			height: auto;
			width: 100%;
			padding-right: 0;
			display: block;
			float: none;
			border-right: 0px;
			border-bottom: solid 1px rgba(0,100,200,0.3);
			margin-bottom: 20px;
		}
		.file-browser table {
			width: 100%;
		}
		.folder {
			width: 50px;
			height: 50px;
			padding-bottom: 0;
			border-radius: 5px;
			z-index: 5;
			vertical-align: middle;
		}
		.folder .selector {
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			position: absolute;
			border-radius: 5px;
			overflow: hidden;
			vertical-align: middle;
			display: inline-block;
		}
		.folder .selector img {
			height: 100%;
			width: 100%;
			position: relative;
		}
		/* File Viewer */
		.file-viewer {
			width: 100%;
			height: auto;
			display: block;
			vertical-align: top;
			overflow-y: auto;
			float: none;
		}
		
		
		
		/* Widgets */
		.widget {
			margin: 20px auto;
		}
		
		
		
		/* Misc */
		#solar-system {
			display: none;
		}
}

/******** HoverEnable if(Not Mobile) ********/
/*********** Adjust This =  Above ***********/
@media only screen and (min-width: 600px) {
    .menu li:hover ul {
			display: block;
		}
}

</style>