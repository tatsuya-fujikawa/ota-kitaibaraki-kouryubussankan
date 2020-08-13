<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'ae148eg2kd_ota');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ae148eg2kd');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 's6kewsBV');

/** MySQL のホスト名 */
define('DB_HOST', '127.0.0.1:3307');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*PhV3&pGoxPors]S2$#BRB61jML$5!qBN`O]FQHB0NLLU*{_oN{M-E`&/q,rA^3|');
define('SECURE_AUTH_KEY',  'Ui7A: 1/a,Vn2,]O-/|v.~FIt(^(i_@|T1J|G3B]~Yae|vI4NpLTcMJJ_0Z^+qne');
define('LOGGED_IN_KEY',    '_sS#w(Ibl}kwyJn_MLUpz;zK!]M88vNG>(dX b#ETZYVfxD<xGv.TS{U5Gxu w]w');
define('NONCE_KEY',        'rT0u275$D-@aeSuRyZ!R&zx:L8SASn@M%+oc=@Rec:@wbfX1%Mk@ ]Wod;yP$:5R');
define('AUTH_SALT',        'R1<Cu0:^1lCZ9 <2@/*<IuD)R1R%rmQ;jeWu~;Ds(.FGmX#R1Rx(]_Y8pFCx)01v');
define('SECURE_AUTH_SALT', 'IeT/nc<F;sfB5X.B_it`%/taNr{TJk`Ffc;PW 4Pe0~y/Y}uVixH[)hFIjr&N}Zq');
define('LOGGED_IN_SALT',   '0$`4>j` !2~+h0|fpBjK~PW<13s07 GU?k6Msb0.}k<6!Frg&:pO{Sa8q])^HP2O');
define('NONCE_SALT',       '-DuEHt~rg)ubI~&`em{K*Zw|K&1+E(Ic6^iU$H[esp48c0h0%U&y?n5sUhH:g@Mb');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
