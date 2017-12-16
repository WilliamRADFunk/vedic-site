/*
Theme Name: VEDIC
Description: The default WordPress theme created for the V.E.D.I.C. Website
Author: William Robert Funk
Author URI: http://www.williamrobertfunk.com/
Tags: 

	This theme was designed by Andrea Acosta Duarte,
	whose blog you will find at http://www.andreaacostaduarte.com/
	This theme was built by William Robert Funk,
	whose blog you will find at http://www.williamrobertfunk.com/

*/
var themeName = "nsomnium-master";

function openBio(name)
{
	var elem = document.getElementById('dev-tooltip-message');
	if(name === "vinson")
	{
		elem.innerHTML = "I joined this team because I have confidence in each of my teammates’ ability, and I didn’t want to provide free labor to some corporate entity only not to own it after I finished. If Icontributed in the creation of something awesome, I want the right to be able to talk about it and the right to do whatever I want with it after it's done. Going back to the idea of creating something awesome, nothing compares to working with Virtual Reality. Virtual Reality is a hot topic currently in the tech industry. The reason, Virtual Reality brings new possibilities for developers that were once thought unobtainable. I want to work with Virtual Reality because I see a growing need for it in the future and none of the other projects that were pitched made use of the technology. This is the first thing that attracted me to the group, each member wanted to work with Virtual Reality. The thing that is keeping my interest with this group is that we are building something in Virtual Reality that has the potential to advance Virtual Reality’s developmental potential. We are not building a game that uses Virtual Reality, we are building a development tool.";
	}
	else if(name === "rodriguez")
	{
		elem.innerHTML = "My initial motivation to pursuing this project was to create a playground where people can come in and interact with a system that we provide on a social level. This eventually molded itself, with the help of my colleagues, into VEDIC. I love the idea of working with an engine like Unity, the inclusion of VR equipment such as the Oculus, and other tech to make something extraordinary. I have always been drawn to videogames, and working in Unity for this project was an obvious candidate for projecting that lifelong stimulation into a profession. Of course, this goes beyond just working in Unity, because the project is trying to utilize the potential of Unity as a \'game\­engine\' to create a platform for developing code.";
	}
	else
	{
		elem.innerHTML = "It was one of my earliest childhood memories where I had first been introduced to virtual reality 25 years ago. In the carnival games section at Busch Gardens, there was a featured attraction. It had an apparatus the size of a small pool, a headset that threatened to topple me over from the sheer weight of it, and a handheld blaster reminiscent of the science fiction movies of that era. I can still remember that 3D world of polygons, low-resolution pterodactyls swooping in, and my cube projectiles spitting forth at a whopping 40 frames per second. For a moment, as a child, I had stepped into the future; an exciting future with endless possibilities. Now two-and-a-half decades later, I’ve finally caught up to that future. I can create the reality around me with the code from my fingertips. What’s left? Someone or some group to make this technology more relevant in the here and now. This is why VEDIC is important. This is our contribution to that dream.";
	}
	document.getElementById('dev-tooltip').style.display = 'block';
}
function closeBio()
{
	document.getElementById('dev-tooltip').style.display = 'none';
}
function openFeatureTip()
{
	jQuery('#feature-carousel li').each(function(index) {
		if(index !== 0)
		{
			jQuery( this ).css('display', 'none');
			jQuery('#pagination').append('<div id=p' + index + ' class="page" onclick="changePage(this)"></div>');
		}
		else jQuery('#pagination').append('<div id=p' + index + ' class="page active" onclick="changePage(this)"></div>');
	});
	document.getElementById('feature-tooltip').style.display = 'block';
}
function closeFeatureTip()
{
	jQuery('#pagination').empty();
	document.getElementById('feature-tooltip').style.display = 'none';
}
function changePage(elem)
{
	var page;
	jQuery('#pagination div').each(function(index)
	{
		jQuery(this).removeClass('active');
		if( jQuery( this )[0].id === elem.id )
		{
			page = index;
			jQuery( this ).addClass('active');
		}
	});
	jQuery('#feature-carousel li').each(function(index)
	{
		if(index === page) jQuery( this ).css('display', 'block');
		else jQuery( this ).css('display', 'none');
	});
}
function showDoc(elem)
{
	var div = elem.getElementsByTagName('div')[0];
	div.style.backgroundColor = "rgba(0,0,0,0)";
	div.style.backgroundImage = "url('/wp-content/themes/" + themeName + "/assets/btn-plus-white-and-title-bar.png')";
	div.style.backgroundSize = "100% 100%";
	div.style.backgroundPosition = "0% 0%";
	elem.getElementsByTagName('h6')[0].style.display = 'block';
}
function hideDoc(elem)
{
	if(window.innerWidth >= 600)
	{
		var div = elem.getElementsByTagName('div')[0];
		div.style.backgroundColor = "rgba(191,186,186,0.7)";
		div.style.backgroundImage = "url('/wp-content/themes/" + themeName + "/assets/btn-plus-black.png')";
		div.style.backgroundSize = "auto auto";
		div.style.backgroundPosition = "100% 100%";
		elem.getElementsByTagName('h6')[0].style.display = 'none';
	}
}