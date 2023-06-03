
<!DOCTYPE>
<html>
	<head>
		<title>Learning PHP first</title>
		<link rel="stylesheet" href="css/res.css">
	</head>
	
	<body>
		<div class="wrap">
			<!--Name and contact-->
			
			<div class="name" > <?php echo $_POST['name']; ?></div>
			
			<div class="degis" ><?php echo $_POST['degis']; ?></div>
			
			<div class="contact">
				<a href="mailto:<?php echo $_POST['email']; ?>" class="logoanc" target="_blank" >
					<img class="logo" src="img/email.png" alt="Email_logo">
				</a>
				<a href="tel:<?php echo $_POST['num']; ?>" class="logoanc"  target="_blank">
					<img src="img/num.png"  class="logo" alt="Contact_number">
				</a>
				<a href="<?php echo $_POST['linkedin']; ?>" class="logoanc" target="_blank">
					<img src="img/linkedin.png" class="logo" alt="Linkedin_Link">
				</a>
				<a href="<?php echo $_POST['github']; ?>" class="logoanc" target="_blank">
					<img src="img/github.png" class="logo" alt="GitHub">
				</a>
			</div>
			<hr class="hr">
			
			<!--education-->
			<div class="edu_wrap">
				<div class="edu_head">Education</div>
				<div class="edu_cont">
					<div class="edu_up">
						<div class="college_name">
							<?php echo $_POST['lastedu']; ?> 
						</div>
						<div class="course_duration">
							<?php echo $_POST['lastyear']; ?>
						</div>
					</div>
					<div class="edu_2">
						<div class="course"><?php echo $_POST['lastcourse']; ?></div>
						<div class="marks"><?php echo $_POST['lastmark']; ?></div>
					</div>
				</div>
				<div class="edu_cont">
					<div class="edu_up">
						<div class="college_name">
							<?php echo $_POST['seclastedu']; ?> 
						</div>
						<div class="course_duration">
							<?php echo $_POST['seclastyear']; ?>
						</div>
					</div>
					<div class="edu_2">
						<div class="course"><?php echo $_POST['seclastcourse']; ?></div>
						<div class="marks"><?php echo $_POST['seclastmark']; ?></div>
					</div>
				</div>
			
			</div>
			
			<div class="skill_wrap">
				<div class="skill_head edu_head">Skills</div>
				
				<div class="skill_cont">
					<div class="skill_up">
						<span class="skill_name">PROGRAMMING LANGUAGES :</span><?php echo $_POST['skill1']; ?></span>
					</div>
					
					<div class="skill_up">
						<span class="skill_name">Web Stacks :</span><?php echo $_POST['skill2']; ?></span>
					</div>
				</div>
			</div>
			
			<!--project-->
			<div class="project_wrap">
				<div class="project_head edu_head">Project / Open Source</div>
				
				<!--1st  project-->
				
				<div class="project_cont">
					<div class="project_up">
						<div class="project_name">
							<spna class="b"><?php echo $_POST['pname1']; ?> | <a href="<?php echo $_POST['purl1']; ?>"  target="_blank"> Link </a></span>
						</div>
						<div class="project_tech">
							<?php echo $_POST['pstack1']; ?>
						</div>
					</div>
					<div class="project_down">
						<div class="project_des">
							<ul>
								<li>
								<?php echo $_POST['pdes1']; ?>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
				
				<!--2nd project-->
				
				<div class="project_cont">
					<div class="project_up">
						<div class="project_name">
							<spna class="b"><?php echo $_POST['pname2']; ?>| <a href="<?php echo $_POST['purl2']; ?>" target="_blank" > Link </a></span>
						</div>
						<div class="project_tech">
							<?php echo $_POST['pstack2']; ?>
						</div>
					</div>
					<div class="project_down">
						<div class="project_des">
							<ul>
								<li>
									<?php echo $_POST['pdes2']; ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
				<!--3nd project-->
				
				<div class="project_cont">
					<div class="project_up">
						<div class="project_name">
							<spna class="b"><?php echo $_POST['pname3']; ?>| <a href="<?php echo $_POST['purl3']; ?>" target="_blank"> Link </a></span>
						</div>
						<div class="project_tech">
							<?php echo $_POST['pstack3']; ?>
						</div>
					</div>
					<div class="project_down">
						<div class="project_des">
							<ul>
								<li>
									<?php echo $_POST['pdes3']; ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<!--Certification-->
			
			<div class="certi_wrap">
				<div class="certi_head edu_head">Certifications</div>
				
				<div class="certi_cont">
					<ul>
						<li><?php echo $_POST['certi1']; ?> - <a href="<?php echo $_POST['certiurl1'];?>" target="_blank"> | Link </a> </li>
						<li><?php echo $_POST['certi2']; ?> - <a href="<?php echo $_POST['certiurl2'];?>" target="_blank"> | Link </a> </li>
					</ul>
				</div>
			</div>
			
			<!--Honor & Awards-->
			
			<div class="honor_wrap">
				<div class="honor_head edu_head">HONORS & AWARDS</div>
				
				<div class="honor_cont">
					<ul>
						<li><?php echo $_POST['award1']; ?> - <a href="<?php echo $_POST['awardurl1'];?>" target="_blank"> | Link </a> </li>
						<li><?php echo $_POST['award2']; ?> - <a href="<?php echo $_POST['awardurl2'];?>" target="_blank"> | Link </a> </li>
					</ul>
				</div>
			</div>
			

			<a href="http://localhost/learning/formtoresume/front.php">Return to Previous Page</a>
		</div>		
	</body>

</html>