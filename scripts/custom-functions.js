/**
 * Created with JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 5/5/13
 * Time: 7:05 PM
 * To change this template use File | Settings | File Templates.
 */

function baseURL(){
    return 'http://localhost/projects/PrizeBondSearch/';
}

function AjaxFormSubmit(data, url){
  return data.ajaxSubmit({
        success: function(output){
            var result = output.split(":::");

            if(result[0] == "error")
            {
                var msg = result[1];
                ErrorNotification(msg);
                return 2;
            }else
            if(result[0] == "warning")
            {
                var msg = result[1];
                WarningNotification(msg);

            }else
            if(result[0]== "alert")
            {
                var msg = result[1];
                AlertNotification(msg);

            }else
            if(result[0]== "success")
            {
                var msg = result[1];
                SuccessNotification(msg);
                if(typeof url != 'undefined'){
                    window.location.reload(url);
                }
            }
        },
        error: function(output){
            var msg = 'Some Database Error Occurred';
            ErrorNotification(msg);
        }
    });
}

function IfLoggedIn(){
    var BaseURL = baseURL();
    $.ajax({
        'url': BaseURL+'ManageUsers/isLoggedIn/',
        'success': function(resp) {
            if(resp == true) {
                // do your thing here, no need
                // for async: false
                alert('1');
                return 1;
            }
        }
    });
}