/*
Template Name: Shreyu - Responsive Bootstrap 5 Admin Dashboard
Author: CoderThemes
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: email Innbox init js
*/

$(document).ready(function(){
    $(".chat-close").click(function(e){
        e.preventDefault();
        $(".chatbox").css({"opacity":"0"}).hide();
        return false;
    });

    // show chat window
    $(".chat").click(function(e){
        e.preventDefault();
        $(".chatbox").css({"opacity":"0", "display":"block"}).show().animate({opacity:1})
        return false;
    });
    
});