function firstAnimation()
{
	var header1 = document.getElementsByTagName("h1")[0];
	var header2 = document.getElementsByTagName("h2")[0];
	header1.innerHTML = header1.textContent.replace(/\S/g, "<span class='letterTop' style='opacity: 0;'>$&</span>");
	header2.innerHTML = header2.textContent.replace(/\S/g, "<span class='letterBot' style='opacity: 0;'>$&</span>");
	header1.style.display = "inline";
	header2.style.display = "inline";
	
	animateText();
}

function animateText()
{
	anime.timeline({loop: false}).add({
		targets: '.animationTop .letterTop',
		opacity: [0, 1],
		easing: "linear",
		duration: 1000,
		delay: 300
	});
	
	anime.timeline({loop: false}).add({
		targets: '.animationBot .letterBot',
		opacity: [0, 0.7],
		easing: "linear",
		duration: 1000,
		delay: 1000
	});
}

function loadHome()
{
	document.getElementById("projectsDiv").style.display = "none";
	document.getElementById("resumeDiv").style.display = "none";
	window.scrollTo(0, 0);
	
	var header1 = document.getElementsByTagName("h1")[0];
	var header2 = document.getElementsByTagName("h2")[0];
	header1.style.display = "none";
	header2.style.display = "none";
	document.getElementsByTagName("body")[0].style.overflowY = "hidden";
	
	animateText();
	
	setTimeout(() =>
	{
		document.getElementById("indexDiv").style.display = "inline-block";
		header1.style.display = "inline";
		header2.style.display = "inline";
	}, 400);
}

function loadResume()
{
	document.getElementById("indexDiv").style.display = "none";
	document.getElementById("projectsDiv").style.display = "none";
	window.scrollTo(0, 0);
	
	document.getElementById("resumeDiv").style.display = "inline-block";
	
	document.getElementsByTagName("body")[0].style.overflowY = "hidden";
}

function loadProjects()
{
	document.getElementById("indexDiv").style.display = "none";
	document.getElementById("resumeDiv").style.display = "none";
	window.scrollTo(0, 0);
	
	document.getElementById("projectsDiv").style.display = "inline-block";
	
	document.getElementsByTagName("body")[0].style.overflowY = "scroll";
}
