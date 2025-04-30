// side bar section
const showSideBar = document.getElementById("show-side-bar");
const hideSideBar = document.getElementById("hide-side-bar");
const sideBar  = document.getElementById("side-bar");
// side bar section

// quick section starts here
const flightFromNigeriaBtn = document.getElementById("flight-from-nigeria-btn");
const flightFromNigeriaIconUp = document.getElementById("flight-from-nigeria-icon-up");
const flightFromNigeriaIconDown = document.getElementById("flight-from-nigeria-icon-down");
const flightFromNigeria = document.getElementById("flight-from-nigeria");
const internationalDestinationBtn = document.getElementById("international-destination-btn");
const internationalDestinationIconUp = document.getElementById("international-destination-icon-up");
const internationalDestinationIconDown = document.getElementById("international-destination-icon-down");
const internationalDestination = document.getElementById("international-destination");
const flightToCountryBtn = document.getElementById("flight-to-country-btn");
const flightToCountryIconUp = document.getElementById("flight-to-country-icon-up");
const flightToCountryIconDown = document.getElementById("flight-to-country-icon-down");
const flightToCountry = document.getElementById("flight-to-country");
// quick section ends here

// // mationality and currency section stert
// const linkStyle1 = document.getElementById("link-style-1");
// const linkStyle2 = document.getElementById("link-style-2");
// // mationality and currency section end


//     if (window.location.pathname == "currency.html") {
//         console.log("wrong fam");
//     }


//     // if (window.location.pathname === "currency.html") {
//     //     linkStyle2.style.color = "red";
//     // }

//     console.log(window.location.pathname);



// side bar functions start
showSideBar.addEventListener("click", () => {
    sideBar.style.display = "flex"
});

hideSideBar.addEventListener("click", () => {
    sideBar.style.display = "none"
});
// side bar function end

// simple or quick action section
flightFromNigeriaIconDown.style.display = "none";
internationalDestinationIconDown.style.display = "none";
flightToCountryIconDown.style.display = "none";

flightFromNigeriaBtn.addEventListener("click", () => {
    if (flightFromNigeria.style.height === "0px") {
        flightFromNigeria.style.height = "fit-content";
        internationalDestination.style.height = "0px";
        flightToCountry.style.height = "0px";
        flightFromNigeriaIconDown.style.display = "flex";
        flightFromNigeriaIconUp.style.display = "none";
        // international destination
        internationalDestinationIconDown.style.display = "none";
        internationalDestinationIconUp.style.display = "flex";
        // flight to country
        flightToCountryIconDown.style.display = "none";
        flightToCountryIconUp.style.display = "flex";
        // inter
        flightFromNigeria.style.transition = "width 0.5s ease, height 0.5s ease";
    } else {
        flightFromNigeria.style.height = "0px";
        flightFromNigeriaIconDown.style.display = "none";
        flightFromNigeriaIconUp.style.display = "flex";
    }
});

// internationalDestinationIconUp.style.display = "none";
internationalDestinationBtn.addEventListener("click", () => {
    if (internationalDestination.style.height === "0px") {
        internationalDestination.style.height = "fit-content";
        flightFromNigeria.style.height = "0px";
        flightToCountry.style.height = "0px";
        internationalDestinationIconDown.style.display = "flex";
        internationalDestinationIconUp.style.display = "none";
        // covering up ends meet
        flightFromNigeriaIconDown.style.display = "none";
        flightFromNigeriaIconUp.style.display = "flex";
         // flight to country
         flightToCountryIconDown.style.display = "none";
         flightToCountryIconUp.style.display = "flex";
        // coverin gup ends meet
        internationalDestination.style.transition = "width 0.5s ease, height 0.5s ease";
    } else {
        internationalDestination.style.height = "0px";
        internationalDestinationIconDown.style.display = "none";
        internationalDestinationIconUp.style.display = "flex";
    }
});

// flightToCountryIconUp.style.display = "none";
flightToCountryBtn.addEventListener("click", () => {
    if (flightToCountry.style.height === "0px") {
        flightToCountry.style.height = "fit-content";
        internationalDestination.style.height = "0px";
        flightFromNigeria.style.height = "0px";
        flightToCountryIconDown.style.display = "flex";
        flightToCountryIconUp.style.display = "none";
        // international destination
        internationalDestinationIconDown.style.display = "none";
        internationalDestinationIconUp.style.display = "flex";
        // covering up ends meet
        flightFromNigeriaIconDown.style.display = "none";
        flightFromNigeriaIconUp.style.display = "flex";
        // coverd ends meet
        flightToCountry.style.transition = "width 0.5s ease, height 0.5s ease";
    } else {
        flightToCountry.style.height = "0px";
        flightToCountryIconDown.style.display = "none";
        flightToCountryIconUp.style.display = "flex";
    }
});

  