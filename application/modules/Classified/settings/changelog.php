<?php
/**
 * SocialEngine
 *
 * @category   Application_Extensions
 * @package    Classified
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.com/license/
 * @version    $Id: changelog.php 10111 2013-10-31 05:05:49Z andres $
 * @author     Jung
 */
return array(
  '4.7.0' => array(
    'externals/images/*' => 'Optimized images',
    'views/scripts/index/create.tpl' => 'Minimized Autocompleter.js',
    'views/scripts/index/edit.tpl' => 'Minimized Autocompleter.js',
    'settings/my.sql' => 'Incremented version',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
  ),
  '4.5.0' => array(
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/create.tpl' => 'Setting active class on main menu',
    'views/scripts/index/manage.tpl' => 'Setting active class on main menu',
    'views/scripts/index/view.tpl' => 'Setting active class on main menu',
    'widgets/browse-menu/Controller.php' => 'Hides menu if only one item',
  ),
  '4.3.0' => array(
    'controllers/IndexController.php' => 'Added new pages to layout editor',
    'externals/styles/main.css' => 'Added new pages to layout editor',
    'settings/changelog.php' => 'Incremented version',
    'settings/install.php' => 'Added new pages to layout editor',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/create.tpl' => 'Added new pages to layout editor',
    'views/scripts/index/manage.tpl' => 'Added new pages to layout editor',
    'widgets/browse-menu/Controller.php' => 'Added new pages to layout editor',
    'widgets/browse-search/Controller.php' => 'Added new pages to layout editor',
  ),
  '4.2.8' => array(
    '/application/languages/en/classified.csv' => 'Add TinyMCE',
    'externals/styles/main.css' => 'Add TinyMCE',
    'Form/Admin/Settings/Level.php' => 'Add TinyMCE',
    'Form/Create.php' => 'Add TinyMCE',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.2.7-4.2.8.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.2.7' => array(
    'Form/Create.php' => 'Fixes a few XSS vulnerabilities with the Tags and Profile name fields',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.2.5' => array(
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/admin-manage/index.tpl' => 'Add support links',
  ),
  '4.2.4' => array(
    'settings/content.php' => 'Move Classified Browse Quick Menu to Classifieds in Available blocks in Layout Editor',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.2.3' => array(
    '/application/languages/en/classified.csv' => 'Rewrite Profile viewing and Profile Commenting Options Descriptions',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.2.0' => array(
    'Form/Create.php' => 'Added token to help prevent spam; fixed issue with enabling links; fixed escaping issue',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/index.tpl' => 'Fixed issue with enabling links',
    'views/scripts/index/manage.tpl' => 'Fixed issue with enabling links',
    'views/scripts/index/view.tpl' => 'Hiding report/share options when not available; Fixed issue with enabling links',
  ),
  '4.1.8p1' => array(
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_FancyUpload.tpl' => 'Added cross domain policy file for CDN support',
  ),
  '4.1.8' => array(
    '/application/languages/en/classified.csv' => 'Added phrases',
    'Api/Core.php' => 'Removed deprecated code',
    'controllers/IndexController.php' => 'Added pages to the layout editor; fixed issue with filtering fields',
    'controllers/PhotoController.php' => 'Fixed issue with photo duplication',
    'externals/.htaccess' => 'Updated with far-future expires headers for static resources',
    'externals/styles/main.css' => 'Style tweaks for layout editor',
    'Model/Classified.php' => 'Fixed issue with photo duplication',
    'settings/changelog.php' => 'Incremented version',
    'settings/content.php' => 'Added pages to the layout editor',
    'settings/install.php' => 'Added pages to the layout editor',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_FancyUpload.tpl' => 'Added static base URL for CDN support',
    'views/scripts/admin-settings/categories.tpl' => 'Added static base URL for CDN support',
    'views/scripts/index/create.tpl' => 'Added static base URL for CDN support',
    'views/scripts/index/edit.tpl' => 'Added static base URL for CDN support',
    'views/scripts/index/index.tpl' => 'Added pages to the layout editor',
    'views/scripts/index/manage.tpl' => 'Added static base URL for CDN support',
    'views/scripts/index/view.tpl' => 'Added static base URL for CDN support; Added pages to the layout editor',
    'widgets/browse-menu-quick/Controller.php' => 'Added',
    'widgets/browse-menu-quick/index.tpl' => 'Added',
    'widgets/browse-menu/Controller.php' => 'Added',
    'widgets/browse-menu/index.tpl' => 'Added',
    'widgets/browse-search/Controller.php' => 'Added',
    'widgets/browse-search/index.tpl' => 'Added',
    'widgets/list-popular-classifieds/index.tpl' => 'Added static base URL for CDN support',
    'widgets/list-recent-classifieds/index.tpl' => 'Added static base URL for CDN support',
    'widgets/profile-classifieds/index.tpl' => 'Added static base URL for CDN support',
  ),
  '4.1.7' => array(
    'Api/Core.php' => 'Merging methods from api to dbtables',
    'controllers/AdminManageController.php' => 'Merging methods from api to dbtables',
    'controllers/AdminSettingsController.php' => 'Merging methods from api to dbtables',
    'controllers/IndexController.php' => 'Minor optimizations; Fixed issue with migrations checks',
    'controllers/PhotoController.php' => 'Minor optimizations',
    'Form/Create.php' => 'Minor optimizations',
    'Model/Category.php' => 'Minor optimizations',
    'Model/Classified.php' => 'Minor optimizations; Fixed issue with deleting photos',
    'Model/DbTable/Categories.php' => 'Merging methods from api to dbtables',
    'Model/DbTable/Classifieds.php' => 'Merging methods from api to dbtables',
    'Model/Photo.php' => 'Minor optimizations; Fixed issue with deleting photos',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/index.tpl' => 'Fixed pagination issue',
    'widgets/profile-classifieds/Controller.php' => 'Merging methods from api to dbtables',
  ),
  '4.1.6' => array(
    'controllers/IndexController.php' => 'Fixed issue with missing image for migrated classifieds',
    'Model/Classified.php' => 'Fixed issue with missing image for migrated classifieds',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/view.tpl' => 'Added missing alt text to icon',
  ),
  '4.1.4' => array(
    'controllers/IndexController.php' => 'Does not try to populate privacy options if they do not exist on edit page',
    'externals/styles/main.css' => 'Fixed typo',
    'externals/styles/mobile.css' => 'Added',
    'Form/Search.php' => 'Added CSS class for mobile',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version; Inserts menu item for mobile',
    'settings/my-upgrade-4.1.3-4.1.4.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.1.3' => array(
    'Model/Album.php' => 'Fixed incorrect route',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.1.2' => array(
    'controllers/IndexController.php' => 'Added return URL param to edit page',
    'settings/changelog.php' => 'Incremented version',
    'settings/content.php' => 'Added configuration options to widgets',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.1.1-4.1.2.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/manage.tpl' => 'Tweaked URLs',
    'views/scripts/index/view.tpl' => 'Added options to view page',
    'widgets/list-popular-classifieds/Controller.php' => 'Added configuration options',
    'widgets/list-popular-classifieds/index.tpl' => 'Styles are now generic',
    'widgets/list-recent-classifieds/Controller.php' => 'Added configuration options',
    'widgets/list-recent-classifieds/index.tpl' => 'Styles are now generic',
  ),
  '4.1.1' => array(
    'controllers/AdminSettingsController.php' => 'Newly created categories gets the correct owner id',
    'externals/.htaccess' => 'Added keywords; removed deprecated code',
    'externals/styles/main.css' => 'RTL improvements',
    'Model/Photo.php' => 'Changes for storage system modifications',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.1.0-4.1.1.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/admin-settings/categories.tpl' => 'Hides the owner id column when viewing categories',
  ),
  '4.1.0' => array(
    '/application/languages/en/classified.csv' => 'Fixed phrases with stray double-quotes; added phrases',
    'Api/Core.php' => 'Removed deprecated code',
    'controllers/AdminLevelController.php' => 'Notice on form save',
    'controllers/AdminManageController.php' => 'Fixes issue with deletion',
    'controllers/AdminSettingsController.php' => 'Notice on form save',
    'controllers/IndexController.php' => 'Removed archive list, fixed pagination',
    'externals/styles/main.css' => 'Added styles',
    'Form/Create.php' => 'Fixed issue with disabled privacy options',
    'Form/Delete.php' => 'Added',
    'Plugin/Job/Maintenance/RebuildPrivacy.php' => 'Added',
    'Plugin/Task/Maintenance/RebuildPrivacy.php' => 'Removed',
    'settings/changelog.php' => 'Incremented version',
    'settings/content.php' => 'Added pagination/item count limits to widgets',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.3-4.0.4.sql' => 'Backwards compatibility fix for tasks modifications',
    'settings/my-upgrade-4.0.5-4.1.0.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/admin-fields/index.tpl' => 'Added classified question description',
    'views/scripts/admin-manage/deleteselected.tpl' => 'Removed',
    'views/scripts/admin-manage/index.tpl' => 'Fixes issue with deletion',
    'views/scripts/index/edit.tpl' => 'Fixed issues with errors not showing',
    'views/scripts/index/delete.tpl' => 'Removed navigation',
    'views/scripts/index/index.tpl' => 'Fixed UTF-8 truncation issue, fixed pagination',
    'views/scripts/index/list.tpl' => 'Removed',
    'views/scripts/index/manage.tpl' => 'Added filter form, fixed pagination',
    'views/scripts/index/view.tpl' => 'Differentiating styles from blogs',
    'widgets/list-popular-classifieds/Controller.php' => 'Added',
    'widgets/list-popular-classifieds/index.tpl' => 'Added',
    'widgets/list-recent-classifieds/Controller.php' => 'Added',
    'widgets/list-recent-classifieds/index.tpl' => 'Added',
    'widgets/profile-classifieds/Controller.php' => 'Added pagination/item count limit',
    'widgets/profile-classifieds/index.tpl' => 'Added pagination/item count limit',
  ),
  '4.0.5' => array(
    'Api/Core.php' => 'Added support for filtering by having photo',
    'controllers/IndexController.php' => 'Added registered privacy type',
    'externals/images/nophoto_classified_thumb_icon.png' => 'Added',
    'externals/styles/main.css' => 'Added styles for browse page',
    'Form/Admin/Settings/Level.php' => 'Added registered privacy type',
    'Form/Create.php' => 'Added registered privacy type',
    'Form/Search.php' => 'Improved field search functions',
    'Model/Classified.php' => 'Changed search indexing columns',
    'Plugin/Task/Maintenance/RebuildPrivacy.php' => 'Added idle support; added registered privacy type',
    'settings/changelog.php' => 'Added',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.4-4.0.5.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/index/create.tpl' => 'Added support for dependent fields',
    'views/scripts/index/edit.tpl' => 'Added support for dependent fields',
    'views/scripts/index/index.tpl' => 'Improved field search functions; added support for dependent fields',
  ),
  '4.0.4' => array(
    'controllers/IndexController.php' => 'Added localization to the archive list; menus now use the menu system',
    'externals/styles/main.css' => 'Improved RTL support; style tweak',
    'Form/Create.php' => 'Removing deprecated code',
    'Form/Edit.php' => 'Removing deprecated code',
    'Model/Classified.php' => 'Adding slug to view url',
    'Plugin/Menus.php' => 'Added; menus now use the menu system',
    'Plugin/Task/Maintenance/RebuildPrivacy.php' => 'Added to fix privacy issues in the feed',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.3-4.0.4.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_FancyUpload.tpl' => 'Added missing translation',
    'views/scripts/_formButtonCancel.tpl' => 'Removing deprecated code',
    'views/scripts/admin-settings/delete.tpl' => 'Fixed incorrect route',
    'views/scripts/index/delete.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/edit.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/index.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/manage.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/list.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/success.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'views/scripts/index/view.tpl' => 'Menus now use the menu system; removing deprecated routes',
    'widgets/profile-classifieds/index.tpl' => 'Menus now use the menu system; removing deprecated routes',
    '/application/languages/en/classified.csv' => 'Added phrases',
  ),
  '4.0.3' => array(
    'Api/Core.php' => 'Fixed bug in filtering by fields',
    'controllers/AdminFieldsController.php' => 'Fixed missing elements in edit field form',
    'controllers/IndexController.php' => 'Fixed bug in filtering by fields; fixed activity privacy bug; added correct locale date format to archive list',
    'Form/Create.php' => 'Fixed handling on auth elements',
    'Model/Classified.php' => 'Fixed bug where classifieds would not show up in search',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.2-4.0.3.sql' => 'Added',
    'settings/my.sql' => 'Permissions tweaks; incremented version',
    'views/scripts/admin-manage/index.tpl' => 'Added missing translation; added correct date format',
    'views/scripts/index/create.tpl' => 'Fix for unlimited quotas',
    'views/scripts/index/edit.tpl' => 'Fixed bug in fields; added missing translation',
    'views/scripts/index/manage.tpl' => 'Fix for unlimited quotas',
    '/application/languages/en/classified.csv' => 'Added phrases',
  ),
  '4.0.2' => array(
    'controllers/AdminLevelController.php' => 'Various level settings fixes and enhancements',
    'controllers/IndexController.php' => 'Fixed problem preventing saving of fields',
    'Form/Create.php' => 'Fixed problem preventing saving of fields',
    'Form/Admin/Level.php' => 'Moved',
    'Form/Admin/Settings/Level.php' => 'Various level settings fixes and enhancements',
    'Form/Custom/Fields.php' => 'Fixed problem preventing saving of fields',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.1-4.0.2.sql' => 'Added',
    'settings/my.sql' => 'Various level settings fixes and enhancements',
    'views/scripts/index/view.tpl' => 'Added nl2br on body',
  ),
  '4.0.1' => array(
    'Api/Core.php' => 'Better cleanup of temporary files; adjustment for trial',
    'controllers/AdminLevelController.php' => 'Fixed problem in level select',
    'controllers/IndexController.php' => 'Fixed bug with public viewing classifieds',
    'Form/Custom/Fields.php' => 'Adjustment for trial',
    'Model/Classified.php' => 'Better cleanup of temporary files',
    'Plugin/Core.php' => 'Query optimization',
    'settings/manifest.php' => 'Incremented version',
    'views/scripts/admin-level/index.tpl' => 'Fixed problem in level select',
    'views/scripts/admin-settings/delete.tpl' => 'Fixed typo',
  ),
) ?>
