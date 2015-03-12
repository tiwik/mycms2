<?php

require_once('cms_base');
//memastika modul cms_base hanya di LOAD sekali
class Cms_application extends Cms_base {
	//semua kode yang ada disini
	//dapat diakses melalui fungsi utama
	//dalam CMS
	//management halaman web

	function addcontent()
	{
		echo 'disini akan dibuat fungsi menambah';
	}

	function viewcontent ()
	{
		echo 'di sini akan dibuat fungsi untuk menampilkan content';
	}

	function anyotherclass ()
	{
		echo 'di sini akan ditulis fungsi '
	}
}