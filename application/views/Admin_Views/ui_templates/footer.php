<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/16/13
 * Time: 6:54 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<!-- BEGIN FOOTER -->
<div id="footer">
    <p>2013 © PrizeBondSearch Admin Panel</p>
</div>
<!-- END FOOTER -->

<!-- #helpModal -->
<div id="helpModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="helpModalLabel"><i class="icon-external-link"></i> Help</h3>
    </div>
    <div class="modal-body">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
        </p>
    </div>
    <div class="modal-footer">

        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>
<!-- /#helpModal -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="scripts/jquery-migrate-1.1.1.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.0/jquery-ui.min.js"></script>
<script>window.jQuery.ui || document.write('<script src="scripts/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>


<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="scripts/libs/jquery.tablesorter.min.js"></script>

<?php //Libraries Included in Project Admin Area ?>
<script src="scripts/libs/jquery.mousewheel.js"></script>
<script src="scripts/libs/jquery.sparkline.min.js"></script>
<script src="scripts/libs/flot/jquery.flot.js"></script>
<script src="scripts/libs/flot/jquery.flot.pie.js"></script>
<script src="scripts/libs/flot/jquery.flot.selection.js"></script>
<script src="scripts/libs/flot/jquery.flot.resize.js"></script>
<script src="scripts/libs/fullcalendar.min.js"></script>

<?php //Js file to make this site Single Page Application ?>
<script type="text/javascript" src="<?php echo base_url(); ?>scripts/angular/PBS.js"></script>



<script src="scripts/main.js"></script>



<script type="text/javascript">
    $(function() {
        dashboard();
    });
</script>

</body>
</html>