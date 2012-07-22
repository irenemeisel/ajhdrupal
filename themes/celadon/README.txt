Celadon Installation and Usage Notes

** INSTALLATION **
1. Upload and enable the Skinr module (http://drupal.org/project/skinr).
2. Upload Fusion (http://drupal.org/project/fusion) to your themes folder.
3. Upload Celadon to your themes folder.
4. Enable Fusion (required to utilize Skinr classes).
5. Enable Celadon and select it as the default theme.


** NOTES **
1. CSS customizations and overrides should be added to local.css (rename local-sample.css in the CSS folder to activate).
2. Grant desired permissions for the search module to activate the theme's built-in search functionality.
3. Sidebar blocks should be added to the "Sidebar First" region.
4. Sidebar block colors can be selected on the block configuration page for each sidebar block. You have a choice of none (default), blue, green, red, orange, purple, or black. Each block can be configured separately.
5. A template is available for blog-style nodes. Follow these steps to activate this template:
   - Create a new content type that will use this template (you can also use an existing content type)
   - In the theme's templates folder, make a copy of node-blogstyle.tpl.php
   - Rename the copy by changing "blogstyle" to the machine name of your content type i.e. node-myblog.tpl.php
   - Clear cache at admin/settings/performance
   - This procedure can be repeated for as many content types that you'd like to have use this template.
6. Source PSD files for the header and logo can be found in the sources folder. Modify as needed then overwrite existing files.
