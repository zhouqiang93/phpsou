@cls
@ SET TITLE=��PhpSou��Դ��������sphinx֧�֡�
@title %TITLE%
@ECHO %TITLE%

@set path=.;bin;%path%
@ECHO. && @ECHO ��������
@bin\indexer -c D:\sphinx\bin\sphinx.conf test1 --rotate
@ECHO. &&@ECHO ��������
@bin\searchd -c D:\sphinx\bin\sphinx.conf

