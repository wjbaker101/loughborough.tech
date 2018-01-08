const header = (() =>
{
    const toggleHeaderScrolling = (header) =>
    {
        const scrollY = window.scrollY;

        header.classList.toggle('scrolling', scrollY > 5);
    };

    const initHeaderScrolling = () =>
    {
        const header = document.querySelector('body > header');

        window.addEventListener('scroll', () => toggleHeaderScrolling(header));

        toggleHeaderScrolling(header);
    };
    
    return {
        init: initHeaderScrolling,
    }
})();

module.exports = header;