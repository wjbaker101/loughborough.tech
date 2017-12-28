const createResponse = (code, message, type) =>
{
    return {
        code: code,
        message: message,
        type: type
    };
};

module.exports = createResponse;