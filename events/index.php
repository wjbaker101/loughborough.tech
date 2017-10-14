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
            window.addEventListener('load', () =>
            {
                const getDay = (index = 0) =>
                {
                    const values = ['SUN', 'MON', 'TUES', 'WED', 'THURS', 'FRI', 'SAT'];
                    
                    if (index < 0 || index > 6) return 'ERR';
                    
                    return values[index];
                };
                
                const getDateSuffixed = date =>
                {
                    const s = ['th', 'st', 'nd', 'rd'];
                    v = date % 100;
                    return date + (s[(v - 20) % 10] || s[v] || s[0]);
                };
                
                const getMonth = (index = 0) =>
                {
                    const values = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];
                    
                    if (index < 0 || index > 11) return 'ERR';
                    
                    return values[index];
                };
                
                const formatDigits = (number = 0) =>
                {
                    if (number < 10) return `0${number}`;
                    
                    return String(number);
                };
                
                const parseDate = date =>
                {
                    const dateAndTime = date.split(' ');
                    
                    if (dateAndTime.length !== 2) throw new Error('Invalid date format.');
                    
                    const dates = dateAndTime[0].split('-');
                    const times = dateAndTime[1].split(':');
                    
                    if (dates.length !== 3 || times.length !== 3) throw new Error('Invalid date format.');
                    
                    return new Date(dates[0], dates[1] - 1, dates[2], times[0], times[1], times[2]);
                };
                
                techSoc.ajax.onSuccess(response =>
                {
                    const events = [...response.contents.events.upcoming, ...response.contents.events.past];
                    
                    const eventsHTML = events.map(event =>
                    {
                        const startDate = parseDate(event.StartDate);
                        const endDate = parseDate(event.EndDate);
                        
                        const formattedDate = `${getDay(startDate.getDay())}, ${getDateSuffixed(startDate.getDate())} ${getMonth(startDate.getMonth())} ${startDate.getFullYear()}`;
                        
                        const formattedTime = `${formatDigits(startDate.getHours())}:${formatDigits(startDate.getMinutes())} - ${formatDigits(endDate.getHours())}:${formatDigits(endDate.getMinutes())}`;
                        
                        const pastEvent = (new Date() > endDate) ? ' past' : '';
                        
                        const location = (event.MapUrl !== null) ? `<a class="page-link-underline" href="https://maps.lboro.ac.uk/?l=${event.MapUrl}" target="_blank">${event.Name} ${event.RoomNumber || ''}</a>` : event.Name;
                        
                        return `<article class="cell l6 m12 vpadding-regular hpadding-small text-centered${pastEvent}">
                                    ${(event.EventURL !== null) ? `<a href="${event.EventURL}">` : ''}
                                        <p><img class="image" src="${event.ImageFileLocation}"></p>
                                        <h3>${event.Title}</h3>
                                    ${(event.EventURL !== null) ? '</a>' : ''}
                                    <p class="date">${formattedDate}</p>
                                    <p class="time">${formattedTime}</p>
                                    <p class="location">${location}</p>
                                </article>`;
                    });
                    
                    let output = '';
                    
                    for (let i = 0; i < eventsHTML.length; ++i)
                    {
                        if (i != 0 && i % 2 == 0) output += '</div>';
                        if (i % 2 == 0) output += '<div class="cell-row">';
                        
                        output += eventsHTML[i];
                    }
                    
                    document.querySelector('.events-container').innerHTML = output;
                })
                .onFailure(status =>
                {
                    techSoc.displayInfoMessage('.message-output', techSoc.createResponse('failed', `Unable to load events.<br>Error ${status}.`, 'ERROR'));
                })
                .send({ method: 'GET', url: 'resources/get-events.php' });
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