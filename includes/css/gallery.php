<style type="text/css">


.galleryTitle {
	font-size: xx-large;
	margin: 20px 0 30px 0;
	text-align: center;
}

.gallery {
	background: rgba(0,100,0,0.0);
}

.gallery .iContainer {
	background: #000;
	height: 0;
  overflow: hidden;
	padding-bottom: 56.25%;
}
.gallery .iContainer .iFrame {
	position: absolute;
  top: 0;
  left: 0;
  width: 99%;
  height: 99%;
	
  background-attachment: scroll;
  background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
  overflow: hidden;
}
.iContainer .photography {
	background: url(<?php echo $root; ?>collections/photography/image_1.jpg);
}
.iContainer .graphicdesign {
	background: url(<?php echo $root; ?>collections/graphic_design/image_1.jpg);
}



.gallery .thumbnails {
	background: rgba(0,100,100,0.0);
	margin-top: 20px;
	text-align: justify;
  text-justify: distribute-all-lines;
}
.gallery .thumbnails .img {
	display: inline-block;
}
.gallery .thumbnails .img .thumbnail {
	width: 200px;
	height: 112px;
	margin: 20px;
	display: inline-block;
	cursor: cell;
	transition: all ease 1s;
}













</style>