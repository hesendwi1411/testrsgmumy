<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function hari($date)
{
    $day = date('D', strtotime($date));

    switch($day) {
        case 'Sun':
        $day = "Minggu";
        break;

        case 'Mon':			
        $day = "Senin";
        break;

        case 'Tue':
        $day = "Selasa";
        break;

        case 'Wed':
        $day = "Rabu";
        break;

        case 'Thu':
        $day = "Kamis";
        break;

        case 'Fri':
        $day = "Jumat";
        break;

        case 'Sat':
        $day = "Sabtu";
        break;

        default:
        $day = "Tidak di ketahui";		
        break;
    }

    return $day;
}

function tanggal($date)
{
    $tahun  = date('Y', strtotime($date));
    $bulan  = date('m', strtotime($date));
    $tgl    = date('d', strtotime($date));

    switch ($bulan) {
      case '01':
        $bulan = 'Januari';
        break;
      case '02':
        $bulan = 'Februari';
        break;
      case '03':
        $bulan = 'Maret';
        break;
      case '04':
        $bulan = 'April';
        break;
      case '05':
        $bulan = 'Mei';
        break;
      case '06':
        $bulan = 'Juni';
        break;
      case '07':
        $bulan = 'Juli';
        break;
      case '08':
        $bulan = 'Agustus';
        break;
      case '09':
        $bulan = 'September';
        break;
      case '10':
        $bulan = 'Oktober';
        break;
      case '11':
        $bulan = 'November';
        break;
      case '12':
        $bulan = 'Desember';
        break;
      
      default:
        # code...
        break;
    }

    $result = $tgl." ".$bulan." ".$tahun;

    return $result;
}

function bulan($date)
{
    $bulan = date('m', strtotime($date));

    switch ($bulan) {
      case '01':
        $bulan = 'Januari';
        break;
      case '02':
        $bulan = 'Februari';
        break;
      case '03':
        $bulan = 'Maret';
        break;
      case '04':
        $bulan = 'April';
        break;
      case '05':
        $bulan = 'Mei';
        break;
      case '06':
        $bulan = 'Juni';
        break;
      case '07':
        $bulan = 'Juli';
        break;
      case '08':
        $bulan = 'Agustus';
        break;
      case '09':
        $bulan = 'September';
        break;
      case '10':
        $bulan = 'Oktober';
        break;
      case '11':
        $bulan = 'November';
        break;
      case '12':
        $bulan = 'Desember';
        break;
      
      default:
        # code...
        break;
    }

    return $bulan;
}

function romawi($str)
{
    $array_bulan = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
    return $array_bulan[$str];
}

function jumlah_hari($awal, $akhir)
{
    $awal  = new DateTime($awal);
    $akhir = new DateTime($akhir);
    $diff  = $awal->diff($akhir);

    return $diff->days;
}

function umur($date)
{
    $birthday = new DateTime($date);
    $today    = new DateTime();
    $data     = $today->diff($birthday);

    return $data;
}

function menu_help($id)
{
  $CI =& get_instance(); 
  $CI->load->model('ref/m_ref');
  
  $str = $CI->m_ref->get_menu($id);
    
  return $str;
}

function menu_id_help($id)
{
  $CI =& get_instance(); 
  $CI->load->model('ref/m_ref');
  
  $str = $CI->m_ref->get_menu_id($id);
    
  return $str;
}

function group_help($id)
{
  $CI =& get_instance(); 
  $CI->load->model('ref/m_ref');
  
  $str = $CI->m_ref->get_group_name($id);
    
  return $str;
}

function check_db()
{
    $CI =& get_instance(); 
    echo '<pre>'; print_r($CI->db->last_query()); die();
}

function cetak_data($data)
{
    echo '<pre>'; print_r($data); echo '</pre>'; die();
}