<?
/* dm_pushrandomfile.php v1.00

	a php script that chooses a random file from the current directory and 
	pushes it through to the client. useful for grabbing random files (images)
	from plain html/css scripts
	
	part of the (dm_) dutchmoney script library
	more information/downloads available at: http://lib.dutchmoney.com
	
	distributed under the MIT license, terms:
	copyright (c) 2007 dutchmoney llc
	
	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in
	all copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	THE SOFTWARE.


	hahaha...oldie but a goodie. 
*/

// we start by defining an arry of mime types keyed by file extension
$mimearry = array(
	'aif' => 'audio/x-aiff',
	'aiff' => 'audio/x-aiff',
	'asf' => 'video/x-ms-asf',
	'asr' => 'video/x-ms-asf',
	'asx' => 'video/x-ms-asf',
	'au' => 'audio/basic',
	'avi' => 'video/x-msvideo',
	'bin' => 'application/octet-stream',
	'bmp' => 'image/bmp',
	'c' => 'text/plain',
	'class' => 'application/octet-stream',
	'css' => 'text/css',
	'csv' => 'text/comma-separated-values',
	'dcr' => 'application/x-director',
	'dir' => 'application/x-director',
	'dll' => 'application/x-msdownload',
	'doc' => 'application/msword',
	'dot' => 'application/msword',
	'eps' => 'application/postscript',
	'exe' => 'application/octet-stream',
	'gif' => 'image/gif',
	'gtar' => 'application/x-gtar',
	'gz' => 'application/x-gzip',
	'h' => 'text/plain',
	'hqx' => 'application/mac-binhex40',
	'hta' => 'application/hta',
	'htc' => 'text/x-component',
	'htm' => 'text/html',
	'html' => 'text/html',
	'ico' => 'image/x-icon',
	'jpe' => 'image/jpeg',
	'jpeg' => 'image/jpeg',
	'jpg' => 'image/jpeg',
	'js' => 'application/x-javascript',
	'latex' => 'application/x-latex',
	'lha' => 'application/octet-stream',
	'lsf' => 'video/x-la-asf',
	'lsx' => 'video/x-la-asf',
	'lzh' => 'application/octet-stream',
	'm3u' => 'audio/x-mpegurl',
	'mdb' => 'application/x-msaccess',
	'mid' => 'audio/mid',
	'midi' => 'audio/mid',
	'mov' => 'video/quicktime',
	'mp2' => 'video/mpeg',
	'mp3' => 'audio/mpeg',
	'mpa' => 'video/mpeg',
	'mpe' => 'video/mpeg',
	'mpeg' => 'video/mpeg',
	'mpg' => 'video/mpeg',
	'mpv2' => 'video/mpeg',
	'pdf' => 'application/pdf',
	'png' => 'image/png',
	'pps' => 'application/vnd.ms-powerpoint',
	'ppt' => 'application/vnd.ms-powerpoint',
	'ps' => 'application/postscript',
	'qt' => 'video/quicktime',
	'ra' => 'audio/x-pn-realaudio',
	'ram' => 'audio/x-pn-realaudio',
	'rmi' => 'audio/mid',
	'rtf' => 'application/rtf',
	'rtx' => 'text/richtext',
	'sit' => 'application/x-stuffit',
	'snd' => 'audio/basic',
	'svg' => 'image/svg+xml',
	'swf' => 'application/x-shockwave-flash',
	'tgz' => 'application/x-compressed',
	'tif' => 'image/tiff',
	'tiff' => 'image/tiff',
	'tsv' => 'text/tab-separated-values',
	'txt' => 'text/plain',
	'vcf' => 'text/x-vcard',
	'wav' => 'audio/x-wav',
	'wmf' => 'application/x-msmetafile',
	'wps' => 'application/vnd.ms-works',
	'wri' => 'application/x-mswrite',
	'wrl' => 'x-world/x-vrml',
	'wrz' => 'x-world/x-vrml',
	'xaf' => 'x-world/x-vrml',
	'xls' => 'application/vnd.ms-excel',
	'xlt' => 'application/vnd.ms-excel',
	'xml' => 'text/xml',
	'xof' => 'x-world/x-vrml',
	'z' => 'application/x-compress',
	'zip' => 'application/zip'
);

// a quick script to choose a random file from any directory
// call using getRandomFile( [dirName as string] )
function getRandomFile($dirName) {
	if ($openedDir = opendir($dirName)) {
		$fileCounter = 0;
		while (false !== ($file = readdir($openedDir))) {
			if (substr($file,0,1) != "." && !is_dir($file) && $file != basename($_SERVER['PHP_SELF'])) {
				if ($fileCounter == 0) {
					$fileArray = array($file);
				} else {
					$fileArray[] = $file;
				}
				++$fileCounter;
			}
		}
		closedir($openedDir);
	}
	if ($fileCounter > 0) { 
		shuffle($fileArray);
		return($fileArray[0]);
	}
}

// choose a file from this directory
$chosenFile = getRandomFile('.');
// grab the extension
$chosenFileExt = ltrim(strstr($chosenFile,'.'),'.');
// set the mime based on the extension
if ($mimearry[$chosenFileExt]) {
	$chosenFileMime = $mimearry[$chosenFileExt];
} else {
	$chosenFileMime = 'application/octet-stream';
}

// now we send headers and write out the file contents to the browser
$expiresStr = gmdate("D, d M Y H:i:s", time() + 150) . " GMT";
 
header("Expires: " . $expiresStr);
header("Cache-Control: max-age=150, must-revalidate");
header("Content-Type: $chosenFileMime");
header("Content-Length: " . filesize($chosenFile));
$fileStream = fopen($chosenFile, 'rb');
fpassthru($fileStream);
fclose($fileStream);
?>