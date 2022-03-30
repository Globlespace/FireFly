
function getLastWeek() {
    var today = new Date();
    var lastWeek = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 7);
    var lastWeekMonth = lastWeek.getMonth() + 1;
    var lastWeekDay = lastWeek.getDate();
    var lastWeekYear = lastWeek.getFullYear();
    var lastWeekDisplayPadded = ("00" + lastWeekDay.toString()).slice(-2) + "/" + ("00" + lastWeekMonth.toString()).slice(-2) + "/" + ("0000" + lastWeekYear.toString()).slice(-4);

    return lastWeekDisplayPadded;
}

function getCurrentWeek() {
    var today = new Date();
    var currentWeak = new Date(today.getFullYear(), today.getMonth(), today.getDate());
    var currentWeakMonth = currentWeak.getMonth() + 1;
    var currentWeakDay = currentWeak.getDate();
    var currentWeakYear = currentWeak.getFullYear();
    var currentWeakDisplayPadded = ("00" + currentWeakDay.toString()).slice(-2) + "/" + ("00" + currentWeakMonth.toString()).slice(-2) + "/" + ("0000" + currentWeakYear.toString()).slice(-4);

    return currentWeakDisplayPadded;
}

function getLastMonth() {
    var myVariable = new Date()
    var makeDate = new Date(myVariable);
    makeDate.setMonth(makeDate.getMonth() - 1);
    var lastMonthDay = makeDate.getDate()
    var lastMonthYear = makeDate.getFullYear()
    var lastMonthdate = ("00" + lastMonthDay.toString()).slice(-2) + "/" + ("00" + (makeDate.getMonth() - 1).toString()).slice(-2) + "/" + ("0000" + lastMonthYear.toString()).slice(-4)
    var CurrentMonthday = ("00" + makeDate.getDate().toString()).slice(-2) + "/" + ("00" + makeDate.getMonth().toString()).slice(-2) + "/" + ("0000" + makeDate.getFullYear().toString()).slice(-4)

    return lastMonthdate + " |   " + CurrentMonthday
}

function displaydate(id) {
    if (id === "yesterday") {
        var d = new Date();

        d = ("00" + (d.getDate() - 1).toString()).slice(-2) + "/" + ("00" + d.getMonth().toString()).slice(-2) + "/" + (d.getFullYear().toString()).slice(-4)
        return d
    } else if (id === "lastweek") {
        var lastWeekDisplayPadded = getLastWeek()
        var currentWeakDisplayPadded = getCurrentWeek()


        return (lastWeekDisplayPadded + "  |  " + currentWeakDisplayPadded)
    } else if (id === "lastmonth") {
        var lastMonth = getLastMonth()
        return (lastMonth)
    }
}


$(document).ready(function() {
    $('.convdiv').click(function(event) {
        $(this).toggleClass('active');
        $(this).siblings().removeClass('active');
        var date = displaydate(event.target.id);
        $('.dateparagraph').text(date)
    });
});
$(document).ready(function() {

    $(".dropdown-trigger").dropdown();
})

$("#dropdown1").focusout(function() {
    $('#dropdown1').hide();
});
$(document).ready(function() {
    $('select').formSelect();
})


for (const option of document.querySelectorAll(".select-wrapper")) {
    option.addEventListener('click', function() {
        this.querySelector('.select').classList.toggle('open');
    })
}

for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener('click', function() {
        if (!this.classList.contains('selected')) {
            this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
            this.classList.add('selected');
            this.closest('.select').querySelector('.select__trigger span').textContent = this.textContent;
        }
    })
}
for (const option of document.querySelectorAll('.collection-item')) {
    option.addEventListener('mouseenter', function(e) {

    })
}

for (const option of document.querySelectorAll('.collection-item')) {
    option.addEventListener('click', function() {
        // alert("hi")
    })
}
$(document).ready(function() {
    $('.modal').modal();
});
$(document).ready(function() {
    $('.collapsible').collapsible();
});

for (const option of document.querySelectorAll('.collapsible-header')) {
    option.addEventListener('click', function() {
        option.classList.add('myclass')
        const i = option.querySelector('.material-icons')
        const newi = document.createElement('i')
        newi.classList.add('material-icons')
        newi.text = 'clear'
        option.replaceChild(i, newi)

    })

}
$('.collapsible-header').on('click', function() {
    if ($(this).find('i').text() == 'add') {
        $(this).find('i').text('remove');
    } else {
        $(this).find('i').text('add');
    }
});

function removeicon() {
    var i = document.querySelector('.atag')




}

function addicon() {

}
$('.removelead').on('mouseenter', function() {
    $('.customdrp').toggleClass('hide')
})


function sendQuoteWhatsappRedirect() {
    var download_urls = { "9048137": "https://trvt.in/0jsWHoBkP" };
    var quote_id = $(".active-quote").attr('data-quote');
    if (typeof quote_id == 'undefined')
        quote_id = 9048137;
    var quote_link = download_urls[quote_id];
    var url = "https://web.whatsapp.com/send?phone=+919871554457&text=Dear Ashwani Kumar, Please check the quote and let us know if any changes required. Link - " + quote_link + " . Thanks"
    window.open(url, '_blank');
}

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

function ask_for_review(edit) {
    var params = {};
    params["trip_id"] = 5058547;
    if (edit == true) {
        params["edit"] = true;
    }
    $.get("/agents/v2/ask_for_review/", params, function(response, status) {
        if (response.data.Success) {
            alert(response.data.Message);
        } else {
            alert("Failed to perform the operation. Please try again later.");
        }
    });
}


// Ask for review
$("#tripAskForReview").click(function() {
    ask_for_review(false);
});

// Request Change
$("#tripRequestChange").click(function() {
    ask_for_review(true);
});


$(document).ready(function() {
    // Accordian.
    $('.leadTimelineCardActive').last().addClass('cardOpen currentStage');
    $('.cardTrigger').each(function() {
        if ($(this).parents('.leadTimelineCard').hasClass('leadTimelineCardActive')) {
            $(this).click(function() {
                if ($(this).parents('.leadTimelineCard').hasClass('cardOpen')) {
                    $(this).parents('.leadTimelineCard').removeClass('cardOpen');
                } else {
                    $('.leadTimelineCard').removeClass('cardOpen'); // Accordian Part
                    $(this).parents('.leadTimelineCard').addClass('cardOpen');
                }
            });
        }
    });
    /*
    setTimeout(function(){
        $('.leadTimelineCardActive').last().removeClass('currentStage');
     }, 8000);
    */

});

var maxLength = 80;
var y = document.querySelectorAll('.noteMessage');
for (var i = 0; i < y.length; i++) {
    var x = y[i].innerText;
    if (x.length > maxLength) {
        var newStr = x.substring(0, maxLength);
        var removedStr = x.substring(maxLength, x.length);
        var addStr = "<span>" + newStr + " <span class='js-readMore' onclick='readMore(this)'>read more</span></span><span class='js-readMoreH'>" + removedStr + " <span class='js-readLess' onclick='readLess(this)'>read less</span></span>"
        var htmlObject = document.createElement('P');
        htmlObject.innerHTML = addStr;
        y[i].innerHTML = '';
        y[i].append(htmlObject);
    }
}

function readMore(e) {
    e.parentNode.parentNode.querySelector('.js-readMoreH').style.display = 'inline';
    e.parentNode.parentNode.querySelector('.js-readMore').style.display = 'none';
}

function readLess(e) {
    e.parentNode.parentNode.querySelector('.js-readMoreH').style.display = 'none';
    e.parentNode.parentNode.querySelector('.js-readMore').style.display = 'inline';
}

var modal = document.getElementById('myModaltnc');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("closetnc")[0];



window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(".btnformaintc").click(function() {
    $('.btnformaintc.activeBtn').removeClass("activeBtn");
    $(this).addClass("activeBtn");
});


$(document).bind('keydown', function(e) {
    if (e.which == 27) {
        $(".modalpopuptncshow").hide();
    }
});



function travelertag(tcmainsection) {
    var iterationTabs;
    var xtravelsection = document.getElementsByClassName("travelsection");

    for (iterationTabs = 0; iterationTabs < xtravelsection.length; iterationTabs++) {
        xtravelsection[iterationTabs].style.display = "none";
    }
    document.getElementById(tcmainsection).style.display = "block";
    if (tcmainsection == 'travelagenttc') {
        _gaq.push(["_trackEvent", "Invoice_TnC_TA", "2331908"]);
    } else {
        _gaq.push(["_trackEvent", "Invoice_TnC_TT", "2331908"]);
    }
}

$('.static-div-fortc').on("click", function() {
    _gaq.push(["_trackEvent", "Invoice_cancellationpage", "2331908"]);
});

$('#myBtn').on("click", function() {
    _gaq.push(["_trackEvent", "Invoice_FV_TnC", "2331908"]);
});


$('.showdetails').on('click', function() {
    var div = document.getElementById('paymentdetaildiv');
    div.style.display = div.style.display == "none" ? "block" : "none";
})
var today = new Date().toISOString().split('T')[0];
document.querySelector(".datea").setAttribute('max', today);