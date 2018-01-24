const header = require('./header');
const headerNavButton = require('./header-nav-button');

const init = () =>
{
    header.init();

    headerNavButton.init();
};

module.exports = init;