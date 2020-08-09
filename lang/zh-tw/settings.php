<?php
/**
 * DokuWiki Mikio Template English Language for Configuration
 *
 * @link    http://dokuwiki.org/template:mikio
 * @author  James Collins <james.collins@outlook.com.au>
 * @license GPLv2 (http://www.gnu.org/licenses/gpl-2.0.html)
 */
$lang['iconTag']                = 'Tag to use to for icon tags. The default is \'icon\' but this can be changed if it conflicts with any plugins. Set to blank to disable icon tags';

$lang['customTheme']            = 'Use a Mikio subtheme installed into the themes directory. Leave blank for the detault styling';

$lang['navbarUseTitleIcon']     = 'Show the wiki image in the menubar title. Will search for an image named logo (png/jpg/gif/svg) in the root or :wiki: namespace or the template/subtheme images directory';
$lang['navbarUseTitleText']     = 'Show the wiki name in the menubar title. Will also hide the tagline if disabled';
$lang['navbarUseTaglineText']   = 'Show the wiki tag line in the menubar title';
$lang['navbarCustomMenuText']   = 'Allows custom menus in the menubar. The format is url|title seperated by semicolons';

$lang['navbarDWMenuType']       = 'Show Dokuwiki menus as icons, text or both';
$lang['navbarDWMenuCombine']    = 'Show Dokuwiki menus as seperate items, a category dropdown or combined in a single menu';

$lang['navbarPosLeft']          = 'Menu to show on the left of the navbar';
$lang['navbarPosMiddle']        = 'Menu to show in the middle of the navbar';
$lang['navbarPosRight']         = 'Menu to show on the right of the navbar';
$lang['navbarShowSub']          = 'Show the sub navbar. This menu displays data from the submenu page searching from the current namespace to the root. Recommended to use lists for menu items';

$lang['searchButton']           = 'Search button type';

$lang['heroTitle']              = 'Show pages in the hero title style';
$lang['heroImagePropagation']   = 'Search for hero images in the parent namespace if no hero image is found';

$lang['tagsConsolidate']        = 'Consolidate page tags to hero, content header or sidebar';

$lang['breadcrumbHideHome']     = 'Hide breadcrumb block on home page';
$lang['breadcrumbPosition']     = 'Position of the breadcrumb bar on the page';
$lang['breadcrumbPrefix']       = 'Change the breadcrumb prefix text';
$lang['breadcrumbPrefixText']   = 'Replacement breadcrumb prefix text. Use can use an image by uploading breadcrumb.png to the templates images directory';
$lang['breadcrumbSep']          = 'Change the breadcrumb seperator text';
$lang['breadcrumbSepText']      = 'Replacement breadcrumb seperator text. Use can use an image by uploading breadcrumb.png to the templates images directory';;
$lang['breadcrumbHome']         = 'Change the text or icon used for the Home page in the breadcrumb bar';
$lang['breadcrumbShowLast']     = 'Only show the last amount of breadcrumbs. Set to 0 to show all';

$lang['sidebarShowLeft']        = 'Show the left sidebar';
$lang['sidebarLeftRow1']        = 'Content to show in the first row on the left sidebar';
$lang['sidebarLeftRow2']        = 'Content to show in the second row on the left sidebar';
$lang['sidebarLeftRow3']        = 'Content to show in the third row on the left sidebar';
$lang['sidebarLeftRow4']        = 'Content to show in the forth row on the left sidebar';
$lang['sidebarShowRight']       = 'Show the right sidebar';

$lang['tocFull']                = 'Show the TOC as a full height element';

$lang['pageToolsFloating']      = 'When to show the floating page toolbar';
$lang['pageToolsFooter']        = 'When to show the footer page toolbar';

$lang['footerCustomMenuText']   = 'Allows custom menus in the footer. The format is url|title seperated by ;';
$lang['footerSearch']           = 'Show the search bar in the footer';
$lang['footerInPage']           = 'Show the wiki footer in the article. Bottom footer remains on page';

$lang['licenseType']            = 'Show the footer license as none, badges or buttons';
$lang['licenseImageOnly']       = 'Show the footer license as images only';

$lang['includePageUseACL']      = 'Respect ACL when including pages';
$lang['includePagePropagate']   = 'Search higher namespaces when including pages';
?>