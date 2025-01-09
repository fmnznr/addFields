<?php
/**
 * @Ronny John - www.ronny-john.de
 * Date: 2018-10-29
**/

// Modify the palette
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace
(
    'guests',
    'guests,fullwidth,bgcolor,cols,paddingtop,paddingbottom',
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

// Add the field meta data

$GLOBALS['TL_DCA']['tl_article']['fields']['fullwidth'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['fullwidth'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array('nomarg'=>'Inhalt füllt Seitenbreite', 'marg'=>'Inhalt mit Seitenrändern'),
    'eval'      => array('tl_class'=>'clr'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['bgcolor'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['bgcolor'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array(''=>'weiss','greybg'=>'grau','blackbg'=>'schwarz','primarybg'=>'Primärfarbe','secondarybg'=>'Sekundärfarbe'),
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['cols'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['cols'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array(
        'onecol'=>'Einspaltenlayout',
        'twocol'=>'Zweispaltenlayout 50/50',
        'twocol-30-70'=>'Zweispaltenlayout 30/70',
        'twocol-70-30'=>'Zweispaltenlayout 70/30',
        'threecol'=>'Dreispaltenlayout',
        'fourcol'=>'Vierspaltenlayout'
    ),
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['paddingtop'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['paddingtop'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array(''=>'ohne','sptop'=>'wenig','mptop'=>'mehr'),
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['paddingbottom'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['paddingbottom'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => array(''=>'ohne','spbottom'=>'wenig','mpbottom'=>'mehr'),
    'eval'      => array('tl_class'=>'w50'),
    'sql'       => "varchar(64) NOT NULL default ''"
);