<style type="text/css">
    *{  
    font-family: "Rimouski";  
}  
  
body{  
    background-color: #293251;  
}  
  
.container{  
    width: 300px;      
    background-color: #FFF;  
      
    display: block;  
    margin: 0 auto;  
      
    border-radius: 10px;  
    padding-bottom : 50px;  
}  
  
.app-title{  
    width: 300px;  
    height: 50px;  
    border-radius: 10px 10px 0 0;  
}  
  
.app-title p{  
    text-align: center;  
    padding: 15px;  
    margin: 0 auto;  
    font-size: 1.2em;  
    color: #293251;  
}  
  
.notification{  
    background-color: #f8d7da;  
    display: none;  
}  
  
.notification p{  
    color: #721c24;  
    font-size: 1.2em;  
    margin: 0;  
    text-align: center;  
    padding: 10px 0;  
}  
  
.weather-container{  
    width: 300px;  
    height: 260px;  
    background-color: #F4F9FF;  
}  
  
.weather-icon{  
    width: 300px;  
    height: 128px;  
}  
  
.weather-icon img{  
    display: block;  
    margin: 0 auto;  
}  
  
.temperature-value{  
    width: 300px;  
    height:60px;  
}  
  
.temperature-value p{  
    padding: 0;  
    margin: 0;  
    color: #293251;  
    font-size: 4em;  
    text-align: center;  
    cursor: pointer;  
}  
  
.temperature-value p:hover{  
      
}  
  
.temperature-value span{  
    color: #293251;  
    font-size: 0.5em;  
}  
  
.temperature-description{  
      
}  
  
.temperature-description p{  
    padding: 8px;  
    margin: 0;  
    color: #293251;  
    text-align: center;  
    font-size: 1.2em;  
}  
  
.location{  
      
}  
  
.location p{  
    margin: 0;  
    padding: 0;  
    color: #293251;  
    text-align: center;  
    font-size: 0.8em;  
}  
</style>
<script type="text/javascript">


    const iconElement = document.querySelector(".weather-icon");  
    const tempElement = document.querySelector(".temperature-value p");  
    const descElement = document.querySelector(".temperature-description p");  
    const locationElement = document.querySelector(".location p");  
    const notificationElement = document.querySelector(".notification");  
      
      
    const weather = {};  
      
    weather.temperature = {  
        unit : "celsius"  
    }  
      
    const KELVIN = 273;  
      
    const key = "32570a88d5d6da78e12a826d693d1ca7";  
      
    if('geolocation' in navigator){  
        navigator.geolocation.getCurrentPosition(setPosition, showError);  
    }else{  
        notificationElement.style.display = "block";  
        notificationElement.innerHTML = "<p>Browser doesn't Support Geolocation</p>";  
    }  
      
    function setPosition(position){  
        let latitude = position.coords.latitude;  
        let longitude = position.coords.longitude;  
          
        getWeather(latitude, longitude);  
    }  
      
    function showError(error){  
        notificationElement.style.display = "block";  
        notificationElement.innerHTML = `<p> ${error.message} </p>`;  
    }  
      
    function getWeather(latitude, longitude){  
        let api = `http://api.openweathermap.org/data/2.5/weather?lat=${latitude}&lon=${longitude}&appid=${key}`;  
          
        fetch(api)  
            .then(function(response){  
                let data = response.json();  
                return data;  
            })  
            .then(function(data){  
                weather.temperature.value = Math.floor(data.main.temp - KELVIN);  
                weather.description = data.weather[0].description;  
                weather.iconId = data.weather[0].icon;  
                weather.city = data.name;  
                weather.country = data.sys.country;  
            })  
            .then(function(){  
                displayWeather();  
            });  
    }  
      
    function displayWeather(){  
        iconElement.innerHTML = `<img src="icons/${weather.iconId}.png"/>`;  
        tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;  
        descElement.innerHTML = weather.description;  
        locationElement.innerHTML = `${weather.city}, ${weather.country}`;  
    }  
      
      
    function celsiusToFahrenheit(temperature){  
        return (temperature * 9/5) + 32;  
    }  
      
    tempElement.addEventListener("click", function(){  
        if(weather.temperature.value === undefined) return;  
          
        if(weather.temperature.unit == "celsius"){  
            let fahrenheit = celsiusToFahrenheit(weather.temperature.value);  
            fahrenheit = Math.floor(fahrenheit);  
              
            tempElement.innerHTML = `${fahrenheit}°<span>F</span>`;  
            weather.temperature.unit = "fahrenheit";  
        }else{  
            tempElement.innerHTML = `${weather.temperature.value}°<span>C</span>`;  
            weather.temperature.unit = "celsius"  
        }  
    });  

    
</script>
  
            
        <div class="container">    
        
               <h1 style="background-color: blue;">Your Weather!!</h1><br>    
            <div class="app-title">    
        
        
                <p>Weather</p>    
            </div>    
            <div class="notification"> </div>    
            <div class="weather-container">    
                <div class="weather-icon">    
                    <img src="icons/unknown.png" alt="">    
                </div>    
                <div class="temperature-value">    
                    <p>- °<span>C</span></p>    
                </div>    
                <div class="temperature-description">    
                    <p> - </p>    
                </div>    
                <div class="location">    
                    <p>-</p>    
                </div>    
            </div>    
        </div>    
