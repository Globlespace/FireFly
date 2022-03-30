<style>
    .col .row{
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
</style>
<div style="background-color: #EAF1F1;" class="flex flexDColumn">
        <div style="margin: 10px !important;" class="card white">

            <div class="header clearfix">
                <div class="header1">
                    <div style="display: flex; flex-direction: row;" class="displayrow">
                        <div>
                        <a style="background-color: #2a92bd;" class="btn-floating btn-small waves-effect waves-light ">{{card}}</a>
        &nbsp; &nbsp; &nbsp;
                        </div>
                        <div class="flex flexDColumn">
                            <p style="padding: 5px; margin-top: -4px; font-weight: 700; ">
                                <a href="<?= HTTP_HOST?>traveller/{{id}}" target="blank">TRIP ID {{id}}</a>
                            </p>
                            <p style="margin-top: -20px; padding: 5px;" class="fitalic pfc4 f12">Last updated 3years
                                ago</p>
                        </div>
                    </div>
                </div>
                <!-- <div style="display: flex; flex-direction: row; justify-content: end;" class="header1">
                    <button class="reviewButton--3qjxbvQ reviewtooltip--3AdARhp radius4 sfcw    fwb cursorP btn relative">
                        <small>Request CHange </small></button>
                </div> -->
            </div>
            <div style="position: relative;" class=" clearfix topBar">
                <div class="fright">
                    <div class="labelBanner ttCommisionBanner--sWep3fp mt5 mb5"><span class="f12 fitalic sfc1">TT commission: 8.5%</span>
                    </div>
                    <div class="labelBanner ttCommisionBanner--sWep3fp mt5 mb5"><span class="f12 fitalic sfc1">Amount: ₹487.5</span>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col s12">
                    <div style="padding-left: 20px !important;" class="row">
                        <div class="col s4">

                            <h4 class="f14   pfc4"><b>Name</b></h4>
                            <h3 class="f14"> <b><i>{{name}}</i></b></h3>
                        </div>
                        <div class="col s4">
                            <h4 class="f14 pfc4">Quotation Price</h4>
                            <h3 class="f14"> <b>Rs. {{price}}</b></h3>
                        </div>
                        <div class="col s4">

                        <h4 class="f14   pfc4">Destination</h4>
                        <h3 class="f14"> <b>{{destination}}</b></h3>
                        </div>
                        <div class="col s4">
                        <h4 class="f14 pfc4">Duration</h4>
                        <h3 class="f14"> <b>{{duration}} Days</b></h3>
                        </div>
                        <div class="col s4">

                        <h4 class="f14   pfc4">I will book in</h4>
                        <h3 class="f14"> <b>{{i_will_book_in}}</b></h3>
                        </div>
                        <div class="col s4">
                        <h4 class="f14 pfc4">No. of People</h4>
                        <h3 class="f14"> <b>{{adults}} adults {{children}} children </b></h3>
                        </div>
                        <div class="col s4">
                        <h4 class="f14 pfc4">Preferred time to call</h4>
                        <h3 class="f14"> <b>{{prefered_time_to_call}}</b></h3>
                        </div>
                       
                    </div>
                    
                </div>
               
            </div>

        </div>
       
    </div>