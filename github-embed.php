<?php
/*  
Plugin Name: Github Gist Embed
Plugin URI: http://stuartduff.com/
Version: v1.0.0
Author: <a href="http://stuartduff.com/">Stuart Duff</a>
Description: This plugin adds the ability to embed github gists by adding their URL to your WordPress content editor.

Copyright 2013  Stuart Duff  (email : no-reply@stuartduff.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once( 'classes/class-github-gist-embed.php' );

global $github_gist_embed;
$github_gist_embed = new Github_Gist_Embed( __FILE__ );