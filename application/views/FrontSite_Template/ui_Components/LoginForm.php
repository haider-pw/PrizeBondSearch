<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 5/5/13
 * Time: 6:57 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<form action="ManageUsers/login" id="UserLoginForm" method="POST" accept-charset="UTF-8">
    <input id="user_username" placeholder="Username Here" style="margin-bottom: 15px; width:90%;" type="text" name="Username" />
    <input id="user_password" placeholder="Password Here" style="margin-bottom: 15px; width:90%;" type="password" name="Password" />
    <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="RememberMe" value="1" />
    <label class="string optional" for="user_remember_me"> Remember me</label>

    <input class="btn btn-primary" id="UserLoginBtn" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="button" name="commit" value="Sign In" />
</form>
    <script language="JavaScript">
        $(document).ready(function(e){
            $('#UserLoginBtn').click(function(e){
                var UserLoginForm = $('#UserLoginForm');
                var FullURL = '';
                var PathUrl = getAbsolutePath();
                var HashLocation = location.hash;
                var FullURL = PathUrl+HashLocation;
                //window.location.reload(FullURL);
                var result = AjaxFormSubmit(UserLoginForm, FullURL);
              });
            function getAbsolutePath() {
                var loc = window.location;
                var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
                return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
            }
        });

    </script>