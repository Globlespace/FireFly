<@page>
<div class="col page s9">
    <div class="flex bb flexDColumn">
        <div class="dbHeader_optionList apbc1 relative z20">
            <div class="flex flexDColumn at_leadmenu">
                <div class="header_heading flex spaceBetween">
                    <h3 class="f24 sfcw text-uppercase mainhead  mt15 mb15 relative">
                        <div class="fronticon">
                            <svg viewBox="0 0 25 28" class="icon shape-codepen">
                                <use href="<?= ICONS ?>icons.svg#PostStayIcon-usage"/>
                            </svg>
                        </div>
                        Post Stay
                    </h3>
                    <div class="mr24 flex spaceBetween">
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Overall Agency Rating</p>
                            <span class="f24 fw9 sfcw">4.00</span>
                        </div>
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Feedback Fill Rate</p>
                            <span class="f24 fw9 sfcw">45.0%</span>
                        </div>
                    </div>
                </div>
                <div class="header_filters apbc1">
                    <div class="sticky-outer-wrapper" style="">
                        <div class="sticky-inner-wrapper"
                             style="position: relative; transform: translate3d(0px, 0px, 0px);">
                            <div class="pl15 pr48 navSlider--2O57RuG">
                                <div style="position: relative;">
                                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                        <div class="swiper-wrapper"
                                             style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <div class="swiper-slide menuItem--24kUYsi active--3ZQPyrz swiper-slide-active">
                                                All
                                            </div>
                                            <div class="swiper-slide menuItem--24kUYsi swiper-slide-next">Good Reviews
                                            </div>
                                            <div class="swiper-slide menuItem--24kUYsi">Bad Reviews</div>
                                            <div class="swiper-slide menuItem--24kUYsi">Review Not received</div>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                              aria-atomic="true"></span>
                                    </div>
                                    <div class="css-zekgte button-box">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters2">
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Destinations</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="destinationform" action="">
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option kashmirifilter " value="Kashmir" id="indeterminate-checkbox" type="checkbox"/>
                                    <span class="">Kashmir</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Kerelafilter " value="Ladakh" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Ladakh</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Dubaifilter " value="Himachal" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Himachal</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Dubaifilter " value="Kerala" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Kerala</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Dubaifilter " value="Andaman" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Andaman</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="ddestfilter[]"  class="custom-option Dubaifilter " value="Maldives" id="indeterminate-checkbox" type="checkbox"/>
                                    <span>Maldives</span>
                                </label>
                            </p>
                            <p>
                                <button class="btn waves-effect waves-light btn-small center" type="submit"
                                        name="action">Apply
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if($_SESSION["fullPrivilege"]==1){
                ?>
                <div class="select-wrapper">
                    <div class="select">
                        <div class="select__trigger"><span>Agents</span>
                            <i class="material-icons ">arrow_drop_down</i>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options">
                            <form id="agentform" action="">
                                <?php
                                $agent=new \app\Model\Agent();
                                $agent->get();
                                while ($agent->next())
                                {
                                    ?>
                                    <p>
                                        <label>
                                            <input name="agentfilter[]" class="custom-option " value="<?=$agent->id?>" id="indeterminate-checkbox" type="checkbox"/>
                                            <span><?=$agent->name?></span>
                                        </label>
                                    </p>
                                    <?php
                                }
                                ?>
                                <p>
                                    <button class="btn waves-effect waves-light btn-small center" type="submit"
                                            name="action">Apply
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <div style="width:300px !important" class="select-wrapper">
                <div style="display: flex;"  >
                    <label style="display: block; width: 100px; margin-top: 11px;padding: 5px; font-size: 16px; ;" for="fromfilter">From</label>
                    <input class="datea" type="date" name="fromfilter"  id="fromfilter">
                    <!-- <div class="arrow"></div> -->
                    <!-- <label style="display: block; width: 100px; margin-top: 11px;padding: 5px; font-size: 16px; " for="dateofbirth">To</label>
                     <input class="datea" type="date" name="dateofbirth" id="dateofbirth">-->
                </div>
            </div>
        </div>
    </div>
    <div class="sortfilter">
        <div class="clearFilters">
            <div id="destclear" class="clearFilter">
                <div>Destination</div>
                <label style="cursor: pointer" class="destclear">x</label>
            </div>
            <div id="agentclear" class="clearFilter">
                <div>Agent</div>
                <label>x</label>
            </div>
            <div id="from" class="clearFilter">
                <div>From</div>
                <label>x</label>
            </div>
        </div>
    </div>
    <!--<div style="justify-content: center !important; background-color: white;" class="sortfilter">
        <div class="select-wrapper ">
            <ul id="pagination">
                <li class="pre"><a>«</a></li>
                <li><a class="active">1</a></li>
                <li><a>2</a></li>
                <li><a>3</a></li>
                <li><a>4</a></li>
                <li><a>5</a></li>
                <li><a>6</a></li>
                <li><a>7</a></li>
                <li class="next"><a>»</a></li>
            </ul>
            <small style="color: #333; margin-left: 60px;">Displayin results from all trips</small>
        </div>
    </div>-->
    <div style="background-color: #EAF1F1;" class="flex flexDColumn quotation-quotes-list">

    </div>
    <script src="<?=SCRIPT?>PostStay.js"></script>
</div>
<@page>
<!--old card-->
<div style="margin: 10px !important; " class="card white">

    <div class="header clearfix">
        <div class="header1">
            <div style="display: flex; flex-direction: row;" class="displayrow">
                <div>
                    <img style="width: 40px; height: 40px;" src="../Images/goodrvw.jpg" alt="" srcset="">
                </div>
                <div class="flex flexDColumn">
                    <p style="padding: 5px; margin-top: -4px; font-weight: 700; ">
                        <a href="">TRIP ID 20299</a>
                    </p>
                    <p style="margin-top: -20px; padding: 5px;" class="fitalic pfc4 f12">Last updated 3years
                        ago</p>
                </div>
            </div>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: end;" class="header1">
            <button class="reviewButton--3qjxbvQ reviewtooltip--3AdARhp radius4 sfcw    fwb cursorP btn relative">
                <small>Request CHange </small></button>
        </div>
    </div>
    <div style="position: relative;" class=" clearfix topBar">
        <div class="fright">
            <div class="labelBanner ttCommisionBanner--sWep3fp mt5 mb5"><span class="f12 fitalic sfc1">TT commission: 8.5%</span>
            </div>
            <div class="labelBanner ttCommisionBanner--sWep3fp mt5 mb5"><span class="f12 fitalic sfc1">Amount: ₹487.5</span>
            </div>
        </div>
    </div>
    <div class="row mb15">
        <div class="col s8">
            <div style="padding-left: 20px !important;" class="row">
                <div class="col s4">

                    <h4 class="f12 pfc4">Starting date</h4>
                    <h3 class="f14"> 26 Jul 2019</h3>
                </div>
                <div class="col s4">
                    <h4 class="f12 pfc4">Starting date</h4>
                    <h3 class="f14"> 26 Jul 2019</h3>
                </div>
                <div class="col s4">
                    <h4 class="f12 pfc4">Starting date</h4>
                    <h3 class="f14"><span class="star-text">
                                            <i class="far fa-star star-trip"></i>
                                            <i class="far fa-star star-trip"></i>
                                            <i class="far fa-star star-trip"></i>
                                            <i class="far fa-star star-trip"></i>
                                            <i class="far fa-star star-fo"></i>
                                        </span></h3>
                </div>
            </div>
            <div style="padding-left: 20px !important;" class="row">
                <div class="col s12">
                    <h3 class="f14 fw7 apfc1 mb8"></h3>
                    <p class="f12 pfc4">Hotel and food quality need improvement, Rest is fine.</p>
                </div>
                <div class="col s12 pt8">
                    <!-- <div class="confirmationMSG--CbzxEc_">
                        <p class="status--2VLgSO0 confirm--3ydEOhu">Waiting for Admin Approval</p>
                        <p class="f14">jklmklml</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col s4 bl">
            <div class="row ">
                <div class="col s12">
                    <div class="mb8">

                        <h4 class="f12 pfc4">Overall rating</h4>
                        <h3 class="f14">
                                                <span class="star-text">
                                                    <i class="far fa-star star-trip"></i>
                                                    <i class="far fa-star star-trip"></i>
                                                    <i class="far fa-star star-trip"></i>
                                                    <i class="far fa-star star-trip"></i>
                                                    <i class="far fa-star star-fo"></i>
                                                </span>
                        </h3>
                    </div>
                    <div class="mb8">
                        <h4 class="f12 pfc4">
                            Hotels</h4>
                        <h3 class="f14">Good</h3>
                    </div>
                    <div class="mb8">
                        <h4 class="f12 pfc4">Cab &amp; Driver

                        </h4>
                        <h3 class="f14">Very Good</h3>
                    </div>
                    <div class="mb8">
                        <h4 class="f12 pfc4">Services of Travel Agent</h4>
                        <h3 class="f14">Very Good</h3>
                    </div>
                    <div class="mb8">
                        <h4 class="f12 pfc4">Booking Score</h4>
                        <h3 class="f14">NA</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>