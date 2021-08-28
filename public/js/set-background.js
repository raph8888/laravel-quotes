var today = new Date();

var idx = Math.floor((today.getHours()));

var day = ("0" + today.getDate()).slice(-2);

var month = ("0" + (today.getMonth() + 1)).slice(-2);

var hours = today.getHours();

var minutes = (today.getMinutes()<10?'0':'') + today.getMinutes();

var time = day + "/" + month + " - " + hours + ":" + minutes;

const node = document.createTextNode(time);


var body = document.getElementsByTagName("body")[0];
var time_tag = document.getElementsByClassName("time")[0];

body.className = "heaven-" + idx;
time_tag.appendChild(node);
