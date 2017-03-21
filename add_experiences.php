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
<div class="six wide column">
    <a style="font-size: 20px; color:black;">Company Name&nbsp;&nbsp;</a>
        <div class="ui big fluid left icon input">
            <input type="text" placeholder="Company Name">
            <i class="building icon"></i>
        </div>
            <br>
     <a style="font-size: 20px; color:black;">Industry&nbsp;&nbsp;</a>
           <select name="industry" class="ui big fluid search dropdown" id="industry">
  <option value="">-Please Select one-</option>
<option value="1">Accounting / Audit / Tax Services</option>
<option value="2">Advertising / Marketing / Promotion / PR</option>
<option value="3">Aerospace / Aviation / Airline</option>
<option value="4">Agricultural / Plantation / Poultry / Fisheries</option>
<option value="5">Apparel / Fashion</option>
<option value="6">Information Architecture</option>
<option value="7">Architectural Services / Interior Designing</option>
<option value="8">Mechanical Engineering</option>
<option value="9">Arts / Design</option>
<option value="10">Automobile / Automotive Ancillary / Vehicle</option>
<option value="11">Banking / Financial Services</option>
<option value="12">BioTechnology / Pharmaceutical / Clinical research</option>
<option value="13">Catering / Restaurant Service</option>
<option value="14">Chemical / Fertilizers / Pesticides</option>
<option value="15">Commodities Production / Distribution</option>
<option value="16">Computer / Information Technology (Hardware)</option>
<option value="17">Computer / Information Technology (Software)</option>
<option value="18">Construction / Building / Engineering</option>
<option value="19">Consulting (Business and Management)</option>
<option value="20">Consumer Products / FMCG</option>
<option value="18">Education</option>
<option value="18">Electrical and Electronics</option>
<option value="18">Entertainment / Media</option>
<option value="18">Environment / Health / Safety</option>
<option value="18">Exhibitions / Event Management / MICE</option>
<option value="18">Food and Beverage</option>
<option value="18">Gems / Jewellery</option>
<option value="18">General and Wholesale Trading</option>
<option value="18">Government</option>
<option value="18">Grooming / Beauty / Fitness</option>
<option value="18">Healthcare / Medical</option>
<option value="18">Heavy Industrial / Machinery / Equipment</option>
<option value="18">Home Furnishing / Furniture</option>
<option value="18">Hotel / Hospitality</option>
<option value="18">Human Resources Management / Consulting</option>
<option value="18">Insurance</option>
<option value="18">Journalism</option>
<option value="18">Law / Legal</option>
<option value="18">Library / Museum</option>
<option value="18">Manufacturing / Production</option>
<option value="18">Marine / Aquaculture</option>
<option value="18">Mining</option>
<option value="18">Non-Profit Organization / Social Services / NGO</option>
<option value="18">Oil / Gas / Petroleum</option>
<option value="18">Online / E-commerce Business</option>
<option value="18">Others</option>
<option value="18">Outsourcing (Call Center / BPO)</option>
<option value="18">Polymer / Plastic / Rubber / Tyres</option>
<option value="18">Printing / Publishing</option>
<option value="18">Property / Real Estate</option>
<option value="18">Repair and Maintenance Services</option>
<option value="18">Research and Development</option>
<option value="18">Retail / Merchandising</option>
<option value="18">Science and Technology</option>
<option value="18">Security / Law Enforcement</option>
<option value="18">Semiconductor / Wafer Fabrication</option>
<option value="18">Sports</option>
<option value="18">Stockbroking / Securities</option>
<option value="18">Telecommunication</option>
<option value="18">Textiles / Garment</option>
<option value="18">Tobacco and Liquor</option>
<option value="18">Transportation / Logistics</option>
<option value="18">Travel / Tourism</option>
<option value="18">Utilities / Power</option>
<option value="18">Wood / Fibre / Paper</option>
</select>
            <br>
        
   
    <a style="font-size: 20px; color:black">From&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Duration</b></a>
        <div class="ui big fluid left icon input">
             <div class="ui calendar" id="calendar">
    <div class="ui input left icon">
      <i class="calendar icon"></i>
      <input type="text" name="From" placeholder="From">
    </div>
  </div>
        </div><br>
            <a style="font-size: 20px; color:black">Position Title&nbsp;&nbsp;</a>
        <div class="ui big fluid left icon input">
            <input type="text" placeholder="Position Title">
            <i class="user icon"></i>
        </div>
    <br>
            <a style="font-size: 20px; color:black;">Specialization&nbsp;&nbsp;</a>
           <select name="industry" class="ui big fluid search dropdown" id="specialization">
               <option value="">-Please Select one-</option>
                <option value="1">Actuarial Science/Statistics</option>
                <option value="1">Advertising/Media Planning</option>
                <option value="1">Agriculture/Forestry/Fisheries</option>
                <option value="1">Architecture/Interior Design</option>
                <option value="1">Arts and Design</option>
                <option value="1">Arts/Creative/Graphics Design</option>
                <option value="1">Aviation/Aircraft Maintenance</option>
                <option value="1">Banking/Financial Services</option>
                <option value="1">Biotechnology</option>
                <option value="1">BPO/Call Center</option>
                <option value="1">Chemistry</option>
                <option value="1">Clerical/Administrative Support</option>
                <option value="1">Corporate Strategy/Top Management</option>
                <option value="1">Costing Management</option>
                <option value="1">Customer Service</option>
                <option value="1">Customer Service (Technical)</option>
                <option value="1">Design and Development</option>
                <option value="1">Education / Academe</option>
                <option value="1">Engineering - Chemical</option>
                <option value="1">Engineering - Civil/Construction/Structural</option>
                <option value="1">Engineering - Electrical</option>
                <option value="1">Engineering - Electronics/Communication</option>
                <option value="1">Engineering - Environmental/Health/Safety</option>
                <option value="1">Engineering - Industrial</option>
                <option value="1">Engineering - Mechanical/Automotive</option>
                <option value="1">Engineering - Oil/Gas</option>
                <option value="1">Engineering - Others</option>
                <option value="1">Entertainment/Performing Arts</option>
                <option value="1">Finance - Audit/Taxation</option>
                <option value="1">Finance - Corporate Finance/Investment/Merchant Banking</option>
                <option value="1">Finance - General/Cost Accounting </option>
                <option value="1">Food Technology/Nutritionist</option>
                <option value="1">Food/Beverage/Restaurant Service</option>
                <option value="1">General Work (Housekeeper, Driver, Dispatch, Messenger, etc)</option>
                <option value="1">Geology/Geophysics</option>
                <option value="1">Health Diagnosing</option>
                <option value="1">Healthcare - Doctor/Diagnosis</option>
                <option value="1">Healthcare - Nurse/Medical Support and Assistant</option>
                <option value="1">Healthcare - Pharmacy</option>
                <option value="1">Hotel Management/Tourism Services</option>
                <option value="1">Human Resources</option>
                <option value="1">IT/Computer - Creative Design</option>
                <option value="1">IT/Computer - Hardware</option>
                <option value="1">IT/Computer - Network/System/Database Admin</option>
                <option value="1">IT/Computer - Project Management</option>
                <option value="1">IT/Computer - QA</option>
                <option value="1">IT/Computer - Software Development</option>
                <option value="1">Journalism</option>
                <option value="1">Journalist/Editor</option>
                <option value="1">Law/Legal Services</option>
                <option value="1">Logistics/Supply Chain</option>
                <option value="1">Maintenance/Repair (Facilities and Machinery)</option>
                <option value="1">Manufacturing/Production Operations</option>
                <option value="1">Marketing / Brand Management</option>
                <option value="1">Marketing/Business Development</option>
                <option value="1">Medical Transcriptionist</option>
                <option value="1">Merchandising</option>
                <option value="1">Others</option>
                <option value="1">Personal Care/Beauty/Fitness Service</option>
                <option value="1">Process Design and Control/Instrumentation</option>
                <option value="1">Production Control/Management</option>
                <option value="1">Project Management</option>
                <option value="1">Public Relations/Communications</option>
                <option value="1">Publishing/Printing</option>
                <option value="1">Purchasing/Inventory/Material and Warehouse Management</option>
                <option value="1">Quality Control/Assurance</option>
                <option value="1">Quantity Surveying</option>
                <option value="1">Research and Development</option>
                <option value="1">Sales - Corporate / B2B</option>
                <option value="1">Sales - Engineering/Technical/IT</option>
                <option value="1">Sales - Financial Services (Insurance, Unit Trust, etc)</option>
                <option value="1">Sales - Retail/General</option>
                <option value="1">Sales - Telesales/Telemarketing</option>
                <option value="1">Sales – Real Estate</option>
                <option value="1">Sales- Medical / Pharmaceutical</option>
                <option value="1">Science and Technology/Laboratory</option>
                <option value="1">Secretarial/Executive and Personal Assistant</option>
                <option value="1">Security/Armed Forces/Protective Services</option>
                <option value="1">Social and Counselling Service</option>
                <option value="1">Stockbroking</option>
                <option value="1">Technical and Helpdesk Support</option>
                <option value="1">Training and Development</option>
            </select>
</div>
         <div class="six wide column">
     <a style="font-size: 20px; color:black">Company Website&nbsp;&nbsp;</a>
    <div class="ui big fluid left icon input">
            <input type="text" placeholder="Company Website">
            <i class="google icon"></i>
    </div>
            <br>
     <a style="font-size: 20px; color:black">Company Address</a>
        <div class="ui big fluid left icon input">
            <input type="text" placeholder="Company Address">
            <i class="marker icon"></i>
        </div>
            <br>
    <a style="font-size: 20px; color:black">to&nbsp;&nbsp;</a>
        <div class="ui big fluid left icon input">
            <div class="ui calendar" id="calendar2">
    <div class="ui input left icon">
      <i class="calendar icon"></i>
      <input type="text" name="to" placeholder="To">
    </div>
  </div>
        </div><br>
              <a style="font-size: 20px; color:black;">Position Level &nbsp;&nbsp;</a>
           <select name="level" class="ui big fluid search dropdown" id="level">
               <option value="">-Please Select one-</option>
                <option vlue="1">Top Level Management</option>
                <option vlue="1">Senior Manager</option>
                <option vlue="1">Manager</option>
                <option vlue="1">Senior Executive/Supervisor</option>
                <option vlue="1">Junior Executive</option>
                <option vlue="1">Fresh/Entry Level</option>
                <option vlue="1">None-Executive</option>
                <option vlue="1">Trainee</option>
             </select>
     
             <br>       
             <a style="font-size: 20px; color:black;">Monthly Salary &nbsp;&nbsp;</a>
             <div class="ui medium left icon input" >
           <select name="level" class="ui medium red dropdown" id="salary" >
               <option value="">-Please Select one-</option>
               <option value="1">Philippine Peso</option>
               <option value="2">US Dollar</option>
             </select>
                  <input type="text" placeholder="0.00" style="height:50px; font-size:14px;"></div>
             
</div>
        <div class="four wide column"></div>
        <div class="twelve wide column">
       <div class="ui piled segment">
  <h2 class="ui header">Nature of Work</h2>
    <textarea  mac-length="150" style="width:815px; min-height:150px; border-color:#fc1c1c"></textarea>
           <br></div>
        </div>
    </div><br>
    <div class="footer">
    <button class="btn btn-primary btn-lg col-lg-offset-7"><i class="save icon"></i>Save</button>
</div>
</div>

<br>
<script type="text/javascript" src="js/jquery.js"></script>
  <!--JS[Semantic]-->
  <script type="text/javascript" src="semantic/dist/semantic.js"></script>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script type="text/javascript">
  $('#industry').dropdown();

</script>
<script type="text/javascript">
  $('#salary').dropdown();

</script>
<script type="text/javascript">
  $('#level').dropdown();

</script>

<script type="text/javascript">
  $('#specialization').dropdown();

</script>
<script type="text/javascript">
$('#calendar').calendar({
  type: 'date'
});

</script>

<script type="text/javascript">
$('#calendar2').calendar({
  type: 'date'
});

</script>

