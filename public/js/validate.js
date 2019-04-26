
    function CheckImageTop() {
        $('#btnStatus').click(function()
        {
            var img = new Image();
            img.src = $("#exampleUrl").val();

            $('#wait').fadeIn(1000);

            img.onload = function(){ // event fire if image exist and loading it
                alert( "Image had found  ,  Width : "+ img.width + '  height : '+ img.height + " , Url to see Photo : " + $("#exampleUrl").val());
                $('#wait').fadeOut(1000);
            };

            img.onerror = function () { // event fire if image not exist
                alert( ' image url Wrong ' );
                $('#wait').fadeOut(1000);

            }

        });
    }
    function CheckImageSidebar() {
        $('#btn2Status').click(function()
        {
            var img = new Image();
            img.src = $("#exampleicon").val();

            $('#wait2').fadeIn(1000);

            img.onload = function(){ // event fire if image exist and loading it
                alert( "Image had found  ,  Width : "+ img.width+'  height : '+ img.height + " , Url to see Photo : " + $("#exampleUrl").val() );
                $('#wait2').fadeOut(1000);
            };

            img.onerror = function () { // event fire if image not exist
                alert( ' image url Wrong ' );
                $('#wait2').fadeOut(1000);

            }

        });
    }
    function CheckImageMain() {
        $('#btn3Status').click(function()
        {
            var img = new Image();
            img.src = $("#exampleimage").val();

            $('#wait3').fadeIn(1000);

            img.onload = function(){ // event fire if image exist and loading it
                alert( "Image had found  ,  Width : "+ img.width+'  height : '+ img.height + " , Url to see Photo : " + $("#exampleUrl").val() );
                $('#wait3').fadeOut(1000);
            };

            img.onerror = function () { // event fire if image not exist
                alert( ' image url Wrong ' );
                $('#wait3').fadeOut(1000);

            }

        });
    }
    function CheckImageBottom() {
        $('#btn4Status').click(function()
        {
            var img = new Image();
            img.src = $("#footerimage").val();

            $('#wait4').fadeIn(1000);

            img.onload = function(){ // event fire if image exist and loading it
                alert( "Image had found  ,  Width : "+ img.width+'  height : '+ img.height + " , Url to see Photo : " + $("#exampleUrl").val() );
                $('#wait4').fadeOut(1000);
            };

            img.onerror = function () { // event fire if image not exist
                alert( ' image url Wrong ' );
                $('#wait4').fadeOut(1000);

            }

        });
    }

    $(function()
    {
        'use strict';
        CheckImageTop();
        CheckImageSidebar();
        CheckImageMain();
        CheckImageBottom();






    });