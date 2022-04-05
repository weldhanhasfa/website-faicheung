var tenth = '';

function ninth() {
    if (document.all) {
        (tenth);

        return false;
    }
}

function twelfth(e) {
    if (document.layers || (document.getElementById && !document.all)) {
        if (e.which == 2 || e.which == 3){
            (tenth);
            return false;
        }
    }
}

if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    Document.onmousedown = twelfth;
} else {
    document.onmouseup = twelfth;
    document.oncontextmenu = ninth;
}
document.oncontextmenu = new Function('return false');