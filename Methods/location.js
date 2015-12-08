function maPosition(position) {
  document.getElementById("lattitude").value = position.coords.latitude;
  document.getElementById("longitude").value = position.coords.longitude;
 //window.location.href="?latitude="+position.coords.latitude+"&longitude="+position.coords.longitude;
}

function getPosition(){
 if(navigator.geolocation){
 navigator.geolocation.getCurrentPosition(maPosition);
 }
}