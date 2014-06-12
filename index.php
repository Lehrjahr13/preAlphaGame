<!DOCTYPE html>
<?php include_once 'playModel.php' ?>
<html lang="<?php echo $language ?>">
    <head>

        <title><?php echo $websiteTitle ?></title>

        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css">

        <meta charset="<?php echo $charSet ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script type="text/javascript" src="js/jquery-2.0.2.js"></script>    
        <script type="text/javascript" src="js/jquery-ui.custom.js"></script>

        <script type="text/javascript">

            $(document).ready(function() {
                $('#sGB').on("click", function() {
                    if ($(this).val() === "Start") {
                        $(this).val("Neustart");
                    } else {
                        $(this).val("Start");
                    }
                    $('#resourcesHolder').load('Initialize.php #resources', function(responseTxt, statusTxt, xhr) {
                        if (statusTxt === "success") {
                            $('#resourcesHolder').show();
                            
                        }
                        else {
                            alert(statusTxt + ": " + xhr.status + " => " + xhr.statusText);
                        }
                    });

                    $('#buildingsHolder').load('Initialize.php #buildings', function(responseTxt, statusTxt, xhr) {
                        if (statusTxt === "success") {
                            $('#buildingsHolder').show();
                            
                        } else {
                            alert(statusTxt + ": " + xhr.status + " => " + xhr.statusText);
                        }
                    });


                    $("body").delegate("button", "click", function() {
                        
                        //var thisAmt = $(this).closest('tr').find('.buildingAmt');
                        //var amt = parseInt(thisAmt.html()) + 1;
                        //thisAmt.html(amt);
                    });


                });


            });
        </script>

        <style type="text/css">

        </style>
    </head>
    <body>
        <input id= "sGB" type="button" name="startGameBtn" value="Start"></input>

        <div id="resourcesHolder" style="display: none; border-style: solid;"></div>
        <div id="buildingsHolder" style="display: none; border-style: solid;"></div>
    </body>
</html>
