const arrowScrollIndicator = (() =>
{
    const arrow = (colour) => `
        <svg width="26" height="26" class="arrow-indicator" viewBox="0 0 9.5249998 9.5250002">
            <g class="arrow" transform="translate(0 -287.47)" fill="none" stroke="${colour}" stroke-linecap="round" stroke-linejoin="round">
                <path d="m2.6458 292.77 2.1167 2.6458 2.1167-2.6458" stroke-width="1.2"></path>
                <path d="m4.7625 295.41v-6.35" stroke-width="1.2"></path>
            </g>
        </svg>`;
    
    const init = (selector, colour = 'var(--theme)') =>
    {
        const indicator = document.querySelector(selector);
        
        if (indicator === null) return;
        
        indicator.innerHTML = arrow(colour);
        
        const onWindowScroll = () =>
        {
            if (window.scrollY < 90) return;
            
            indicator.classList.add('indicator-scrolled');
            
            window.removeEventListener('scroll', onWindowScroll);
        };
        
        window.addEventListener('scroll', onWindowScroll);
    };
    
    return {
        init: init,
    }
})();

module.exports = arrowScrollIndicator;