<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="<?= STYLE ?>style.css">
    <link rel="stylesheet" href="<?= STYLE ?>postay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<input type="hidden" id="HTTP_HOST" value="<?= HTTP_HOST ?>">
<div class="wrapper">
    <nav class="navbar ">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Fire Fly</a>
            <ul style="margin-left: 400px;" id="nav-mobile" class="left hide-on-med-and-down">
                <li>
                    <div class="row wrap">
                        <form class="col s12">
                            <div class="row">
                                <div class="search col s12">
                                    <input type="text" class="searchTerm" placeholder="What are you looking for?">
                                    <i class="material-icons">search</i>
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
                    <img style="width: 27px; margin-top: 18px; " alt="25398730_1970901499792686_5269957657050947601_n"
                         class="circle responsive-img"
                         src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100">
                    <!-- notice the "circle" class -->
                    <a style="margin-top: -71px !important; margin-left: 14px;" class="dropdown-trigger" href="#!"
                       data-target="dropdown1">Fly Paradise to...<i class="material-icons right">arrow_drop_down</i></a>
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
    <div class="row">
        <div class="col s3">
            <div class="convertedDiv">
                <div id="yesterday" class="yesterday convdiv">Yesterday</div>
                <div id="lastweek" class="lastweek convdiv">LastWeek</div>
                <div id="lastmonth" class="lastmonth convdiv">LastMonth</div>
            </div>
            <div class="text_center">
                <div class="dateparagraph">
                </div>
                <div style="width: 100px; height: 105px; position: relative;  margin: auto; background-color: #2a92bd;"
                     class="circle card-panel ">
                    <div style="width: 92px; height: 70px; position: absolute; top: 1%; left: 4%;" class="card white">
                        <div class=""
                             style="font-size: larger; font-size: 30px; position: absolute; top: 20%; left: 40%; ">
                            0
                        </div>
                    </div>
                    <span style="color: white; position: absolute; top: 78%; left: 14%;">Converted</span>
                </div>
            </div>
            <ul id="list" class="collection">
                <li class="collection-item collct avatar">
                    <a href="">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M-2-4h32v32H-2z"></path>
                                    <path d="M1.06 7.44H4.7 1.06z" fill="#000"></path>
                                    <path stroke="#56C4C1" stroke-width="1.5" stroke-linecap="round"
                                          d="M1.06 7.44H4.7"></path>
                                    <path d="M1.06 11.53H4.7 1.06z" fill="#000"></path>
                                    <path stroke="#56C4C1" stroke-width="1.5" stroke-linecap="round"
                                          d="M1.06 11.53H4.7"></path>
                                    <path d="M1.06 15.56H4.7 1.06z" fill="#000"></path>
                                    <g stroke="#56C4C1" stroke-width="1.5">
                                        <path stroke-linecap="round" d="M1.06 15.57H4.7"></path>
                                        <path d="M11.1 11.52L25.13 1.1c.23-.17.54.11.37.33L18.75 9.7c-.1.13-.03.33.15.37l4.44 1.14c.2.05.27.3.1.41L9.39 22.02c-.22.16-.54-.12-.36-.34l6.78-8.31c.1-.13.03-.33-.15-.37l-4.45-1.07c-.2-.05-.27-.3-.1-.41z"></path>
                                        <path d="M25.34 5.76a9.5 9.5 0 01-8.45 14.8M9.46 16.21a9.5 9.5 0 019.3-14.57"
                                              stroke-linecap="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="title team">FireFly</span>
                        <p class="team dimcolor">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip team">
                            0
                        </div>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="spocManagement">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use href="<?= ICONS ?>icons.svg#PerformanceMetricsColorIcon-usage"/>
                            </svg>
                        </div>
                        <span class="title">SPOC Management</span>
                        <p class="dimcolor">First Line <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">
                            0
                        </div>
                    </a>
                </li>
                <li style="position: relative;" class="collection-item avatar">
                    <div class="circle dimcolor">
                    </div>
                    <a href="" class="dimcolor"
                       style=" font-size: 16px; position: absolute; top: 30%; font-weight: bold; left: 2%; ">
                        LEAD STAGES
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="createquote">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use href="<?= ICONS ?>icons.svg#CreateQuoteIcon-usage"/>
                            </svg>
                        </div>
                        <span class="title">Create Quote</span>
                        <p class="dimcolor">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">
                            0
                        </div>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="quotationFollowUp">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use href="<?= ICONS ?>icons.svg#QuotationFollowup-usage"/>
                            </svg>
                        </div>
                        <span class="title">Quotation Follow up</span>
                        <p style="color: #ccc;">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">
                            0
                        </div>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="vouchersAndPayments">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use href="<?= ICONS ?>icons.svg#VoucherPayment-usage"/>
                            </svg>
                        </div>
                        <span class="title">Vouchers and Payments</span>
                        <p style="color: #ccc;">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">

                            0
                        </div>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="duringStay">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use href="<?= ICONS ?>icons.svg#DuringStayIcon-usage"/>
                            </svg>
                        </div>
                        <span class="title">During Stay</span>
                        <p style="color: #ccc;">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">
                            0
                        </div>
                    </a>
                </li>
                <li class="collection-item avatar">
                    <a href="postStay">
                        <div class="circle dimcolor">
                            <svg viewBox="0 0 28 23" id="RapidFireIcon">
                                <use xlink:href="<?= ICONS ?>icons.svg#PostStayIcon-usage"></use>
                            </svg>
                            </svg>
                        </div>
                        <span class="title">Post Stay</span>
                        <p style="color: #ccc;">Pending Tasks <br>
                        </p>
                        <div style="position: absolute; left: 90%; top: 30%;" class="chip">
                            0
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div style="height: 80vh; color: #3d4040;" class="col s9">
            <div style="display: flex; height: 100%; align-items: center; justify-content: center">
                <div style="font-size: 6rem">🤦‍♂️</div>
                <div style="">&nbsp;
                    <h3>Something went wrong :(</h3>
                    <p>No need for panic, We will fix this issue as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"
                integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="<?= SCRIPT ?>main.js"></script>
</body>
</html>