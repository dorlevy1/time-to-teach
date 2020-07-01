<div class="row flex-reverse">
    <div class="top-nav fixed tactive">
        <div class="flex-row left-right">
            <div class="left-side flex-row">
                <img class="hamm" src="../../images/top-nav/ham.svg" alt="">
<div class="search">
    <input type="text" placeholder="Wrtie something ...">
    <img src="../../images/top-nav/search.svg" alt="">
</div>            </div>
            <div class="right-side">
            <div class="personal">
                <div class="flex-row left-right">
                    <div class="icon flex-row w33">
                    <img src="../../images/top-nav/home.png" alt="">
                      
                    </div>
                    <div class="email w33">
                        <img src="../../images/top-nav/email.png" alt="">

                </div>
                    <div class="settings w33">
                        <img src="../../images/top-nav/settings.png" alt="">

                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="left-nav fixed lactive">
        <div class="my_pic mpactive" style="background-image:url('../../uploads/<?=$usr['namefile']?>');">
        
        </div>
        <p class="lpsiactive">

            Hey ,<?=$usr['first_name'] . ' ' . $usr['last_name']?>
        </p>
<div class="menu mactive" >
    <ul>
        <li class="active">
        <div class="link">

        <img src="../../images/top-nav/home.png" alt=""> <a href="index.php" class="llaactive"> HOME</a>
        </div>    
    </li>
        <li><div class="link"><img src="../../images/top-nav/request.png" alt=""> <a href=""  class="llaactive" style="margin-right:50px;">MY STUDENTS</a></div></li>
        <li>
            <div class="link"><img src="../../images/top-nav/classes.png" alt=""> <a href=""  class="llaactive"style="margin-right:60px;">
                    MY CALENDAR</a>
                </div>
            </li>
        <li><div class="link"><img src="../../images/top-nav/mession.png" alt=""><a href="" style="margin-left:10px"  class="llaactive">MESSAGES</a></div></li>
        <li><div class="link"><img src="../../images/top-nav/classes.png" alt=""> <a href="add_student.php" style="margin-right:10px;"  class="llaactive">Add new student</a></div></li>
    </ul>
</div>
    </div>
</div>