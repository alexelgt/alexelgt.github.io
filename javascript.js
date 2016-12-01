var toque = {handler: function(event){}};document.ontouchstart = toque.handler;

  document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=" + newScale + "; maximum-scale=" + newScale + "; user-scalable=0;");

function ventanaemergente(id,id2,id3,id4,id5) {

window.scrollTo(0, 0);

var theDetail = document.getElementById(id);
        theDetail.style.display="block";


var theDetail = document.getElementById(id2);
        theDetail.style.display="none";

var theDetail = document.getElementById(id3);
        theDetail.style.display="none";

var theDetail = document.getElementById(id4);
        theDetail.style.display="none";

var theDetail = document.getElementById(id5);
        theDetail.style.display="block";

}