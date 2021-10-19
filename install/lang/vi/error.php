<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcreatedboninstall'] = '<p>Không thể tạo CSDL.</p>
<p>CSDL được chỉ định không tồn tại và người dùng không được phép tạo CSDL.</p>
<p>Quản trị trang nên xác minh thiết lập CSDL.</p>';
$string['cannotcreatelangdir'] = 'Không thể tạo thư mục lang';
$string['cannotcreatetempdir'] = 'Không thể tạo thư mục tạm thời';
$string['cannotdownloadcomponents'] = 'Không thể tải component';
$string['cannotdownloadzipfile'] = 'Không thể tải tập tin ZIP';
$string['cannotfindcomponent'] = 'Không thấy component';
$string['cannotsavemd5file'] = 'Không thể lưu tệp md5';
$string['cannotsavezipfile'] = 'Không thể lưu tập tin ZIP';
$string['cannotunzipfile'] = 'Không thể giải nén tập tin';
$string['componentisuptodate'] = 'Component đang ở tình trạng mới nhất';
$string['dmlexceptiononinstall'] = '<p>Lỗi CSDL xảy ra [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['downloadedfilecheckfailed'] = 'Kiểm tra tệp tải về bất thành';
$string['invalidmd5'] = 'Biến kiểm tra sai - thử lại';
$string['missingrequiredfield'] = 'Thiếu một số mục bắt buộc';
$string['remotedownloaderror'] = '<p>Tải về thành phần máy chủ của bạn bất thành. Hãy xác minh các thiết lập proxy; bộ mở rộng PHP cURL được khuyến nghị.<p>
<p>Bạn phải tải tệp <a href="{$a->url}">{$a->url}</a> thủ công, chép nó vào "{$a->dest}" trong máy chủ của mình và giải nén nó.</p>';
$string['wrongdestpath'] = 'Đường dẫn sai';
$string['wrongsourcebase'] = 'Nền URL nguồn sai';
$string['wrongzipfilename'] = 'Tên tệp ZIP sai';
