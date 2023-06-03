
<!DOCTYPE>
<html>
	<head>
		<title>Learning PHP first</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrap">
		
			<div class="header">Resume Builder</div>
			
			<form action="result.php" method="POST">
			
				<div class="info" >
					<label class="label">Enter your Full Name :</label>
					<input type="text" placeholder=" Enter Your Name" class="inputlabel" name="name">
					<label class="label">Enter your Degisnation:</label>
					<input type="text" placeholder=" Enter Your Degisnation"  name="degis" class="inputlabel">
				</div>
				
				<div class="inhead">Contact Info</div>
				
				<div class="info" >
					<label class="label">Enter your Email :</label>
					<input type="email" placeholder=" Enter Your Email" class="inputlabel" name="email">
					<label class="label">Enter your Contact Number:</label>
					<input type="tel" placeholder="Enter Contact Number" class="inputlabel" name="num">
				</div>
				
				<div class="info" >
					<label class="label">Enter your Linkedin profile Link:</label>
					<input type="url" placeholder="Linkedin profile link" class="inputlabel" name="linkedin">
					<label class="label">Enter your Github profile Link:</label>
					<input type="url" placeholder="GitHub profile link" class="inputlabel" name="github">
				</div>
				
					
				<hr class="hori">
				
				<!-- education information here -->
				

				
				<div class="inhead">Education</div>
				
				<!-- Last Education -->
				
				<div class="inhead small" >Last Course</div>
				
				<div class="info" >
					<label class="label">Institution Name </label>
					<input type="text" placeholder="Last Education" class="inputlabel" name="lastedu">
					
					<label class="label">Your Passing Year</label>
					<input type="text" placeholder="Passing year" class="inputlabel" name="lastyear">
					
					
					
				</div>
				
				<div class="info" >
					<label class="label">Course Name </label>
					<input type="text" placeholder="Last course" class="inputlabel" name="lastcourse">
					
					<label class="label">Your Marks </label>
					<input type="text" placeholder="Last marks" class="inputlabel" name="lastmark">
					
				</div>
				
				<hr class="hori">
				
				<!-- Second Last Education -->
				<div class="inhead small" >Second Last Course</div>
				
				<div class="info" >
					
					<label class="label">Institution Name </label>
					<input type="text" placeholder="Last Education" class="inputlabel" name="seclastedu">
					
					<label class="label">Your Passing Year</label>
					<input type="text" placeholder="Passing year" class="inputlabel" name="seclastyear">
				</div>
				
				<div class="info" >
					<label class="label">Course Name </label>
					<input type="text" placeholder="Last course" class="inputlabel" name="seclastcourse">
					<label class="label">Your Marks </label>
					<input type="text" placeholder="Last marks" class="inputlabel" name="seclastmark">
					
				</div>
				
				<hr class="hori">
				
				<!--skill-->
				
				<div class="inhead">Technical Skills</div>
				<div class="info">
					<label class="label">Programming Languages</label>
					
					<input type="text" name="skill1" placeholder="Programming Languages" class="inputlabel">
					
					<label class="label">Web Stacks</label>

					<input type="text" name="skill2" placeholder="Web Stacks" name="skill2" class="inputlabel" >
				</div>
				
				<hr class="hori">
				
				<!-- Project information here -->
				

				
				<div class="inhead">Projects/Open Sources</div>
				
				<!-- 1 project-->
				
				<div class="inhead small" >First Project</div>
				
				<div class="info" >
					<label class="label">Project Name</label>
					<input type="text" placeholder="Project Name" class="inputlabel" name="pname1">
					
					<label class="label">URL of Project</label>
					<input type="url" placeholder="URL of Project" class="inputlabel" name="purl1">
					
				</div>
				
				<div class="info" >
					
					<label class="label">Tech Stack</label>
					<input type="text" placeholder="Tech stack used in it" class="inputlabel" name="pstack1">
					
					<label class="label">Describe your project</label>
					<input type="text" placeholder="Describe Project" class="inputlabel" name="pdes1">
				</div>
				
				<hr class="hori">
				
				<!-- 2nd project-->
				
				<div class="inhead small" >Second Project</div>
				
				<div class="info" >
					<label class="label">Project Name</label>
					<input type="text" placeholder="Project Name" class="inputlabel" name="pname2">
					
					<label class="label">URL of Project</label>
					<input type="url" placeholder="URL of Project" class="inputlabel" name="purl2">
				</div>
				
				<div class="info" >
					<label class="label">Tech Stack</label>
					<input type="text" placeholder="Tech Stack used" class="inputlabel" name="pstack2">
					<label class="label">Describe your project</label>
					
					<input type="text" placeholder="Describe Project" class="inputlabel" name="pdes2">
				</div>
				
				<hr class="hori">
				
				<!--3rd project-->
				<div class="inhead small" >Third Project</div>
				
				<div class="info" >
					<label class="label">Project Name</label>
					<input type="text" placeholder="Project Name" class="inputlabel" name="pname3">
					
					<label class="label">URL of Project</label>
					<input type="url" placeholder="URL of Project" class="inputlabel" name="purl3">
					
				</div>
				
				<div class="info" >
					
					<label class="label">Tech Stack</label>
					<input type="text" placeholder="Tech Stack used" class="inputlabel" name="pstack3">
					
					<label class="label">Describe your project</label>
					<input type="text" placeholder="Describe Project" class="inputlabel" name="pdes3">
				</div>
				
				<hr class="hori">
				
				
				
				
				
				<!--Certifications Done-->
				
				<div class="inhead">Certifications</div>
				<div class="info">
					<label class="label">Certificaitons list </label>
					
					<input type="type" placeholder="Certification Title" name="certi1" class="inputlabel">
					
					<label class="label">Certification URL</label>
					
					<input type="url" name="certiurl1" placeholder="enter url" class="inputlabel">
				</div>
				<div class="info">
					<label class="label">Certificaitons list </label>
					
					<input type="text" placeholder="Certifications Title" name="certi2" class="inputlabel">
					
					<label class="label">Certification URL</label>
					
					<input type="url" name="certiurl2"placeholder="enter url" class="inputlabel">
				</div>
				
				
				<!--HOnor and Awards-->
				
				
				<div class="inhead">Honors and Awards</div>
				<div class="info">
					<label class="label">Honors / Awards list </label>
					
					<input type="text" placeholder="Certification Title" name="award1" class="inputlabel" >
					
					<label class="label" >Certification URL</label>
					
					<input type="url" name="awardurl1" class="inputlabel" placeholder="enter url">
				</div>
				<div class="info">
					<label class="label">Honors/Awards list </label>
					
					<input type="text" placeholder="Certifications
					Title" name="award2" class="inputlabel">
					
					<label class="label">Certification URL</label>
					
					<input type="url" name="awardurl2"class="inputlabel" placeholder="enter url">
				</div>
				
				<div class="sub">
					<input type="submit" value="submit">
				</div>
			</form>
		</div>
	</body>

</html>