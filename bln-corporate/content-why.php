
<section id="why-join">

    <div class="title-block">
        <div class="container-outer overflow">
            <div class="container">
                <?php
                    $aside = get_field('home_aside');
                    if($aside) {
                        echo '<div class="container-right bk-4 white">';
                        echo '<div class="container-inner">';
                        echo $aside;
                        echo '</div>';
                        echo '</div>';
                    }
                ?>

                <div class="container-left">
                    <div class="container-inner button-message">
                        <a class="button" href="/join">Sign up today</a>
                        <p class="message fg-0">Membership is free</p>
                        <h4 class="dark">Sign up for event invitations<span>, news and insights</span></h4>
                        <h1 class="dark">Upcoming events</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>