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
              <a class="active red item" href="work_info.php">
                <i class="user icon"></i> work
              </a>
            <a class="item" href="education_info.php">
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
    <a style="font-size: 20px; color:black;">Certification(*)&nbsp;&nbsp;</a>
    <div class=" ui fluid input action">
                    <input type="text" name="seminar" placeholder="Certificate">
      </div><br>
      <a style="font-size: 20px; color:black;">Date taken(*)&nbsp;&nbsp;</a>
      <div class="ui calendar" id="calendar2">
    <div class=" ui fluid input action">
                    <input type="text" name="seminar" placeholder="Date Taken">
      </div></div>
    </div> <br>

    <div class="four wide column">
</div>
   
    <
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