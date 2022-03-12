jQuery(document).ready(function ($) {
    var updateCss = function () { $("#gozal-text-css").val(editor.getSession().getValue());}
    $("#save-custom-css-form").submit(updateCss);
})

var editor = ace.edit("customCss");
editor.setTheme("ace/theme/dracula");
editor.getSession().setMode("ace/mode/css");