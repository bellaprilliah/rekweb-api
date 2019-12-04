// let mahasiswa = {
//     nama: "Bella Aprillia",
//     nrp: "173040019",
//     email: "bellaah@mail.unpas.ac.id"
// }

// console.log(JSON.stringify(mahasiswa));


//jason ke objek

// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function (){
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }
// xhr.open('GET', 'coba.json', true);
// xhr.send();

//jquery

$.getJSON('coba.json', function (data) {
    console.log(data);
});