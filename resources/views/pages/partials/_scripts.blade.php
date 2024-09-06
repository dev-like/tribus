<script>

$(function() {
    $(window).on("scroll", function() {

        if($(window).scrollTop() > 50) {
            $(".header").addClass("active1");
            $(".header .logo").css({ display: "block" });
        } else{
            //remove the background property so it comes transparent again (defined in your css)
           $(".header").removeClass("active1");
           $(".header .logo").css({ display: "none" });
        }

        if ($(window).width() < 768) {
          $(".header .logo").css({ display: "none" });
        }
    });
});

$('.circle-plus').on('click', function(){
  $(this).toggleClass('opened');
})

</script>
