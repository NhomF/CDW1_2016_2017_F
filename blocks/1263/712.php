 
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/712.less', 'css/712.css');
        ?>
        <link href="css/712.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="container">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <h1>Body</h1>
                <div class="type-712 clearfix">
                    <input id="tab-1" type="radio" name="tab-group" checked="checked" />
                    <label for="tab-1">All</label>
                    <!--Pestaña 2 inactiva por defecto-->
                    <input id="tab-2" type="radio" name="tab-group" />
                    <label for="tab-2">Anti-Ageing</label>
                    <!--Pestaña 3 inactiva por defecto-->
                    <input id="tab-3" type="radio" name="tab-group" />
                    <label for="tab-3">Damaged</label>
                    <!--Pestaña 4 inactiva por defecto-->
                    <input id="tab-4" type="radio" name="tab-group" />
                    <label for="tab-4">Dark Circles</label>
                    <!--Pestaña 5 inactiva por defecto-->
                    <input id="tab-5" type="radio" name="tab-group" />
                    <label for="tab-5">Dry/Dehydrated</label>
                    <div id="content">

                        <div id="content-0">
                            <img src="images/colection.png" alt="Body">
                            <p>   
                                        The point is that science and nature are easily combined in products that we are glad to offer you today. Also you can always contact our consultants that are always glad to provide you with full information about our goods and natural products that are used in the process of production of&nbsp; organic cosmetics. Our goal is to satisfy all our clients despite of their age, gender and race with premium, modern, effective alternatives to conventional beauty products.Our goal is to help you stay healthy as well as gorgeous at the same time. Soon you’ll discover how it is possible to use organic cosmetics for your body.You can shop with the confidence that you are in the place which has over twenty years of experience in organic cosmetics industry.
                            </p>
                        </div>
                        <!--Contenido de la Pestaña 1-->
                        <div id="content-1">
                            <p class="left"><img src="http://ximg.es/160x120" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum sit reprehenderit iusto harum minima. Assumenda, accusamus, perspiciatis inventore tempora qui pariatur quisquam? Deleniti, placeat ea nostrum officiis obcaecati temporibus quod. Ullam, in, adipisci autem at fugit ab tempore enim ratione nesciunt alias corporis vitae quo quod nostrum itaque vero iure?</p>
                            <p class="left last"><img src="http://ximg.es/160x120" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, id blanditiis deserunt in molestiae excepturi incidunt molestias dolor sunt dolore obcaecati non repellat mollitia error placeat est exercitationem sit voluptates iure autem saepe voluptas harum unde perferendis modi provident labore voluptatum. Repudiandae, aspernatur sit harum quod vero quos sequi voluptas!</p>
                        </div>
                        <!--Contenido de la Pestaña 2-->
                        <div id="content-2">
                            <p class="column-left"><img src="http://ximg.es/200x150" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, est, nisi enim voluptates dicta quibusdam recusandae eveniet provident non at nostrum nesciunt laudantium omnis aliquam debitis magni expedita cumque tempore.</p>
                            <p class="column-right"><img src="http://ximg.es/200x150" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, molestiae, officia repellendus quasi cumque dolor eius deserunt possimus aliquid neque nam assumenda veniam soluta enim commodi aperiam reprehenderit quia incidunt.</p>
                        </div>
                        <!--Contenido de la Pestaña 3-->
                        <div id="content-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, aperiam, enim odit placeat minus ab vero molestiae ad fugit maiores eaque saepe debitis assumenda ut ipsam eius sit repellendus dolore.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, in magni illo dolore dicta vero.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, minus, aspernatur voluptatem doloribus labore modi.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, exercitationem quia id accusamus beatae sunt? Dolorum mollitia sint debitis delectus.</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, accusantium, provident ab quo sed blanditiis perspiciatis distinctio aut voluptatibus cum odio quaerat iure vel dolorum fugit explicabo suscipit tenetur. Sed!</p>
                        </div>
                        <div id="content-4">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, aperiam, enim odit placeat minus ab vero molestiae ad fugit maiores eaque saepe debitis assumenda ut ipsam eius sit repellendus dolore.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, in magni illo dolore dicta vero.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, minus, aspernatur voluptatem doloribus labore modi.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, exercitationem quia id accusamus beatae sunt? Dolorum mollitia sint debitis delectus.</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, accusantium, provident ab quo sed blanditiis perspiciatis distinctio aut voluptatibus cum odio quaerat iure vel dolorum fugit explicabo suscipit tenetur. Sed!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


    </body>

</html>





