if (checkUrl()) {
  var url = window.location.href.split('=');
  window.history.pushState("", "", '/'+ url[1] +'');
}else{
  window.history.pushState("", "", '/welcome');
}

function checkUrl(){
  if (window.location.href.indexOf('=') > 0) {
    return true;
  }else{
    return false;
  }
}
