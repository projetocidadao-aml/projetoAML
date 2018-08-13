$(document).ready(function() {
                $("#createClone").click(function() {
                    var i = $('.clonadoQtd').length;

                    var clone = $(".caixaRegistrarAluno:first").clone();
                    clone.appendTo("#clone");
                });
            });
            $("#deleteClone").click(function() {
                $(".caixaRegistrarAluno").remove("#clone .caixaRegistrarAluno:last");
            });