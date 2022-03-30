<@page>
    <div class="col page s9">
        <div class="flex bb flexDColumn">
            <div class="dbHeader_optionList apbc1 relative z20">
                <div class="flex flexDColumn at_leadmenu">
                    <div class="header_heading flex spaceBetween">
                        <h3 class="f24 sfcw text-uppercase mainhead  mt15 mb15 relative">
                            <div class="fronticon">
                                <svg viewBox="0 0 25 28" class="icon shape-codepen">
                                    <use href="<?=ICONS?>icons.svg#DuringStayIcon-usage" />
                                </svg>
                            </div>During Stay
                        </h3>

                    </div>
                    <div class="header_filters apbc1">
                        <div class="sticky-outer-wrapper" style="">
                            <div class="sticky-inner-wrapper" style="position: relative; transform: translate3d(0px, 0px, 0px);">
                                <div class="pl15 pr48 navSlider--2O57RuG">
                                    <div style="position: relative;">
                                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                                <div class="swiper-slide menuItem--24kUYsi active--3ZQPyrz swiper-slide-active">All</div>
                                                <div class="swiper-slide menuItem--24kUYsi  swiper-slide-active">About to end</div>

                                            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
                        <input class="datea" type="date" name="fromfilter" id="fromfilter">
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
        <div class="quotation-quotes-list ">

        </div>
    <script src="<?=SCRIPT?>duringStay.js"></script>
    </div>

<@page>