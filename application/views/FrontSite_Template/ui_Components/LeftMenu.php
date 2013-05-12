<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Kill3rCoder-Lapi
 * Date: 4/24/13
 * Time: 5:48 PM
 * To change this template use File | Settings | File Templates.
 */
?>


<ul id="panelbar">
    <li class="k-state-active"><a href="#home">Home</a></li>
    <li>
        Search
        <ul>
            <li><a href="#PrizeBondSearch">Prize Bond Search</a></li>
            <li><a href="#SearchUsers">Users</a></li>
        </ul>
    </li>
    <li>
        Profile
        <ul>
            <li>Update Profile</li>
            <li>ChangePassword</li>
        </ul>
    </li>
</ul>

    <script>
        $(document).ready(function(e){
            $("#panelbar").kendoPanelBar({
                expandMode: "single"
            });
            function onClick(){
                alert('Hellow World');
            }
        });

    </script>
<script type="text/javascript" language="javascript">

    $(function(){

        // Keep a mapping of url-to-container for caching purposes.
        var cache = {
            // If url is '' (no fragment), display this div's content.
            '': $('.bbq-default')
        };

        // Bind an event to window.onhashchange that, when the history state changes,
        // gets the url from the hash and displays either our cached content or fetches
        // new content to be displayed.
        $(window).bind( 'hashchange', function(e) {

            // Get the hash (fragment) as a string, with any leading # removed. Note that
            // in jQuery 1.4, you should use e.fragment instead of $.param.fragment().
            var url = $.param.fragment();
            var breadcrumb = $('.breadcrumb');
            var BreadCrumbBar ='<li><a href="#">PBS</a><span class="divider">></span></li>';
            var BreadCrumbsSplit = url.split('/');
            var TotalSplitItems = BreadCrumbsSplit.length;
            //Empty Any Items available in BreadCrumb.
            breadcrumb.empty();
            //Items storing in variable in form of list.
            $.each(BreadCrumbsSplit,function(breadurl){
                if(breadurl!==TotalSplitItems-1){
                    BreadCrumbBar+='<li><a href="#'+BreadCrumbsSplit[breadurl]+'">'+BreadCrumbsSplit[breadurl]+'</a><span class="divider">/</span></li>\n';
                }
                else{
                    BreadCrumbBar+='<li class="active"><a href="#'+BreadCrumbsSplit[breadurl]+'">'+BreadCrumbsSplit[breadurl]+'</a></li>\n';
                }

            });
            //Now list of items are being added to the breadcrumb.
            breadcrumb.html(BreadCrumbBar);

            // Remove .bbq-current class from any previously "current" link(s).
            $('ul.nav li').removeClass('active');
            $( 'a.k-state-selected' ).removeClass( 'k-state-selected k-state-focused' );
            $('ul.k-group').attr('style','display: none;')
            $('li.k-item').find('span.k-icon').attr({
                class:'k-icon k-i-arrow-s k-panelbar-expand'
            }).parent().parent().attr({
                class:'k-item k-state-default',
                "aria-expanded": false,
                "aria-hidden": true
            });

            // Hide any visible ajax content.
            $( '#MainPage' ).children( ':visible' ).hide();

            // Add .bbq-current class to "current" nav link(s), only if url isn't empty.
            //url && $( 'a[href="#' + url + '"]' ).addClass( 'k-state-selected' );
            url && $('ul.nav li').find('a[href="#' + url + '"]').parent().addClass('active');
            var MainMenuLink=$('li.k-item').has('a[href="#' + url + '"]');
            var WithSubMenusLink=$('li.k-item').has('ul.k-group').has('li.k-item').has('a[href="#' + url + '"]');
            if(url && WithSubMenusLink.length){
                $('ul.k-group').find('a[href="#' + url + '"]').addClass('k-state-selected k-state-focused').parent().attr({
                    "aria-selected": true,
                    id: 'panelbar_pb_active'

                }).parent().attr('style','display: block; height: auto; overflow: visible;').parent().attr({
                            "aria-expanded": true,
                            "aria-hidden":false,
                            class:'k-item k-state-active k-state-highlighted'
                        });
                //alert('If is Executing.');
            }
            else{
                //alert('Else is Executed.');
                $('li.k-item').find('a[href="#' + url + '"]').addClass('k-state-selected k-state-focused');

            }

            if ( cache[ url ] ) {
                // Since the element is already in the cache, it doesn't need to be
                // created, so instead of creating it again, let's just show it!
                cache[ url ].show();

            } else {
                // Show "loading" content while AJAX content loads.
                $( '.bbq-loading' ).show();

                // Create container for this url's content and store a reference to it in
                // the cache.
                cache[ url ] = $( '<div class="bbq-item"/>' )

                    // Append the content container to the parent container.
                        .appendTo( '#MainPage' )

                    // Load external content via AJAX. Note that in order to keep this
                    // example streamlined, only the content in .infobox is shown. You'll
                    // want to change this based on your needs.
                        .load( url, function(){
                            // Content loaded, hide "loading" content.
                            $( '.bbq-loading' ).hide();
                        });
            }
        })

        // Since the event is only triggered when the hash changes, we need to trigger
        // the event now, to handle the hash the page may have loaded with.
        $(window).trigger( 'hashchange' );

    });

    $(function(){

        // Syntax highlighter.
        //SyntaxHighlighter.highlight();

    });

</script>