const countdown = document.querySelector('.countdown');
const today_date = document.querySelector('.today_date');
const  greeting = document.querySelector('.greeting');

greeting.style.color = '#17a2b8';
today_date.style.color = '#17a2b8';

//intv to update every second Update every second
const intvl = setInterval(() => {
    const time_now = new Date();
    const time_date = time_now.toDateString();
    const time_hours = time_now.getHours();
    const time_mins = time_now.getMinutes();
    const time_secs = time_now.getSeconds();
    var time_greet  = '';
    
    if (time_hours == 1 && time_hours < 6) {
        time_greet = "How is the night going. It's";
    }
    if (time_hours == 6 || time_hours < 12){
        time_greet = "Good Morning. It's";
    }
    else if (time_hours == 12 || time_hours < 17) {
         time_greet = "Good Afternoon. It's";
    }
    else if (time_hours == 17 || time_hours < 20) {
         time_greet = "Good Evening. It's";
    }
    else if (time_hours == 20 || time_hours < 24) {
         time_greet = "Good Night. It's";
    }
    



    //Display Results
    greeting.innerHTML = `
    <div><h1>${time_greet} </h1></div>
    `;


    //Display Results
    today_date.innerHTML = `
    <div><h1>${time_date}</h1></div>
    `;


    countdown.innerHTML = `
    <div>${time_hours}<span></span></div>
    <div>${time_mins}<span></span></div>
    <div>${time_secs}<span></span></div>
    
    `;



}, 1000);

