<!DOCTYPE html>
<html>
	<head>
		<title>James Sipprelle's Portfolio</title>
		<meta name="robots" content="noindex">
		<link rel="stylesheet" href="style.css">
		<script src="anime.min.js"></script>
		<script src="script.js" type="application/javascript"></script>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
	</head>
	<body>
		<main>
			<nav>
				<ul>
					<li><a onclick="loadHome();">Home</a></li>
					<li><a onclick="loadResume();">Resume</a></li>
					<li><a onclick="loadProjects();">Projects</a></li>
				</ul>
			</nav>
			
			<div id="indexDiv">
				<h1 class="animationTop">James Sipprelle
				</h1>
				<br>
				<h2 class="animationBot">Software engineer</h2>
			</div>
			
			<div id="resumeDiv" style="display:none;">
				<iframe src="./resume.pdf" width="75%" height="70%"></iframe>
			</div>
			<div id="projectsDiv" style="display:none;">
				<div class="project">
					<div class="project_name">MessageMe (full-stack web application)</div>
					<button type="button" onclick="window.location.href = 'https://github.com/jsipprelle/MessageMe';">Code</button>
					<!--<button type="button">Demo</button>-->
					<br>
					<img src="images/messageme.png" alt="Screenshot of MessageMe">
					<p><strong>Languages:</strong> SQL, JavaScript</p>
					<p><strong>Field:</strong> Social networking, web programming</p>
					<div class="project_description">MessageMe is a chat application.</div>
				</div>

				<div class="project">
					<div class="project_name">OntologizeThis (answer set solver)</div>
					<button type="button" onclick="window.location.href = 'https://github.com/jsipprelle/Ontologize-This/';">Code</button>
					<button type="submit">Download</button>
					<br>
					<img src="images/ot.png" alt="Screenshot of OntologizeThis">
					<p><strong>Language:</strong> Java</p>
					<p><strong>Libraries:</strong> Swing</p>
					<p><strong>Field:</strong> Answer set programming, UI design</p>
					<div class="project_description">OntologizeThis is an answer set solver for propositional logic formulae.</div>
				</div>

				<div class="project">
					<div class="project_name">NeuroSim (scientific computing model)</div>
					<img src="images/hrm.svg" alt="Screenshot of NeuroSim">
					<p><strong>Language:</strong> MATLAB</p>
					<p><strong>Fields:</strong> Scientific computing, numerical methods, computational neuroscience</p>
					<div class="project_description">NeuroSim is a spiking neuron simulator that approximates solutions to Hindmarsh–Rose equations using Euler's method.</div>
				</div>

				<div class="project">
					<div class="project_name">UIXLite (language interpreter)</div>
					<p><strong>Language:</strong> Java</p>
					<p><strong>Libraries:</strong> Swing</p>
					<p><strong>Field:</strong> Parsing</p>
				<div class="project_description">UIXLite implements a parser that creates a GUI based on an input file written in a custom scripting language.</div>
				</div>

				<div class="project">
					<div class="project_name">EthereumXchange (blockchain application)</div>
					<p><strong>Language:</strong> JavaScript (Node.js)</p>
					<p><strong>Libraries:</strong> dashevo/dashcore-lib</p>
					<p><strong>Field:</strong> P2P networking</p>
					<div class="project_description">EthereumXchange allows users to send the Ethereum cryptocurrency between wallets.</div>
				</div>

				<div class="project">
					<div class="project_name">UImageRecognizer (k-means implementation)</div>
					<p><strong>Language:</strong> Python</p>
					<p><strong>Libraries:</strong> numpy</p>
					<p><strong>Fields:</strong> Machine learning (unsupervised learning), optical character recognition</p>
					<div class="project_description">ImageRecognizer2 clusters unlabeled training samples of human handwriting.</div>
				</div>

				<div class="project">
					<div class="project_name">SImageRecognizer (naive Bayes classifier)</div>
					<p><strong>Language:</strong> Python</p>
					<p><strong>Libraries:</strong> numpy</p>
					<p><strong>Fields:</strong> Machine learning (supervised learning), optical character recognition</p>
					<div class="project_description">ImageRecognizer1 uses 10,000 labeled training samples of images of human handwriting to classify 2,000 images of test data.</div>
				</div>

				<div class="project">
					<div class="project_name">WarehouseBot (ASP challenge 2019 solution)</div>
					<p><strong>Language:</strong> clingo</p>
					<p><strong>Fields:</strong> Answer set programming</p>
					<div class="project_description">WarehouseBot provides the optimal solution to one of the 2019 ASP challenge problems.</div>
				</div>

				<div class="project">
					<div class="project_name">RawPower (password cracker)</div>
					<p><strong>Language:</strong> C++</p>
					<p><strong>Field:</strong> Computer security</p>
					<div class="project_description">RawPower brute forces any number of passwords, given a list of md5sums.</div>
				</div>

				<div class="project">
					<div class="project_name">LifeSim (video game)</div>
					<p><strong>Language:</strong> C++</p>
					<p><strong>Libraries:</strong> Stanford C++ libraries</p>
					<p><strong>Fields:</strong> Artificial life, game programming</p>
					<div class="project_description">LifeSim is a zero-player game with 2-d graphics based on Conway's Game of Life.</div>
				</div>

				<div class="project">
					<div class="project_name">ReflectionExplorer (debugger)</div>
					<p><strong>Language:</strong> Java</p>
					<p><strong>Libraries:</strong> Reflection API</p>
					<p><strong>Fields:</strong> Debugging, reverse engineering</p>
					<div class="project_description">Reflector allows a user to debug Java applications by accessing private fields at runtime.</div>
				</div>
			</div>
		</main>
		<script>
		firstAnimation();
		</script>
	
	</body>
</html>

