<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style2.css">
    <link rel="stylesheet" href="../Css/invoice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <title>FireFly Admin Panel</title>

</head>
<body>
    <div class="wrapper wrapperr">
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
                   
              </ul>
              
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  
                <li><a href="#"> <i class="material-icons">book</i></a></li>
                <li><a href="#"> <i class="material-icons">beenhere</i></a></li>
                <li><a href="#"> <i class="material-icons">chat_bubble</i></a></li>
                <li><a href="#"><i class="material-icons">check</i></a></li>
                &nbsp;
                 <li> 
                     <img style="width: 27px; margin-top: 18px; " alt="25398730_1970901499792686_5269957657050947601_n" class="circle responsive-img" src="https://img.traveltriangle.com/attachments/users/278401/original/25398730_1970901499792686_5269957657050947601_n.png?tr=,w-100,h-100">
                    <!-- notice the "circle" class -->
                    <a style="margin-top: -71px !important; margin-left: 14px;" class="dropdown-trigger" href="#!" data-target="dropdown1">Fly Paradise to...<i class="material-icons right">arrow_drop_down</i></a></li>
  
              </ul>
            </div>
          </nav>

          <nav class="white"  >
            <div class="nav-wrapper ">
                   
                        
                <a href="#" class="brand-logo left" style="width: 160px; height: 60px; color: #fff; background-color: #2a92bd;">Converted</a>
          <ul id="nav-mobile" style="margin-left: 190px;" class="center hide-on-med-and-down">
            <li><a style="color: #2a92bd;" href="badges.html">Trip id 23456</a></li>
            <li><a style="color: #2a92bd;" href="sass.html">Quote seen over 2 years ago</a></li>
          
            <li><a style="color: #2a92bd;" href="collapsible.html">Followup Required</a></li>
          </ul>
              
                                  
            </div>
          </nav>
          <div style="margin: 10px !important;" class="row">
            <div class="col s9" id="content-left">

                <div class="content-box content-box-invoice">
                  <div class="section-head clear-fix">
      
                    <h2 class="fl">Invoice preview</h2>
      
                    <div class="fr">
                      <div class="fileUpload download_invoice" id="download-invoice-div-115282">
                        <!-- TEMP: For Uniform URL task and will be Changed/Removed after validation -->
                          <span id="get-invoice-div-115282"><a href="https://traveltriangle.com/quotes/4286389/invoices/115282.pdf?download_async=true" data-remote="true">
                             <span class="sprite-agent sprite-for-download-second"></span>
                             <br>
                              <span>Get Invoice</span>
                          </a></span>
                      </div>
                      <a href="/invoices/115282/send_as_attachment.pdf" class="button1 red button2 js_ga_event_invoice_clicks" ga_action="Send">send Invoice</a>
                    </div>
                  </div>
      
                  <div class="section-title">
                    <h3>Payment Details</h3>
                  </div>
                  <div class="content-box-inner">
                    <div class="requirment-detail">
                      <div class="row">
                        <div class="col s7 bdr-right">
                            <div class="row">
                          <div class=" col s12 divider-box payment-list">
                            <ul class="requirement-list">
                              <li><span class="override-text-l">Currency</span> <strong class="invoice-payment override-text-l">
                              Rs. </strong></li>
                            </ul>
                          </div>
      
                          <div class=" col s12 divider-box payment-list">
                            <table class="override override-height">
                            <tbody><tr>
                                <td class="override override-text-l"><label for="select">Amount Due</label></td>
                              <td class="override-custom override-custom-font"></td>
                                <td class="override override-text-l"><label for="select">Flight Cost</label></td>
                              <td class="override-custom override-custom-font"></td>
                                <td class="override override-text-l"><label for="select">Visa Cost</label></td>
                              <td class="override-custom override-custom-font"></td>
                                <td class="override override-text-l"><label for="select">Land Package Cost</label></td>
                              <td class="override-custom override-custom-font"></td>
                                <td class="override override-text-l"><label for="select">Market Correction Amount</label></td>
                              </tr>
                              <tr>
                                <td class="override override-text-l">   <strong class="invoice-payment">20,500.00</strong></td>
                                <td class="override-custom override-custom-font override-text-l">=</td>
                                <td class="override override-text-l"><strong class="invoice-payment">0.00</strong></td>
                                <td class="override-custom override-custom-font override-text-l">+</td>
                                <td class="override override-text-l"><strong class="invoice-payment">0.00</strong></td>
                                <td class="override-custom override-custom-font override-text-l">+</td>
                                <td class="override override-text-l"><strong class="invoice-payment">20,500.00</strong></td>
                                <td class="override-custom override-custom-font override-text-l">+</td>
                                <td class="override override-text-l"><strong class="invoice-payment">0.00</strong></td>
                              </tr>
                            </tbody></table>
                          </div>
      
                          <div class=" col s6 divider-box payment-list">
                            <ul class="requirement-list">
                              <li><span class="override-text-l">Total discount given</span>
                                <strong class="invoice-payment override-text-l">0.00</strong>
                              </li>
                            </ul>
                          </div>
                            <div class=" col s12 divider-box payment-list margin-top-8">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Convenience Fee</span>
                                  <strong class="invoice-payment override-text-l">500.00</strong>
                                  <div class="tooltipsMainSectionForAdb">
          <span class="inforIconforAgentDb"></span>
          <p class="messageForAgentInfoIconsMain">
              <span class="checkout-fee-tooltip">Travel Triangle is charging a non-refundable convenience fee of Rupee 500.0* (inclusive of GST) on this trip which is payable with the first instalment.</span>
              <span class="checkout-fee-tooltip">*An additional one-time checkout fee of <i class="fa fa-inr"></i> 100.0 will also be charged if traveler will pay via Credit Card/Net Banking/Wallets/PayU Money/PayTM/EMI Credit Card.</span>
          </p>
      </div><!-- tooltipsMainSectionForAdb -->
      
                                </li>
                              </ul>
                            </div>
                          <div class=" col s12 divider-box payment-list margin-top-8">
                            <ul class="requirement-list">
                              <li>
                                <span class="override-text-l">Net Payable Amount</span><strong class="invoice-payment override-text-l">21,500.00</strong>
                              </li>
                            </ul>
                          </div>
                          </div>
                        </div>
      
                        <div class="col s5 padding-0">
                          <div class=" col s12 divider-box payment-list">
                            <ul class="requirement-list">
                              <li><span class="override-text-l">No. of Instalments</span>
                                <strong class="invoice-payment override-text-l">4</strong></li>
                            </ul>
                          </div>
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">1st Instalment</span> <strong class="invoice-payment override-text-l">
      
                                   5,500.00
      
      
      
      
                                  </strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Payment</span> <strong class="invoice-payment override-text-l"></strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Due Date</span> <strong class="invoice-payment override-text-l">28 Jan 2018</strong></li>
                              </ul>
                            </div>
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">2nd Instalment</span> <strong class="invoice-payment override-text-l">
      
                                    8,000.00
      
                                  </strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Payment</span> <strong class="invoice-payment override-text-l"></strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Due Date</span> <strong class="invoice-payment override-text-l">27 Feb 2018</strong></li>
                              </ul>
                            </div>
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">3rd Instalment</span> <strong class="invoice-payment override-text-l">
      
                                    8,000.00
      
                                  </strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Payment</span> <strong class="invoice-payment override-text-l"></strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Due Date</span> <strong class="invoice-payment override-text-l">29 Mar 2018</strong></li>
                              </ul>
                            </div>
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">4th Instalment</span> <strong class="invoice-payment override-text-l">
      
                                    0.00
      
                                  </strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Payment</span> <strong class="invoice-payment override-text-l"></strong></li>
                              </ul>
                            </div>
      
                            <div class=" col s4 divider-box payment-list" style="margin-right: 0">
                              <ul class="requirement-list">
                                <li><span class="override-text-l">Due Date</span> <strong class="invoice-payment override-text-l">28 Jan 2018</strong></li>
                              </ul>
                            </div>
      
                          <div class="col s12">
                          </div>
                        </div>
                      </div>
                    </div>
      
      
                  </div>
      
                  <div class="section-title">
                    <h3> Booking Summary</h3>
                  </div>
                  <div class="content-box-inner">
                    <div class="requirment-detail">
                      <div class="row">
                        <div class="booking-summary-panel">
                          <div class="booking-panel col s9">
                            <div class="booking-info-div col s4">
                              <p class="booking-field-title">Name</p>
                              <p class="booking-field-val">Spaul</p>
                            </div>
                            <div class="booking-info-div col s4">
                              <p class="booking-field-title">Destination</p>
                              <p class="booking-field-val">Katra</p>
                            </div>
                            <div class="booking-info-div col s4">
                              <p class="booking-field-title">Travel Dates</p>
                              <p class="booking-field-val">29 March 2018 <span class="fw-normal">to</span> 01 April 2018</p>
                            </div>
                            <div class="booking-info-div col s4">
                              <p class="booking-field-title">Travellers</p>
                              <p class="booking-field-val">5 Adults, 0 Children</p>
                            </div>
                            <div class="booking-info-div col s4">
                              <p class="booking-field-title">Duration</p>
                              <p class="booking-field-val">4 Days &amp; 3 Nights</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row spacingclassformainbooking">
                        <div class="col s5 invoice-hotel-section  margin-top-8">
                          <h3 class="invoice-sub-hdg">Hotel Details</h3>
                          <div class="col s12 hotel-det-sec hotel-dec-sec-border padding-0">
                              <div class="border-left-dotted-Div">
                            <p class="hotel-det-place">Katra(2<sup>nd</sup>, 3<sup>rd</sup> Nights)</p>
                                <div class="hotel-info new-spacing-bottom col- s12 padding-0">
                                  <p class="hotel-info-name">Hotel bhawani international</p>
                                  <p class="hotel-info-category col s12 padding-0"><span class="col s3 padding-0">Category</span><span class="col s1">:</span><span class="icon sprite-agent star-rating"></span><span class="icon sprite-agent star-rating"></span></p>
                                  <p class="hotel-info-category col s12 padding-0"><span class="col s3 padding-0">Room Type</span><span class="col s1">:</span><span> Deluxe </span></p>
                                  <br>
      
                                </div>
                                <div class="clear"></div>
                                </div>
                          </div>
                        </div>
                        <div class="col s5 invoice-flight-cab-section  margin-top-8">
                          <div class="col s12 padding-0">
                            <h3 class="invoice-sub-hdg">Flight Details</h3>
                            <ul class="flight-det-sec">
                              <li class="invoice-cab-flight-det">NA</li>
                            </ul>
                          </div>
                          <div class="col s12 padding-0">
                            <h3 class="invoice-sub-hdg">Cab Details</h3>
                            <p class="invoice-cab-flight-det"></p><p>Tavera/Similar</p><p></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <h3 class="invoice-sub-hdg">Inclusion/Exclusion</h3>
                          <div class="col s10 padding-0">
                            <div class="invoice-inc-sec col s6 padding-0">
                              <ul class="col s12 padding-0 invoice-inclusion-hdg">
                                  <li>
                                      <span class="icon sprite-agent sprite-inclusion-icon"></span>
                                      <p>Meal plan</p>
                                      <ul class="invoice-inclusion-sub-hdg">
                                          <li>Breakfast<p></p></li>
                                          <li>Dinner<p></p></li>
                                      </ul>
                                  </li>
                                  <li>
                                          </li><li><span class="icon sprite-agent sprite-inclusion-icon"></span><p>Type of TransportTavera/ Similar</p></li>
                                          <li><span class="icon sprite-agent sprite-inclusion-icon"></span><p>Government Taxes/VAT/ Service Charges</p></li>
                                          <li><span class="icon sprite-agent sprite-inclusion-icon"></span><p>Cab for sightseeingTavera/ Similar</p></li>
                                          <li><span class="icon sprite-agent sprite-inclusion-icon"></span><p>Siteseeing As per itinerary</p></li>
                                          <li><span class="icon sprite-agent sprite-inclusion-icon"></span><p>Hotel3 Star</p></li>
                                  
                                  <li>
                                      <span class="icon sprite-agent sprite-inclusion-icon"></span>
                                      <p>Airport/Railway Station Transfer</p>
                                      <ul class="invoice-inclusion-sub-hdg">
                                          <li>Arrival<p>Katra Railway Station</p></li>
                                          <li>Departure<p>Katra Railway Station</p></li>
                                      </ul>
                                  </li>
                                  <li>
                                      <span class="icon sprite-agent sprite-inclusion-icon"></span>
                                      <p>Others</p>
                                      <ul class="invoice-inclusion-sub-hdg">
                                          <li>Other Inclusions<p>On Arrival 01 room for Refreshment.
      Only Breakfast on Day 01.
      Accommodation using 01 double and 01 triple room.
      Breakfast and Dinner on 30 and 31 March.
      Tavera/ Similar
      Government Taxes/VAT/ Service Charges 
      Cab for sightseeing (Tavera/similar) 
      Siteseeing (As per the itinerary.) 
      Hotel (3 star) 
      Railway Station Transfer : 
      Arrival (Katra railway station) 
      Departure (Katra railway station) 
      Toll taxes, driver allowances, parking charges. 
      All taxes &amp; Gst. 
      Cab Ex Katra to Ex Katra. 
      Sightseeing (as per itinerary) 
      Vehicle is not on sharing basis.)</p></li>
                                      </ul>
                                  </li>
                              </ul>
                            </div>
                            <div class="invoice-exl-sec col s6 padding-0">
                              <ul class="col s12 padding-0 invoice-inclusion-hdg">
                                <li>
                                    <span class="icon sprite-agent sprite-exclusion-icon"></span>
                                    <p>Meal plan</p>
                                    <ul class="invoice-inclusion-sub-hdg">
                                      <li> <p>Lunch </p></li>
                                    </ul>
                                </li>
                                <li>
                                      </li><li><span class="icon sprite-agent sprite-exclusion-icon"></span> <p>Flight </p></li>
                                      <li><span class="icon sprite-agent sprite-exclusion-icon"></span> <p>Entry fee charges </p></li>
                                      <li><span class="icon sprite-agent sprite-exclusion-icon"></span> <p>Shikara Ride </p></li>
                                
                                <li>
                                    <span class="icon sprite-agent sprite-exclusion-icon"></span>
                                    <p>Others</p>
                                    <ul class="invoice-inclusion-sub-hdg">
                                      <li> <p>Other Exclusions Lunch
      Flight 
      Entry fee charges 
      Shikara Ride (for 1 hour) 
      Others : Other Exclusions (Lunch. 
      Air/Train tickets. 
      Additional sightseeing. 
      Any extra heating arrangements. 
      Room service. 
      Cab for Betaab valley, Aru, Chandanwari, Baisaran. 
      Garden entrance fee. 
      Guide services. 
      Personal expenditure. 
      Guide charges. 
      Snow jeep from Tangmarg to Gulmarg if required. 
      Any joy ride. 
      Any kind of insurance.)</p></li>
                                    </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <div class="section-title">
                    <h3>Deliverables</h3>
                  </div>
                  <div class="content-box-inner">
                    <div class="requirment-detail">
                      <div class="row">
                        <div class="col s5">
                          <div class=" col s12 divider-box payment-list padding-0">
                            <ul class="requirement-list">
                              <li class="deliver-text">From Agent <span>(within 4 Days of Payment)</span></li>
                            </ul>
                          </div>
      
                              <div class="divider-box">
                          <ul class="requirement-list">
                            <li>
      
                              <ul class="invoice-payment del-list col s12 padding-0">
                                      <li>Hotel Vouchers</li>
                                      <li>Cab/Driver Details (*Before Trip Start Date)</li>
                              </ul>
                            </li>
                              </ul>
                          </div>
      
      
      
                        </div>
      
                        <div class="col s5 padding-0">
                          <div class=" col s12 divider-box payment-list padding-0">
                            <ul class="requirement-list">
                              <li class="deliver-text">Document(s) required from Traveler</li>
                            </ul>
                          </div>
                          <div class=" col s12 divider-box payment-list padding-0">
                            <ul class="requirement-list">
                              <li>
                                <ul class="invoice-payment del-list col-12 padding-0">
                                        <li>Scanned copy of flights and tickets</li>
                                        <li>Screen shot of payment( when done- specially for NEFT Payment)</li>
                                </ul>
                              </li>
                            </ul>
                          </div>
      
                        </div>
      
                      </div>
                    </div>
                  </div>
                  <!-- 3rd section -->
      
                  <div class="section-title">
                    <h3>NEFT Transfer Details</h3>
                  </div>
                  <div class="content-box-inner" id="neft-detail-div">
                    <div class="requirment-detail">
                      <div class="row">
                        <div class="col s10">
                          <div class="col s12 padding-0">
                            <p class="col s12 padding-0 neft-text-info">To make payment via RTGS or NEFT or IMPS, use the bank details listed below:</p><br>
                              <p class="col s12 padding-0 neft-text-info">
                                INR Account Details
                              </p>
                              <table class="neft-info-table" cellspacing="0" cellpadding="0" align="center">
                                <tbody><tr class="">
                                  <td valign="top">Name of the Beneficiary</td>
                                  <td valign="top" class="padding-7">Holiday Triangle Travel Private Limited</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Account No.</td>
                                  <td valign="top" class="padding-7">003105028460</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">IFSC Code</td>
                                  <td valign="top" class="padding-7">ICIC0000031</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Bank</td>
                                  <td valign="top" class="padding-7">ICICI Bank</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Branch</td>
                                  <td valign="top" class="padding-7">K-1 Senior Mall, Sector-18 Noida</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Account Type</td>
                                  <td valign="top" class="padding-7">
                                    Current
                                  </td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Swift Code</td>
                                  <td valign="top" class="padding-7">
                                    ICICINBBCTS
                                  </td>
                                </tr>
                              </tbody></table>
                            <br>
                              <p class="col s12 padding-0 neft-text-info">
                                INR Account (payment via RTGS or NEFT) Details
                              </p>
                              <table class="neft-info-table" cellspacing="0" cellpadding="0" align="center">
                                <tbody><tr class="">
                                  <td valign="top">Name of the Beneficiary</td>
                                  <td valign="top" class="padding-7">Holiday Triangle Travel Private Limited</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Account No.</td>
                                  <td valign="top" class="padding-7">HTPL1006180015</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">IFSC Code</td>
                                  <td valign="top" class="padding-7">ICIC0000104</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Bank</td>
                                  <td valign="top" class="padding-7">ICICI Bank</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Branch</td>
                                  <td valign="top" class="padding-7">1st Floor Empire Complex 414 S B Marg, Mumbai, Maharashtra</td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Account Type</td>
                                  <td valign="top" class="padding-7">
                                    Current
                                  </td>
                                </tr>
                                <tr class="">
                                  <td valign="top">Swift Code</td>
                                  <td valign="top" class="padding-7">
                                    ICICINBBCTS
                                  </td>
                                </tr>
                              </tbody></table>
                            <br>
                          </div>
                          <p class="col s12 padding-0 neft-text-info">Please add Booking ID: 2331908 in remarks and email us the screenshot or transaction receipt to track your payment confirmation.
                          <br>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
      
                 <div id="container-for-tc-1" class="container-for-tc mainConTncBanner col s12">
                  <button id="myBtn" class="termsbtnmain">Terms and Conditions</button>
                           <!-- The Modal -->
      <div id="myModaltnc" class="modal modalpopuptncshow">
      
        <!-- Modal content -->
        <div class="modal-content poptnccontent">
           <div class="modal-body popup-for-tc">
                 <div id="myModaltnc">
          <div id="popidfortc">
            <div class="innercontainer-for-tc">
               <h2 class="tag-headline-for-tc"> Terms &amp; Conditions <span class="closetnc btnclosefortc" data-dismiss="modal"></span></h2>
            </div><!-- innercontainer-for-tc -->
            <div class="tabs-tc-container">
               <button class="btnformaintc activeBtn" onclick="travelertag('traveltraingletc')">T&amp;C of TravelTriangle</button>
                <button class="btnformaintc" onclick="travelertag('travelagenttc')">T&amp;C of Travel Agent</button>
            </div><!-- tabs-tc-container -->
      
            <div id="traveltraingletc" class="travelsection">
              <p class="content-for-traveltc">
          Cancellation Service Charge: INR 500 per person</p>
      
            <p class="content-for-traveltc"></p><ul><li>Convenience Fee is a one-time non-refundable charge. </li><li>An additional charge of INR 1000 per person will be levied in case of cancellation due to non-payment of installment amount as per the payment schedule</li><li>TravelTriangle never promotes direct to agent payments. If your Agent prompts it for the same, please immediately bring it to the notice of TravelTriangle. If you make any such payment, it shall be solely at your risk and responsibility.</li><li>The Traveler shall strictly adhere to the agreed payment schedule. In case of non-adherence of the same, TravelTriangle may provide a maximum extension of three days upon specific written request of the Traveler at its sole and absolute discretion</li><li>In case of non-compliance of payment terms, Travel Triangle reserves the right to cancel the booking.</li><li>Traveltriangle’s Responsibility: TravelTriangle merely provides a technology platform being a marketplace intermediary for booking of services and products and the ultimate liability rests on the respective Travel Agent and/ or Service Provider for its execution/ performance and not TravelTriangle.</li><li>Any amendments/additions to package (dates, inclusions, itinerary etc), will be done at an extra cost to the customer. Changes made to the package will be made as per cancellation policy of the original package and customer has to bear the cost incurred due to this.</li><li>Travel Triangle does not encourage changes and modifications to online bookings once they are made. However, facilitation of changes related to postponement or rescheduling of the already booked package is the sole discretion of the Travel agent under permitted circumstances. Travel Triangle shall not be held liable for any impact due to change in original itinerary by the traveler and this is subject to mutual agreement and discussion between traveler and travel agent.</li><li>The Traveler shall be processed refund after adjustment of the all applicable charges as per concerned policies of TravelTriangle and Travel Agent.</li><li>Cancellation amount/charges will be calculated as per total booking amount, irrespective of whether full booking amount has been paid or not.</li><li>100% amount needs to be paid for flight tickets in advance for issuance of tickets; If flight fare has increased/decreased by the time payment reaches us, then the same shall be borne by the client and the quotation would be revised accordingly.</li><li>Any change in the itinerary post booking whether inclusions or exclusions, as the case may be shall be the prerogative of the Customer in agreement with his Travel Agent. Hence, any disputes related thereto including but not limited to refunds etc. shall be the responsibility of your Travel Agent. TravelTriangle shall not be liable.</li><li>Please remember that all special requests like early check-In, late check-out, smoking room, non-smoking room, views, floors, king bed, twin bed, adjoining and/or interconnecting rooms are strictly subject to availability upon arrival and same cannot be guaranteed prior.</li><li>Cost of expenses of personal nature at the place of stay, such as laundry, telephone calls, room service, alcoholic beverages, mini bar etc. not mentioned in the inclusions will have to be borne by the traveler.</li><li>For SIC (i.e. shared) transfers, please reach SIC pick up spot at least 10 minutes prior to actual timing- any delay by passenger in reporting on time may lead to loss of service and will not be refundable by Travel Triangle/travel agent.</li><li>The itinerary is designed in a manner so that all the sightseeings/activities may be enjoyed sufficiently and they are covered within the stipulated time period. It is advised that travelers follow the advise of agent/driver and manage their time well. If a few or more sightseeings are missed due to extension of stay over the advised time-period at a particular attraction, then the driver/agent/Travel Triangle may not be held liable for the same.</li><li>Customers can not change the itinerary during the trip unless the same has been pre-informed and assented by the travel agent and /or Travel Triangle.</li><li>Travel Triangle does not guarantee the hotel services and food quality. However, we suggest that in case of any concerns, kindly inform the travel agent immediately so that timely action may be taken.</li><li>Travel Triangle/travel agent do not take guarantee for any services revoked from the hotel without prior notice.</li><li>Travel Triangle shall not be liable for any losses incurred by the travelers due to violation of rules of local government.</li><li>In case on any currency fluctuations or amendment in local Government taxes, Travel Triangle reserves the right to adjust the tour price accordingly.</li><li>For meals included in the package as part of sightseeing/activity, the menu is preset and specific choice of meal may not be available.</li><li>Travel Triangle/travel agent is not liable for the care of personal items of travelers during the trip. Any loss or damage of any valuable items like mobile, tab, gold etc is purely customer responsibility.</li><li>Customers should take responsibility of their own luggage. Cab drivers do not provide porter services and cannot be held liable for any such loss.</li><li>Vouchers provided by the travel agent against the booking need to be verified by the traveler and any discrepancy should be brought to notice within 24 hours from the date of receipt of the vouchers.</li><li>Force Majure : In case of force majeure cases (such as curfew, riots etc), Travel Triangle shall not be liable for any losses made thereof. Circumstances amounting to “force majeure” include any event which we or the supplier of the service(s) in question could not even with all due care, foresee or forestall such as (by way of example and not by way of limitation) war, threat of war, riot, civil strife, industrial dispute, terrorist activity, natural or nuclear disaster, fire, acts of God, adverse weather conditions, and all similar events</li><li>In case local attractions are closed for maintenance/weather conditions/government orders/strike/curfew/natural calamity/other unforeseen reasons, Travel Triangle/travel agent will try its best to reimburse the traveler appropriate amount against the same in case refund is possible. However, Travel Triangle/travel agent are not obligated for the same and cannot be held liable against it.</li><li>(A) The Traveler hereby acknowledge that the following shall be the responsibility of the Travel Agent towards the Traveler. In case of failure on the part of the Travel Agent in doing so, Travel Triangle shall not be held liable in any manner. And hence, Travel Triangle shall not be required to entertain any such concern raised by the Customer/ Traveler: <br>i) to deposit Tax Collected at Source (TCS) and thereafter, issue a certificate to that effect to the Traveler. <br>ii) to raise and provide a Goods &amp; Services Tax (GST) Invoice and deposit GST to the appropriate authority of Government of India. <br></li><li>With regard to (A) above, the Traveler hereby acknowledge that it shall be his responsibility to provide required documents like PAN, Aadhaar etc. as may be required from time to time. Failure to do so by the Traveler is subject to penalty imposed by the government and travel agent over and above the T&amp;C of cancellation. </li><li>In the view of dynamic external environment, you are required to stay abreast of all guidelines/ flight timing changes/ adherence requirements as per government norms and policies. It shall be your responsibility to keep a track of such announcements and changes along with the adherence of the same. Traveltriangle will have no responsibility in case of failure or lapses from your end.</li><li>The service of Traveltriangle being a marketplace is limited to connecting travelers to travel agents, should the travelers need further assistance beyond this from Traveltriangle which could include but not limited to booking, fulfillment, and on-trip assistance, we recommend you opt-in for the TravelTriangle Care Scheme. </li><li>In case you are to make a direct payment to the agent partner than to Traveltriangle's account before your trip has begun, you are required to take due approval from payment.authorisation@traveltriangle.com . Traveltriangle will hold no responsibility on fulfillment of the trip or money paid in case of failure to get an approval.</li><li>You acknowledge and understand that refund may be made in the form of a credit note/ voucher such that it may be used for future travel subject to terms applicable thereon or may be done in cash. In all cases, mode of refund (credit note or cash) is dependent upon the Travel Agent and/ or Service Provider along with Traveltriangle as the case may be.</li><br> </ul>		<p></p>
      
      
               <p class="content-for-traveltc"></p><ul>
      <li>Standard check-in timings of hotels are 12 pm and check-out is 11 am. Early check-in and late check-out will be available as per hotel availability and hotel rules</li>
      <li>Car/driver details will be provided 1 day prior to travel start date</li>
      <li>It is mandatory to carry a valid photo identity card for hotel stay (Passport/Driving License/Voter ID card/Aadhar card)</li>
      <li>Bookings will only be considered confirmed if first payment has been paid in Travel Triangle account by any of the various modes provided on Travel Triangle website. In all other cases, Travel Triangle will not be liable for any bookings made</li>
      </ul>
               <p></p>
      
               <p class="content-for-traveltc"></p><ul>
      <li>Air Conditioning in car will not be provided in hilly areas, unless mentioned in inclusions specifically.</li>
      <li>Volvo seats generally do not have numbers. Any requests for seat preference should be made before confirming the booking and should be mentioned in inclusions clearly.</li>
      <li>In case any hotel is non-operational, Travel Triangle/Booking Agent reserves the right to change the hotel to next best option available.</li>
      </ul>
                  <p></p>
            </div><!-- traveltraingletc -->
      
                <div id="travelagenttc" class="travelsection" style="display:none">
                  <p class="content-for-traveltc">
                    </p><p>Minimum Cancellation is Rs. 1000.00 Per head Per Tour. 15 days before Check in Date 25% of the package amount. 10 days before Check in Date 50% of the package amount 07 days before Check in Date 100% Retention. No refund or any changes will be accepted at last minute for tour starting or after starting or middle of the tour. Above are the cancellation rules but we will put our best possible effort to waive/minimize the cancellation charges NOTE : Any cost arising due to natural calamities like, landslides, road blockage, political disturbances (strikes), etc (to be borne by the client, which is directly payable on the spot).</p>
                  <p></p>
                </div><!-- travelagenttc -->
      
            <div class="static-div-fortc">
            <p>By making payment for this invoice, you agree to have read and accept our <a href="https://traveltriangle.com/tnc" target="_blank"> Terms &amp; conditions</a></p>
            </div><!-- static-div-fortc -->
      
          </div><!-- popup-for-t&c -->
        </div><!-- overlay-layer-for-t&c -->
          </div><!-- modal-body -->
      
        </div>
      
      </div>
      
      
      
      <script>
   
      
      </script>
      
                     </div>
      
                </div>
              </div>
              <div class="col s3" id="right-sidebar">
                <div class="sidebar-box content-box" id="traveler-detail">
                  <div class="box-title clear-fix">
                    <h2 class="fl">Traveller Details</h2>
                  </div>
      
                  <div class="content-box-inner p_l_r30 clear-fix">
                    <div class="traveler-detail-holder">
                      <ul>
                        <li class="user-name">
                          <div class="user-avatar">
                          <span class="sprite-agent sprite-back-ground-person-4"></span>
      
                          </div>
                          <div class="user-name-meta">
                            <h3>Spaul<span class="country sprite-agent sprite-flagnew-india">
                          </span>
                              <!-- <span class="user-score">(Score : 3.4/5)</span> -->
                            </h3>
                          </div>
                        </li>
                      </ul>
      
                      <ul class="txt-list style1 invoice-travel">
                        <li><span class="left-txt left-text1">Travellers</span>
                          <span class="right-txt right-text1">5 Adults<br>0 Children</span>
                        </li>
      
                        <li><span class="left-txt left-text1">Destination</span>
                          <span class="right-txt right-text1">Katra</span></li>
                        <li><span class="left-txt left-text1">Duration</span>
                          <span class="right-txt right-text1">4  Days</span></li>
                        <li><span class="left-txt left-text1">Starting Date </span>
                          <span class="right-txt right-text1">29 Mar 2018</span></li>
                        <li><span class="left-txt left-text1">Flight Schedule</span>
                          <span class="right-txt right-text1">NA</span></li>
      
      
                      </ul>
      
                    </div>
                  </div>
      
                </div>
      
      
              </div>  
          </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js" integrity="sha512-eP6ippJojIKXKO8EPLtsUMS+/sAGHGo1UN/38swqZa1ypfcD4I0V/ac5G3VzaHfDaklFmQLEs51lhkkVaqg60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="../Js/main.js"></script>
    
</body>
</html>

