<style>
    a, table,th,td {
        font-family: Poppins;
    }
    th{
        text-align: center;
    }
    .forex.active,
    .stock.active,
    .indices.active,
    .commodities.active,
    .crypto.active {
        border-bottom: 2px solid blue;
        color: blue;
    }

    .forex:hover,
    .stock:hover,
    .indices:hover,
    .commodities:hover,
    .crypto:hover {
        color: blue;
    }

    .categoryLinks a{
        font-size: 12px !important;
        font-weight: bold;
        text-decoration: none;
    }
</style>
<div class="bg-white p-3">
    <div class="d-flex gap-2 flex-wrap mb-3 categoryLinks" id="categoryLinks ">
        <a onclick="showTable('forex')" id="forex" class="forex active"><?php echo $lang['forex'] ?></a>
        <a onclick="showTable('stock')" id="stock" class="stock"><?php echo $lang['stock'] ?></a>
        <a onclick="showTable('indices')" id="indices" class="indices"><?php echo $lang['indices'] ?></a>
        <a onclick="showTable('commodities')" id="commodities" class="commodities"><?php echo $lang['commodities2'] ?></a>
        <a onclick="showTable('crypto')" id="crypto" class="crypto"><?php echo $lang['crypto'] ?></a>
    </div>
    <div id="forexTable" style="display: block;">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                            <th><?php echo $lang['livePress'] ?></th>
                            <th><?php echo $lang['bid'] ?></th>
                            <th><?php echo $lang['ask'] ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="stockTable" style="display: none;">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                    <th>Live Press</th>
                    <th>Bid</th>
                    <th>Ask</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="indicesTable" style="display: none;">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                    <th>Live Press</th>
                    <th>Bid</th>
                    <th>Ask</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="commoditiesTable" style="display: none;">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                    <th>Live Press</th>
                    <th>Bid</th>
                    <th>Ask</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="cryptoTable" style="display: none;">
        <table class="table table-striped">
            <thead class="thead">
                <tr>
                    <th>Live Press</th>
                    <th>Bid</th>
                    <th>Ask</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
                <tr>
                    <td>EURUSD</td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_blue.svg" ?>' alt="404"> 1.1018
                    </td>
                    <td><img src='<?php echo $siteurl . "assets/images/svg/call_made_yellow.svg" ?>' alt="404"> 1.1018
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
       function showTable(category) {
        // Hide all tables
        document.getElementById('forexTable').style.display = 'none';
        document.getElementById('stockTable').style.display = 'none';
        document.getElementById('indicesTable').style.display = 'none';
        document.getElementById('commoditiesTable').style.display = 'none';
        document.getElementById('cryptoTable').style.display = 'none';
        // Hide other category tables here

        // Show the selected category table
        document.getElementById(category + 'Table').style.display = 'block';
    }


    function styleElement(elementId) {

        const categories = ['forex', 'stock', 'indices', 'commodities', 'crypto'];

        for (const category of categories) {
            const $element = $(`.${category}`);
            if (elementId === category) {
                $element.addClass('active');
            } else {
                $element.removeClass('active');
            }
        }

        if (previousClickedElementId !== null) {
            var previousElement = document.getElementById(previousClickedElementId);
            previousElement.style.color = ''; // Remove color style
            previousElement.style.borderBottom = ''; // Remove border style
        }

        var currentElement = document.getElementById(elementId);
        currentElement.style.color = 'blue !important';
        currentElement.style.borderBottom = '2px solid blue !important';

        // Update the previousClickedElementId to the current clicked element
        previousClickedElementId = elementId;

    }

        document.getElementById('forex').addEventListener('click', function () {
            styleElement('forex');
        });

        document.getElementById('stock').addEventListener('click', function () {
            styleElement('stock');
        });

        document.getElementById('indices').addEventListener('click', function () {
            styleElement('indices');
        });

        document.getElementById('commodities').addEventListener('click', function () {
            styleElement('commodities');
        });

        document.getElementById('crypto').addEventListener('click', function () {
            styleElement('crypto');
        });


    </script>
</div>