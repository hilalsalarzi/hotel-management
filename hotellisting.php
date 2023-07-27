<?php include 'include-front/header.php';?>


   <!-- sign up banner start-->
   <div class="s-banner-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="s-heading-section">
                  <h2><a href="javascript:;">Hotel Listing Grid View</a></h2>
                  <ul>
                     <li><a href="index-01.html">Home</a></li>
                     <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                     <li><a href="javascript:;">Categories View</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- grid section start -->
   <div class="sb-grid-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
               <div class="grid-view-wrapper">
                  <div class="row">
                     <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="fliter-sec">
                           <div>
                              <select >
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                              </select>
                           </div>
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item ms-3" role="presentation">
                                 <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    <i class="fas fa-grip-horizontal"></i>
                                 </button>
                              </li>
                              <li class="nav-item ms-3" role="presentation">
                                 <button class="nav-link" id="pills-profile-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">
                                    <i class="fas fa-list-ul"></i>
                                 </button>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <ul id="show-item">
                           <li>
                              <a href="javascript:;">
                                 <span>Showing 1-18</span> of 256 results
                              </a>
                           </li>
                           <li>
                              <a href="grid-map-view.html" class="btn btn-light ms-4">Map View</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <?php
                                $sql ="SELECT * FROM booking as b INNER JOIN hotel as h ON h.id = b.hotel_id";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)){
                                //echo $row['id'];
                                //echo $row['name'];
                                $id = $row['id'];
                                $pic = $row['picture'];
                                $hotel = $row['name'];
                                $address = $row['address'];
                                $amount = $row['amount'];

                                echo '<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="sub-main">
                                   <div class="img-sec p-rel">
                                      <div class="hover-img p-rel">
                                         <a href="hotel.php?hotid='.$id.'"> <img src="images/pics/'.$pic.'"  alt=""></a>
                                      </div>
                                      <span>Rs'. $amount.' Night</span>
                                   </div>
                                   <div class="slider-content">
                                      <span>
                                         <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                               class="fas fa-star"></i>
                                            <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                            Review</a>
                                      </span>
                                      <h5><a href="hotel.php?hotid='.$id.'">'. $hotel .'</a></h5>
                                      <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                      '. substr($address, 0, 30).'</span></a>
                                   </div>
                                </div>
                             </div>';

                                }
                            ?>
                        </div>
                     </div>
                     <!-- second tab sections -->
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" >
                        <div class="row">
                            <?php
                            $sql1 ="SELECT * FROM booking b INNER JOIN hotel h ON h.id = b.hotel_id";
                            $result1 = mysqli_query($conn, $sql1);
                            while ($row1 = mysqli_fetch_assoc($result1)){
                            //echo $row['id'];
                            //echo $row['name'];
                            $id1 = $row1['id'];
                            $hotel1 = $row1['name'];
                            $comment = $row1['comment'];
                            $address = $row1['address'];
                            $pic1 = $row1['picture'];
                            $amount =$row1['amount'];
                            echo ' <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="list-type">
                               <div class="list-sub-main list-width-type">
                                  <div class="img-sec p-rel">
                                     <div class="hover-img p-rel">
                                     <a href="hotel.php?hotid='.$id1.'"> <img src="images/pics/'.$pic1.'"  alt=""></a>
                                     </div>
                                     <span>Rs '.$amount.' night</span>
                                  </div>
                                  <div class="slider-content">
                                     <span>
                                        <a href="javascript:;"> <i class="fas fa-star"></i><i
                                              class="fas fa-star"></i><i class="fas fa-star"></i>
                                           <i class="far fa-star"></i><i class="far fa-star"></i>
                                           &nbsp; | &nbsp; 88+
                                           Review</a>
                                     </span>
                                     <h5><a href="hotel.php?hotid='.$id.'">'. $hotel1 .'</a></h5>
                                     <a href="javascript:;"> <span class="clr-text"><i
                                              class="fas fa-map-marker-alt"></i>'. substr($address, 0, 30).'</span></a>
                                     <p> '. $comment.'
                                     </p>
                                  </div>
                               </div>
                            </div>
                         </div>
                            ';

                            }
                            
                            ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
               
               <div class="find-us-wrapper">
                  <h4><a href="javascript:;">find Us</a></h4>
                  <ul>
                     <li>
                        <input type="text" placeholder="Your Destination?">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                           width="22" height="22">
                           <title>Icon</title>
                           <style>
                              tspan {
                                 white-space: pre
                              }

                              .shp0 {
                                 fill: #1b72ea
                              }
                           </style>
                           <path id="Icon2" class="shp0"
                              d="M11.5 13.59C12.65 13.59 13.59 12.65 13.59 11.5C13.59 10.34 12.65 9.4 11.5 9.4C10.34 9.4 9.41 10.34 9.41 11.5C9.41 12.65 10.34 13.59 11.5 13.59ZM11.5 10.23C12.2 10.23 12.77 10.8 12.77 11.5C12.77 12.2 12.2 12.76 11.5 12.76C10.8 12.76 10.23 12.2 10.23 11.5C10.23 10.8 10.8 10.23 11.5 10.23ZM20.59 11.08L18.94 11.08C18.74 7.3 15.7 4.26 11.91 4.05L11.91 2.41C11.91 2.18 11.73 2 11.5 2C11.27 2 11.09 2.18 11.09 2.41L11.09 4.46C11.09 4.68 11.27 4.87 11.5 4.87C15.15 4.87 18.13 7.84 18.13 11.5C18.13 15.15 15.15 18.13 11.5 18.13C7.84 18.13 4.87 15.15 4.87 11.5C4.87 8.96 6.35 6.61 8.64 5.51C8.85 5.42 8.94 5.17 8.84 4.96C8.74 4.76 8.49 4.67 8.28 4.77C7.03 5.37 5.97 6.3 5.22 7.47C4.53 8.55 4.13 9.8 4.06 11.08L2.41 11.08C2.19 11.08 2 11.27 2 11.5C2 11.73 2.19 11.91 2.41 11.91L4.05 11.91C4.26 15.7 7.3 18.74 11.09 18.94L11.09 20.58C11.09 20.81 11.27 21 11.5 21C11.73 21 11.91 20.81 11.91 20.58L11.91 18.94C15.7 18.74 18.74 15.7 18.94 11.91L20.59 11.91C20.81 11.91 21 11.73 21 11.5C21 11.27 20.81 11.08 20.59 11.08Z" />
                        </svg>
                     </li>
                     <li>
                        <input type="text"  class="datepicker" placeholder="09-04-2020">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20"
                           width="19" height="20">
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
                              d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z" />
                        </svg>
                     </li>
                     <li>
                        <input type="text"  class="datepicker" placeholder="09-04-2020">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20"
                           width="19" height="20">
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
                              d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z" />
                        </svg>
                     </li>
                     <li>
                        <select >
                           <option value="">1 Adult - 0 Child</option>
                           <option value="">1 Adult - 1 Child</option>
                           <option value="">2 Adult - 0 Child</option>
                           <option value="">1 Adult - 0 Child</option>
                           <option value="">1 Adult - 0 Child</option>
                        </select>
                     </li>
                     <li>
                        <button type="button" class="btn btn-primary">search</button>
                     </li>
                  </ul>
               </div>
               <!-- find us section over -->
               <div class="top-deals-wrapper">
                  <h4><a href="javascript:;">top deals</a></h4>
                  <ul>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 10 - 20% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 20 - 35% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 40 - 50% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" checked class="checkbox" >
                        <label >Flat 50 - 65% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 70 - 75% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Best Package Offers</label>
                     </li>
                  </ul>
               </div>
               <!-- r5ating section -->
               <div class="rating-wrapper">
                  <h4><a href="javascript:;">Star Rating</a></h4>
                  <ul>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                        <span>12</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></label>
                        <span>25</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span >15</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span>24</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="far fa-star"></i><i
                              class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span >14</span>
                     </li>
                  </ul>
               </div>
               <div class="r-type-wrapper">
                  <h4><a href="javascript:;">Rooms Types</a></h4>
                  <ul>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Duplex</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Standart</label>
                     </li>
                     <li>
                        <input type="checkbox" checked class="checkbox" >
                        <label >Studio</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Sweets</label>
                     </li>
                  </ul>
               </div>

            </div>
            <!-- room types -->
           
         </div>
      </div>
      <!-- pagination start -->
      <nav>
         <ul class="pagination pagination-lg justify-content-center">
             <li class="page-item">
                 <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-arrow-left"></i></a>
             </li>
             <li class="page-item res-d-none"><a class="page-link" href="#">1</a></li>
             <li class="page-item active res-d-none" aria-current="page">
                 <a class="page-link" href="#">2</a>
             </li>
             <li class="page-item res-d-none"><a class="page-link" href="#">3</a></li>
             <li class="page-item res-d-none"><a class="page-link" href="#">...</a></li>
             <li class="page-item res-d-none"><a class="page-link" href="#">5</a></li>
             <li class="page-item  active ">
                 <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
             </li>
         </ul>
     </nav>
      <!-- pagination end -->
   </div>

     <!--footer-->
     <?php include 'include-front/footer.php';?>

   