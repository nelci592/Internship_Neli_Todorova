<?php session_start(); ?>
<?php include('../template.php'); ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="addtask.css">

<form action="changeOrDelUserDB.php" form class="form-style-9" method="POST">

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">

                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Change</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Delete</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Change user's level(s)</h3>
                                <div class="row register-form">

                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="input-group">
                                            <select name="username" id="users" class="form-control">
                                              <option class="hidden"  selected disabled>Select user</option>
                                              </select>
                                        </div>
                                      </div>

                                    </div>


                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <div class="input-group">
                                            <select name="rolename" id="rolename" class="form-control">
                                              <option class="hidden"  selected disabled>Select user level</option>
                                              </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="input-group">
                                            <select name="rolename" id="rolename" class="form-control">
                                              <option class="hidden"  selected disabled>Select user level</option>
                                              </select>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="input-group">
                                            <select name="rolename" id="rolename" class="form-control">
                                              <option class="hidden"  selected disabled>Select user level</option>
                                              </select>
                                        </div>
                                      </div>


                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Delete user</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">

                                      <div class="buttonHolder">
                                      <div class="form-group">
                                        <div class="input-group">
                                            <select name="username" id="users" class="form-control">
                                              <option class="hidden"  selected disabled>Select user level</option>

                                              </select>
                                        </div>
                                      </div>

                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


                        <?php
                        include('../dbh.php');
                        $sql = "SELECT username FROM user;";
                        $result = mysqli_query($conn,$sql);

                        if (!$result) {
                            echo "DB Error, could not list tables\n";
                            echo 'MySQL Error: ' . mysqli_error();
                            exit;
                        }


                        while ($row = mysqli_fetch_row($result)) {
                            echo "<script>
                            var z = document.createElement('option');
                            z.setAttribute('value', '".$row[0]."');
                            var t = document.createTextNode('".$row[0]."');
                            z.appendChild(t);
                            document.getElementById('users').appendChild(z);</script>";

                        } ?>


                                    <?php
                                    include('../dbh.php');
                                    $sql = "SELECT rolename FROM roles WHERE username= '';";
                                    $result = mysqli_query($conn,$sql);

                                    if (!$result) {
                                        echo "DB Error, could not list tables\n";
                                        echo 'MySQL Error: ' . mysqli_error();
                                        exit;
                                    }


                                    while ($row = mysqli_fetch_row($result)) {
                                        echo "<script>
                                        var z = document.createElement('option');
                                        z.setAttribute('value', '".$row[0]."');
                                        var t = document.createTextNode('".$row[0]."');
                                        z.appendChild(t);
                                        document.getElementById('rolename3').appendChild(z);</script>";

                                    } ?>
