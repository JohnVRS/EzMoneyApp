
import $ from 'jquery';
window.$ = window.jQuery = $;

import 'bootstrap';
import '@popperjs/core'

$(function () {
    $('[data-toggle="tooltip"').tooltip();
    $('[data-toggle="popover"').popover();
}
)
