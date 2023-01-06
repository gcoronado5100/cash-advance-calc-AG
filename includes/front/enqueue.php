<?php

function ldb_cash_enqueue()
{
    wp_enqueue_style('ldb-roi-styles', LDB_CASH_CALC_DIR . 'assets/calculator.css', [], null, 'all');

    wp_enqueue_script('ldb-roi-app', LDB_CASH_CALC_DIR . 'assets/calculator.js', [], null, true);
}
