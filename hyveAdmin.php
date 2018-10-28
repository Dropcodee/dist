<?php
    include "head.php";
?>

<body>
    <div class="animsition">
    <!-- Navbar goes here -->
    <div class="navbar-fixed">
        <nav class="white">
            <!-- navbar content here  -->
            <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large black-text"><i class="material-icons">menu</i></a>
        </nav>
    </div>
    <!-- Page Layout here -->

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="bgnav.jpg">
                </div>
                <a href="#user"><img class="circle user__logo" src="avatar.svg"></a>
                <a href="#name"><span class="white-text name" id="name"></span></a>
                <a href="#email"><span class="white-text email" id="email"></span></a>
            </div>
        </li>
        <li><a href="#profile__edit"><i class="material-icons">cloud</i>Edit Profile</a></li>
        <li><a href="#attendance"><i class="material-icons">people_outline</i> Members Attendance</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a href="#allusers"><i class="material-icons">people</i>Members</a></li>
        <li><a href="#youratt"><i class="material-icons">people</i>Your Attendance</a></li>
        <li><a href="#message"><i class="material-icons">cloud</i>Send Messages</a></li>
        <li><a href="#changepass"><i class="material-icons">lock</i>Change Password</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="index.php">
                <i class="material-icons">lock_outline</i>Logout</a></li>
    </ul>

    <div class="update__wrapper">
        <!-- EDIT PROFILE BEGINS-->
        <div class="col s12 m12 l12">
            <header id="profile__edit" class="center-align section scrollspy">
                <h4>Edit Your Profile.</h4>
                <hr class="custom__divider" />
            </header>
            <div class="card card__form animated">
                <div class="top__section green">
                    <div class="facebook">
                        <a class="fa fa-facebook" to="#"></a>
                    </div>
                </div>
                <div class="avatar">
                    <img src="avatar.svg" alt="user avatar" class="circle responsive-img" />
                </div>
                <div class="card-content">
                    <form action="">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <i class="material-icons prefix">business</i>
                                    <select>
                                        <option value="" disabled selected>Select Hall Of Residence</option>
                                        <option value="1">Daniel Hall</option>
                                        <option value="2">Abraham Hall</option>
                                        <option value="3">Joseph Hall</option>
                                        <option value="3">Issac Hall</option>
                                        <option value="3">Dorcas Hall</option>
                                        <option value="3">Sarah Hall</option>
                                        <option value="3">Abigal Hall</option>
                                        <option value="3">Deborah Hall</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field inputVal_password">
                                    <i class="material-icons prefix">business</i>
                                    <input type="text" id="room_no" class="validate" />
                                    <label for="room_no" class="active">
                                        Enter Room Number:
                                    </label>
                                    <span class="helper-text room_err"></span>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <i class="material-icons prefix">wc</i>
                                    <select>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <i class="material-icons prefix">cake</i>
                                    <label for="Date_of_birth">Date Of Birth</label>
                                    <input type="text" class="datepicker">
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <i class="material-icons prefix">class</i>
                                    <select>
                                        <option value="" disabled selected>Select Department</option>
                                        <option value="1">Daniel Hall</option>
                                        <option value="2">Abraham Hall</option>
                                        <option value="3">Joseph Hall</option>
                                        <option value="3">Issac Hall</option>
                                        <option value="3">Dorcas Hall</option>
                                        <option value="3">Sarah Hall</option>
                                        <option value="3">Abigal Hall</option>
                                        <option value="3">Deborah Hall</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="input-field">
                                    <i class="material-icons prefix">import_export</i>
                                    <select>
                                        <option value="" disabled selected>Select Level</option>
                                        <option value="1">100L</option>
                                        <option value="2">200L</option>
                                        <option value="3">300L</option>
                                        <option value="3">400L</option>
                                        <option value="3">500L</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col s12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" />
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                        <span class="helper-text">Place your profile picture here</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="btn-large waves-effect waves-light green right large" id="submit">
                            Update
                        </button>
                        <span class="signup-loading"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- EDIT PROFILE ENDS-->

    <!--ATTENDANCE PORTAL FOR USERS-->
    <div class="attendance__wrapper">
        <div class="col s12 m12 l12">
            <div class="container">
                <header id="attendance" class="center-align section scrollspy">
                    <h3>Member Attendance.</h3>
                    <hr class="custom__divider">
                </header>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Registration Number</th>
                            <th>Webmail</th>
                            <th>Attendance</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Abraham Ugbeshe</td>
                            <td>1700172</td>
                            <td>ugbeshe.abraham@lmu.edu.ng</td>
                            <td>40%</td>
                        </tr>
                        <tr>
                            <td>Owolabi Jousha</td>
                            <td>1600172</td>
                            <td>owolabi.oluwasegun@lmu.edu.ng</td>
                            <td>60%</td>
                        </tr>
                        <tr>
                            <td>Simon Joseph</td>
                            <td>1500335</td>
                            <td>joseph.simon@lmu.edu.ng</td>
                            <td>20%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--ATTENDANCE PORTAL FOR USERS-->

    <!-- ALL UNIT MEMBERS -->
    <div class="users__wrapper">
        <div class="col s12 m12 l12">
            <div class="container">
                <header id="allusers" class="center-align section scrollspy">
                    <h3>ALL UNIT MEMBERS.</h3>
                    <hr class="custom__divider">
                </header>
                <table class="highlight responsive-table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Registration Number</th>
                            <th>Webmail</th>
                            <th>Date Of Birth</th>
                            <th>Hall Of Residence</th>
                            <th>Room No</th>
                            <th>Membership</th>
                            <th>Joined</th>
                        </tr>
                    </thead>

                    <tbody id="show"></tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- ALL UNIT MEMBERS -->

    <!-- PERSONAL ATTENDANCE-->
<div class="personal__info">
        <div class="col s12 m12 l12">
            <div class="container">
                <header id="allusers" class="center-align section scrollspy">
                    <h3>Attendance Details.</h3>
                    <hr class="custom__divider">
                </header>
        <h5 class="header">Attendance & Personal Info.</h5>
        <div class="card horizontal">
        <div class="card-image">
            <img src="avatar.svg">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <div class="header col s12 m12 l12 center-align section scrollspy" id="youratt">
            <p>PERSONAL INFORMATION</p>
            <hr class="custom__divider">
            </div>
            <div class="container">
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col m6 l6 s12">
                    <h6>Surname Name: </h6>
                    <p>Doe</p>
                </div>
                <div class="col m6 l6 s12">
                    <h6>Other Names: </h6>
                    <p> John</p>
                </div>
            </div>
            <div class="row">
                <div class="col m6 l6 s12">
                    <h6>Matric Number: </h6>
                    <p>15CD006847</p>
                </div>
                <div class="col m6 l6 s12">
                    <h6>Regisration Number: </h6>
                    <p>1500127</p>
                </div>
            </div>
            <div class="row">
                <div class="col m6 l6 s12">
                    <h6>Hall: </h6>
                    <p>Abraham Hall</p>
                </div>
                <div class="col m6 l6 s12">
                    <h6>Room Number: </h6>
                    <p>E307</p>
                </div>
            </div>
            </div>
        </div>
        </div>
  </div>
</div>
</div>
    <!-- PERSONAL ATTENDANCE-->

    <!-- SEND MESSAGES TO USERS HERE-->
    <div class="send__message">
        <div class="col s12 m12 l12">
            <div class="container">
                <header id="message" class="center-align section scrollspy">
                    <h3>Send Messages.</h3>
                    <hr class="custom__divider">
                </header>
                <div class="card card__form">
                     <div class="top__section green">
                    <div class="facebook">
                        <a class="fa fa-facebook" to="#"></a>
                    </div>
                </div>
                    <div class="card-content">
                <div class="form__wrapper">
                    <form action=""> 
                    <div class="input-field">
                        <textarea id="textarea2" class="materialize-textarea" data-length="250"></textarea>
                        <label for="textarea2">Send Message</label>
                        <span class="helper-text">Send messages or announcements to all members here.  maximum(250 words)</span>
                    </div>
                     <button class="btn-large waves-effect waves-light green" id="login">
                           Post
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SEND MESSAGES TO USERS HERE-->

    <!-- CHANGE PASSWORD HERE-->
    <div class="col s12 m12 l12">
        <div class="container">
             <header id="changepass" class="center-align section scrollspy">
                    <h3>Change Password.</h3>
                    <hr class="custom__divider">
                </header>
            <div class="card card__form section scrollspy" id="changepass">
                <div class="top__section green">
                    <div class="facebook">
                        <a class="fa fa-facebook" to="#"></a>
                    </div>
                </div>
                <div class="avatar">
                    <img src="avatar.svg" alt="user avatar" class="circle responsive-img" />
                </div>
                <div class="card-content">
                    <form action="POST">
                        <div class="input-field inputVal disabled">
                            <i class="material-icons prefix">lock_open</i>
                            <label for="old_pass" class="">Enter Old Password:</label>
                            <input name="
                                RegNo" type="password" id="old_pass" class="validate"/>
                            <span class="passold_err helper-text "> Enter Old password here.</span>
                        </div>

                        <div class="input-field inputVal2">
                            <i class="material-icons prefix"> lock_outline</i>
                            <label for="new_pass" class="">
                                New Password:
                            </label>
                            <input name="password" type="password" id="new_pass" class="validate" />
                            <span class="helper-text pass_err"></span>
                        </div>
                        <div class="input-field inputVal2">
                            <i class="material-icons prefix"> lock</i>
                            <label for="confirm_pass" class="">
                                Confirm Password:
                            </label>
                            <input name="password" type="password" id="confirm_pass" class="validate" />
                            <span class="helper-text confirm_err"></span>
                        </div>
                        <button class="btn waves-effect waves-light green" id="change_password">
                            Change Password
                        </button>
                        <span class="signup-loading"></span>
                    </form>
                </div>
            </div>
        </div>
    <!-- CHANGE PASSWORD HERE-->
    <!-- Footer-->
    <?php
    include "footer.php";
    ?>
    <!-- Footer-->
</div>
    <?php
    include "scripts.php";
    ?>
    <script src="users.js"></script>
</body>

</html>