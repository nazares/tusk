:: Tusk command line bootstrap script for Windows

@echo off

@setlocal

set TUSK_PATH=%~dp0

if %PHP_COMMAND% == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%TUSK_PATH%tusk" %*

@endlocal

