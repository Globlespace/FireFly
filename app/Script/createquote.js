function launch_toast(text, iconname) {

    var x = document.getElementById("toast")
    var y = document.getElementById("img")
    y.innerHTML = '<i class="material-icons">' + iconname + '</i>'
    var z = document.getElementById("desc")
    z.innerText = text
    x.className = "show";
    setTimeout(function() {
        x.className = x.className.replace("show", "");
    }, 5000);
}
class ConfirmBox {
    wrapper = "";
    target = ""
    constructor(ok, cancel) {
        this.create(ok, cancel)
    }
    create(ok, cancel) {
        if (document.querySelector("#confirm-wrapper") === null) {
            this.wrapper = document.createElement("div");
            this.wrapper.id = "confirm-wrapper";
            var html = "<div id='confirm-box'><h2 id='confirm-header'></h2>";
            html += "<div id='confirm-buttons'><button id='confirm-ok'>OK</button><button type='button' id='confirm-cancel'>Cancel</button></div>";
            html += "</div>";
            this.wrapper.innerHTML = html;
            document.body.appendChild(this.wrapper);
        } else {
            this.wrapper = document.querySelector("#confirm-wrapper");
        }
        this.layout(this.wrapper);
        self = this;
        $(this.wrapper).find("#confirm-ok").on("click", function() {
            self.hide(self);
            ok();
        });
        $(this.wrapper).find("#confirm-cancel").on("click", function() {
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
        setTimeout(function() {
            self.wrapper.style.display = "none";
        }, 500);
    }
}
const LoadPage = ($url, $data = {}) => {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    });
}

var dataFilter = {
    'Destination': [],
    'Agent': [],
    'Month': '',
    'LeadType': ''
};
let HTTP_HOST = $("#HTTP_HOST").val();
$(document).ready(function() {
    LoadPage(HTTP_HOST + "createquote/quote", dataFilter)
        .done(function(Response, textStatus) {
            $(".quotes-list").html(Response);

        })
        .fail(function(jqXHR, textStatus) {
            alert(jqXHR.responseText);

        });
});

function textAreaAdjust(element) {
    element.style.height = "1px";
    element.style.height = (element.scrollHeight) + "px";
    pageadjest();
}

function pageadjest() {
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
                dataFilter.Destination = []
                $('.clearFilter')[0].style.display = 'none';
                clearfilterCheckbox("#destinationform");
                getFilteredQuote()
                break;
            case 'agentclear':
                dataFilter.Agent = []
                $('.clearFilter')[1].style.display = 'none';
                clearfilterCheckbox("#agentform");
                getFilteredQuote()
                break;
            case 'monthclear':
                dataFilter.Month = ''
                $('.clearFilter')[2].style.display = 'none';
                getFilteredQuote()
                break;
            case 'leadtypeclear':
                dataFilter.LeadType = ''
                $('.clearFilter')[3].style.display = 'none';
                getFilteredQuote()
                break;
            default:
                break;
                // code block
        }
    })
});
let month = document.querySelectorAll('#monthsfilter li');
month.forEach(function(m) {
    m.addEventListener('click', function(event) {
        filterMonth(event);
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


    getFilteredQuote();

}

function filterAgent(e) {
    dataFilter.Agent = [];
    $("#agentform input:checked").each(function() {
        dataFilter.Agent.push($(this).val());
    });
    $('.clearFilter')[1].style.display = 'flex';
    getFilteredQuote();
}

function filterMonth(e) {
    dataFilter.Month = "";
    dataFilter.Month = e.target.getAttribute("value");
    $('.clearFilter')[2].style.display = 'flex';
    getFilteredQuote();
}

function filterLead(e) {
    dataFilter.LeadType = "";
    dataFilter.LeadType = e.target.getAttribute("value")
    $('.clearFilter')[3].style.display = 'flex';
    getFilteredQuote();
}

function getFilteredQuote() {
    LoadPage(HTTP_HOST + "createquote/quote", this.dataFilter)
        .done(function(Response, textStatus) {
            $(".quotes-list").html(Response);
        })
}

function getfilledQuoteform(self, id, c_q_id) {
    $.ajax({
        url: HTTP_HOST + "getfilledQuoteform/" + id + "/" + c_q_id,
        method: "GET",
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    }).done(function(Response) {
        window.scrollTo(0, 0);
        let parrent = $(".quotes-list");
        $(parrent).prepend(Response);
        pageadjest();
        $('.page').css("overflow", "hidden");
    });
}

function getQuoteform(self, id) {
    $.ajax({
        url: HTTP_HOST + "getQuoteform/" + id,
        method: "GET",
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    }).done(function(Response) {
        window.scrollTo(0, 0);
        let parrent = $(".quotes-list");
        $(parrent).prepend(Response);
        pageadjest();
        $('.page').css("overflow", "hidden");
    });
}

function SearchAlreadyGivedQuote() {
    var srch = $("#srch");
    if (srch.val().length > 0) {
        $(".srch ul").addClass("hover");
        getAlredyGivenQuote();
    } else {
        $(".srch ul").removeClass("hover");
    }

}

function getAlredyGivenQuote() {
    $.ajax({
        url: HTTP_HOST + "getAlredyGivenQuote/" + $("#srch").val(),
        method: "GET",
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    }).done(function(Response) {
        $(".srch ul").html(Response);
    });
}

function InitDiscardBox() {
    let c = new ConfirmBox(
        function(target) {
            DiscardCreateQuote($(c.target).attr("cq_id"));
        },
        function(target) {
            launch_toast("Quote is Not Discarded", "close")
        }
    )
    $(document).on("click", ".confirm", function() {
        c.Show(this, $(this).attr("data-question"));
    })
}

function DiscardCreateQuote(id) {
    $.ajax({
        url: HTTP_HOST + "DiscardCreateQuote/" + id,
        method: "DELETE",
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    }).done(function(responce) {
        if (responce.Success) {
            launch_toast(responce.Message, "check")
        } else {
            launch_toast(responce.Message, "close");
        }
        getFilteredQuote();
    }).fail(function(res) {
        console.log(res);
    });
}

function AssignAgent() {
    $(document).on("change", ".AssignAgent", function() {
        let cqid = ($(this).parents("div.card").find(".cq_id").val());
        let agent_id = $(this).val();
        let agentName = $(this).find("option:selected").text();
        $.ajax({
            url: HTTP_HOST + "AssignAgent/customerQuery/" + cqid + "/Agent/" + agent_id,
            method: "POST",
            beforeSend: function() {
                loading()
            },
            complete: function() {
                loaded()
            }
        }).done(function(responce) {
            console.log(responce.Message)
            if (responce.Success && responce.Code == 200) {
                launch_toast(`Quote Assigned To ${agentName}`, "check");
            } else if (responce.Success && responce.Code == 201) {
                launch_toast("Quote Removed", "close");
            }
        }).fail(function(res) {
            console.log(res);
        });;
    })
}
InitDiscardBox();
AssignAgent();

/*********************************give Quote form*************************/
function initQuoteForm() {
    var parent = document.getElementById("form-main")
    $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
    //here i am grabbing form as a parent
    $("#addDay").on("click", function() {
        $(parent).children().last().find(".clearday").remove();
        let lastdayid = $(".days").last().attr('id');
        lastdayid = lastdayid == undefined ? "0" : lastdayid;
        lastdayid = lastdayid.charAt(lastdayid.length - 1);
        lastdayid = parseInt(lastdayid) + 1
            //here i am creating parent div for new day to be added
        let Day = document.createElement('div');
        Day.id = 'Day-' + lastdayid;
        //adding styles to that div
        Day.classList.add('row')
        Day.classList.add('days')
        Day.classList.add('Day-' + lastdayid)
        Day.setAttribute("day", "Day-" + lastdayid);
        Day.style.width = '100%'
        Day.style.padding = '10px'

        //creating heading for new day

        let heading = document.createElement('h5')
        heading.style.margin = '5px'
        heading.innerText = "Day-" + lastdayid

        // creating first part first row

        Day.appendChild(heading)
        Day.innerHTML +=
            '<div style="margin: 6px" class="col md">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control  onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<input required="required" class="h2 gg-bound-control-input" id="destinationpointinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
            ' <div class="gg-bound-control-label">Destination Point</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col md">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<input required="required" class="h2 gg-bound-control-input" id="hotelnameinput" type="text" spellcheck="false" autocomplete="off" autocapitalize="none" name="Hotelname">' +
            ' <div class="gg-bound-control-label">Hotel Name</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col xsm">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class=" qff gg-bound-control-wrapper">' +
            '<select  id="roomtypecheckbox" name="RoomType">' +
            '<option value="0">Room Type</option>' +
            '<option value="1">Standard</option>' +
            '<option value="2">Deluxe</option>' +
            '<option value="3">Super Deluxe</option>' +
            '<option value="4">Luxurious</option>' +
            '</select>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px" class="col xsm">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class=" qff gg-bound-control-wrapper">' +
            '<select  id="hotelratingcheckbox" name="HotelRating">' +
            '<option value="0">Hotel rating</option>' +
            '<option value="1">1 Star</option>' +
            '<option value="2">2 Star</option>' +
            '<option value="3">3 Star</option>' +
            '<option value="4">4 Star</option>' +
            '<option value="5">5 Star</option>' +
            '</select>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div style="margin: 6px;" class="xsm col">\n' +
            '                                            <div class="contine">\n' +
            '                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add(\'active-gg-bound-control\')">\n' +
            '                                                    <div class="gg-bound-control-outer">\n' +
            '                                                        <div class="gg-bound-control-inner">\n' +
            '                                                            <div class="gg-bound-control-wrapper">\n' +
            '                                                                <div id="DayInclusions" onclick="checkList(this)" class="dropdown-check-list" tabindex="100">\n' +
            '                                                                    <span class="anchor">Inclusions</span>\n' +
            '                                                                    <ul id="dayInclusions" class="items">\n' +
            '                                                                        <li><input id="BreakfastChecked" name="BreakFast" type="checkbox" />Breakfast </li>\n' +
            '                                                                        <li><input id="DinnerChecked" name="Dinner" type="checkbox" />Dinner</li>\n' +
            '                                                                    </ul>\n' +
            '                                                                </div>\n' +
            '                                                            </div>\n' +
            '                                                            <div class="gg-bound-control-df-bottom-border"></div>\n' +
            '                                                            <div class="gg-bound-control-ef-bottom-border"></div>\n' +
            '                                                        </div>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>' +
            ' <div style="margin: 6px;" class="full col">\n' +
            '                                            <div class="contine">\n' +
            '                                                <div class="gg-bound-control" data-bound-control onclick="this.classList.add(\'active-gg-bound-control\')">\n' +
            '                                                    <div class="gg-bound-control-outer">\n' +
            '                                                        <div class="gg-bound-control-inner">\n' +
            '                                                            <div class="gg-bound-control-wrapper">\n' +
            '                                                                <input id="itenaryheading" required="required" class="h2 gg-bound-control-input"/>\n' +
            '                                                                <div class="gg-bound-control-label">Itenary Heading</div>\n' +
            '                                                            </div>\n' +
            '                                                            <div class="gg-bound-control-df-bottom-border"></div>\n' +
            '                                                            <div class="gg-bound-control-ef-bottom-border"></div>\n' +
            '                                                        </div>\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>' +
            '<div style="margin: 6px" class="full col">' +
            '<div class="contine">' +
            '<div class="gg-bound-control" data-bound-control onclick="this.classList.add(' + "'active-gg-bound-control'" + ')">' +
            ' <div class="gg-bound-control-outer">' +
            '<div class="gg-bound-control-inner">' +
            '<div class="gg-bound-control-wrapper">' +
            '<textarea  required="required" id="itenarytextarea"  rows="1" onmousemove="pageadjest()" onkeyup="textAreaAdjust(this)" class="h2 gg-bound-control-input" style="width: 50% !important;"></textarea>' +
            ' <div class="gg-bound-control-label">Itenary</div>' +
            '</div>' +
            ' <div class="gg-bound-control-df-bottom-border"></div>' +
            '<div class="gg-bound-control-ef-bottom-border"></div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

        parent.appendChild(Day);
        $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
        $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
        $('.page').css("overflow", "hidden");
    });
    $("textarea").each(function(index, element) {
        textAreaAdjust(element);
    })
    $(document).on("click", ".close", function() {
        this.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
        $('.page').height("unset");
        $('.page').css("overflow", "unset");
    });

}

function sendQuote() {
    let HTTP_HOST = $("#HTTP_HOST").val();
    let days = {}
    days.inclusions = $("#inclusionstextarea").val();
    days.exclusions = $("#exclusionstextarea").val();
    days.dateofjourney = $("#Dateofjourney").val()
    days.halfbooking = $("#halfprice").val()
    days.c_q_id = $('#c_q_id').val();
    days.flight = $('#flightinput').val();
    days.vehicleType = $('#cabinput').val();
    days.totalprice = $("#totalprice").val();
    let send = false;
    $(".days").each(function(index, day) {
            let destinationinpt = $(day).find("#destinationpointinput").val();
            let hotelname = $(day).find("#hotelnameinput").val();
            let hotelroomtypechecked = $(day).find("#roomtypecheckbox").val();
            let hotelratingchecked = $(day).find("#hotelratingcheckbox").val();
            let breakfastchecked = $(day).find("#BreakfastChecked").is(":checked");
            let Dinnerchecked = $(day).find("#DinnerChecked").is(":checked");
            let itenaryheading = $(day).find("#itenaryheading").val()
            let itenary = $(day).find("#itenarytextarea").val();

            data = {
                "day": $(day).attr("day"),
                "destinationPoint": destinationinpt,
                "hotelName": hotelname,
                "hotelRoomType": hotelroomtypechecked,
                "breakfast": breakfastchecked,
                "dinner": Dinnerchecked,
                "hotelRating": hotelratingchecked,
                "itenary": itenary,
                "itenaryheading": itenaryheading

            }
            days[$(day).attr("day")] = data;
            if (destinationinpt.length <= 0) {
                launch_toast("Destination is required", "close");
                $(day).find("#destinationpointinput").focus();
                send = false;
                return false;
            } else if (hotelname.length <= 0) {
                launch_toast("Hotelname is required", "close");
                $(day).find("#hotelnameinput").focus();
                send = false;
                return false;
            } else if (hotelratingchecked.length <= 0 || hotelratingchecked == 0) {
                launch_toast("Hotel Type is required", "close");
                $(day).find("#hotelratingcheckbox").focus();
                send = false;
                return false;
            } else if (hotelroomtypechecked.length <= 0 || hotelroomtypechecked == 0) {
                launch_toast("Room Type is required", "close");
                $(day).find("#roomtypecheckbox").focus();
                send = false;
                return false;
            }
            // else if ((Dinnerchecked.length <= 0 || Dinnerchecked == 0) ||(breakfastchecked.length <= 0 || breakfastchecked == 0) ) {
            //     launch_toast("Atleast one item in itenary should be checked", "close");
            //     $(day).find("#daysInclusion").focus();
            //     send = false;
            //     return false;
            // }
            else if (days.inclusions.length <= 0) {
                launch_toast("inclusions is required", "close");
                $(day).find("#inclusionstextarea").focus();
                send = false;
                return false;
            } else if (days.exclusions.length <= 0) {
                launch_toast("exlusions is required", "close");
                $(day).find("#exclusionstextarea").focus();
                send = false;
                return false;
            } else if (itenary.length <= 0) {
                launch_toast("itenary is required", "close");
                $(day).find("#itenarytextarea").focus();
                send = false;
                return false;
            } else if (itenaryheading.length <= 0) {
                launch_toast("itenaryheading is required", "close");
                $(day).find("#itenaryheading").focus();
                send = false;
                return false;
            } else if (days.flight.length <= 0) {
                launch_toast("flight is required", "close");
                $('#flightinput').focus();
                send = false;
                return false;
            } else if (days.vehicleType.length <= 0) {
                launch_toast("vehicleType is required", "close");
                $('#cabinput').focus();
                send = false;
                return false;
            } else if (days.totalprice.length <= 0) {
                launch_toast("Total Quotation Price is required", "close");
                $("#totalprice").focus();
                send = false;
                return false;
            } else if (days.halfbooking.length <= 0) {
                launch_toast("Advanced Quotation Price is required", "close");
                $("#halfprice").focus();
                send = false;
                return false;
            } else if (days.dateofjourney.length <= 0) {
                launch_toast("Date Of Journey is required", "close");
                $("#halfprice").focus();
                send = false;
                return false;
            } else {
                send = true;
            }

        })
        // console.log(days)
    if (send) {
        sendQuoteFormData(HTTP_HOST + "giveQuotation", days)
            .done(function(Response, textStatus) {
                console.log(Response);
                //if (Response.Success == true) {
                if (true) {
                    launch_toast(Response.Message, 'check');
                    getFilteredQuote();
                    let PDF = Response.PDF;
                    let NAME = Response.NAME;
                    let url = "https://wa.me/" + Response.Phone + "?text=Dear " + NAME + ", Please check the quote and let us know if any changes required. Link - " + HTTP_HOST + "app/PDF/" + PDF + " Thanks";

                    window.open(url, "blank")
                } else {
                    launch_toast(Response.Message, 'close');
                }
            })
            .fail(function(jqXHR, textStatus) {
                alert(jqXHR.responseText);
            });
    }
}

function sendQuoteFormData($url, $data = {}) {
    return $.ajax({
        url: $url,
        method: "POST",
        data: $data,
        beforeSend: function() {
            loading()
        },
        complete: function() {
            loaded()
        }
    });
}

function clearDay(e) {
    var parent = document.getElementById("form-main")
    e.parentElement.remove();
    $(parent).children().last().prepend('<a style="margin-top: -10px; cursor:pointer; " onclick="clearDay(this)" title="" class="clearday"><i class="fas fa-times close-btn"></i></a>');
    $('.page').height(($(".give_quote").outerHeight() + 75) + "px");
    $('.page').css("overflow", "hidden");
}

function checkList(checkList) {
    /*var checkLists = document.querySelectorAll('.dropdown-check-list');
    checkLists.forEach(function (checkList){*/
    checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
            if (checkList.classList.contains('visible'))
                checkList.classList.remove('visible');
            else
                checkList.classList.add('visible');
        }
        /* })*/

}

function clearfilterCheckbox(selecter){
    document.querySelectorAll(selecter +" input")
        .forEach(function (item){
            item.checked=false;
        })
}