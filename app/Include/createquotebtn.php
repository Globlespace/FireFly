<style>
    .modal-window {
        position: absolute;
        top: 70px;
        right: 60px;
        z-index: 999;
        visibility: hidden;
        opacity: 0;
        pointer-events: none;
        transition: all 0.3s;
        width: 260px;
        padding: 1em;
        background: white;
        box-shadow: 1px 1px 1px 2px  #ccc;
    }

    .closemodel{
        visibility: visible;
        opacity: 1;
        pointer-events: auto;
    }


    .modal-window header {
        font-weight: bold;
    }

    .modal-window h1 {
        font-size: 150%;
        margin: 0 0 15px;
    }

    .modal-close {
        color: #aaa;
        line-height: 50px;
        font-size: 80%;
        position: absolute;
        right: 0;
        text-align: center;
        top: 0;
        width: 70px;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-close:hover {
        color: black;
    }
    /* Demo Styles */



    a {
        color: inherit;
    }


    .modal-window>div {
        border-radius: 5px;
    }

    .modal-window div:not(:last-of-type) {

    }

    ._small {
        color: lightgray;
    }

    ._btn {
        background-color: #fe7774;
        color: white;
        padding: 8px 10px;
        border-radius: 5px;
        text-decoration: none;
    }

    ._btn i {
        padding-right: 0.3em;
    }

    .seaarch {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTermmm {
        width: 100%;
        border: 1px solid #2a92bd!important;
        border-right: none!important;
        height: auto!important;
        border-radius: 5px 0 0 5px!important;
        padding: 10px!important;
        outline: none;
        color: #9DBFAF;
    }

    .searchTermmm:focus {
        color: #2a92bd;
    }

    .searchButtonnn {
        width: 40px;
        margin-bottom: 8px;
        background: transparent;
        text-align: center;
        color: #ccc;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
        padding: 8px;
        border: 1px solid #2a92bd!important;

    }

    .dropdowwwnn {
        width: 100%;
        display: inline-block;
        margin-right: 10px;
        position: relative;
        border-radius: 5px;
        cursor: pointer;
    }

    .dropdowwwnn.toggle>input {
        display: none;
    }

    .dropdowwwnn>a,
    .dropdowwwnn.toggle>label {
        border-radius: 2px;
        box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.3);
    }

    .dropdowwwnn>a::after,
    .dropdowwwnn.toggle>label::after {
        content: "";
        float: right;
        margin: 8px 0 0 0;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 10px solid #CCC;
        transition: all 500ms;
        transform: rotate(0deg);
    }

    .dropdowwwnn ul {
        list-style-type: none;
        display: block;
        margin: 0;
        padding: 0;
        position: absolute;
        top: 43px;
        width: 100%;
        box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.3);
        max-height: 163px;
        overflow-y: auto;
        overflow-x: hidden;
        transition:all linear 300ms;
        transition-delay: 300ms;
        border: 1px solid transparent;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        height: 0;
        background-color: white;
    }
    .dropdowwwnna>a::after{
        transition: all 1s;
        transform: rotate(0deg);
    }
    .dropdowwwnn:hover>a:after{
        transform: rotate(180deg);
    }
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .dropdowwwnn>a,
    .dropdowwwnn.toggle>label {
        display: block;
        padding: 10px;
        text-decoration: none;
        height: 100%;
        font-size: .97rem;
        color: #999;
    }

    .dropdowwwnn li {
        padding: 5px 10px;
        height: 31px;
        border-bottom: 1px solid #0000002e;
    }


    .dropdowwwnn.hover:hover ul {
        border: 1px solid #2a92bd;
        border-top: transparent;
        height: auto;
        max-height: 200px;
    }
    .ddown.hover{
        border: 1px solid #2a92bd;
        border-top: transparent;
        height: auto;
        max-height: 200px;
    }
    .dropdowwwnn li:first-child a {
        border-radius: 2px 2px 0 0;
    }

    .dropdowwwnn li:last-child a {
        border-radius: 0 0 2px 2px;
    }

    .dropdowwwnn li:first-child a::before {
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #FFF;
        margin: -10px 0 0 30px;
    }

    .dropdowwwnn a:hover,
    .dropdowwwnn.toggle>label:hover,
    .dropdowwwnn.toggle>input:checked~label {
        color: #666;
    }

    .dropdowwwnn>a:hover::after,
    .dropdowwwnn.toggle>label:hover::after,
    .dropdowwwnn.toggle>input:checked~label::after {
        border-top-color: #AAA;
    }

    .dropdowwwnn li:first-child a:hover::before {
        border-bottom-color: #EEE;
    }

    .dropdowwwnn.hover:hover li,
    .dropdowwwnn.toggle>input:checked~ul li {
        padding: 5px 10px;
        height: 31px;
        border-bottom: 1px solid #0000002e;
    }

    /* .dropdowwwnn.hover:hover li:first-child,*/
    /*.dropdowwwnn.toggle>input:checked~ul li:first-child {
        padding-top: 15px;
    }*/

    .createbtn,
    .createbtn:link,
    .createbtn:visited {
        background-color: #2a92bd;
        border: none;
        color: #fff;
        letter-spacing: 0.1em;
        cursor: pointer;
        position: relative;
        text-align: center;
        font-weight: bold;
        text-transform: uppercase;
        transition-property: transform;
        transform: translateZ(0);
        transition: box-shadow 0.5s cubic-bezier(0.39, 0.5, 0.15, 1.36);
    }

    .createbtn:hover,
    .createbtn:link:hover,
    .createbtn:visited:hover {
        box-shadow: 0 0 0 28px rgba(0, 0, 0, 0.25) inset;
    }

    .createbtn:active,
    .createbtn:link:active,
    .createbtn:visited:active {
        transform: translateY(3px);
    }
    .interior{
        margin: auto;
        margin-right: 20px!important;
    }
</style>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<div class="interior">
    <a class="btn" onclick="this.parentElement.nextElementSibling.classList.add('closemodel')" style="background-color: #fe7774"> Give Quotation</a>
</div>
<div id="open-modal" class="modal-window">
    <div>
        <a onclick="this.parentElement.parentElement.classList.remove('closemodel')" title="Close" class="modal-close">Close</a>
        <h1 style="color: #2a92bd;">FireFly!</h1>
        <div class="dropdowwwnn srch">
            <div class="seaarch ">
                <input type="text" onkeyup="SearchAlreadyGivedQuote()" id="srch" class="searchTermmm " placeholder="Search from an existing id ">
                <button type="button" onclick="SearchAlreadyGivedQuote()"  class="searchButtonnn ">
                    <i class="fa fa-search "></i>
                </button>
            </div>
            <ul class="ddown" style="z-index: 2; overflow-y: scroll !important;" >

            </ul>
        </div>
        <a style="
            text-decoration: none;
            display: block;
            margin: 7px auto;" onclick="getQuoteform(this,{{id}})" class="btn2 waves-effect waves-light btn createbtn" id="openbtn">Create new Quote</a>
        <div style="border: 1px solid #2a92bd; margin: 10px  0 20px 0" class="dropdowwwnn hover ">
            <a style="color: #2a92bd; ">Search from recent 15 quotes</a>
            <ul style="z-index: 2; overflow-y: scroll !important;" >
                <?php
                $cq=new \app\Model\give_quotation();
                $Query="SELECT `id`,`c_q_id` FROM `give_quotations` ORDER BY id DESC LIMIT 15";
                $cq->query($Query);
                while($cq->next()){
                    ?>
                    <li><a onclick="getfilledQuoteform(this,<?=$cq->id?>,{{id}})">TRIP ID <?=$cq->c_q_id?></a></li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </div>
</div>