const headerNavButton = (() =>
{
    const toggleHeaderNav = (header) =>
    {
        header.classList.toggle('open');
    };
    
    const initHeaderNavButton = () =>
    {
        const header = document.querySelector('body > header');
        const button = document.querySelector('.header-nav-button');
        
        button.addEventListener('click', () => toggleHeaderNav(header));
    };
    
    return {
        init: initHeaderNavButton,
    }
})();

module.exports = headerNavButton;