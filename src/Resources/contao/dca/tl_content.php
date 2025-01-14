<?php
/**
 * @Ronny John - www.ronny-john.de
 * Date: 20181105
**/

// Modify the palette
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionSingle'] = str_replace
(
    'customTpl',
    'grid,customTpl,spacing',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionSingle']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart'] = str_replace
(
    'customTpl',
    'grid,customTpl,spacing',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['accordionStart']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['vimeo'] = str_replace
(
    'customTpl',
    'grid,customTpl,spacing',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['vimeo']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube'] = str_replace
(
    'customTpl',
    'grid,customTpl,spacing',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['youtube']
);