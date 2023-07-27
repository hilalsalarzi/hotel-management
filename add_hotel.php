<?php include 'include-front/header.php';?>

    <!--HEADER END-->
    <!-- sign up banner start-->
    <div class="s-banner-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="s-heading-section">
                        <h2><a href="javascript:;">Add Hotel</a></h2>
                        <ul>
                            <li><a href="index-01.html">Home</a></li>
                            <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                            <li><a href="javascript:;">Add Hotel</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add hotel section start-->
    <div class="hotel-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h2>New-Hotel</h2>
                    <form method="POST" enctype="multipart/form-data" class="new_property_box">
                        <div class="form_property">
                            <h3>Description &amp; Price</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label class="no_margine">Hotel Name</label>
                                        <input type="text" name="name" placeholder="Enter your hotel name">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Province</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a Province</option>
                                                <option value="44">Kpk</option>
                                                <option value="45">Punjab</option>
                                                <option value="44">Sindh</option>
                                                <option value="44">Balochistan</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Description</label>
                                        <textarea placeholder=""></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Category</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a Category</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>District</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a District</option>
                                                <option value="44">Malakand</option>
                                                <option value="45">Swat</option>
                                                <option value="44">Dir</option>
                                                <option value="44">Chitarl</option>
                                                <option value="44">Peshawar</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Price</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text search_filte select-fields"
                                                id="basic-addon2">Rs</span>
                                            <input type="text" class="form-control" placeholder="Per/ Night">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Image</label>
                                        <div class="pd_order_filed_input_box float_left img-select">
                                            <div class="file-chooser">
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Add Room</h3>
                            <div class="fields">
                                <div class="row">
                                    <h4 class="mt-3">Comfort Room</h4>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Room Number</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Image</label>
                                        <div class="pd_order_filed_input_box float_left img-select">
                                            <div class="file-chooser">
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Hotel_id</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>plan</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>status</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a status</option>
                                                <option value="44">Booked</option>
                                                <option value="45">Unbooked</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label>Description</label>
                                        <textarea placeholder=""></textarea>
                                    </div>

                                    <h6 class="mt-3">Room Service Added</h6>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox51" type="checkbox">
                                        <label for="checkbox51">Number of beds</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox52" type="checkbox">
                                        <label for="checkbox52">Setting Area</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox53" type="checkbox">
                                        <label for="checkbox53">Clothes rack</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox54" type="checkbox">
                                        <label for="checkbox54">Cable channels</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox55" type="checkbox">
                                        <label for="checkbox55">Air conditions</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">kitchenette</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">Shower & bathtub</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox57" type="checkbox">
                                        <label for="checkbox57">outside windows</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox62" type="checkbox">
                                        <label for="checkbox62">Telephone </label>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <h4 class="mt-3">Luxury Rooms</h4>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Room Number</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Image</label>
                                        <div class="pd_order_filed_input_box float_left img-select">
                                            <div class="file-chooser">
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Hotel_id</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>plan</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>status</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a status</option>
                                                <option value="44">Booked</option>
                                                <option value="45">Unbooked</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label>Description</label>
                                        <textarea placeholder=""></textarea>
                                    </div>

                                    <h6 class="mt-3">Room Service Added</h6>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox51" type="checkbox">
                                        <label for="checkbox51">Number of beds</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox52" type="checkbox">
                                        <label for="checkbox52">Setting Area</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox53" type="checkbox">
                                        <label for="checkbox53">Clothes rack</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox54" type="checkbox">
                                        <label for="checkbox54">Cable channels</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox55" type="checkbox">
                                        <label for="checkbox55">Air conditions</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">kitchenette</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">Shower & bathtub</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox57" type="checkbox">
                                        <label for="checkbox57">outside windows</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox62" type="checkbox">
                                        <label for="checkbox62">Telephone </label>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <h4 class="mt-3">Deluxe Rooms</h4>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Room Number</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Image</label>
                                        <div class="pd_order_filed_input_box float_left img-select">
                                            <div class="file-chooser">
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <label>Hotel_id</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>plan</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>status</label>
                                        <div class="search_filte select-fields">
                                            <select class="select-box">
                                                <option value="" selected="selected">Select a status</option>
                                                <option value="44">Booked</option>
                                                <option value="45">Unbooked</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label>Description</label>
                                        <textarea placeholder=""></textarea>
                                    </div>

                                    <h6 class="mt-3">Room Service Added</h6>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox51" type="checkbox">
                                        <label for="checkbox51">Number of beds</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox52" type="checkbox">
                                        <label for="checkbox52">Setting Area</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox53" type="checkbox">
                                        <label for="checkbox53">Clothes rack</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox54" type="checkbox">
                                        <label for="checkbox54">Cable channels</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox55" type="checkbox">
                                        <label for="checkbox55">Air conditions</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">kitchenette</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox56" type="checkbox">
                                        <label for="checkbox56">Shower & bathtub</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox57" type="checkbox">
                                        <label for="checkbox57">outside windows</label>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox62" type="checkbox">
                                        <label for="checkbox62">Telephone </label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Social Media</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label class="no_margine">Facebook</label>
                                        <input type="text" name="title" placeholder="Enter your property title">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Instagram</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Twitter</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Linked In</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <label>Prnterest</label>
                                        <div class="search_filte select-fields">
                                            <input type="text">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Features</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Breakfast</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">Room Service</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">Meeting Rooms</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">Parking</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">Fitness Gym</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">Internet Access</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">Swimming pool</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox8" type="checkbox">
                                        <label for="checkbox8">Gift shop</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="checkbox11" type="checkbox">
                                        <label for="checkbox11">security</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Pricing Plan</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="radio1" type="radio" class="radio-btn" name="selectOne">
                                        <label for="radio1">Comfort Room</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="radio2" type="radio" class="radio-btn" name="selectOne">
                                        <label for="radio2">Luxury Service</label>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <input id="radio3" type="radio" class="radio-btn" name="selectOne">
                                        <label for="radio3">Deluxe room</label>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Contact Information</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label class="no_margine">Name</label>
                                        <input type="text" name="title" placeholder="Enter your name">
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Email Id</label>
                                        <input type="text" placeholder="example@gmail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <h3>Location &amp; map</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label class="no_margine">map</label>
                                        <div class="map_ifram">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211749.4556421008!2d71.42538330583143!3d33.97749840878954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38d917b90f0e79cf%3A0xa816b2637558a412!2sPeshawar%2C%20Khyber%20Pakhtunkhwa%2C%20Pakistan!5e0!3m2!1sen!2s!4v1671517082562!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="no_margine">ADDRESS *</label>
                                                <input type="text" name="address" placeholder="Enter hotel address">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <label>zip *</label>
                                                <input type="text" name="zip_code" placeholder="Enter hotel zip">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <label>LONGITUDE</label>
                                                <input type="text" name="longitude" placeholder="">
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-12">
                                                <label>LATITUDE</label>
                                                <input type="text" name="latitude" placeholder="">
                                            </div>
                                            <div class="col-12">
                                                <label>LOCATION*</label>
                                                <div class="search_filter select-fields">
                                                    <select class="select-box">
                                                        <option value="" selected="selected">Select location</option>
                                                        <option value="104">Agar</option>
                                                        <option value="105">Alirajpur</option>
                                                        <option value="106">Anuppur</option>
                                                        <option value="107">Ashoknagar</option>
                                                        <option value="108">Balaghat</option>
                                                        <option value="109">Barwani</option>
                                                        <option value="92">Bhopal</option>
                                                        <option value="89">Dewas</option>
                                                        <option value="90">Indore</option>
                                                        <option value="93">Mahu</option>
                                                        <option value="91">Ujjain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form_property">
                            <div class="ex_top_mar">
                                <h3>images</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="pd_order_filed_input_box float_left">
                                                <!-- 
                                          <div class="hidden-inputs hidden"></div> -->
                                                <div class="file-chooser">
                                                    <input type="file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3>Video</h3>
                            <div class="fields">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="youtube_link"
                                            placeholder="https://www.youtube.com/watch?v=dVkK36KOcqs">
                                        <label class="no_margine">Allow Youtube OR Vimeo Video URL</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-default mb-5">Save &amp; Preview</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add hotel section End-->

    <!-- footer section start -->
 <?php include 'include-front/footer.php';?>

