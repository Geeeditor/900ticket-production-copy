
    let homes = document.querySelectorAll("#home");
    let regionLanguages = document.querySelectorAll("#region-language");
    let currencys = document.querySelectorAll("#currency");
    let regionLanguagesInner = document.querySelectorAll("#region-language-inner");
    let currencysInner = document.querySelectorAll("#currency-inner");

    // mationality and currency section stert
    let linkStyle1 = document.getElementById("link-style-1");
    let linkStyle2 = document.getElementById("link-style-2");
    // mationality and currency section end

    const currentPath = window.location.pathname;

    // flight hotel and others section
    let flightLink = document.querySelectorAll("#flight-link");
    let hotelLink = document.querySelectorAll("#hotel-link");
    let clubLink = document.querySelectorAll("#club-link");
    let sportLink = document.querySelectorAll("#sport-link");

    // flight inner links
    let oneWay = document.querySelectorAll("#one-way");
    let roundTrip = document.querySelectorAll("#round-trip");
    let multiCity = document.querySelectorAll("#multi-city");

    // flight link styles
    let flightLink1 = document.getElementById("flight-link1");
    let flightLink2 = document.getElementById("flight-link2");


    // search link section
    let flyingFrom = document.querySelectorAll("#search-link");

    // flight page side bae that pops up from under the screen
    let underSideBarLink1 = document.querySelectorAll(".under-side-bar-link1");
    let underSideBar = document.querySelectorAll(".under-sideBar");

    // same side bar but cancle section
    let cancleUnderSideBar = document.querySelectorAll(".cancle-under-sideBar");

    // texting something
    let testing1 = document.querySelectorAll(".testing1");
    let testing2 = document.querySelectorAll(".testing2");
    let testing3 = document.querySelectorAll(".testing3");
    let testing4 = document.querySelectorAll(".testing4");

    // booking-search-page under side bar links

    let fullOption = document.querySelectorAll("#full-option");
    let showAvailFlight = document.querySelectorAll(".available-flight-sorting");
    let fullOptionClose = document.querySelectorAll("#full-option-close");
    // flight stop section
    let flightStop = document.querySelectorAll("#flight-stop");
    let showFlightStop = document.querySelectorAll(".flight-stop");
    let flightStopClose = document.querySelectorAll("#flight-stop-close");
    // flight time section
    let flightTime = document.querySelectorAll("#flight-time");
    let showFlightTime = document.querySelectorAll(".flight-time");
    let flightTimeClose = document.querySelectorAll("#flight-time-close");
    // flight price section
    let flightPrice = document.querySelectorAll("#flight-price");
    let showFlightPrice = document.querySelectorAll(".flight-price");
    let flightPriceClose = document.querySelectorAll("#flight-price-close");


    homes.forEach(home => {
        home.href = "../index.html";
    });


// regional language and currency links starts here
    // regionLanguages.forEach(regionLanguage => {
    //     regionLanguage.href = "html/region-language.html";
    //     if (currentPath.includes(regionLanguage.getAttribute("href"))) {
    //         linkStyle1.classList.add("active")
    //     }
    // });


    // currencys.forEach(currency => {
    //     currency.href = "html/currency.html";
    //     if (currentPath.includes(currency.getAttribute("href"))) {
    //         linkStyle2.classList.add("active")
    //     }
    // })

    // regional language an dcurrency inner link
    // regionLanguagesInner.forEach(regionLanguage => {
    //     regionLanguage.href = "region-language.html";
    //     if (currentPath.includes(regionLanguage.getAttribute("href"))) {
    //         linkStyle1.classList.add("active")
    //     }
    // });

    // currencysInner.forEach(currency => {
    //     currency.href = "currency.html";
    //     if (currentPath.includes(currency.getAttribute("href"))) {
    //         linkStyle2.classList.add("active");
    //     } ;
    // });
// regional language and currency links ends here

// flightLink.forEach(flight => {
//     flight.href = "html/flight.html";
// })


/* ---------- flight inner link starts here -------*/
oneWay.forEach(link => {
    link.href = "flight.html";
    if (currentPath.includes(link.getAttribute("href"))) {
        flightLink1.classList.add("flight-active");
        flightLink1.style.backgroundColor = "brown";
        link.style.color = "white";
    } ;
})

roundTrip.forEach(link => {
    link.href = "roundTrip.html";
    if (currentPath.includes(link.getAttribute("href"))) {
        flightLink2.classList.add("flight-active");
        flightLink2.style.backgroundColor = "brown";
        link.style.color = "white";
    } ;
})

flyingFrom.forEach(link => {
    link.href = "search.html";
});

underSideBarLink1.forEach(link => {
    link.addEventListener("click", () => {
        underSideBar.forEach(sideBar => {
            sideBar.style.display = "block";
        })
    })
})

cancleUnderSideBar.forEach(link => {
    link.addEventListener("click", () => {
        underSideBar.forEach(sideBar => {
            sideBar.style.display = "none";
        })
    })
})

testing1.forEach(test => {
    test.addEventListener("click", () => {
        test.style.backgroundColor = "brown";
        test.style.color = "white";
        testing2.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing3.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing4.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
    })
})

testing2.forEach(test => {
    test.addEventListener("click", () => {
        test.style.backgroundColor = "brown";
        test.style.color = "white";
        testing1.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing3.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing4.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
    })
})

testing3.forEach(test => {
    test.addEventListener("click", () => {
        test.style.backgroundColor = "brown";
        test.style.color = "white";
        testing2.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing1.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing4.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
    })
})

testing4.forEach(test => {
    test.addEventListener("click", () => {
        test.style.backgroundColor = "brown";
        test.style.color = "white";
        testing2.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing3.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
        testing1.forEach(test => {
            test.style.backgroundColor = "white";
            test.style.color = "black";
        })
    })
})

fullOption.forEach(link => {
    link.addEventListener("click" , () => {
        showAvailFlight.forEach(flightSideBar => {
            flightSideBar.style.display = "block";
        })
    })
})

fullOptionClose.forEach(link => {
    link.addEventListener("click" , () => {
        showAvailFlight.forEach(flightSideBar => {
            flightSideBar.style.display = "none";
        })
    })
})

// flight stop section
flightStop.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightStop.forEach(flightSideBar => {
            flightSideBar.style.display = "block";
        })
    })
})

flightStopClose.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightStop.forEach(flightSideBar => {
            flightSideBar.style.display = "none";
        })
    })
})

// flight time section
flightTime.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightTime.forEach(flightSideBar => {
            flightSideBar.style.display = "block";
        })
    })
})

flightTimeClose.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightTime.forEach(flightSideBar => {
            flightSideBar.style.display = "none";
        })
    })
})

// flight price section
flightPrice.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightPrice.forEach(flightSideBar => {
            flightSideBar.style.display = "block";
        })
    })
})

flightPriceClose.forEach(link => {
    link.addEventListener("click" , () => {
        showFlightPrice.forEach(flightSideBar => {
            flightSideBar.style.display = "none";
        })
    })
})
