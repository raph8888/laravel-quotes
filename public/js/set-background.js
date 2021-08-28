var today = new Date();

var idx = Math.floor((today.getHours()));

var time = today.getHours() + ":" + today.getMinutes();

const node = document.createTextNode(time);


var body = document.getElementsByTagName("body")[0];
var time_tag = document.getElementsByClassName("time")[0];

body.className = "heaven-" + idx;
time_tag.appendChild(node);
