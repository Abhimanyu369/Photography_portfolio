<footer>
        <p>&#169; Copyright-2019 ISKCON Monk</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
        //$(document).ready(function(){
        $(window).on('load', function () {
            $(".img-wrapper").css("visibility","visible");
            $(".img-a").each(function(i){

                var imgW = $(this).children().width();
                var imgH = $(this).children().height();

                var ratio = imgW/imgH;

                // Set Row Height Here
                var rowHeight = 15; // changeable value in rem

                // Set Margin between images Here
                var imgMargin = .25; // changeable value in rem

                $(this).css("flex-basis", (ratio * rowHeight) + 'rem');
                $(this).css("flex-grow", (ratio * 100));
                $(this).css("margin", imgMargin + "rem");
            });

        });
    </script>
    
    <script src="Vendors/js/js-migerate.js"></script>
    <script src="Vendors/js/js-migerate2.js"></script>
    <script src="Vendors/js/lightgallery.min.js"></script>
    <script src="Vendors/js/lg-share.js"></script>
    <script src="Vendors/js/lg-fullscreen.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            document.addEventListener('contextmenu', event => event.preventDefault());
            $("#lightgallery").lightGallery({
                share: true,
                twitter: false,
                googlePlus: false,
                pinterest: false
            }); 
        });
    </script>
    
</body>
</html>