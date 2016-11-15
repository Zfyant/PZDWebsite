<style type="text/css">
/* Functionality */

.file-browser {
	background: rgba(50,50,100,0.0);
	height: 100%;
	width: 25%;
	padding-right: 1%;
	display: inline-block;
	overflow-y: auto;
	left: 0;
	float: left;
	border-right: solid 1px rgba(0,100,200,0.3);
  border-collapse: separate;
	border-spacing: 10px 30px;
	
}
.file-browser tbody tr {
	height: auto;
	text-align: center;
}
.folder {
	width: 40%;
	padding-bottom: 35%;
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
	position: absolute;
	left: 0;
}
.folder .tag {
	background: rgba(100,100,100,0.5);
	width: 140%;
  vertical-align: middle;
	position: absolute;
}
.folder .tag p {
  vertical-align: middle;
}



/* File Viewer */
.file-viewer {
	background: rgba(0,0,100,0.0);
	width: 71%;
	height: 100%;
	display: inline-block;
	vertical-align: top;
	overflow-y: auto;
	float: left;
}
.file-viewer > div {
    display: none;
}
.file-viewer > div:target{
    display: block;
}
.file-viewer .contents {
}

.file-viewer .contents .download-table {
	background: rgba(0,0,0,0.6);
	margin: 10px auto;
	width: auto;
	max-width: 500px;
	height: auto;
	line-height: 1em;
	border-collapse: separate;
  border-spacing: 5px;
	z-index: 15;
}
.file-viewer .contents .download-table td {
	border: solid 0px #444;
	margin: 10px;
	padding: 5px 10px;
}
.file-viewer .contents .download-dets {
	background: rgba(100,0,0,0.0);
	color: #ddd;
	width: 90%;
	height: 100%;
	margin: 0 auto;
	padding: 10px;
	text-align: left;
	list-style: circle;
}
.file-viewer .contents .download-dets h2 {
	color: #fff;
	text-decoration: underline;
}
.highlight-dl {
	color: #FF8600;
}
</style>