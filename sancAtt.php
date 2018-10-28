<?php
include 'head.php';
?>
<body>
    <div class="animsition">
    <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper white">
                    <a href="./index.php" class="brand-logo center black-text animsition-link">
                        <img src="Sanctuary.png" alt="sanctuary logo" class="logo__size">
                    </a>
                    <ul class="right">
                        <li>
                            <a href="./hyveadmin.php" class="waves-effect waves-light btn green animsition-link">
                                Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    <div class="portal__wrapper">
        <div class="container">
            <header class="center-align" style="padding-top: 3em;">
                <h4>Attendance Portal.</h4>
                <hr class="custom__divider"/>
            </header>
            <div class="card attendance__form animated">
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
                            <i class="material-icons prefix">assignment_ind</i>
                            <label for="reg-no" class="">Enter Reg Number:</label>
                            <input name="
                                RegNo" type="text" id="reg-no" class="validate"
                                maxlength="7" />
                            <span class="reg_err helper-text"></span>
                        </div>
                        <button class="btn-large rounded__btn waves-effect waves-light green" id="add">
                           Enter Attendance
                        </button>
                        <span class="signup-loading"></span>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

    <?php include 'footer.php';?>
</div>
<?php
include 'scripts.php';
?>
<script src="att.js"></script>
</body>
</html>