var typingInterval = null, removingInterval = null;
var letterIndex = 0, stringIndex = 0;
    var mottos = [
        'mathematics and phylosophy',
        'economics and statistics'
    ];
$(document).ready(function() {
    startTypingInterval();
});

function startTypingInterval() {
    typingInterval = setInterval(function() {
        var currentText = $('#slider-dynamic-content').text();
        currentText += mottos[stringIndex][letterIndex];
        $('#slider-dynamic-content').text(currentText);
        letterIndex++;
        if(currentText.length == mottos[stringIndex].length) {
            letterIndex = 0;
            stringIndex++;
            if(mottos.length == stringIndex) {
                stringIndex = 0;
            }
            clearInterval(typingInterval);
            setTimeout(function() {
                startRemovingInterval();       
            }, 500);
        }
    }, 150);
}

function startRemovingInterval() {
    removingInterval = setInterval(function() {
        var currentText = $('#slider-dynamic-content').text();
        currentText = currentText.substring(0, currentText.length - 1);
        $('#slider-dynamic-content').text(currentText);
        if(currentText.length == 0) {
            clearInterval(removingInterval);
            setTimeout(function() {
                startTypingInterval()
            }, 250);
        }
    }, 50);   
}