/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function () {
    initAnimated();
});

var initAnimated = function () {
    $(".animated").not("input").each(function () {
        $(this).hover(function () {
            var animate = $(this).attr("animate");
            if ($(this).hasClass(animate)) {
                $(this).removeClass(animate);
            } else {
                $(this).addClass(animate);
            }
        });
    });
    $("input.animated").each(function () {
        $(this).bind("isVisible", function () {
            var animate = $(this).attr("animate");
            if ($(this).hasClass(animate)) {
                $(this).removeClass(animate);
            } else {
                $(this).addClass(animate);
            }
        });
    });
};

var showSearch = function () {
    $('#searchOption').toggle();
    $("#txtSearch").trigger("isVisible");
    $("#options").toggle();
};

var btnSearch = function () {

};

function productos(producto) {
    window.location.replace("productos/" + producto);
}

var callModal = function (titulo, url) {
    $('#myModal .modal-body').html("");
    $('#myModal #myModalLabel').html(titulo);
    $('#myModal').modal({keyboard: true}, 'show');
    if (url !== undefined && url !== '') {
        $('#myModal .modal-body').load(url);
    }
};
