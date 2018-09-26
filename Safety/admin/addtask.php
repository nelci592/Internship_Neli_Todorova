<?php
include '../dbh.php';
session_start();
$username = $_SESSION['username'];
?>
<?php include('../template.php'); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="addtask.css">

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">


                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Assign/add/send (new) task</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Task Name *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <div class="form-group">
                                              <select class="form-control">
                                                  <option class="hidden"  selected disabled>Select level of task</option>
                                                  <option>Level 1</option>
                                                  <option>Level 2</option>
                                                  <option>Level 8</option>
                                              </select>
                                          </div>
                                              </div>


                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Select responsible person</option>
                                                <option>Johan</option>
                                                <option>Robert</option>
                                                <option>Neli</option>
                                            </select>
                                        </div>

                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>

                                
                            </div>

                        </div>
                    </div>
                </div>

            </div>
