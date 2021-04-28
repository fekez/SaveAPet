<?php
$pagetitle = array(
    'title' => 'Save A Pet',
);

$header = array(
    'imagesource' => 'logo2.png',
    'imagealt' => 'logo',
	'title' => 'Save A Pet'
);

$home = array(
    'adopt' => array('imagesource' => 'adopt.png', 'title' => 'ADOPT', 'link' => 'https://www.saveapet.com/adopt/', 'color' => '#d4fad6', 'text' => "Give love to a homeless cat or dog by going through our easy adoption process. There are many animals that need your love! Make a difference by choosing adoption."),
    'volunteer' => array('imagesource' => 'volunteer.png', 'title' => 'VOLUNTEER', 'link' => 'https://www.saveapet.com/volunteering/', 'color' => '#d4eefa',  'text' => "You can volunteer your spare time and help our not-for-profit business. Help clean and feed animals, transport them to the clinic, and at events among other options."),
    'attend' => array('imagesource' => 'attend.png', 'title' => 'ATTEND OUR EVENTS', 'link' => 'https://www.saveapet.com/events-page/', 'color' => '#e58c8c', 'text' => "We have several different events happening around Palm Beach County throughout the year. Meet our adoptable pets, enjoy a night out, and learn more about what we do."),
    'donate' => array('imagesource' => 'donate.png', 'title' => 'DONATE', 'link' => 'https://www.saveapet.com/donation/', 'color' => '#FFF4D9',  'text' => "We operate solely on private donations. You can help feed, help provide veterinary care to pets, or help us control the feral cat population, among other necessary causes.")

);

$pictures = array(
    'homedog' => array('imagesource' => 'homedog.jpg', 'imagealt' => 'Dog'),
    'homecat' => array('imagesource' => 'homecat.jpg', 'imagealt' => 'Cat'),
    'aboutus1' => array('imagesource' => 'aboutus1.jpg', 'imagealt' => 'About us'),
    'aboutus2' => array('imagesource' => 'aboutus2.png', 'imagealt' => 'About us'),
    'aboutus3' => array('imagesource' => 'aboutus3.jpg', 'imagealt' => 'About us'),
    'aboutus4' => array('imagesource' => 'aboutus4.jpg', 'imagealt' => 'About us')

);

$video = array(
    'src' => 'Cat.mp4', 'type' => 'video/mp4'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'firm' => 'Save A Pet'
);

$footerlogo = array(
    'facelogo' => array('imagesource' => 'facebooklogo.png', 'imagealt' => 'Facebook logo', 'link' => 'https://www.facebook.com/saveapetflorida'),
    'twitlogo' => array('imagesource' => 'twitterlogo.png', 'imagealt' => 'Twitter logo', 'link' => 'https://twitter.com/SaveaPetFL')
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'HOME'),
	'aboutus' => array('file' => 'aboutus', 'text' => 'ABOUT US'),
	'gallery' => array('file' => 'gallery', 'text' => 'GALLERY'),
    '/2' => array('file' => 'home', 'text' => '<img src="./images/logo2.png" alt="HOME" style="padding: 0px;">'),
    'galleryup' => array('file' => 'galleryup', 'text' => 'IMAGE UPLOAD'),
    'contact' => array('file' => 'contact', 'text' => 'CONTACT'),
    'process' => array('file' => 'process', 'text' => 'PROCESS')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');

$FOLDER = './images/gallery/';
$TYPES = array ('.jpg', '.png');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "m/d/Y H:i";
$MAXSIZE = 500*1024; 

?>