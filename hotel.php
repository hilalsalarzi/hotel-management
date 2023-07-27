<?php include 'include-front/header.php';?>
<!--HEADER END-->
<!-- sign up banner start-->
<div class="hs-banner-wrapper ">
    <div class="owl-carousel owl-theme p-rel">

        <?php
            $id = $_GET['hotid'];
            $sql1 ="SELECT * FROM `gallery` WHERE `hotel_id`= $id";
            $result1 = mysqli_query($conn, $sql1);
            while ($row1 = mysqli_fetch_assoc($result1)){
            //echo $row['id'];
            //echo $row['name'];
            $id1 = $row1['hotel_id'];
            $pic1 = $row1['hotel_picture'];
           echo '<div class="item">
           <div>
               <img src="images/hotelslider/'.$pic1.'" alt="">
           </div>
       </div>';
            }
        ?>

    </div>
</div>

<div class="hs-blog-wrapper">
    <div class="container">
        <div class="row">
            <?php

                $id = $_GET['hotid'];
                $sql2 ="SELECT * FROM `hotel` WHERE `id`= $id";
                $result2 = mysqli_query($conn, $sql2);
                 while ($row2 = mysqli_fetch_assoc($result2)){
                 //echo $row['id'];
                //echo $row['name'];
                $hotel2 = $row2['name'];
                $comment = $row2['comment'];
                $address = $row2['address'];
                
            ?>
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="hs-blog-content">
                    <h3><a href="">
                            <?php echo $hotel2; ?>
                        </a></h3>
                    <div class="pt-20">
                        <a href="" class="text-color"><span><i class="fas fa-map-marker-alt text-color"></i></span>
                            <?php echo $address; ?>
                        </a>
                        &nbsp; &nbsp; &nbsp; &nbsp;
                    </div>
                    <div class="pt-20">
                        <?php
                        $id = $_GET['hotid'];
                        $sql6 = "SELECT amount FROM booking b INNER JOIN hotel h ON  h.id = b.hotel_id WHERE h.id= $id";
                        $result6 = mysqli_query($conn, $sql6);
                        while ($row6 = mysqli_fetch_assoc($result6)){
                        $amount = $row6['amount'];
                        ?>
                        Start From- <span class="text-design">
                            <?php echo $amount; ?>
                        </span>
                        <?php
                        }
                        ?>
                    </div>

                    <p class="pt-20">
                        <?php echo $comment; ?>
                    </p>
                    <?php
                    }  
                      ?>
                    <div id="hs-list-items">
                        <ul>
                            <li><a href="">-Hotel Timmings</a></li>
                            <li><a href="">-Term & Condition</a></li>
                            <li><a href="">-What kind of foowear is most suitable ? </a></li>
                            <li><a href="">-Can i bring Alcohol top this trip?</a></li>
                        </ul>
                        <ul>
                            <li><a href="">-Hotel Timmings</a></li>
                            <li><a href="">-Term & Condition</a></li>
                            <li><a href="">-What kind of foowear is most suitable ? </a></li>
                            <li><a href="">-Can i bring Alcohol top this trip?</a></li>
                        </ul>
                    </div>
                    <p class="pt-20">
                    </p>
                </div>

                <div class="bs-social-content mt-30">
                    <ul>
                        <li><a href="javascript:;"><i class="fas fa-tags"></i></a></li>
                        <li><a href="javascript:;">family</a></li>
                        <li><a href="javascript:;">fun</a></li>
                        <li><a href="javascript:;">holiday</a></li>
                        <li><a href="javascript:;">island</a></li>
                        <li><a href="javascript:;">package</a></li>
                    </ul>
                    <ul class="social-icon ">
                        <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="hs-servicer-sec">
                    <h4><a href="">The Best Service</a></h4>
                    <ul>

                        <?php  
                    
                    $id = $_GET['hotid'];
                    $sql3 ="SELECT * FROM `hotel_facilities` WHERE `hotel_id`= $id";
                    $result3 = mysqli_query($conn, $sql3);
                    while ($row3 = mysqli_fetch_assoc($result3)){
                    //echo $row['id'];
                    //echo $row['name'];
                    $id3 = $row3 ['hotel_id'];
                    $meeting_room = $row3['meeting_room'];
                    $free_wifi = $row3['free_wifi'];
                    $fitness = $row3['fitness'];
                    $car_parking = $row3['car_parking'];
                    $swimming_pool	 = $row3['swimming_pool'];
                    $security = $row3['security'];   
                ?>
                        <li class="t-center text-color">
                            <span><i class="fas fa-warehouse"></i></span>
                            <h5><a href="">Meeting Room</a></h5>
                            <h6><a href="">
                                    <?php echo $meeting_room; ?>
                                </a></h6>
                        </li>
                        <li class="t-center text-color">
                            <span><i class=" fa fa-wifi"></i></span>
                            <h5><a href="">Free Wifi</a></h5>
                            <h6><a href="">
                                    <?php echo $free_wifi; ?>
                                </a></h6>
                        </li>
                        <li class="t-center text-color">
                            <span><i class="fas fa-running"></i></span>
                            <h5><a href="">Fitness</a></h5>
                            <h6><a href="">
                                    <?php echo $fitness; ?>
                                </a></h6>
                        </li>
                        <li class="t-center text-color">
                            <span><i class="fas fa-car"></i></span>
                            <h5><a href="">Car Parking</a></h5>
                            <h6><a href="">
                                    <?php echo $car_parking; ?>
                                </a></h6>
                        </li>
                        <li class="t-center text-color">
                            <span><i class="fas fa-swimming-pool"></i></span>
                            <h5><a href="">Swimming Pool</a></h5>
                            <h6><a href="">
                                    <?php echo $swimming_pool; ?>
                                </a></h6>
                        </li>
                        <li class="t-center ">
                            <span><i class="fa fa-shield text-color"></i></span>
                            <h5><a href="">security</a></h5>
                            <h6><a href="">
                                    <?php echo $security;?>
                                </a></h6>
                        </li>
                        <?php
                    }
                ?>
                    </ul>
                </div>
                <div class="hs-tour-sec">
                    <h4><a href="">Take a Tour</a></h4>
                    <!-- Button trigger modal -->
                    <div id="video-popup" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <a href="javascript:;"><img src="images/Play-Icon.png" alt=""></a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/s9-_eaOaNeQ"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-pricing-table page-content p-30">
                    <h4><a href="">Plan</a></h4>
                    <div class="row">
                        <?php
                            $id = $_GET['hotid'];
                            $sql5 ="SELECT * FROM `plan` WHERE `hotel_id`= $id";
                            $result5 = mysqli_query($conn, $sql5);
                            while ($row5 = mysqli_fetch_assoc($result5)){

                                $name =$row5['name'];
                                 echo '<div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                 <div class="card">
                                     <h5><a href="">'.$name.'</a></h5>
                                     <img src="images/table-image.jpg" class="card-img-top" alt="...">
                                     <div class="card-body">
                                         <a href="booking.php" class="btn btn-primary">Book Now</a>
                                     </div>
                                 </div>
                             </div>';         
                             }
                        
                        ?>

                    </div>
                </div>
                <div class="hs-map-sec">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4><a href="">Hotel Location</a></h4>
                            <?php
                                    $id = $_GET['hotid'];
                                    $sql2 ="SELECT * FROM `hotel` WHERE `id`= $id";
                                    $result2 = mysqli_query($conn, $sql2);
                                     while ($row2 = mysqli_fetch_assoc($result2))
                                     {
                                    // echo $row2['id'];
                                    // echo $row2['name'];
                                    $latitude= $row2['latitude'];
                                    $longitude= $row2['longitude'];         
                                    ?>
                            <iframe
                                src="https://www.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?> &output=embed"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <?php  
                                        }          
                                   ?>
                            <div class="hs-box">

                                <div class="row">

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                        <span><i class="fas fa-phone-alt"></i></span>
                                        <div class="f-right">
                                            <a href="">Toll free</a>
                                            <h6><a href="">808 111 9999</a>
                                            </h6>
                                        </div>


                                    </div>

                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                        <span><i class="far fa-envelope"></i></span>
                                        <div class="f-right n-border">
                                            <a href="">Email Us</a>
                                            <h6><a href="">listing@example.com</a>
                                            </h6>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-rating-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4><a href="">Rating</a></h4>
                            <div class="total-rating">
                                <div class="overall-score">4.5</div>
                                <div class="overall-info">Overall Rating of 251 guest rating</div>
                            </div>
                            <div class="rating-progress-items">
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%"></div>
                                    </div>
                                    <div class="number">03</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:92%"></div>
                                    </div>
                                    <div class="number">05</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:40%"></div>
                                    </div>
                                    <div class="number">02</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:20%"></div>
                                    </div>
                                    <div class="number">01</div>
                                </div>
                                <div class="rating-progress-item">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" style="width:0"></div>
                                    </div>
                                    <div class="number">00</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <h4 class="p-0">
                                        <a href="">Your Review</a>
                                    </h4>
                                </li>
                                <li>
                                </li>
                            </ul>

                            <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post" class="contact-form">
                                   <div class="rateyo" id="rating" 
                                    data-rateyo-rating="4"
                                    data-rateyo-rateyo-num-stars="5"
                                    data-rateyo-score="3">
                                      </div>
                                <span class="result">0</span>
                                <input type="hidden" name="rating"></br>
                                <input type="text" name="name" id="name" placeholder="Name" class="w-50">
                                <input type="email" name="email" id="email" placeholder="Email" class="w-50">
                                <textarea name="comment" rows="3" id="comment" class="w-100"
                                    placeholder="Comment"></textarea>
                                <button type="submit" name="addcomment" class="btn btn-primary">Post</button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
                            $method = $_SERVER['REQUEST_METHOD'];
                            if(isset($_POST['addcomment']))
                                {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $comment = $_POST['comment'];
                                    $rating = $_POST['rating'];
                         $sql = "INSERT INTO `comment_n_review` (`name`, `email`, `comment`,`rating`, hotel_id, `comment_time`) VALUES ('$name', '$email', '$comment','$rating','$id', current_timestamp())";
                        $result = mysqli_query($conn, $sql);

                        if($result)
                        {
                     
                         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h5><strong>Comment posted sucessfully</strong></h5>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>'; 
                 
                        }
                        else
                        {
                         echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h5> <strong>Comment posting failed</strong></h5>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>';
                        }
                    }
                                ?>

                <div class="bs-comment-text p-30 mt-30">
                    <?php
                                
                                        $id = $_GET['hotid'];
                                        $sql4 ="SELECT * FROM `comment_n_review` WHERE `hotel_id`= $id";
                                        $result4 = mysqli_query($conn, $sql4);
                                        while ($row4 = mysqli_fetch_assoc($result4)){
                                        //echo $row['id'];
                                        //echo $row['name'];
                                        $id4 = $row4 ['hotel_id'];
                                        $name = $row4['name'];
                                        $comment = $row4['comment'];
                                        $comment_time = $row4['comment_time'];
                                        $rating = $row4['rating'];
                                        ?>

                    <div class="bs-cont-wrapper p-30">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                                <a href=""> <img src="images/blog-006.jpg" alt=""></a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                                <div class="sb-commment-text">
                                    <ul>
                                        <li>
                                            <h6><a href="javascript:;">
                                                    <?php echo $name; ?>
                                                </a>
                                            </h6>
                                        </li>
                                        <li class="left-side">
                                            <?php echo $comment_time; ?> <span>
                                                <?php
                                                        $start=1;
                                                        while($start <= 5)
                                                        {
                                                            if($rating< $start )
                                                            {
                                                            ?>
                                                <a href="javascript:;"> <i class="fas fa-star-o"></i>
                                                        <?php
                                                            }
                                                            else
                                                            {
                                                             ?>
                                                    <a href="javascript:;"> <i class="fas fa-star"></i>
                                                        <?php
                                                            }
                                                            $start++;
                                                        }
                                                        ?>
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="p-0">
                                        <?php echo $comment; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="hs-slidebar sb-grid-main-wrapper p-0">
                <div class="find-us-wrapper pb-0">
                    <h4 class="pb-20"><a href="javascript:;">Check Availability</a></h4>
                    <ul>
                        <li>
                            <input type="text" placeholder="Name">

                        </li>
                        <li>
                            <input type="text" placeholder="Email">

                        </li>
                        <li>
                            <input type="text" placeholder="Number">

                        </li>
                        <li>
                            <input type="text" name="picker" class="datepicker" placeholder="09-04-2020">
                            <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 19 20" width="19" height="20">
                                <title>Icon </title>
                                <style>
                                    tspan {
                                        white-space: pre
                                    }

                                    .shp0 {
                                        fill: #1b72ea
                                    }
                                </style>
                                <path id="Icon" class="shp0"
                                    d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <input type="text" name="picker" class="datepicker" placeholder="09-04-2020">
                            <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 19 20" width="19" height="20">
                                <title>Icon </title>
                                <style>
                                    tspan {
                                        white-space: pre
                                    }

                                    .shp0 {
                                        fill: #1b72ea
                                    }
                                </style>
                                <path id="Icon1" class="shp0"
                                    d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z">
                                </path>
                            </svg>
                        </li>
                        <li>
                            <select name="SelectChild" id="SelectChild">
                                <option value="">1 Adult</option>
                                <option value="">1 Adult</option>
                                <option value="">2 Adult</option>
                                <option value="">1 Adult</option>
                                <option value="">1 Adult</option>
                            </select>
                        </li>
                        <li>
                            <select name="SelectChild1" id="SelectChild1">
                                <option value=""> 0 Child</option>
                                <option value=""> 1 Child</option>
                                <option value=""> 0 Child</option>
                                <option value=""> 0 Child</option>
                                <option value=""> 0 Child</option>
                            </select>
                        </li>
                        <li>
                            <select name="SelectChild2" id="SelectChild2">
                                <option value="" disabled selected>Room Type</option>
                                <option value="">Room Type</option>
                                <option value="">Room Type</option>
                                <option value="">Room Type</option>
                                <option value="">Room Type</option>
                            </select>
                        </li>

                        <li class="rating-wrapper p-30">
                            <ul>
                                <li class="p-rel">

                                    <label>Amount</label>
                                    <span>$350</span>
                                </li>
                                <li class="p-rel">

                                    <label>service charges</label>
                                    <span>$15</span>
                                </li>
                                <li class="p-rel">

                                    <label>Tex-paid</label>
                                    <span>$3</span>
                                </li>
                                <li>
                                    <hr>
                                </li>
                                <li class="p-rel">

                                    <label>Total Amount</label>
                                    <span class="color">$368</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="booking.php" class="btn btn-primary w-100">Book Now</a>
                        </li>
                    </ul>

                </div>
                <div class="holiday-section p-rel">
                    <img src="images/l-sidebar.jpg" alt="" class="">
                    <div>
                        <h3><a href="javascript:;">Summar<br>Holiday<br>20% OFF</a></h3>
                        <button type="button" class="btn btn-light">get code</button>
                    </div>
                </div>
            </div>

        </div> -->
    </div>
</div>
</div>

<!-- footer section start -->
<?php include 'include-front/footer.php';?>
<script>
    $ (function(){
        $(".rateyo").rateYo().on("rateyo.change",function(e, data){
            var rating = data.rating;
            $(this).parent().find(' .score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find(' .result').text('rating :' + rating);
            $(this).parent().find('input[name=rating]').val(rating);

        });
    });
</script>