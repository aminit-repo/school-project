var source;
if(typeof(EventSource) !== "undefined") {
    // Yes! Server-sent events support!
    /*source = new EventSource("demo_sse.php");
    source.onmessage = function(event) {
    document.getElementById("result").innerHTML += event.data + "<br>"; 
} */
} else {
    // Sorry! No server-sent events support..
     alert('does not support sse');
}