/* function post() {
    //let url = "./server/addHoroscope.php";
   // let method = "POST";
    let x = document.getElementById("horoscope-inputText").value;
    document.getElementById("horoscope-inputText").value = "";
} */
//console.log(x);
var form = document.querySelector('form');
var inputText = document.getElementById('horoscope-inputText');
var save = document.getElementById('horoscope-btn');
var del = document.getElementById("horoscope-delete-btn");
var read = document.getElementById("horoscope-read-btn");
var update = document.getElementById("horoscope-update-btn");
console.log(del);
console.log(save);


/* xhr.upload.addEventListener('load', function (e) {
    console.log("Load ")

}, false); */
save.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    console.log('testing..');
    e.preventDefault();
    let formData = new FormData(form)
    // formData.set("date", x)  
    xhr.open('post', './server/addHoroscope.php', true);

    xhr.send(formData);
})

//Read
read.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    let formData = new FormData(form)
    xhr.open('GET', './server/viewHoroscope.php', true);
    xhr.send(formData);
})


//DELETE

del.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    let formData = new FormData(form)
    xhr.open('DELETE', './server/deleteHoroscope.php', true);
    xhr.send(formData);
})

//Update
update.addEventListener('click', function (e) {
    let xhr = new XMLHttpRequest();
    e.preventDefault();
    if(inputText.innerHTML != ""){ 
        let formData = new FormData(form)
        xhr.open('PUT', './server/updateHoroscope.php', true);
        xhr.send(formData);
    }
    else{
        console.log("Enter Date")
    }
   
})


/*     const val = fetch(url, {
        method: method,
        body: formData
    }).then(function(response) {
        console.log(response.json())
        return response.json();
    })

    val.then(function(result) {
        console.log(result);
         callback(result)

    }).catch((err)=>{
        console.log("Error: ", err)
    })*/
//} 
