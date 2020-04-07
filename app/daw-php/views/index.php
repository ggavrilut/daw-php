<!DOCTYPE html>
<html>
    <?php include('views/head.html');?>
    <body>
       <div class="header">
            <div class="navbar">
                <div class="logo">DAW</div>
                <div class="menu">
                    <div class="menu-item">
                        <a href="#about">About</a>
                    </div>
                    <div class="menu-item">
                        <a href="#sessions">Sessions</a>
                    </div>
                    <div class="menu-item">
                        <a href="#students">Students</a>
                    </div>
                </div>
            </div>
            <div class="slider">
                <h1>Laborator DAW</h1>
            </div>
        </div>
        <div class="container">
            <!--
            <div id="about" class="about">
                <div class="item">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="item">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="item">
                    <h3>Lorem ipsum</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div id="sessions" class="sessions">
                <h2>Sessions</h2>
                <p>Sessions subtitle</p>
            </div>
            -->
            <div id="students" class="students">
                <h2 class="paragraph-title">Students</h2>
                <p class="paragraph-subtitle">Students subtitle</p>
                <a href="/student/new.php">Add a student</a>
                <div class="students-container">
                    <?php foreach($students as $student) { ?>
                        <div class="student-item">
                            <div class="name"><?php echo $student['firstname'] . ' ' . $student['lastname']; ?></div>
                            <div class="bio"><?php echo $student['bio']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="copyright">2020. DAW.</div>
        </div>
    </body>
</html>