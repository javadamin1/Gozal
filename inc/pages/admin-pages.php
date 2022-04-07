<?php

/**
 * Register Navigation Menu
 *
 * @package Gozal
 */

function gozal_admin_pages()
{
?>
    <h1><?php echo _e('Gozal Theme Options', 'gozal')  ?></h1>

    <?php
    settings_errors();

    ?>

    <form method="POST" id="save-custom-css-form" action="options.php" class="gozal-general-form">
        <?php
        settings_fields('general-gozal-theme');
        ?>
        <?php
        do_settings_sections('tools-gozal-theme');
        ?>
        <?php
        submit_button();
        ?>
    </form>
<?php
}

function gozal_theme_settings_pages()
{
?>
    <h1>Gozal Custom Css</h1>

    <?php
    settings_errors();
    ?>

    <form method="POST" id="save-custom-css-form" action="options.php" class="gozal-general-form">
        <?php
        settings_fields('gozal-custom-css-options');
        do_settings_sections('gozal-submenu-slug');
        submit_button();

        ?>
    </form>
<?php

} /// gozal setting css



function gozal_theme_option_pages()
{
?>
    <?php
    settings_errors();
    ?>
    <form method="POST" action="options.php" class="gozal-general-form">
        <?php
        settings_fields('gozal-theme-options');
        do_settings_sections('gozal-theme-options');
        submit_button();
        ?>
    </form>
<?php
} // gozal theme option

function  gozal_theme_learn_settings()
{
?>
    <h2 style="margin-top: 2rem;"> <?php echo _e('Gozal Theme Learn Options', 'gozal') ?></h2>

    <?php
    settings_errors();
    ?>

    <div class="container">

        <?php

        if (get_option('xml_url')  != null) :
            $xml = simplexml_load_file(get_option('xml_url'));
        ?>
            <div class="main-video">
                <div class="video">
                    <video src="<?php echo $xml->information[0]->url ?>" controls></video>
                    <h3 class="title">01. <?php echo $xml->information[0]->name ?></h3>
                    <h4>Description :</h4>
                    <p class="des"><?php echo $xml[0]->information[0]->description; ?></p>
                </div>
            </div>
            <!-- main-video -->
            <div class="video-list">
                <?php
                $no = 01;
                foreach ($xml->information as $key => $value) {
                    echo ($value->name->attributes()->family) . '<br>';
                ?>
                    <div class="vid active">
                        <video src="<?php echo $value->url; ?>" muted></video>
                        <h3 class="title"><?php echo $no++ . '.' . $value->name; ?></h3>
                        <p><?php echo $value->description; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        else :
        ?>
            <div class="susses">
                <h3>Enter xml url in </h3>
            </div>
        <?php

        endif; ?>
    </div>
    <!-- container -->

    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');
        let des = document.querySelector('.main-video .des');

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    let des1 = video.children[2].innerHTML;
                    title.innerHTML = text;
                    des.innerHTML = des1;

                }
            };
        });
    </script>

    <!-- <form method="POST" action="options.php" class="gozal-general-form">
        <?php
        // settings_fields('gozal-learn-section');
        // do_settings_sections('gozal-learn-section');
        // submit_button();
        ?>
    </form> -->
<?php
} // gozal theme learn option
