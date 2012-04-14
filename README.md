GlotPress & LimeSurvey Integration
==================================

This repository includes files to help in making [GlotPress](http://glotpress.org/) use the [LimeSurvey](http://www.limesurvey.org/) users.

Installation
------------

 1. Just put the all the three files located in the root of this repository in the GlotPress installation root directory.
 2. Modify `gp-config.php` - must edits: Database configuration, especially `CUSTOM_USER_TABLE` constant below in the file for the LimeSurvey Users table name.
 3. Install GlotPress. Now, for permissions, do either of these:
  1. Make _all_ superadmins in LimeSurvey administrators in GlotPress - put the attached `permission.php` in `plugins` folder and uncomment the last line.
  2. Make _only some_ people in LimeSurvey administrators in GlotPress - run this query - `INSERT INTO gp_permissions (id,  user_id, action, object_type, object_id) VALUES (NULL , '1', 'admin', NULL , NULL);` (assuming `gp_` is the prefix you've chosen) where the corresponding `user_id` is the user id in `lime_users` table whom you want to make the admin in GlotPress.


Hacking
-------

The modifications to the original classes were done on GlotPress r683.

 1. Refer to this [commit](https://github.com/GautamGupta/GlotPress-LimeSurvey-Integration/commit/6021e34fa494a44933e684d4a95552d6683998b3) to see how the core files were modified to suit the needs.
 2. Refer to this [blog post](http://gaut.am/integrating-glotpress-limesurvey-user-tables/) to know more.

Contributing
------------

 1. Fork it.
 2. Create a branch (`git checkout -b gp-ls-integration`)
 3. Commit your changes (`git commit -m "Fixed X Bug/Added X Enhancement"`)
 4. Push to the branch (`git push origin gp-ls-integration`)
 5. Create an Issue with a link to your branch
 6. Enjoy a refreshing Diet Coke and wait