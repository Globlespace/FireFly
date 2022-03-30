<div class="give_quote">
    <div class="modal-main" id="modal">
        <div class="modal-form">
            <div class="modal-head">
            <span class="modal-btn-close">
                <a title="Close" class="close"><i class="fas fa-times close-btn"></i></a>
            </span>
                <h2 style=" font-size: 20px !important;" class="title">Quotation Form</h2>
            </div>

            <div class="modal-contented">
                <?php

                $query="SELECT * FROM `give_quotations` gv JOIN `quotation_days` qd on gv.id = qd.g_q_id JOIN days d on qd.d_id = d.id WHERE gv.id=$request->quoteid ";
                $gq=new \app\Model\give_quotation();
                $gq->query($query);
                ?>
                <form id="form-main" class="form-main">
                    <input type="hidden" id="c_q_id" name="c_q_id" value="<?=$request->tripid?>">
                    <?php
                    while ($gq->next()){
                        ?>
                        <div day="<?=$gq->day?>" style="width: 100%; padding: 10px" id="<?=$gq->day?>" class="row days <?=$gq->day?>">
                            <h5 style="margin: 5px"><?=$gq->day?></h5>
                            <div style="margin: 6px" class="col md">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="gg-bound-control-wrapper">
                                                    <input required="required" value="<?=$gq->distinationPoint?>" class="h2 gg-bound-control-input" id="destinationpointinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">
                                                    <div class="gg-bound-control-label">Destination Point</div>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px" class="col md">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="gg-bound-control-wrapper">
                                                    <input required="required" value="<?=$gq->hotelName?>" class="h2 gg-bound-control-input" id="hotelnameinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">
                                                    <div class="gg-bound-control-label">Hotel Name</div>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px; " class="col xsm">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div id="dropdowncontainer"  class="qff gg-bound-control-wrapper">
                                                    <select  id="roomtypecheckbox" name="RoomType">
                                                        <option <?= $gq->hotelRoomType==0 ? "selected":"" ?> value="0">Room Type</option>
                                                        <option <?= $gq->hotelRoomType==1 ? "selected":"" ?> value="1">Standard</option>
                                                        <option <?= $gq->hotelRoomType==2 ? "selected":"" ?> value="2">Deluxe</option>
                                                        <option <?= $gq->hotelRoomType==3 ? "selected":"" ?> value="3">Super Deluxe</option>
                                                        <option <?= $gq->hotelRoomType==4 ? "selected":"" ?> value="4">Luxurious</option>
                                                    </select>
                                                </div>
                                                <div    class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px; " class="col xsm">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="qff gg-bound-control-wrapper">
                                                    <select  id="hotelratingcheckbox">
                                                        <option <?= $gq->hotelRating==0 ? "selected":"" ?> value="0">Hotel Rating</option>
                                                        <option <?= $gq->hotelRating==1 ? "selected":"" ?> value="1">1 Star</option>
                                                        <option <?= $gq->hotelRating==2 ? "selected":"" ?> value="2">2 Star</option>
                                                        <option <?= $gq->hotelRating==3 ? "selected":"" ?> value="3">3 Star</option>
                                                        <option <?= $gq->hotelRating==4 ? "selected":"" ?> value="4">4 Star</option>
                                                        <option <?= $gq->hotelRating==5 ? "selected":"" ?> value="5">5 Star</option>
                                                    </select>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px;" class="xsm col">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="gg-bound-control-wrapper">
                                                    <div id="DayInclusions" onclick="checkList(this)" class="dropdown-check-list" tabindex="100">
                                                        <span class="anchor">Inclusions</span>
                                                        <ul id="dayInclusions" class="items">
                                                            <li><input <?= $gq->breakfast=='true' ? "Checked":"" ?> id="BreakfastChecked" type="checkbox" />Breakfast </li>
                                                            <li><input <?= $gq->dinner=='true' ? "Checked":"" ?>  id="DinnerChecked" type="checkbox" />Dinner</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px;" class="full col">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="gg-bound-control-wrapper">
                                                    <input id="itenaryheading" value="<?=$gq->itenaryHeading?>"  required="required"  class="h2 gg-bound-control-input">
                                                    <div class="gg-bound-control-label">Itenary Heading</div>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin: 6px;" class="full col">
                                <div class="contine">
                                    <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                        <div class="gg-bound-control-outer">
                                            <div class="gg-bound-control-inner">
                                                <div class="gg-bound-control-wrapper">
                                                    <textarea id="itenarytextarea"  required="required" rows="1" onmousemove="pageadjest()" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input"><?=$gq->itenary?></textarea>
                                                    <div class="gg-bound-control-label">Itenary</div>
                                                </div>
                                                <div class="gg-bound-control-df-bottom-border"></div>
                                                <div class="gg-bound-control-ef-bottom-border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <h5 style="margin: 5px">General</h5>
                <div class="submit-box">
                    <div style="margin: 6px; " class="col half">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <textarea  required="required" id="inclusionstextarea"  rows="1" onmousemove="pageadjest()" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"><?=$gq->Inclusions?></textarea>
                                            <div class="gg-bound-control-label">Inclusions</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col half">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                           <textarea  required="required" id="exclusionstextarea"  rows="1" onmousemove="pageadjest()" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"><?=$gq->Exclusions?></textarea>
                                            <div class="gg-bound-control-label">Exclusions</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-box">
                    <div style="margin: 6px; " class="col lg">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input type="date" required="required" value="<?=$gq->dateOfJourney?>" id="Dateofjourney" class="h2 gg-bound-control-input"  spellcheck="false" autocomplete="off" autocapitalize="none" name="Explore ">
                                            <div style="font-size: 1rem" class="gg-bound-control-label">Journey Date</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col lg">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" value="<?=$gq->flight?>" id="flightinput" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Explore ">
                                            <div class="gg-bound-control-label">Flight</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col lg">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required"  value="<?=$gq->vehicleType?>" id="cabinput" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
                                            <div class="gg-bound-control-label">VehicleType</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="submit-box">
                    <div style="margin: 6px; " class="col lg">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" id="halfprice"  value="<?=$gq->advanceAmountToPay?>" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
                                            <div class="gg-bound-control-label">Advance Amount to Pay</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 6px; " class="col lg">
                        <div class="contine">
                            <div class="gg-bound-control" data-bound-control onclick="this.classList.add('active-gg-bound-control')">
                                <div class="gg-bound-control-outer">
                                    <div class="gg-bound-control-inner">
                                        <div class="gg-bound-control-wrapper">
                                            <input required="required" id="totalprice"  value="<?=$gq->quotationPrice?>" class="h2 gg-bound-control-input" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Cab">
                                            <div class="gg-bound-control-label">Total Booking Amount</div>
                                        </div>
                                        <div class="gg-bound-control-df-bottom-border"></div>
                                        <div class="gg-bound-control-ef-bottom-border"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="modal-btn" id="sendQuote" onclick="sendQuote()"  type="submit">Send</button>
                    <button style="margin-left: 20px !important;" class="modal-btn" id="addDay" type="">Add</button>
                </div>
            </div>
        </div>
    </div>
    <script>initQuoteForm()</script>
</div>

