<?php include('header.php');?>

<div class="container">
<div class="ui grid">
        <div class="four wide column">
        <div class="verticalMenu">
            <div class="ui vertical pointing menu fluid">
              <a class="item" href="personal_info.php">
              <i class="user icon"></i>Personal Info
              </a>
            <a class="item" href="contact_info.php">
              <i class="book icon"></i>Contact Info
            </a>
              <a class="item" href="work_info.php">
                <i class="user icon"></i> work
              </a>
            <a class="active red item" href="education_info.php">
                <i class="student icon"></i> Educations
              </a>
               <a class="item" href="Certificate_info.php">
                <i class="mail icon"></i> Certifications
              </a>
               <a class="item" href="Achievements_info.php">
                <i class="trophy icon"></i> Achievements
              </a>
               <a class="item" href="skills_info.php">
                <i class="users icon"></i> Skills & Languanges
              </a>
               <a class="item" href="Reference_info.php">
                <i class="spy icon"></i> Reference
              </a>
              </div>
          </div>
    </div>
    <div class=" twelve wide column">
    <a style="font-size: 20px; color:black;">Educational Attainment (*)&nbsp;&nbsp;</a>
           <select name="industry" class="ui big fluid search dropdown" id="education">
               <option value="">-Please Select one-</option>
               <option>High School Diploma</option>
               <option>Senior High School Diploma</option>
               <option>TESDA / Technical / Vocational Certificate</option>
               <option>Some College (But did not graduate)</option>
               <option>Bachelor's/College Degree</option>
               <option>Post Graduate Diploma / Master's Degree</option>
               <option>Professional License (Passed Board/Bar/Professional License Exam)</option>
               <option>Doctorate Degree</option>
        </select>
    </div> 
    <div class="four wide column">
</div>
    <div class="six wide column" style="margin-top:-250px;">
    <a style="font-size: 20px; color:black;">School (*)&nbsp;&nbsp;</a>
           <select name="industry" class="ui big fluid search dropdown" id="school">
               <option value="">-Please Select one-</option>
               <option>High School Diploma</option>
               <option>Senior High School Diploma</option>
               <option>TESDA / Technical / Vocational Certificate</option>
               <option>Some College (But did not graduate)</option>
               <option>Bachelor's/College Degree</option>
               <option>Post Graduate Diploma / Master's Degree</option>
               <option>Professional License (Passed Board/Bar/Professional License Exam)</option>
               <option>Doctorate Degree</option>
        </select>
            <br><br>
            <a style="font-size: 20px; color:black">Major/Course (*)</a>
        <div class="ui big fluid left icon input">
            <input type="text" placeholder="Major/Course (*)">
            <i class="user icon"></i>
        </div>
            
</div>
    <div class="six wide column" style="margin-top:-250px;">
<a style="font-size: 20px; color:black;">Field of Study(*)&nbsp;&nbsp;</a>
           <select name="industry" class="ui big fluid search dropdown" id="study">
               <option value="">-Please Select one-</option>
               <option>Accounting</option>
               <option>Actuarial Science</option>
               <option>Advertising/Media</option>
               <option>Agriculture/Aquaculture/Forestry</option>
               <option>Airline Operation/Airport Management</option>
               <option>Architecture</option>
               <option>Arts and Literature</option>
               <option>Biology</option>
               <option>Biosciences</option>
               <option>Business Studies/Administration/Management</option>
               <option>Chemistry</option>
               <option>Communications/PR</option>
               <option>Computer Science/Information Technology</option>
               <option>Creative Multimedia</option>
               <option>Culinary Arts/Cooking</option>
               <option>Dentistry</option>
               <option>Economics</option>
               <option>Education/Teaching/Training</option>
               <option>Engineering (Aviation/Aeronautics/Astronautics)</option>
               <option>Engineering (Bioengineering/Biomedical)</option>
               <option>Engineering (Chemical)</option>
               <option>Engineering (Civil)</option>
               <option>Engineering (Computer)</option>
               <option>Engineering (Electrical)</option>
               <option>Engineering (Electronic and Communication)</option>
               <option>Engineering (Environmental/Health/Safety)</option>
               <option>Engineering (Industrial)</option>
               <option>Engineering (Marine)</option>
               <option>Engineering (Material Science)</option>
               <option>Engineering (Mechanical)</option>
               <option>Engineering (Mechatronic/Electromechanical)</option>
               <option>Engineering (Metal Fabrication/Tool and Die/Welding)</option>
               <option>Engineering (Mining/Mineral)</option>
               <option>Engineering (Others)</option>
               <option>Engineering (Petroleum/Oil/Gas)</option>
               <option>Finance</option>
               <option>Fine Arts/Design/Graphics</option>
               <option>Food and Beverage Services Management</option>
               <option>Food Science/Nutrition/Dietetics</option>
               <option>Geographical Science</option>
               <option>Geology/Geophysics</option>
               <option>History</option>
               <option>Hospitality/Hotel and Restaurant Management</option>
               <option>Human Resource Management</option>
               <option>Humanities/Liberal Arts</option>
               <option>Journalism</option>
               <option>Law</option>
               <option>Library Management</option>
               <option>Linguistics/Languages</option>
               <option>Logistic/Transportation</option>
               <option>Maritime Studies</option>
               <option>Marketing</option>
               <option>Mathematics</option>
               <option>Medical Science</option>
               <option>Medicine</option>
               <option>Music/Performing Arts Studies</option>
               <option>Nursing</option>
               <option>Optometry</option>
               <option>Personal Services</option>
               <option>Pharmacy/Pharmacology</option>
               <option>Philosophy</option>
               <option>Physical Therapy/Physiotherapy</option>
               <option>Physics</option>
               <option>Political Science</option>
               <option>Property Development/Real Estate Management</option>
               <option>Protective Services and Management</option>
               <option>Psychology</option>
               <option>Science and Technology</option>
               <option>Secretarial</option>
               <option>Social Science/Sociology</option>
               <option>Sports Science and Management</option>
               <option>Textile/Fashion Design</option>
               <option>Theology/Religious Studies</option>
               <option>Tourism/Travel</option>
               <option>Urban Studies/Town Planning</option>
               <option>Veterinary</option>
        </select>
            <br><br>
            <a style="font-size: 20px; color:black">Graduation Date</a>
            <div class="ui calendar" id="calendar2">
        <div class="ui big fluid left icon input">
            <input type="text" placeholder="Graduation Date">
            <i class="calendar icon"></i>
        </div>
        </div>
           </div>
    </div>
    
    
    
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
  <!--JS[Semantic]-->
  <script type="text/javascript" src="semantic/dist/semantic.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script type="text/javascript">
  $('#education').dropdown();

</script>
<script type="text/javascript">
  $('#school').dropdown();

</script>
<script type="text/javascript">
  $('#study').dropdown();

</script>
<script type="text/javascript">
$('#calendar2').calendar({
  type: 'date'
});

</script>