/**
 * Created with JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/27/13
 * Time: 2:22 PM
 * To change this template use File | Settings | File Templates.
 */

function AlertNotification (msg){
    noty(
        {
            text: msg,
            type: 'alert',
            layout: 'topRight',
            timeout: 3500
        }
    )
}

function ErrorNotification (msg){
    noty(
        {
            text: msg,
            type: 'error',
            layout: 'topRight',
            timeout: 3500
        }
    )
}

function InformationNotification (msg){
    noty(
        {
            text: msg,
            type: 'information',
            layout: 'topRight',
            timeout: 3500
        }
    )
}

function SuccessNotification (msg){
    noty(
        {
            text: msg,
            type: 'success',
            layout: 'topRight',
            timeout: 3500
        }
    )
}

function WarningNotification (msg){
    noty(
        {
            text: msg,
            type: 'warning',
            layout: 'topRight',
            timeout: 3500
        }
    )
}