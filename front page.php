<html xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:website="http://ogp.me/ns/website" lang="en-US">




<!--Always remember your individuality is valued.
The market around us will try to convince you you are less than, in order to sell you the solution.
I have had too many friends take their lives due to this huslte ideology and the binary experience it cultivates, please reach out if you need to. 💖 patrickrshevlin@outlook.com 💖
Our current reality will not change until we begin to be gracious with each other.
Remember this.
We are not commodities to be comsumed and used, our spirits are crying out for the love we rightly deserve.
Everyone deserves this love, this is not a competition, but a shared gift of conciousness.
Lets experience it together.-->




<head>

<meta charset="utf-8" />
<meta property="og:site_name" content="patrick shevlin"/>
<meta property="og:title" content="patrick shevlin"/>
<meta property="og:url" content="https://www.patrickshevlin.net"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="contemporary artist"/>
<meta itemprop="name" content="patrick shevlin"/>
<meta itemprop="url" content="https://www.patrickshevlin.net"/>
<meta itemprop="description" content=" contemporary artist "/>
<meta name="twitter:title" content="patrick shevlin"/>
<meta name="twitter:url" content="https://www.patrickshevlin.net"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:description" content=" contemporary artist " />
<meta name="viewport" content="width=device-width, initial-scale=1">



<!--***title-script***
This Javascript is based on Constant Dullart's work!-->
<script language="javascript">
var message = new Array();
message[0] = ""
var reps = 2;
var speed = 1000;
var p = message.length;
var T = "";
var C = 0;
var mC = 0;
var s = 0;
var sT = null;
if (reps < 1) reps = 1;
function doIt() {
  T = message[mC];
  A();
}
function A() {
s++;
if (s > 3) { s = 1;}
if (s == 1) { document.title = 'Patrick Shevlin'; }
if (s == 2) { document.title = '💸💪🤑Rise & Grind🤑💪💸'; }
if (s == 3) { document.title = '🍷🍞Lets Get This Bread🍞🍷'; }if (C < (3 * reps)) {
  sT = setTimeout("A()", speed);
  C++;
}
else {
  C = 0;
  s = 0;
  mC++;
if(mC > p - 1) mC = 0;
  sT = null;
  doIt();
   }
}
doIt();

(function() {
	var template = ''.split(''),
		len = template.length,
		chars, string, i, j, k,
		pushOrHash = typeof window.history.pushState === 'function',

	increase = function(n) {
		return n < len - 1 ? n + 1 : 0;
	},

	update = function() {
		chars = [];
		j = k;

		for (i=0; i<len; i++) {
			j = increase(j);
			chars[i] = template[j];
		}

		string = ['/', chars.join(''), '/'].join('');
		k = increase(k);

		if (pushOrHash) {
			window.history.pushState(null, null, string);
		}
		else {
			window.document.location.hash = string;
		}

		setTimeout(update, 1000);
	};

	update();
})();
</script>
<!--***end title-script***-->


<!--dropdowns-script-->
<script language="javascript">
/* show content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}


function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}


function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}


/* close dropdown */
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>



<!--font-->
<link href='https://fonts.googleapis.com/css?family=IBM Plex Sans' rel='stylesheet'>



<!--style-->
<style>


.dropbtn {
  background-color: white;
  color: black;
  padding: 0px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}


.dropbtn:hover, .dropbtn:focus {
  background-color: white;
  color: #c8a2c8;
}


.dropdown {
  position: relative;
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 1000px;
  overflow: auto;
  z-index: 1;
}


.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 1000px;
  overflow: auto;
  z-index: 1;
}


.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 1000px;
  overflow: auto;
  z-index: 1;
}


.dropdown-content a {
  color: black;
  padding: 0px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content2 p {
  color: black;
  padding: 0px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content3 p {
  color: black;
  padding: 0px 14px;
  text-decoration: none;
  display: block;
}


.dropdown a:hover {background-color: white;}


.show {display: block;}


img {
  max-width: 100%;
  height: auto;
}


body {
    font-family: 'IBM Plex Sans';font-size: 16px;
}


p {
  max-width: 1000px;
}


a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}


a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}


a:hover {
  color: #c8a2c8;
  background-color: transparent;
  text-decoration: none;
}


a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}


a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}


a:hover {
  color: #c8a2c8;
  background-color: transparent;
  text-decoration: none;
}



/*Floating Back-To-Top Button*/
    #myBtn {
        position: fixed;
        bottom: 30px;
        float: right;
        right: 30px;
        width: 100px;
        height: 100px
        font-size: 70px;
        background: none;
        border: none;
        padding: .5px;


    }
/*On Hover Color Change*/
    #myBtn:hover {
        color: #c8a2c8;
    }



</style>

</head>

<body>


<style type="text/css">* {cursor: url(https://cur.cursors-4u.net/nature/nat-10/nat979.ani), url(https://cur.cursors-4u.net/nature/nat-10/nat979.gif), auto !important;}</style><a href="https://www.cursors-4u.com/cursor/2011/12/15/corgi.html" target="_blank" title="Corgi"><img src="https://cur.cursors-4u.net/cursor.png" border="0" alt="Corgi" style="position:absolute; top: 0px; right: 0px;" /></a>


<p style="font-size:40px" id="top"><a href="https://patrickshevlin.net">patrick shevlin</a></p>
<a href="https://patrickshevlin.com/wp-content/uploads/2019/12/cv.pdf" target="_blank">cv</a><br>
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">contact</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="mailto:patrickshevlin@protonmail.com">patrickshevlin@protonmail.com</a>
    <a href="https://www.instagram.com/patrick_shevlin_/" target="_blank">instagram</a>
  </div>
</div><br>
<div class="dropdown">
  <button onclick="myFunction2()" class="dropbtn">work</button>
  <div id="myDropdown2" class="dropdown-content">

    <a href="#mobile">Mobile📱</a>

    <a href="#security">Security Security Security🔒</a>

    <a href="#balance">Balance💳</a>

      <a href="#energy crisis">Energy Crisis🔋</a>

    <a href="#drip">Drip💦</a>

    <a href="#ofpb">Oh Fuck Put It Back In!🥵</a>

    <a href="#iiwii">It Is What It Is⛽</a>

    <a href="#late">Late⏰</a>

    <a href="#masc/fem">Masculine/ Feminine📢</a>



  </div>
</div><br>
<div class="dropdown">
  <button onclick="myFunction3()" class="dropbtn">about</button>
  <div id="myDropdown3" class="dropdown-content2">
    <p>Patrick Shevlin is a Tallahassee, FL based artist whose practice is concerned with the individual’s experience of the current capitalist landscape. This experience is mined to produce a broad body of work that includes sculpture, installation, and digital media.<br>
      <br>
	Central to their practice is the question of how an unremarkable person interacts with larger than life systems of control and objectivity, as well as their shared participation within these systems. The ways in which they sacrifice themselves or the methods they use to keep up with the increasingly frantic demands. Patrick is keenly aware of art’s position as a luxury commodity and the tendency of the art market to position itself as a counter to this. Subverting the visual language of commodities and relishing the opportunity to offer a deadpan take on the market’s concerns.
</p>
  </div>
</div><br>



<br>
<br>



<p id="mobile"><i><b>Mobile</b></i> :
iphone, casters<br>
A mobile phone is an incredible device that allows us an unprecedented level of mobile productivity, but what happens when algorithms and targeted content keep us locked into echo chambers and in a stagnant catatonic state? My suggestion is, drill some holes and mount some wheels, this should keep you skating through life with ease.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Mobile-1.jpg" alt="mobile 1" ><br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Mobile-2.jpg" alt="mobile 2" >
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Mobile-3.jpg" alt="mobile 3">
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Mobile-4.jpg" alt="mobile 4"><br>
</p>
<br>



<p id="security"><i><b>Security Security Security</b></i> :
iphone, padlocks<br>
Data security is a hot topic and major concern for mobile device users. Protecting privacy and staying one step ahead of hackers can seem like a full-time job. Passwords can be cracked but a padlock through the device’s motherboard can ensure your data is safe.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Security-1.jpg" alt="security security security" ><br>
</p>
<br>



<p id="balance"><i><b>Balance</b></i> :
credit cards<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Balance-1.jpg" alt="balance 1" ><br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Balance-2.jpg" alt="balance 2" >
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Balance-3.jpg" alt="balance 3"><br>
</p>
<br>



<p id="energy crisis"><i><b>Energy Crisis</b></i> :
rockstar energy drink, 18650 battery cells recovered from a Tesla Model S<br>
Cylindrical devices for storing energy. Easily transportable and ready to be consumed, running out of juice is simply not an option.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Energy-Crisis.jpg" alt="drip" ><br>
</p>
<br>



<p id="drip"><i><b>Drip</b></i> :
sneakers, ice<br>
First impressions are important, and in today's world you never know when your appearance is going to be captured by a security camera or go viral in a tweet. This makes the quest for drip essential, there are literally zero consequences to making sure you are dripping in the latest gear and creating a splash.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Drip.gif" alt="drip" ><br>
</p>
<br>



<!--HxD Hex Editor is what I use.  Basically copy the text from the blog, paste it into HxD, and save it as a .jpg or . png and you will have the image.
This is an extremely rudimentary form of image sharing, but long form blog sites like Tumblr are particularly friendly to this work around, Instagram will obviously be much harder.-->
<p id="ofpb"><i><b><a href="https://tumblr.com"><u>Oh Fuck Put It Back In!</u></a></b></i> :
a Tumblr blog<br>
When large corporations take an interest in online communities, the nature of the community comes second to their financial interests, and many members can find themselves labeled as undesirable.  On December 17th, 2018 Tumblr banned adult content after its acquisition by Verizon, only to be sold again in 2019 after Verizon realized their changes made the platform unprofitable. Oh Fuck Put It Back In! was created on December 18th, 2018 and is a Tumblr blog consisting of the HEX code of a nude image of the artist.  This work questions the nature of the digital image, the effectiveness of content bans, the influence of multinational corporation on the internet, and whether bodies belong behind a paywall.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/security-security-security.jpg" alt="Oh Fuck Put It Back In!" ><br>
</p>
<br>



<p id="iiwii"><i><b>It Is What It Is</b></i> :
generator, tv, extension cord, laptops<br>
A collaboration with <a href="https://www.kellylorrainehendrickson.com/" target="_blank"><u>Kelly Lorraine Hendrickson</u></a>.<br>
The generator powers both laptops and the television, with an extension cord running from the gallery entrance to the back of the gallery. Creating a closed loop that questions the excess and consumption related to art making and viewing.<br>
<br>
<video width="100%" controls>
 <source src="https://patrickshevlin.net/wp-content/uploads/2021/05/It-is-what-it-is.mp4" type="video/mp4">
 <source src="movie.ogg" type="video/ogg">
no video for you 😬
</video>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/iiwii3-2.jpg" alt="it is what it is 1" ><br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/iiwii2-2.jpg" alt="it is what it is 2" >
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/iiwii1-2.jpg" alt="it is what it is 3"><br>
</p>
<br>


<p id="late"><i><b>Late</b></i> :
disco ball, foil, strobe lights, spreakers, motion detector, custom relay<br>
A collaboration with <a href="https://www.kellylorrainehendrickson.com/" target="_blank"><u>Kelly Lorraine Hendrickson</u></a>.<br>
Everyone is late and no one is invited.  A room in the gallery is transformed into a disco with lights and music. All equipment is wired to a motion sensor and relay so when the room is entered the party ends and when exited the party starts again.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Late-On-2.jpg" alt="late 1" >
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/Late-Off-2.jpg" alt="late 2" ><br>
</p>

<br>

<p id="masc/fem"><i><b>Masculine/Feminine</b></i> :
megaphone, hairdryer<br>
A collaboration with <a href="https://www.kellylorrainehendrickson.com/" target="_blank"><u>Kelly Lorraine Hendrickson</u></a>.<br>
Gendering work is a strange practice.  When placed in an environment where identity politics are heightened (grad school), the work pokes at the common critique that a work is too masculine or feminine.  The blow dryer is set to high and the megaphone is at full volume, providing sufficient drone to drown out the former critique.<br>
<br>
<img src="https://patrickshevlin.net/wp-content/uploads/2021/05/masculine.feminine.png" alt="masculine/feminine" ><br>
</p>



<button id="myBtn"><a href="#top"><b>^top^</b></a></button>


</body>

</html>
