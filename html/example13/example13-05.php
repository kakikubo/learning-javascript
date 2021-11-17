<?php

if (empty($_GET['pref'])){
  echo "[ { 'value': '', 'title': '都道府県が選択されていません'} ]";
} else {
  // 検索対象から初めと終わりのホワイトスペースを取り除く
  $search = trim($_GET['pref']);
  switch($search) {
    case "HO":
      $result = "[
        { 'value': 'sapporo', 'title': '札幌' },
        { 'value': 'asahikawa', 'title': '旭川' },
        { 'value': 'nemuro', 'title': '根室' }
        ]";
      break;
    case "FU":
      $result = "[
        { 'value': 'fukui', 'title': '福井' },
        { 'value': 'sabae', 'title': '鯖江' },
        { 'value': 'echizen', 'title': '越前' }
        ]";
      break;
    case "NA":
      $result = "[
        { 'value': 'nagano', 'title': '長野' },
        { 'value': 'matsumoto', 'title': '松本' },
        { 'value': 'web20', 'title': 'Web2.0シティ' },
        { 'value': 'ueda', 'title': '上田' }
        ]";
      break;
    case "OK":
      $result = "[
        { 'value': 'naha', 'title': '那覇' },
        { 'value': 'ishigaki', 'title': '石垣' }
        ]";
      break;
    default:
      $result = "[
        { 'value': '', 'title': '都市が見つかりません' }
        ]";
      break;
  }
  header('Content-Type: text/html; charset=utf-8');
  echo $result;
}