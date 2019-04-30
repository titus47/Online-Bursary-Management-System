 <?php 
  include "dbconn.php"
  ?>
   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add System User</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
										  <input class="input focused" name="username" id="" type="text" placeholder = "Username" required>
                                           
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                             <input class="input focused" name="password" id="" type="password" placeholder = "Password" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
<?php
if (isset($_POST['save'])){
$F_Name = $_POST['firstname'];
$L_Name = $_POST['lastname'];
$U_Name = $_POST['username'];
$password = $_POST['password'];


$query = mysql_query("select * from reg_user where U_Name = '$U_Name' ")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 1){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysql_query("insert into reg_user (F_Name,L_Name,U_Name,P_Word) values('$F_Name','$L_Name','$U_Name','$password')")or die(mysql_error());
?>
<script>
window.location = "admin.php";
$.jGrowl("System User Successfully added", { header: 'System User add' });
</script>
<?php
}
}
?>