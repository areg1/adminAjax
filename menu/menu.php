<div id="menu">
        <img src="<?=$domain?>/img/admin/admin.png" alt="">
        <span><a href="<?=$domain?>/admin.php">Admin</a></span>
        <img src="<?=$domain?>/img/admin/human.png" alt="">
        <span>
            Member
            <span class="child1-menu"><a href="<?=$domain?>/menu/member/student.php">Student</a></span>
            <span><a href="<?=$domain?>/menu/member/teacher.php">Teacher</a></span>
        </span>
        <img src="<?=$domain?>/img/admin/forum.png" alt="">
        <span>
            Forum
            <span class="child1-menu"><a href="<?=$domain?>/menu/forum/question.php">Question</a></span>
        </span>
        <img src="<?=$domain?>/img/admin/lesson.png" alt="">
        <span>
            Lesson
            <span class="child1-menu"><a href="<?=$domain?>/menu/lesson/meet.php">Meet</a></span>
            <span><a href="<?=$domain?>/menu/lesson/video.php">Video</a></span>
            <span><a href="<?=$domain?>/menu/lesson/live.php">Live</a></span>
            <span><a href="<?=$domain?>/menu/lesson/language.php">Language</a></span>
        </span>
        <img src="<?=$domain?>/img/admin/carrer.png" alt="">
        <span><a href="<?=$domain?>/menu/carrer/carrer.php">Carrer</a></span>
        <form id="form-logOut" action="<?=$domain?>/menu/logOut.php" method="post"><input id="logOut" type="submit" value="Exit"></form>
        
</div>