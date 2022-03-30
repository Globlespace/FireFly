<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .se-pre-con {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            z-index: 1000000;
            margin-left: auto;
            background: url(<?= IMAGES?>Preloader_3.gif) center no-repeat  rgba(0,0,0,0.5);

        }
        .collapsible li.disabled .collapsible-body {
            display: none !important; /*or using id of the app to avoid the use of !important*/

        }
        #confirm-box {
            width: 700px !important;
            left: 35% !important;
            top: 32% !important;
            min-height: 500px !important;
        }
        
        .collapsible li.disabled img {
            content:url("<?= IMAGES ?>cross.png")!important;
            transform: rotate(45deg);
        }
        .nav-second{
            display: flex;
            justify-content: space-around;
            background: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= STYLE ?>style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
<div class="se-pre-con"></div>

<input type="hidden" id="HTTP_HOST" value="<?= HTTP_HOST ?>">
<div class="wrapper">
    <nav class="navbar">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Fire Fly</a>
            <ul style="margin-left: 400px;" id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <div style="padding-top: 12px" class="row wrap">
                        <form class="col s12">
                            <div class="row">
                                <div class="search col s12">
                                    <div>
                                        <input type="text" class="searchTerm" placeholder="What are you looking for?">
                                        <i class="material-icons">search</i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?= ICONS ?>icons.svg#QuestionIcon-usage"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?= ICONS ?>icons.svg#AccountsIcon-usage"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?= ICONS ?>icons.svg#StatisticsIcon-usage"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?= ICONS ?>icons.svg#CalendarWhiteIcon-usage"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="circle dimcolor" href="#">
                        <svg viewBox="0 0 28 23" id="RapidFireIcon">
                            <use href="<?= ICONS ?>icons.svg#NotificationWhiteIcon-usage"/>
                        </svg>
                    </a>
                </li>
                &nbsp;
                <li>
                    <a style="display: flex; justify-content: center; align-items: center;" class="dropdown-trigger"
                       href="#!" data-target="dropdown1">
                        <img style=" width: 25px; height: 25px;  margin-right: 10px; border-radius: 50%!important; "
                             alt="25398730_1970901499792686_5269957657050947601_n"
                             class="circle responsive-img"
                             src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100">
                        <!-- notice the "circle" class -->
                        Fly Paradise to...
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    <input type="hidden" class="tripid" value="<?=$id?>">
    <?php
    use app\Model\customer_querie;
    use app\Model\give_quotation;
    $cs = new customer_querie();

    $cs->getData($id);
    if($cs->next())
    {
        if($cs->status==0){
            ?>
            <div style="height: 80vh; color: #3d4040;" class="col s9">
                <div style="display: flex; height: 100%; align-items: center; justify-content: center">
                    <div style="font-size: 6rem">🤦‍♂️</div>
                    <div style="">&nbsp;
                        <h3>Opps :(</h3>
                        <p>Trip Id is Discarde by Admin! <a href="<?=HTTP_HOST?>">click here</a></p>
                    </div>
                </div>
            </div>
            <?php
        }else{
        ?>

        <nav class="nav-second">
            <a href="#" style=" width: 160px; font-size: 2rem; padding:0 10px; color: #fff; background-color: #2a92bd;">Converted</a>
            <ul id="nav-mobile" style="" class="center hide-on-med-and-down">
                <li><a style="color: #2a92bd;" href="badges.html">Trip id <?= $id ?></a></li>
                <li><a style="color: #2a92bd;" href="sass.html">Quote seen over 2 years ago</a></li>
                <li><a style="color: #2a92bd;" href="collapsible.html">Last followed one day ago</a></li>
            </ul>
        </nav>
        <div class="travellerwrapper">
            <div style="width: 27%">
                <ul class="collapsible ">
                    <li class="">
                        <div style="text-align: center;color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            TRAVELLER DETAILS
                        </div>
                        <div class="collapsible-body">

                            <div class="row">
                                <div class="col s6">
                                    <img style="width: 35px; vertical-align: middle;"
                                         alt="25398730_1970901499792686_5269957657050947601_n" class="circle responsive-img"
                                         src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100">
                                    &nbsp;
                                    <span style="vertical-align: middle; font-size: 16px; letter-spacing: .5px;"><?= $cs->customerName; ?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <i style="vertical-align: middle;" class="material-icons">phone</i>
                                    &nbsp; &nbsp;
                                    <span style="vertical-align: middle;"><?= $cs->contact_number; ?></span>
                                </div>
                            </div>
                            <div style="border:1px solid #ccc;" class="row">
                                <div class="col s6">
                                    <span style="vertical-align: middle; color: #ccc;">userquoteseen@gmail.com</span>
                                </div>
                                <div style="border-left:1px solid #ccc; text-align:  center; position: relative;"
                                     class="col s3">
                                    <a onmouseover="removeicon()" onmouseout="addicon()" class="atag" href=""><i
                                                style="vertical-align: middle;" class="material-icons">message</i></a>
                                </div>
                                <div style="border-left:1px solid #ccc; text-align: center;" class="col s3">
                                    <a href=""><i style="vertical-align: middle;" class="material-icons">message</i></a>
                                </div>
                            </div>
                            <div style="border: 1px solid #ccc;  padding-left: 5px; padding-top: 15px;" class="row">
                                <div class="passdetailsmain">
                                    <div class="name">
                                        <span style="font-size:14px; color:#000"><?= $cs->customerName; ?></span>
                                        <a style="float: right; margin-right: 5px; font-size: 12px; font-weight: bold;"
                                           href="">View Details</a>
                                    </div>
                                    <br>
                                    <small style="color: #ccc; font-style: italic;">Passport uploaded</small>
                                    <small style="color: #ccc; font-style: italic;">PAN uploaded</small>

                                </div>
                            </div>
                            <div style="border: 1px solid #ccc;  padding-left: 5px; padding-top: 15px;" class="row">
                                <div class="passdetailsmain">
                                    <div class="name">
                                        <span style="font-size:14px; color:#000"><?= $cs->customerName; ?></span>
                                        <a style="float: right; margin-right: 5px; font-size: 12px; font-weight: bold;"
                                           href="">View Details</a>
                                    </div>
                                    <br>
                                    <small style="color: #ccc; font-style: italic;">Passport uploaded</small>
                                    <small style="color: #ccc; font-style: italic;">PAN uploaded</small>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="position: relative">
                        <div style=" color: #3d3c3c;;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>minus.png">
                            LEAD PROGRESS
                            <a class="removelead" style="margin-left: 60px; font-size: .8rem;" href="">REMOVE LEAD</a></div>
                        <div class="customdrp hide">
                            <ul>
                                <li onclick="removeLead(this)" class="confirm2">Tried enough, but not responding</li>
                                <li onclick="removeLead(this)" class="confirm2">Booked with someone else</li>
                                <li onclick="removeLead(this)" class="confirm2">Trip Cancelled</li>
                            </ul>
                        </div>
                        <div class="collapsible-body">
                            <div class="panelLeftC panelbt" style="display: block;" id="leadJourneyContainer"
                                 contentindex="1c">
                                <link href="https://assets.traveltriangle.com//assets/gamification/style-b50faafacf68f406dbbf3b1aa191f137.css"
                                      media="screen" rel="stylesheet" type="text/css">
                                <div class="pl15 pr15">
                                    <div class="p15 leadStatgeHead">
                                        <p class="f12 m0 mb15">Simpler way to keep a track by adding relevant notes. </p>
                                        <div class="flex alignCenter">
                                            <p class="f10 m0 fw7">Ph. No.: <?= $cs->contact_number; ?></p>
                                        </div>
                                    </div>
                                    <!--Timeline starts here -->
                                    <div class="leadTimelineContainer relative pt15">
                                        <!--Quote Creation starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 class="m0 flexFull leadTimelineCardHeading">Quoting</h5>
                                                <span class="flex icon16 block ml5 cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="create-quote-stage">
                                                    <div class="flex spaceBetween mb8">
                                                        <span class="flex icon10 block iconBG tickGreenIcon"></span>
                                                        <p style="color: #2a92bd;" class="m0 f10 pfc1 flexFull ml8">Lead
                                                            Received</p>
                                                        <p style="color: #2a92bd;"
                                                           class="m0 f10 pfc4 flexFull text-right noWrap">
                                                            on <?= $cs->added_on; ?></p>
                                                    </div>
                                                    <div>
                                                        <div class="relative">
                                                            <div class="flex alignCenter mb15">
                                                                <span class="flex icon10 block iconBG tickGreenIcon"></span>
                                                                <p style="color: #2a92bd;" class="m0 f10 pfc1 ml8">Phone
                                                                    Number Unlocked</p>
                                                                <p style="color: #2a92bd;"
                                                                   class="m0 f10 pfc4 flexFull text-right noWrap">
                                                                    on <?= $cs->added_on; ?></p>
                                                            </div>
                                                            <button style="padding: 0px !important; border: 1px solid #2a92bd; color: #2a92bd;"
                                                                    class="btnSecondaryMain mt8"><?= $cs->contact_number; ?></button>
                                                        </div>
                                                    </div>

                                                    <div class="leadStageTip flex alignCenter mt15">
                                                        <span class="flex icon16 iconBG tipIcon block"></span>
                                                        <p class="f10 m0 ml4 pfc4">Tip: Use best matching quote to send
                                                            quickly</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Quote Creation ends-->
                                        <!--Contacting Traveler starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 class="m0 flexFull leadTimelineCardHeading">Contacting</h5>
                                                <span class="flex icon16 block cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="contact-traveller-stage">
                                                    <div class="flex alignCenter mb15">
                                                        <span class="flex icon10 block iconBG tickGreenIcon"></span>
                                                        <p style="color: #2a92bd;"
                                                           class="m0 f10 pfc1 ml8"><?= $cs->contact_number; ?></p>
                                                        <!-- <a href="" class="confirm defaultLink m0 ml8 pfc2 f12 fw7 cursorP fitalic text-right add-notepp gatracking seg-tracked" data-event="click" data-verb="Agent Clicked" data-galocal-section="Lead Stage" data-galocal-value="1" data-galocal-object="Contacting" data-galocal-cta="Report if incorrect" data-galocal-action="Report if incorrect" data-galocal-tripid="5058547" data-galocal-impersonatersuserid="" data-galocal-impersonatestatus="false" data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000" id="number-not-working" data-trip-id="5058547" data-quote-id="9048137" data-agent-status="4.1" data-latest-quote="9048137">
                                                          Report if incorrect
                                                        </a> -->
                                                        <span onclick="openmodal(this)"
                                                              class="  defaultLink m0 ml8 pfc2 f12 fw7 cursorP fitalic text-right add-notepp gatracking seg-tracked">Report if incorrect
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <div class="flex flexDColumn">
                                                            <a id="call-not-picked"
                                                               class="leadStagesAction p8 mb8 iblock f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                               data-event="click" data-verb="Agent Clicked"
                                                               data-galocal-section="Lead Stage" data-galocal-value="1"
                                                               data-galocal-object="Contacting"
                                                               data-galocal-cta="Send Whatsapp/SMS to customer"
                                                               data-galocal-action="Send Whatsapp/SMS to customer"
                                                               data-galocal-tripid="5058547"
                                                               data-galocal-impersonatersuserid=""
                                                               data-galocal-impersonatestatus="false"
                                                               data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                               data-trip-id="5058547" data-quote-id="9048137"
                                                               data-agent-status="4.1" data-latest-quote="9048137">
                                        <span class="flex">
                                          <span class="flex icon20 block iconBG cnpIcon"></span>
                                          <span class="flexFull ml8">
                                            <span class="block f12 m0 pfc3">Call not picked?</span>
                                            <span onclick="openmodal(this)"
                                                  class="block pfc2 f12 fw7 leadStagesAction__link ">Mark unable to reach customer</span>
                                          </span>
                                        </span>
                                                            </a>
                                                        </div>
                                                        <a onclick="sendQuoteWhatsappRedirect()"
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Finalizing"
                                                           data-galocal-cta="Send Whatsapp confirmation"
                                                           data-galocal-action="Send Whatsapp confirmation"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000">
                                                            <span class="flex icon20 block iconBG whatsAppIcon"></span>
                                                            <span class="flexFull ml8">
                                        <span class="block f12 m0 pfc3">Share quote on Whatsapp?</span>
                                        <span class="block pfc2 f12 fw7 leadStagesAction__link">Click here to send</span>
                                      </span>
                                                        </a>
                                                        <a class="leadStagesAction p8 mb8 flex f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Contacting"
                                                           data-galocal-cta="Resend quote and set reminder"
                                                           data-galocal-action="Resend quote and set reminder"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="quote-not-seen" data-trip-id="5058547"
                                                           data-quote-id="9048137" data-agent-status="4.1"
                                                           data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG quoteNotSeenIcon"></span>
                                                            <span class="flexFull ml8">
                                        <span class="block f12 m0 pfc3">Quote not seen?</span>
                                        <span onclick="openmodal(this)" class="block pfc2 fw7 leadStagesAction__link ">Resend quote &amp; set a reminder</span>
                                      </span>
                                                        </a>
                                                        <a class="leadStagesAction p8 mb8 flex f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Contacting"
                                                           data-galocal-cta="Set reminder for when to call next"
                                                           data-galocal-action="Set reminder for when to call next"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="book-later" data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG bookWaitingIcon"></span>
                                                            <span class="flexFull ml8">
                                        <span class="block f12 m0 pfc3">Talk in progress?</span>
                                        <span onclick="openmodal(this)" class="block pfc2 fw7 leadStagesAction__link ">Set reminder for when to call next</span>
                                      </span>
                                                        </a>
                                                    </div>
                                                    <div class="leadStageTip flex alignCenter mt15">
                                                        <span class="flex icon16 iconBG tipIcon block"></span>
                                                        <p class="f10 m0 ml4 pfc4">Tip: Ask for best time to contact on
                                                            Whatsapp</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Contacting Traveler ends-->
                                        <!--Mark unable to reach customer starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 class="m0 flexFull leadTimelineCardHeading">Customizing</h5>
                                                <span class="flex icon16 block cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="customize-quote-stage">
                                                    <div>
                                                        <div class="flex mb15">
                                                            <div class="flexFull ml15">
                                                            </div>
                                                        </div>
                                                        <a onclick="sendQuoteWhatsappRedirect()"
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Customizing"
                                                           data-galocal-cta="Send Whatsapp confirmation"
                                                           data-galocal-action="Send Whatsapp confirmation"
                                                           data-galocal-tripid="5058547">
                                                            <span class="flex icon20 block iconBG whatsAppIcon"></span>
                                                            <span class="flexFull ml8">
                                        <span class="block f12 m0 pfc3">Already customised?</span>
                                        <span class="block pfc2 f12 fw7 leadStagesAction__link">Send WhatsApp confirmation</span>
                                      </span>
                                                        </a>
                                                        <a
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking add-notepp seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Customizing"
                                                           data-galocal-cta="Set reminder for when to call next"
                                                           data-galocal-action="Set reminder for when to call next"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="book-later" data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG bookWaitingIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Talk in progress?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Set reminder for when to call next</span>
                                                          </span>
                                                        </a>
                                                        <a id="call-not-picked"
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking add-notepp seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Customizing"
                                                           data-galocal-cta="Send Whatsapp/SMS to customer"
                                                           data-galocal-action="Send Whatsapp/SMS to customer"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG cnpIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Call not picked?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Mark unable to reach customer</span>
                                                          </span>
                                                        </a>
                                                        <a class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking add-notepp seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Customizing"
                                                           data-galocal-cta="Mark as My Priority"
                                                           data-galocal-action="Mark as My Priority"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="mark-priority" data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG thumbUpIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Booking Soon?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Mark as my priority</span>
                                                          </span>
                                                        </a>
                                                    </div>
                                                    <div class="leadStageTip flex alignCenter mt15">
                                                        <span class="flex icon16 iconBG tipIcon block"></span>
                                                        <p class="f10 m0 ml4 pfc4">Tip: Check with TT for better prices from
                                                            TTSN</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Customizing ends-->
                                        <!--Finalizing starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 class="m0 flexFull leadTimelineCardHeading">Finalizing</h5>
                                                <span class="flex icon16 block cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="finalize-stage">
                                                    <div>
                                                        <a onclick="sendQuoteWhatsappRedirect()"
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Finalizing"
                                                           data-galocal-cta="Send Whatsapp confirmation"
                                                           data-galocal-action="Send Whatsapp confirmation"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000">
                                                            <span class="flex icon20 block iconBG whatsAppIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Already customised?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Send WhatsApp confirmation</span>
                                                          </span>
                                                        </a>
                                                        <a id="call-not-picked"
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Finalizing"
                                                           data-galocal-cta="Report if incorrect"
                                                           data-galocal-action="Report if incorrect"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG cnpIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Call not picked?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Mark unable to reach customer</span>
                                                          </span>
                                                        </a>
                                                        <a
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Finalizing"
                                                           data-galocal-cta="Traveler going to pay soon"
                                                           data-galocal-action="Traveler going to pay soon"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="traveler-pay-you" data-trip-id="5058547"
                                                           data-quote-id="9048137" data-agent-status="4.1"
                                                           data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG moneyIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Traveler going to pay soon?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Set reminder for when to follow up next</span>
                                                          </span>
                                                        </a>
                                                        <a
                                                           class="leadStagesAction p8 mb8 flex f12 cursorP fitalic add-notepp gatracking seg-tracked"
                                                           data-event="click" data-verb="Agent Clicked"
                                                           data-galocal-section="Lead Stage" data-galocal-value="1"
                                                           data-galocal-object="Finalizing"
                                                           data-galocal-cta="Booked with someone else"
                                                           data-galocal-action="Booked with someone else"
                                                           data-galocal-tripid="5058547" data-galocal-impersonatersuserid=""
                                                           data-galocal-impersonatestatus="false"
                                                           data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                           id="remove-lead" data-trip-id="5058547" data-quote-id="9048137"
                                                           data-agent-status="4.1" data-latest-quote="9048137">
                                                            <span class="flex icon20 block iconBG thumbDownIcon"></span>
                                                            <span class="flexFull ml8">
                                                            <span class="block f12 m0 pfc3">Booked with someone else?</span>
                                                            <span onclick="openmodal(this)" class="block pfc2 f12 fw7 leadStagesAction__link">Remove Lead</span>
                                                          </span>
                                                        </a>
                                                    </div>
                                                    <div class="leadStageTip flex alignCenter mt15">
                                                        <span class="flex icon16 iconBG tipIcon block"></span>
                                                        <p class="f10 m0 ml4 pfc4">Tip: Call TT to check discounts</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Finalizing ends-->
                                        <!--Converted starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 class="m0 flexFull leadTimelineCardHeading">Converted</h5>
                                                <span class="flex icon16 block cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="converted-stage">
                                                    <div class="flex alignCenter mb8">
                                                        <span class="flex icon10 block iconBG tickGreenIcon"></span>
                                                        <div class="ml8">
                                                            <p style="color: #2a92bd;" class="m0 f10 pfc1">Payment
                                                                Confirmed</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex alignCenter mb8">
                                                        <span class="flex icon10 block"></span>
                                                        <div class="ml8">
                                                            <p class="f10 m0" style="line-height: 16px;">Congratulations! We
                                                                have received the payment from the traveler. We trust you
                                                                with providing the best service.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Converted ends-->
                                        <!--Trip Completed starts-->
                                        <div class="leadTimelineCard leadTimelineCardActive currentStage">
                                            <div class="mb15 flex alignCenter leadTimelineCardHead">
                                                <h5 style="color: #2a92bd;" class="m0 flexFull leadTimelineCardHeading">Trip
                                                    Completed</h5>
                                                <span class="flex icon16 block cardTrigger"></span>
                                            </div>
                                            <div class="leadTimelineCardContent">
                                                <div id="trip-completed">
                                                    <div class="flex alignCenter mb8">
                                                        <p class="f10 m0" style="line-height: 16px;">This allows you to
                                                            request change in the existing review.</p>
                                                    </div>
                                                    <button style="padding: 0px !important; border: 0px !important; background-color: #2a92bd;"
                                                            class="btnPrimaryMain ripple gatracking seg-tracked"
                                                            id="tripRequestChange" data-event="click"
                                                            data-verb="Agent Clicked" data-galocal-section="Lead stage"
                                                            data-galocal-value="1" data-galocal-object="Trip completed"
                                                            data-galocal-cta="Request Change"
                                                            data-galocal-action="Request Change"
                                                            data-galocal-tripid="5058547"
                                                            data-galocal-impersonatersuserid=""
                                                            data-galocal-impersonatestatus="false"
                                                            data-galocal-eventtimestamp="2021-11-23 13:38:25 +0000"
                                                            data-trip-id="5058547" data-quote-id="9048137"
                                                            data-galocal-spocuserid="">
                                                        Request Change
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Trip Completed ends-->
                                    </div>
                                    <!--Timeline ends here -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div style="color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            NOTES
                        </div>
                        <div class="collapsible-body ">
                            <div class="noteFilter pl8 pr8">
                                <input type="checkbox" id="myNotes" value="note_added_by_agent" checked="true"
                                       class="checkbox-common">
                                <label for="myNotes" class="noteFilterLabel">My Notes</label>
                                <input type="checkbox" id="ttAdmin" value="note_added_by_admin" checked="true"
                                       class="checkbox-common">
                                <label for="ttAdmin" class="noteFilterLabel">TT Admin</label>
                                <input type="checkbox" id="system" value="note_added_by_system" checked="true"
                                       class="checkbox-common">
                                <label for="system" class="noteFilterLabel">System</label>
                            </div>
                            <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                 style="position:relative; top:0; left:0;" dir="ltr">
                                <div id="notes_content_5058547">

                                    <!-- <script>
                                    $("document").ready(function(e) {
                                        $("#subject_5058547_1").on('click', function(){
                                          $("body, html").addClass("overflow-hidden");
                                          $("#image_popup_5058547_1").fadeIn();
                                          _gaq.push(['_trackEvent','Add note V2','Subject_Mail_Click ',$(this).text()]);
                                        });
                                        $("#image_popup_5058547_1").on('click', function(){
                                          $("body, html").removeClass("overflow-hidden");
                                          $(this).fadeOut();
                                        });
                                    });

                                    </script> -->
                                    <?php
                                        $note=new \app\Model\note();
                                        $note->getdes("tripid",$id);
                                        while ($note->next()){
                                           ?>
                                            <div class="notebox note_added_by_agent">
                                        <div class="flex alignCenter mb8">

                                            <span class="f10 text-right flexfull" style="color:#9f9f9f"><?=$note->added_on?></span>
                                        </div>
                                        <!-- <div class="blog-dp">
                                          <span class="dp"><img alt="25398730_1970901499792686_5269957657050947601_n" class="full-round" src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100" /></span>
                                        </div> -->
                                        <div class="post-list-text pb8">
                                            <div class="noteMessage">
                                                <p class="post-heading  f12">
                                                    <?=$note->stage?>
                                                </p>
                                            </div>
                                            <div class="noteMessage">
                                                <p class=" post-text-new pfc3 f12 m0">
                                                    <?=$note->type?>
                                                </p>
                                            </div>
                                            <!-- <a id = "subject__"><p class = "cursor-pointer-subject"><span>View sample mail sent to traveler</span></p></a>
                                            <div class="js_image_popup_count image_popup_count" id = "image_popup__" style="display: none;">
                                            <div class="image_popup_count_main"><img src='' /></div> </div> -->
                                        </div>
                                        <!-- <div class="col-3 blog-dp">
                                           <span class="dp">&nbsp;</span>
                                         </div> --> <!--col-->
                                        <div class="post-list-text"
                                             style="padding-left: 0;padding-right: 0;padding-bottom: 0;">
                                            <div class="post-text-new noteMessage">
                                                <p>
                                                    <?=$note->info?>
                                                </p>
                                            </div>
                                            <h5 class="flex alignCenter">

                                            </h5>
                                        </div>
                                        <span class="notesImageCorner">
                                            <img src="https://img.traveltriangle.com//assets/new_ui_images/agents/NotesImageCorner-4ef6dceec009b306825e851d0bad54c1.png">
                                        </span>
                                    </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="width: 72%" >
                <ul  class="collapsible collapsibletwo">
                    <li class="<?=in_array($cs->status,array(1,2,3,4))?"":"disable"?>">
                        <div style="color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            TRAVELLER REQUIREMENTS
                        </div>
                        <div class="collapsible-body">
                            <div class="my-row">
                                <div class="col columnalign">
                                <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Customer Name</span>
                                        <span style="font-size: 12px; text-transform:uppercase"><b><?= $cs->customerName ?></b> </span>
                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Duration</span>
                                        <span style="font-size: 12px;"><?= $cs->duration ?> Day</span>
                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Destination</span>
                                        <span style="font-size: 12px;"><?= $cs->destination ?></span>

                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">I will book in</span>
                                        <span style="font-size: 12px;"><?= $cs->i_will_book_in ?></span>

                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">No of Travellers</span>
                                        <span style="font-size: 14px;"><?= $cs->adults ?> adults</span>
                                        <span style="font-size: 14px;"><?= $cs->children ?> children</span>
                                        <span style="font-size: 14px;"><?= $cs->infants ?> infants</span>
                                    </div>
                                </div>
                                <div class="col columnalign">
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Phone Number</span>
                                        <span style="font-size: 12px;"><?= $cs->contact_number ?></span>
                                    </div>

                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Type of Package</span>
                                        <span style="font-size: 12px;"><?= $cs->type_of_package ?></span>
                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: #ccc;">From</span>
                                        <span style="font-size: 14px;color:#000;">Bengaluru,Karnataka 5600001,India</span>
                                    </div>
                                </div>
                                <div class="col columnalign">
                                    <div class="columnalign">
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Trip Stage</span>
                                            <span style="font-size: 12px;">12 Days and 12 Nights</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="my-row">
                                <div class="col offset-s1">
                                    <i style="vertical-align: middle;" class="material-icons">book</i>
                                    <b style="vertical-align: middle;"> Looking for</b>
                                </div>
                            </div>
                            <div class="my-row">
                                <div class="col columnalign">
                                    <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Hotel Category</span>
                                            <span style="font-size: 12px;"><?= $cs->hotel_category ?></span>
                                    </div>
                                </div>
                                <div class="col columnalign">
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Need flight/train</span>
                                        <span style="font-size: 12px;"><?= $cs->flight ?></span>
                                    </div>
                                    <div class="one">
                                        <span style="font-size: 14px; color: rgb(133, 130, 130);">Cab for local sight seeing</span>
                                        <span style="font-size: 12px;"><?= $cs->cab ?></span>

                                    </div>
                                </div>
                                <div class="col columnalign">
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Driver Speaks</span>
                                            <span style="font-size: 12px;"><?= $cs->driver_language ?></span>
                                        </div>
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Type of tour you want</span>
                                            <span style="font-size: 12px;"><?= $cs->tour_type ?></span>
                                        </div>
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Choose Starting point</span>
                                            <span style="font-size: 12px;">12 Days and 12 Nights</span>

                                        </div>
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Last drop point</span>
                                            <span style="font-size: 12px;">12 Days and 12 Nights</span>

                                        </div>
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Maximum Budget</span>
                                            <span style="font-size: 12px;">12 Days and 12 Nights</span>

                                        </div>
                                        <div class="one">
                                            <span style="font-size: 14px; color: rgb(133, 130, 130);">Minimum Budget</span>
                                            <span style="font-size: 12px;">12 Days and 12 Nights</span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?=in_array($cs->status,array(2,3,4))?"":"disabled"?>">
                        <div style=" color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            Quotation
                        </div>
                        <div class="collapsible-body">
                            <div style="border-bottom:2px solid #2a92bd" class="row">
                            <?php
                                $gq=new give_quotation();
                                $query="SELECT * FROM `give_quotations` where `c_q_id`=$id ORDER by added_on DESC;";
                                $gq->query($query);
                                while ( $gq->next()){

                            ?>
                                <div class="col">
                                    <div  onclick="getquoteComponent(this,<?=$gq->id?>)" class="quote-head" id="quotebox"
                                         style="display:flex;
                                         flex-direction: column;
                                          padding: 10px;
                                          width: 180px;
                                          cursor:pointer;
                                          font-size: 1rem!important;
                                          ">
                                        <span style="font-weight: bold;">Rs <?=$gq->quotationPrice?> <span>Total </span></span>
                                        <span style="color: #c2c2af; font-size: .75rem">
                                            Updated <?=$gq->added_on?>
                                            <span style="color: #2a92bd; font-style: italic;">
                                                Converted
                                            </span>
                                        </span>
                                    </div>
                                </div>

                            <?php

                                }
                            ?>
                            </div>
                            <div id="getquotationonid">

                            </div>
                        </div>
                    </li>
                    <li class="<?=in_array($cs->status,array(2,3,4))?"":"disabled"?>">
                        <div style=" color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            Vouchers and Payments
                        </div>
                        <div class="collapsible-body">
                            <div class="row">
                                <div class="col">
                                    <i style="vertical-align: middle;" class="material-icons">compare</i>
                                    <b style="vertical-align: middle;">Payment Details</b>
                                </div>
                            </div>

                            <div class="row">

                                <div class="paymentmaindiv">
                                    <div class="paymentonediv">
                                        <div class="pendingdiv">
                                            <div class="pendingdiv1">
                                                <span style="font-size: 14px; font-weight: 600; color: #3d3c3c;">Pending Receivable</span>
                                                <span style="color: #2a92bd; font-size: 26px;">8,500</span>
                                            </div>
                                            <div class="pendingdiv2">
                                                <span style="font-size: 14px; font-weight: 600; color: #3d3c3c;">Total Received Till Date</span>
                                                <span style="color: #2a92bd; font-size: 26px;">8,500</span>

                                            </div>
                                        </div>

                                        <div class="receiveddiv">
                                            <div class="receiveddiv1">
                                                <span style="font-size: 14px; font-weight: 600; color: #3d3c3c;">Paid by Traveller</span>
                                                <span style="color: #2a92bd; font-size: 26px;">8,500</span>

                                            </div>
                                            <div class="receiveddiv1">
                                                <span style="font-size: 14px; font-weight: 600; color: #3d3c3c;">Ready For Transfer</span>
                                                <span style="color: #2a92bd; font-size: 26px;">8,500</span>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="paymenttwodiv">
                                        <div class="firsthalf"></div>
                                        <div class="secondhalf">
                                            <div class="voucherdiv">
                                                <span style="font-size: 14px; font-weight: 800;">Vouchers | <span
                                                            style="color: #2a92bd; cursor: pointer;">Upload</span></span>
                                                <span style="color: #ccc; font-size: 12px;">Due Date 2019-20-20</span>
                                            </div>
                                            <div class="paymentproofdiv">
                                                <span style="font-size: 14px; font-weight: 800;">Payment Proof | <span
                                                            style="color: #2a92bd; cursor: pointer;">Upload</span></span>
                                                <span style="color: #ccc; font-size: 12px;">Due Date 2019-20-20</span>
                                            </div>
                                        </div>
                                        <div class="thirdhalf">
                                            <div class="firsttab">
                                                <div class="">Flights</div>
                                                <div class="">Hotels</div>
                                                <div class="">Others</div>
                                            </div>
                                            <div class="firsttab">
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio"/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio"/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio" checked/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="firsttab">
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio"/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio"/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                                <div class="">
                                                    <form action="#">
                                                        <p>
                                                            <label>
                                                                <input name="group1" type="radio"/>
                                                                <span style="color: #fff;">.</span>
                                                            </label>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="showmain">
                                <a style="margin: auto; margin-left: -1px; font-weight: 800;" href="">View Invoice</a>
                                <div class="">
                                    <span style="margin-top: 5px; font-size: 12px; padding-left: 3px;" class="showdetails">Show Details  </span>
                                    <i style=" padding-top:5px; padding-left: 2px; cursor: pointer;"
                                       class="tiny  material-icons ">arrow_drop_down</i>

                                </div>
                            </div>
                            <div id="paymentdetaildiv" style="display: none;" class="row">
                                <div class="col s4">
                                    <div style="display: flex; flex-direction: column;" class="">
                                        <div style="font-size: 14px; font-weight: bolder;" class="">
                                            Traveller Net Payable
                                            <img class="plus" src="<?=IMAGES?>plus.png">
                                        </div>
                                        <div style="font-size: 20px; font-weight: bolder; color: #2a92bd;" class="">
                                            17,500.00
                                        </div>

                                        <div style="background-color: #EFEFEF; display: flex; justify-content: space-evenly; flex-direction: row; width: 230px; text-align: center; height: 40px; padding: 14px; font-size: 10px; color: #2a92bd;"
                                             class="">
                                            <span style="cursor: pointer;">Copy Upcoming Link Payment</span>
                                            <i class="material-icons tiny">add</i>
                                        </div>
                                        <div style="font-size: 12px;margin-top: 10px; color: #333333; font-weight: 600;"
                                             class="">
                                            Traveller Installments
                                        </div>
                                        <div style="margin-top: 10px; color: #333333; font-weight: 600; font-size: 12px;"
                                             class="">
                                            500.00(CFEE)
                                        </div>
                                        <div class="">
                                            <span style="color: #2a92bd; font-style: italic;">Transferred to TT <span
                                                        style="color: #000;">on 17 Jun 2019</span></span>
                                        </div>
                                        <div style="font-weight: bold; color: #333333;" class="">
                                            8000
                                        </div>
                                        <div class="">
                                            <span style="color: #2a92bd; font-style: italic;">Transferred to TT <span
                                                        style="color: #000;">on 17 Jun 2019</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div style="display: flex; background-color: #F6F6F6; flex-direction: column; "
                                         class="">
                                        <div style="color: #333333; font-size: 14px; background-color: #fff; font-weight: 700;"
                                             class="">
                                            Invoiced Amount
                                        </div>
                                        <div style="display: flex; flex-direction: row;  width: 100%; " class="">
                                            <div style=" display: flex; flex-grow: 2; flex-direction: column;" class="">
                                                <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                    Inventory
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    Land Packages
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    Land Packages
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    Land Packages
                                                </div>


                                            </div>
                                            <div style="   flex: 1; float: right; display: flex; flex-direction: column; justify-content: right !important;;"
                                                 class="">
                                                <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                    Amount
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    17,500
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    0.00
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    0.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 100%; height: 30px; padding: 5px; display: flex; flex-direction: row; justify-content: space-between; background-color: #2a92bd; color: #fff;"
                                         class="">
                                        <div class="">Invoiced Amount</div>
                                        <div class="">17,500</div>
                                    </div>
                                    <div style="color: #333333; padding: 10px; font-size: 14px; background-color: #fff; font-weight: 700;"
                                         class="">
                                        Trip deductions
                                    </div>
                                    <div style="display: flex; flex-direction: row;  width: 100%; " class="">
                                        <div style=" display: flex; flex-grow: 1; flex-direction: column;" class="">
                                            <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                Date
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                21 Jun 2019
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                21 Jun 2019
                                            </div>


                                        </div>
                                        <div style=" display: flex; flex-grow: 1; flex-direction: column;" class="">
                                            <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                Source
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                TT
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                TT
                                            </div>


                                        </div>
                                        <div style="   flex: 1; float: right; display: flex; flex-direction: column; justify-content: right !important;;"
                                             class="">
                                            <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                Amount
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                17,500
                                            </div>
                                            <div style="font-size: 12px; padding: 5px;" class="">
                                                0.00
                                            </div>

                                        </div>
                                    </div>
                                    <div style="width: 100%; height: 35px; padding: 5px; display: flex; flex-direction: row; justify-content: space-between; background-color: #000;  color: #fff;"
                                         class="">
                                        <div class="">Total Deductions</div>
                                        <div class="">17,500</div>
                                    </div>
                                    &nbsp;
                                    <div style="width: 100%; height: 35px; padding: 5px; display: flex; flex-direction: row; justify-content: space-between; background-color: #fff; border: 1px solid black; color: #000;"
                                         class="">
                                        <div class="">Net Receivable After Deductions</div>
                                        <div class="">17,500</div>
                                    </div>
                                </div>
                                <div class="col s4">
                                    <div style="display: flex; flex-direction: column; background-color: #F6F6F6; "
                                         class="">
                                        <div style="color: #333333; font-size: 14px; background-color: #fff; font-weight: 700;"
                                             class="">
                                            Payments Received
                                        </div>
                                        <div style="display: flex; flex-direction: row;  width: 100%; " class="">
                                            <div style=" display: flex; flex-grow: 1; flex-direction: column;" class="">
                                                <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                    Date
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    21 Jun 2019
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    21 Jun 2019
                                                </div>


                                            </div>
                                            <div style=" display: flex; flex-grow: 1; flex-direction: column;" class="">
                                                <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                    Source
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    TT
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    TT
                                                </div>


                                            </div>
                                            <div style="   flex: 1; float: right; display: flex; flex-direction: column; justify-content: right !important;;"
                                                 class="">
                                                <div style="color: #ccc; font-weight: 900; padding: 5px;" class="">
                                                    Amount
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    17,500
                                                </div>
                                                <div style="font-size: 12px; padding: 5px;" class="">
                                                    0.00
                                                </div>

                                            </div>
                                        </div>
                                        <div style="width: 100%; height: 35px; padding: 5px; display: flex; flex-direction: row; justify-content: space-between; background-color: #000; color: #fff;"
                                             class="">
                                            <div class="">Total Received Till Date</div>
                                            <div class="">17,500</div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="<?=in_array($cs->status,array(4))?"":"disabled"?>">
                        <div style=" color: #3d3c3c;" class="collapsible-header">
                            <img class="plus" src="<?=IMAGES?>plus.png">
                            Travellers Review
                        </div>
                        <div class="collapsible-body">
                            <div style="display: flex; flex-direction: row; height: 250px;" class="">

                                <div style="flex: 3; display: flex;  flex-direction: column; justify-content: space-between;"
                                     class="">
                                    <div style="color: #333333; flex: 3; " class="">Hotel and food quality need improvement,
                                        Rest is fine.
                                    </div>
                                    <div style="flex: 1;" class="">

                                        <textarea id="message" class="textarea" placeholder="Your Message" rows="5"
                                                  cols="4"></textarea>


                                    </div>
                                </div>
                                <div style="flex: 1; padding: 10px; display: flex; flex-direction: column;" class="">
                                    <small style="color: #3d3c3c;">Overall Rating</small>
                                    <span class="star-text">
                                                        <i class="far fa-star star-trip"></i>
                                                        <i class="far fa-star star-trip"></i>
                                                        <i class="far fa-star star-trip"></i>
                                                        <i class="far fa-star star-trip"></i>
                                                        <i class="far fa-star star-fo"></i>
                                                    </span>

                                    <small style="color: #3d3c3c;">Hotels</small>
                                    <span>Good</span>
                                    &nbsp;
                                    <small style="color: #3d3c3c;">Cabs & Driver</small>
                                    <span>Good</span>

                                    <small style="color: #3d3c3c;">Service of Travel Agent</small>
                                    <span>Good</span>

                                    <button class="no-border txt-white bkgnd-black border-radius-3px no-shadow"
                                            id="button_02">Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        }
    }else
        {
        ?>
        <div style="height: 80vh; color: #3d4040;" class="col s9">
            <div style="display: flex; height: 100%; align-items: center; justify-content: center">
                <div style="font-size: 6rem">🤦‍♂️</div>
                <div style="">&nbsp;
                    <h3>Trip ID Not Exist :(</h3>
                    <p>Trip Id is Not Exist! <a href="<?=HTTP_HOST?>">click here</a></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div class="fulltoast flex spaceBetween">
        <div id="#sandbox_card" class="">
            <div id="toast" class="">
                <div id="img"><i class="material-icons">close</i></div>
                <div id="desc">Quote is Not Discarded</div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="<?= SCRIPT ?>main.js"></script>

<style>
    .bluerow {
        background-color: #2a92bd;
        height: 60px !important;
    }

    .bluerow h2 {
        color: #fff;

    }
</style>
<script type="text/javascript">
    let HTTP_HOST = $("#HTTP_HOST").val();
    let tripId=$(".tripid").val();
    function launch_toast(text, iconname) {

        var x = document.getElementById("toast")
        var y = document.getElementById("img")
        y.innerHTML = '<i class="material-icons">' + iconname + '</i>'
        var z = document.getElementById("desc")
        z.innerText = text
        x.className = "show";
        setTimeout(function () {
            x.className = x.className.replace("show", "");
        }, 5000);
    }
    class ConfirmBox {
        wrapper = "";
        target = ""

        constructor(ok, cancel, heading, subheading) {
            this.create(ok, cancel, heading, subheading)
        }

        create(ok, cancel, heading, subheading) {

            if (document.querySelector("#confirm-wrapper") === null) {
                this.wrapper = document.createElement("div");
                this.wrapper.id = "confirm-wrapper";
                var html = "<div id='confirm-box'><div class='row bluerow'><h2 id='confirm-header'>ADD NOTE : TRIP ID : 23444</h2></div>";
                html += "<div class='row'>" +
                    "<div class='col s2'>" +

                    "" +
                    "</div>" +
                    "<div class='col s4 '>" +
                    "<span style='    font-size: 1em;font-weight: bold;text-transform: uppercase;margin: 2.5em 0 1.5em 0;'> " + heading + " </span>" +
                    "</div>" +
                    "</div>" +
                    "<div style='border-bottom:1px solid #ccc' class='row'>" +
                    "<div class='col s6 offset-s2'>" +
                    "<span style=' font-style:italic;   font-size: 1em;font-weight: normal;margin: 2.5em 0 1.5em 0;'>" + subheading + "</span>" +
                    "</div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<span class='col s12' style='margin-left:8px;'>" +
                    "Your Note" +
                    "</span>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div style='margin:4px' class='full col'>" +
                    " <div class='contine'>" +
                    "<div class='gg-bound-control' data-bound-control onclick='this.classList.add('active-gg-bound-control')'>" +
                    "<div class='gg-bound-control-outer'>" +
                    "<div class='gg-bound-control-inner'>" +
                    "<div class='gg-bound-control-wrapper'>" +
                    " <textarea id='additionalinfoarea' required='required' rows='1' onkeyup='textAreaAdjust(this)' class='h2 gg-bound-control-input'></textarea>" +
                    "  <div class='gg-bound-control-label'>Enter additional information</div>" +
                    "  </div>" +
                    " <div class='gg-bound-control-df-bottom-border'></div>" +
                    " <div class='gg-bound-control-ef-bottom-border'></div>" +
                    "</div>" +
                    " </div>" +
                    "</div>" +
                    " </div>" +
                    " </div>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<span class='col s12' style='margin-left:8px;'>" +
                    "Set Reminder" +
                    "</span>" +
                    "</div>" +
                    "<div class='row'>" +
                    "<div style='margin:4px' class='full col'>" +
                    " <div class='contine'>" +
                    "<div class='gg-bound-control' data-bound-control onclick='this.classList.add('active-gg-bound-control')'>" +
                    "<div class='gg-bound-control-outer'>" +
                    "<div class='gg-bound-control-inner'>" +
                    "<div class='gg-bound-control-wrapper'>" +
                    " <input type='datetime-local' required='required'  id='reminder' class='h2 gg-bound-control-input'  spellcheck='false' autocomplete='off' autocapitalize='none' name='Explore '/>" +

                    "  <div class='gg-bound-control-label'>Date and Time</div>" +
                    "  </div>" +
                    " <div class='gg-bound-control-df-bottom-border'></div>" +
                    " <div class='gg-bound-control-ef-bottom-border'></div>" +
                    "</div>" +
                    " </div>" +
                    "</div>" +
                    " </div>" +
                    " </div>" +
                    "</div>"
                html += "<div id='confirm-buttons'><button id='confirm-ok'>OK</button><button type='button' id='confirm-cancel'>Cancel</button></div>";
                html += "</div>";
                this.wrapper.innerHTML = html;
                document.body.appendChild(this.wrapper);
            } else {
                this.wrapper = document.querySelector("#confirm-wrapper");
            }
            this.layout(this.wrapper);
            self = this;
            $(this.wrapper).find("#confirm-ok").on("click", function () {
                self.hide(self);
                ok();
            });
            $(this.wrapper).find("#confirm-cancel").on("click", function () {
                self.hide(self);
                cancel(self);
            });
        }

        layout() {
            var winHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            this.wrapper.style.height = winHeight + "px";
        }

        Show(target, text) {
            this.target = target;
            $(this.wrapper).find("#confirm-header").html(text)
            this.wrapper.style.display = "block";
            this.wrapper.style.opacity = 1;
        }

        hide(self) {
            self.wrapper.style.opacity = 0;
            setTimeout(function () {
                self.wrapper.style.display = "none";
            }, 500);
        }
    }
    function InitDiscardBox(heading, subheading, e) {
        let ele=$(e).parents().find(".leadTimelineCard.cardOpen h5");
        let c = new ConfirmBox(
            function (target) {
                var data = {}
                let additionalinfo = $('#additionalinfoarea').val()
                let fulldate = ($('#reminder').val());
                //let fulldate = [day, month, year].join('/');
                data.info = additionalinfo
                data.date = fulldate
                data.stage=ele.text();
                data.type=heading;
                e.classList.remove("confirm")
                document.getElementById("confirm-wrapper").remove()
                LoadPage(HTTP_HOST + "Note/"+tripId, "POST", data)
                    .done(function(Response, textStatus) {
                        console.log(Response);
                        launch_toast("Opened", "check")
                    })
                    .fail(function(jqXHR, textStatus) {
                        alert("Page Not Found " + textStatus);
                    });
            },
            function (target) {
                launch_toast("closed", "close")
                e.classList.remove("confirm")
                document.getElementById("confirm-wrapper").remove()

            }, heading, subheading)
        $(document).on("click", ".confirm", function () {
            c.Show(this, $(this).attr("data-question"));
        })
    }
    function openmodal(e) {
        let value = e.innerText


        if (value === "Report if incorrect") {
            e.classList.add('confirm')
            InitDiscardBox("Incorrect Phone No", "Phone number does not work", e)
        } else if (value == "Mark unable to reach customer") {

            e.classList.add('confirm')
            InitDiscardBox("traveller not reachable", "Could not talk to traveller this time, try again later", e)

        } else if (value == "Resend quote & set a reminder") {
            e.classList.add('confirm')
            InitDiscardBox("Talk in progress with traveller", "Initial Stage only- Quote not seen", e)

        } else if (value == "Set reminder for when to call next") {
            e.classList.add('confirm')
            InitDiscardBox("Set next reminder ", "Traveller interested, but will book after few weeks", e)

        } else {
            return
        }


    }
    function loading(){
        document.querySelector(".se-pre-con").style.display = "unset";
        document.querySelector(".se-pre-con").style.visibility = "visible";
    }
    function loaded(){
        document.querySelector(".se-pre-con").style.display = "none";
        document.querySelector(".se-pre-con").style.visibility = "hidden";

    }
    function textAreaAdjust(element) {
        element.style.height = "1px";
        element.style.height = (element.scrollHeight) + "px";
        $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
    }
    const LoadPage = ($url, $method, $data = {}) => {
        return $.ajax({
            url: $url,
            method: $method,
            data: $data,
            beforeSend: function() {
                loading();
            },
            complete:function () {
                loaded();
            }
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        var instance = instances[0];
        instance.open(0)
        instance.open(1);
        // var elemstwo = document.querySelectorAll('.collapsibletwo');
        // var instancestwo = M.Collapsible.init(elemstwo);
        // var instancetwo = instancestwo[0];
        // instancetwo.open(0)
    });
    function getquoteComponent(self,id) {
        let HTTP_HOST_ = document.getElementById("HTTP_HOST").value
        $(".quote-head").removeClass("activeQ");
        self.classList.add("activeQ");
        LoadPage(HTTP_HOST_ + "traveller/sendQuotationonTravellerPageForQuoteid/" + id, "GET")
            .done(function (Response, textStatus) {
                $("#getquotationonid").html(Response);
            })
            .fail(function (jqXHR, textStatus) {
                alert(jqXHR.responseText);
            });
    }
    loaded();
    let li = document.querySelectorAll('.collapsible .collapsible-header')
    li.forEach(function (li) {
        li.addEventListener('click', function(event){
          let img = li.querySelector('.plus')
          img.src = toggleImg(img);
        })
    })
    function toggleImg(img) {
      let HTTP_HOST_ = document.getElementById("HTTP_HOST").value
      let initialImg = img.src;
      let srcTest = initialImg.includes(HTTP_HOST_+"app/Images/plus.png");
      let newImg = {
        'true':HTTP_HOST_+"app/Images/minus.png",
        'false':HTTP_HOST_+"app/Images/plus.png"}[srcTest];

      return newImg;
    }
    class ConfirmBoxx{
        wrapper="";
        target=""
        constructor(ok,cancel) {
            this.create(ok,cancel)
        }
        create(ok,cancel){
            if( document.querySelector( "#confirm-wrapper" ) === null ) {
                this.wrapper = document.createElement( "div" );
                this.wrapper.id = "confirm-wrapper";
                var html = "<div style='width: 300px !important; min-height: 200px !important;  top: 50% !important; left: 50% !important;margin: -100px 0 0 -150px !important;' id='confirm-box'><h2 id='confirm-header'>Do you want to remove lead</h2>";
                html += "<div id='confirm-buttons'><button id='confirm-ok'>OK</button><button type='button' id='confirm-cancel'>Cancel</button></div>";
                html += "</div>";
                this.wrapper.innerHTML = html;
                document.body.appendChild(this.wrapper );
            }
            else {
                this.wrapper=document.querySelector( "#confirm-wrapper" );
            }
            this.layout(this.wrapper);
            self=this;
            $(this.wrapper).find("#confirm-ok").on("click",function (){
                self.hide(self);
                ok();
            });
            $(this.wrapper).find("#confirm-cancel").on("click",function (){
                self.hide(self);
                cancel(self);
            });
        }
        layout() {
            var winHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            this.wrapper.style.height = winHeight + "px";
        }
        Show(target,text) {
            this.target=target;
            $(this.wrapper).find("#confirm-header").html(text)
            this.wrapper.style.display = "block";
            this.wrapper.style.opacity = 1;
        }
        hide(self) {
            self.wrapper.style.opacity = 0;
            setTimeout(function() {
                self.wrapper.style.display = "none";
            }, 500);
        }
    }
    function removeLead(e){
        let c = new ConfirmBoxx(
        function (target) {
            launch_toast("Lead Removed", "check")
        },
        function (target) {
            launch_toast("closed", "close")
        })
        $(document).on("click", ".confirm2", function () {
                c.Show(this, $(this).attr("data-question"));
        })
    }
</script>
</body>
</html>

