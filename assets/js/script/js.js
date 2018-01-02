/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$(document).ready(function () {
    initAnimated();
});

var initAnimated = function () {
    $("div.animated").not("input").each(function () {
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
        $(this).bind("animate", function () {
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
    $("#txtSearch").trigger("animate");
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

$(document).ready(function () {
    /* Get iframe src attribute value i.e. YouTube video url
     and store it in a variable */
    var url = $("#cartoonVideo").attr('src');

    /* Assign empty url value to the iframe src attribute when
     modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function () {
        $("#cartoonVideo").attr('src', '');
    });

    /* Assign the initially stored url back to the iframe src
     attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function () {
        $("#cartoonVideo").attr('src', url);
    });
});