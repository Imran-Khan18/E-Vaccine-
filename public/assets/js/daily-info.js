document.addEventListener("DOMContentLoaded", function() {

    fetch('https://corona.lmao.ninja/v2/countries/bd').then(res=>res.json())
        .then(res => {
            document.getElementById("new_affected").textContent = res.todayCases;
            document.getElementById("recovered").textContent = res.todayRecovered;
            document.getElementById("death").textContent = res.todayDeaths;
        })

})
