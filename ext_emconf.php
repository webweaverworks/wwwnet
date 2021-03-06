<?php

/**
 * Extension Manager/Repository config file for ext "webweaverworks".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'WebWeaverWorks',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
	    'gridelements' => '8.7.0-9.5.99',
	    'bootstrap_grids' => '8.7.0-9.5.99',
	    'news' => '8.7.0-9.5.99',
	    'cs_seo' => '8.7.0-9.5.99',
            'form_legacy' => '8.7.0-9.5.99',
            'ke_search' => '8.7.0-9.5.99',
            'form_legacy' => '8.7.0-9.5.99',
            'realurl' => '8.7.0-9.5.99'



        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Webweaverworksnet\\Webweaverworks\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jeffrey P.A. de Bruijn',
    'author_email' => 'jeffrey.de.bruijn@gmail.com',
    'author_company' => 'WebWeaverWorks.Net',
    'version' => '1.0.0',
];
