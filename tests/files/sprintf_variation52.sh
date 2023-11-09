#!/bin/sh

export MANPATH='/opt/local/share/man:'
export TERM_PROGRAM='Apple_Terminal'
export TERM='xterm-256color'
export SHELL='/bin/bash'
export HISTSIZE='20000'
export TMPDIR='/var/folders/_n/7v9v3pc92fd7tyy55d40j9nm0000gn/T/'
export TERM_PROGRAM_VERSION='447'
export TERM_SESSION_ID='BB410EEF-D785-4B9F-9E55-5D53EE88FB2E'
export USER='craig'
export SSH_AUTH_SOCK='deleted'
export __CF_USER_TEXT_ENCODING='0x1F5:0:2'
export BASH_SILENCE_DEPRECATION_WARNING='1'
export PATH='/usr/local/bin:/System/Cryptexes/App/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/go/bin:/Applications/Little Snitch.app/Contents/Components:/Library/Apple/usr/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/local/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/bin:/var/run/com.apple.security.cryptexd/codex.system/bootstrap/usr/appleinternal/bin:/usr/local/bin:/usr/local/sbin:/Users/craig/Library/Python/3.9/bin/'
export _='/usr/local/bin/php'
export LaunchInstanceID='E74A26AF-62C6-4209-9B6D-794830E46280'
export __CFBundleIdentifier='com.apple.Terminal'
export PWD='/Volumes/WebServer/Projects/php.fprint'
export HOMEBREW_GITHUB_API_TOKEN='2f68386ec091a7ccfdd4b1aace19144fb424b18a'
export LANG='en_GB.UTF-8'
export XPC_FLAGS='0x0'
export XPC_SERVICE_NAME='0'
export HISTCONTROL='ignoredups'
export HOME='/Users/craig'
export SHLVL='2'
export LOGNAME='craig'
export SECURITYSESSIONID='186a2'
export HISTTIMEFORMAT='%d/%h - %H:%M:%S '
export SSH_CLIENT='deleted'
export SSH_TTY='deleted'
export SSH_CONNECTION='deleted'
export TEMP='/var/folders/_n/7v9v3pc92fd7tyy55d40j9nm0000gn/T'
export TEST_PHP_EXECUTABLE='/usr/local/Cellar/php/8.2.10/bin/php'
export TEST_PHP_EXECUTABLE_ESCAPED=''\''/usr/local/Cellar/php/8.2.10/bin/php'\'''
export TEST_PHP_CGI_EXECUTABLE='/usr/local/Cellar/php/8.2.10/bin/php-cgi'
export TEST_PHP_CGI_EXECUTABLE_ESCAPED=''\''/usr/local/Cellar/php/8.2.10/bin/php-cgi'\'''
export TEST_PHPDBG_EXECUTABLE='/usr/local/Cellar/php/8.2.10/bin/phpdbg'
export TEST_PHPDBG_EXECUTABLE_ESCAPED=''\''/usr/local/Cellar/php/8.2.10/bin/phpdbg'\'''
export REDIRECT_STATUS='1'
export QUERY_STRING=''
export PATH_TRANSLATED='/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php'
export SCRIPT_FILENAME='/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php'
export REQUEST_METHOD='GET'
export CONTENT_TYPE=''
export CONTENT_LENGTH=''
export TZ=''
export TEST_PHP_EXTRA_ARGS='  -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off"'
export HTTP_COOKIE=''

case "$1" in
"gdb")
    gdb --args '/usr/local/Cellar/php/8.2.10/bin/php'    -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off" -f "/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php"  2>&1
    ;;
"lldb")
    lldb -- '/usr/local/Cellar/php/8.2.10/bin/php'    -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off" -f "/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php"  2>&1
    ;;
"valgrind")
    USE_ZEND_ALLOC=0 valgrind $2 '/usr/local/Cellar/php/8.2.10/bin/php'    -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off" -f "/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php"  2>&1
    ;;
"rr")
    rr record $2 '/usr/local/Cellar/php/8.2.10/bin/php'    -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off" -f "/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php"  2>&1
    ;;
*)
    '/usr/local/Cellar/php/8.2.10/bin/php'    -d "output_handler=" -d "open_basedir=" -d "disable_functions=" -d "output_buffering=Off" -d "error_reporting=32767" -d "display_errors=1" -d "display_startup_errors=1" -d "log_errors=0" -d "html_errors=0" -d "track_errors=0" -d "report_memleaks=1" -d "report_zend_debug=0" -d "docref_root=" -d "docref_ext=.html" -d "error_prepend_string=" -d "error_append_string=" -d "auto_prepend_file=/Volumes/WebServer/Projects/php.fprint/functions.php" -d "auto_append_file=" -d "ignore_repeated_errors=0" -d "precision=14" -d "serialize_precision=-1" -d "memory_limit=128M" -d "opcache.fast_shutdown=0" -d "opcache.file_update_protection=0" -d "opcache.revalidate_freq=0" -d "opcache.jit_hot_loop=1" -d "opcache.jit_hot_func=1" -d "opcache.jit_hot_return=1" -d "opcache.jit_hot_side_exit=1" -d "zend.assertions=1" -d "zend.exception_ignore_args=0" -d "zend.exception_string_param_max_len=15" -d "short_open_tag=0" -d "session.auto_start=0" -d "tidy.clean_output=0" -d "zlib.output_compression=Off" -f "/Volumes/WebServer/Projects/php.fprint/tests/files/sprintf_variation52.php"  2>&1
    ;;
esac