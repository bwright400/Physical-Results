/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function () {
    $("#hide").click(function () {
        $("table").hide();
    });
    $("#show").click(function () {
        $("table").show();
    });
    function hide(id) {
        $("#hide").click(function() {
            $(id).hide();
        });
    }
    function show(id) {
        $("#show").click(function() {
            $(id).show();
        });
    }

});

function toggle(id) {
    var data = array(document.getElementById('this_info').value);
    
}

