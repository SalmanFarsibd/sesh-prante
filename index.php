<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.lastBook.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/flexbox.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <strong class="logo">lastBook</strong>
            <ul>
                <!-- <li><img src="image/notification.png" alt=""></li>
                <li><img src="image/message.png" alt=""></li>
                <li><img src="image/video-watch.png" alt=""></li> -->
            </ul>
        </div>
        <div class="nav-right">
            <div class="search-box">
                <input type="search" name="" id="" placeholder="Search Yor Chose">
                <i class="fa fa-search" aria-hidden="true"></i>
             </div> 
            <div class="nav-user-icon online" onclick="settingMenutoggle()">
                <img src="image/salman.jpg" alt="">
            </div>
        </div>

        <div class="setting-menu">
            <div class="setting-menu-inner">
                <div class="user-profile">
                    <img src="image/salman.jpg" alt="">
                    <div>
                        <p>Salman farse</p>
                        <br>
                        <a href="">See your  profile</a>
                    </div> 
                </div>
                <hr>
                <div class="user-profile">
                    <img src="image/salman.jpg" alt="">
                    <div>
                        <p>Noha ckb</p>
                        <br>
                        <a href="">help us to improve the new design</a>
                    </div> 
                </div>
                <hr>
                <div class="setting-links">
                    <i class="fa fa-heart"></i>
                    <a href="">settings & privacy <img src="image/1.jpg" alt="" width="10px"></a>
                </div>
                <div class="setting-links">
                    <i class="fa fa-heart"></i>
                    <a href="">help & Support<img src="image/1.jpg" alt="" width="10px"></a>
                </div>
                <div class="setting-links">
                    <i class="fa fa-heart"></i>
                    <a href="">Display & Accessibility <img src="image/1.jpg" alt="" width="10px"></a>
                </div>
                <div class="setting-links">
                    <i class="fa fa-heart"></i>
                    <a href="">Logout <img src="image/1.jpg" alt="" width="10px"></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- container -->
    <div class="container">
        <div class="left-sidebar">
            <div class="imp-links">
                <a href="profile/profile.html"><i class="fas fa-user"></i> Profile </a>
                <a href="bts-design/bts.html"><i class="fas fa-code"></i>HTML & CSS </a>
                <a href=""><i class="fas fa-heart-broken"></i>Friends</a>
                <a href=""><i class="fas fa-book"></i>Books</a>
                <a href="">See more</a>
            </div>
            <div class="surtcut-links">
                <p>
                    Your -- <i class="fa fa-database" aria-hidden="true"></i> -- Story ?
                </p>
                <a href=""><img src="image/images.jpg" alt="">book link -- wetting</a>
                <a href=""><img src="image/images.jpg" alt="">book name </a>
                <a href=""><img src="image/images.jpg" alt="">name story</a>
                <a href=""><img src="image/images.jpg" alt="">text selected</a>
            </div>
        </div>
        <!-- up side -->
        <div class="main-content">
            <div class="story-gallery">
                <div class="story story1">
                    <img src="image/download.jpg" alt="">
                    <p>images</p>
                </div>
                <div class="story story2">
                    <img src="image/download.jpg" alt="">
                    <p>images </p>
                </div>
                <div class="story story3">
                    <img src="image/download.jpg" alt="">
                    <p>images</p>
                </div>
                <div class="story story4">
                    <img src="image/download.jpg" alt="">
                    <p>images</p>
                </div>
            </div>
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="image/salman.jpg" alt="">
                    <div>
                        <p>Salman farse</p>
                         <small><i class="fas fa-caret-down"></i> Public</small>
                    </div> 
                </div>
            <div class="post-input-container">
                <textarea name="" id="" cols="" rows="3" placeholder="Enter Your write"></textarea>
                <div class="add-post-links">
                    <a href="#" id=""><img src="" alt="">photo/video</a>
                    <a href="#" id=""><img src="" alt="">Live video</a>
                    <a href="#" id=""><img src="" alt="">Feling/Activity</a>
                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="post-row">
            <div class="user-profile">
                <img src="image/salman.jpg" alt="">
                <div>
                    <p>Salman farse</p>
                    <br>
                    <span>June / 06 / 29 / 2022</span>
                </div> 
            </div>
            <a href=""><i class="fas fa-ellipsis-v"></i></a>
        </div>
            <p class="post-text">
                Subscribe <span>@easy tutorial</span> youtube channel 
                to watch more videos on website development and designs
                <a href="#">#easy tutorial</a><a href="#">#Youtube Chanel</a>
            </p>
            <img class="post-img" src="image/nt.jpg" alt="">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="image/like.png" alt=""><button class="btn btn-outline-light">120</button></div>
                    <div><img src="image/comment.png" alt="">45</div>
                    <div><img src="image/share.png" alt="">22</div>
                </div>
                <div class="post-profile-icon">
                    <img src="image/salman.jpg" alt="">
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="post-row">
            <div class="user-profile">
                <img src="image/salman.jpg" alt="">
                <div>
                    <p>Salman farse</p>
                    <br>
                    <span>June / 06 / 29 / 2022</span>
                </div> 
            </div>
            <a href=""><i class="fas fa-ellipsis-v"></i></a>
        </div>
            <p class="post-text">
                Subscribe <span>@easy tutorial</span> youtube channel 
                to watch more videos on website development and designs
                <a href="#">#easy tutorial</a><a href="#">#Youtube Chanel</a>
            </p>
            <img class="post-img" src="image/pic.jpg" alt="">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="image/like.png" alt="">120</div>
                    <div><img src="image/comment.png" alt="">45</div>
                    <div><img src="image/share.png" alt="">22</div>
                </div>
                <div class="post-profile-icon">
                    <img src="image/salman.jpg" alt="">
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
        </div>
        <div class="post-container">
            <div class="post-row">
            <div class="user-profile">
                <img src="image/salman.jpg" alt="">
                <div>
                    <p>Salman farse</p>
                    <br>
                    <span>June / 06 / 29 / 2022</span>
                </div> 
            </div>
            <a href=""><i class="fas fa-ellipsis-v"></i></a>
        </div>
            <p class="post-text">
                Subscribe <span>@easy tutorial</span> youtube channel 
                to watch more videos on website development and designs
                <a href="#">#easy tutorial</a><a href="#">#Youtube Chanel</a>
            </p>
            <img class="post-img" src="image/bil.jpg" alt="">
            <div class="post-row">
                <div class="activity-icons">
                    <div><img src="image/like.png" alt="">120</div>
                    <div><img src="image/comment.png" alt="">45</div>
                    <div><img src="image/share.png" alt="">22</div>
                </div>
                <div class="post-profile-icon">
                    <img src="image/salman.jpg" alt="">
                    <i class="fas fa-caret-down"></i>
                </div>
            </div>
        </div>
        <button class="load-more-btn"><a href="https://youtube.com">Load More</a></button>
        </div>
        <div class="right-sidebar">
            <div class="sidebar-title">
                <h4>Events</h4>
                <a href="#">See All</a>
            </div>
            <div class="event">
                <div class="left-event">
                    <h3>18</h3>
                    <span>March</span>
                </div>
                <div class="right-event">
                    <h4>New Project</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Willson Tech park</p>
                    <a href="#">More Info</a>
                </div>
            </div>
            <div class="event">
                <div class="left-event">
                    <h3>22</h3>
                    <span>June</span>
                </div>
                <div class="right-event">
                    <h4>Mobile Service</h4>
                    <p><i class="fas fa-map-marker-alt"></i>Willson Tech park</p>
                    <a href="#">More Info</a>
                </div>
            </div>
            <div class="sidebar-title">
                <h4>Advertisement</h4>
                <a href="#">Close</a>
            </div>
            <img class="sidebar-ads" src="image/imh.jpg" alt="">

            <div class="sidebar-title">
                <h4>convartion</h4>
                <a href="#">Hide Chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="image/salman.jpg" alt="">
                </div>
                <p>Alison Miya</p>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="image/salman.jpg" alt="">
                </div>
                <p>jackson Astan</p>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="image/salman.jpg" alt="">
                </div>
                <p>jone Due</p>
            </div>     
        </div>
    </div>
    </div>
    <div class="footer">
        <p> testing footer </p>
    </div>
    <script>
          var image = document.querySelector(".nav-user-icon");{
            settingMenutoggle("setting-menu");
          }
    </script>
</body>
</html>