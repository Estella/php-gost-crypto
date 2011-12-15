<?php

// gostSignBlock  ( string $sB64Data, string $ sIDCert, long bSignDetached = 1 );
// sB64Data - ������ ��� ������� �������������� � Base64
// sIDCert - �� ����������� ������� (CN ��� Thumb)
// bSignDetached - (true - ������� ���������� �� ������������� ������,  false - ������� �������� ������������� ������)
// ������������ ��������: 
// � ������ ������ - string ���������� �������� ������� � ��������� Base64
// � ������ ������� - bool false. ������� ������ ����� ������ ������ ������� gostGetLastError()

// if (function_exists('gostSignBlock')) echo 'IN: '.@$argv[1].' -> FUNC:'.gostSignBlock('dGV4dCBmb3IgdGVzdA==', '�������� ������ ���������').'.';
// else 	echo 'Func not found!';

// first sign
//if (function_exists('gostSignBlock')) echo 'IN: '.@$argv[1].' -> FUNC:'.gostSignBlock('dGV4dCBmb3IgdGVzdA==', '�������� ������ ���������', 0).'.';
//else 	echo 'Func not found!';

$pflog = gostPathFileLog ('logfile.txt');
echo $pflog; 
echo "\r\n";

// second sign
if (function_exists('gostSignBlock')) echo 'IN: '.@$argv[1].' -> FUNC:'.gostSignBlock(
'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', 
// '���������� ���� ���������', 0).'.';
'29d95ebe67a0bcbdc0f80e25f402e1be6114520b', 0).'.';

else 	echo 'Func not found!';
echo "\nLastError: ".gostGetLastError()."\n";

// third sign
if (function_exists('gostSignBlock')) echo 'IN: '.@$argv[1].' -> FUNC:'.gostSignBlock(
'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', 
'������ ������� �������', 0).'.';
else 	echo 'Func not found!';
echo "\nLastError: ".gostGetLastError()."\n";
?>