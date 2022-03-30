<?php


namespace app\Controller;


class MakePdf
{
    public function GetPdf($table,$name){
       $this->Pdfpage($table,$name);
    }
    private function Pdfpage($table,$name){
        require_once VENDOR_DIR ."autoload.php";

        $pdf=new \Mpdf\Mpdf(['mode'=>'c']);
        $pdf->SetMargins(10, 10, 12);
        $pdf->SetCreator("Fly Paradise");
        $pdf->SetAuthor('Mumin Farooq');
        $pdf->SetTitle('Fly Paradise Quotation Brochure ');
        $pdf->SetSubject('Application Form');
        $pdf->SetAutoPageBreak(TRUE, 15);
        $pdf->AddPage();
        $hotelDays=array();
        $dayscount=0;
        foreach ($table as $hotel){
            $dayscount++;
            $hotelDays[$hotel["distinationPoint"]]=0;
        }
        foreach ($table as $hotel){
            $hotelDays[$hotel["distinationPoint"]]=($hotelDays[$hotel["distinationPoint"]]+1);
        }
        ob_start();
?>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;700;900&display=swap" rel="stylesheet">
        <style>
            *{
                font-family: 'Roboto', sans-serif;
            }
            .logo{
                box-sizing: border-box;
                font-size:22px;
                color: #2a92bd;
                width: 18%;
                border-right: 1px solid #cdcdcd;
                float: left;
                padding:20px 5px 20px 0;
            }
            .logo-text{
                width: 78%;
                float: left;
                font-size: 1rem;
                padding-left: 12px;
                color: #303030;
            }
            .row{
                font-family: 'Roboto', sans-serif;
                width: 100%;
                border-bottom: 1px solid #a2a2a2;
            }
            .col{
                float: left;
            }
            .head{
                color: #2a92bd;
                font-size: 1.5rem;
                margin-top: 10px;
                margin-bottom: 5px;
                text-decoration: underline;

            }
            .heading .col{
                width: 22%;
                padding: 8px 0 8px 10px;
            }
            .heading{
                margin-top: 30px;
                background-color: #ffffd4;
            }
            .bold{
                font-weight: bold;
                color: black;
            }
            .lighter{
                color: #454545;
            }
            .greeting{
                margin-top: 30px;
                margin-bottom: 30px;
                font-size: 1.04rem;
                line-height: 18px;
            }
            .greeting .cname{
                font-size: 1.1rem;
                margin-bottom: 10px;
            }
            .greeting .greet{
                font-size: 1.1rem;
                margin-bottom: 10px;
                color: #3e3e3e;
            }
            .greeting .g_content{
                color: #3e3e3e;
            }
            .greeting .g_content span{
                font-size: 1.1rem;
            }
            .line{
                height: 1px;
                margin-top: 3px;
                margin-bottom: 2px;
                background-color: #2a92bd;
            }
            .note{
                background-color: #EBF5FF;
                padding: 30px 20px;
                border-radius: 10px;
                margin: 30px 0;
            }
            .note .CuratedBy{
                font-size: 1.2rem;

            }
            .note .AgentName{
                font-weight: bold;
                font-size: 1.7rem;
            }
            .note .Experience{
                font-size: 1.1rem;
            }
            .note .Phoneno{
                margin-top: 10px;
            }
            .note .Email{
                margin-bottom: 10px;
            }
            .note .Phoneno,
            .note .Email{
                color: #707070;
                font-size: 1.1rem;
            }
            .note .CreatedOn{
                font-size: 1.3rem;
            }
            .note .Validtill{
                font-size: 1.3rem;
            }
            .note .CreatedOn span{
                font-size: 1.3rem;
                font-weight: bold;
                color: black;
            }
            .note .Validtill span{

                font-size: 1.3rem;
                font-weight: bold;
                color: black;
            }
            .totalAndAdvancePay .bold{
                width: 80%;
                padding: 8px 0 8px 10px;
            }
            .totalAndAdvancePay .lighter{
                width: 15%;
                padding: 8px 0 8px 10px;
            }
            .Summary{
                margin-top: 30px;
            }
            .Summary .col{
                padding: 8px 0 8px 10px;
            }
            .Summary .bigger{
                width: 32%;
            }
            .Summary .small{
                width: 20%;
            }
            .Summary .xsmal{
                width: 12%;
            }
            .Accomodation{
                margin-top: 30px;
            }
            .Accomodation .bigger{
                padding: 8px 0 8px 10px;
                width: 47%;
            }
            .Accomodation .small{
                padding: 8px 0 8px 10px;
                width: 28%;
            }
            .Accomodation .xsmall{
                padding: 8px 0 8px 10px;
                width: 20%;
            }
            .VehicleType{
                margin-top: 30px;
            }
            .VehicleType .row{
                border-bottom: none;
                margin-top: 15px;
                margin-left: 10px;
            }
            .inclusionExclusion{
                margin-top: 30px;
            }
            .inclusionExclusion .row{
                border-bottom: none;
            }
            .inclusionExclusion .col{
                width: 48%;
                padding: 8px 0 8px 10px;
            }
            .inclusionExclusion .item{
                color: #303030;
                padding: 7px 5px;
                font-size: 1.15rem;
            }
            .Itinerarys{
                margin-top: 50px;
            }
            .Itinerarys .Itineraryshead{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .Itinerarys .row{
                border-bottom: none;
            }
            .Itinerarys .Itinerarygraph{
                width: 96%;
            }
            .Itinerarys .Itinerary{
                width: 96%;
                font-size: 1.2rem;
                line-height: 25px;
                color: #303030;
                margin-left: 30px;
                border-left: 1px solid rgba(125,0,0,0.58);
                padding-left: 35px;
                padding-bottom:30px;

            }
            .Itinerarys .itineraryhead{

            }
            .Itinerarys .daycount{
                font-size: 1.3rem;
            }
            .rating{
                width: 10px;
                height: 10px;
            }
            .covid-banner{
                margin-top: 30px;
            
            }
            .Acc-details{
                margin-top: 30px;
                font-weight: bold;
            }
            .Acc-details .row{
                border-bottom: none;
            }
            .Acc-details .head{
                margin-bottom: 25px;
            }
            .acc-detail span{
                font-weight: normal;
                color black;
            }
            .acc-detail{
                width: 55%;
                padding: 15px;
                border-radius: 5px;
                background-color: #ffffd4;
                line-height: 20px;
            }
            .QR-code{
                width: 20%;
                padding-left: 15%;
                margin-top: 0;
                padding-top: 0;
            }
            .check-img{
                width: 50px;
                padding-left: 15px;

            }
            .small-banner{
                margin: 30px 0;
            }
        </style>
    </head>
    <body style="font-family: 'Roboto', sans-serif;">
        <div>
            <div class="logo">
                <img src="<?=IMAGES?>pdf/logo.jpeg">
            </div>
            <div class="logo-text">You\'ve received quotation by Fly Paradise Travels Private Limited for Kashmir
            </div>
        </div>
        <?php
        $date=getdate(date("U"));
        ?>
        <div class="heading">
            <div class="row">
                <div class="col bold">Date of journey:</div>
                <div class="col lighter"><?=$date["mday"]."/".$date["mon"]."/".$date["year"]?></div>
                <div class="col bold">Trip ID: </div>
                <div class="col lighter"><?=$table[0]["tripId"]?></div>
            </div>

            <div class="row">
                <div class="col bold">Company Location:</div>
                <div class="col lighter">Jammu and Kashmir</div>
                <div class="col bold">Phone: </div>
                <div class="col lighter">9906444456</div>
            </div>
        </div>
        <div class="greeting">
            <div class="cname bold">Dear <?=$table[0]["customerName"]?>,</div>
            <div class="greet">Greetings from FlyParadise.in!</div>
            <div class="g_content">
                <span class="bold">Fly Paradise Travels Private Limited</span>, designed below holiday package for your requested trip on
                FlyParadise.in, if you need any modifications in travel package you can contact Fly Paradise Travels Private
                Limited on 9906444456 keep your Trip ID: <?=$table[0]["tripId"]?> as a reference while contacting with executive.
            </div>
        </div>
        <div class="covid-banner">
            <img src="<?=IMAGES?>pdf/covid.png">
        </div>
        <div class="line"></div>
        <div class="note">
            <div class="CuratedBy"><i>Curated by</i></div>
            <div class="AgentName"><?= $table[0]["name"] ?> </div>
            <div class="Experience">7+ Years Experience</div>
            <div class="Phoneno">Call: <?=$table[0]["companyPhone"]?></div>
            <div class="Email">Email: <?=$table[0]["email"]?></div>
            <div class="CreatedOn">Quotation Created on <span><?=$date["mday"]." ".$date["month"]." ".$date["year"]?> </span>  </div>
            <div class="Validtill">Valid till <span>
                <?php
                    $NewDate= getdate( Date('U', strtotime('+3 days')));
                    echo $NewDate["mday"]." ".$NewDate["month"]." ".$NewDate["year"];
                ?>
                </span>
            </div>
        </div>
        <div class="line"></div>
        <div class="totalAndAdvancePay">
            <div class="row">
                <div class="col bold">Total Booking Amount:</div>
                <div class="col lighter">Rs.<?=$table[0]["quotationPrice"]?></div>
            </div>
            <div class="row">
                <div class="col bold">Advance Amount to Pay for Trip Confirmation:</div>
                <div class="col lighter">Rs.<?=$table[0]["advanceAmountToPay"]?></div>
            </div>
        </div>
        <div class="Summary">
            <div class="head">Summary</div>
            <div class="row">
                <div class="col bigger bold">Tour Duration: </div>
                <div class="col bigger lighter"><?=($dayscount-1)?> Nights & <?=($dayscount)?> Days</div>
                <div class="col small bold">Adults:</div>
                <div class="col xsmall lighter"><?=$table[0]["adults"]?></div>
            </div>
            <div class="row">
                <div class="col bigger bold">Tour Start Date: </div>
                <div class="col bigger lighter"><?=$table[0]["dateOfJourney"]?></div>
                <div class="col small bold">Kids:</div>
                <div class="col xsmall lighter"><?=$table[0]["children"]?></div>
            </div>
            <div class="row">
                <div class="col bigger bold">Tour Start City:</div>
                <div class="col bigger lighter"><?=$table[0]["distinationPoint"]?></div>
            </div>
        </div>
        <div class="VehicleType">
            <div class="head">Vehicle Type</div>
            <div class="row">
                <div class="col">
                    <?=$table[0]["vehicleType"]?>
                </div>
            </div>
        </div>
        <div class="Accomodation">
            <div class="head">Accomodation</div>
            <div class="row">
                <div class="col bold small">Destinations</div>
                <div class="col bold bigger">Hotel / Houseboat</div>
                <div class="col bold xsmall">Room Type</div>
            </div>
            <?php
            foreach ($hotelDays as $key=>$value){
                ?>
            <div class="row">
                <div class="col bold small">
                    <?=$key?> <?=$value?> Night
                </div>
                <div class="col lighter bigger">
                <?php
                foreach ($table as $day)
                {
                    if($day["distinationPoint"] == $key)
                    {
                        ?>
                        <?=$day['hotelName']?>
                        (<span class="rating">
                            <?php
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
                            break;
                    }
                }
                        ?></span>)
                </div>
                <div class="col lighter xsmall">
                    <?php
                foreach ($table as $day){
                    if($day["distinationPoint"] == $key){
                        switch($day['hotelRoomType']){
                            case 1:
                                echo "Standard";
                                break;
                            case 2:
                                echo "Deluxe";
                                break;
                            case 3:
                                echo "Super Deluxe";
                                break;
                            case 4:
                                echo "Luxurious";
                                break;

                        }
                        break;
                    }
                }
        ?> Room</div>
            </div>
                <?php
                }
                $table[0]["Inclusions"]=str_replace("\n","<br>",$table[0]["Inclusions"]);
                $table[0]["Exclusions"]=str_replace("\n","<br>",$table[0]["Exclusions"]);
                ?>
        </div>
        <div class="Itinerarys">
            <div class="head">Itinerary</div>
            <div class="itinerarysHead bold">
                <?php
                    echo ($dayscount-1);
                    echo " Nights & ";
                    echo ($dayscount);
                    echo " Days | Destinations : ";
                    foreach ($hotelDays as $key=>$value){
                        echo $key.' ('.$value.' night )';
                    }
                ?>
            </div>
            <?php
            foreach ($table as $itenary){
               ?>
                <div class="row">
                    <div class="row Itinerarygraph">
                        <div class="col check-img">
                            <img src="<?=IMAGES?>/pdf/check.png" alt="">
                        </div>
                        <div class="itineraryhead bold">
                            <span class="daycount">
                                <?= $itenary["day"]?>
                            :</span> <?=$itenary["itenaryHeading"]?>
                        </div>
                    </div>
                </div>
                <div class="row Itinerary">
                    <div class="nightstay">
                    <span class="bold">Night stay:</span>
                        <?=$itenary["distinationPoint"]?>
                    </div>
                    <div class="itinerarybody">
                        <?=$itenary["itenary"]?>
                    </div>
                    <div class="dayinclusions">
                        <span class="bold">Day Inclusions:</span>
                        <?=($itenary["dinner"]=="true" ? "Dinner":"" )?>
                        , <?=($itenary["breakfast"]=="true" ? "Breakfast":"" )?>
                    </div>
                </div>
            <?php
           }
            ?>
        </div>
        <div class="inclusionExclusion">
            <div class="row">
                <div class="col">
                    <div class="head">Inclusion</div>
                    <div class="item"><span class="count"></span><?=$table[0]["Inclusions"]?></div>
                </div>
                <div class="col">
                    <div class="head">Exclusion</div>
                    <div class="item"><span class="count"></span><?=$table[0]["Exclusions"]?></div>
                </div>
            </div>
        </div>
        <div class="Acc-details">
            <div class="head">Bank account details</div>
            <div class="row">
                <div class="acc-detail col">
                    <div> Account Name: <span>FLY PARADISE TRAVELS PRIVATE  LIMITED </span></div>
                    <div> Account No: <span>50200028224680 </span></div>
                    <div> IFSC CODE: <span>HDFC0002708 </span></div>
                    <div> Bank: <span>HDFC BANK </span></div>
                    <div> Branch: <span>MUNWARABAD. SRINAGAR </span></div>
                </div>
                <div class="QR-code col">
                    <img src="<?=IMAGES?>pdf/QR-code.jpeg">
                </div>
            </div>
        </div>

        <div class="small-banner">
            <img src="<?=IMAGES?>pdf/smallbanner.jpg">
        </div>
        <div class="footer-banner">
            <img src="<?=IMAGES?>pdf/footerbanner.jpeg">
        </div>
    </body>
</html>
<?php
        $html=ob_get_clean();
        $pdf->WriteHTML($html);
        $pdf->Output("PDF/$name.pdf","F");
        $pdf->Output("PDF/$name.pdf","D");
    }
}