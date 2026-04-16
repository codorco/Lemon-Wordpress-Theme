</div> <!-- l-page-wrapper -->
    <?php wp_footer();?>

    <script>
        var myScrollDown = document.querySelector(".jl-scroll-down"),
            waypoint = new Waypoint({
                element: myScrollDown,
                handler: function() {
                    myScrollDown.classList.toggle("jl-fade-out")
                },
                offset: "80%"
            })
    </script>

</body>
</html>