
// calling API from config js
const NFLId = config.API_KEY;

// Globally variable - Getting element to insert the data afterwards
var nflData = document.getElementById('nfl-data');

// Getting data from api
const getData = async () => {
    try {
        // fetching data
        const res = await fetch(`http://delivery.chalk247.com/team_list/NFL.JSON?api_key=${NFLId}`);
        const data = await res.json();

        // checking to see if hash is included before sending the data
        if(data.hash){
            // Sending data to main function
            main(data.results.data);          
        }
        
        // Error handling
    } catch (err) {
        console.log("Server Error");
    }
}

getData();


// Showing API data after event clicking by "Choosing your conference"
function main(data) {

    // event clicking
    document.getElementById('nfc').addEventListener('click', () => {
            nflData.innerHTML = "";
            data.team.forEach(data => {
                if(data.conference === "National Football Conference"){
                    blockElement(data);                    
                }
            });
    });

    // event clicking
    document.getElementById('afc').addEventListener('click', () => {
        nflData.innerHTML = "";
        data.team.forEach(data => {
            
            if(data.conference === "American Football Conference"){
                blockElement(data);
            }
        });
});
   

}

// Every block in front end after the event has been clicked
function blockElement(data) {
    nflData.innerHTML += `
        <div class="relative bg-gray-700 bg-opacity-80 rounded-lg">
            <img class="md:w-9/12 sm:w-11/12 mx-auto" src="http://localhost:10010/wp-content/uploads/2021/08/${data.display_name.replace(/\s/g, '-')}-${data.nickname.replace(/\s/g, '-')}.webp" alt="${data.display_name} ${''} ${data.nickname}" /> 
            <h5 class="font-mono my-2 px-2 text-center">${data.display_name} ${''} ${data.nickname}</h5>
            <p class="absolute top-2 right-2 text-xs  rounded-lg" style="padding:7px">${data.division}</p>
        </div>  `;
}
