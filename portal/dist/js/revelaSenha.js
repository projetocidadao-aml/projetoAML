  $(document).ready(function() {
                $('.olhoSenha').attr('src', 'img/olho11.png');
                $('.olhoSenha').on('mousedown', function() {

                    $('.olhoSenha').attr('src', 'img/olho2.png');
                    $('.senha').attr('type', 'text');




                });


                $('.olhoSenha').on('mouseup', function() {
                    $('.olhoSenha').attr('src', 'img/olho11.png');
                    $('.senha').attr('type', 'password');


                });
                
                
                 $('.olhoConfirmaSenha').attr('src', 'img/olho11.png');
                $('.olhoConfirmaSenha').on('mousedown', function() {

                    $('.olhoConfirmaSenha').attr('src', 'img/olho2.png');
                    $('.confirmaSenha').attr('type', 'text');




                });


                $('.olhoConfirmaSenha').on('mouseup', function() {
                    $('.olhoConfirmaSenha').attr('src', 'img/olho11.png');
                    $('.confirmaSenha').attr('type', 'password');


                });
            });