const displayInfoMessage = () =>
{
    const messageOutput = document.querySelector(selector);
    
    if (!messageOutput) return;

    messageOutput.innerHTML = message.message;

    //messageOutput.classList.remove('text-error');
    //messageOutput.classList.remove('text-warning');
    //messageOutput.classList.remove('text-success');

    const newClasses = messageOutput.classList.filter(className => !className.startsWith('text-'));

    messageOutput.classList = newClasses;

    if (message.type !== 'REGULAR')
    {
        const messageType = message.type.toLowerCase();

        messageOutput.classList.add(`text-${messageType}`);
    }
};

module.exports.displayInfoMessage = displayInfoMessage;