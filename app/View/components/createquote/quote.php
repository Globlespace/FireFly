
<div class="card">
    <input value="{{id}}" type="hidden" class="cq_id">
    <div class="enquiryheader">
        <a style="background-color: #2a92bd;" class="btn-floating btn-small waves-effect waves-light ">{{card}}</a>
        &nbsp; &nbsp; &nbsp;
        <button style="background-color: #2a92bd;" cq_id="{{id}}" class="waves-effect waves-light btn trigger confirm"    data-question="Are you sure you want to discard this quote?">{{Active}}</button>
        &nbsp; &nbsp; &nbsp;
        
        <a target="_blank" style="border-bottom: 1px solid #2a92bd; color: #2a92bd;" href="<?=HTTP_HOST?>traveller/{{id}}">TRIP ID {{id}}</a>
        <?php include "Include/createquotebtn.php" ?>
    </div>
    <div class="enquirybody">
        <div class="endiv">
            <small>Name</small>
            <b>{{name}}</b>
            &nbsp
            <small>Destination</small>
            <b>{{destination}}</b>
            &nbsp
            <small>Phone number</small>
            <b>{{contact_number}}</b>
            &nbsp
            <small>Flight</small>
            <b>{{flight}}</b>
            &nbsp
            <small>Tour Type</small>
            <b>{{tour_type}}</b>
        </div>
        <div class="endiv">
            <small>Explorer</small>
            <b>{{explorer}}</b>
            &nbsp
            <small>Duration</small>
            <b>{{duration}}</b>
            &nbsp
            <small>Departure</small>
            <b>{{departure}}</b>
            &nbsp
            <small>Email</small>
            <b>{{email}}</b>
            &nbsp
            <small>Cab</small>
            <b>{{cab}}</b>
            &nbsp
            <small>Type of Package</small>
            <b>{{type_of_package}}</b>
        </div>
        <div class="endiv">
            <small>No of People</small>
            <b>{{adults}} adults and {{children}} children</b>
            &nbsp
            <small>Budget</small>
            <b>{{budget}}</b>
            &nbsp
            <small>Hotel category</small>
            <b>{{hotel_category}} star</b>
            &nbsp
            <small>I will book in?</small>
            <b>{{i_will_book_in}}</b>
        </div>
        <div class="endiv">
            <small>Departure Date</small>
            <b>{{departure_date}}</b>
            &nbsp
            <small>Preferred Time To Call</small>
            <b>{{prefered_time_to_call}}</b>
            &nbsp
            <small>Driver Language</small>
            <b>{{driver_language}}</b>
            &nbsp
            <small>Additional Details</small>
            <b>{{Additional_Details}}</b>
        </div>

    </div>
    <div class="enquiryfooter">
        <div style="display: flex; width: 181px;  justify-content: space-around;" class="tourist">
            <h6>Agent Name: </h6>{{agent}}
        </div>
    </div>
</div>
<script>

</script>