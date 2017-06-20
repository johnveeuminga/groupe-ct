<?php

class PageHelper
{
	const PAGE_0_ACCUEIL = 'accueil';
    const PAGE_1_0_APPROCHE_CONSEIL = 'approche-conseil';
    const PAGE_1_1_ENVIRONNEMENT_PAPIER = 'environnement-papier';
    const PAGE_1_2_ENVIRONNEMENT_HYBRIDE = 'enviornnement-hybride';
    const PAGE_1_3_ENVIRONNEMENT_NUMERIQUE = 'environnement-numerique';
    const PAGE_2_0_PRODUITS_SOLUTIONS = 'produits-solutions';
    const PAGE_2_1_1_EQUIPEMENTS_BUREAU = 'equipements-bureau';
    const PAGE_2_1_2_EQUIPEMENTS_PRODUCTION = 'equipements-production';
    const PAGE_2_1_3_IMPRESSION_GRAND_FORMAT = 'impression-grand-format';
    const PAGE_2_1_4_FOURNITURES = 'fournitures';
    const PAGE_2_2_1_PARC_IMPRESSION = 'parc-impression';
    const PAGE_2_2_2_RECUPERATION_COUT = 'recuperation-cout';
    const PAGE_2_2_3_FOLLOW_ME_PRINTING = 'follow-me-printing';
    const PAGE_2_2_4_AUTOMATISATION_FLUX = 'automatisation-flux';
    const PAGE_2_3_1_NUMERISATION_INTELLIGENTE = 'numerisation-intelligente';
    const PAGE_2_3_2_NUMERISATION_TRAITEMENT = 'numerisation-traitement';
    const PAGE_2_3_3_ARCHIVAGE = 'archivage';
    const PAGE_2_3_4_AUTOMATISATION_PROCESSUS = 'automatisation-processus';

    private static function get_pages_array()
    {
    	return [
		    self::PAGE_0_ACCUEIL => [
			    'fr' => 158,
			    'en' => null,
		    ],
		    self::PAGE_1_0_APPROCHE_CONSEIL => [
			    'fr' => 160,
			    'en' => null,
		    ],
		    self::PAGE_1_1_ENVIRONNEMENT_PAPIER => [
			    'fr' => 162,
			    'en' => null,
		    ],
		    self::PAGE_1_2_ENVIRONNEMENT_HYBRIDE => [
			    'fr' => 165,
			    'en' => null,
		    ],
            self::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE => [
                'fr' => 167,
                'en' => null,
            ],
		    self::PAGE_2_0_PRODUITS_SOLUTIONS => [
			    'fr' => 169,
			    'en' => null,
		    ],
		    self::PAGE_2_1_1_EQUIPEMENTS_BUREAU => [
			    'fr' => 171,
			    'en' => null,
		    ],
		    self::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION => [
			    'fr' => 204,
			    'en' => null,
		    ],
		    self::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT => [
			    'fr' => 206,
			    'en' => null,
		    ],
		    self::PAGE_2_1_4_FOURNITURES => [
			    'fr' => 211,
			    'en' => null,
		    ],
		    self::PAGE_2_2_1_PARC_IMPRESSION => [
			    'fr' => 214,
			    'en' => null,
		    ],
		    self::PAGE_2_2_2_RECUPERATION_COUT => [
			    'fr' => 216,
			    'en' => null,
		    ],
		    self::PAGE_2_2_3_FOLLOW_ME_PRINTING => [
			    'fr' => 218,
			    'en' => null,
		    ],
		    self::PAGE_2_2_4_AUTOMATISATION_FLUX => [
			    'fr' => 220,
			    'en' => null,
		    ],
		    self::PAGE_2_3_1_NUMERISATION_INTELLIGENTE => [
			    'fr' => 222,
			    'en' => null,
		    ],
		    self::PAGE_2_3_2_NUMERISATION_TRAITEMENT => [
			    'fr' => 225,
			    'en' => null,
		    ],
		    self::PAGE_2_3_3_ARCHIVAGE => [
			    'fr' => 227,
			    'en' => null,
		    ],
		    self::PAGE_2_3_4_AUTOMATISATION_PROCESSUS => [
			    'fr' => 229,
			    'en' => null,
		    ],
	    ];
    }

    public static function get_page_id($key)
    {
        $locale = pll_current_language();

        return self::get_pages_array()[$key][$locale];
    }

    public static function get_page_permalink($key)
    {
        $locale = pll_current_language();

        return get_permalink(self::get_pages_array()[$key][$locale]);
    }

    public static function get_page_title($key)
    {
        $locale = pll_current_language();

        return get_the_title(self::get_pages_array()[$key][$locale]);
    }

}