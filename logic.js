
 view();

var form = document.querySelector('form');
var inputText = document.getElementById('horoscope-inputText');
var save = document.getElementById('horoscope-btn');
var read = document.getElementById("horoscope-read-btn");
var del = document.getElementById("horoscope-delete-btn");
var update = document.getElementById("horoscope-update-btn");

console.log(del);


/* xhr.upload.addEventListener('load', function (e) {
    console.log("Load ")

}, false); */
save.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    let formData = new FormData(form)
    // formData.set("date", x)  
    xhr.open('POST', './server/addHoroscope.php', true);
    xhr.send(formData);
    view();

})

//Read
function view(){
    
    let xhr = new XMLHttpRequest();

    let formData = new FormData(form)
    xhr.open('GET', './server/viewHoroscope.php', true);
    xhr.send(formData);
    xhr.onreadystatechange = function(){
        var horoscopeText = document.getElementById('horoscope-text');
        
        //console.log(horoscopeText);
        if(xhr.readyState == 4 && xhr.status == 200){
            var return_data = xhr.responseText;
            console.log(return_data);
            /* if(false.toString() == "false")
            {
                console.log("false")
            } */
            if(return_data === 'false'){
                horoscopeText.innerHTML= "";
            }
            /* else if(return_data.toString()  === 'false'){
                horoscopeText.innerHTML= "";
            } */
            else{
                horoscopeText.innerHTML= return_data;
            }
        }
}

}

//DELETE

del.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    let formData = new FormData(form)
    xhr.open('DELETE', './server/deleteHoroscope.php', true);
    xhr.send(formData);
    xhr.onreadystatechange = function(){
        var horoscopeText = document.getElementById('horoscope-text');
        console.log(horoscopeText);
        if(xhr.readyState == 4 && xhr.status == 200){
            horoscopeText.innerHTML= " ";
        }
} 
})

//Update
update.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    
    if(inputText.value != ""){ 
        
        let formData = new FormData(form)
        formData.append('_method', 'POST');
        console.log(formData);
        xhr.open('POST', './server/updateHoroscope.php', true); 
        xhr.send(formData)
        xhr.onreadystatechange = function(){
            var horoscopeText = document.getElementById('horoscope-text');
            console.log(horoscopeText);
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText == 0){
                    horoscopeText.innerHTML= "";
                    return;
                }
                else if(xhr.responseText == ""){
                    horoscopeText.innerHTML= "";
                    return;
                }
                else{
                    horoscopeText.innerHTML= xhr.responseText;
                }
            }
    }
}
    else{
        console.log("Enter Date")
    }

   
})


