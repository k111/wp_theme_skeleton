#wp theme skeleton

WordPress構築時のテンプレート。
CSSにはBootstrapを使用しています。

## ファイル構成


| file | description |
|---|---|
| 404.php | 404ページテンプレート |
| archive-service.php | カスタム投稿タイプトップテンプレート |
| carousel-top.php | カスタム投稿タイプカルーセルパーツ |
| footer.php | フッターパーツ |
| front-page.php | トップページ |
| functions.php | - |
| heaeder.php | ヘッダーパーツ |
| index.php | 一覧ページテンプレート<br>（投稿トップ、カテゴリ、日付アーカイブ、検索結果） |
| page.php | 固定ページテンプレート |
| screenshot.jpg | - |
| sidebar-page.php | サイドバーパーツ固定ページ用 |
| sidebar-single.php | サイドバーパーツ投稿用 |
| sidebar.php | サイドバーパーツ |
| single-service.php | カスタム投稿タイプ個別テンプレート |
| single.php | 投稿ページテンプレート |
| style.css | - |

## Plugins

使用プラグインは以下。

| file | description |
|---|---|
| [Breadcrumb NavXT](https://ja.wordpress.org/plugins/breadcrumb-navxt/) | パンくずリスト生成プラグイン |
| [WP-PageNavi](https://ja.wordpress.org/plugins/wp-pagenavi/) | ページャー生成プラグイン |
| [Page Links To](https://ja.wordpress.org/plugins/page-links-to/) | リダイレクトするプラグイン |
| [Duplicate Post](https://ja.wordpress.org/plugins/duplicate-post/) | 記事複製プラグイン |
| [Yoast SEO](https://ja.wordpress.org/plugins/wordpress-seo/) | SEO関連の各種設定を行うことができるプラグイン |
| [SiteGuard WP Plugin](https://ja.wordpress.org/plugins/siteguard/) | セキュリティ対策のプラグイン |
| [Admin Menu Editor](https://ja.wordpress.org/plugins/admin-menu-editor/) | 管理画面メニューの並び順を変更するプラグイン |
| [WP Total Hacks](https://ja.wordpress.org/plugins/wp-total-hacks/) | 20項目以上のカスタマイズができるプラグイン |
| [Contact Form 7](https://ja.wordpress.org/plugins/contact-form-7/) | お問い合わせフォームプラグイン<br>
```
on_sent_ok: 'location.preplace("/contact/thanks");'
``` |
| [Contact Form 7 add confirm](https://ja.wordpress.org/plugins/contact-form-7-add-confirm/) | Contact Form 7に確認画面を追加するプラグイン |
| [BackWPup](https://ja.wordpress.org/plugins/backwpup/) | WordPressのデータベースとファイルのバックアップができるプラグイン |

### [Multi Plugin Installer](https://ja.wordpress.org/plugins/multi-plugin-installer/)

複数のプラグインを一括でインストールするプラグイン

### [WP Maintenance Mode](https://ja.wordpress.org/plugins/wp-maintenance-mode/)

一時的にメンテナンスモードに切り替えるプラグイン

### [WP Basic Auth](https://ja.wordpress.org/plugins/wp-basic-auth/)

ウェブサイトにBasic認証を追加するプラグイン
公開前に使用する

### [WordPress HTTPS (SSL)](https://ja.wordpress.org/plugins/wordpress-https/)

SSL化対応プラグイン
お問い合わせフォームのページなどに

### [Category Order and Taxonomy Terms Order](https://ja.wordpress.org/plugins/taxonomy-terms-order/)

カテゴリ、タクソノミー並び替えプラグイン

### [Adjust Admin Categories](https://ja.wordpress.org/plugins/adjust-admin-categories/)

カテゴリ選択をカスタマイズできるプラグイン

### 本文エリア内で必要なスタイル

* strong
* em - italic
* ul
* ol
* blockquote
* del
* ins
* code
* hr
* h1 - h6

