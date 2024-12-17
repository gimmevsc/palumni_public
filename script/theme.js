const changeTheme=()=>{
    // const root = document.querySelector('.root')
    // 
    const sun_url =  "./assets/sun.svg";
    const moon_url =  "./assets/moon.svg";

    const root = document.querySelector('body');
    const icons = document.querySelectorAll('.theme-icon');

    if(root.classList.contains("black")){
        for(let icon of icons) icon.src = sun_url;
        root.classList.remove("black")
        sessionStorage.setItem("theme","light")
    }else{
        for(let icon of icons)icon.src = moon_url;
        root.classList.add("black")
        sessionStorage.setItem("theme","dark")
    }
}

// Check if the user prefers dark mode

const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

if(sessionStorage.getItem("theme") === "dark"){
    changeTheme();
}else if(prefersDarkScheme && sessionStorage.getItem("theme") !== "light"){
    changeTheme();
}


