<?php
function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'].'/';
    return $protocol.$domainName;
}

$siteurl = siteURL();
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamic Dummy Image Generator - DummyImage.com</title>
<head>
<link href="/css/reset.css" rel="stylesheet" media="all">
<link href="/css/dummyimage.css" rel="stylesheet" media="all">
<link rel="shortcut icon" href="/favicon.ico">
<script type="text/javascript">
	//if ( top != self ) { top.location.href = '<?php echo $siteurl; ?>/'; }
</script>
</head>
<body>
<script type="text/javascript">
/*(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
*/
</script>
<h1>Dynamic Dummy Image Generator Hello</h1>
<cite>by <a href="#about">Russell Heimlich</a> (<a href="http://www.twitter.com/kingkool68">@kingkool68</a>)</cite>
<div id="preview"> <img src="<?php echo $siteurl; ?>/600x400/000/fff">
  <h2><a href="<?php echo $siteurl; ?>/600x400/000/fff" target="_blank"><?php echo $siteurl; ?>/600x400/000/fff</a></h2>
</div>
<form id="demo">
  <label for="size">Size
    <input type="text" class="text" name="size" id="size" value="600x400" size="8">
  </label>
  <span class="slash seperator">/</span>
  <label for="bgColor">Background Color
    <input type="text" class="text" name="bgColor" id="bgColor" value="000" size="6" maxlength="6">
  </label>
  <span class="slash seperator">/</span>
  <label for="fgColor">Foreground Color
    <input type="text" class="text" name="fgColor" id="fgColor" value="fff" size="6" maxlength="6">
  </label>
  <span class="period seperator">.</span>
  <label for="format">Format
    <select name="format" id="format">
      <option value="" selected></option>
      <option value=".png">png</option>
      <option value=".gif">gif</option>
      <option value=".jpg">jpg</option>
    </select>
  </label>
  <span class="ampersand seperator">&amp;</span>
  <label for="text">Text
    <input type="text" name="text" id="text" value="" size="30">
  </label>
    <span class="ampersand seperator">&amp;</span>
  <label for="text">Time offset
    <input type="text" name="offset" id="text" value="" size="30">
  </label>
</form>
<h3 id="documentation">Documentation</h3>
<h4 id="size">Size</h4>
<p>width x height</p>
<ul>
  <li>Height is optional, if no height is specified the image will be a square. Example: <a href="<?php echo $siteurl; ?>/300" class="example correct"><?php echo $siteurl; ?>/300</a></li>
  <li><strong>Must</strong> be the first option in the url</li>
  <li>You can specify one dimension and a ratio and dummyimage will calculate the right value. Example: <a href="<?php echo $siteurl; ?>/640x4:3" class="example correct"><?php echo $siteurl; ?>/640x4:3</a> or <a href="<?php echo $siteurl; ?>/16:9x1080" class="example correct"><?php echo $siteurl; ?>/16:9x1080</a></li>
</ul>
<h4 id="color">Colors</h4>
<p>background color / text color</p>
<ul>
  <li>Colors are represented as hex codes (#ffffff is white)</li>
  <li>Colors always follow the dimensions, <a href="<?php echo $siteurl; ?>/250/ffffff/000000" target="_blank" class="example correct"><?php echo $siteurl; ?>/250/ffffff/000000</a> not <a href="<?php echo $siteurl; ?>/ffffff/250/000000" target="_blank" class="example incorrect"><?php echo $siteurl; ?>/ffffff/250/000000</a></li>
  <li>The first color is always the background color and the second color is the text color.</li>
  <li>The background color is optional and defaults to gray (#cccccc)</li>
  <li>The text color is optional and defaults to black (#000000)</li>
  <li>There are shortcuts for colors
    <ul>
      <li>3 digits will be expanded to 6, <span class="example">09f</span> becomes <span class="example">0099ff</span></li>
      <li>2 digits will be expanded to 6, <span class="example">ef</span> becomes <span class="example">efefef</span></li>
      <li>1 digit will be repeated 6 times, <span class="example">c</span> becomes <span class="example">cccccc</span> Note: a single 0 will not work, use 00 instead.</li>
    </ul>
  </li>
  <li>Standard image sizes are also available. See the <a href="#standards">complete list</a>.
    <ul>
      <li><a href="<?php echo $siteurl; ?>/qvga" target="_blank" class="example correct"><?php echo $siteurl; ?>/qvga</a></li>
      <li><a href="<?php echo $siteurl; ?>/skyscraper/f0f/f" target="_blank" class="example correct"><?php echo $siteurl; ?>/skyscraper/f0f/f</a></li>
    </ul>
  </li>
</ul>
<h4 id="format">Image Formats</h4>
<p>.gif, .jpg, .png</p>
<ul>
  <li>Adding an image file extension will render the image in the proper format</li>
  <li>Image format is optional and the default is a gif</li>
  <li>jpg and jpeg are the same</li>
  <li>The image extension can go at the end of any option in the url
    <ul>
      <li><a href="<?php echo $siteurl; ?>/300.png/09f/fff" target="_blank" class="example correct"><?php echo $siteurl; ?>/300.png/09f/fff</a></li>
      <li><a href="<?php echo $siteurl; ?>/300/09f.png/fff" target="_blank" class="example correct"><?php echo $siteurl; ?>/300/09f.png/fff</a></li>
      <li><a href="<?php echo $siteurl; ?>/300/09f/fff.png" target="_blank" class="example correct"><?php echo $siteurl; ?>/300/09f/fff.png</a></li>
    </ul>
  </li>
</ul>
<h4 id="text">Custom Text</h4>
<p>&amp;text=Hello+World</p>
<ul>
  <li>Custom text can be entered using a query string at the very end of the url.</li>
  <li>This is optional, default is the image dimensions (<span class="example">300&times;250</span>)</li>
  <li>a-z (upper and lowercase), numbers, and most symbols will work just fine.</li>
  <li>Spaces become +
    <ul>
      <li><a href="<?php echo $siteurl; ?>/200x300&text=dummyimage.com+rocks!" target="_blank" class="example correct"><?php echo $siteurl; ?>/200x300&amp;text=dummyimage.com+rocks!</a></li>
    </ul>
  </li>
  <li>The font used is from the freely available <a href="http://mplus-fonts.sourceforge.jp" target="_blank">M+ Font Project</a></li>
</ul>
<p>The following characters need to be encoded using the UTF-8 Hex version in order to be renederd properly.</p>
<table id="special-characters">
	<thead>
    	<tr>
        	<th>Character</th>
            <th>UTF-8 Hex Equivalent</th>
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td>+</td>
            <td><a href="<?php echo $siteurl; ?>/480&text=Plus+Sign=0x2B">0x2B</a></td>
        </tr>
    	<tr>
        	<td>#</td>
            <td><a href="<?php echo $siteurl; ?>/480&text=Number+sign+(Octothorp)=0x23">0x23</a></td>
        </tr>
    	<tr>
        	<td>%</td>
            <td><a href="<?php echo $siteurl; ?>/480&text=Percent+symbol=0x25">0x25</a></td>
        </tr>
    	<tr>
        	<td>&amp;</td>
            <td><a href="<?php echo $siteurl; ?>/480&text=Ampersand=0x26">0x26</a></td>
        </tr>
    </tbody>
</table>
<p>You'll run into problems trying to manually enter a dimension as text if the numbers use the UTf-8 Hex values above, like <a href="<?php echo $siteurl; ?>/480&text=400x250">&amp;text=400x250</a>. Use a multiplication symbol, &#215; instead (not an x character) to get around this, <a href="<?php echo $siteurl; ?>/480&text=400×250">&amp;text=400&#215;250</a>.</p>
<p>If you need to use other unicode characters, look up their UTF-8 Hex version at <a href="http://www.fileformat.info/info/unicode/char/search.htm" target="_blank">http://www.fileformat.info/info/unicode/char/search.htm</a></p>
<h4 id="standards">Standard Image Sizes</h4>
<p>Several standard dimensions are included in dummyimage.com including <a href="http://www.iab.net/iab_products_and_industry_services/1421/1443/1452">ad sizes</a> and <a href="http://en.wikipedia.org/wiki/File:Vector_Video_Standards2.svg">screen resolution sizes</a>.</p>
<h5 id="ad">Ad Sizes</h5>
<table>
  <thead>
    <tr>
      <th>Keyword</th>
      <th>Shortcuts</th>
      <th>Dimensions</th>
      <th>Regular Expression</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/mediumrectangle">mediumrectangle</a></td>
      <td><a href="<?php echo $siteurl; ?>/medrect">medrect</a></td>
      <td>300&times;250</td>
      <td>^(med)\w+(rec\w+)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/squarepopup">squarepopup</a></td>
      <td><a href="<?php echo $siteurl; ?>/sqrpop">sqrpop</a></td>
      <td>250&times;250</td>
      <td>^(s\w+pop)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/verticalrectangle">verticalrectangle</a></td>
      <td><a href="<?php echo $siteurl; ?>/vertrec">vertrec</a></td>
      <td>240&times;400</td>
      <td>^(ver)\w+(rec)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/largerectangle">largerectangle</a></td>
      <td><a href="<?php echo $siteurl; ?>/lrgrec">lrgrec</a></td>
      <td>336&times;280</td>
      <td>^(large|lrg)(rec)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/rectangle">rectangle</a></td>
      <td><a href="<?php echo $siteurl; ?>/rec">rec</a></td>
      <td>180&times;150</td>
      <td> ^(rec)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/popunder">popunder</a></td>
      <td><a href="<?php echo $siteurl; ?>/pop">pop</a></td>
      <td>720&times;300</td>
      <td>^(pop)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/fullbanner">fullbanner</a></td>
      <td><a href="<?php echo $siteurl; ?>/fullban">fullban</a></td>
      <td>468&times;60</td>
      <td>^(f\w+ban)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/halfbanner">halfbanner</a></td>
      <td><a href="<?php echo $siteurl; ?>/halfban">halfban</a></td>
      <td>234&times;60</td>
      <td>^(h\w+ban)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/microbar">microbar</a></td>
      <td><a href="<?php echo $siteurl; ?>/mibar">mibar</a></td>
      <td>88&times;31</td>
      <td>^(m\w+bar)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/button1">button1</a></td>
      <td><a href="<?php echo $siteurl; ?>/but1">but1</a></td>
      <td>120&times;90</td>
      <td>^(b\w+1)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/button2">button2</a></td>
      <td><a href="<?php echo $siteurl; ?>/but2">but2</a></td>
      <td>120&times;60</td>
      <td>^(b\w+2)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/verticalbanner">verticalbanner</a></td>
      <td><a href="<?php echo $siteurl; ?>/vertban">vertban</a></td>
      <td>120&times;240</td>
      <td>^(ver\w+ban)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/squarebutton">squarebutton</a></td>
      <td><a href="<?php echo $siteurl; ?>/sqrbut">sqrbut</a></td>
      <td>125&times;125</td>
      <td>^(s\w+but)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/leaderboard">leaderboard</a></td>
      <td><a href="<?php echo $siteurl; ?>/leadbrd">leadbrd</a></td>
      <td>728&times;90</td>
      <td>^(lea\w+rd)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wideskyscraper">wideskyscraper</a></td>
      <td><a href="<?php echo $siteurl; ?>/wiskyscrpr">wiskyscrpr</a></td>
      <td>160&times;600</td>
      <td>^(w\w+sk\w+r)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/skyscraper">skyscraper</a></td>
      <td><a href="<?php echo $siteurl; ?>/skyscrpr">skyscrpr</a></td>
      <td>120&times;600</td>
      <td>^(sk\w+r)</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/halfpage">halfpage</a></td>
      <td><a href="<?php echo $siteurl; ?>/hpge">hpge</a></td>
      <td>300&times;600</td>
      <td>^(h\w+g)</td>
    </tr>
  </tbody>
</table>
<h5 id="screen">Screen Standards</h5>
<table>
  <thead>
    <tr>
      <th>Keyword</th>
      <th>Dimensions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/cga">cga</a></td>
      <td>320x200</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/qvga">qvga</a></td>
      <td>320x240</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/vga">vga</a></td>
      <td>640x480</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wvga">wvga</a></td>
      <td>800x480</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/svga">svga</a></td>
      <td>800x480</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wsvga">wsvga</a></td>
      <td>1024x600</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/xga">xga</a></td>
      <td>1024x768</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wxga">wxga</a></td>
      <td>1280x800</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wsxga">wsxga</a></td>
      <td>1440x900</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wuxga">wuxga</a></td>
      <td>1920x1200</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/wqxga">wqxga</a></td>
      <td>2560x1600</td>
    </tr>
  </tbody>
</table>
<h5 id="video">Video Standards</h5>
<table>
  <thead>
    <tr>
      <th>Keyword</th>
      <th>Dimensions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/ntsc">ntsc</a></td>
      <td>720x480</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/pal">pal</a></td>
      <td>768x576</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/hd720">hd720</a></td>
      <td>1280x720</td>
    </tr>
    <tr>
      <td><a href="<?php echo $siteurl; ?>/hd1080">hd1080</a></td>
      <td>1920x1080</td>
    </tr>
  </tbody>
</table>
<h4 id="flash">Flash Support</h4>
<p>Dummyimage.com works with Flash applications.</p>
<ul>
  <li>Images are served with a specified <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.13" class="example">Content-Length</a> so they can be used in preloaders</li>
  <li>Dummyimage.com uses a <a href="<?php echo $siteurl; ?>/crossdomain.xml" class="example">crossdomain.xml</a> file</li>
</ul>

<div id="supported-by">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#demo input, #demo select').change(function() {
		updateDemo();
	});
});

var url;

function updateDemo() {
	var url = '<?php echo $siteurl; ?>';
	$('#demo input, #demo select').each(function(count) {
		if( $(this).val() ) {
			switch(count) {
				case 1:
					url += '/' + $(this).val();
				break;
				case 2:
					url += '/' + $(this).val();
				break;
				case 4:
					var text = $(this).val();
					text = text.replace(/#/ig, "0x23"); 
					text = text.replace(/%/ig, "0x25");
					text = text.replace(/&/ig, "0x26");
					text = text.replace(/\+/ig, "0x2B");
					text = text.replace(/\s/ig, '+');
					url += '&text=' + text;
				break;
				case 5:
					url += '&offset=' + parseInt($(this).val(),10);
				break;
				default:
					url += $(this).val();
			}
		}	
	});
	$('#preview img').attr('src',url).next('h2').find('a').attr('href',url).text(url);
}
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-50793-5");
pageTracker._trackPageview();
} catch(err) {}

</script>
</body>
</html>