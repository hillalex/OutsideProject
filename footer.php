</div>
<footer class="p-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> © 2017 The Outside Project.
                <span class="pull-right hidden-xs">
                        Colleagues, friends and activists creating a free, independent grassroots project.</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php wp_enqueue_script("jquery", false, true, true, true); ?>

<script type="text/javascript">

    var replaceHistory = function(){

        if(window.history && window.history.replaceState){
            // check if replaceState is supported so no error is thrown

             var title="Decoy Title",
                 url= "/decoy-page"; //another endpoint on your server that gives the decoy website

              window.history.replaceState(null, title , url); //replace current history entry
        }

    };

    var quickExit = function() {

        document.body.innerHTML = '';
        //this clears the current html in the body
        //making it look like the page is loading

        // once decoy page is implemented call replaceHistory function here

        //should be pretty fast up to this point
        window.location.replace("http://www.google.com"); //load the google page
    };

    (function($) {

        $(".navbar-nav li a").last() // quick exit menu item
            .click(quickExit);

        $(document).keyup(function(e) {
            if (e.which === 27) // escape
            {
                quickExit()
            }
        } );

    }(jQuery))

</script>
</body>
</html>
