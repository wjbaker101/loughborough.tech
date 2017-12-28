const ajax = require('./utils/ajax');
const init = require('./init/init');
const createResponse = require('./utils/response/create-response');
const displayInfoMessage = require('./utils/response/message').displayInfoMessage;

const techSoc = (() =>
{
    return {
        ajax: ajax,
        init: init,
        createResponse: createResponse,
        displayInfoMessage: displayInfoMessage,
    }
})();

module.exports = techSoc;