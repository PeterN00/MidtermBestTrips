<!DOCTYPE html>
<html lang="en">
<head>
  @includeIf('partials.W3CSS')
</head>
<body class="w3-light-grey " style="background-image: url('{{URL::asset('assets/img/about-bg.jpg') }}');">
<!-- Page Container -->
<x-navbar />
	<div class="wrapper">
		<div class="resume">
			<div class="left">
				<div class="img_holder">
					<img src="{{ URL::asset('/img/about/khoe.JPG') }}" alt="Avatar">
				</div>
				<div class="contact_wrap pb">
					<div class="title">
						Contact
					</div>
					<div class="contact">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-mobile-alt" aria-hidden="true"></i></div>
									<div class="text">0852 306 641</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
									<div class="text">minhkhoefe@gmail.com</div>
								</div>
							</li>
					
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-map-signs" aria-hidden="true"></i></div>
									<div class="text">880/86 XVNT,Binh Thanh District, Ho Chi Minh City.</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="skills_wrap pb">
					<div class="title">
						Skills
					</div>
					<div class="skills">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-html5"></i></div>
									<div class="text">HTML</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-css3-alt"></i></div>
									<div class="text">CSS</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-js"></i></div>
									<div class="text">Javascript</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fab fa-react"></i></div>
									<div class="text">React.JS</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="hobbies_wrap pb">
					<div class="title">
						hobbies
					</div>
					<div class="hobbies">
						<ul>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-book"></i></div>
									<div class="text">Reading</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-music"></i></div>
									<div class="text">Music</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-gamepad"></i></div>
									<div class="text">Gaming</div>
								</div>
							</li>
							<li>
								<div class="li_wrap">
									<div class="icon"><i class="fas fa-dragon"></i></div>
									<div class="text">Making Music</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="header">
					<div class="name_role">
						<div class="name">
							Ngo Minh Khoe
						</div>
						<div class="role">
							Front-End Developer
						</div>
					</div>
					<div class="about">
						<h1>I'm <span class="auto-input"></span></h1>
					</div>
				</div>
				<div class="right_inner">
					<div class="exp">
						<div class="title">
							experience
						</div>
						<div class="exp_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											2021 - Present
										</div>
										<div class="info">
											<p class="info_title">
												Front-End Developer 
											</p>
											<p class="info_com">
												REACTJS
											</p>
											<p class="info_cont">
												This project has been done by the Reactjs programming language with the full functionality of a online shopping website with a vivid and unique Front-End interface.											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2020 - 2021
										</div>
										<div class="info">
											<p class="info_title">
												Front-End Developer
											</p>
											<p class="info_com">
												HTML & CSS - PHP
											</p>
											<p class="info_cont">
												Use HTML & CSS for creating a Shopping Online Website with some basic effect, handle some functional of PHP like payment, shipping, cart.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2019 - 2020
										</div>
										<div class="info">
											<p class="info_title">
												Basic Calculator
											</p>
											<p class="info_com">
												Java Swing
											</p>
											<p class="info_cont">
												Create a basic Calculator with some basic function like Summation, Subtraction, Division, Multiplication.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="education">
						<div class="title">
							Education
						</div>
						<div class="education_wrap">
							<ul>
								<li>
									<div class="li_wrap">
										<div class="date">
											Target
										</div>
										<div class="info">
											<p class="info_title">
												Become fresher Front-End Developer
											</p>
											<p class="info_com">
												Self-Learning.
											</p>
											<p class="info_cont">
												Become a Fresher Front-End Developer after 3 months.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2021 - 2022
										</div>
										<div class="info">
											<p class="info_title">
												Javascript & ReactJS
											</p>
											<p class="info_com">
												Learning in School
											</p>
											<p class="info_cont">
												Studied basic Javascript, when i can know enough to make a project. I learned more about ReactJS.
											</p>
										</div>
									</div>
								</li>
								<li>
									<div class="li_wrap">
										<div class="date">
											2019 - 2020
										</div>
										<div class="info">
											<p class="info_title">
												Java
											</p>
											<p class="info_com">
												Learning in School
											</p>
											<p class="info_cont">
												Learning and Research Java.
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
	<script>
		var typed = new Typed(".auto-input", {
			strings: ["Ngo Minh Khoe.","21 years old.", "Front-End Developer."],
			typeSpeed: 100,
			backSpeed: 100,
			loop: true
		})
	</script>
</body>
</html>