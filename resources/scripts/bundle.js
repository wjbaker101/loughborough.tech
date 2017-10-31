(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var techSoc = function () {
    var displayInfoMessage = function displayInfoMessage(selector, message) {
        var messageOutput = document.querySelector(selector);

        if (!messageOutput) return;

        messageOutput.innerHTML = message.message;

        messageOutput.classList.remove('text-error');
        messageOutput.classList.remove('text-warning');
        messageOutput.classList.remove('text-success');

        if (message.type !== 'REGULAR') {
            var messageType = message.type.toLowerCase();

            messageOutput.classList.add('text-' + messageType);
        }
    };

    var createResponse = function createResponse(code, message, type) {
        return {
            code: code,
            message: message,
            type: type
        };
    };

    var ajax = function () {
        var ajaxSuccess = void 0;
        var ajaxFailure = void 0;

        var onSuccess = function onSuccessFunc() {
            var success = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

            ajaxSuccess = success;
            return this;
        };

        var onFailure = function onFailureFunc() {
            var failure = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

            ajaxFailure = failure;
            return this;
        };

        var send = function sendFunc() {
            var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

            var defaultOptions = {
                url: '',
                method: 'GET',
                parameters: {},
                headers: [{ header: 'Content-type', value: 'application/x-www-form-urlencoded' }]
            };

            var ajaxOptions = _extends({}, defaultOptions, options);

            if (ajaxOptions.url.length === 0) throw new Error('Request URL cannot be blank.');

            if (ajaxOptions.method !== 'GET' && ajaxOptions.method !== 'POST') throw new Error('Request method must be GET or POST.');

            var http = new XMLHttpRequest();

            http.onreadystatechange = function () {
                if (http.readyState === XMLHttpRequest.DONE) {
                    if (http.status === 200) {
                        var response = JSON.parse(http.responseText);

                        if (ajaxSuccess !== null) ajaxSuccess(response);
                    } else {
                        if (ajaxFailure !== null) ajaxFailure(http.status);
                    }
                }
            };

            var pairs = Object.keys(ajaxOptions.parameters).map(function (key) {
                return key + '=' + ajaxOptions.parameters[key];
            });

            var joined = pairs.join('&');

            var url = ajaxOptions.url;

            if (ajaxOptions.method === 'GET') {
                url += '?' + joined;
            }

            http.open(ajaxOptions.method, url, true);

            ajaxOptions.headers.forEach(function (e) {
                return http.setRequestHeader(e.header, e.value);
            });

            if (ajaxOptions.method === 'POST') {
                http.send(joined);
            } else {
                http.send();
            }
        };

        return {
            onSuccess: onSuccess,
            onFailure: onFailure,
            send: send
        };
    }();

    var onWindowLoad = function onWindowLoad() {
        var header = document.querySelector('header[role=header]');

        var onWindowScroll = function onWindowScroll() {
            var scrollY = window.scrollY;

            header.classList.toggle('scrolling', scrollY > 2);
        };

        var onHeaderNavButtonClick = function onHeaderNavButtonClick() {
            return header.classList.toggle('open');
        };

        window.addEventListener('scroll', onWindowScroll);

        document.querySelector('.header-nav-button').addEventListener('click', onHeaderNavButtonClick);
    };

    var init = function init() {
        return window.addEventListener('load', onWindowLoad);
    };

    return {
        init: init,
        ajax: ajax,
        displayInfoMessage: displayInfoMessage,
        createResponse: createResponse
    };
}();

techSoc.init();
},{}]},{},[1]);
