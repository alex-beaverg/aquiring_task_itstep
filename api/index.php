<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Internet aqcuiring HTML form</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" href="style/styles.css" type="text/css">
    </head>
    <body>
        <header>
            Internet aqcuiring HTML form
        </header>
        <div id="for_form">
            <form action="actions/handler.php" method="post" name="aqcuiring_form" onchange="submit_btn_can_be_clickable()">
                <div id="labels">
                    <label for="connection">Connection:</label>
                    <label for="integration">Integration:</label>
                    <label for="payment">Payment method:</label>
                    <label for="payers">Payers:</label>
                    <label for="payment_system">Payment system:</label>
                    <label for="bank">Bank:</label>
                </div>
                <div id="elements">
                    <select id="connection" name="connection" onchange="choose_connection_item()">
                        <option disabled selected hidden></option>
                        <option value="With website">With website</option>
                        <option value="Without website">Without website</option>
                        <option value="With mobile application">With mobile application</option>
                    </select>
                    <select id="integration" name="integration">
                        <option disabled selected hidden></option>
                        <option value="Without integration">Without integration</option>
                        <option value="Wordpress">Wordpress</option>
                        <option value="Joomla">Joomla</option>
                        <option value="Deal">Deal</option>
                        <option value="Tilda">Tilda</option>
                    </select>
                    <select id="payment_method" name="payment_method" onchange="choose_item()">
                        <option disabled selected hidden></option>
                        <option value="Card">Card</option>
                        <option value="ERIP">ERIP</option>
                        <option value="QR code">QR code</option>
                    </select>
                    <select id="payers" name="payers" onchange="choose_payers_item()">
                        <option disabled selected hidden></option>
                        <option value="Residents">Residents</option>
                        <option value="Non-residents">Non-residents</option>
                        <option value="Both types">Both types</option>
                    </select>
                    <select id="payment_system" name="payment_system" onchange="choose_item()">
                        <option disabled selected hidden></option>
                        <option value="Belcard">Belcard</option>
                        <option value="MIR">MIR</option>
                        <option value="Other types">Other types</option>
                    </select>
                    <select id="bank" name="bank">
                        <option disabled selected hidden></option>
                        <option value="Priorbank">Priorbank</option>
                        <option value="BelVEB">BelVEB</option>
                        <option value="Other banks">Other banks</option>
                    </select>
                    <input id="submit" type="submit" value="Submit" disabled onclick="click_to_submit_btn()">
                </div>
            </form>
        </div>
    </body>
    <script src="script/script.js"></script>
</html>