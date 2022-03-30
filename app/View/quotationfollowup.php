<@page>

 <style>

::-webkit-scrollbar-thumb {
    overflow: auto;
    background: #888;
}

::-webkit-scrollbar {
    width: 9px;
}

.sidebar::-webkit-scrollbar-thumb {
    background: transparent;
    border-radius: 5px;
}

 </style>
<div class="col page s9">
    <div class="flex bb flexDColumn">
        <div class="dbHeader_optionList apbc1 relative z20">
            <div class="flex flexDColumn at_leadmenu">
                <div class="header_heading flex spaceBetween">
                    <h3 class="f24 sfcw text-uppercase mainhead  mt15 mb15 relative">
                        <div class="fronticon">
                            <svg viewBox="0 0 25 28" class="icon shape-codepen">
                                <use href="<?= ICONS ?>icons.svg#QuotationFollowup-usage"/>
                            </svg>
                        </div>
                        Quotation Followup
                    </h3>
                    <!-- <div class="mr24 flex spaceBetween">
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Overall Agency Rating</p>
                            <span class="f24 fw9 sfcw">4.00</span>
                        </div>
                        <div class="mr24">
                            <p class="f12 mb4 flex sfcw">Feedback Fill Rate</p>
                            <span class="f24 fw9 sfcw">45.0%</span>
                        </div>
                    </div> -->
                </div>
                <div class="header_filters apbc1">
                    <div class="sticky-outer-wrapper">
                        <div class="sticky-inner-wrapper"
                             style="position: relative; transform: translate3d(0px, 0px, 0px);">
                            <div class="pl15 pr48 navSlider--2O57RuG">
                                <div style="position: relative;">
                                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                        <?php
                                            if(!isset($tab)){
                                                $tab="All";
                                            }

                                        ?>
                                        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                            <a href="<?= HTTP_HOST ?>quotationFollowUp/All" style="color: #fff;" class="swiper-slide menuItem--24kUYsi <?=$tab=="All"?"active--3ZQPyrz":""?> swiper-slide-active" id="AllTab">All                                            </a>
                                            <a href="<?= HTTP_HOST ?>quotationFollowUp/followed" style="color: #fff;" class="swiper-slide menuItem--24kUYsi <?=$tab=="followed"?"active--3ZQPyrz":""?> " id="FollowedTab">Followed Up</a>
                                            <a href="<?= HTTP_HOST ?>quotationFollowUp/pendingFollowUp" style="color:#fff;" class="swiper-slide menuItem--24kUYsi swiper-slide-next <?=$tab=="pendingFollowUp"?"active--3ZQPyrz":""?>" id="PendingTab">Pending Followup</a>
                                            <a href="<?= HTTP_HOST ?>quotationFollowUp/reminders" style="color: #fff;" class="swiper-slide menuItem--24kUYsi <?=$tab=="reminders"?"active--3ZQPyrz":""?>" id="RemindersTab">Reminders</a>
                                            <a href="<?= HTTP_HOST ?>quotationFollowUp/invoiced" style="color: #fff;" class="swiper-slide menuItem--24kUYsi <?=$tab=="invoiced"?"active--3ZQPyrz":""?>" id="InvoicedTab">Invoiced</a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
            if ($_SESSION["fullPrivilege"] == 1) {
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
                                $agent = new \app\Model\Agent();
                                $agent->get();
                                while ($agent->next()) {
                                    ?>
                                    <p>
                                        <label>
                                            <input name="agentfilter[]" class="custom-option " value="<?= $agent->id ?>"
                                                   id="indeterminate-checkbox" type="checkbox"/>
                                            <span><?= $agent->name ?></span>
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
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Lead Types</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="LeadType">
                            <ul>
                                <li value="1" class="custom-option dds">Hot</li>
                                <li value="2" class="custom-option dds">Active</li>
                                <li value="3" class="custom-option dds">In Progress</li>
                                <li value="4" class="custom-option dds">Cold</li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Months</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="monthsfilter" action="">
                            <ul>
                                <li value="1" name="January" class="custom-option ccs">January</li>
                                <li value="2" name="February" class="custom-option ccs">February</li>
                                <li value="3" name="March" class="custom-option ccs">March</li>
                                <li value="4" name="April" class="custom-option ccs">April</li>
                                <li value="5" name="May" class="custom-option ccs">May</li>
                                <li value="6" name="June" class="custom-option ccs">June</li>
                                <li value="7" name="July" class="custom-option ccs">July</li>
                                <li value="8" name="August" class="custom-option ccs">August</li>
                                <li value="9" name="September" class="custom-option ccs">September</li>
                                <li value="10" name="October" class="custom-option ccs">October</li>
                                <li value="11" name="November" class="custom-option ccs">November</li>
                                <li value="12" name="December" class="custom-option ccs">December</li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                if(isset($tab))
                {
                    if ( $tab != "followed")
                    {
                        ?>
                    <div class="select-wrapper">
                    <div class="select">
                        <div class="select__trigger"><span>No Followup</span>
                            <i class="material-icons ">arrow_drop_down</i>
                            <!-- <div class="arrow"></div> -->
                        </div>
                        <div class="custom-options">
                            <form id="FollowedUp">
                                <ul>
                                    <li value="1 day" class="custom-option dds">24 hrs</li>
                                    <li value="2 days" class="custom-option dds">24-48 hrs</li>
                                    <li value="3 days" class="custom-option dds">48-72 hrs</li>
                                    <li value="4 days" class="custom-option dds">72+ hrs</li>
                            </form>
                        </div>
                    </div>
                </div>
                        <?php

                    }
                }
            ?>
          <!--  <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>FollowUp ELigibility</span>
                        <i class="material-icons ">arrow_drop_down</i>

                    </div>
                    <div class="custom-options">
                        <form id="FollowedUpEligibility">
                            <ul>
                                <li value="eligible_for_followup" class="custom-option">Eligible for followup</li>
                                <li value="all_leads" class="custom-option">All leads</li>
                            </ul>
                        </form>

                    </div>
                </div>
            </div>-->
            <div class="select-wrapper">
                <div class="select">
                    <div class="select__trigger"><span>Special Leads</span>
                        <i class="material-icons ">arrow_drop_down</i>
                        <!-- <div class="arrow"></div> -->
                    </div>
                    <div class="custom-options">
                        <form id="specialleads">
                            <ul>
                                <li value="1" class="custom-option dds">Groups(6+ pax)</li>
                                
                               
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters2">
        <div class="select-wrapper">
            <div class="select">
                <div class="select__trigger"><span>Trip Stage</span>
                    <i class="material-icons ">arrow_drop_down</i>
                    <!-- <div class="arrow"></div> -->
                </div>
                <div class="custom-options">
                    <form id="TripStage">
                        <ul>
                            <li value="Still Dreaming" class="custom-option dds">Trip Stage-Still dreaming . . . not sure I'm going to take this trip</li>
                            <li value="Not Sure which place" class="custom-option dds">I know I'm going somewhere, just not sure which place</li>
                            <li value="Lets go" class="custom-option dds">I'm definitely going, I know which place . . . let's go!</li>
                            <li value="Flight Train Booked" class="custom-option dds">Flight-Train already booked, just need remaining package</li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div class="clearFilters">
            <div id="destclear" class="clearFilter">
                <div>Destination</div>
                <label style="cursor: pointer" class="destclear">x</label>
            </div>
            <div id="agentclear" class="clearFilter">
                <div>Agent</div>
                <label>x</label>
            </div>
            <div id="monthclear" class="clearFilter">
                <div>Month</div>
                <label>x</label>
            </div>
            <div id="leadtypeclear" class="clearFilter">
                <div>LeadType</div>
                <label>x</label>
            </div>
                <div id="followedup" class="clearFilter">
                    <div>Folllowedup</div>
                    <label>x</label>
                </div>
                <div id="followedupeligibiltyclear" class="clearFilter">
                    <div>Folllowedupeligibity</div>
                    <label>x</label>
                </div>
                <div id="specialleadsclear" class="clearFilter">
                    <div>SpecialLeadsClear</div>
                    <label>x</label>
                </div>
                <div id="tripstageclear" class="clearFilter">
                    <div>Trip Stage Clear</div>
                    <label>x</label>
                </div>
           </div>
    </div>
    <div class="quotation-quotes-list">

    </div>
</div>
<script src="<?= SCRIPT ?>quotationfollowup.js"></script>
<script>
    dataFilter.tab="<?=$tab?>";
</script>

<@page>


