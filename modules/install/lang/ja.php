<?php
$lang->introduce_title = 'Rhymixのインストール';
$lang->enviroment_gather = 'インストール環境収集に同意する';
$lang->input_dbinfo_by_dbtype = '%s 情報入力';
$lang->install_progress_menu['language'] = '言語の選択';
$lang->install_progress_menu['license_agreement'] = 'ライセンス契約';
$lang->install_progress_menu['condition'] = 'インストール条件確認';
$lang->install_progress_menu['ftp'] = 'FTP情報入力';
$lang->install_progress_menu['dbSelect'] = 'DB選択';
$lang->install_progress_menu['dbInfo'] = 'DB情報入力';
$lang->install_progress_menu['configInfo'] = '環境設定';
$lang->install_progress_menu['adminInfo'] = '管理者情報入力';
$lang->install_condition_enable = 'インストールできます。';
$lang->install_condition_disable = 'インストールできません。';
$lang->install_details = '詳細';
$lang->install_simply = '簡単';
$lang->advanced_setup = '上級設定';
$lang->install_ftp_reason = 'FTP情報を登録する理由。';
$lang->install_checklist_title['php_version'] = 'PHPバージョン';
$lang->install_checklist_title['permission'] = 'filesフォルダのパーミッション';
$lang->install_checklist_title['xml'] = 'xml / simplexml';
$lang->install_checklist_title['curl'] = 'curl';
$lang->install_checklist_title['iconv'] = 'iconv / mbstring';
$lang->install_checklist_title['json'] = 'json';
$lang->install_checklist_title['gd'] = 'gd';
$lang->install_checklist_title['mcrypt'] = 'mcrypt / openssl';
$lang->install_checklist_title['session'] = 'session.auto_startの設定';
$lang->install_checklist_title['db_support'] = 'DBサポート';
$lang->install_checklist_desc['php_version'] = '[必修] %s以上のPHPバージョンでインストールが可能です。';
$lang->install_checklist_desc['php_version_warning'] = '[推奨] RhymixはPHP %sバージョン以上をおすすめします。';
$lang->install_checklist_desc['permission'] = '【必須】Rhymixのインストール先、または「./files」ディレクトリのパーミッションを「777」に設定してください。';
$lang->install_checklist_desc['xml'] = '【必須】XML通信のためにXMLライブラリが必要です。';
$lang->install_checklist_desc['session'] = '【必須】Rhymixでは、セッションを使用しているため、「php.ini」の設定を「session.auto_start=0」にしてください。';
$lang->install_checklist_desc['iconv'] = 'UTF-8と多言語サポート及び文字コード変換のため、「iconv」をインストールする必要があります。';
$lang->install_checklist_desc['gd'] = 'イメージ変換機能を使用するためには、「GDライブラリ」をインストールする必要があります。';
$lang->install_checklist_xml = 'XMLライブラリのインストール';
$lang->install_without_xml = 'XMLライブラリがインストールされていません。';
$lang->install_checklist_gd = 'GDライブラリのインストール';
$lang->install_without_gd = 'イメージ変換用のGDライブラリがインストールされていません。';
$lang->install_without_iconv = '文字列処理のための「iconv」ライブラリがインストールされていません。';
$lang->install_session_auto_start = 'PHPの設定で「session.auto_start==1」 にするとセッション処理に問題が発生することがあります。';
$lang->install_permission_denied = 'インストールする対象ディレクトリのパーミッションが「777」になっていません。';
$lang->install_notandum = 'すべての項目を管理者環境にて修正できます。';
$lang->cmd_install_refresh_page = 'リフレッシュ';
$lang->cmd_install_next = 'インストールを続けます。';
$lang->cmd_ignore = 'FTP設定を省略する';
$lang->cmd_recommended = '推奨';
$lang->db_desc['mysqli'] = 'mysqliモジュールを使用してMySQL DBに接続します。';
$lang->db_desc['mysql'] = 'mysql_*()関数を使用してMySQL DBに接続します。';
$lang->db_desc['cubrid'] = 'CUBRID DBを利用します。 <a href="http://www.cubrid.org/wiki_tutorials/entry/cubrid-installation-instructions" target="_blank">Manual</a>';
$lang->db_desc['mssql'] = 'Microsoft SQL Serverを利用します。';
$lang->can_use_when_installed = 'このサーバーにインストールされていません';
$lang->form_title = 'データベース &amp; 管理者情報入力';
$lang->db_title = 'データベース情報入力';
$lang->db_type = 'データベースの種類';
$lang->select_db_type = '使用するデータベース種類を選択してください。';
$lang->db_hostname = 'ホスト名';
$lang->db_port = 'ポート番号';
$lang->db_userid = 'ユーザーID';
$lang->db_password = 'パスワード';
$lang->db_name = 'DB 名前';
$lang->db_database_file = 'データベースファイル';
$lang->db_table_prefix = 'テーブルプレフィックス';
$lang->admin_title = '管理者情報';
$lang->env_title = '環境設定';
$lang->use_optimizer = 'オプティマイザー使用';
$lang->about_optimizer = 'オプティマイザーを使用すると多数の「CSS/JS」ファイルを、統合・圧縮して転送するのでレスポンスが早くなります。<br />但し、CSSまたはJSファイルによっては問題が生じる場合があります。この場合は、チェックを外すと正常に動作します。';
$lang->use_rewrite = 'リライト・モジュールを使用';
$lang->use_sso = '<abbr title="Single Sign On">SSO</abbr>使用';
$lang->about_rewrite = 'Webサーバで「リライト・モジュール（mod_rewrite）」をサポートしている場合は、「http://アドレス/?document_srl=123」のようなアドレスを、動的だけど「http://アドレス/123」のように静的なページに見せることができます。';
$lang->checking_rewrite = '短縮アドレスを使用できるかどうかを確認しています...';
$lang->disable_rewrite = '短縮アドレスを使用できません。ウェブサーバー担当者に mod_rewriteサポート可否を確認してください。';
$lang->disable_rewrite_can_proceed = 'この機能は、Rhymixをインストールと使用するために必要ではありません。';
$lang->about_nginx_rewrite = 'nginxを使用する場合、短縮アクセスを使用するためにrewrite設定が必要です。設定方法は<a href="https://github.com/xpressengine/xe-core/wiki/Nginx-rewite-%EC%84%A4%EC%A0%95%ED%95%98%EA%B8%B0" target="_blank">このページ</a>を参考ください。';
$lang->time_zone = 'タイムゾーン';
$lang->about_time_zone = 'サーバの設定時間とサービスしているローカル時間との差がある場合、タイムゾーンを指定して表示時間を合わせることができます。';
$lang->use_ssl = 'SSLを使用';
$lang->ssl_options['none'] = '使わない';
$lang->ssl_options['optional'] = '部分的に使う';
$lang->ssl_options['always'] = '常に使う';
$lang->about_database_file = 'Sqliteはファイルにデータを保存します。そのため、データベースファイルにはウェブからアクセスできない場所にしなければなりません。<br/><span style="color:red">データファイルのパーミッションは「777」に設定してください。</span>';
$lang->success_installed = '正常にインストールされました。';
$lang->msg_cannot_proc = 'インストールできる環境が整っていないため、リクエストを実行できませんでした。';
$lang->msg_already_installed = '既にインストールされています。';
$lang->msg_dbconnect_failed = 'データベースアクセスにエラーが発生しました。 データベースの情報をもう一度確認してください。';
$lang->msg_table_is_exists = '既にデータベースにデーブルが作成されています。 configファイルを再作成しました。';
$lang->msg_install_completed = 'インストールが完了しました。 ありがとうございました。';
$lang->msg_install_failed = 'インストールファイルを作成する際にエラーが発生しました。';
$lang->ftp_get_list = 'リストを取得する';
$lang->ftp_form_title = 'サーバーのFTP情報の入力';
$lang->ftp = 'FTP';
$lang->ftp_host = 'FTPサーバーアドレス';
$lang->ftp_port = 'FTPサーバーポート';
$lang->about_ftp_password = 'FTP情報は保存できません。';
$lang->cmd_check_ftp_connect = 'FTP接続を確認する';
$lang->msg_safe_mode_ftp_needed = 'PHPのsafe_modeがOnの場合、FTP情報を登録することで、Rhymixのインストール及び利用が可能になります。';
$lang->msg_safe_mode_ftp_needed2 = 'モジュールのイージーインストール、または更新が可能になります。';
$lang->msg_ftp_not_connected = 'localhostへのFTP接続エラーが発生しました。FTPポート(port)番号をはじめ、FTPサービスが可能であるかを確認してください。';
$lang->msg_ftp_invalid_auth_info = 'ログインに失敗しました。FTPアクセス情報を再度確認してください。';
$lang->msg_ftp_mkdir_fail = 'FTPでのディレクトリ生成に失敗しました。FTPサーバーの設定を再度確認してください。';
$lang->msg_ftp_chmod_fail = 'FTPでのディレクトリ属性変更に失敗しました。FTPサーバーの設定を再度確認してください。';
$lang->msg_ftp_connect_success = 'FTP接続、および認証に成功しました。';
$lang->ftp_path_title = 'FTPパス情報入力';
$lang->msg_ftp_installed_realpath = 'インストールされたRhymixの絶対パス';
$lang->msg_ftp_installed_ftp_realpath = 'インストールされたRhymixのFTP絶対パス設定';
$lang->db_config_php_validation = 'db.config.php 有効性確認';
$lang->msg_possible_only_file = 'ファイルのみアップロード可能です。';
