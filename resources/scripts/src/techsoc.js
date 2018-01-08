const ajax = require('./utils/ajax');
const init = require('./init/init');
const createResponse = require('./utils/response/create-response');
const displayInfoMessage = require('./utils/response/message').displayInfoMessage;
const scrollIndicator = require('./components/arrow-scroll-indicator');

const techSoc = (() =>
{
    return {
        ajax: ajax,
        init: init,
        createResponse: createResponse,
        displayInfoMessage: displayInfoMessage,
        scrollIndicator: scrollIndicator,
    }
})();

module.exports = techSoc;