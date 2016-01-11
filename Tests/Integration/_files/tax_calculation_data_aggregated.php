<?php
$credentialsConfig = require __DIR__ . '/../credentials.php';

/**
 * Global array that holds test scenarios data
 *
 * @var array
 */
$taxCalculationData = [];

require_once __DIR__ . '/scenarios/configurable_product.php';
require_once __DIR__ . '/scenarios/currency_conversion_rounding.php';
require_once __DIR__ . '/scenarios/applied_taxes_one_rate.php';
require_once __DIR__ . '/scenarios/applied_taxes_multiple_rates.php';
require_once __DIR__ . '/scenarios/bundled_product_dynamic_pricing.php';
require_once __DIR__ . '/scenarios/bundled_product_fixed_pricing.php';
require_once __DIR__ . '/scenarios/product_tax_classes.php';
require_once __DIR__ . '/scenarios/customer_tax_class.php';

/**
 * TODO: Add tests for these scenarios:
 *
 * - Gift wrapping (quote, printed card, items)
 * - Virtual product with no shipping address
 * - Multi address checkout (if it is reasonable to test this)
 */