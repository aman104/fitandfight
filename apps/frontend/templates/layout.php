<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fit & Fight Club</title>
        <meta name="description" content=Fit & Fight Club"">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/jquery.lightbox-0.5.css">        
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <?php include_component('layout', 'top'); ?>            

            <section>
                
            <?php echo $sf_content; ?>

            <div class="clearfix"></div>

            </section>

            <?php include_component('layout', 'footer'); ?>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="/js/vendor/jquery.cycle2.min.js"></script>
        <script src="/js/vendor/jquery.jscroll.min.js"></script>
        <script src="/js/jquery.lightbox-0.5.min.js"></script> 
        <script src="/js/plugins.js"></script>        
        <script src="/js/main.js"></script>

        <script type="text/javascript">
        $(function() {
            $('.pictures a').lightBox();
        });
        </script>

    </body>
</html>


