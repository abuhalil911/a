<?php include('header.php') ?>
        
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
            <div class="four wide column">
                <input type="file" name="">
                <img class="ui small image" src="images/team3.jpg" >
                <div class=" header">Taguig City University
                </div>
                <div class="ui  basic modal" style="height:150; width:500px; margin-left:-250px;;">
        <i class="close icon"></i>
                    <div class="header"></div>
        <div class="content" style="font-size:15px;">
          Are you sure that you want to delete this Picture ?
        </div>
                    <div class="footer">
                        <div class="pull-right" style="margin-right:55px;">
                     <button class="ui inverted blue button">Yes</button>
                     <button class="ui inverted red button">No</button>
                    </div>
                    </div>
       
      </div>
               <button class="ui small inverted red button" style="-webkit-border-radius:0px;" id="my">
                 <i class="delete icon"></i>&nbsp;&nbsp;&nbsp;Delete Image&nbsp;&nbsp;&nbsp;&nbsp;
  </button> 
            </div>
<div class="eight wide column">
     <a style="font-size: 20px; color:black">first name&nbsp;&nbsp;</a>
    <div class="ui large fluid left icon input">
            <input type="text" placeholder="First Name" Value="Taguig">
            <i class="student icon"></i>
    </div>
            <br>
     <a style="font-size: 20px; color:black">middle name</a>
        <div class="ui large fluid left icon input">
            <input type="text" placeholder="Middle Name" value="City">
            <i class="student icon"></i>
        </div>
            <br>
    <a style="font-size: 20px; color:black">last name&nbsp;&nbsp;</a>
        <div class="ui large fluid left icon input">
            <input type="text" placeholder="Last Name" value="University">
            <i class="student icon"></i>
        </div>
</div>
<div class="four wide column"><br><br/>
</div>
        <div class="three wide column">
            <div class="ui left action input">
             <button class="ui red labeled icon button">
    <i class="calendar icon"></i>
    birthdate
  </button> 
                <div class="ui left action input">
<select class="ui large search dropdown" id="gender" >
  
  <option value="0">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">Jully</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
                    </select></div>
                 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="ui large search dropdown" id="day">
  <option value="3">Day</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="0">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
  
                     </select>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="ui large search dropdown" id="year">
  <option value="1">1996</option>
  <option value="2">2001</option>
  <option value="3">2000</option>
  <option value="4">1999</option>
  <option value="5">1998</option>
  <option value="6">1997</option>
  <option value="7">1996</option>
  <option value="8">1995</option>
  <option value="9">1994</option>
  <option value="10">1993</option>
  <option value="11">1992</option>
  <option value="12">1991</option>
  <option value="13">1990</option>
  <option value="14">1989</option>
  <option value="15">1988</option>
  <option value="16">1987</option>
  <option value="17">1986</option>
  <option value="18">1985</option>
  <option value="19">1984</option>
  <option value="20">1983</option>
  <option value="21">1982</option>
  <option value="22">1981</option>
  <option value="23">1980</option>
  <option value="24">1979</option>
  <option value="25">1978</option>
  <option value="26">1977</option>
  <option value="27">1976</option>
  <option value="28">1975</option>
  <option value="29">1974</option>
  <option value="30">1973</option>
  <option value="31">1972</option>
  <option value="32">1971</option>
  <option value="32">1970</option>
  <option value="32">1969</option>
  <option value="32">1968</option>
  <option value="32">1967</option>
  <option value="32">1966</option>
  <option value="32">1965</option>
  <option value="32">1964</option>
  <option value="32">1963</option>
  <option value="32">1962</option>
  <option value="32">1961</option>
  <option value="32">1960</option>
    <option value="32">1959</option>
    <option value="32">1958</option>
    <option value="32">1957</option>
    <option value="32">1956</option>
    <option value="32">1955</option>
    <option value="32">1954</option>
    <option value="32">1953</option>
    <option value="32">1952</option>
    <option value="32">1951</option>
    <option value="32">1950</option>
    <option value="32">1949</option>
    <option value="32">1948</option>
    <option value="32">1947</option>
    <option value="32">1946</option>
    <option value="32">1945</option>
    <option value="32">1944</option>
    <option value="32">1943</option>
    <option value="32">1942</option>
    <option value="32">1940</option>
    <option value="32">1939</option>
    <option value="32">1938</option>
    <option value="32">1937</option>
    <option value="32">1936</option>
    <option value="32">1935</option>
    <option value="32">1934</option>
    <option value="32">1933</option>
    <option value="32">1932</option>
    <option value="32">1931</option>
    <option value="32">1930</option>



  
</select><br>
    
    
          
            </div>
            </div>
        
           
</div>
    <div class="field"><br><br>
        <div class="ui left action input"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <button class="ui red labeled icon button" >
                 <i class="big user icon"></i>
  </button> 
                <div class="ui left action input" >
<select class="ui large search dropdown" id="gende">
 
  <option value="1">Female</option>
  <option value="2">Male</option>
  
                    </select></div>
        </div>  
            <div class="ui left action input">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select class="ui large search dropdown" id="nationality">
         <option value="0">Philippines</option>
      <option value="1">Afghanistan</option>
      <option value="2">Albania</option>
      <option value="3">Algeria</option>
      <option value="4">American Samoa</option>
      <option value="5">Andorra</option>
      <option value="6">Angola</option>
      <option value="7">Anguilla</option>
      <option value="8">Antarctica</option>
      <option value="9">Antigua and Barbuda</option>
      <option value="10">Arctic Ocean</option>
      <option value="11">Argentina</option>
      <option value="12">Armenia</option>
      <option value="13">Aruba</option>
      <option value="14">Ashmore and Cartier Islands</option>
      <option value="15">Atlantic Ocean</option>
      <option value="16">Australia</option>
      <option value="17">Austria</option>
      <option value="18">Azerbaijan</option>
      <option value="19">Bahamas</option>
      <option value="20">Bahrain</option>
      <option value="21">Baker Island</option>
      <option value="22">Bangladesh</option>
      <option value="23">Barbados</option>
      <option value="24">Bassas da India</option>
      <option value="25">Belarus</option>
      <option value="26">Belgian Congo</option>
      <option value="27">Belgium</option>
      <option value="28">Belize</option>
      <option value="29">Benin</option>
      <option value="30">Bermuda</option>
      <option value="31">Bhutan</option>
      <option value="32">Bolivia</option>
      <option value="32">Borneo</option>
      <option value="32">Bosnia and Herzegovina</option>
      <option value="32">Botswana</option>
      <option value="32">Bouvet Island</option>
      <option value="32">Brazil</option>
      <option value="32">British Guiana</option>
      <option value="32">British Virgin Islands</option>
      <option value="32">Brunei</option>
      <option value="32">Bulgaria</option>
      <option value="32">Burkina Faso</option>
      <option value="32">Burma</option>
        <option value="32">Burundi</option>
        <option value="32">Cambodia</option>
        <option value="32">Cameroon</option>
        <option value="32">Canada</option>
        <option value="32">Cape Verde</option>
        <option value="32">Cayman Islands</option>
        <option value="32">Central African Republic</option>
        <option value="32">Chad</option>
        <option value="32">Chile</option>
        <option value="32">China</option>
        <option value="32">Christmas Island</option>
        <option value="32">Clipperton Island</option>
        <option value="32">Cocos Islands</option>
        <option value="32">Colombia</option>
        <option value="32">Comoros</option>
        <option value="32">Cook Islands</option>
        <option value="32">Egypt</option>
        <option value="32">Ecuador</option>
        <option value="32">Guam</option>
        <option value="32">Greece</option>
        <option value="32">Haiti</option>
        <option value="32">Hong Kong</option>
        <option value="32">Hungary</option>
        <option value="32">Iceland</option>
        <option value="32">India</option>
        <option value="32">Indonesia</option>
        <option value="32">Iran</option>
        <option value="32">Iraq</option>
        <option value="32">Israel</option>
        <option value="32">Italy</option>
        <option value="32">Jamaica</option>
        <option value="32">Japan</option>
        <option value="32">Jordan</option>
        <option value="32">Kazakhstan</option>
        <option value="32">Korea</option>
        <option value="32">Lebanon</option>
        <option value="32">Libya</option>
        <option value="32">Macau</option>
        <option value="32">Macedonia</option>
        <option value="32">Madagascar</option>
        <option value="32">Malaysia</option>
        <option value="32">Mexico</option>
        <option value="32">Monaco</option>
        <option value="32">Mongolia</option>
        <option value="32">Nepal</option>
        <option value="32">Netherlands</option>
        <option value="32">New Zealand</option>
        <option value="32">Niger</option>
        <option value="32">Nigeria</option>
        <option value="32">North Korea</option>
        <option value="32">Oman</option>
        <option value="32">Pacific Ocean</option>
        <option value="32">Pakistan</option>

        <option value="32">Puerto Rico</option>
        <option value="32">Qatar</option>
        <option value="32">Portugal</option>
        <option value="32">Poland</option>
       <option value="32">Romania</option>
        <option value="32">Saint Lucia</option>
        <option value="32">South Africa</option>
        <option value="32">South Korea</option>
        <option value="32">Southern Ocean</option>
        <option value="32">Spain</option>
        <option value="32">Sudan</option>
        <option value="32">Swaziland</option>
        <option value="32">Sweden</option>
        <option value="32">Syria</option>
        <option value="32">Taiwan</option>
        <option value="32">Tanzania</option>
        <option value="32">Thailand</option>
        <option value="32">Turkey</option>
        <option value="32">Uganda</option>
        <option value="32">Ukraine</option>
        <option value="32">United Arab Emirates</option>
        <option value="32">United Kingdom</option>
        <option value="32">USA</option>
        <option value="32">USSR</option>
        <option value="32">Uzbekistan</option>
        <option value="32">West Bank</option>
        <option value="32">Western Sahara</option>
        <option value="32">Yemen</option>
        <option value="32">Zambia</option>
    </select>

                        </select>
            </div>
                <div class="ui left action input" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select class="ui large search dropdown" id="status">
          <option value="0">Single</option>
          <option value="1">Single</option>
          <option value="2">Married</option>
          <option value="2">Widowed</option>

                            </select>
                </div>
    </div>
        <div class="field"><br><br>
            <div class="ui left action input"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <div class="ui large labeled input">
                
  <div class="ui label">
     <i class="facebook icon"></i>http://www.facebook.com/
  </div>
  <input type="text" placeholder="mysite.com" Value="TaguigCityUniversity.com">
</div>
           &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  <div class="ui large labeled input">
                
  <div class="ui label">
     <i class="twitter icon"></i>http://www.twitter.com/
  </div>
  <input type="text" placeholder="mysite.com" Value="TaguigCityUniversity.com">
</div>
            </div>
        </div><br><br>
<div class="footer">
    <button class="btn btn-primary btn-md pull-right"><i class="save icon"></i>Save</button>
    <button class="btn btn-danger btn-md pull-right" style="margin-right:50px;"><i class="cancel icon"></i>Cancel</button>
</div>

        
            <br>
            <br>
            <br>
            <br>
            <br>
            
            
            
            </div>
            
    </div>
        </div>
            </div>    

    
</body>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script src="semantic/dist/semantic.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
<script type="text/javascript">
  $('#g').dropdown();

</script>
    <script type="text/javascript">
  $('#gender').dropdown();

</script>
<script type="text/javascript">
  $('#day').dropdown();

</script>
<script type="text/javascript">
  $('#year').dropdown();

</script>
<script type="text/javascript">
  $('#gende').dropdown();

</script>
<script type="text/javascript">
  $('#nationality').dropdown();

</script>
<script type="text/javascript">
  $('#status').dropdown();

</script>
  <script>
      $(document).ready(function(){
  $("#my").click(function(){
  $('.ui.modal').modal('show');
  });
});
    </script>
</html>



