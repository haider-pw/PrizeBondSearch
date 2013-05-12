<?php
$this->load->view('FrontSite_Template/header');
?>
<!--Body content-->
<div class="k-block" id="MainPage">

    <!-- This will be shown while loading AJAX content. You'll want to get an image that suits your design at http://ajaxload.info/ -->
    <div class="bbq-loading" style="display:none;">
        <div class="k-header HeaderBlack">Main Home</div>
        <div align="center">
        <img src="<?php echo base_url(); ?>/styles/imgs/ajax-loader.gif" data-align="center" alt="Loading"/><br /> <b>Loading content...</b>
        </div>
    </div>

    <!-- This content will be shown if no path is specified in the URL fragment. -->
    <div class="bbq-default bbq-item">
        <div class="HeaderBlack">Main Home</div>
        <img src="bbq.jpg" width="400" height="300">
        <h1>This is Default Div</h1>
        <p>Click on Side Kendo accodion navigation to load content in this div</p>
    </div>

<?php
$this->load->view('FrontSite_Template/footer');
?>