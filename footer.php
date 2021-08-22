
    <!-- Footer part -->
    <div class="fixed-bottom container">
        <div class="text-center my-5 border bg-warning bg-gradient pt-3">
            <p> 2019-<span id="getyear"></span> <span class="fw-bold"> &copy; BookStore</span> | All right reserved</p>  
        </div>
    </div>
</body>
</html>
<script>
    const d = new Date();
    $(function(){
        var date = new Date();
        var year = date.getFullYear();
        var getYear = $("#getyear").text(year)
    });
</script>