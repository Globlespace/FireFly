<?php

        use app\Model\customer_querie;
        use app\Model\give_quotation;
        $gq = new give_quotation();
        $query="select * from `give_quotations` gq join `quotation_days` qd on gq.id=qd.g_q_id join `days` d on qd.d_id=d.id where gq.id=$quoteid";
        $result=$gq->query($query);
        $table=mysqli_fetch_all($result,MYSQLI_ASSOC);

        $cs = new customer_querie();
        $cs->get($table[0]["c_q_id"]);
        $cs->next();
        $hotelDays=array();
        $dayscount=0;
        foreach ($table as $hotel){
            $dayscount++;
            $hotelDays[$hotel["distinationPoint"]]=0;
        }
        foreach ($table as $hotel){
            $hotelDays[$hotel["distinationPoint"]]=($hotelDays[$hotel["distinationPoint"]]+1);
        }

        ?>
        <style>
            
        </style>
        <div class="page" id="wrapit">
        <input type="hidden" id="HTTP_HOST" value="<?= HTTP_HOST ?>">
        <div class="row">
            <div style="border: 2px solid #2a92bd; border-top: 0px; margin-top: -20px; padding: 10px; padding-left: 0px;"
                 class="col s12">
                <div class="col s3">
                    <div style="background-color: #FEFED9;margin:15px; width: 100px; text-align: center; color: red; box-shadow: 1px 1px #c2c2af;"
                         class="">
                        <span>CFEE $550</span>
                    </div>
                </div>
                <div style="padding: 10px; margin-top: 10px;" class="col s5 offset-s4">
                    <div style="display:flex; flex-direction:row" class="">

                        &nbsp;
                        <div style="margin-top: 11px; border-bottom: 1px solid #ccc; width: 190px; text-align: center; height: 25px; display: flex; flex-direction: row;"
                             class="">
                            <b style="vertical-align: middle; ">Rs</b>
                            <span style="flex-grow: 3; font-weight: normal;"><?=$table[0]["quotationPrice"]?> Total</span>

                        </div>

                        <div style="vertical-align: middle; border: 2px solid red; width: 110px; height: 40px; color: red; text-align:center; margin-left: 8px;"
                             class="">
                            <div onclick="getQuotefilledOne(this,<?=$quoteid?>,<?=$table[0]["c_q_id"]?>)" style="margin-top: 5px;" class="">
                                <span style="vertical-align: middle; cursor: pointer;">CUSTOMISE</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div style="padding-left: 0px; border:2px solid #ccc;margin-right:2px "
                         class="col s2 offset-s2 ">
                        <a href=""> <i style="vertical-align: middle;" class="material-icons">cloud_download</i>
                            <span style="vertical-align: middle;">Download quote</span></a>
                    </div>
                    <div style="border:2px solid #ccc" class="col s2 ">
                        <a href=""> <i style="vertical-align: middle;"
                                       class="material-icons">compare</i>
                            <span style="vertical-align: middle;">Compare quote</span></a>
                    </div>
                </div>

            </div>

        </div>
        <div style="border-bottom: 1px solid #ccc; border-left: 0px; border-right: 0px; height: 30px;" class="row">
            <div class="col ">
                <i style="vertical-align: middle;" class="material-icons">add</i>
                <span style="vertical-align: middle; font-weight: bold;">Basic Details</span>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Trip Type</span>
                    <span><?= $cs->tour_type ?></span>
                    <span style="color: rgb(133, 132, 132);">Quotation Price</span>
                    <span><?= $gq->quotationPrice ?></span>

                </div>
            </div>
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Days</span>
                    <span><?= $cs->duration ?> days</span>
                    <span style="color: rgb(133, 132, 132);">Destination</span>
                    <span><?= $cs->destination ?></span>

                </div>
            </div>
            <div class="col s4">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Nights</span>
                    <span><?= ($cs->duration-1) ?> nights</span>
                    <span style="color: rgb(133, 132, 132);">No.of Adults and Children</span>
                    <span><?= $cs->adults ?> adults <?= $cs->children ?> children</span>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <style>
                    .rating{
                        letter-spacing: -2px;
                        font-size: .9rem;
                    }
                    .rating img{
                        width: 10px;
                    }
                </style>
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Hotel Details</span>
                    <?php
                    foreach ($hotelDays as $key=>$value)
                    {
                        ?>
                    <span>
                        <?=$value?> Night ,
                        <?php
                        foreach ($table as $day)
                        {
                            if($day["distinationPoint"] == $key){
                                echo $day['hotelName'];
                                echo " <span class='rating'>(";
                                switch($day['hotelRating']){
                                    case 1:
                                        ?>
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <?php
                                        break;
                                    case 2:
                                        ?>
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <?php
                                        break;
                                    case 3:
                                        ?>
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <?php
                                        break;
                                    case 4:
                                        ?>
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <?php
                                        break;
                                    case 5:
                                        ?>
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <img class="rating" src="<?=IMAGES?>pdf/star.jpg">
                                        <?php
                                        break;
                                }
                                echo ")</span>";
                                echo " , ";
                                echo $day["distinationPoint"];
                                echo " , ";
                                switch($day['hotelRoomType']){
                                    case 1:
                                        ?>
                                        Standard
                                        <?php
                                        break;
                                    case 2:
                                        ?>
                                        Deluxe
                                        <?php
                                        break;
                                    case 3:
                                        ?>
                                        Super Deluxe
                                        <?php
                                        break;
                                    case 4:
                                        ?>
                                        Luxurious
                                        <?php
                                        break;

                                }
                                break;

                            }
                        }
                        ?>
                    </span>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Flight Details</span>
                    <span><?=$table[0]["flight"]?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Cab Details</span>
                    <span><?=$table[0]["vehicleType"]?></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s6">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Inclusions</span>
                    <?php
                    $table[0]["Inclusions"]=str_replace("\n","</span><span>",$table[0]["Inclusions"]);
                    $table[0]["Exclusions"]=str_replace("\n","</span><span>",$table[0]["Exclusions"]);
                    echo $table[0]["Inclusions"]
                    ?>
                    </span>

                </div>
            </div>

            <div class="col s6">
                <div class="basic1">
                    <span style="color: rgb(133, 132, 132);">Exclusions</span>
                    <span><?=$table[0]["Exclusions"]?></span>
                </div>
            </div>
        </div>
        <?php
          foreach ($table as $itenary){
        ?>
        <div class="row">
            <div class="col s10">
                <div class="basic1">
                    <span style="font-size:1.1rem; color: rgb(133, 132, 132);">
                        <?= $itenary["day"]?> :
                        <?=$itenary["itenaryHeading"]?>
                    </span>
                        <p style="font-size: 1rem;">
                             <span style="font-size: .9rem; font-weight: bold">
                                Night Stay: <?=$itenary["distinationPoint"]?>
                            </span>
                            <span style="display: block; font-size: .9rem; color: rgb(133, 132, 132); margin: 5px 10px">
                                <?=$itenary["itenary"]?>
                            </span>
                            <span style="font-size: .9rem; font-weight: bold">
                                        Day Inclution:
                                        <?=($itenary["dinner"]=="true" ? "Dinner":"" )?>
                                        , <?=($itenary["breakfast"]=="true" ? "Breakfast":"" )?>
                            </span>
                        </p>

                </div>
            </div>
        </div>
        <?php
            }
        ?>
        </div>
 
<script>
function pageadjest(){
    $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
}
function getQuotefilledOne(self,id,c_q_id){
   
    let HTTP_HOST = document.getElementById("HTTP_HOST").value
    $.ajax({
        url: HTTP_HOST+"getfilledQuoteform/"+id+"/"+c_q_id,
        method: "GET",
        beforeSend: function() {
            loading()
        },
        complete:function () {
            loaded()
        }
    }).done(function (Response)
    {
        window.scrollTo(0,0);
        let parrent=$("#wrapit");
        $(parrent).prepend(Response);
        pageadjest();
        $('#wrapit').css("overflow","hidden");
        $('.give_quote').css("position", "relative");
       
        $('.give_quote').css("top", "0px");
        $('.give_quote').css("top", "100px");
        
    });
    $(document).on("click", ".close", function() {
        this.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        $('.page').height("unset");
        $('.page').css("overflow", "unset");
    });
}

function initQuoteForm() {
    var parent = document.getElementById("form-main")
    $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
    //here i am grabbing form as a parent
    $("#addDay").on("click", function() {
        $(parent).children().last().find(".clearday").remove();
        let lastdayid = $(".days").last().attr('id');
        lastdayid = lastdayid == undefined ? "0" : lastdayid;
        lastdayid = lastdayid.charAt(lastdayid.length - 1);
        lastdayid = parseInt(lastdayid) + 1
            //here i am creating parent div for new day to be added
        let Day = document.createElement('div');
        Day.id = 'Day-' + lastdayid;
        //adding styles to that div
        Day.classList.add('row')
        Day.classList.add('days')
        Day.classList.add('Day-' + lastdayid)
        Day.setAttribute("day", "Day-" + lastdayid);
        Day.style.width = '100%'
        Day.style.padding = '10px'

        //creating heading for new day

        let heading = document.createElement('h5')
        heading.style.margin = '5px'
        heading.innerText = "Day-" + lastdayid

        // creating first part first row

        Day.appendChild(heading)
        Day.innerHTML +=
            '<div style="margin: 6px" class="col md">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control  onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<input required="required" class="h2 gg-bound-control-input" id="destinationpointinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
            ' <div class="gg-bound-control-label">Destination Point</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col md">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<input required="required" class="h2 gg-bound-control-input" id="hotelnameinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
            ' <div class="gg-bound-control-label">Hotel Name</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col xsm">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class=" qff gg-bound-control-wrapper">' +
            '<select  id="roomtypecheckbox" name="RoomType">' +
            '<option value="0">Room Type</option>' +
            '<option value="1">Standard</option>' +
            '<option value="2">Deluxe</option>' +
            '<option value="3">Super Deluxe</option>' +
            '<option value="4">Luxurious</option>' +
            '</select>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col xsm">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class=" qff gg-bound-control-wrapper">' +
            '<select  id="hotelratingcheckbox" name="HotelRating">' +
            '<option value="0">Hotel rating</option>' +
            '<option value="1">1 Star</option>' +
            '<option value="2">2 Star</option>' +
            '<option value="3">3 Star</option>' +
            '<option value="4">4 Star</option>' +
            '<option value="5">5 Star</option>' +
            '</select>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px;" class="xsm col">\n' +
            '                                            <div class="contine">\n' +
            '                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add(\'active-gg-bound-control\')">\n' +
            '                                                    <div class="gg-bound-control-outer">\n' +
            '                                                        <div class="gg-bound-control-inner">\n' +
            '                                                            <div class="gg-bound-control-wrapper">\n' +
            '                                                                <div id="DayInclusions" onclick="checkList(this)" class="dropdown-check-list" tabindex="100">\n' +
            '                                                                    <span class="anchor">Inclusions</span>\n' +
            '                                                                    <ul id="dayInclusions" class="items">\n' +
            '                                                                        <li><input id="BreakfastChecked" name="BreakFast" type="checkbox" />Breakfast </li>\n' +
            '                                                                        <li><input id="DinnerChecked" name="Dinner" type="checkbox" />Dinner</li>\n' +
            '                                                                    </ul>\n' +
            '                                                                </div>\n' +
            '                                                            </div>\n' +
            '                                                            <div class="gg-bound-control-df-bottom-border"></div>\n' +
            '                                                            <div class="gg-bound-control-ef-bottom-border"></div>\n' +
            '                                                        </div>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>' +
            ' <div style="margin: 6px;" class="full col">\n' +
            '                                            <div class="contine">\n' +
            '                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add(\'active-gg-bound-control\')">\n' +
            '                                                    <div class="gg-bound-control-outer">\n' +
            '                                                        <div class="gg-bound-control-inner">\n' +
            '                                                            <div class="gg-bound-control-wrapper">\n' +
            '                                                                <input id="itenaryheading" required="required" class="h2 gg-bound-control-input"/>\n' +
            '                                                                <div class="gg-bound-control-label">Itenary Heading</div>\n' +
            '                                                            </div>\n' +
            '                                                            <div class="gg-bound-control-df-bottom-border"></div>\n' +
            '                                                            <div class="gg-bound-control-ef-bottom-border"></div>\n' +
            '                                                        </div>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>' +
            '<div style="margin: 6px" class="full col">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<textarea  required="required" id="itenarytextarea"  rows="1" onmousemove="pageadjest()" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>' +
            ' <div class="gg-bound-control-label">Itenary</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        parent.appendChild(Day);
        $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
        $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
        $('.page').css("overflow", "hidden");
    });
    $("textarea").each(function(index, element) {
        textAreaAdjust(element);
    })
    $(document).on("click", ".close", function() {
        this.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        $('.page').height("unset");
        $('.page').css("overflow", "unset");
    });

}
function clearDay(e) {
    var parent = document.getElementById("form-main")
    e.parentElement.remove();
    $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
    $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
    $('.page').css("overflow", "hidden");
}

function sendQuote() {
    let HTTP_HOST = $("#HTTP_HOST").val();
    let days = {}
    days.inclusions = $("#inclusionstextarea").val();
    days.exclusions = $("#exclusionstextarea").val();
    days.dateofjourney = $("#Dateofjourney").val()
    days.halfbooking = $("#halfprice").val()
    days.c_q_id = $('#c_q_id').val();
    days.flight = $('#flightinput').val();
    days.vehicleType = $('#cabinput').val();
    days.totalprice = $("#totalprice").val();
    let send = false;
    $(".days").each(function(index, day) {
            let destinationinpt = $(day).find("#destinationpointinput").val();
            let hotelname = $(day).find("#hotelnameinput").val();
            let hotelroomtypechecked = $(day).find("#roomtypecheckbox").val();
            let hotelratingchecked = $(day).find("#hotelratingcheckbox").val();
            let breakfastchecked = $(day).find("#BreakfastChecked").is(":checked");
            let Dinnerchecked = $(day).find("#DinnerChecked").is(":checked");
            let itenaryheading = $(day).find("#itenaryheading").val()
            let itenary = $(day).find("#itenarytextarea").val();

            data = {
                "day": $(day).attr("day"),
                "destinationPoint": destinationinpt,
                "hotelName": hotelname,
                "hotelRoomType": hotelroomtypechecked,
                "breakfast": breakfastchecked,
                "dinner": Dinnerchecked,
                "hotelRating": hotelratingchecked,
                "itenary": itenary,
                "itenaryheading": itenaryheading

            }
            days[$(day).attr("day")] = data;
            if (destinationinpt.length <= 0) {
                launch_toast("Destination is required", "close");
                $(day).find("#destinationpointinput").focus();
                send = false;
                return false;
            } else if (hotelname.length <= 0) {
                launch_toast("Hotelname is required", "close");
                $(day).find("#hotelnameinput").focus();
                send = false;
                return false;
            } else if (hotelratingchecked.length <= 0 || hotelratingchecked == 0) {
                launch_toast("Hotel Type is required", "close");
                $(day).find("#hotelratingcheckbox").focus();
                send = false;
                return false;
            } else if (hotelroomtypechecked.length <= 0 || hotelroomtypechecked == 0) {
                launch_toast("Room Type is required", "close");
                $(day).find("#roomtypecheckbox").focus();
                send = false;
                return false;
            }
            // else if ((Dinnerchecked.length <= 0 || Dinnerchecked == 0) ||(breakfastchecked.length <= 0 || breakfastchecked == 0) ) {
            //     launch_toast("Atleast one item in itenary should be checked", "close");
            //     $(day).find("#daysInclusion").focus();
            //     send = false;
            //     return false;
            // }
            else if (days.inclusions.length <= 0) {
                launch_toast("inclusions is required", "close");
                $(day).find("#inclusionstextarea").focus();
                send = false;
                return false;
            } else if (days.exclusions.length <= 0) {
                launch_toast("exlusions is required", "close");
                $(day).find("#exclusionstextarea").focus();
                send = false;
                return false;
            } else if (itenary.length <= 0) {
                launch_toast("itenary is required", "close");
                $(day).find("#itenarytextarea").focus();
                send = false;
                return false;
            } else if (itenaryheading.length <= 0) {
                launch_toast("itenaryheading is required", "close");
                $(day).find("#itenaryheading").focus();
                send = false;
                return false;
            } else if (days.flight.length <= 0) {
                launch_toast("flight is required", "close");
                $('#flightinput').focus();
                send = false;
                return false;
            } else if (days.vehicleType.length <= 0) {
                launch_toast("vehicleType is required", "close");
                $('#cabinput').focus();
                send = false;
                return false;
            } else if (days.totalprice.length <= 0) {
                launch_toast("Total Quotation Price is required", "close");
                $("#totalprice").focus();
                send = false;
                return false;
            } else if (days.halfbooking.length <= 0) {
                launch_toast("Advanced Quotation Price is required", "close");
                $("#halfprice").focus();
                send = false;
                return false;
            } else if (days.dateofjourney.length <= 0) {
                launch_toast("Date Of Journey is required", "close");
                $("#halfprice").focus();
                send = false;
                return false;
            } else {
                send = true;
            }

        })
        // console.log(days)
    if (send) {
        sendQuoteFormData(HTTP_HOST + "giveQuotation", days)
            .done(function(Response, textStatus) {
                console.log(Response);
                //if (Response.Success == true) {
                if (true) {
                    launch_toast(Response.Message, 'check');
                    // getFilteredQuote();
                    let PDF = Response.PDF;
                    let NAME = Response.NAME;
                    let url = "https://wa.me/" + Response.Phone + "?text=Dear " + NAME + ", Please check the quote and let us know if any changes required. Link - " + HTTP_HOST + "app/PDF/" + PDF + " Thanks";

                    window.open(url, "blank")
                } else {
                    launch_toast(Response.Message, 'close');
                }
            })
            .fail(function(jqXHR, textStatus) {
                alert(jqXHR.responseText);
            });
    }
}

function sendQuoteFormData($url, $data = {}) {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    });
}
</script> 