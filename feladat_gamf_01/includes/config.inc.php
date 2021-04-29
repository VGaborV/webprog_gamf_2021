<?php
$ablakcim = array(
    'cim' => 'Rex Kutyaotthon alapítvány',
);

$fejlec = array(
    'kepforras' => 'rex.png',
    'kepalt' => 'REX',
	'cim' => 'Rex Kutyaotthon alapítvány',
	'motto' => '100%-ot adnak, de csak 1%-ot kérnek'
);

$lablec = array(
    'copyright' => ''.date("Y").' REX KUTYAOTTHON ALAPÍTVÁNY – MINDEN JOG FENNTARTVA.',
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
    'orokbefogadas' => array('fajl' => 'orokbefogadas', 'szoveg' => 'Örökbefogadás', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'galeria-feltoltes' => array('fajl' => 'galeria-feltoltes', 'szoveg' => 'Galéria feltöltés', 'menun' => array(0,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

// GALERIA
$MAPPA = './galeria/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;
?>