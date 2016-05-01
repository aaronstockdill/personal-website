function simulateKeyPress(character) {
    $('#current-input').append(character);
}

var type = function(string) {
    var i = 0;
    function loop() {
        simulateKeyPress(string[i]);
        i++;
        if (i < string.length) {
            setTimeout(loop, 150);
        } else {
            setTimeout(function(){
                listener({which: 13});
            }, 500);
        }
    }
    loop();
}

$(document).ready(function(){
    type("help");
})
