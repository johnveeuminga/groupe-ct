<?php

$page = Page::make('info', 'Contact us')->set();

$sections[] = Section::make('contact', 'Contact');
$settings['contact'] = [
    Field::text('phoneMtl' ,['title' => 'Phone Number : Montreal']),
    Field::text('phoneQc' ,['title' => 'Phone Number : Quebec']),



];


/* SECTION SERVICES  */
$sections[] = Section::make('socialMedia', 'Social Media');
$settings['socialMedia'] = [

    Field::text('linkedin',['title' => 'LinkedIn']),
    Field::text('facebook',['title' => 'Facebook']),
];





$page->addSettings($settings);
$page->addSections($sections);
