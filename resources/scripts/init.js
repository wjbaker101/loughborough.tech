const onWindowScroll = header =>
{
    const scrollY = window.scrollY;

    header.classList.toggle('scrolling', scrollY > 5);
};

const onNavButtonClick = header =>
{
    header.classList.toggle('open');
};

const init = () =>
{
    const header = document.querySelector('body > header');

    window.addEventListener('scroll', () => onWindowScroll(header));

    document.querySelector('.header-nav-button').addEventListener('click', () => onNavButtonClick(header));
};

module.exports = init;