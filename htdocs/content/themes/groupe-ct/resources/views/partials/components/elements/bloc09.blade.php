<div class="bloc-name row">
    <h1>BLOC #9 Charts</h1>
</div>



<div class="chart-main-container row default-padding ">
    <div class="col-md-10 col-md-offset-1">

        <!-- THE ELEMENT START  -->
            <div class="chart-main-container">
                <div class="chart">
                    <canvas class="doughnut-chart01 doughnut-chart"></canvas>
                </div>
                <div class="chart-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                    <span>Document Scanning in the Office</span>
                </div>
            </div>
        <!-- THE ELEMENT END  -->

    </div>
</div>

<script>

    var data = {
        datasets: [
            {
                data: [60, 40],
                backgroundColor: [
                    "#063a65",
                    "#cdd8e0",
                ],
            }]
    };

    var inView = false;

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
    }

    $(window).scroll(function () {
        if (isScrolledIntoView('.doughnut-chart01')) {
            if (inView) {
                return;
            }
            inView = true;
            new Chart(document.getElemenstByClassName("doughnut-chart01").getContext("2d")).Doughnut(data);
        } else {
            inView = false;
        }
    });

</script>