<?php require ($_SERVER['DOCUMENT_ROOT'] . "/resources/page/page.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include(INCLUDE_META) ?>
        
        <title>TechSoc - Stash</title>
        
        <meta name="description" content="Buy Stash representing the Loughborough Technology Society.">
        
        <?php include(INCLUDE_STYLE) ?>
        
        <style>
            .stash-image
            {
                max-height: 400px;
            }
            
            .stash-container
            {
                position: relative;
            }
            
            .stash-anchor
            {
                position: absolute;
                left: 0;
                top: -107px;
            }
        </style>
        
        <?php include(INCLUDE_SCRIPTS) ?>
        
        <script></script>
    </head>
    
    <body>
        <?php include(INCLUDE_HEADER) ?>
        <div class="header-height"></div>
        <h1 class="title">Stash</h1>
        <div class="section bordered-section">
            <div class="content-width hpadding-small vpadding-mid">
                <div class="column-container section">
                    <div class="column l4 m12 padding-small"><div class="card-content"></div></div>
                    <div class="column l4 m12 padding-small">
                        <div class="card bg-white text-centered">
                            <div class="card-content hpadding-small vpadding-mid">
                                <svg width="64" height="64" class="cell-middle">
                                    <use xlink:href="/resources/external/orion/icons.svg#boy-1"></use>
                                </svg>
                            </div>
                            <div class="card-content hpadding-small">
                                <p>
                                    <a href="https://www.lsu.co.uk/society/techsoc/#stash" target="_blank" rel="noopener noreferrer"><button><i class="fas fa-shopping-cart fa-fw"></i> Buy Here!</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-centered section">Purchase Stash representing the Loughborough Technology Society.</p>
                <h3>Navigation:</h3>
                <ul>
                    <li><a class="page-link-underline" href="#techsoc-black-zipless-hoodie">TechSoc Black Zipless Hoodie</a></li>
                    <li><a class="page-link-underline" href="#techsoc-white-zipless-hoodie">TechSoc White Zipless Hoodie</a></li>
                </ul>
            </div>
        </div>
        <div class="content-width hpadding-small vpadding-mid">
            <h2 class="underlined">Our Catalogue</h2>
            <div class="card stash-container">
                <div id="techsoc-black-zipless-hoodie" class="stash-anchor"></div>
                <div class="card-content">
                    <div class="column-container">
                        <div class="column l6 s12 padding-regular text-right">
                            <img class="stash-image" src="/resources/images/stash/hoodie-black-zipless-front.png">
                        </div>
                        <div class="column l6 s12 padding-regular">
                            <img class="stash-image" src="/resources/images/stash/hoodie-black-zipless-back.png">
                        </div>
                    </div>
                </div>
                <div class="card-content padding-small">
                    <h4>TechSoc Black Zipless Hoodie</h4>
                    <p>Black zipless hoodie with TechSoc and LSU logo.</p>
                    <p>Includes:</p>
                    <ul>
                        <li>Personalised text on the front</li>
                    </ul>
                    <table class="overflow-scroll">
                        <tr>
                            <th class="text-right"><strong>Size</strong></th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>XXL</th>
                        </tr>
                        <tr>
                            <th class="text-right"><strong>Chest (inches)</strong></th>
                            <td>36</td>
                            <td>40</td>
                            <td>44</td>
                            <td>48</td>
                            <td>52</td>
                        </tr>
                    </table>
                </div>
                <div class="card-content padding-small clearfix">
                    <p class="float-l"><a href="https://www.lsu.co.uk/society/techsoc/#stash" target="_blank" rel="noopener noreferrer"><button><i class="fas fa-shopping-cart fa-fw"></i> Buy Now</button></a></p>
                    <p class="float-r"><strong>£28.50</strong></p>
                </div>
            </div>
            <div class="card stash-container">
                <div id="techsoc-white-zipless-hoodie" class="stash-anchor"></div>
                <div class="card-content">
                    <div class="column-container">
                        <div class="column l6 s12 padding-regular text-right">
                            <img class="stash-image" src="/resources/images/stash/hoodie-black-zipless-front.png" style="filter:invert(100%)">
                        </div>
                        <div class="column l6 s12 padding-regular">
                            <img class="stash-image" src="/resources/images/stash/hoodie-black-zipless-back.png" style="filter:invert(100%)">
                        </div>
                    </div>
                </div>
                <div class="card-content padding-small">
                    <h4>TechSoc White Zipless Hoodie</h4>
                    <p>White zipless hoodie with TechSoc and LSU logo.</p>
                    <p>Includes:</p>
                    <ul>
                        <li>Personalised text on the front</li>
                    </ul>
                    <table class="overflow-scroll">
                        <tr>
                            <th class="text-right"><strong>Size</strong></th>
                            <th>S</th>
                            <th>M</th>
                            <th>L</th>
                            <th>XL</th>
                            <th>XXL</th>
                        </tr>
                        <tr>
                            <th class="text-right"><strong>Chest (inches)</strong></th>
                            <td>36</td>
                            <td>40</td>
                            <td>44</td>
                            <td>48</td>
                            <td>52</td>
                        </tr>
                    </table>
                </div>
                <div class="card-content padding-small clearfix">
                    <p class="float-l"><a href="https://www.lsu.co.uk/society/techsoc/#stash" target="_blank" rel="noopener noreferrer"><button><i class="fas fa-shopping-cart fa-fw"></i> Buy Now</button></a></p>
                    <p class="float-r"><strong>£21.00</strong></p>
                </div>
            </div>
        </div>
        <?php include(INCLUDE_FOOTER) ?>
    </body>
</html>