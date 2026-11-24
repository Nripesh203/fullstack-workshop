<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Learning Resource Platform</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<header>
		<h1> Learnhub </h1>
		<nav>
			<a href="#courses">Courses</a>
			<a href="#guides">Guides</a>
			<a href="#media">Media</a>
			<a href="#notices">Notices</a>
		</nav>
		

	</header>

	<main>
		<section id="courses">
			<h2>Learning Modules</h2>
			<p>Learning materials for students</p>

			<article class="card-featured"> </article>
			
			<span>Featured Module</span>
			<h3>Web Technologies</h3>
			<p> Learning semantics , HTML5, css, flexbox properties</p>

			<ul>
				<li>HTML5 structure</li>
				<li>CSS Layout systems</li>

			</ul>
			<a href="#media"> View Media</a>
		</article>

		<article class="card">
			<h3>Programming basics</h3>
			<p> Variables, loops, functions and clean problem logic</p>

			<ul>
				<li>Control flow</li>

			</ul>
			<a href="#guides">Read Guides</a>

		</article>

		<article class="card">
			<h3>Database Systems</h3>
			<p> Relational Database, Relational tables, primary keys</p>

			<ul>
				<li>System Design</li>
				<li>Basic Queries</li> 
			</ul> 

			<a href="#guides"> Read Guides</a>


		</article>


		</section>

		<section id = "guides">
			<h2>Study Resources</h2>
			<article class="box">
				<h3>Documentation</h3>
				<p>Offical web docs</p>
				<a href="https://developer.mozilla.org/" target="_blank" rel="noopener noreferrer"> Open MDN</a>
			</article>


			<article class="box">
				<h3> CSS layout properties</h3>
				<p>Visual Examples for flexbox and grid properties</p>

				<a href="https://css-tricks.com/" target="_blank" rel="noopener noreferrer"> Open Css-Tricks</a>
			</article>
		</section>

		<section id="media" class="media">
			<h2> Multimedia</h2>

			<figure>
				<img src="assets/study.jpeg" alt="Student studying web development on a laptop"/>
				<figcaption>Figure 1: Self paced lab practice sessions</figcaption>
			</figure>

		

		<section class="box">
			<h3> Tutorial Video </h3>
			<video controls> 
				<source src="assets/intro.mp4" type="video/mp4"/>
				Your browser does  ot support HTML5 video
			</video>
			</article>

			<article class="box">
				<h3> Revision Audio</h3>
				<audio controls> 
					<source src = "assets/audio.mp3" type ="audio/mpeg" />
					Your browser does not support HTML5 audio
				</audio>
			</article>

		</section>
	</main>

	<aside id = "notices">
		<section class="box">
			<h2> Announcements</h2>
			<ul>
				<li> Submit Week 1 on the <code>week1</code>branch</li>
				<li>Test mobile, tablet and desktop views</li>

			</ul>
		</section>
	</aside>

	<footer>
		<p>&copy; 2026 Learhub Student Platform</p>
	</footer>





</body>
</html>