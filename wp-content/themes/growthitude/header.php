<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php bloginfo('title'); ?></title>


    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <meta name="description" content="Growthitude is a growth Consultancy with focus on digitisation and transformation, employee performance and company culture. At Growthitude we help you reduce costs, increase efficiency, improve quality and profitability through creating an engaging work culture. We work together with you using emotive ways to engage your team.">

    <meta name="keywords" content="Growth, business coaching, norway, business growth, training"> -->


    <!-- Twitter Card data -->


    <meta name="twitter:card" content="summary">

    <meta name="twitter:url" content="http://richardmiddleton.me/growthitude/index.html">

    <meta name="twitter:title" content="Growthitude">

    <meta name="twitter:description" content="Growthitude is a growth Consultancy with focus on digitisation and transformation, employee performance and company culture. At Growthitude we help you reduce costs, increase efficiency, improve quality and profitability through creating an engaging work culture. We work together with you using emotive ways to engage your team.">

    <meta name="twitter:image" content="http://richardmiddleton.me/growthitude/images/logo-large.jpg">



    <!-- Open Graph data -->


    <meta property="og:title" content="Growthitude" />

    <meta property="og:type" content="Growthitude" />

    <meta property="og:url" content="http://www.growthitude.com" />

    <meta property="og:image" content="http://www.growthitude.com/images/logo-large.jpg" />

    <meta property="og:description" content="Growthitude is a growth Consultancy with focus on digitisation and transformation, employee performance and company culture. At Growthitude we help you reduce costs, increase efficiency, improve quality and profitability through creating an engaging work culture. We work together with you using emotive ways to engage your team."
    />


    <!-- FONT AWESOME -->


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- GOOGLE FONTS -->


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-65843345-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- Begin MailChimp Signup Form -->

    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">


</head>


<body>


    <header>
        <div class="inner-header">
            <a href="/growthitude_wordpress/home">
                <h1 class="hidden"><?php bloginfo('name'); ?></h1>
                <img class="growthitude logo" src="http://www.growthitude.com/images/logo.png" alt="logo"></a>

            <nav>
              <?php wp_nav_menu(); ?>
            </nav>
        </div>
    </header>
