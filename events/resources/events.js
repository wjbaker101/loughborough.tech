const events = (() =>
{
    const formatDigits = (number) =>
    {
        if (number < 10) return `0${number}`;

        return String(number);
    };
    
    const getDayOfWeek = (index) =>
    {
        const days = ['SUN', 'MON', 'TUES', 'WED', 'THURS', 'FRI', 'SAT'];

        if (index < 0 || index > 6) throw new Error('Day of the week must be between 0 and 6 (inclusive).');

        return days[index];
    };
    
    const getMonth = (index) =>
    {
        const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

        if (index < 0 || index > 11) throw new Error('Day of the week must be between 0 and 11 (inclusive).');

        return months[index];
    };
    
    const getDateSuffixed = (date) =>
    {
        const suffix = ['th', 'st', 'nd', 'rd'];
        
        v = date % 100;
        
        return date + (suffix[(v - 20) % 10] || suffix[v] || suffix[0]);
    };
    
    const parseDate = (date) =>
    {
        const dateAndTime = date.split(' ');

        if (dateAndTime.length !== 2) throw new Error('Invalid date format.');

        const dates = dateAndTime[0].split('-');
        const times = dateAndTime[1].split(':');

        if (dates.length !== 3 || times.length !== 3) throw new Error('Invalid date format.');

        return new Date(dates[0], dates[1] - 1, dates[2], times[0], times[1], times[2]);
    };
    
    const requestEvents = () =>
    {
        const hideLoadingIcon = () => document.querySelector('.loading-container').classList.add('done');
        
        const ajaxOptions = { method: 'GET', url: 'resources/get-events.php' };
        
        techSoc.ajax(ajaxOptions).then((response) =>
        {
            if (response.code !== 'success')
            {
                techSoc.displayInfoMessage('.message-output', response);

                hideLoadingIcon();
            }

            const events = [...response.contents.events.upcoming, ...response.contents.events.past];

            const eventsHTML = events.map(event =>
            {
                const startDate = parseDate(event.StartDate);
                const endDate = parseDate(event.EndDate);

                const formattedDate = `${getDayOfWeek(startDate.getDay())}, ${getDateSuffixed(startDate.getDate())} ${getMonth(startDate.getMonth())} ${startDate.getFullYear()}`;

                const formattedTime = `${formatDigits(startDate.getHours())}:${formatDigits(startDate.getMinutes())} - ${formatDigits(endDate.getHours())}:${formatDigits(endDate.getMinutes())}`;

                const pastEvent = (new Date() > endDate) ? ' past' : '';

                const location = (event.MapUrl !== null) ? `<a class="page-link-underline" href="https://maps.lboro.ac.uk/?l=${event.MapUrl}" target="_blank">${event.Name} ${event.RoomNumber || ''}</a>` : event.Name;

                let socialMediaUrls = [];
                if (event.FacebookURL !== null) socialMediaUrls.push(`<a class="hover-text-theme" href="https://facebook.com/events/${event.FacebookURL}" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>`);

                const socialMediaHTML = socialMediaUrls.length === 0 ? '' : `<div class="social-media text-left">${socialMediaUrls.join('')}</div>`;

                return `<article class="cell l6 m12 vpadding-regular hpadding-small text-centered${pastEvent}">
                            ${socialMediaHTML}
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

            hideLoadingIcon();
        })
        .catch((status) =>
        {
            techSoc.displayInfoMessage('.message-output', techSoc.createResponse('failed', `Unable to load events.<br>Error: ${status}.`, 'ERROR'));
            
            hideLoadingIcon();
        });
    };
    
    const initialise = () =>
    {
        requestEvents();
    };
    
    return {
        init: initialise,
    }
})();

window.addEventListener('load', events.init);