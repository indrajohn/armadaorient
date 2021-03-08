<?php

class Utility{
	public static function rupiah($angka){
		$hasil_rupiah = number_format($angka,2,',','.');
		return $hasil_rupiah;
	}
	public static function rupiah_normal($angka){
		$parsed = floatval(preg_replace('/[^\d.]/\./', '', number_format($angka)));
		return $parsed;
	}
}