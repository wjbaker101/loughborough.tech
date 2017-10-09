<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Loughborough TechSoc | Events</title>
        
        <?php displayHead(); ?>
        
        <style>
            .loading-container.done
            {
                opacity: 0;
                transition: opacity 0.5s;
            }
            
            .events-container
            {
                border-spacing: 1em;
                opacity: 1;
                transition: opacity 0.5s;
            }
            
            .events-container.loaded
            {
                opacity: 1;
            }
            
            .events-container article.past
            {
                opacity: 0.25;
            }
            
            .events-container article
            {
                border: 1px solid #edeef0;
                border-bottom: 2px solid #4ac0de;
                transition: border-color 0.5s;
            }
            
            .events-container article:hover
            {
                border-color: #4ac0de;
                border-bottom: 2px solid #4ac0de;
            }
            
            .events-container article .image
            {
                max-width: 100%;
                max-height: 175px;
            }
            
            .events-container article .date
            {
                font-weight: bold;
            }
        </style>
        
        <script>
            function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

            window.addEventListener('load', function () {
                var getDay = function getDay() {
                    var index = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

                    var values = ['MON', 'TUES', 'WED', 'THURS', 'FRI', 'SAT', 'SUN'];

                    if (index < 0 || index > 6) return 'ERR';

                    return values[index];
                };

                var getDateSuffixed = function getDateSuffixed(date) {
                    var s = ['th', 'st', 'nd', 'rd'];
                    v = date % 100;
                    return date + (s[(v - 20) % 10] || s[v] || s[0]);
                };

                var getMonth = function getMonth() {
                    var index = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

                    var values = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

                    if (index < 0 || index > 11) return 'ERR';

                    return values[index];
                };

                var formatDigits = function formatDigits() {
                    var number = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;

                    if (number < 10) return '0' + number;

                    return String(number);
                };

                techSoc.ajax.onSuccess(function (response) {
                    var events = [].concat(_toConsumableArray(response.contents.events.upcoming), _toConsumableArray(response.contents.events.past));

                    var eventsHTML = events.map(function (event) {
                        var startDate = new Date(event.StartDate);
                        var endDate = new Date(event.EndDate);

                        var formattedDate = getDay(startDate.getDay()) + ', ' + getDateSuffixed(startDate.getDate()) + ' ' + getMonth(startDate.getMonth()) + ' ' + startDate.getFullYear();

                        var formattedTime = formatDigits(startDate.getHours()) + ':' + formatDigits(startDate.getMinutes()) + ' - ' + formatDigits(endDate.getHours()) + ':' + formatDigits(endDate.getMinutes());

                        var pastEvent = new Date() > endDate ? ' past' : '';

                        var location = event.MapUrl !== null ? '<a class="page-link-underline" href="https://maps.lboro.ac.uk/?l=' + event.MapUrl + '" target="_blank">' + event.Name + '</a>' : event.Name;

                        return '<article class="cell l6 m12 vpadding-regular hpadding-small text-centered' + pastEvent + '">\n                                    <p><img class="image" src="' + event.ImageFileLocation + '"></p>\n                                    <h3>' + event.Title + '</h3>\n                                    <p class="date">' + formattedDate + '</p>\n                                    <p class="time">' + formattedTime + '</p>\n                                    <p class="location">' + location + '</p>\n                                </article>';
                    });

                    var output = '';

                    for (var i = 0; i < eventsHTML.length; ++i) {
                        if (i != 0 && i % 2 == 0) output += '</div>';
                        if (i % 2 == 0) output += '<div class="cell-row">';

                        output += eventsHTML[i];
                    }

                    document.querySelector('.events-container').innerHTML = output;
                }).onFailure(function (status) {
                    techSoc.displayInfoMessage('.message-output', techSoc.createResponse('failed', 'Unable to load events.<br>Error ' + status + '.', 'ERROR'));
                }).send({ method: 'GET', url: 'resources/get-events.php' });
            });
        </script>
    </head>
    <body id="top">
        <?php displayHeader(); ?>
        <div class="page vpadding-regular">
            <div class="content-width hpadding-small">
                <section class="section">
                    <h1 class="text-centered">Society Events</h1>
                </section>
                <section class="section vpadding-mid">
                    <div class="loading-container"></div>
                    <div class="message-output text-centered"></div>
                    <div class="events-container"></div>
                </section>
            </div>
        </div>
        <?php displayFooter(); ?>
    </body>
</html>