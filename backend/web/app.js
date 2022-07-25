$(document).ready(function () {
    'use strict';
    $('#videoFile').change((ev) => { // videoFile - selector
        console.log("changed");
        $(ev.target).closest('form')[0].submit()
    });
});