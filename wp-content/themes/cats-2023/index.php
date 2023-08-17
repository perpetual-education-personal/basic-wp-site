<?php
// Silence is golden.

echo "<a href='/'>Home</a>";

if ( is_page('cat-list') ) {
	include('cat-list.php');
}

if (is_singular('feline')) {
	include('cat-detail.php');
}
