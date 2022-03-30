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
dataFilter.limit=1;
$(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
        // ajax call get data from server and append to the div
        dataFilter.limit++;
        LoadPage(HTTP_HOST + "/DuringStay/Card", this.dataFilter)
            .done(function(Response, textStatus) {
                $(".quotation-quotes-list").append(Response);
                if(Response==""){
                    dataFilter.limit--;
                }
            })
    }
});
let HTTP_HOST = $("#HTTP_HOST").val();
$(document).ready(function() {
    getFilteredDuringStayCard();
});
$('#destinationform').submit(function(event) {
    event.preventDefault()
    filterDestination(event);
})

$('#agentform').submit(function(event) {
    event.preventDefault();
    filterAgent(event);
});

let fromfilter = document.querySelectorAll('#fromfilter');
fromfilter.forEach(function(m) {
    m.addEventListener('change', function(event) {
        filterFrom(event);
    })
});


function filterDestination(e) {
    dataFilter.Destination = [];
    $("#destinationform input:checked").each(function() {
        dataFilter.Destination.push($(this).val());
    });
    $('.clearFilter')[0].style.display = 'flex';
    getFilteredDuringStayCard()
}

function filterAgent(e) {
    dataFilter.Agent = [];
    $("#agentform input:checked").each(function() {
        dataFilter.Agent.push($(this).val());
    });
    $('.clearFilter')[1].style.display = 'flex';
    getFilteredDuringStayCard();
}

function filterFrom(e) {
    dataFilter.From = "";
    dataFilter.From = e.target.value;
    $('.clearFilter')[2].style.display = 'flex';
    getFilteredDuringStayCard();
}

let clearfirterbtns = document.querySelectorAll('.clearFilter');
clearfirterbtns.forEach(function(btn) {
    btn.addEventListener('click', function(event) {

        switch (this.id) {
            case 'destclear':
                dataFilter.Destination = []
                $('.clearFilter')[0].style.display = 'none';
                clearfilterCheckbox("#destinationform");
                getFilteredDuringStayCard()
                break;
            case 'agentclear':
                dataFilter.Agent = []
                $('.clearFilter')[1].style.display = 'none';
                clearfilterCheckbox("#agentform");
                getFilteredDuringStayCard()
                break;
            case 'from':
                dataFilter.From = ''
                $('.clearFilter')[2].style.display = 'none';
                $(".datea").val("");
                getFilteredDuringStayCard()
                break;

        }
    })
});
function clearfilterCheckbox(selecter){
    document.querySelectorAll(selecter +" input")
        .forEach(function (item){
            item.checked=false;
        })
}
function getFilteredDuringStayCard() {
    console.log(this.dataFilter)
    LoadPage(HTTP_HOST + "/DuringStay/Card", this.dataFilter)
        .done(function(Response, textStatus) {
            $(".quotation-quotes-list").html(Response);
        })
}