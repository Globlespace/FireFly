const LoadPage = ($url, $data = {}) => {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
        beforeSend: function() {
            loading()
        },
        complete:function () {
            loaded()
        }
    });
}

var dataFilter = {};

let HTTP_HOST = $("#HTTP_HOST").val();
$(document).ready(function() {
    LoadPage(HTTP_HOST + "quotationFollowUp/Card", dataFilter)
        .done(function(Response, textStatus) {
            $(".quotation-quotes-list").html(Response);
        })
        .fail(function(jqXHR, textStatus) {
            alert("Page Not Found " + textStatus);
        });
});

function textAreaAdjust(element) {
    element.style.height = "1px";
    element.style.height = (element.scrollHeight) + "px";
    $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
}

$('#destinationform').submit(function(event) {
    event.preventDefault()
    filterDestination(event);
})

$('#agentform').submit(function(event) {
    event.preventDefault();
    filterAgent(event);
});

let clearfirterbtns = document.querySelectorAll('.clearFilter');
clearfirterbtns.forEach(function(btn) {
    btn.addEventListener('click', function(event) {

        switch (this.id) {
            case 'destclear':
                dataFilter.Destination = [];
                $('.clearFilter')[0].style.display = 'none';
                clearfilterCheckbox("#destinationform");
                getFilteredQuotationFollowUpCard();
                break;
            case 'agentclear':
                dataFilter.Agent = [];
                $('.clearFilter')[1].style.display = 'none';
                clearfilterCheckbox("#agentform");
                getFilteredQuotationFollowUpCard();
                break;
            case 'monthclear':
                dataFilter.Month = '';
                $('.clearFilter')[2].style.display = 'none';
                getFilteredQuotationFollowUpCard();
                break;
            case 'leadtypeclear':
                dataFilter.LeadType = '';
                $('.clearFilter')[3].style.display = 'none';
                getFilteredQuotationFollowUpCard();
                break;
            case 'followedup':
                dataFilter.FollowedUp = '';
                $('.clearFilter')[4].style.display = 'none';
                getFilteredQuotationFollowUpCard();
                break;
            case 'followedupeligibiltyclear':
                dataFilter.FollowUpEligibility = '';
                $('.clearFilter')[5].style.display = 'none';
                getFilteredQuotationFollowUpCard();
                break;

            case 'specialleadsclear':
                dataFilter.SpecialLeads = ''
                $('.clearFilter')[6].style.display = 'none';
                getFilteredQuotationFollowUpCard()
                break;
            case 'tripstageclear':
                dataFilter.TripStage = ''
                $('.clearFilter')[7].style.display = 'none';
                getFilteredQuotationFollowUpCard()
                break;
            default:
                break;
                // code block
        }
    })
});

function clearfilterCheckbox(selecter){
    document.querySelectorAll(selecter +" input")
        .forEach(function (item){
            item.checked=false;
        })
}

let month = document.querySelectorAll('#monthsfilter li');
month.forEach(function(m) {
    m.addEventListener('click', function(event) {
        filterMonth(event);
    })
});

let followedup = document.querySelectorAll('#FollowedUp li');
followedup.forEach(function(fp) {
    fp.addEventListener('click', function(event) {
        filterFollowup(event);
    })
});

let specialleads = document.querySelectorAll('#specialleads li');
specialleads.forEach(function(fp) {
    fp.addEventListener('click', function(event) {
        filterSpecialLeads(event);
    })
});

let tripstage = document.querySelectorAll('#TripStage li');
tripstage.forEach(function(fp) {
    fp.addEventListener('click', function(event) {
        filterTripStage(event);
    })
});

let followedupeligibilty = document.querySelectorAll('#FollowedUpEligibility li');
followedupeligibilty.forEach(function(fp) {
    fp.addEventListener('click', function(event) {
        filterFollowupEligibility(event);
    })
});

let leadtype = document.querySelectorAll('#LeadType li')
leadtype.forEach(function(lt) {
    lt.addEventListener('click', function(event) {
        filterLead(event)
    })
});

function filterDestination(e) {
    dataFilter.Destination = [];
    $("#destinationform input:checked").each(function() {
        dataFilter.Destination.push($(this).val());
    });
    $('.clearFilter')[0].style.display = 'flex';


    getFilteredQuotationFollowUpCard();

}

function filterAgent(e) {
    dataFilter.Agent = [];
    $("#agentform input:checked").each(function() {
        dataFilter.Agent.push($(this).val());
    });
    $('.clearFilter')[1].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

function filterMonth(e) {
    dataFilter.Month = "";
    dataFilter.Month = e.target.getAttribute("value");
    $('.clearFilter')[2].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

function filterLead(e) {
    dataFilter.LeadType = "";
    dataFilter.LeadType = e.target.getAttribute("value")

    $('.clearFilter')[3].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

function filterFollowup(e) {
    dataFilter.FollowedUp = "";
    dataFilter.FollowedUp = e.target.getAttribute("value")

    $('.clearFilter')[4].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

function filterFollowupEligibility(e) {
    dataFilter.FollowUpEligibility = "";
    dataFilter.FollowUpEligibility = e.target.getAttribute("value")

    $('.clearFilter')[5].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

function filterSpecialLeads(e) {
    dataFilter.SpecialLeads = "";
    dataFilter.SpecialLeads = e.target.getAttribute("value")

    $('.clearFilter')[6].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}

/*function filterTripStage(e) {
    dataFilter.TripStage = "";
    dataFilter.TripStage = e.target.getAttribute("value")

    $('.clearFilter')[7].style.display = 'flex';
    getFilteredQuotationFollowUpCard();
}*/



function getFilteredQuotationFollowUpCard() {

    LoadPage(HTTP_HOST + "/quotationFollowUp/Card", this.dataFilter)
        .done(function(Response, textStatus) {
            $(".quotation-quotes-list").html(Response);
        })
}
getFilteredQuotationFollowUpCard();