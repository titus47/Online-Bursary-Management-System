<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bursary Application Form</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
	<style>
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
  label{margin-top: 10px;}
  .help-inline-error{color:red;}
  #right{
float:right;
margin-top:10px;
margin-right:20px;
}
</style>
  </head>
  <body>
  
  <br />
  <br />
  <br />
  <div id="right"><h3>
 <a href="logout.php" target=_top><button>Sign Out</button></a>
</h3>
</div>
    <div class="container">
      <div class="page-header">
        <h1>KIMININI CDF BURSARY APPLICATION FORM</h1>
      </div>
      <div class="clearfix"></div>
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Complete this form in 3 steps!</h3>
    </div>
    <div class="panel-body">
      <form name="basicform" id="basicform" method="post" action="apply.php" enctype="multipart/form-data">
        
        <div id="sf1" class="frm">
          <fieldset>
            <legend>Step 1 of 3</legend>
             <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">User name: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="User Name" id="uname" name="u_name" class="form-control" autocomplete="off" required="">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Your Email: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Your Email" id="uemail" name="email" class="form-control" autocomplete="off" required="">
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Date OF Birth</label>
              <div class="col-lg-6">
                <input type="date" placeholder="Your Email" id="uemail" name="bday" class="form-control" autocomplete="off" required="">
              </div>
            </div>
      
       <div class="clearfix" style="height: 10px;clear: both;"></div>

       <div class="form-group">
        <label class="col-lg-2 control-label" for="uemail">Gender</label>
              <div class="col-lg-6">
                <select name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
        </div>

        <div class="clearfix" style="height: 10px;clear: both;"></div>

        <div class="form-group">
        <label class="col-lg-2 control-label" for="uemail">Ward</label>
              <div class="col-lg-6">
                <select name="ward">
                  <option value="kiminini">Kiminini</option>
                  <option value="Waitaluk">Waitaluk</option>
                  <option value="Sirende">Sirende</option>
                  <option value="Hospital">Hospital</option>
                  <option value="Sikhendu">Sikhendu</option>
                  <option value="Nabiswa">Nabiswa</option>      
                </select>
              </div>
        </div>

        <div class="clearfix" style="height: 10px;clear: both;"></div>

        <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Student Photo :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="file" class="btn btn-success form-control" autocomplete="off" required="">
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

			
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-success open1" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf2" class="frm" style="display: none;">
          <fieldset>
            <legend>Step 2 of 3</legend>
            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Admission Number: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="Admission number" id="uname" name="Regno" class="form-control" autocomplete="off" required>
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">School Name: </label>
              <div class="col-lg-6">
                <input type="text" placeholder="School Name" id="uname" name="sname" class="form-control" autocomplete="off" required>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Education Level</label>
              <div class="col-lg-6">
                <select name="level">
                  <option value="Secondary">Secondary</option>
                  <option value="Tertiary">Tertiary</option>
                </select>
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>        

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Year of Study: </label>
              <div class="col-lg-6">
                <input type="number" placeholder="Year of Study" id="uname" name="yos" class="form-control" autocomplete="off" required="">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uname">Semester/Term: </label>
              <div class="col-lg-6">
                <input type="number" placeholder="Semester/Term" id="uname" name="sem" class="form-control" autocomplete="off" required="">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open2" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf3" class="frm" style="display: none;">
          <fieldset>
            <legend>Step 3 of 3</legend>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="upass1">How much is your fees: </label>
              <div class="col-lg-6">
                <input type="number" placeholder="Your total fees in a semester/term" id="upass1" name="fees" class="form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Fees structure :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="fst" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="upass1">How much is your fees arrears: </label>
              <div class="col-lg-6">
                <input type="number" placeholder="Your fees balance" id="upass2" name="farr" class="form-control" autocomplete="off">
              </div>
            </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <label class="col-lg-2 control-label" for="uemail">Fees Arrears :  </label>
              <div class="col-lg-6">
                <input type="file" id="uemail" name="farrs" class="btn btn-success form-control" autocomplete="off">
              </div>
            </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success" type="submit" name="submit">Submit </button> 
                <img src="images/spinner.gif" alt="" id="loader" style="display: none">
              </div>
            </div>
          </fieldset>
        </div>
      </form>
    </div>
  </div>


</div>
<?php 
include ("app.php");
?>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
		    name: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        u_name: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        email: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
        upass1: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        upass2: {
          required: true,
          minlength: 6,
          equalTo: "#upass1",
        }

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });

    $(".open1").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
    });

    $(".open2").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });
    
    $(".open3").click(function() {
      if (v.form()) {
        $("#loader").show();
         setTimeout(function(){
           $("#basicform").html('<h2>Thanks for your time.</h2>');
         }, 1000);
        return false;
      }
    });
    
    $(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });

    $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });

  });
</script>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>